<?php 
    include('procon.php');
    include('propro.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" contents"IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Profilestyle1.css">
</head>
<body>
	<div class="container">
	    <h1 class="title">Staff details </h1>
		<a href="http://localhost/phpmylogin/1.php" class="upload-button">Upload Time Table</a>
	    <div class="staffs-container">
		<div class="staff" data-name="s-1">
		    <h3>Dr.G.Anupriya</h3>
		    <div class="Posting">Professor&HOD<br></div>
		</div>
		<div class="staff" data-name="s-2">
		    <h3>Dr.M.L.Valarmathi</h3>
		    <div class="Posting">Professor<br></div>
		</div>
		<div class="staff" data-name="s-3">
		    <h3>Dr.A.Noble Mary Juliet</h3>
		    <div class="Posting">Associate Professor<br></div>
		</div>
		<div class="staff" data-name="s-4">
		    <h3> Dr.N.Senthil Madasamy</h3>
		    <div class="Posting">Associate Professor<br></div>
		</div>
		<div class="staff" data-name="s-5">
		    <h3> Dr.M.Pandi</h3>
		    <div class="Posting">Associate Professor<br></div>
		</div>
		<div class="staff" data-name="s-6">
		    <h3>Dr.J.Bhavithra</h3>
		    <div class="Posting">Assistant Professor(SG)<br></div>
		</div>
		<div class="staff" data-name="s-7">
		    <h3>Ms.N.Sumathi</h3>
		    <div class="Posting">Assistant Professor(SS)<br></div>
		</div>
		<div class="staff" data-name="s-8">
		    <h3>Ms.S.C.Lavanya</h3>
		    <div class="Posting">Assistant Professor(SS)<br></div>
		</div>
		<div class="staff" data-name="s-9">
		    <h3>Mr.P.Boopathirajan</h3>
		    <div class="Posting">Assistant Professor(SS)<br></div>
		</div>
		<div class="staff" data-name="s-10">
		    <h3>Ms.C.JayaShree</h3>
		    <div class="Posting">Assistant Professor(SS)<br></div>
		</div>
		<div class="staff" data-name="s-11">
		    <h3>Mr.T.Kanagasabapathy</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-12">
		    <h3>Ms.C.Devipriya</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-13">
		    <h3>Ms.B.Suganya</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-14">
		    <h3>Ms.G.Deepa</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-15">
		    <h3>Mr.S.Senthil Prabhu</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-16">
		    <h3>Ms.G.Gayathri</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-17">
		    <h3>Mr.K.Prabhu</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-18">
		    <h3>Mr.D.Manojkumar</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-19">
		    <h3>Mr.V.Eswaramurthy</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-20">
		    <h3>Ms.K.Radha</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-21">
		    <h3>Ms.A.Suganya</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-22">
		    <h3>Ms.A.Jayalakshmi</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-23">
		    <h3>Ms.R.Binisha</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-24">
		    <h3>Ms.G.Uma Maheshwari</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-25">
		    <h3>Ms.J.Santhiya</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-26">
		    <h3>Ms.S.Devilavanya</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
		<div class="staff" data-name="s-27">
		    <h3>Ms.M.Gomathi</h3>
		    <div class="Posting">Assistant Professor<br></div>
		</div>
	    </div>
	</div>
	<div class="staffs-preview">
		<div class="preview" data-target="s-1">
		<div id="close-btn">
		    <i class="fa fa-close"></i></div>
		    <h3>Dr.G.Anupriya</h3>
		    <p>Date of Joining:01-06-2005<br></p>
		<div class="wrapper">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div id="cancel-btn">
                    <i class="fa fa-close close-btn"></i>
                </div>
            </div>
            <button onclick="defaultBtnActive()" id="custom-btn">Upload Image</button>
            <input id="default-btn" type="file" hidden>
	 <p>Class coordinator: <br></p>	
	 <p>Year coordinator: <br></p>
	 <div class="buttons">
		    <a href="http://localhost/phpmylogin/task.php" class="task">Task</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		<div class="preview" data-target="s-2">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Dr.M.L.Valarmathi</h3>
		    <p>Date of Joining:24-07-2019<br></p>
		<div class="buttons">
		    <a href="http://localhost/phpmylogin/t1.php" class="task">Task</a>
		    <a href="http://localhost/phpmylogin/ttupload.php" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-3">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Dr.A.Noble Mary Juliet</h3>
		    <p>Date of Joining:17-05-2017<br></p>
		<div class="buttons">
		    <a href="http://localhost/phpmylogin/t1.php" class="task">Task</a>
		    <a href="http://localhost/phpmylogin/ttupload.php" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-4">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Dr.N.Sethil Madasamy</h3>
		    <p>Date of Joining:08-05-2017<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-5">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Dr.M.Pandi</h3>
		    <p>Date of Joining:18-12-2017<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-6">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Dr.J.Bhavithra</h3>
		    <p>Date of Joining:12-12-2005<br></p>
		    <p>Class Coordinator of: <br></p>
		    <p>Year Coordinator of:<br></p>
		<div class="buttons">
		    <a href="http://localhost/phpmylogin/t1.php" class="task">Task</a>
		    <a href="#" class="timetable" onclick="openPasswordForm()">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-7">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.N.Sumathi</h3>
		    <p>Date of Joining:03-06-2009<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-8">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.S.C.Lavanya</h3>
		    <p>Date of Joining:09-05-2011<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-9">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Mr.P.Boopathirajan</h3>
		    <p>Date of Joining:12-06-2014<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-10">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.C.Jayashree</h3>
		    <p>Date of Joining:17-06-2016<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-11">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Mr.T.Kanagasabapathy</h3>
		    <p>Date of Joining:27-06-2011<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-12">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.C.Devipriya</h3>
		    <p>Date of Joining:01-06-2016<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-13">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.B.Suganya</h3>
		    <p>Date of Joining:12-07-2017<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-14">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.G.Deepa</h3>
		    <p>Date of Joining:08-02-2021<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-15">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Mr.S.Senthil Prabhu</h3>
		    <p>Date of Joining:25-02-2021<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-16">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.G.Gayathiri</h3>
		    <p>Date of Joining:25-02-2021<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-17">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Mr.K.Prabhu</h3>
		    <p>Date of Joining:03-08-2021<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-18">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Mr.D.Manojkumar</h3>
		    <p>Date of Joining:21-01-2022<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
	            <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-19">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Mr.V.Eswaramurthy</h3>
		    <p>Date of Joining:10-06-2022<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-20">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.K.Radha</h3>
		    <p>Date of Joining:11-07-2022<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-21">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.A.Suganya</h3>
		    <p>Date of Joining:05-12-2022<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-22">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.A.Jayalakshmi</h3>
		    <p>Date of Joining:07-12-2022<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-23">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.R.Binisha</h3>
		    <p>Date of Joining:22-02-2023<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-24">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.G.Uma Maheshwari</h3>
		    <p>Date of Joining:02-05-2023<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-25">
		    <i class="fa fa-close"></i>
		    <img src="file:///C:/Users/sribh/Pictures/profle.jpg" alt="">
		    <h3>Ms.J.Santhiya</h3>
		    <p>Date of Joining:01-06-2023<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-26">
		    <i class="fa fa-close"></i>
		   
		    <h3>Ms.S.Devilavanya</h3>
		    <p>Date of Joining:01-06-2023<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
		<div class="preview" data-target="s-27">
		    <i class="fa fa-close"></i>
		    <h3>Ms.M.Gomathi </h3>
		    <p>Date of Joining:05-06-2023<br></p>
		<div class="buttons">
		    <a href="#" class="more">More</a>
		    <a href="" class="timetable">Time Table</a>
		</div>
		</div>
	</div>
	<script src="jsprofile.js"></script>
		    
</body>
</html>