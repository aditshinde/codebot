<?php
	require 'Students.php';
	require 'Database.php';

	class StudentsDAO 
	{
		public function addStudent($roll_no,$name,$gender,$contact,$dept_id,$year,$division,$batch,$pincode)
		{
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "insert into students(roll_no,name,gender,contact,dept_id,year,division,batch,pincode) values(?,?,?,?,?,?,?,?,?)";
			$res = $handle->prepare($sql);
			$res->execute(array($roll_no,$name,$gender,$contact,$dept_id,$year,$division,$batch,$pincode));
			return $res;
		}

		public function getStudent($roll)
		{ 
			$db = new Database();
			$handle = $db->connectDb();

			$sql = "select * from students where roll_no=?";
			$res = $handle->prepare($sql);
			$res->execute(array($roll));

				$stu = "";
				while($r = $res->fetch(PDO::FETCH_OBJ))
				{
					$stu = new Students();
					$stu->roll_no = $r->roll_no;
					$stu->name = $r->name;
					$stu->gender = $r->gender;
					$stu->contact = $r->contact;
					$stu->dept_id = $r->dept_id;
					$stu->year = $r->year;
					$stu->division = $r->division;
					$stu->batch = $r->batch;
					$stu->pincode = $r->pincode;
				}
				return $stu;
		}
	}

/*
	// addStudent()
	$stu_DAO = new StudentsDAO();
	if($stu_DAO->addStudent('13it1505','Abcd','m',8745632,2,2,'b','b2',400123)){	echo 'Student added->';	}
	else{	echo 'Insertion failed !';	}

	//Just for testing...
	$stu_DAO = new StudentsDAO();
	$stu = new Students();
	$roll = '15it6605';
	$s = $stu_DAO->getStudent($roll);
	if($s==false){	echo 'Invalid roll no. !';	}
	else{	echo $s->roll_no.' | '.$s->name.' | '.$s->dept_id;	}
*/


?>