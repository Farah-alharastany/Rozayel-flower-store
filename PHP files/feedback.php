<?php   
  $name = $_POST['Name'];
  $email = $_POST['email'];
  $feedbackText = $_POST['feddbackText'];
  $icon="../Images/trueIcon.png";
   //connection to database
   $user_db="user1";
   $pass_db="";
   $name_db="rozayel";

   $db= new PDO('mysql:host=localhost; dbname=' . $name_db . ';charset=utf8', $user_db, $pass_db );
   $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql= "insert into feedback(customerName, email, customerFeedback) values(?,?,?)";
   $insertStmt=$db->prepare($sql);
   $result=$insertStmt->execute([$name, $email, $feedbackText]);

   if($result){
    echo  '<h1>Your feedback submitted successfully 👏</h1>';
    header( "refresh:5;url=../Html files/contactUs.html" );

}

else{
    echo  '<h1>Something does not work, please try again 😲</h1>';
    header( "refresh:5;url=../Html files/contactUs.html" );
}
?> 