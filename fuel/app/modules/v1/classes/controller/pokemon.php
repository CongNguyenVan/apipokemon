<?php

namespace V1;

use V1\Model\Pokemon;

class Controller_Pokemon extends Controller_Base
{
	public function get_index() {
		$result = array();
		$data = Pokemon::select_pokemon_data();
		$result['items'] = $data;
		return $this->response(
				Controller_Base::make_result_data(
						__("error_cd.common.success"),
						__("success_message.000"), $result));
	}
}