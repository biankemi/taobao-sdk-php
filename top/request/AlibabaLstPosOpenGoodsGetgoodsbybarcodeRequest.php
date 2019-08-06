<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.pos.open.goods.getgoodsbybarcode request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaLstPosOpenGoodsGetgoodsbybarcodeRequest
{
	/** 
	 * 商品条码
	 **/
	private $barcode;
	
	private $apiParas = array();
	
	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.pos.open.goods.getgoodsbybarcode";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->barcode,"barcode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
