<?php
$dataItem = null;
$dataItem = array(
    array(
        'id' => 1,
        'type' => 'industry',
        'categoryName' => '行业动态'
    ),
    array(
        'id' => 2,
        'type' => 'information',
        'categoryName' => '朗朗资讯'
    ),
    array(
        'id' => 3,
        'type' => 'media',
        'categoryName' => '媒体报道'
    ),
    array(
        'id' => 4,
        'type' => 'welfare',
        'categoryName' => '公益活动'
    )
);

$result = array(
    'resCode' => 0,
    'data' => $dataItem,
    'message' => 'OK'
);
exit(json_encode($result));
?>