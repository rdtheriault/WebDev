<?php
  $fn = strip_tags($_POST['fn']);
  $ln = $_POST['ln'];
  $em = $_POST['em'];
  $pn = $_POST['pn'];
  $items = $_POST['cart'];
  //echo $cart;
	$item = explode(",", $items);
  	echo 'Thanks '.$fn.' for your order of '.$item[2];
	$body = 'Thanks '.$fn.' for your order of: '.$item[2];

	



	// Pear Mail Library
    require_once "/usr/share/php/Mail.php";

    $from = '<student-webmaster@hermistonsd.org>';
    $to = '<'.$em.'>';
    $subject = 'Thank you for your order from Dawg Prints';
    $body = "Hi,\n\nHow are you?";

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
    //$smtp = Mail::factory('mail', array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => '465',
            'auth' => true,
            'username' => 'student-webmaster@hermistonsd.org',
            'password' => 'HermistonSD'
        ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . '</p>');
    } else {
        echo('<p>Message successfully sent!</p>');
    }


?>