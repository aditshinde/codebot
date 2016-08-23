<?php
	
$code     = $_POST['code'];
$time =  time();
$testCase = '';
$timeout  = 5;
//echo $code;	//it'll show error on this page, but can be displayed in textarea

$input_file = fopen('../Submissions/'.$time.'.java', 'w');
fwrite($input_file, $code);
fclose($input_file);
exec('cd ../Submissions && javac '.$time.'.java 2>&1', $re);
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
//		exec('cd ../Submissions && java Solution', $res);
//		$output = '';
//		foreach($res as $r)
//		{		
//			$output .= $r.'<br>';
//		}
//		//print($output);	
//		echo $output;

    
    //Execution Procedure starts here
        $descriptorspec = array(
           0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
           1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
           2 => array("pipe", "w") // stderr is a file to write to
        );
        $pipes = array();

        $process = proc_open('cd ../Submissions && java Solution', $descriptorspec, $pipes);

        if (is_resource($process)) {
            // $pipes now looks like this:
            // 0 => writeable handle connected to child stdin
            // 1 => readable handle connected to child stdout
            // Any error output will be appended to /tmp/error-output.txt

            stream_set_blocking($pipes[0], 0);
            stream_set_blocking($pipes[1], 0);

            fwrite($pipes[0], $testCase);
            fclose($pipes[0]);

            $startTime = time();
            $op='';
            while((time()-$startTime<=$timeout)&&($f = fgets($pipes[1])))
            {   
                $op = $op.$f.'<br/>';
            }
            echo $op;
            fclose($pipes[1]);


            while ($f = fgets($pipes[2])) {
                echo $f.'<br/>';
            }                         
            fclose($pipes[2]);
            // It is important that you close any pipes before calling
            // proc_close in order to avoid a deadlock
            $return_value = proc_close($process);

            echo 'Execution Time:'.(time()-$startTime).'s<br/>';

            if($return_value==1)
            {
                echo 'Execution Time Limit Exceeded! '
                . 'Try optimising your code for faster execution.';
            }
        }
        else 
        {
            echo 'Process could not be created';
        }

}	