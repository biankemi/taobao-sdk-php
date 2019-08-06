<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.trade.ship request
 * 
 * @author auto create
 * @since 1.0, 2018.08.03
 */
class AlibabaRetailDeviceTradeShipRequest
{
	/** 
	 * 设备ID
	 **/
	private $deviceId;
	
	/** 
	 * 设备类型
	 **/
	private $deviceType;
	
	/** 
	 * 选项
	 **/
	private $orderUpdateOption;
	
	/** 
	 * 详情
	 **/
	private $shipDetailList;
	
	/** 
	 * 内部订单编号
	 **/
	private $tradeNo;
	
	private $apiParas = array();
	
	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["device_type"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
	}

	public function setOrderUpdateOption($orderUpdateOption)
	{
		$this->orderUpdateOption = $orderUpdateOption;
		$this->apiParas["order_update_option"] = $orderUpdateOption;
	}

	public function getOrderUpdateOption()
	{
		return $this->orderUpdateOption;
	}

	public function setShipDetailList($shipDetailList)
	{
		$this->shipDetailList = $shipDetailList;
		$this->apiParas["ship_detail_list"] = $shipDetailList;
	}

	public function getShipDetailList()
	{
		return $this->shipDetailList;
	}

	public function setTradeNo($tradeNo)
	{
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo()
	{
		return $this->tradeNo;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.trade.ship";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
		RequestCheckUtil::checkNotNull($this->tradeNo,"tradeNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
