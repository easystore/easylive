<?php
class  AdminModel extends RelationModel{

	protected $_auto = array ( 
   // array('status','1'),  // 新增的时候把status字段设置为1
    array('password','md5',1,'function') , // 对password字段在新增的时候使md5函数处理
   // array('userName','md5',1,'function') , // 对userName字段在新增的时候使md5函数处理
   // array('userid','getId',1,'callback'), // 对name字段在新增的时候回调getName方法
    array('date','time',1,'function'), // 对create_time字段在更新的时候写入当前时间戳
   
);

	protected $_validate = array(
   // array('verify','require','验证码必须！'), //默认情况下用正则进行验证
   // array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    array('rpwd','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
   // array('code','checkCode','验证码错误',0,'callback',1),
     array('username','/^\w{6,}$/','用户名必须是六个字母以上',0,'regex',1),
     
);

}