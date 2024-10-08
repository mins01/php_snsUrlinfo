<?php
require_once('SnsUrlinfo.php');
use mins01\snsUrlinfo\SnsUrlinfo;

\mins01\snsUrlinfo\SnsUrlinfo::$debug = true;


$urls = array(
    'http://start!.test/@asd#4lkasdj@?#324lk8u8한글은?잘되여ㅑ?',
    'https://BLOG.NAVER.COM/bsakam/222998421358',
    'https://blog.naver.com/PostView.naver?blogId=popline&logNo=222953172387',
    'https://m.blog.naver.com/bsakam/222998421358',
    'https://m.blog.naver.com/PostView.naver?blogId=bsakam&logNo=222998421358&proxyReferer=',
    'https://blog.naver.com/msjung0630',
    'http://instagram.com/hellogra__',
    'https://www.instagram.com/p/Cuhf5Jbpbu4/?img_index=1',
    'https://www.instagram.com/reels/Ctkboz4Jqng/',
    'https://www.instagram.com/reel/Ct1sDLxueSy/?igshid=MzRlODBiNWFlZA==', //릴스
    'https://www.facebook.com/permalink.php?story_fbid=pfbid02EGimNAVpsxSKGjJt8H57fszy1jnJJWWufZ2V62xeXKsgDCHphAL84wyYNC9eb7GRl&id=100004105173588',
    'https://www.facebook.com/geukseop/posts/pfbid02hKrdHgZmvkBs776rMoGhJ4mXAAxjNfgRNRKpAKhChkBimBc4gzqcqKVNAX58Xsgwl',
    'https://m.facebook.com/story.php/?story_fbid=pfbid0xUJ7Jpum8iCBp31fZcZA4kP5rNcQzmoy7VBtVBmmXuXHVDT1yprWCV2VMTBjVpv8l&id=100031126815048',
    'https://m.facebook.com/story.php?story_fbid=pfbid02h2fN2HnnJdbAxroMnBMDQrXS45qvD4a82ckQY2tzs3bcVQpSTtZrdtAij1V6aWTjl&id=100031126815048',
    'https://www.facebook.com/reel/1333925437193951', //릴스
    'https://www.facebook.com/100010078350179/posts/pfbid0sJwuZS4hkpiUedUuE7Mnr9eNmBhr4JWyu42QaaWymb5MUaYub2fuSqrGiudkyQpTl/?mibextid=Nif5oz',
    'https://twitter.com/@jinjinjara0807',
    'https://twitter.com/0Me3cQXsLSYrRxS/status/1637068317109395456?t=6O3ZdefCGY91GYLaqXuCew&s=19',
    'https://twitter.com/bata_bts2/status/1640690406810882050?s=46&t=mxBLHeEv-UsxrsxNz8fYUg',
    'https://twitter.com/bissnara/status/1592514650914304001',
    'https://story.kakao.com/pumpkin1027',
    'https://story.kakao.com/lhs7818/AWnugHnQQ90',
    'https://www.youtube.com/watch?v=v_apulgKO1E',
    'https://www.youtube.com/@user-pr3of4iy4u',
    'https://www.youtube.com/GundamInfo',
    'https://www.youtube.com/shorts/el5A2WHl_m4', //쇼츠
    'https://www.youtube.com/shorts/', 
    'https://youtube.com/shorts/dCgdw0h1zUA?feature=share3',
    'testStringXyz',
    'http://mins01.com/xxx/yyy/zzz',
    'https://yjj5856.tistory.com', //티스토리
    'https://yjj5856.tistory.com/73', //티스토리
    'https://www.tistory.com/community/forum', //티스토리
    'https://www.instagram.com/사용자이름', // 에러 발생했던 URL. 5.x대에서 에러(인코딩 안된 한글이 이상한 문자로 별환됨), 7.x 에서는 동작함
    'https://www.tiktok.com/@chongmmyung207/video/7383915444916342048?is_from_webapp=1&sender_device=pc', // 틱톡 테스트용
    'https://www.tiktok.com/@happyxowk/video/7412420515463236871?utm_campaign=tt4d_open_api&utm_source=awr4qi2kvllnidag', // 틱톡 테스트용
);
foreach($urls as $url){
    $rs = SnsUrlinfo::urlinfo($url);
    echo "URL : {$url}\n";
    $json = json_encode($rs);
    echo "RESULT : {$json}\n";
    $userUrl = SnsUrlinfo::userUrl($rs);
    echo "userUrl : {$userUrl}\n";
    $postUrl = SnsUrlinfo::postUrl($rs);
    echo "postUrl : {$postUrl}\n";
    echo "---------------------------------------------------------\n";
}