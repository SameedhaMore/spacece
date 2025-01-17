<?php
$main_logo = "../img/logo/SpacECELogo.jpg";
$module_logo = "../img/logo/ConsultUs.jpeg";
$module_name = "ConsultUs";
include '../common/header_module.php';
?>
<html>
    <head>
  
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <body>
    <div class="container col-lg-12 mt-3 d-flex justify-content-center">
    <div class="row mb-3">
        <form id="category" name="category" class="mb-3 category" method="POST" enctype="multipart/form-data" action="category_ajax.php">
            <div class="form-group " >
            <label for="cat_name">Category Name</label>
            <input class="form-control  mb-3" type="text" name="cat_name" id="cat_name" placeholder="Category Name" required>
            </div>
        
        <div class="form-group">
        <label for="cat_slug">Category Slug</label>
        <input class="form-control  mb-3" type="text" name="cat_slug" id="cat_slug" placeholder="Category Slug" required>
        </div>
       
       
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control mb-3"  id="image" name="image" placeholder="Upload Image" required />
        </div>
        
        
        <div class="">
        <input type="submit" id="save" name="save" class=" col-sm-12 btn btn-sm btn-primary mb-3">
        </div>
        </form>
        </div>

    </div>


    </body>
</html>









<?php
include '../common/footer_module.php';
?>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script> -->



<script>
$(document).ready(function(){
$('#category').on('submit',function(){
  
    var form_data = new FormData(this);  
    var file_data = $('#image').prop('files')[0];   
             
     form_data.append('file', file_data);
    //alert("Submitted");
    // var formData = new FormData(this);

    $.ajax({
        method:'POST',
        url:'./category_ajax.php',
        data: form_data,
      cache: false,
      contentType: false,
      processData: false,
      success: function (response) {
         if(response==="Exists"){
            swal("Exists","Entered Data Alredy Exists" , "Error");
         }
        if(response==="Error"){
            swal("Error","Invalid data Format" , "Error");
         }
         if(response==="Added"){
            swal("Success","Data Added Successfully" , "Success");
         }

      }
    })
})
})



</script>