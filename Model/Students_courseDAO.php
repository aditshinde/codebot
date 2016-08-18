<?php
	require_once 'Students_course.php';
	require_once 'CoursesDAO.php';
	//require 'Database.php';

	class Students_courseDAO {
		public function getCourses($roll)
		{
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "select * from Students_course where roll_no=?";
			$res = $handle->prepare($sql);
			$res->execute(array($roll));

				//$crs = array();
				$crs[] = new Courses();
				$cd = new CoursesDAO();
				while($r = $res->fetch(PDO::FETCH_OBJ))
				{
					//$crs_obj = $cd->getCourse($r->course_id);
					array_push($crs,$cd->getCourse($r->course_id));
				}
			return $crs;	//return course names
		}	
	}

/***************************
	$scd = new Students_courseDAO();
	//$crs = array();
	$c[] = new Courses();
	$c = $scd->getCourses('14ce5504');

	print_r($c);
****************************/	
?>