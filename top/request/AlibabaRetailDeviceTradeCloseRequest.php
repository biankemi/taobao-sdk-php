<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.trade.close request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaRetailDeviceTradeCloseRequest
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
	 * 外部订单号
	 **/
	private $isvOrderNo;
	
	/** 
	 * 订单商品列表
	 **/
	private $itemList;
	
	/** 
	 * 选项
	 **/
	private $orderUpdateOption;
	
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

	public function setIsvOrderNo($isvOrderNo)
	{
		$this->isvOrderNo = $isvOrderNo;
		$this->apiParas["isv_order_no"] = $isvOrderNo;
	}

	public function getIsvOrderNo()
	{
		return $this->isvOrderNo;
	}

	public function setItemList($itemList)
	{
		$this->itemList = $itemList;
		$this->apiParas["item_list"] = $itemList;
	}

	public function getItemList()
	{
		return $this->itemList;
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

	public function getApiMethodName()
	{
		return "alibaba.retail.device.trade.close";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
		RequestCheckUtil::checkNotNull($this->isvOrderNo,"isvOrderNo");
		RequestCheckUtil::checkNotNull($this->itemList,"itemList");
		RequestCheckUtil::checkMaxListSize($this->itemList,20,"itemList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
