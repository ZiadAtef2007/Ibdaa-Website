<?php 
if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mobile = $_POST['mobile'];

    $file_path = "data.txt";

    $data = "$name, $email, $message, $mobile\n";

    $file_handle = fopen($file_path, 'a');

    fwrite($file_handle, $data);

    fclose($file_handle);

}
?>

