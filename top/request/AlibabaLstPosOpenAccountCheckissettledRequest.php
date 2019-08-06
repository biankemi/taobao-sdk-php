<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.account.checkissettled request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenAccountCheckissettledRequest
{
	/** 
	 * 当前登录主账号userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.pos.open.account.checkissettled";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
