<?php
$username= $_POST['username'];
$password= $_POST['psw'];

//connection to database
$user_db="user1";
$pass_db="";
$name_db="rozayel";

$db= new PDO('mysql:host=localhost; dbname=' . $name_db . ';charset=utf8', $user_db, $pass_db );
$db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql= "update users set pass=? where userName=? ";
$updatetStmt=$db->prepare($sql);
$result=$updatetStmt->execute([$password, $username]);
$count= $updatetStmt->rowCount();

if ($count>0){
     echo  '<script> alert("Successfully Reset")
    document.location.href="../Html files/login.html";
    </script>';
    
}
else{
    echo  '<script> alert("Paaword reset failed, please try again")
    document.location.href="../Html files/resetPassword.html";
    </script>';
}
?>