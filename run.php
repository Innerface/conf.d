<?php
echo '子进程开始'.posix_getpid().":".date("Y-m-d H:i:s")."\n";
//传入参数校验
if(empty($argv) || !isset($argv)){
	echo "参数异常！\n";
}else{
	echo "当前执行为".implode('->',$argv)."进程脚本\n";
}
for($i=0;$i<=10 * ($argv[1] + 1);$i++){
	echo "".implode('->',$argv)." 第 $i 步\n";
}