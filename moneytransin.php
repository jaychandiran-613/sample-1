<?php

$sid=$_GET['id'];
$sname='';
$semail='';
$samount=0;
$remail=$_POST['email'];
$rid=0;
$rname='';
$ramount=0;
$amount=$_POST['amount'];
$location=$_POST['location'];

require_once('config.php');
$result=mysqli_query($mysqli,"SELECT * FROM accounts Where accon='$sid'");
while($row=mysqli_fetch_array($result)){
         $sname=$row['username'];
         $semail=$row['email'];
         $samount=$row['amount'];
}
$result=mysqli_query($mysqli,"SELECT * FROM accounts Where email='$remail'");
while($row=mysqli_fetch_array($result)){
         $rname=$row['username'];
         $rid=$row['accon'];
         $ramount=$row['amount'];

}

$samount=$samount-$amount;
$ramount=$ramount+$amount;

if(!empty($sname) || !empty($sid) || !empty($semail) || !empty($amount) || !empty($rname) || !empty($rid) || !empty($remail) || !empty($location)){
  $host='localhost';
  $dbuser='root';
  $dbpass='';
  $dbname='spark';
  $con=new mysqli($host,$dbuser,$dbpass,$dbname);
  if(mysqli_connect_error()){
    die('connectee Error ('.mysqli_connect_error().')'.mysqli_connect());
    }
  else{
    $INSERT="INSERT INTO transa (s_id,sname,semail,rid,rname,remail,amount,location_) VALUES ('$sid', '$sname', '$semail', '$rid', '$rname', '$remail', '$amount', '$location')";
    $result = mysqli_query( $con, $INSERT );
    if(!$result){
        echo 'hello';
    }
    $query = "UPDATE accounts SET amount='$samount' WHERE accon='$sid'";
    $result = mysqli_query( $con, $query );
    $query = "UPDATE accounts SET amount='$ramount' WHERE accon='$rid'";
    $result = mysqli_query( $con, $query );
    $con->close();
    header('Location: customerlist.php');
    exist;
  }
}else{ echo'All field are required';
die();}

?>