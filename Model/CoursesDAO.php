<?php
	require 'Courses.php';
	require 'Database.php';

	class CoursesDAO 
	{
		public function addCourse($course_id,$dept_id,$name,$year,$semester)
		{
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "insert into courses($course_id,$dept_id,$name,$year,$semester) values(?,?,?,?,?)";
			$res = $handle->prepare($sql);
			$res->execute(array($course_id,$dept_id,$name,$year,$semester));
			return $res;
		}

		public function getCourse($course_id)
		{ 
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "select * from courses where course_id=?";
			$res = $handle->prepare($sql);
			$res->execute(array($course_id));

				$cou = "";
				while($r = $res->fetch(PDO::FETCH_OBJ))
				{
					$cou = new Courses();
					$cou->course_id = $r->course_id;
					$cou->dept_id = $r->dept_id;					
					$cou->name = $r->name;
					$cou->year = $r->year;
					$cou->semester = $r->semester;
				}
				return $cou;
		}
	}


?>