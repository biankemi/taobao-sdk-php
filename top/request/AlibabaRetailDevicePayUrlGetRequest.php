<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.payUrl.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaRetailDevicePayUrlGetRequest
{
	/** 
	 * 业务BizName
	 **/
	private $bizName;
	
	/** 
	 * 设备
	 **/
	private $deviceId;
	
	/** 
	 * 外币订单ID
	 **/
	private $isvOrderId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setBizName($bizName)
	{
		$this->bizName = $bizName;
		$this->apiParas["biz_name"] = $bizName;
	}

	public function getBizName()
	{
		return $this->bizName;
	}

	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
	}

	public function setIsvOrderId($isvOrderId)
	{
		$this->isvOrderId = $isvOrderId;
		$this->apiParas["isv_order_id"] = $isvOrderId;
	}

	public function getIsvOrderId()
	{
		return $this->isvOrderId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.payUrl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizName,"bizName");
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
		RequestCheckUtil::checkNotNull($this->isvOrderId,"isvOrderId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
