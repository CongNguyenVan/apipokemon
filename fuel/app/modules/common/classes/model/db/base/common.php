<?php

namespace Common\Model\Db;

/**
 * 共通モデル定義クラス
 * @author JIN
 * @version 1.0 2014/11/01
 */
class Base_Common extends \Orm\Model{
	
	const COLUMN_ID = "id"; // ID
	const COLUMN_CREATE_DATETIME = "create_at"; // 作成日付
	const COLUMN_UPDATE_DATETIME = "update_at"; // 更新日付
	const COLUMN_DELETE_FLG = "delete_at"; // 削除フラグ
	
	/** 削除フラグ **/
	const NOT_DELETED = "0"; // 未削除
	const DELETED = "1"; // 削除済み
    const DEFAULT_ZERO = 0; // 現在体脂肪

	protected static $_primary_key = array("id");

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
			'property' => 'create_at',
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
			'property' => 'update_at',
		)
	);

}

?>
