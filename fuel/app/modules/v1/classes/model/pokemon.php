<?php

namespace V1\Model;

use V1\Model_Base;
use Common\Model\Db\Pokemon as PokemonData;
use Common\Model\Db\Pokemon_Generation;
use Common\Model\Db\Pokemon_Species;
use Common\Model\Db\Pokemon_Type;

/**
* 
*/
class Pokemon extends Model_Base
{
	public static function pokemons() {
		$pokemons = PokemonData::find("all",
			array(
				'select' => array('id', 'generation_id', 'species_id', 'type_first', 'type_second', 'pokemon_name', 'url'),
				'where' => array(
					array(PokemonData::COLUMN_DELETE_FLG, PokemonData::NOT_DELETED)
				)
			));
		\Log::info(\DB::last_query());
		$pokemon = array();
		foreach ($pokemons as $key => $value) {
			$pokemon['id'] = $value['id'];
			$pokemon['generation_id'] = $value['generation_id'];
			$pokemon['species_id'] = $value['species_id'];
			$pokemon['type_first'] = $value['type_first'];
			$pokemon['type_second'] = $value['type_second'];
			$pokemon['pokemon_name'] = $value['pokemon_name'];
			$pokemon['url'] = \Uri::create(DOCROOT . $value['url']);
		}
		return $pokemon;
	}

	public static function generations() {
		$generations = Pokemon_Generation::find('all', array(
			'select' => array('id', 'generation_name'),
			'where' => array(
				array(Pokemon_Generation::COLUMN_DELETE_FLG, Pokemon_Generation::NOT_DELETED)
			)
		));
		\Log::info(\DB::last_query());
		$generation = array();
		foreach ($generations as $key => $value) {
			$generation['id'] = $value['id'];
			$generation['generation_name'] = $value['generation_name'];
		}
		return $generation;
	}

	public static function types() {
		$types = Pokemon_Type::find('all', array(
			'select' => array('id', 'type_name'),
			'where' => array(
				array(Pokemon_Type::COLUMN_DELETE_FLG, Pokemon_Type::NOT_DELETED)
			)
		));
		\Log::info(\DB::last_query());
		$type = array();
		foreach ($types as $key => $value) {
			$type['id'] = $value['id'];
			$type['type_name'] = $value['type_name'];
		}
		return $type;
	}

	public static function species() {
		$species = Pokemon_Species::find('all', array(
			'select' => array('id', 'species_name'),
			'where' => array(
				array(Pokemon_Species::COLUMN_DELETE_FLG, Pokemon_Species::NOT_DELETED)
			)
		));
		\Log::info(\DB::last_query());
		$specie = array();
		foreach ($species as $key => $value) {
			$specie['id'] = $value['id'];
			$specie['species_name'] = $value['species_name'];
		}
		return $specie;
	}

	public static function select_pokemon_data() {
		$result = array();

		$pokemons = self::pokemons();
		array_push($result, array('pokemons' => $pokemons));
		$generations = self::generations();
		array_push($result, array('generations' => $generations));
		$types = self::types();
		array_push($result, array('types' => $types));
		$species = self::species();
		array_push($result, array('species' => $species));
		return $result;
	}
}