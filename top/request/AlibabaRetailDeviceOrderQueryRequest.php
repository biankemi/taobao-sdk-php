<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.device.order.query request
 * 
 * @author auto create
 * @since 1.0, 2018.12.26
 */
class AlibabaRetailDeviceOrderQueryRequest
{
	/** 
	 * 阿里设备编码
	 **/
	private $deviceCode;
	
	/** 
	 * 阿里设备物理ID
	 **/
	private $deviceSnList;
	
	/** 
	 * 外部设备编码
	 **/
	private $deviceUuid;
	
	/** 
	 * 查询订单结束时间
	 **/
	private $ends;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * CASH 现金，ALIPAY_FACE_PAY_QR 支付宝，VENDING_PRIZE 抽奖，FACE_PAY 人脸
	 **/
	private $payType;
	
	/** 
	 * 查询订单开始时间
	 **/
	private $starts;
	
	/** 
	 * -20 已退款，-10 交易关闭 ，10 创单 20 已支付  30 已出货  40 交易完成
	 **/
	private $status;
	
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

	public function setDeviceSnList($deviceSnList)
	{
		$this->deviceSnList = $deviceSnList;
		$this->apiParas["device_sn_list"] = $deviceSnList;
	}

	public function getDeviceSnList()
	{
		return $this->deviceSnList;
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

	public function setEnds($ends)
	{
		$this->ends = $ends;
		$this->apiParas["ends"] = $ends;
	}

	public function getEnds()
	{
		return $this->ends;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->apiParas["pay_type"] = $payType;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function setStarts($starts)
	{
		$this->starts = $starts;
		$this->apiParas["starts"] = $starts;
	}

	public function getStarts()
	{
		return $this->starts;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.device.order.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->deviceSnList,20,"deviceSnList");
		RequestCheckUtil::checkNotNull($this->ends,"ends");
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->starts,"starts");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
