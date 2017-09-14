<?php
for($i=0;$i<10;$i++) {
	$pid = pcntl_fork();
	switch ($pid) {
		case -1:
			echo "couldn't fork\n";
			break;
		case 0: {
			echo "I'm child ".posix_getpid()." => ".date("Y-m-d H:i:s")."\n";
			sleep(5);
			break;
		}
		default:
			echo "I'm parent ".posix_getpid()." => ".date("Y-m-d H:i:s")."\n";
			$subPid = pcntl_wait($status);
			var_dump($status); echo "\n";
			exit(0);
	}
}
