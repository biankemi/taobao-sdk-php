<?php
namespace top\domain;


/**
 * 接口具体返回的业务数据对象
 * @author auto create
 */
class ErrorResult
{
	
	/** 
	 * 单个业务处理数据
	 **/
	public $data;
	
	/** 
	 * 错误码：0成功1失败
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 主键或唯一标识
	 **/
	public $key;
	
	/** 
	 * 单个商品处理结果 true：成功，false：失败
	 **/
	public $success;	
}
