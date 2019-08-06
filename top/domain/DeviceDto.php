<?php
namespace top\domain;


/**
 * 数据
 * @author auto create
 */
class DeviceDto
{
	
	/** 
	 * 激活码
	 **/
	public $activation;
	
	/** 
	 * 设备地址
	 **/
	public $device_address;
	
	/** 
	 * 设备编码
	 **/
	public $device_code;
	
	/** 
	 * 设备名称
	 **/
	public $device_name;
	
	/** 
	 * 设备物理编码
	 **/
	public $device_sn;
	
	/** 
	 * 设备状态0离线，1 在线 2 待激活
	 **/
	public $device_status;
	
	/** 
	 * 设备类型
	 **/
	public $device_type_name;
	
	/** 
	 * 设备外部编码
	 **/
	public $device_uuid;
	
	/** 
	 * 纬度
	 **/
	public $latitude;
	
	/** 
	 * 经度
	 **/
	public $longtitude;	
}
