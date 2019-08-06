<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.vending.register request
 * 
 * @author auto create
 * @since 1.0, 2019.05.06
 */
class AlibabaRetailDeviceVendingRegisterRequest
{
	/** 
	 * 设备地址
	 **/
	private $address;
	
	/** 
	 * 业务编码，联系对接人申请
	 **/
	private $bizCode;
	
	/** 
	 * 设备类型
	 **/
	private $deviceModel;
	
	/** 
	 * 设备名称
	 **/
	private $deviceName;
	
	/** 
	 * 对接过阿里atm传入
	 **/
	private $deviceSn;
	
	/** 
	 * 外部设备编号
	 **/
	private $deviceUuid;
	
	/** 
	 * 楼栋信息。如果不传系统会根据address传入计算，为确保准确性请传入并确保address完整
	 **/
	private $floor;
	
	/** 
	 * 层。如果不传系统会根据address传入计算，为确保准确性请传入并确保address完整
	 **/
	private $layer;
	
	/** 
	 * 室内地址描述。如果不传系统会根据address传入计算，为确保准确性请传入并确保address完整
	 **/
	private $location;
	
	/** 
	 * COMMUNITY：小区,SCHOOL：学校,OFFICE：写字楼,SHOPPING_MALL：商场,AIRPORT：机场,SUBWAY：地铁,HOSPITAL：医院,PLAYGROUNDS：游乐场所,FACTORY：工厂,VIEWPOINT：旅游景点,OTHERS：其他
	 **/
	private $scene;
	
	/** 
	 * 场地名称，根据场地类型来，如：学校名称，商场名称。如果不传系统会根据address传入计算，为确保准确性请传入并确保address完整
	 **/
	private $siteName;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setDeviceModel($deviceModel)
	{
		$this->deviceModel = $deviceModel;
		$this->apiParas["device_model"] = $deviceModel;
	}

	public function getDeviceModel()
	{
		return $this->deviceModel;
	}

	public function setDeviceName($deviceName)
	{
		$this->deviceName = $deviceName;
		$this->apiParas["device_name"] = $deviceName;
	}

	public function getDeviceName()
	{
		return $this->deviceName;
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

	public function setFloor($floor)
	{
		$this->floor = $floor;
		$this->apiParas["floor"] = $floor;
	}

	public function getFloor()
	{
		return $this->floor;
	}

	public function setLayer($layer)
	{
		$this->layer = $layer;
		$this->apiParas["layer"] = $layer;
	}

	public function getLayer()
	{
		return $this->layer;
	}

	public function setLocation($location)
	{
		$this->location = $location;
		$this->apiParas["location"] = $location;
	}

	public function getLocation()
	{
		return $this->location;
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
	}

	public function setSiteName($siteName)
	{
		$this->siteName = $siteName;
		$this->apiParas["site_name"] = $siteName;
	}

	public function getSiteName()
	{
		return $this->siteName;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.vending.register";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->deviceModel,"deviceModel");
		RequestCheckUtil::checkNotNull($this->deviceName,"deviceName");
		RequestCheckUtil::checkNotNull($this->deviceUuid,"deviceUuid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
