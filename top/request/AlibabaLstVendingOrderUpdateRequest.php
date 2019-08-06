<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.order.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstVendingOrderUpdateRequest
{
	/** 
	 * 零售通设备订单
	 **/
	private $vendingOrderDTO;
	
	private $apiParas = array();
	
	public function setVendingOrderDTO($vendingOrderDTO)
	{
		$this->vendingOrderDTO = $vendingOrderDTO;
		$this->apiParas["vending_order_d_t_o"] = $vendingOrderDTO;
	}

	public function getVendingOrderDTO()
	{
		return $this->vendingOrderDTO;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.order.update";
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
