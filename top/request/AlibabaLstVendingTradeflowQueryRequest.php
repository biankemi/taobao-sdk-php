<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.tradeflow.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstVendingTradeflowQueryRequest
{
	/** 
	 * 交易流水查询条件
	 **/
	private $openTradeFlowQuery;
	
	private $apiParas = array();
	
	public function setOpenTradeFlowQuery($openTradeFlowQuery)
	{
		$this->openTradeFlowQuery = $openTradeFlowQuery;
		$this->apiParas["open_trade_flow_query"] = $openTradeFlowQuery;
	}

	public function getOpenTradeFlowQuery()
	{
		return $this->openTradeFlowQuery;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.tradeflow.query";
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
