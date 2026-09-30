<?php
include("./connection/config.php");

$con = connection();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnSubmit'])){
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone_number = filter_input(INPUT_POST,'phone_number', FILTER_SANITIZE_SPECIAL_CHARS);
    $subject = filter_input(INPUT_POST,'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $concerns = filter_input(INPUT_POST,'concerns', FILTER_SANITIZE_SPECIAL_CHARS);

    $insert_query = 'INSERT INTO `rumi_users` (`name`,`email`, `phone_number`, `subject`, `concerns`) VALUES (?, ?, ?, ?, ?)';
    $insert_stmt = $con->prepare($insert_query);
    $insert_stmt->bind_param('sssss',$name,$email,$phone_number,$subject,$concerns);
        try{
            $insert_stmt->execute();
            echo "<script> alert('Thank you for your patience! We will contact you as soon as possible!');
                window.location='index.php#contactUs';
            </script>";
        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
        }
}  
?>