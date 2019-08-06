<?php
namespace top\domain;

/**
 * 订单对象列表
 * @author auto create
 */
class CashierFlowDto
{
	
	/** 
	 * 设备品牌
	 **/
	public $brand;
	
	/** 
	 * 收银商品快照对象列表
	 **/
	public $cashier_goods_detail_d_t_o_list;
	
	/** 
	 * 收银支付明细列表对象
	 **/
	public $cashier_pay_detail_d_t_o_list;
	
	/** 
	 * 数据来源的设备类型   0：pos，1：自动售货机，9999：其它  缺省值：0
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
	 * isv订单流水号
	 **/
	public $isv_trade_flow_num;
	
	/** 
	 * 设备型号
	 **/
	public $model;
	
	/** 
	 * 订单类型 0: 交易订单快照  1:退款订单快照  缺省为0
	 **/
	public $order_type;
	
	/** 
	 * 关联lst原始订单号:主要是退款订单关联原始订单号使用
	 **/
	public $original_trade_flow_num;
	
	/** 
	 * 支付状态 请求失败:requestFail 支付失败:payFail 支付超时:payTimeOut 支付成功:paySuccess
	 **/
	public $pay_status;
	
	/** 
	 * 支付方式 支付宝:alipay 微信:wechat 现金:cashPay 其他:other
	 **/
	public $pay_type;
	
	/** 
	 * 结算单总价(实收)，单位:分
	 **/
	public $total_actual_price;
	
	/** 
	 * 结算单总价(应收)，单位:分
	 **/
	public $total_price;	
}
