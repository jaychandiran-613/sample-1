<?php 
require_once('config.php');
$result=mysqli_query($mysqli,"SELECT * FROM transa ORDER BY transid DESC");
?>
<?php require 'htmlhead.php';?>
<h2>List of users</h2>
<div class="table-responsive table-hover">
    <table class="table">
      
      <thead>
        <tr>
          
          <th scope="col">Trans.Id</th>
          <th scope="col">Send.Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Reciv.Id</th>
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
echo'<tr scope="row">
<td>'.$row['transid'].'</td>
<td>'.$row['s_id'].'</td>
<td>'.$row['sname'].'</td>
<td>'.$row['semail'].'</td>
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
    
   </div>
   <div>
             <button class="btn btn-primary hidden-print" onclick="window.print()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print</button>
  </div>
<?php require 'htmlfoot.php';?>