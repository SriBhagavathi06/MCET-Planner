<?php
    include('procon.php');
    if (isset($_POST['submit'])) {
        $password = $_POST['pass'];

        $sql = "select * from loginp where password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: ttupload.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "profile.php";
                        alert("Invalid password!!")
                    </script>';
        }     
    }
    ?>