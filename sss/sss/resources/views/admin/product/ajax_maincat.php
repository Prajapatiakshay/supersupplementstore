<?php 
$conn = new mysqli("localhost","root","","project");
echo $pin = $_POST['value'];

// $sel = "SELECT * FROM `tbl_store` WHERE `pincode` = '$pin'";
// $sel_data = mysqli_query($con,$sel);
// $num = mysqli_num_rows($sel_data);

// if($num > 0){
// while($ship = mysqli_fetch_array($sel_data)){
//      $store = $ship['store_name'];


// }
// }else{
//     echo "NO STORE FOUND";
// }

?> 