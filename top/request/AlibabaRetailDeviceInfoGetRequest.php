<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.info.get request
 * 
 * @author auto create
 * @since 1.0, 2018.12.06
 */
class AlibabaRetailDeviceInfoGetRequest
{
	/** 
	 * 阿里设备编码
	 **/
	private $deviceCode;
	
	/** 
	 * 阿里设备物理ID（32位）
	 **/
	private $deviceSn;
	
	/** 
	 * 外部设备ID
	 **/
	private $deviceUuid;
	
	private $apiParas = array();
	
	public function setDeviceCode($deviceCode)
	{
		$this->deviceCode = $deviceCode;
		$this->apiParas["device_code"] = $deviceCode;
	}

	public function getDeviceCode()
	{
		return $this->deviceCode;
	}

	public function setDeviceSn($deviceSn)
	{
		$this->deviceSn = $deviceSn;
		$this->apiParas["device_sn"] = $deviceSn;
	}

	public function getDeviceSn()
	{
		return $this->deviceSn;
	}

	public function setDeviceUuid($deviceUuid)
	{
		$this->deviceUuid = $deviceUuid;
		$this->apiParas["device_uuid"] = $deviceUuid;
	}

	public function getDeviceUuid()
	{
		return $this->deviceUuid;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.info.get";
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
