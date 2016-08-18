<?php

namespace Common\Model\Db;

/**
* 
*/
class Pokemon_Type extends Base_Common
{
	protected static $_table_name = 'type';
	const TABLE_NAME = "type"; // テーブル名

	const COLUMN_SPECIES_NAME = 'type_name';

	protected static $_properties = array(
		'id' => array(
			'data_type' => 'int',
			'label' => 'Id',
			'null' => false,
			'validation' => array(
				0 => 'required',
				'numeric_min' => array(
					0 => -2147483648,
				),
				'numeric_max' => array(
					0 => 2147483647,
				),
			),
			'form' => array(
				'type' => false,
			),
		),
		'type_name' => array(
			'data_type' => 'varchar',
			'label' => 'Type name',
			'null' => false,
			'validation' => array(
				0 => 'required',
				'max_length' => array(
					0 => 255,
				),
			),
			'form' => array(
				'type' => 'text',
				'maxlength' => 255,
			),
		),
		'create_at' => array(
			'data_type' => 'string',
			'label' => 'Create datetime',
			'null' => true,
			'validation' => array(
			),
			'form' => array(
				'type' => 'text',
			),
		),
		'update_at' => array(
			'data_type' => 'string',
			'label' => 'Update datetime',
			'null' => true,
			'validation' => array(
			),
			'form' => array(
				'type' => 'text',
			),
		),
	);
}