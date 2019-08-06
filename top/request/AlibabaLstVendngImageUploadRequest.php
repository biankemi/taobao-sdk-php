<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.vendng.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2018.08.20
 */
class AlibabaLstVendngImageUploadRequest
{
	/** 
	 * 图片文件字节数组
	 **/
	private $imgBytes;
	
	private $apiParas = array();
	
	public function setImgBytes($imgBytes)
	{
		$this->imgBytes = $imgBytes;
		$this->apiParas["img_bytes"] = $imgBytes;
	}

	public function getImgBytes()
	{
		return $this->imgBytes;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vendng.image.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imgBytes,"imgBytes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
