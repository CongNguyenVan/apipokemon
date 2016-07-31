<?php

namespace V1;

use \Controller_Rest;
use \Config;
use \Lang;

class Controller_Base extends Controller_Rest
{
	protected $format = "json";
	
	public function before() {
		parent::before();
        Config::set("language", "en");
        Lang::load("en.yml");
	}
	public function make_result_data($error_cd, $message, $data){
        $result_data = null;

        if($error_cd == __("error_cd.common.success")){
            // エラー情報
            $result_data = array(
                    __("key.result_cd")=>$error_cd, // 正常
                    __("key.result_message")=>$message // エラーメッセージ
            );
            if($data != null){
                \Arr::set($result_data, __("key.result_data"), $data);
            }
        }else{
            // エラー
            $result_data = array(
                    __("key.result_cd")=>$error_cd, // 正常
                    __("key.result_message")=>$message // エラーメッセージ
            );
        }
        return $result_data;
    }
}