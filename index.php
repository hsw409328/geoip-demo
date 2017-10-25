<?php
include("geoip/geoipcity.inc.php");
// 打开数据文件
$gi = geoip_open("geoip/GeoLiteCity.dat", GEOIP_STANDARD);

// 获取国家代码
$city = geoip_country_code_by_addr($gi, '111.204.243.9');
if (empty($city)) {
	die('null');
}
var_dump($city);
// 获取城市坐标
$city = geoip_record_by_addr($gi, '120.204.243.9');
if (empty($city)) {
	die('null');
}
/**
 * [country_code] => CN
 * [country_code3] => CHN
 * [country_name] => China
 * [region] => 22
 * [city] => Beijing
 * [postal_code] =>
 * [latitude] => 39.9289
 * [longitude] => 116.3883
 * [area_code] =>
 * [dma_code] =>
 * [metro_code] =>
 * [continent_code] => AS
 */
var_dump($city);
// 关闭文件
geoip_close($gi);
