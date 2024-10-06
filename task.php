<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taskstyle.css">
    <title>Task Scheduler</title>
</head>
<body>
    <header>
        <h1>Task Scheduler</h1>
    </header>
    <main>
        <div class="task-form">
            <input type="text" id="task" placeholder="Enter task...">
            <input type="text" id="name" placeholder="Enter your name...">
            <select id="priority">
                <option value="top">Top Priority</option>
                <option value="middle">Middle Priority</option>
                <option value="low">Less Priority</option>
            </select>
            <input type="date" id="deadline">
            <button id="add-task">Add Task</button>
            <button id="save-tasks">Save Tasks</button>
	    <input type="text" id="search" placeholder="Search tasks...">

        </div>
        <div class="task-list" id="task-list">
            <!-- Task items will be dynamically added here -->
        </div>	
        <script src="t1.js"></script>
    </main>
</body>
</html>
