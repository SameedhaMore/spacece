<?php  // this is serverside page === api key ?>

<?php include("indexDB.php")?>
<?php
 $password =$_GET["password"];
 $user=$_GET["user"];
?>
<?php
        // showing admin added from database
        $sql = "SELECT * FROM `login` WHERE `username`='$user' ";
        $res = mysqli_query($conn,$sql);
        header('Content-Type:application/json');


        //checking whether query is excuted or not
        if($res){
            // count that data is there or not in database
            $count= mysqli_num_rows($res);
            $sno =1;
            if($count>0){
                // we have data in database
                while($row = mysqli_fetch_assoc($res))
                {
                    // extracting values from dATABASE

                    $arr = array('email'=> $row['email'],'username'=>$row['username']);   // making array of data
                 
                }
               echo json_encode(['status'=>'success','data'=>$arr,'result'=>'found']);
              
            }
            else{
                echo json_encode(['status'=>'fail','msg'=>"NO DATA FOUND PLS ENTER VALID USERNAME IN QUERY PARAMETER(?user= username)"]);
            }
        }

    
                    // displaying value in table
            ?>