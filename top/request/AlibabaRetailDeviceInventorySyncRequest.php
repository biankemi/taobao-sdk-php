<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.inventory.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaRetailDeviceInventorySyncRequest
{
	/** 
	 * 设备Id
	 **/
	private $deviceId;
	
	/** 
	 * 系统自动生成
	 **/
	private $deviceOption;
	
	/** 
	 * 设备类型
	 **/
	private $deviceType;
	
	/** 
	 * 系统自动生成
	 **/
	private $inventoryDtos;
	
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

	public function setDeviceOption($deviceOption)
	{
		$this->deviceOption = $deviceOption;
		$this->apiParas["device_option"] = $deviceOption;
	}

	public function getDeviceOption()
	{
		return $this->deviceOption;
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

	public function setInventoryDtos($inventoryDtos)
	{
		$this->inventoryDtos = $inventoryDtos;
		$this->apiParas["inventory_dtos"] = $inventoryDtos;
	}

	public function getInventoryDtos()
	{
		return $this->inventoryDtos;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.inventory.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
