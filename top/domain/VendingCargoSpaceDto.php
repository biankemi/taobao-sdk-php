<?php
namespace top\domain;


/**
 * 执行成功结果集
 * @author auto create
 */
class VendingCargoSpaceDto
{
	
	/** 
	 * 货道类型：1普通货道，2VIP货道
	 **/
	public $biz_type;
	
	/** 
	 * 货道编号，从1开始
	 **/
	public $cargo_road_no;
	
	/** 
	 * 货道商品数量
	 **/
	public $count;
	
	/** 
	 * 折扣价
	 **/
	public $discount_price;
	
	/** 
	 * 厂商设备唯一编码
	 **/
	public $equipment_code;
	
	/** 
	 * 外部商品ID
	 **/
	public $external_goods_id;
	
	/** 
	 * 厂商设备ID
	 **/
	public $external_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品ID
	 **/
	public $goods_id;
	
	/** 
	 * 货道ID
	 **/
	public $id;
	
	/** 
	 * 商品单价，单位：分
	 **/
	public $price;
	
	/** 
	 * 货架编号，从1开始
	 **/
	public $shelf_no;
	
	/** 
	 * 供应商编码
	 **/
	public $supplier_code;	
}
