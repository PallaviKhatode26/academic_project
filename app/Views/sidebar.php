<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
        a{
            text-decoration: none;
        }
        .side1{
          background: rgb(45,35,214);
        }
       
    </style>
</head>
<body>
    <div class="container-fluid w-100 h-100 bg-light">
        <div class="row mt-1">
            <div class="col-lg-2 col-md-2 col-sm-6 w-25 border  text-light side1" style="height: 550px;"> 
                <h2 class=" mt-2 bg-dark">Welcome Admin </h2>
                <ul class="nav flex-column">
                    <li class="nav-list mt-2 ">  <i class="fa-solid fa-person-military-pointing"></i> &nbsp; &nbsp;              <a href="#" class="text-light sidebar-link">Customer</a></li>
                    <li class="nav-list mt-2 ">   <i class="fa-solid fa-link"></i> &nbsp; &nbsp;              <a href="/user" class="text-light  sidebar-link" data-target="Food">Food</a></li>
                    <li class="nav-list mt-2 ">   <i class="fa-brands fa-windows"></i> &nbsp; &nbsp;              <a href="#" class="text-light sidebar-link">Overview</a></li>
                    <li class="nav-list mt-2 ">   <i class="fa-regular fa-calendar-days"></i> &nbsp; &nbsp;              <a href="#" class="text-light sidebar-link">Events</a></li>
                    <li class="nav-list mt-2 ">   <i class="fa-solid fa-address-card"></i> &nbsp; &nbsp;              <a href="#" class="text-light sidebar-link">About</a></li>
                    <li class="nav-list mt-2 ">   <i class="fa-solid fa-gear"></i> &nbsp; &nbsp;              <a href="#" class="text-light sidebar-link">Services</a></li>
                    <li class="nav-list mt-2 ">   <i class="fa-solid fa-square-envelope"></i> &nbsp; &nbsp;              <a href="#" class="text-light sidebar-link">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-6 w-75">
                
             <ul class="nav" style="padding-left: 80%; ">
    
             <a href="<?php echo site_url('/logout') ?>" class="btn btn-info m-2">logout</a>
                    </ul>
           <hr>
                <h2>Simple Sidebar</h2>
            <p>Make sure to keep all pages content within the #content.</p>
            </div>
        </div>

    </div>
 <!-- <script>
  $(document).ready(function() {
    $('.sidebar-link').click(function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $.ajax({
            url: '<?php echo site_url('exampleController/loadContent') ?>',
            type: 'GET',
            data: { target: target },
            success: function(response) {
                // Update sidebar and main content
                $('.sidebar').html(response.sidebar);
                $('.main-content').html(response.content);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

 </script> -->

   
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>