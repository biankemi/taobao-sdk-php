<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vending.goods.save request
 * 
 * @author auto create
 * @since 1.0, 2018.08.20
 */
class AlibabaLstVendingGoodsSaveRequest
{
	/** 
	 * 商品信息
	 **/
	private $goodsDTOList;
	
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

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.goods.save";
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
