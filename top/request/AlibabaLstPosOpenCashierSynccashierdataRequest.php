<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.cashier.synccashierdata request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenCashierSynccashierdataRequest
{
	/** 
	 * 订单对象列表
	 **/
	private $cashierFlowDTOList;
	
	/** 
	 * 门店对应的主账号id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setCashierFlowDTOList($cashierFlowDTOList)
	{
		$this->cashierFlowDTOList = $cashierFlowDTOList;
		$this->apiParas["cashier_flow_d_t_o_list"] = $cashierFlowDTOList;
	}

	public function getCashierFlowDTOList()
	{
		return $this->cashierFlowDTOList;
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
		return "alibaba.lst.pos.open.cashier.synccashierdata";
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
