<?php
include "db_conn.php";

$mail=$_GET['maill'];
    $codev = mt_rand(1000,9999);
    echo $codev;    

    $sql= "UPDATE login SET Vcode='$codev' WHERE Email='$mail' ";

    $result=mysqli_query($conn,$sql);

    //if(mysqli_num_rows($result)==1){

      
    //}
     //else{
       // echo "Something went wrong !";
    //}



         $to = "$mail";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is Your code For Your Account $codev</h1>";
         
         $header = "From:samarjeetshelke2003@gmail.com \r\n";
         $header .= "Cc:$mail\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {

            header("Location: varify.php?error=The mail is sent to your mail enter the code ");
            exit();
            
        }else {
            echo "Message could not be sent...";
        }


?>
