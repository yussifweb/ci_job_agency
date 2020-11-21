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

    <title>Update Employee | <?php echo $_SESSION['name']; ?></title>
</head>

<body>
    <!-- dashboard nav -->
    <?php $this->load->view('dashboard/inc/nav'); ?>
    <!-- dashboard nav -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <!-- sidebar -->
                <?php $this->load->view('dashboard/inc/sidebar'); ?>
                <!-- sidebar -->
            </div>
            <div class="col-12 col-sm-9">
                <div class="card">
                    <div class="card-header">Update Employee</div>
                    <div class="card-body">
                        <?php

                        $employee_list = $this->db->get_where('employees', array('id' => $id));
                        foreach ($employee_list->result() as $employee) {
                        ?>
                            <?php echo form_open('employees/update_employee_process/' . $employee->id); ?>
                            <!-- get user ID -->
                            <div class="form-group">
                                <label id="name-label">Name</label>
                                <input type="text" id="name" class="form-control" name="name" value="<?php echo $employee->name; ?>" required>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="email" value="<?php echo $employee->email; ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="phone" value="<?php echo $employee->phone; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="job">Job</label>
                                <select class="form-control" name="job" id="dropdown">
                                    <option value="<?php echo $employee->job; ?>"><?php echo $employee->job; ?></option>
                                    <?php
                                    $job_list = $this->db->get('jobs');
                                    foreach ($job_list->result() as $job) { ?>

                                        <option value="<?php echo $job->title ?>"><?php echo $job->title ?></option>

                                    <?php } ?>
                                </select>
                            </div>


                            <!-- <div class="form-group">
                            <input type="file" class="form-control input-sm" name="image" required placeholder="Upload Image">
                        </div> -->

                            <input id="submit" class="btn-block btn btn-success" type="submit" name="update_employee" value="Submit" />
                        <?php } ?>
                        <?php echo form_close(); ?>
                    </div>

                </div>
            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="<?php echo base_url(); ?> assets/js/jquery-3.5.1.slim.min.js"></script>
        <script src="<?php echo base_url(); ?> assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>