<?php
namespace top\domain;


/**
 * 智能摄像头顾客画像模型
 * @author auto create
 */
class EquCameraCustomerTdo
{
	
	/** 
	 * 顾客年龄
	 **/
	public $age;
	
	/** 
	 * 摄像头设备编号
	 **/
	public $device_id;
	
	/** 
	 * 顾客画像编号
	 **/
	public $face_id;
	
	/** 
	 * 新老顾客：新顾客: new,老顾客: old
	 **/
	public $recognition;
	
	/** 
	 * 顾客性别, 男: male  女: female  其他: other
	 **/
	public $sex;	
}
