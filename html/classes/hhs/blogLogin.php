<?php

include("connect.php");

session_start();

 	$pw = $_POST['pw'];
    $name = $_POST['name'];

    $s = "Select * From hhs_blog Where user = '".$name."'";
    $q = mysqli_query($dbc,$s);
    if($q)
    {
        $row = mysqli_fetch_array($q, MYSQLI_ASSOC);
        $pwa = $row['pw'];
        
        if($pw == "")
        {
        	echo "You did not enter a password";
        }
        else if($pwa == $pw)
        {
           
            //$userID = $row['id' ];     
            
            # Access session.
            $_SESSION['owner123'] = $name;

            try
            {
            	header( "Location: update.php" ); 
            }
            catch (Exception $e)
            {
                echo "Please enable headers";
            }
            
        }
        else
        {
            echo "You have entered your password wrong..."; 
            $_SESSION['owner123'] = "";
        }
            
    }
    else
    {
        echo '<p>'.mysqli_error($dbc).'</p>';
        echo 'Query issue';
    }
    
    mysqli_close($dbc);



?>