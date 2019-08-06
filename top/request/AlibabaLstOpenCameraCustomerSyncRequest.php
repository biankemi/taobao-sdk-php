<?php
namespace top\request;

namespace top\request;

/**
 * TOP API: alibaba.lst.open.camera.customer.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.08.07
 */
class AlibabaLstOpenCameraCustomerSyncRequest
{
	/** 
	 * 智能摄像头顾客画像模型
	 **/
	private $equCameraCustomer;
	
	private $apiParas = array();
	
	public function setEquCameraCustomer($equCameraCustomer)
	{
		$this->equCameraCustomer = $equCameraCustomer;
		$this->apiParas["equ_camera_customer"] = $equCameraCustomer;
	}

	public function getEquCameraCustomer()
	{
		return $this->equCameraCustomer;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.open.camera.customer.sync";
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
