<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.goods.getgoodsbypaging request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenGoodsGetgoodsbypagingRequest
{
	/** 
	 * 当前页码
	 **/
	private $page;
	
	/** 
	 * 当前主账号userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

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
		return "alibaba.lst.pos.open.goods.getgoodsbypaging";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
