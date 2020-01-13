<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include '../config/connection.php';
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['userrole']) && isset($_POST['phone'])
&& isset($_POST['email'])  && isset($_POST['fname'])  && isset($_POST['pwd'])  && isset($_POST['lname'])) {

    $mname     = isset($_POST['mname']) ? $_POST['mname'] : 'NULL';
    // $pincode   = isset($_POST['pincode']) ? $_POST['pincode'] : 'NULL';
    $fname          = mysqli_real_escape_string($conn, $fname);
    $mname          = mysqli_real_escape_string($conn, $mname);
    $lname          = mysqli_real_escape_string($conn, $lname);
    $sql   = "INSERT INTO  usermaster(roleid,fname,mname,lname,email,password,contact) VALUES($userrole,'$fname','$mname','$lname','$email','$pwd','$phone')";
    $query = mysqli_query($conn, $sql);

    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected == 1) {
      $response = array(
          "Message" => "Record Inserted Successfully",
          "Responsecode" => 200
      );
    }
    else {
      $response = array(
          "Message" => "Parameters missing",
          "Responsecode" => 403
      );
    }
}


mysqli_close($conn);
exit(json_encode($response));
?>
