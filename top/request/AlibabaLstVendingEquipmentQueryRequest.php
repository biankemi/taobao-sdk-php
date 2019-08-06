<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.equipment.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstVendingEquipmentQueryRequest
{
	/** 
	 * 设备查询条件
	 **/
	private $openEquipmentQuery;
	
	private $apiParas = array();
	
	public function setOpenEquipmentQuery($openEquipmentQuery)
	{
		$this->openEquipmentQuery = $openEquipmentQuery;
		$this->apiParas["open_equipment_query"] = $openEquipmentQuery;
	}

	public function getOpenEquipmentQuery()
	{
		return $this->openEquipmentQuery;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.equipment.query";
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
