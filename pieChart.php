<?php
/**
 * @param $width        画布宽度
 * @param $height       画布高度
 * @param $percentage   所占百分比，以小数计算
 * @param $innerWidth   内圆宽度
 * @param $innerHeight  内圆高度
 * @param $bgColor      背景颜色选择（可增加扩展）
 * @param $checkColor   标识颜色选择（可增加扩展）
 */
function createPieChart($width,$height,$percentage,$innerWidth,$innerHeight,$bgColor,$checkColor){
    // 创建图像
    $image = imagecreatetruecolor($width, $height);
    // 画布颜色
    $white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
    //选择背景颜色
    switch ($bgColor){
        case 1:$bg = imagecolorallocate($image,251,165,108);
               break;
        case 2:$bg = imagecolorallocate($image,38,225,122);
               break;
    }
    //选择标识颜色
    switch ($checkColor){
        case 1:$color = imagecolorallocate($image,90,155,213);
              break;
    }
    $initialization= -90;
    $calculatedAngle= (360*$percentage)+$initialization;
    imagefill($image,0,0,$white);
    imagefilledellipse ($image, $width/2, $height/2, $width, $height, $bg );
    imagefilledarc($image, $width/2,$height/2, $width, $height, $initialization, $calculatedAngle, $color, IMG_ARC_PIE);
    imagefilledellipse ($image, $width/2 ,$height/2, $innerWidth, $innerHeight, $white );
    // 输出图像
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
}

//DEMO
//createPieChart(250,250,0.4,200,200,1,1);
