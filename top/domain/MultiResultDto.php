<?php
namespace top\domain;


/**
 * 结果集
 * @author auto create
 */
class MultiResultDto
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 执行失败结果集
	 **/
	public $error_list;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 处理成功结果集
	 **/
	public $module_list;
	
	/** 
	 * 是否执行成功
	 **/
	public $success;	
}
