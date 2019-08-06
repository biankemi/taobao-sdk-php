<?php
namespace top\domain;


/**
 * 数据
 * @author auto create
 */
class RoadItemSaveDto
{
	
	/** 
	 * true 可售 false 不可售
	 **/
	public $available;
	
	/** 
	 * 条码
	 **/
	public $barcode;
	
	/** 
	 * 库存数，全量
	 **/
	public $inventory;
	
	/** 
	 * 商品编码
	 **/
	public $item_id;
	
	/** 
	 * 货道编号，若无跟商品编码保持一致
	 **/
	public $road_ids;
	
	/** 
	 * 容量
	 **/
	public $volume;	
}
