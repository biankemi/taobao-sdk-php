<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.vending.price.whitelist.remove request
 * 
 * @author auto create
 * @since 1.0, 2019.03.28
 */
class AlibabaRetailVendingPriceWhitelistRemoveRequest
{
	/** 
	 * 是否生效到所有设备
	 **/
	private $allDevice;
	
	/** 
	 * 条码
	 **/
	private $barcode;
	
	/** 
	 * 设备编码 device_code_list, device_uuid_list 二选一必填
	 **/
	private $deviceCodeList;
	
	/** 
	 * 外部设备编码 device_code_list, device_uuid_list 二选一必填
	 **/
	private $deviceUuidList;
	
	/** 
	 * 如果该参数传入，条码以商品条码为准
	 **/
	private $itemId;
	
	/** 
	 * 淘宝用户ID
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setAllDevice($allDevice)
	{
		$this->allDevice = $allDevice;
		$this->apiParas["all_device"] = $allDevice;
	}

	public function getAllDevice()
	{
		return $this->allDevice;
	}

	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
	}

	public function setDeviceCodeList($deviceCodeList)
	{
		$this->deviceCodeList = $deviceCodeList;
		$this->apiParas["device_code_list"] = $deviceCodeList;
	}

	public function getDeviceCodeList()
	{
		return $this->deviceCodeList;
	}

	public function setDeviceUuidList($deviceUuidList)
	{
		$this->deviceUuidList = $deviceUuidList;
		$this->apiParas["device_uuid_list"] = $deviceUuidList;
	}

	public function getDeviceUuidList()
	{
		return $this->deviceUuidList;
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

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.vending.price.whitelist.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->barcode,"barcode");
		RequestCheckUtil::checkMaxListSize($this->deviceCodeList,20,"deviceCodeList");
		RequestCheckUtil::checkMaxListSize($this->deviceUuidList,20,"deviceUuidList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
