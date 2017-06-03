# php-pie-chart
因为想给邮箱发送统计图表，结果JS 和CSS3都被过滤了
无可奈何只能使用PHP 生成图片制作图表 一个小东西 希望能帮到你...

一个防止邮箱过滤的PHP饼状图图片生成类
使用起来非常简单

 ** @param $width       ** 画布宽度
 ** @param $height      ** 画布高度
 ** @param $percentage  ** 所占百分比，以小数计算
 ** @param $innerWidth  ** 内圆宽度
 ** @param $innerHeight ** 内圆高度
 ** @param $bgColor     ** 背景颜色选择（可增加扩展）
 ** @param $checkColor  ** 标识颜色选择（可增加扩展）
 ** createPieChart($width,$height,$percentage,$innerWidth,$innerHeight,$bgColor,$checkColor)**
 

#例如以下DEMO
//createPieChart(250,250,0.4,200,200,1,1);
