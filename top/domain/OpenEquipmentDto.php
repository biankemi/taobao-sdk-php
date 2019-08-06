<?php
namespace top\domain;


/**
 * 设备信息列表
 * @author auto create
 */
class OpenEquipmentDto
{
	
	/** 
	 * 地区
	 **/
	public $area;
	
	/** 
	 * 地区代码
	 **/
	public $area_code;
	
	/** 
	 * 城市
	 **/
	public $city;
	
	/** 
	 * 城市代码
	 **/
	public $city_code;
	
	/** 
	 * 设备激活时间
	 **/
	public $enabled_time;
	
	/** 
	 * 设备代码
	 **/
	public $equipment_code;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 设备ID
	 **/
	public $id;
	
	/** 
	 * 型号名称
	 **/
	public $model_name;
	
	/** 
	 * 省份
	 **/
	public $province;
	
	/** 
	 * 省份代码
	 **/
	public $province_code;
	
	/** 
	 * 设备回收（转租）时间
	 **/
	public $recovered_time;
	
	/** 
	 * 设备状态：1未激活，2已激活，3已回收（转租）
	 **/
	public $status;
	
	/** 
	 * 供应商代码
	 **/
	public $supplier_code;	
}
