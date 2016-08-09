<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	session_start();
	if(isset($_SESSION['vo_id']))
	{
		$makeDisable='disabled';
	}else{	$makeDisable=' ';	}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <?php
        include 'materialize.html';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
			<div class="row">
				<div class="col l6 m6 s12 center-align">
					<?php include 'login.php';	?>
				</div>
				<div class="col l6 m6 s12 center-align">
					<?php include 'register.php';	?>
				</div>
			</div>
		</div>
    </body>
</html>
