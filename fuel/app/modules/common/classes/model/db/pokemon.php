<?php

namespace Common\Model\Db;

/**
* 
*/
class Pokemon extends Base_Common
{
	protected static $_table_name = 'pokemon';
	const TABLE_NAME = "pokemon"; // テーブル名

	const COLUMN_GENERATION_ID = 'generation_id';
	const COLUMN_SPECIES_ID = 'species_id';
	const COLUMN_TYPE_FIRST = 'type_first';
	const COLUMN_TYPE_SECOND = 'type_second';
	const COLUMN_POKEMON_NAME = 'pokemon_name';

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
		'generation_id' => array(
			'data_type' => 'int',
			'label' => 'Generation id',
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
		'species_id' => array(
			'data_type' => 'int',
			'label' => 'Species id',
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
		'type_first' => array(
			'data_type' => 'int',
			'label' => 'Type first',
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
		'type_second' => array(
			'data_type' => 'int',
			'label' => 'Type second',
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
		'pokemon_name' => array(
			'data_type' => 'varchar',
			'label' => 'Pokemon name',
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
		'url' => array(
			'data_type' => 'varchar',
			'label' => 'Url image',
			'null' => true,
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