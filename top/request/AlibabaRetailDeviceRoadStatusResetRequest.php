<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.road.status.reset request
 * 
 * @author auto create
 * @since 1.0, 2018.12.06
 */
class AlibabaRetailDeviceRoadStatusResetRequest
{
	/** 
	 * 阿里设备编码
	 **/
	private $deviceCode;
	
	/** 
	 * 阿里设备物理编码
	 **/
	private $deviceSn;
	
	/** 
	 * 设备外部编码
	 **/
	private $deviceUuid;
	
	/** 
	 * 货道编码
	 **/
	private $roadNoList;
	
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

	public function setRoadNoList($roadNoList)
	{
		$this->roadNoList = $roadNoList;
		$this->apiParas["road_no_list"] = $roadNoList;
	}

	public function getRoadNoList()
	{
		return $this->roadNoList;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.road.status.reset";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->roadNoList,20,"roadNoList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
