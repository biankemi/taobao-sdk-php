<?php
namespace top\domain;


/**
 * 交易流水记录
 * @author auto create
 */
class VendingTradeFlowDto
{
	
	/** 
	 * 实际总金额
	 **/
	public $actual_amount;
	
	/** 
	 * 佣金金额
	 **/
	public $commission;
	
	/** 
	 * 折扣
	 **/
	public $discount;
	
	/** 
	 * 设备编码
	 **/
	public $equipment_code;
	
	/** 
	 * 设备ID
	 **/
	public $equipment_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品清单
	 **/
	public $goods_detail_d_t_o_list;
	
	/** 
	 * 支付明细
	 **/
	public $payment_d_t_o_list;
	
	/** 
	 * 外部系统正向交易流水号
	 **/
	public $payment_trade_flow_no;
	
	/** 
	 * 设备厂商编码
	 **/
	public $supplier_code;
	
	/** 
	 * 交易总金额
	 **/
	public $total_amount;
	
	/** 
	 * 外部系统交易流水号
	 **/
	public $trade_flow_no;
	
	/** 
	 * 交易类型：1购买，2退款
	 **/
	public $trade_type;	
}
