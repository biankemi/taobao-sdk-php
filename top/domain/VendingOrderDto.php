<?php
namespace top\domain;


/**
 * 零售通设备订单
 * @author auto create
 */
class VendingOrderDto
{
	
	/** 
	 * 发货时间
	 **/
	public $delivery_time;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 零售通订单号
	 **/
	public $id;
	
	/** 
	 * 供应商订单号
	 **/
	public $isv_order_no;
	
	/** 
	 * 发货清单
	 **/
	public $shipped_equipment_list;
	
	/** 
	 * 快递联系人
	 **/
	public $shipping_contact;
	
	/** 
	 * 快递联系电话
	 **/
	public $shipping_contact_tel;
	
	/** 
	 * 快递单号
	 **/
	public $tracking_no;	
}
