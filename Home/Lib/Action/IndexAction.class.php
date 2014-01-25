<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->display();
    }
    public function register(){
    $m=M('Register');
    $m->sname=$_POST['name'];
    $m->telphone=$_POST['tel'];
    $m->address=$_POST['addr'];
    $m->password=$_POST['pwd'];
   $count=$m->add();
   if($count>0){
   $this->success("注册成功");
   }
   else
   {
   $this->error("注册失败");
   }
    }
    
    
   function add(){
   $this->display();
   }
   function addGood(){
   	import('ORG.Net.UploadFile');
   	
   $m=M('Good');
   $m->sort=$_POST['sort'];
   $m->name=$_POST['name'];
   $m->price=$_POST['price'];
   $m->type=$_POST['type'];
   $m->num=$_POST['num'];
   $m->exprs=$_POST['exprs'];
   
   
	$upload = new UploadFile();// 实例化上传类
	$upload->maxSize  = 3145728 ;// 设置附件上传大小
	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	$upload->savePath =  './upload/image/';// 设置附件上传目录
 	if(!$upload->upload()) {// 上传错误提示错误信息
	$this->error($upload->getErrorMsg());
	 }else{// 上传成功 获取上传文件信息
	$info =  $upload->getUploadFileInfo();
 	}
 	//dump($info);
   $m->image=$info[0]['savepath'];
   $count=$m->add();
   if($count>0){
   $this->success('商品添加成功!');
   }
   else 
   {
   $this->error('商品添加失败!');
   }
   }
}