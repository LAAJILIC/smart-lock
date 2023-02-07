<?php
session_start();
include('userinterface/header.php');
?>

<div class="container">
 <div class="row justify-content-center">
    <div class="col-md-6">

    <?php
    if(isset($_SESSION['status']))
    {
      echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
      unset($_SESSION['status']);
        }
            ?>
      <div class="card">
        <div class="card-header">
            <h4>Register as a client/company
            <a href="index.php" class="btn btn-danger float-end">BACK</a>

            </h4>
        </div>
        <div class="card-body">
            <form action="code.php" method="POST">

            <div class="form-group mb-3">
                <label for="">Full Name</label>
              <input type="text" name="full_name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Construction Company</label>
              <input type="text" name="company" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Phone</label>
              <input type="number" name="phone" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-3">
                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
            </div>
            </form>
        </div>
      </div>
    </div>
 </div>
</div>

<?php
include('userinterface/footer.php');
?>