<?php
namespace top\domain;


/**
 * 交易流水查询条件
 * @author auto create
 */
class OpenTradeFlowQuery
{
	
	/** 
	 * 设备ID
	 **/
	public $equipment_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create_range;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified_range;
	
	/** 
	 * 页码
	 **/
	public $page_num;
	
	/** 
	 * 每页记录数
	 **/
	public $page_rows;
	
	/** 
	 * 排序条件
	 **/
	public $sort_param_list;	
}
