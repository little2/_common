<?php
/**
 * 語系庫
 *
 * 簡體中文語系庫
 * 命名規則:頭字大寫,不使用_
 *.
 * @author Ryan Chiu <[email]ryan@inetar.net[/email]>
 * @version 1.0
 * @date 2009-5-6 10:10:47
 */

$l="chinese_cn";
$lang_type[$l]='简体中文';
$w=$lang[language];
#從以下開始修改
$w['_FormatCharge']='￥%s元';




#從以上開始修改
$lang[$l]=$w;
unset($w);
?>