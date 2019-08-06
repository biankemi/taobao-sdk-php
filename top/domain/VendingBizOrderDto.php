<?php
namespace top\domain;


/**
 * 数据
 * @author auto create
 */
class VendingBizOrderDto
{
	
	/** 
	 * 条码
	 **/
	public $bar_code;
	
	/** 
	 * 设备地址
	 **/
	public $device_address;
	
	/** 
	 * 设备Code
	 **/
	public $device_code;
	
	/** 
	 * 设备名称
	 **/
	public $device_name;
	
	/** 
	 * 设备编码
	 **/
	public $device_sn;
	
	/** 
	 * 外部设备ID
	 **/
	public $device_uuid;
	
	/** 
	 * 创单时间
	 **/
	public $gmt_create;
	
	/** 
	 * 订单修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 外部订单ID
	 **/
	public $main_outer_order_id;
	
	/** 
	 * 支付类型
	 **/
	public $pay_type;
	
	/** 
	 * 支付类型名称
	 **/
	public $pay_type_name;
	
	/** 
	 * 点位名称
	 **/
	public $point_name;
	
	/** 
	 * 货道编号
	 **/
	public $road_id;
	
	/** 
	 * 商家id
	 **/
	public $seller_id;
	
	/** 
	 * -20 已退款，-10 交易关闭 ，10 创单 20 已支付  30 已出货  40 交易完成
	 **/
	public $status;
	
	/** 
	 * 支付状态
	 **/
	public $status_name;
	
	/** 
	 * 淘系订单id
	 **/
	public $tb_main_order_id;
	
	/** 
	 * 商品名称
	 **/
	public $title;
	
	/** 
	 * 金额，单位分
	 **/
	public $total_fee;	
}
