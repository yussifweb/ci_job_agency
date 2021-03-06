<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!$_SESSION['name']) {
    redirect('home', 'refresh');
}
$id = $this->uri->segment(3);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Welcome | <?php echo $_SESSION['name']; ?></title>
</head>

<body>
    <!-- dashboard nav -->
    <?php $this->load->view('dashboard/inc/nav'); ?>
    <!-- dashboard nav -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8">
                    <?php
                    $employee_list = $this->db->get_where('employees', array('id' => $id));
                    foreach ($employee_list->result() as $employee) {
                    ?>
                        <div class="card">
                            <div class="card-header text-center"><?php echo $employee->name; ?></div>

                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $employee->name; ?></h5>
                                <p class="card-text text-center"><?php echo $employee->email; ?></p>
                                <p class="card-text text-center"><?php echo $employee->phone; ?></p>
                                <p class="card-text text-center"><?php echo $employee->job; ?></p>
                            </div>
                            <div class="card-footer">
                                <span><a href="<?php echo site_url(); ?>employees/employee_update/<?php echo $employee->id ?>" class="btn btn-info btn-sm">Update</a></span>
                                <span><a href="<?php echo site_url(); ?>employees/employee_delete/<?php echo $employee->id ?>" class="btn btn-danger btn-sm">Delete</a></span>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?php echo base_url(); ?> assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?> assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>