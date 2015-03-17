<?php
mb_internal_encoding('UTF-8');
$area = '青梅市御岳本町';

//$areaを青梅市にする
if (strpos($area,'町')!== false) {
    error_log($area);
    $area = mb_substr($area, 0, mb_strpos($area, '市')+1, 'UTF-8');
    error_log('町内:');
    error_log($area);
}
