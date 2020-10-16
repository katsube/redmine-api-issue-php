<?php
/**
 *  Redmineにチケットを新規作成する
 *
 */

//--------------------------------------------------------------
// ライブラリ
//--------------------------------------------------------------
require_once('util.php');
require_once('config.php');

//--------------------------------------------------------------
// 実行
//--------------------------------------------------------------
// リクエスト先
$url = sprintf('%s/issues.json?key=%s', END_POINT, TOKEN);

// リクエスト実行
$result = sendPostRequest($url,[
	'issue' => [
		// 必須項目
		'project_id'       => 1,			              // プロジェクト
		'subject'          => 'APIテスト',			    // 題名

		// 以下は任意で指定する
		'description'      => 'APIテスト（説明）',	// 説明
		//'tracker_id'       => '',			// トラッカー
		//'status_id'        => '',			// ステータス
		//'priority_id'      => '',			// 優先度
		//'category_id'      => '',			// カテゴリ
		//'fixed_version_id' => '',			// 対象バージョン
		//'assigned_to_id'   => '',			// 担当者
		//'parent_issue_id'  => '',			// 親チケット
		//'custom_fields'    => '',			// カスタムフィールド
		//'watcher_user_ids' => '',			// ウォッチャー(ユーザーID) v2.3.0〜
		//'is_private'       => '',			// プライベートチケットにするか
		//'estimated_hours'  => ''			// 予定工数
	]
]);

// 結果を表示
echo prettyJsonString( $result );
