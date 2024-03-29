<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.goods.syncgoodsdata request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenGoodsSyncgoodsdataRequest
{
	/** 
	 * 商品对象列表
	 **/
	private $goodsDTOList;
	
	/** 
	 * 用户主账号Id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setGoodsDTOList($goodsDTOList)
	{
		$this->goodsDTOList = $goodsDTOList;
		$this->apiParas["goods_d_t_o_list"] = $goodsDTOList;
	}

	public function getGoodsDTOList()
	{
		return $this->goodsDTOList;
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
		return "alibaba.lst.pos.open.goods.syncgoodsdata";
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
