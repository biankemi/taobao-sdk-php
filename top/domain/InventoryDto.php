<?php
namespace top\domain;


/**
 * 库存对象列表
 * @author auto create
 */
class InventoryDto
{
	
	/** 
	 * 设备品牌
	 **/
	public $brand;
	
	/** 
	 * 数据来源的设备类型   0：pos，1：自动售货机，-1：其它  缺省值：0
	 **/
	public $device_type;
	
	/** 
	 * 创建时间 精确到毫秒
	 **/
	public $gmt_create;
	
	/** 
	 * 最后修改 精确到毫秒
	 **/
	public $gmt_modified;
	
	/** 
	 * 设备物理硬件ID（自身保证唯一性）
	 **/
	public $hardware_id;
	
	/** 
	 * ISV商品Id
	 **/
	public $isv_goods_id;
	
	/** 
	 * isv库存Id主键
	 **/
	public $isv_inventory_id;
	
	/** 
	 * 设备型号
	 **/
	public $model;
	
	/** 
	 * 操作类型 STOCKTAKING-清点，盘点(set重置);STOCKENTERING-入库(加);STOCKOUTPU-出库(减);STOCK_SET-直接(set重置)
	 **/
	public $operate_type;
	
	/** 
	 * 变更库存传值为正数
	 **/
	public $trans_quantity;	
}
