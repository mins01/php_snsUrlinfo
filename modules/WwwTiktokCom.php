<?php
namespace mins01\snsUrlinfo\modules;

require_once(dirname(__FILE__).'/Module.php');

/**
 * 20240909: first
 */

class WwwTiktokCom extends \mins01\snsUrlinfo\modules\Module{
    public static $version = '20240909';
    public static $service = 'tiktok';
    public static $domain = 'WwwTiktokCom';
    public static $site = 'https://www.tiktok.com';
    public static $debug = false;


    public static function urlinfo($url){
        $rs = static::getDefRs();
        // 'https://www.tiktok.com/@chongmmyung207/video/7383915444916342048?is_from_webapp=1&sender_device=pc', // 틱톡 테스트용
        // 'https://www.tiktok.com/@happyxowk/video/7412420515463236871?utm_campaign=tt4d_open_api&utm_source=awr4qi2kvllnidag', // 틱톡 테스트용


        $parsedUrl = parse_url($url);
        // print_r($parsedUrl);
        if(isset($parsedUrl['path'][1])){
            $paths = explode('/',$parsedUrl['path']);
            if(isset($paths[1])) $rs['user_id'] = preg_replace('/^@/','',$paths[1]);
            if(isset($paths[3])) $rs['post_id'] = $paths[3];
        }
        return $rs;
    }

    // 사용자 프로필 URL.
    public static function userUrl($rs){
        if(!isset($rs['user_id'])){return null;}
        return static::$site."/@{$rs['user_id']}";
    }

    // 게시글 URL
    public static function postUrl($rs){
        if(isset($rs['user_id'],$rs['post_id'])){
            return static::$site."/@{$rs['user_id']}/video/{$rs['post_id']}";
        }
        return null;
    }
}