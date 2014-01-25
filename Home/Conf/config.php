<?php
$arr=include './config.php';
$arr2= array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'=>true,
);
return array_merge($arr,$arr2);
?>