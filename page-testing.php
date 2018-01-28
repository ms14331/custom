<?php

/*
 * Template Name: testingCronjobs
 */


global $wpdb;
$created = $wpdb->get_results("SELECT created_at FROM wp_item WHERE ID = 1", ARRAY_A);

$created_at = "";
$current_date = date("Y-m-d");
$dateToDay    = strtotime($current_date);

foreach($created as $crtd){
    $pieces = explode(" ", $crtd['created_at']);
    $created_at = $pieces[0];
}

$created_date = strtotime($created_at);
$difference = $dateToDay - $created_date;
$deadline = floor($difference/(60*60*24));


echo "The created date was  " . $deadline . '<br>';

if($deadline >= 2){
    echo "The item is already expired <br>";
}else{
    echo "You can use the item until days 3 <br>";
}


//echo "Today is " . $results . "<br>";
//require_once(home_url(). 'wordpress/wp-load.php:25');
//echo __FILE__;
//do_this_hourly();

//add_action('wp', 'my_activation');
//function my_activation() {
//    if (! wp_next_scheduled ( 'my_hourly_event' )) {
//        wp_schedule_event(time(), 'hourly', 'my_hourly_event');
//    }
//}
//
//add_action('my_hourly_event', 'do_this_hourly');

//$headers[] = 'From: Me Myself <me@example.net>';
//$headers[] = 'Cc: John Q Codex <jqc@wordpress.org>';
//$headers[] = 'Cc: iluvwp@wordpress.org'; // note you can just use a simple email address
//
//wp_mail( $to, $subject, $message, $headers );



function do_this_hourly() {
    $to = "suarezandrew441@gmail.com";
    $subject = "Testing Cron";
    $message = '<h1>'. "Hi There".'</h1><p>'. "Testing for the new cron jobs." . '</p>';
    $headers ='from:<suarezmichaelandrew6@gmail.com>'."\r\n";
    $headers .="Reply To: norely\r\n";
    $headers .= "Content-type: text/html\r\n";
    $email = wp_mail($to, $subject, $message,$headers);

    echo $to . '<br>' . $subject . '<br>' . $message . '<br>' . $headers . '<br>';
    if($email){
        print 'success';
    }else{
        print 'error! ';
    }
}

do_this_hourly();