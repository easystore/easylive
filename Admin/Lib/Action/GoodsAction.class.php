<?php
class GoodsAction extends CommentAction{

	function index(){
	$good=D('Good');
	//导入分页类
    import('ORG.Util.Page');
    //获取总数
    $count=$good->count();
    $page = new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
    $show=$page->show();// 分页显示输出
	$arr=$good->limit($page->firstRow.','.$page->listRows)->select();
	$this->assign('show',$show);
	$this->assign('list',$arr);
	$this->display();
	}
	
	function add(){
	$this->display();
	}

	function doAdd(){
	$good=M('Good');
	$good->create();
	
	import('ORG.Net.UploadFile');
	$upload = new UploadFile();// 实例化上传类
	$upload->maxSize  = 3145728 ;// 设置附件上传大小
	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','html');// 设置附件上传类型
	$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
	if(!$upload->upload()) {// 上传错误提示错误信息
	$this->error($upload->getErrorMsg());
	}else{// 上传成功 获取上传文件信息
	$info = $upload->getUploadFileInfo();
	$good->filename = $info[0]['savename']; 
	
	$lastid=$good->add();
	if($lastid){
	$this->redirect('index');
	}
	else 
	{
	$this->error("添加失败");
	}
	}
	}
	
	function ser(){
	$good=D('Good');
	$data['name']=$_POST['name'];
	$arr=$good->where($data)->select();
	$this->assign('list',$arr);
	if($arr!=null){
	$this->display('index');
	}
	else 
	{
	$this->error('查询失败');
	}
	
	}
	
	function px(){
	$good=D('Good');
	$num=$_GET['num'];
	$arr=null;
	//导入分页类
    import('ORG.Util.Page');
    //获取总数
    $count=$good->count();
    $page = new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
    $show=$page->show();// 分页显示输出
	if($num=='0'){
	$arr=$good->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();	
	}
	elseif ($num=='1'){
	$arr=$good->order('name desc')->limit($page->firstRow.','.$page->listRows)->select();
	}
	elseif ($num=='2'){
	$arr=$good->order('price asc')->limit($page->firstRow.','.$page->listRows)->select();
	}
	$this->assign("list",$arr);
	$this->assign('show',$show);
	$this->display('index');
	}
	
	function edit(){
	$good=M('Good');
	$where['id']=$_GET['id'];
	$arr=$good->where($where)->find();
	$this->assign('data',$arr);
	$this->display();
	
	}
	
	function doEdit(){
	$good=M('Good');
	$data['id']=$_POST['id'];
	$data['name']=$_POST['name'];
	$data['sort']=$_POST['sort'];
	$data['price']=$_POST['price'];
	$data['bookprice']=$_POST['bookprice'];
	$data['num']=$_POST['num'];
	$data['exprs']=$_POST['exprs'];
	
	import('ORG.Net.UploadFile');
	$upload = new UploadFile();// 实例化上传类
	$upload->maxSize  = 3145728 ;// 设置附件上传大小
	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','html');// 设置附件上传类型
	$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
	if(!$upload->upload()) {// 上传错误提示错误信息
	$this->error($upload->getErrorMsg());
	}else{// 上传成功 获取上传文件信息
	$info = $upload->getUploadFileInfo();
	$data['filename'] = $info[0]['savename']; 
	
	$num=$good->save($data);
	if($num){
	$this->redirect('index');
	}
	else 
	{
	$this->error("添加失败");
	}
	}
	
	}
	
	function del(){
	$good=D('Good');
	$id=$_GET['id'];
	$num=$good->delete($id);
	
	if($num>0){
	$this->redirect('index');
	}
	else 
	{
	$this->error('删除失败');
	}
	}
}
