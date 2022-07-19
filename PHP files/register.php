<?php
    $username= $_POST['username'];
    $phoneNumber= $_POST['phoneNumber'];
    $email= $_POST['email'];
    $password= $_POST['psw'];

    //connection to database
    $user_db="user1";
    $pass_db="";
    $name_db="rozayel";

    $db= new PDO('mysql:host=localhost; dbname=' . $name_db . ';charset=utf8', $user_db, $pass_db );
    $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "insert into users(userName, phoneNmber, email, pass) values(?,?,?,?)";
    $insertStmt=$db->prepare($sql);
    $result=$insertStmt->execute([$username, $phoneNumber,$email, $password  ]);
    
    if($result){
        echo  '<script> alert("Successfully Registration")
        document.location.href="../Html files/login.html";
        </script>';
    }
    else{
        echo   '<script> alert("Invalid email or password, please try again")
        document.location.href="../Html files/login.html";
        </script>';
    }
    ?>