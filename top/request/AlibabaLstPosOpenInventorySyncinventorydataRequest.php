<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.inventory.syncinventorydata request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenInventorySyncinventorydataRequest
{
	/** 
	 * 库存对象列表
	 **/
	private $inventoryDTOList;
	
	/** 
	 * 门店对应的主账号id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setInventoryDTOList($inventoryDTOList)
	{
		$this->inventoryDTOList = $inventoryDTOList;
		$this->apiParas["inventory_d_t_o_list"] = $inventoryDTOList;
	}

	public function getInventoryDTOList()
	{
		return $this->inventoryDTOList;
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
		return "alibaba.lst.pos.open.inventory.syncinventorydata";
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
