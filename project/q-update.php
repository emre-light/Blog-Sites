<?php
    include "session-control.php";

include 'config.php';

$q_tit = $_POST['soru-baslık'];
$question =$_POST['soru'];
$q_id = $_POST['soru-id'];

$sql = "UPDATE questions SET q_title='$q_tit' , question='$question'  WHERE q_id='$q_id'";
mysqli_query($conn, $sql);
//echo $sql;

header("Location:questions.php");
?>