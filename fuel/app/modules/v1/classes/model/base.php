<?php

namespace V1;

use \Model;

class Model_Base extends Model
{
	/** 共通カラム **/
	const COLUMN_CREATE_DATETIME = "create_at"; // 作成日時
	const COLUMN_UPDATE_DATETIME = "update_at"; // 更新日時
	const COLUMN_DELETE_FLG = "delete_at"; // 削除フラグ

	/** 削除フラグ **/
	const NOT_DELETED = 0; // 未削除
	const DELETED = 1; // 削除済み

	/** 日付フォーマット **/
	const DATETIME_FORMAT = "Y-m-d H:i:s";
	const DATE_FORMAT = "Y-m-d";
}