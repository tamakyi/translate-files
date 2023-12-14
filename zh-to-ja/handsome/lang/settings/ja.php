<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * ja.php
 * Author     : hran,hewro,tamakyi
 * Date       : 2023/12/14
 * Version    :
 * Description:
 */
class Lang_Settings_en extends Lang {

    /**
     * @return string 返す言語名
     */
    public function name() {
        return "Japanese";
    }

    /**
     * @return array 翻訳されたテキストを含む配列を返します。
     */
    public function translated() {
        return array(
            '固定头部' => 'Fixed header',
            '大头图地址' => 'Big header pic address',
            '文章设置' => 'Article settings',
            '管理友情链接' => 'Manage links',
            '友情链接' => 'Links'
        );
    }

    /**
     * @return array 返回日期的格式化字符串
     */
    public function dateFormat() {
        return array(
            "simple" => "F j, Y",
            "detail" => "F j, Y g:i a",
        );
    }
}
