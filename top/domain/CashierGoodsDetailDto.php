<?php
namespace top\domain;


/**
 * 收银商品快照对象列表
 * @author auto create
 */
class CashierGoodsDetailDto
{
	
	/** 
	 * 商品条码，可能有无码商品
	 **/
	public $bar_code;
	
	/** 
	 * 商品数量
	 **/
	public $count;
	
	/** 
	 * 商品销售价(折后)，单位:分
	 **/
	public $goods_actual_price;
	
	/** 
	 * 商品进货价 单位:分
	 **/
	public $goods_cost_price;
	
	/** 
	 * 商品名称
	 **/
	public $goods_name;
	
	/** 
	 * 商品原价(折前)，单位:分
	 **/
	public $goods_origin_price;
	
	/** 
	 * ISV商品Id
	 **/
	public $isv_goods_id;	
}
