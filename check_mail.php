<?php
include "db_conn.php";

if (isset($_POST['mail'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $mailc = validate($_POST['mail']);

    if (empty($mailc)) {

        header("Location: forget_pass.php?error=User EMail is required");

        exit();

    }
    else{

        $sql = "SELECT * FROM login WHERE Email='$mailc'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if($row['Email']==$mailc){
                /*
                
                
                
                header("Location: varify.php?error=The mail is sent to your mail enter the code ");

                exit();
                */
                header("Location: send_mail.php?maill=$mailc");

                exit();
            }
            else{

                header("Location: forget_pass.php?error=It seems like you dont have account!");

                exit();

            }

        }else{

                header("Location: forget_pass.php?error=It seems like you dont have account!");

                exit();

        }

        
        

    }

}else{

    header("Location: forget_pass.php");

    exit();

}

?>