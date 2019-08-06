<?php
namespace top\domain;


/**
 * 收银支付明细列表对象
 * @author auto create
 */
class CashierPayDetailDto
{
	
	/** 
	 * 业务类型  正向支付(支付)：0  缺省为：0   逆向支付(退款)：1
	 **/
	public $biz_type;
	
	/** 
	 * 备注信息
	 **/
	public $desc_info;
	
	/** 
	 * 创建时间 精确到毫秒
	 **/
	public $gmt_create;
	
	/** 
	 * 买家支付/退款账号Id 若payType=alipay ,需要传递 买家的支付宝用户id；其它支付方式可不传
	 **/
	public $pay_account;
	
	/** 
	 * 支付金额 单位：分 缺省值:0
	 **/
	public $pay_amount;
	
	/** 
	 * 支付流水号  正向支付:支付流水号; 逆向支付:退款流水号;
	 **/
	public $pay_flow_num;
	
	/** 
	 * 支付状态    请求失败:requestFail    支付失败:payFail  支付超时:payTimeOut    支付成功:paySuccess  退款成功:refundSuccess 退款失败:refundFail
	 **/
	public $pay_status;
	
	/** 
	 * 支付类型 支付宝:alipay  微信:wechat 现金:cashPay， 其它:other
	 **/
	public $pay_type;	
}
