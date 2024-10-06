let preveiwContainer=document.querySelector('.staffs-preview');
let previewBox=preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.staffs-container .staff').forEach(staff =>{
	staff.onclick=()=>{
	    preveiwContainer.style.display='flex';	
	    let name=staff.getAttribute('data-name');
	    previewBox.forEach(preview =>{
		let target=preview.getAttribute('data-target');
		if(name==target){
		  preview.classList.add('active');	
		}	
	    });
	
	};
	
});

previewBox.forEach(close =>{
	close.querySelector('.fa-close').onclick=()=>{
	  close.classList.remove('active');
	  preveiwContainer.style.display='none';
	};
});

function defaultBtnActive() {
        document.getElementById('default-btn').click();
    }

    document.getElementById('default-btn').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                const imgElement = document.querySelector('.wrapper .image img');
                imgElement.src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    });
function handleImageUpload() {
    var input = document.getElementById('default-btn');
    input.click();

    input.addEventListener('change', function() {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var image = document.getElementById('uploaded-image');
            image.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
}


document.addEventListener('DOMContentLoaded', function() {
    var closeBtn = document.querySelector('.close-btn');

    closeBtn.addEventListener('click', function() {
        var uploadedImage = document.querySelector('.image img');
        uploadedImage.src = ''; // Set the image source to empty to remove it
    });
});



