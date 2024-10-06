const taskInput = document.getElementById("task");
const nameInput = document.getElementById("name");
const priorityInput = document.getElementById("priority");
const deadlineInput = document.getElementById("deadline");
const addTaskButton = document.getElementById("add-task");
const saveTasksButton = document.getElementById("save-tasks");
const taskList = document.getElementById("task-list");

// Load tasks from local storage when the page loads
window.onload = function () {
    const tasks = JSON.parse(localStorage.getItem("tasks")) || [];
    tasks.forEach(task => {
        addTaskToDOM(task);
    });
}

function addTaskToDOM(task) {
    const taskItem = document.createElement("div");
    taskItem.classList.add("task");
    taskItem.innerHTML = `
        <p>Task: ${task.task}</p>
        <p>Assigned by: ${task.name}</p>
        <p>Assigned on: ${task.date}</p>
        <p>Priority: ${task.priority}</p>
        <p>Deadline: ${task.deadline}</p>
        <p>Status:
  	<select class="status">
    	<option value="completed" ${task.status === 'completed' ? 'selected' : ''}>Completed</option>
    	<option value="in_progress" ${task.status === 'in_progress' ? 'selected' : ''}>In Progress</option>
    	<option value="not_yet" ${task.status === 'not_yet' ? 'selected' : ''}>Not Yet</option>
  	</select></p>
	<button class="delete-task" style="padding:0 12px;border:1px solid black">Delete</button>
        <button class="edit-task" style="padding:0 12px;border:1px solid black">Edit</button>
	<button class="mail-task" style="padding:0 12px;border:1px solid black;margin-right:5px">Mail</button>
    `;


// Change color of task if status is completed
    const statusInput = taskItem.querySelector('.status');
    if (task.status.toLowerCase() === 'completed') {
        taskItem.style.backgroundColor = 'lightgreen';
    }

    // Add event listener to status input
    statusInput.addEventListener('input', () => {
        if (statusInput.value.toLowerCase() === 'completed') {
            taskItem.style.backgroundColor = 'lightgreen';
        } else {
            taskItem.style.backgroundColor = '#f4f4f4';
        }
    });



   // Find the correct position to insert the task based on its deadline
    const allTasks = document.querySelectorAll('.task');
    let inserted = false;
    for (let i = 0; i < allTasks.length; i++) {
        const deadline = allTasks[i].querySelector("p:nth-child(5)").textContent.split(": ")[1];
        if (new Date(task.deadline) < new Date(deadline)) {
            taskList.insertBefore(taskItem, allTasks[i]);
            inserted = true;
            break;
        }
    }
    // If the task has the latest deadline, append it to the end
    if (!inserted) {
        taskList.appendChild(taskItem);
    }
}

addTaskButton.addEventListener("click", () => {
    const task = taskInput.value;
    const name = nameInput.value;
    const currentDate = new Date().toDateString();
    const priority = priorityInput.value;
    const deadline = deadlineInput.value;
    if (task.trim() === "" || deadline === "" || name.trim() === "") {
        alert("Please enter both name and task, and select an upcoming date for the deadline.");
        return;
    }

    const selectedDate = new Date(deadline);

    if (selectedDate <= new Date()) {
        alert("Please select an upcoming date for the deadline.");
        return;
    }

    const taskData = {
        task,
        name,
        date: currentDate,
        priority,
        deadline,
        status: "" // Initialize status as empty string
    };

    addTaskToDOM(taskData);

    // Save task to local storage
    const tasks = JSON.parse(localStorage.getItem("tasks")) || [];
    tasks.push(taskData);
    localStorage.setItem("tasks", JSON.stringify(tasks));

    taskInput.value = "";
    nameInput.value = "";
    priorityInput.value = "top";
    deadlineInput.value = "";
});

taskList.addEventListener("click", (event) => {
    const taskItem = event.target.parentElement;
    if (event.target.classList.contains("delete-task")) {
        const confirmation = confirm("Are you sure you want to delete this task?");
        if (confirmation) {
            taskItem.remove();

            // Remove task from local storage
            const tasks = JSON.parse(localStorage.getItem("tasks")) || [];
            const index = tasks.findIndex(task => task.task === taskItem.querySelector("p").textContent.split(": ")[1]);
            if (index !== -1) {
                tasks.splice(index, 1);
                localStorage.setItem("tasks", JSON.stringify(tasks));
            }
        }
    } else if (event.target.classList.contains("edit-task")) {
        const taskText = taskItem.querySelector("p");
        const newText = prompt("Enter new task:");
        if (newText !== null) {
            taskText.textContent = `Task: ${newText}`;
        }
    }else if (event.target.classList.contains("mail-task")) {
        // Open mail form
        openMailForm(taskItem);
    }
});

function openMailForm(taskItem) {
    // Create backdrop to overlay the page
    const backdrop = document.createElement("div");
    backdrop.classList.add("backdrop");
    document.body.appendChild(backdrop);

    // Create modal container for mail form
    const mailFormModal = document.createElement("div");
    mailFormModal.classList.add("mail-form-modal");
    mailFormModal.innerHTML = `
        <div class="mail-form">
            <button class="close-btn">&times;</button>
            <h2>Send Mail</h2>
            <label for="from">From:</label>
            <input type="email" id="from" placeholder="Your email address">

            <label for="to">To:</label>
            <input type="email" id="to" placeholder="Recipient's email address">

            <label for="comments">Comments:</label>
            <textarea id="comments" placeholder="Enter your comments"></textarea>

            <button id="send-mail">Send</button>
	    <button id="set-reminder">Set Reminder</button>
        </div>
    `;

    const closeBtn = mailFormModal.querySelector(".close-btn");
    closeBtn.addEventListener("click", () => {
        // Close the mail form modal
        mailFormModal.remove();
        backdrop.remove();
    });
const setReminderButton = mailFormModal.querySelector("#set-reminder");
    setReminderButton.addEventListener("click", () => {
        const deadlineText = taskItem.querySelector("p:nth-child(5)").textContent.split(": ")[1];
        const deadlineDate = new Date(deadlineText);
        // Calculate reminder date as two days before the deadline
        const reminderDate = new Date(deadlineDate);
        reminderDate.setDate(deadlineDate.getDate() - 2);

        // Call function to send the mail
        sendMail(
            mailFormModal.querySelector("#from").value,
            mailFormModal.querySelector("#to").value,
            "Reminder: Regarding Task",
            mailFormModal.querySelector("#comments").value
        );

        // Close the mail form modal
        mailFormModal.remove();
        backdrop.remove();
    });
    const sendMailButton = mailFormModal.querySelector("#send-mail");
    sendMailButton.addEventListener("click", () => {
        // Send mail functionality
        const from = mailFormModal.querySelector("#from").value;
        const to = mailFormModal.querySelector("#to").value;
        const comments = mailFormModal.querySelector("#comments").value;

        // Validate form inputs
        if (from.trim() === "" || to.trim() === "" || comments.trim() === "") {
            alert("Please fill in all fields.");
            return;
        }

        const subject = encodeURIComponent("Regarding Task");
    	const body = encodeURIComponent(comments);
    	const mailtoLink = `mailto:${to}?subject=${subject}&body=${body}`;

    // Open default email client
    window.location.href = mailtoLink;

    // Close the mail form modal
    mailFormModal.remove();
    backdrop.remove();
});
    document.body.appendChild(mailFormModal);
}
// Function to send mail
function sendMail(from, to, subject, body) {
    const mailtoLink = `mailto:${to}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    window.location.href = mailtoLink;
}


saveTasksButton.addEventListener("click", () => {
    // Update status for each task in local storage
    const tasks = Array.from(document.querySelectorAll('.task'));
    const tasksData = tasks.map(task => {
        const taskElement = task.querySelector("p");
        const statusElement = task.querySelector(".status");
        return {
            task: taskElement.textContent.split(": ")[1],
            name: taskElement.nextElementSibling.textContent.split(": ")[1],
            date: taskElement.nextElementSibling.nextElementSibling.textContent.split(": ")[1],
            priority: taskElement.nextElementSibling.nextElementSibling.nextElementSibling.textContent.split(": ")[1],
            deadline: taskElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent.split(": ")[1],
            status: statusElement.value // Get the value of the status input field
        };
    });
    localStorage.setItem("tasks", JSON.stringify(tasksData));
    alert("Tasks saved successfully!");
});



// Add event listener to search input
const searchInput = document.getElementById("search");
searchInput.addEventListener("input", () => {
    filterTasks(searchInput.value.toLowerCase());
});

// Function to filter tasks based on search query
function filterTasks(searchQuery) {
    const allTasks = document.querySelectorAll('.task');
    allTasks.forEach(task => {
        const taskText = task.textContent.toLowerCase();
        if (taskText.includes(searchQuery)) {
            task.style.display = "block";
        } else {
            task.style.display = "none";
        }
    });
}


