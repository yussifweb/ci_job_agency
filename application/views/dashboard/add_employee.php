<?php defined('BASEPATH') or exit('No direct script access allowed');

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

    <title>Add Job | <?php echo $_SESSION['name']; ?></title>
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
                    <div class="card-header">Add New Employee</div>
                    <div class="card-body">
                        <?php echo form_open('employees/add_employee_process'); ?>
                        <!-- get user ID -->
                        <div class="form-group">
                            <label id="name-label">Name</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Please Enter Your Name" required>
                        </div>

                        <!-- get company names -->
                        <!-- <div class="form-group">
                            <label for="company">Company</label>
                            <select class="form-control" id="dropdown" name="company">
                                <option selected>Select</option>
                                <?php
                                $sql = "SELECT * FROM companies";
                                $result = mysqli_query($connect, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($companies = mysqli_fetch_assoc($result)) {
                                        $company = $companies['name'] ?>
                                        <option><?php echo $company; ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div> -->

                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="phone" required placeholder="Contact">
                        </div>

                        <div class="form-group">
                            <label for="job">Job</label>
                            <select class="form-control" name="job" id="dropdown">
                                <option value="-">-</option>
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

                        <input id="submit" class="btn-block btn btn-success" type="submit" name="add_employee" value="Submit" />
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