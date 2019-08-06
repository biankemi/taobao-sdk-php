<?php
namespace top\domain;


/**
 * 接口具体返回的业务数据对象
 * @author auto create
 */
class GoodsDto
{
	
	/** 
	 * 商品条码,唯一
	 **/
	public $bar_code;
	
	/** 
	 * 零售价，单位为分
	 **/
	public $reserve_price;
	
	/** 
	 * 简称
	 **/
	public $shot_title;
	
	/** 
	 * 规格
	 **/
	public $spec;
	
	/** 
	 * 商品标题
	 **/
	public $title;	
}
