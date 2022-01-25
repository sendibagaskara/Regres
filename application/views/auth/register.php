<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Register</title>
  </head>
  <body>

  <div class="container col-lg-7 mx-auto mt-5 shadow p-3 mb-3 bg-white rounded">
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('auth/register');?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth'); ?>">Login</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="container">
    <div class="text-center text-primary mt-2 mx-auto">
      <h3> Register</h3><hr>
    </div>
    <form class="col-lg-7 mx-auto" method="post" action="<?= base_url('auth/register');?>">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"> <small class="text-danger"><?= form_error('firstname');?></small>
            </div>
            <div class="form-group col-md-6">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"> <small class="text-danger"><?= form_error('lastname');?></small>
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address</label>
          <input type="email" class="form-control shadow p-3 mb-3 bg-white rounded" id="email" aria-describedby="emailHelp" name="email" placeholder="Email"> <small class="text-danger"><?= form_error('email');?></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control shadow p-3 mb-3 bg-white rounded" id="exampleInputPassword1" name="password" placeholder="Password" ><small class="text-danger"><?= form_error('password');?></small>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="birthdate">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate"> <small class="text-danger"><?= form_error('birthdate');?></small>
            </div>
            <div class="form-group col-md-6">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Age"> <small class="text-danger"><?= form_error('age');?></small>
            </div>
        </div>

        <div class="row mx-auto">
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        <button type="reset" class="btn btn-danger ml-2">Reset</button>
        </div>
    </form>
  </div>
  </div>
</div>
  </div>
  


   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

   
  </body>
</html>