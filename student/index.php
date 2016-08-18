<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	require_once '../Model/Students.php';
	require_once '../Model/Courses.php';

	session_start();
	if(!isset($_SESSION['students']))
	{
		header('Location: ../');
	}

	//Store session var to obj
	$stu = new Students();
	$stu = $_SESSION['students'];
	$crs[] = new Courses();
	$crs = $_SESSION['crs'];
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
				<?php for($i=1;$i<count($crs);$i++) { ?>
					<div class="col l4 m6 s12 center-align">
						<!-- <p>
							<?php echo $stu->roll_no;	?> <br>
							<?php echo $stu->name;	?> <br>
							<?php echo $crs[1]->course_id;	?> <br>
							<?php echo $crs[1]->name;	?> <br>
						</p> -->
						<div class="card blue-grey darken-1">
				            <div class="card-content white-text">
				              <span class="card-title"><?php echo $crs[$i]->course_id; ?></span>
				              <p><?php echo $crs[$i]->name; ?></p>
				            </div>
				            <div class="card-action">
				              <a href="#">Show this</a>
				            </div>
				        </div>
					</div>
				<?php }	?>

			</div>
		</div>
    </body>
</html>
