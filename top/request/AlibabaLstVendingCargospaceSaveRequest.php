<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.cargospace.save request
 * 
 * @author auto create
 * @since 1.0, 2018.08.20
 */
class AlibabaLstVendingCargospaceSaveRequest
{
	/** 
	 * 货道信息
	 **/
	private $cargoSpaceDTOList;
	
	private $apiParas = array();
	
	public function setCargoSpaceDTOList($cargoSpaceDTOList)
	{
		$this->cargoSpaceDTOList = $cargoSpaceDTOList;
		$this->apiParas["cargo_space_d_t_o_list"] = $cargoSpaceDTOList;
	}

	public function getCargoSpaceDTOList()
	{
		return $this->cargoSpaceDTOList;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.cargospace.save";
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
