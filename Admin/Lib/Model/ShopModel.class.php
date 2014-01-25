<?php
class ShopModel extends RelationModel{

	protected $_auto=array(
	array('password','md5',1,'function') ,
	array('date','time',1,'function'),
	 array('status','1'),
	);

}