<?php
Header("content-type:text/html; charset=utf-8");

$items_recommend = array();
$items_recommend[]="7051";
$items_recommend[]="7001";
$items_recommend[]="08신선농장";
$items_recommend[]="06대전";
$items_recommend[]="08LSH";
$items_recommend[]="08KSD영양란";
$items_recommend[]="08SH";
$items_recommend[]="08쌍용";
$items_recommend[]="가남,
0800103KN
0800104KN";
$items_recommend[]="08양계";
$items_recommend[]="08광명농장,
08광명,
08정광면
0802402NH";
$items_recommend[]="08신둔";
$items_recommend[]="08마리";
$items_recommend[]="08부영";
$items_recommend[]="08JHN";
$items_recommend[]="08고산";
$items_recommend[]="08서신";
$items_recommend[]="11서영친환경
11서영무항생란";
$items_recommend[]="11덕연";
$items_recommend[]="11신선봉농장";
$items_recommend[]="14소망";
$items_recommend[]="14인영";
$items_recommend[]="14혜찬";
$items_recommend[]="15연암";
$items_recommend[]="15온누리";
$items_recommend[]="09지현";
$items_recommend[]="13SCK";
$items_recommend[]="13나성준영";
$items_recommend[]="황금0906,
황금0908,
황금0912,
황금0914,
황금0916,
황금0921";
$items_recommend[]="14다인,
14DI";
$items_recommend[]="11시온";
$items_recommend[]="13정화";
$items_recommend[]="08신호";
$items_recommend[]="08LCY";
$items_recommend[]="08맑은농장";
$items_recommend[]="없음";
$items_recommend[]="13우리";
$items_recommend[]="13대산";
$items_recommend[]="13둥지";
$items_recommend[]="13드림";
$items_recommend[]="15CYO";
$items_recommend[]="08LNB";
$items_recommend[]="11대명";
$items_recommend[]="11CMJ";
$items_recommend[]="11송암";
$items_recommend[]="08이레";
$items_recommend[]="04씨케이";
$items_recommend[]="11주현";
$items_recommend[]="10청운,
1000201DM";
$items_recommend[]="11시간과자연";
$items_recommend[]="11초원";

$result = array();
$result['webapi']='connect';
$result['code'] = "100";
$result['mode'] = "OK";
$result['items_recommend'] = $items_recommend;


//var_dump($result);
echo json_encode($result);
exit();

?>





