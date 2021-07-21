<?php 
$id=$_GET['id'];
require_once('config.php');
$result=mysqli_query($mysqli,"SELECT * FROM transa Where s_id='$id'");
?>

<?php require 'htmlhead.php';?>
<div class="table-responsive table-hover">
<h3>LIST OF USERS</h3>
    <table class="table">
      
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Transaction Id</th>
          <th scope="col">Reciver Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Amount</th>
          <th scope="col">Date</th>
          <th scope="col">Location</th>

        </tr>
      </thead>
      <tbody>
      <?php
      $c=1;
  while($row=mysqli_fetch_array($result)){
echo'<tr>
<th scope="row">'.$c.'</th>
<td>'.$row['transid'].'</td>
<td>'.$row['rid'].'</td>
<td>'.$row['rname'].'</td>
<td>'.$row['remail'].'</td>
<td>'.$row['amount'].'</td>
<td>'.$row['date'].'</td>
<td>'.$row['location_'].'</td>
</tr>';
$c=$c+1;}?>
      </tbody>
    </table>
    <div>
             <button class="btn btn-primary hidden-print" onclick="window.print()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print</button>
  </div>
   </div>
<?php require 'htmlfoot.php';?>

