<?php
namespace top\domain;


/**
 * 详情
 * @author auto create
 */
class ShipDetailDTO
{
	
	/** 
	 * 商品
	 **/
	public $item_id;
	
	/** 
	 * 外部订单ID
	 **/
	public $outer_trade_no;
	
	/** 
	 * 0已发货 1发货 2部分发货
	 **/
	public $ship_status;	
}
