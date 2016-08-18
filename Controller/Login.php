<?php
	require_once '../Model/StudentsDAO.php';
	require_once '../Model/Students_courseDAO.php';

	session_start();

	function validate($value)
	{
		return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
	}
 	if(count($_POST))
 	{
 		//echo '<script>alert("count post !");</script>';
 		if(isset($_POST['Lroll']) && isset($_POST['Lpass']))
 		{
 			$sd = new StudentsDAO();
			$stu = new Students();
			$uname = validate($_POST['Lroll']);
			$pass = validate($_POST['Lpass']);
			echo '<script>alert("'.$uname.' !");</script>';
			$stu = $sd->verifyStudent($uname,$pass);
			if($stu==false){
				session_destroy();
				echo '<script>alert("Invalid login !");</script>';
 				header("Location: ../");
				//echo 'Error !';	
			}
			else{	
				//echo '<br>'.$vol->vo_id.' | '.validate(($vol->vo_name)).' | '.$vol->vo_contact;	
				$stu = $sd->getStudent($stu->roll_no);
				if($stu==false){	echo 'Invalid roll no. !';	}
				else
				{
					// Set student details
					$_SESSION['students'] = $stu;	//working properly

					//set course details
					$_SESSION['crs'] = array();
					$scd = new Students_courseDAO();
					$_SESSION['crs'] = $scd->getCourses($stu->roll_no);	//receive all course_names alloted to this student
					
				}
				header("Location: ../student");
			}
		}
 	}
 	else
 	{
 		session_destroy();
 		//echo '<script>alert("login pg !");</script>';
 		header("Location: ../");
 		//echo "kaun ho aap !";
 	}	
?>