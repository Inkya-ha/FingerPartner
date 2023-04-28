<?php

// POSTされたデータを取得
$audio_data = file_get_contents('php://input');

// 必要に応じて、Content-Length、X-CallId、X-Directionヘッダーの値を取得する
$content_length = $_SERVER['HTTP_CONTENT_LENGTH'];
$call_id = $_SERVER['HTTP_X_CALLID'];
$direction = $_SERVER['HTTP_X_DIRECTION'];

// 録音データを保存するディレクトリを指定する
$save_dir = './call/';

// 録音データを保存するファイル名を生成する
$file_name = date('Ymd_His') . '_' . $call_id . '_' . $direction . '.wav';

// 録音データをファイルに保存する
file_put_contents($save_dir . $file_name, $audio_data);

// 成功したことを示すHTTPステータスコードを返す
http_response_code(200);
