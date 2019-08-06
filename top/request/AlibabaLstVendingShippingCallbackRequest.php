<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.shipping.callback request
 * 
 * @author auto create
 * @since 1.0, 2018.08.20
 */
class AlibabaLstVendingShippingCallbackRequest
{
	/** 
	 * 处理结果代码
	 **/
	private $code;
	
	/** 
	 * 厂商设备编码
	 **/
	private $equipmentCode;
	
	/** 
	 * 处理结果代码描述
	 **/
	private $message;
	
	/** 
	 * 出货时间
	 **/
	private $time;
	
	/** 
	 * 交易流水号
	 **/
	private $tradeFlowNo;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setEquipmentCode($equipmentCode)
	{
		$this->equipmentCode = $equipmentCode;
		$this->apiParas["equipment_code"] = $equipmentCode;
	}

	public function getEquipmentCode()
	{
		return $this->equipmentCode;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setTime($time)
	{
		$this->time = $time;
		$this->apiParas["time"] = $time;
	}

	public function getTime()
	{
		return $this->time;
	}

	public function setTradeFlowNo($tradeFlowNo)
	{
		$this->tradeFlowNo = $tradeFlowNo;
		$this->apiParas["trade_flow_no"] = $tradeFlowNo;
	}

	public function getTradeFlowNo()
	{
		return $this->tradeFlowNo;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.shipping.callback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->equipmentCode,"equipmentCode");
		RequestCheckUtil::checkNotNull($this->time,"time");
		RequestCheckUtil::checkNotNull($this->tradeFlowNo,"tradeFlowNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
