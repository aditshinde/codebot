<?php
	
	$code = $_POST['code'];
	//echo $code;	//it'll show error on this page, but can be displayed in textarea

	$input_file = fopen("../Submissions/14ce5504.java", "w");
	fwrite($input_file, $code);
	fclose($input_file);
/*
	exec('cd submissions && javac 14ce5504.java && java Hello', $res);
	$output = '';
	foreach($res as $r)
	{		
		$output .= $r.'<br>';
	}
	//print($output);	
	echo $output;
*/
	exec('cd ../Submissions && javac 14ce5504.java 2>&1', $re);
	if($re)
	{
		$op='';
		foreach($re as $r)
		{		
			$op .= $r.'<br>';
		}	
		echo $op;
	}
	else
	{
		exec('cd ../Submissions && java Test', $res);
		$output = '';
		foreach($res as $r)
		{		
			$output .= $r.'<br>';
		}
		//print($output);	
		echo $output;
	}	
?>