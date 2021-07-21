<?php require 'htmlhead.php';?>
<div class="container">
  <?php $id=$_GET['id'];
      echo '<form action="moneytransin.php?id='.$id.'" method="POST">';?>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="to">To</label>
            <select id="to" class="form-control" name='email'>
            <?php require_once('config.php');
$result=mysqli_query($mysqli,"SELECT * FROM accounts ORDER BY accon DESC");
?>
<?php require 'htmlhead.php';?>
  <?php
  while($row=mysqli_fetch_array($result)){
echo'<option>'.$row['email'].'</option>';
}?>
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="amount">amount</label>
            <input type="number" class="form-control" id="amount" placeholder="Enter amount" name='amount'>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter location" name='location'>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href='customerlist.php' class='btn btn-secondary'>Back</a>
      </form>
    </div>
<?php require 'htmlfoot.php';?>
