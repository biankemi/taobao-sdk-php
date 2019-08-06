<?php
namespace top\request;

/**
 * TOP API: alibaba.retail.shorturl.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaRetailShorturlGetRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $options;
	
	/** 
	 * 源url
	 **/
	private $sourceUrl;
	
	private $apiParas = array();
	
	public function setOptions($options)
	{
		$this->options = $options;
		$this->apiParas["options"] = $options;
	}

	public function getOptions()
	{
		return $this->options;
	}

	public function setSourceUrl($sourceUrl)
	{
		$this->sourceUrl = $sourceUrl;
		$this->apiParas["source_url"] = $sourceUrl;
	}

	public function getSourceUrl()
	{
		return $this->sourceUrl;
	}

	public function getApiMethodName()
	{
		return "alibaba.retail.shorturl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sourceUrl,"sourceUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
