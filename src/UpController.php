<?php
/**
 * ===============================================================
 */

namespace think\up;

use think\Config;

/**
 * Class MnsController
 * @package think\mns
 */
class UpController
{
    /**
     * @param string $file suggestionsimg/
     * @return string
     */
    public function index($file ="")
    {
        return json_encode($this->imggeup($file));
    }

    /**
     * @param $path
     * @return mixed
     */
    public function imggeup($path)
    {
        header("Content-Type:text/html;charset=utf-8");
        error_reporting(E_ERROR | E_WARNING);
        date_default_timezone_set("Asia/chongqing");
        $config = Config("IMGupload");
        //上传文件目录
        $config["savePath"] = "common/upload/".$path;

        $upload = new Uploader('upfile',$config);
        return $upload->getFileInfo();
    }
}