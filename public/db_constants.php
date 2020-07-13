<?php

$DBName = 'sentrifugo-crm';
$ServerArr = (!empty($_SERVER['REQUEST_URI'])) ? explode("/", $_SERVER['REQUEST_URI']) : array();
if(!empty($ServerArr[1])){
	switch ($ServerArr[1]) {
		case 'demo-sentrifugo':
			$DBName = 'sentrifugo-crm-demo';
			break;
		case 'wawilson-sentrifugo':
			$DBName = 'sentrifugo-crm-wawilson';
			break;
		default:
			$DBName = 'sentrifugo-crm';
			break;
	}
}

defined('SENTRIFUGO_HOST') || define('SENTRIFUGO_HOST','localhost');
defined('SENTRIFUGO_USERNAME') || define('SENTRIFUGO_USERNAME','root');
defined('SENTRIFUGO_PASSWORD') || define('SENTRIFUGO_PASSWORD','d8k@qxa_HbY!Y6A$tgv%pFSN#BHSL');
defined('SENTRIFUGO_DBNAME') || define('SENTRIFUGO_DBNAME',$DBName);
?>