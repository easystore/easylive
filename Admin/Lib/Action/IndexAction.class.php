<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	
function index(){
$this->display();
}

function login(){
$m=M('Admin');
$data['loginName']=$_POST['loginName'];
$data['password']=$_POST['password'];
$arr=$m->where(md5($data))->find();
//dump($arr);

if ($arr){
	$_SESSION['username']=$arr['userName'];
	$_SESSION['id']=$arr['id'];
$this->redirect('Admin/manager');
}
else 
{
$this->error("登录失败!");
}

}


function exits(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
	
		setcookie(session_name(),'',time()-1,'/');
	
	}
	session_destroy();
	$this->redirect('Index/index');
	
}
}