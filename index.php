<?php
$pid = pcntl_fork();
//记录子进程pid
$children_pid = $pid;
echo "process fork begins! < $pid > \n";
echo 'This process is main process,pid is '.posix_getpid()."\n\n";
if ($pid == -1)
{
	die("could not fork");
}
elseif($pid == 0)
{
	echo "I'm the child  process \n";
	echo 'This process is child,pid is '.posix_getpid()."\n\n";
	sleep(100);
}
else
{
	echo "I'm the parent process \n";
	echo 'This process is parent,pid is '.posix_getpid()."\n\n";
	
	$subPid= pcntl_wait($status);
	var_dump($status);
	
//	pcntl_waitpid($children_pid, $status, WUNTRACED);
//	echo"wait $pid -> ". time() . "\n";
	exit;
}
?>
