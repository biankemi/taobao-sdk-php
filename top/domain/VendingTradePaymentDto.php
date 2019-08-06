<?php
namespace top\domain;


/**
 * 支付明细
 * @author auto create
 */
class VendingTradePaymentDto
{
	
	/** 
	 * 分佣佣金
	 **/
	public $commission;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 支付金额
	 **/
	public $pay_amount;
	
	/** 
	 * 支付通道：1现金，2支付宝，3微信，255其他
	 **/
	public $pay_channel;
	
	/** 
	 * 支付类型：1扣款，2退款
	 **/
	public $pay_type;
	
	/** 
	 * 外部系统支付流水号
	 **/
	public $payment_flow_no;
	
	/** 
	 * 外部系统支付用户ID，比如：支付宝PID
	 **/
	public $payment_user_id;
	
	/** 
	 * 支付状态：1待付款，2已付款
	 **/
	public $status;
	
	/** 
	 * 外部系统交易流水号
	 **/
	public $trade_flow_no;	
}
