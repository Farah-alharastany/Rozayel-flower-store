<?php 
 $userName = $_POST['username'];
 $password = $_POST['psw'];

     //connecton to database
     $conn = new mysqli('localhost', 'user1', '','rozayel');
     if ($conn->connect_error){
         die ('Connect has failed: ' .$conn->connect_error);
     }
 
     else{
         $stmt = $conn->prepare("select * from users where userName= ?");
         $stmt->bind_param("s", $userName);
         $stmt->execute();
         $stmt_result =$stmt->get_result();

         if($stmt_result->num_rows >0){
            $data= $stmt_result->fetch_assoc();
            if($data['pass']===$password){
                echo  '<h1>Welcome to your account ' .$userName. '👏.'.'</h1>' ;
                header( "refresh:5;url=../Html files/homePage.html" );
            }
            else{
                echo  '<script> alert("Invalid email or password, please try again")
                document.location.href="../Html files/login.html";
                </script>';
            }
         }
         else {
            echo  '<script> alert("Invalid email or password, please try again")
            document.location.href="../Html files/login.html";
            </script>';
         }
     }
?>