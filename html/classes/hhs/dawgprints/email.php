<?php
  $fn = strip_tags($_POST['fn']);
  $ln = $_POST['ln'];
  $em = $_POST['em'];
  $pn = $_POST['pn'];
  $cart = $_POST['cart'];
  //echo $cart;
	$items = explode(",", $cart);
  	echo 'Thanks '.$fn.' for your order of '.$items[2].'<br>';
	$fill = 'Thanks '.$fn.' for your order of:\n\r ';

	
	$arrlength = count($items);

    for($x = 0; $x < $arrlength; $x++) {
        echo $items[$x];
        echo "<br>";
    }


	// Pear Mail Library
    require_once "/usr/share/php/Mail.php";

    $from = '<student-webmaster@hermistonsd.org>';
    $to = '<'.$em.'>';
    $subject = 'Thank you for your order from Dawg Prints';
    $body = $fill;

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => '465',
            'auth' => true,
            'username' => 'student-webmaster@hermistonsd.org',
            'password' => 'HermistonSD'
        ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . ' Please check your email to ensure it is correct.</p>');
    } else {
        echo('<p>Order was successfully sent!</p>');
    }


?>