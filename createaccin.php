<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$amount=$_POST['amount'];

if(!empty($name) || !empty($phone) || !empty($email) || !empty($amount)){
  $host='localhost';
  $dbuser='root';
  $dbpass='';
  $dbname='spark';
  $con=new mysqli($host,$dbuser,$dbpass,$dbname);
  if(mysqli_connect_error()){
    die('connectee Error ('.mysqli_connect_error().')'.mysqli_connect());
    }
  else{
    $SELECT='SELECT email From accounts Where email = ? limit 1';
    $INSERT='INSERT Into accounts (username, phone, email, amount) values(?, ?, ?, ?)';
    $stmt=$con->prepare($SELECT);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;

    if($rnum==0){
      $stmt->close();
      $stmt=$con->prepare($INSERT);
      $stmt->bind_param('sisi',$name,$phone,$email,$amount);
      $stmt->execute();
      header('Location: customerlist.php');
      exit;
    }else{echo 'someone alreadt registered using this email';}
    $stmt->close();
    $con->close();
  }
}else{ echo'All field are required';
die();}

?>