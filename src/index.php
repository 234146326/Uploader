<?php
/**
 * =============================================================
 */
require_once(dirname(dirname(dirname(__FILE__))).'/Uploader.class.php');

\think\Route::get('file/up', "\\think\\mns\\UpController@index");
?>