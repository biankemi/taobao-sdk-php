<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.vending.road.item.sync request
 * 
 * @author auto create
 * @since 1.0, 2019.03.28
 */
class AlibabaRetailVendingRoadItemSyncRequest
{
	/** 
	 * 入参
	 **/
	private $roadItemSync;
	
	private $apiParas = array();
	
	public function setRoadItemSync($roadItemSync)
	{
		$this->roadItemSync = $roadItemSync;
		$this->apiParas["road_item_sync"] = $roadItemSync;
	}

	public function getRoadItemSync()
	{
		return $this->roadItemSync;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.vending.road.item.sync";
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
