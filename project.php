<?php
include('userinterface/header.php');
?>

<div class="container">
 <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
            <h4>Construction Site, Construction Project
            <a href="index.php" class="btn btn-danger float-end">BACK</a>

            </h4>
        </div>
        <div class="card-body">
            <form action="code.php" method="POST">

            <div class="form-group mb-3">
                <label for="">Project Name</label>
              <input type="text" name="project" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Project Location</label>
              <input type="text" name="location" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Front door</label>
              <input type="text" name="door" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Construction Company</label>
              <input type="text" name="company" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Responsible Contact</label>
              <input type="email" name="contact_email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Date</label>
              <input type="date" name="date" class="form-control">
            </div>

            <div class="form-group mb-3">
                <button type="submit" name="accurate_project" class="btn btn-primary">Open Door</button>
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