<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table width="916" border="1" align="center" >
  <tr>
    <td width="128" height="443" valign="top"><table width="128" height="210" border="1">
      <tr>
        <td width="122" height="36" align="center"><a href="__APP__/Index/exits">退出</a>&nbsp;</td>
      </tr>
      <tr>
        <td height="42" align="center"><a href="__APP__/Book/index">订单查看</a></td>
      </tr>
      <tr>
        <td height="40" align="center"><a href="__APP__/Goods/index">商品信息维护</a></td>
      </tr>
      <tr>
        <td height="41" align="center">管理员维护</td>
      </tr>
      <tr>
        <td height="39" align="center"><a href="__APP__/Shop/index">便利店维护</a></td>
      </tr>
    </table></td>
    <td width="778" valign="top">
    <table width="781" border="1" >
      <tr>
        <td width="137" height="40">&nbsp;</td>
        <td width="392" align="center">管理员列表</td>
        <td width="238">
          <form id="form1" name="form1" method="post" action="__URL__/sear">
        用户名：
            <input type="text" name="username" />
            <input type="submit"  value="查询" />
          </form>
          </td>
      </tr>
      <tr>
        <td height="28" align="center"><a href="__URL__/adds">添加管理员</a></td>
        <td>&nbsp;</td>
        <td align="center"><a href="">排序</a></td>
      </tr>
      <tr>
        <td height="358" colspan="3" valign="top"><table width="770" border="1">
          <tr>
            <td width="140" align="center">用户名</td>
            <td width="141" align="center">登录名</td>
            <td width="333" align="center">注册时间</td>
            <td width="138" align="center">管理</td>
          </tr>
          <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
            <td align="center"><?php echo ($v["userName"]); ?></td>
            <td align="center"><?php echo ($v["loginName"]); ?></td>
            <td align="center"><?php echo (date('Y年m月d H时i分s',$v["date"])); ?></td>
            <td align="center"><a href="__URL__/del/id/<?php echo ($v["id"]); ?>">删除</a>&nbsp;</td>
          </tr><?php endforeach; endif; ?>
          
        </table>
        <?php echo ($show); ?>
        </td>
        </tr>
    </table>
    
    </td>
  </tr>
</table>
</body>
</html>