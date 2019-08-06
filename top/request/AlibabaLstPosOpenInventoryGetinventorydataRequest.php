<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.inventory.getinventorydata request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenInventoryGetinventorydataRequest
{
	/** 
	 * ISV商品Id列表
	 **/
	private $isvGoodsIdList;
	
	/** 
	 * 门店主账号Id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setIsvGoodsIdList($isvGoodsIdList)
	{
		$this->isvGoodsIdList = $isvGoodsIdList;
		$this->apiParas["isv_goods_id_list"] = $isvGoodsIdList;
	}

	public function getIsvGoodsIdList()
	{
		return $this->isvGoodsIdList;
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
		return "alibaba.lst.pos.open.inventory.getinventorydata";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvGoodsIdList,"isvGoodsIdList");
		RequestCheckUtil::checkMaxListSize($this->isvGoodsIdList,20,"isvGoodsIdList");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
