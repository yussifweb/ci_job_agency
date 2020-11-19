<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

if (!$_SESSION['name']) {
redirect('home', 'refresh');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <?php $this->load->view('dashboard/inc/nav'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card">
                    <div class="card-header">Employees Actions</div>
                    <div class="list-group">
                        <a href="" class="list-group-item list-group-item-action">Add Employee</a>
                        <a href="" class="list-group-item list-group-item-action">Employees List</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Jobs Actions</div>
                    <div class="list-group">
                        <a href="" class="list-group-item list-group-item-action">Add Job</a>
                        <a href="" class="list-group-item list-group-item-action">Jobs List</a>
                    </div>
                </div>


            </div>
            <div class="col-12 col-sm-9">

            </div>
        </div>
    </div>

<main class="container-fluid">
        <div class="main">
          <div class="jumbotron jumbotron-image">
            <div class="jumbotron-info mx-auto text-center">
              <h1 class="welcome">Welcome To Job Center</h1>
              <p class="lead">Get started here......</p>
              <hr class="my-4">
              <a class="btn btn-primary btn-lg" href="status.php" role="button">Check Report</a>
              <a class="btn btn-primary btn-lg" href="company.php" role="button">Add Company</a>
              <a class="btn btn-primary btn-lg" href="applicant.php" role="button">Add Applicant</a>  
            </div>
          </div>
        </div>
      </main>


          <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?php echo base_url(); ?> assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?> assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>