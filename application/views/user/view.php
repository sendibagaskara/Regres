<?php
    $id =$_GET["id"];
    


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>Profile</title>

  </head>
  <body>

  <div class="container col-lg-7 mx-auto mt-5 shadow p-3 mb-3 bg-white rounded">
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('user'); ?>">Back</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="container">
    <div class="text-center text-primary mt-2 mx-auto">
      <h2> View Profile</h2><hr>
    </div>

    <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="https://reqres.in/img/faces/<?= $id ;?>-image.jpg" alt="Card image cap">
        <div class="card-body">
             <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not only five centuries, but also the leap into electronic typesetting.</p>
        </div>
         </div>
         </div>
        </div>
    </div>
  


   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
   
  </body>
</html>