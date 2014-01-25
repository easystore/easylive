<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/city.css" />
</head>
<body>
<center><a href="__APP__/City/contry">选择区域</a>/<a href="">选择小区</a>/<a href="">店面照片</a></center>

<div id="city">
<ul>
<?php if(is_array($list)): foreach($list as $key=>$v): ?><li><?php echo ($v["city"]); ?></li><?php endforeach; endif; ?>
</ul>

</div>
</body>
</html>