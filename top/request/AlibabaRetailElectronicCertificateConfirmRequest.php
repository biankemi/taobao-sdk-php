<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.electronic.certificate.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaRetailElectronicCertificateConfirmRequest
{
	/** 
	 * 核销码
	 **/
	private $code;
	
	/** 
	 * 设备ID
	 **/
	private $deviceId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
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

	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
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
		return "alibaba.retail.electronic.certificate.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
