<?php
session_start();
include('userinterface/header.php');
?>

<div class="container">
 <div class="row">
    <div class="col-md-12">

    <?php
    if(isset($_SESSION['status']))
    {
      echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
      unset($_SESSION['status']);
    } //delete.php when lock front door button changed the door status to closed and delete the row from the table in index.php
    ?>
      <div class="card">
        <div class="card-header">
            <h4>Construction Site, Construction Project
            <a href="delete.php" class="btn btn-primary float-end">lock Front Door</a>
           </h4>
        </div>
        <div class="card-body">

        <table class="table table-bordered table-striped">
          <thead>
<tr>
  <th>reference</th>
  <th>Project Name</th>
  <th>Project Location</th>
  <th>Construction Company</th>
  <th>Responsible Contact</th>
  <th>Date</th>
  <th>lock Door</th>
</tr>
          </thead>
          <tbody>
<?php
include('databaseconfig.php');

$ref_table = "projects";
$retrievedata = $database->getReference($ref_table)->getValue();

if($retrievedata > 0)
{
  $i=0;
foreach($retrievedata as $key => $row)
{ //open Internal door button will go to a page similar project.php but choose one of the existing internal doors instead of opening a front door
  ?>
<tr>
  <td><?=$i++;?></td>
  <td><?=$row['ptitle'];?></td>
  <td><?=$row['plocation'];?></td>
  <td><?=$row['pcompany'];?></td>
  <td><?=$row['pcontact'];?></td>
  <td><?=$row['pdate'];?></td>
  <td><?=$row['doorstatus'];?></td>
  <td>
  <a href="edit.php" class="btn btn-primary btn-sm">Edit info</a>
  </td>
  <td>
  <a href="open-internal-door.php" class="btn btn-danger btn-sm">Open Internal Door</a>
  </td>

</tr>
  <?php
}
}
  else
  { 
    ?> 
  <tr>
    <td colspan="7">No related project, No door open Yet</td>
  </tr>
     <?php
  }
?>
          <tr>
             <td></td>
          </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
 </div>
</div>

<?php
include('userinterface/footer.php');
?>