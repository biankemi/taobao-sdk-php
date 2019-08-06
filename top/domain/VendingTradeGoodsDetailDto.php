<?php
namespace top\domain;


/**
 * 商品清单
 * @author auto create
 */
class VendingTradeGoodsDetailDto
{
	
	/** 
	 * 商品实际金额
	 **/
	public $actual_amount;
	
	/** 
	 * 商品条码
	 **/
	public $barcode;
	
	/** 
	 * 货道编码
	 **/
	public $cargo_road_no;
	
	/** 
	 * 商品分类
	 **/
	public $category;
	
	/** 
	 * 数量
	 **/
	public $count;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品标题
	 **/
	public $goods_title;
	
	/** 
	 * 商品单价
	 **/
	public $price;
	
	/** 
	 * 货架编码
	 **/
	public $shelf_no;
	
	/** 
	 * 商品总金额
	 **/
	public $total_amount;
	
	/** 
	 * 外部系统交易流水号
	 **/
	public $trade_flow_no;	
}
