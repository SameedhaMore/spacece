<?php

$DBHOST = '3.109.14.4';
$DBUSER = 'ostechnix';
$DBPASS = 'Password123#@!';
// $DBHOST = 'localhost';
// $DBUSER = 'root';
// $DBPASS = '';



$DBNAME = 'spaceece';
$conn;

$conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);


if ($conn) {

} else {
    die("No Connection!");
}


if(isset($_POST['subscribe'])){

  
    $email=$_POST['email'];

   ///var_dump($_POST);

                $sql =  "SELECT * from subscription Where email='$email'";
                //var_dump($sql);
                $query=mysqli_query($conn,$sql);
                
                
                if (mysqli_num_rows( $query) > 0) {
                    echo "Error";
              }
               
                  else {
                   
                $query3 = mysqli_query($conn, "INSERT into subscription (email) values('$email') ");
                //var_dump($query3);

                $toEmail = $email; 
            
                echo $toEmail;
                  
                $eol = "\r\n";
                $headers = "From: 'SpacActive' <'contactus@spacece.co'>" . $eol;
                $headers  .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
              
              
                $emailSubject = 'Activity';
            
            
            
                $emailBody = "Hello " . $toEmail . ",<br><br>";
                $emailBody .= "Thank You for Subscribing <br><br>";
               
                $emailBody .= "<b>You will receive Notifications and latest updates  this Email</b> <br><br>";
               
                if (mail($toEmail, $emailSubject, $emailBody, $headers)) {
                    echo "Success";
                }else{
                    echo "Invalid";
                }


                //   }
                   }
           
         
             
            } 
