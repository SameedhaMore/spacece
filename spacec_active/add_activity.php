<?php
include_once './header_local.php';
include_once '../common/header_module.php';
include_once '../common/banner.php';


?>





<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>

<div class="container ">

    <div class="card mb-3 d-flex jistify-content-center ">
        <form id="add_activity" name="add_activity" class="  mb-3" method="POST" action="./ajax_add_activity.php">
            <div class="row ">
                <div class="col-sm-6 d-flex justify-content-center mb-3 ">
                    <div class="col-sm-10">
                <lable class="mb-3">Activity Name : </lable>
        <input type="text" name="act_name" class="form-control" id="act_name" placeholder="Activity Name" required>
        <br>
             

                <lable class="mb-3">Activity Level : </lable>
                <select class="form-control" id="act_lvl" name="act_lvl" required>
                    <option value="">Select</option>
                    <option value="1">Level 1</option>
                    <option value="2">Level 2</option>
                    <option value="3">Level 3</option>
                    <option value="4">Level 4</option>
                </select>
                <br>
        
               
                <lable class="mb-3">Activity Developing Domain  : </lable>
        <input type="text" name="act_dom" class="form-control" id="act_dom" placeholder="Activity Developing Domain" required>
        <br>
              
                <lable class="mb-3">Activity objectives  : </lable>
                <textarea name="act_obj" class="form-control" id="act_obj" cols="30" rows="3" placeholder="Activity objectives" required></textarea>
                <br>
      
                <lable class="mb-3">Activity process : </lable>
      
      <textarea name="act_pro" class="form-control" id="act_pro" cols="30" rows="3" placeholder="Activity process" required></textarea>
      <lable class="mb-3">Playlist  Name : </lable>
        <input type="text" name="pl_name" class="form-control" id="pl_name" placeholder="Youtube Playlist  Name" required>
                </div>
                </div>
                <div class="col-sm-6 ">
                <div class="col-sm-10">
                <br>
        
                <lable class="mb-3">Activity Key Objectives  : </lable>
        <input type="text" name="act_key" class="form-control" id="act_key" placeholder="Activity Key Objectives" required>
        <br>
                <lable class="mb-3">Activity material : </lable>
        <input type="text" name="act_mat" class="form-control" id="act_mat" placeholder="Activity material" required>
        <br>     
                <lable class="mb-3">Activity Assessment : </lable>
                <textarea name="act_asses" class="form-control" id="act_asses" placeholder="Activity Assessment" cols="30" rows="3" required></textarea>
                <br>
           
                

                <lable class="mb-3">Activity Instructions : </lable>
        <textarea name="act_ins" class="form-control" id="act_ins" cols="30" placeholder="Activity Instructions" rows="3" required></textarea>
        <br>      
                <lable class="mb-3">Activity Date: </lable>
        <input type="date" name="act_date" class="form-control" id="act_date"  required>
        <br>
       
        <lable class="mb-3">Playlist  description: </lable>
        <input type="text" name="pl_desc" class="form-control" id="pl_desc" placeholder="Playlist  description" required>
        <br>

        <lable class="mb-3">Activity Status : </lable>
                <select class="form-control" id="act_type" name="act_type" required>
                    <option value="">Select</option>
                    <option value="Free">Free</option>
                    <option value="Paid">Paid</option>
                   
                </select>
        </div>
        <div class="mb-3">
        <input type="submit" id="save" name="save" class="mb-3 btn btn-primary">

        </div>
       
        
</div>

            </div>
        
        </form>

    </div>

</div>


</body>
<?php
include_once '../common/footer_module.php';
?>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script type="text/javascript" src="js/scriptcall.js"></script> -->

<script>
        $(document).ready(function(){

     

        
$("#add_activity").on('submit',function( ){
        var act_name=$('#act_name').val();
        var act_lvl=$('#act_lvl').val();
        var act_dom=$('#act_dom').val();
        var act_obj=$('#act_obj').val();
        
        var pl_name=$('#pl_name').val();
        var act_pro=$('#act_pro').val();
        
        var act_key=$('#act_key').val();
        var act_mat=$('#act_mat').val();
        
        var act_asses=$('#act_asses').val();
        var act_ins=$('#act_ins').val();
        var  act_type=$('#act_type').val();
        var act_date=$('#act_date').val();
        var pl_desc=$('#pl_desc').val();

       
        
        $.ajax({

                method:'POST',
                data:{
                        act_name:act_name,
                        act_lvl:act_lvl,
                        act_dom:act_dom,
                        act_obj:act_obj,
                        pl_name:pl_name,
                        act_pro:act_pro,
                        act_key:act_key,
                        act_mat:act_mat,
                        act_asses:act_asses,
                        act_ins:act_ins,
                        act_date:act_date,
                        pl_desc:pl_desc,
                        act_type:act_type
                },
                url:'ajax_add_activity.php',
                success:function(result){
                       
                        alert(result);
                }
        })
        
        

})
})

</script>



