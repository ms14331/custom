<?php
/**
     * Template Name: database
 */
session_start();



if(isset($_POST['logout'])) {
    unset($_SESSION['user_id']);
}else if(isset($_POST['login_now'])) {
    global $wpdb;
    $username1 = $_POST['user_name'];
    $password1 = $_POST['user_pass'];




//echo 'name: ' .  $username1 . 'pass: ' . $password1;


    $rows = $wpdb->get_row("SELECT * FROM wp_users WHERE user_email = '$username1' AND user_pass = '$password1'",OBJECT);


    if ($rows > 0) {

        //suarezandrew42@gmail.com
        //support99$
       
        //echo "These is login";
        $updated_acc = $rows->updated_acc;
        echo "success ". $updated_acc;
        $_SESSION['user_status'] = $rows->user_status;
        $_SESSION['user_id'] = $rows->ID;
    } else {
        echo "<h4 style='color:red' >Invalid password or username</h4>";
    }
}else if(isset($_POST["join_now"])) {
    global $wpdb;
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_password'];
    $user_gender = $_POST['user_gender'];
    $user_promocode = $_POST['promo_code'];
    $rows = $wpdb->get_row("SELECT * FROM `wp_users`where user_email = '".$user_email."'",ARRAY_A);
    if($rows == 0 ){
        if($user_name == "" || $user_email == "" || $user_pass == "" ||$user_gender == ""|| $user_promocode == ""){
            echo "<h4 style='color:red' >The field must be fill out</h4>";
        }else{
            dataBaser($user_name, $user_email, $user_pass, $user_gender, $user_promocode);
        }
    }else{
        echo "<h4 style='color:red' >Email is already exist!</h4>";
    }
} 

function dataBaser($user_name, $user_email, $user_pass, $user_gender, $user_promocode){
    global $wpdb;
    $arrayData = array (
        'user_nicename' => $user_name,
        'user_email' =>$user_email,
        'user_pass' =>$user_pass,
        'user_status' =>1,
        'user_gender' =>$user_gender,
        'user_promocode' =>$user_promocode,
    );
    $values_type = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%d',
        '%s',
        '%s',
    );
    $trows = $wpdb->insert(
        'wp_users',
        $arrayData ,
        $values_type
    );
    if($trows > 0) {
        print " Success!";
    } else {
        print " failed to sign up ";
    }
}


 



?>

