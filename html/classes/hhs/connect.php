<?php
   $dbc = mysqli_connect ('localhost', 'WebDev', 'HermistonSD1', 'hhs') OR die (mysqli_connect_error() );
   mysqli_set_charset($dbc, 'utf8'); #this is normally put in a different file
?>