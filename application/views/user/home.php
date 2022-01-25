<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <title>Dashboard</title>

  </head>
  <body>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('user');?>">List User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Input User</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="<?= base_url('auth'); ?>">Logout</a>
                    </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($user as $d) : ?>
                                <tr>
                                    <td><?= $d['id']; ?></td>
                                    <td><?= $d['email']; ?></td>
                                    <td><?= $d['fisrtname']; ?></td>
                                    <td><?= $d['lastname']; ?></td>
                                    <td>
                                        <div class="form-row">
                                            <a href="#" class="badge badge-light"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <a href="<?= base_url('user/view');?>?id=<?= $d["id"];?>" class="badge badge-light"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="#" class="badge badge-light"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <?php endforeach; ?>

                        </tbody>
                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
     
        
 
  


   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>

   <script>
    $(document).ready( function () {
        
        $('#example').DataTable();

    } );
    </script>
   
   
  </body>
</html>