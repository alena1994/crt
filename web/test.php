<?php

$t1 = [1, 2, '2'];
task_1($t1); 
echo "<br />";
$t2 = array (11, 100, -1, 0, 20);
task_2($t2);
echo "<br />";
$t3 = [1, 2, 16, 15];
task_3($t3);
echo "<br />";
//$t4 = [1, 1, 1, 2, 2, 3, 3, 3];
$t5 = ["a"=>1, "b"=>2];
task_5($t5);

function task_1($variable)
{
	for ($i = 0; $i < 5; $i++)
	{
		echo($variable[$i]);
	}
	
	return ($this);
}

function task_2($variable)
{
	$max = null;
	$min = null;
	for ($i = 0; $i < 5; $i++)
	{
		if ($min && $variable[$i] < $min) 
		{
			$min = $variable[$i];
		} elseif (!$min) {
			$min = $variable[$i];
		}
		if ($variable[$i] > $max)
		{
			$max = $variable[$i];
		}
	}
	echo "max" . $max;
	echo "min" . $min;
	//print_r($variable);
	return ($this);
}

function task_3($variable)
{
	for ($i = 4; $i >= 0; $i --)
	{
		echo $variable[$i];
	}
	return ($this);
}

function task_4($variable)
{
	return ($variable);
}

function task_5($variable)
{
	$m=[];
	foreach ($variable as $key => $value) {
		$m[$value] . [$key];
		
	}
	echo $m;
	return ($this);
}


//print task_2($t2);
//print task_3($t3);
//print task_4($t4);
//print task_5($t5);
