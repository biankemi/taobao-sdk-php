<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.electronic.certificate.pre.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaRetailElectronicCertificatePreConfirmRequest
{
	/** 
	 * 核销码
	 **/
	private $code;
	
	/** 
	 * 设备ID
	 **/
	private $deviceId;
	
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

	public function getApiMethodName()
	{
		return "alibaba.retail.electronic.certificate.pre.confirm";
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
