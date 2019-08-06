<?php
namespace top\domain;


/**
 * 排序条件
 * @author auto create
 */
class SortParam
{
	
	/** 
	 * 排序字段名称：gmt_create创建时间、gmt_modified修改时间、id主键
	 **/
	public $sort_field_name;
	
	/** 
	 * 排序方式：asc、desc
	 **/
	public $sort_order;	
}
