<?php require_once('config.php');
$result=mysqli_query($mysqli,"SELECT * FROM accounts ORDER BY accon DESC");
?>
<?php require 'htmlhead.php';?>
  <?php
  while($row=mysqli_fetch_array($result)){
echo ' 
<div class="container">
<div class="card">
<div class="card-header">
  <h7>Account Id : <span>'.$row['accon'].'</span></h7>
</div>
<div class="card-body h-100 p-5 text-white bg-dark rounded-3">
  <div class="row">
    <div class="col-md-2">'.$row['username'].'</div>
    <div class="col-md-3">'.$row['email'].'</div>
    <div class="col-md-1">'.$row['amount'].'</div>
  <div class="col-md-6">
    <div class="row">
      <div class="col-5"> <a href="moneytrans.php?id='.$row['accon'].'" class="btn btn-outline-light" style="width: 200px;">Money Transfer</a></div> 
      <div class="col-5"> <a href="usertrans.php?id='.$row['accon'].'" class="btn btn-outline-light" style="width: 200px;">View Transaction</a></div>
    </div>
    </div>
  </div>
</div>
</div>
</div>';
  }
  ?>
<?php require 'htmlfoot.php';?>

