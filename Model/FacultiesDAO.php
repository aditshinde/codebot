<?php
	require 'Faculties.php';
	require 'Database.php';

	class FacultiesDAO 
	{
		public function addFaculty($emp_no,$name,$dept_id)
		{
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "insert into faculties(emp_no,name,dept_id) values(?,?,?)";
			$res = $handle->prepare($sql);
			$res->execute(array($emp_no,$name,$dept_id));
			return $res;
		}

		public function getFaculty($emp_no)
		{ 
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "select * from faculties where emp_no=?";
			$res = $handle->prepare($sql);
			$res->execute(array($emp_no));

				$fac = "";
				while($r = $res->fetch(PDO::FETCH_OBJ))
				{
					$fac = new Faculties();
					$fac->emp_no = $r->emp_no;
					$fac->name = $r->name;
					$fac->dept_id = $r->dept_id;
				}
				return $fac;
		}
	}


?>