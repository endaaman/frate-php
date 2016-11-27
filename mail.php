<?php

// メールはスパム避けのためにAJAXでPOSTリクエストを投げて動的にページに埋め込む

if($_SERVER['REQUEST_METHOD'] != 'POST'){
	http_response_code(400);
	exit();
}

echo 'frate1839@gmail.com';
