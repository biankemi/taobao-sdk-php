<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.tradeflow.save request
 * 
 * @author auto create
 * @since 1.0, 2019.06.04
 */
class AlibabaLstVendingTradeflowSaveRequest
{
	/** 
	 * 交易流水信息
	 **/
	private $tradeFlowDTOList;
	
	private $apiParas = array();
	
	public function setTradeFlowDTOList($tradeFlowDTOList)
	{
		$this->tradeFlowDTOList = $tradeFlowDTOList;
		$this->apiParas["trade_flow_d_t_o_list"] = $tradeFlowDTOList;
	}

	public function getTradeFlowDTOList()
	{
		return $this->tradeFlowDTOList;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.tradeflow.save";
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
