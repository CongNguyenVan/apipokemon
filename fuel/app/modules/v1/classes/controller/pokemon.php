<?php

namespace V1;

class Controller_Pokemon extends Controller_Base
{
	public function get_index() {
		return $this->response(
				Controller_Base::make_result_data(
						__("error_cd.common.success"),
						__("success_message.000"), NULL));
	}
}