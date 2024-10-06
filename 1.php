<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Profilestyle.css">
<style>
	.container {
            display: flex; /* Display the container as flex */
            flex-wrap: wrap; /* Allow container to wrap */
            justify-content: space-around; /* Space around the containers */
            max-width: 1500px; /* Set maximum width */
            margin: 0 auto; /* Center the container */
        }

        .staffs-container {
            flex-basis: 23%; /* Each container takes up 23% of the width (leaving some space for gaps) */
            margin-bottom: 20px; /* Add some bottom margin for spacing */
            box-sizing: border-box; /* Include padding and border in the width */
        }

        .staff {
            padding: 10px;
            border: 1px solid #ccc; /* Add border for visibility */
        }

        .column {
            text-align: center;
            padding: 5px;
        }
    </style>		
</head>
<body>
	<div class="container">
	    <div class="staffs-container">
			<div class="staff" data-name="s-1">
		    	<div class="column">Name</div>
			<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>

			</div>
		</div>
	    <div class="staffs-container">
			<div class="staff" data-name="s-2">
		    	<div class="column">Name1</div>
			</div>
		</div>
	   <div class="staffs-container">
			<div class="staff" data-name="s-3">
		    	<div class="column">Name2</div>
			</div>
		</div>
	  <div class="staffs-container">
			<div class="staff" data-name="s-4">
		    	<div class="column">Name3</div>
			</div>
		</div>

	 <div class="staffs-container">
			<div class="staff" data-name="s-5">
		    	<div class="column">Name4</div>
			</div>
		</div>
	<div class="staffs-container">
			<div class="staff" data-name="s-5">
		    	<div class="column">Name</div>
			</div>
		</div>
	<div class="staffs-container">
			<div class="staff" data-name="s-5">
		    	<div class="column">Name</div>
			</div>
		</div>

<div class="staffs-container">
			<div class="staff" data-name="s-5">
		    	<div class="column">Name</div>
			</div>
		</div>



	</div>
</body>
</html>
