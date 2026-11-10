<?php 

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,HEAD,OPTIONS");
header("Access-Control-Allow-Headers: Origin,Content-Type,Accept,Authorization");  

use Bitrix\Main\Loader;


define('STOP_STATISTICS', true);
define('NO_KEEP_STATISTIC', 'Y');
define('NO_AGENT_STATISTIC','Y');
define('NO_AGENT_CHECK', true);
define('DisableEventsCheck', true);
define('NOT_CHECK_PERMISSIONS', true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

include __DIR__.'/../local/php_interface/vendor/autoload.php';
include __DIR__.'/vendor/YAApi.php';

$POST = ( $_POST ) ?: json_decode(file_get_contents('php://input'), true);

switch ( YApp::Route()['entity'] ) {
    
    case 'send': echo json_encode(YAApi::apiSendform( $POST )); break;

    default: echo json_encode(['error' => 404, 'description' => 'Неверный запрос']);
}
?>
