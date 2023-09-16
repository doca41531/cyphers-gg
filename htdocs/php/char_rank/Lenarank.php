<link rel="stylesheet" href="/./css/charrank_style.css">
<?php
function httpGet($url)
{
  $ci = curl_init();

  curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ci, CURLOPT_URL, $url);
  curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, 0);


  $response = curl_exec($ci);
  curl_close($ci);
  return $response;
}

$api_key = "p2aWMaT2xs7QFHhZbWAMlVj9lT9WovhZ";
$char_id_url = "https://api.neople.co.kr/cy/characters?apikey=".$api_key;
$char_id = json_decode(httpGet($char_id_url), true);

$characterId0 = $char_id['rows'][0]['characterId']; //77
$characterId1 = $char_id['rows'][1]['characterId'];
$characterId2 = $char_id['rows'][2]['characterId'];
$characterId3 = $char_id['rows'][3]['characterId'];
$characterId4 = $char_id['rows'][4]['characterId'];
$characterId5 = $char_id['rows'][5]['characterId'];
$characterId6 = $char_id['rows'][6]['characterId'];
$characterId7 = $char_id['rows'][7]['characterId'];
$characterId8 = $char_id['rows'][8]['characterId'];
$characterId9 = $char_id['rows'][9]['characterId'];
$characterId10 = $char_id['rows'][10]['characterId'];
$characterId11 = $char_id['rows'][11]['characterId'];
$characterId12 = $char_id['rows'][12]['characterId'];
$characterId13 = $char_id['rows'][13]['characterId'];
$characterId14 = $char_id['rows'][14]['characterId'];
$characterId15 = $char_id['rows'][15]['characterId'];
$characterId16 = $char_id['rows'][16]['characterId'];
$characterId17 = $char_id['rows'][17]['characterId'];
$characterId18 = $char_id['rows'][18]['characterId'];
$characterId19 = $char_id['rows'][19]['characterId'];
$characterId20 = $char_id['rows'][20]['characterId'];
$characterId21 = $char_id['rows'][21]['characterId'];
$characterId22 = $char_id['rows'][22]['characterId'];
$characterId23 = $char_id['rows'][23]['characterId'];
$characterId24 = $char_id['rows'][24]['characterId'];
$characterId25 = $char_id['rows'][25]['characterId'];
$characterId26 = $char_id['rows'][26]['characterId'];
$characterId27 = $char_id['rows'][27]['characterId'];
$characterId28 = $char_id['rows'][28]['characterId'];
$characterId29 = $char_id['rows'][29]['characterId'];
$characterId30 = $char_id['rows'][30]['characterId'];
$characterId31 = $char_id['rows'][31]['characterId'];
$characterId32 = $char_id['rows'][32]['characterId'];
$characterId33 = $char_id['rows'][33]['characterId'];
$characterId34 = $char_id['rows'][34]['characterId'];
$characterId35 = $char_id['rows'][35]['characterId'];
$characterId36 = $char_id['rows'][36]['characterId'];
$characterId37 = $char_id['rows'][37]['characterId'];
$characterId38 = $char_id['rows'][38]['characterId'];
$characterId39 = $char_id['rows'][39]['characterId'];
$characterId40 = $char_id['rows'][40]['characterId'];
$characterId41 = $char_id['rows'][41]['characterId'];
$characterId42 = $char_id['rows'][42]['characterId'];
$characterId43 = $char_id['rows'][43]['characterId'];
$characterId44 = $char_id['rows'][44]['characterId'];
$characterId45 = $char_id['rows'][45]['characterId'];
$characterId46 = $char_id['rows'][46]['characterId'];
$characterId47 = $char_id['rows'][47]['characterId'];
$characterId48 = $char_id['rows'][48]['characterId'];
$characterId49 = $char_id['rows'][49]['characterId'];
$characterId50 = $char_id['rows'][50]['characterId'];
$characterId51 = $char_id['rows'][51]['characterId'];
$characterId52 = $char_id['rows'][52]['characterId'];
$characterId53 = $char_id['rows'][53]['characterId'];
$characterId54 = $char_id['rows'][54]['characterId'];
$characterId55 = $char_id['rows'][55]['characterId'];
$characterId56 = $char_id['rows'][56]['characterId'];
$characterId57 = $char_id['rows'][57]['characterId'];
$characterId58 = $char_id['rows'][58]['characterId'];
$characterId59 = $char_id['rows'][59]['characterId'];
$characterId60 = $char_id['rows'][60]['characterId'];
$characterId61 = $char_id['rows'][61]['characterId'];
$characterId62 = $char_id['rows'][62]['characterId'];
$characterId63 = $char_id['rows'][63]['characterId'];
$characterId64 = $char_id['rows'][64]['characterId'];
$characterId65 = $char_id['rows'][65]['characterId'];
$characterId66 = $char_id['rows'][66]['characterId'];
$characterId67 = $char_id['rows'][67]['characterId'];
$characterId68 = $char_id['rows'][68]['characterId'];
$characterId69 = $char_id['rows'][69]['characterId'];
$characterId70 = $char_id['rows'][70]['characterId'];
$characterId71 = $char_id['rows'][71]['characterId'];
$characterId72 = $char_id['rows'][72]['characterId'];
$characterId73 = $char_id['rows'][73]['characterId'];
$characterId74 = $char_id['rows'][74]['characterId'];
$characterId75 = $char_id['rows'][75]['characterId'];
$characterId76 = $char_id['rows'][76]['characterId'];

$characterName0 = $char_id['rows'][0]['characterName']; 
$characterName1 = $char_id['rows'][1]['characterName'];
$characterName2 = $char_id['rows'][2]['characterName'];
$characterName3 = $char_id['rows'][3]['characterName'];
$characterName4 = $char_id['rows'][4]['characterName'];
$characterName5 = $char_id['rows'][5]['characterName'];
$characterName6 = $char_id['rows'][6]['characterName'];
$characterName7 = $char_id['rows'][7]['characterName'];
$characterName8 = $char_id['rows'][8]['characterName'];
$characterName9 = $char_id['rows'][9]['characterName'];
$characterName10 = $char_id['rows'][10]['characterName'];
$characterName11 = $char_id['rows'][11]['characterName'];
$characterName12 = $char_id['rows'][12]['characterName'];
$characterName13 = $char_id['rows'][13]['characterName'];
$characterName14 = $char_id['rows'][14]['characterName'];
$characterName15 = $char_id['rows'][15]['characterName'];
$characterName16 = $char_id['rows'][16]['characterName'];
$characterName17 = $char_id['rows'][17]['characterName'];
$characterName18 = $char_id['rows'][18]['characterName'];
$characterName19 = $char_id['rows'][19]['characterName'];
$characterName20 = $char_id['rows'][20]['characterName'];
$characterName21 = $char_id['rows'][21]['characterName'];
$characterName22 = $char_id['rows'][22]['characterName'];
$characterName23 = $char_id['rows'][23]['characterName'];
$characterName24 = $char_id['rows'][24]['characterName'];
$characterName25 = $char_id['rows'][25]['characterName'];
$characterName26 = $char_id['rows'][26]['characterName'];
$characterName27 = $char_id['rows'][27]['characterName'];
$characterName28 = $char_id['rows'][28]['characterName'];
$characterName29 = $char_id['rows'][29]['characterName'];
$characterName30 = $char_id['rows'][30]['characterName'];
$characterName31 = $char_id['rows'][31]['characterName'];
$characterName32 = $char_id['rows'][32]['characterName'];
$characterName33 = $char_id['rows'][33]['characterName'];
$characterName34 = $char_id['rows'][34]['characterName'];
$characterName35 = $char_id['rows'][35]['characterName'];
$characterName36 = $char_id['rows'][36]['characterName'];
$characterName37 = $char_id['rows'][37]['characterName'];
$characterName38 = $char_id['rows'][38]['characterName'];
$characterName39 = $char_id['rows'][39]['characterName'];
$characterName40 = $char_id['rows'][40]['characterName'];
$characterName41 = $char_id['rows'][41]['characterName'];
$characterName42 = $char_id['rows'][42]['characterName'];
$characterName43 = $char_id['rows'][43]['characterName'];
$characterName44 = $char_id['rows'][44]['characterName'];
$characterName45 = $char_id['rows'][45]['characterName'];
$characterName46 = $char_id['rows'][46]['characterName'];
$characterName47 = $char_id['rows'][47]['characterName'];
$characterName48 = $char_id['rows'][48]['characterName'];
$characterName49 = $char_id['rows'][49]['characterName'];
$characterName50 = $char_id['rows'][50]['characterName'];
$characterName51 = $char_id['rows'][51]['characterName'];
$characterName52 = $char_id['rows'][52]['characterName'];
$characterName53 = $char_id['rows'][53]['characterName'];
$characterName54 = $char_id['rows'][54]['characterName'];
$characterName55 = $char_id['rows'][55]['characterName'];
$characterName56 = $char_id['rows'][56]['characterName'];
$characterName57 = $char_id['rows'][57]['characterName'];
$characterName58 = $char_id['rows'][58]['characterName'];
$characterName59 = $char_id['rows'][59]['characterName'];
$characterName60 = $char_id['rows'][60]['characterName'];
$characterName61 = $char_id['rows'][61]['characterName'];
$characterName62 = $char_id['rows'][62]['characterName'];
$characterName63 = $char_id['rows'][63]['characterName'];
$characterName64 = $char_id['rows'][64]['characterName'];
$characterName65 = $char_id['rows'][65]['characterName'];
$characterName66 = $char_id['rows'][66]['characterName'];
$characterName67 = $char_id['rows'][67]['characterName'];
$characterName68 = $char_id['rows'][68]['characterName'];
$characterName69 = $char_id['rows'][69]['characterName'];
$characterName70 = $char_id['rows'][70]['characterName'];
$characterName71 = $char_id['rows'][71]['characterName'];
$characterName72 = $char_id['rows'][72]['characterName'];
$characterName73 = $char_id['rows'][73]['characterName'];
$characterName74 = $char_id['rows'][74]['characterName'];
$characterName75 = $char_id['rows'][75]['characterName'];
$characterName76 = $char_id['rows'][76]['characterName'];

$charactaer_rank_url = "https://api.neople.co.kr/cy/ranking/characters/". $characterId6 ."/exp?playerId=&offset=%3Coffset%3E&limit=&apikey=".$api_key;
$charactaer_rank = json_decode(httpGet($charactaer_rank_url), true);

$charactaer_rank_array0 = [ $charactaer_rank['rows'][0]['rank'], $charactaer_rank['rows'][0]['beforeRank'],$charactaer_rank['rows'][0]['nickname'], $charactaer_rank['rows'][0]['exp']];
$charactaer_rank_array1 = [ $charactaer_rank['rows'][1]['rank'], $charactaer_rank['rows'][1]['beforeRank'],$charactaer_rank['rows'][1]['nickname'], $charactaer_rank['rows'][1]['exp']];
$charactaer_rank_array2 = [ $charactaer_rank['rows'][2]['rank'], $charactaer_rank['rows'][2]['beforeRank'],$charactaer_rank['rows'][2]['nickname'], $charactaer_rank['rows'][2]['exp']];
$charactaer_rank_array3 = [ $charactaer_rank['rows'][3]['rank'], $charactaer_rank['rows'][3]['beforeRank'],$charactaer_rank['rows'][3]['nickname'], $charactaer_rank['rows'][3]['exp']];
$charactaer_rank_array4 = [ $charactaer_rank['rows'][4]['rank'], $charactaer_rank['rows'][4]['beforeRank'],$charactaer_rank['rows'][4]['nickname'], $charactaer_rank['rows'][4]['exp']];
$charactaer_rank_array5 = [ $charactaer_rank['rows'][5]['rank'], $charactaer_rank['rows'][5]['beforeRank'],$charactaer_rank['rows'][5]['nickname'], $charactaer_rank['rows'][5]['exp']];
$charactaer_rank_array6 = [ $charactaer_rank['rows'][6]['rank'], $charactaer_rank['rows'][6]['beforeRank'],$charactaer_rank['rows'][6]['nickname'], $charactaer_rank['rows'][6]['exp']];
$charactaer_rank_array7 = [ $charactaer_rank['rows'][7]['rank'], $charactaer_rank['rows'][7]['beforeRank'],$charactaer_rank['rows'][7]['nickname'], $charactaer_rank['rows'][7]['exp']];
$charactaer_rank_array8 = [ $charactaer_rank['rows'][8]['rank'], $charactaer_rank['rows'][8]['beforeRank'],$charactaer_rank['rows'][8]['nickname'], $charactaer_rank['rows'][8]['exp']];
$charactaer_rank_array9 = [ $charactaer_rank['rows'][9]['rank'], $charactaer_rank['rows'][9]['beforeRank'],$charactaer_rank['rows'][9]['nickname'], $charactaer_rank['rows'][9]['exp']];


?>
<header>
  <a href="#"><img class="logo" src="/./img/logo.png" alt="로고"></a>

  <div class="ranking_nav">
    <a href="/./userinfo.php">통합 랭킹</a>
    <a href="/./php/tosin_rank/melee_rank.php">투신전 랭킹</a>
    <a href="/./php/char_rank/Lorasrank.php">캐릭터 랭킹</a>
  </div>

  <div class="search_nav">
    <a href="#">전적 검색</a>
    <div class="search">
      <input class="input_username" maxlength="8" placeholder="닉네임을 입력하시오" type="text">
      <button class="search_img"><img src="../img/search.png" alt=""></button>
    </div>
  </div>
</header>

<div class="rank_1st">
  <table>
    <tr class="border rank_title">
      <td class="td">등수</td>
      <td class="td">닉네임</td>
      <td class="td">경험치</td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array0[0] ?></p>
          <p class="up_text" id="judgment0_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array0[2]?></td>
      <td class="td"><?=$charactaer_rank_array0[3]?></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array1[0] ?></p>
          <p class="up_text" id="judgment1_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array1[2]?></td>
      <td class="td"><?=$charactaer_rank_array1[3]?></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array2[0] ?></p>
          <p class="up_text" id="judgment2_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array2[2]?></td>
      <td class="td"><?=$charactaer_rank_array2[3]?></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array3[0] ?></p>
          <p class="up_text" id="judgment3_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array3[2]?></td>
      <td class="td"><?=$charactaer_rank_array3[3]?></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array4[0] ?></p>
          <p class="up_text" id="judgment4_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array4[2]?></td>
      <td class="td"><?=$charactaer_rank_array4[3]?></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array5[0] ?></p>
          <p class="up_text" id="judgment5_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array5[2]?></td>
      <td class="td"><?=$charactaer_rank_array5[3]?></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array6[0] ?></p>
          <p class="up_text" id="judgment6_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array6[2]?></td>
      <td class="td"><?=$charactaer_rank_array6[3]?></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array7[0] ?></p>
          <p class="up_text" id="judgment7_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array7[2]?></td>
      <td class="td"><?=$charactaer_rank_array7[3]?></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array8[0] ?></p>
          <p class="up_text" id="judgment8_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array8[2]?></td>
      <td class="td"><?=$charactaer_rank_array8[3]?></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $charactaer_rank_array9[0] ?></p>
          <p class="up_text" id="judgment9_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$charactaer_rank_array9[2]?></td>
      <td class="td"><?=$charactaer_rank_array9[3]?></td>
    </tr>
  </table>
</div>

<div class="char_select_div"> 
  <div class="char_select_open">
        <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId6?>?zoom=2" alt="#">
        <p class="char_name"><?= $characterName6 ?></p>
        <p class="open" onclick="dropdown()">&#9660;</p>
        <p class="close hide" onclick="dropdown()">&#9650;</p>
  </div>


  <div class="char_select hide dropdown">
    <div>
      <div>
        <a href="./Lorasrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId0 ?>?zoom=2" alt=""> </a>
        <a href="./Lorasrank.php" > <p> <?= $characterName0 ?> </p> </a>
      </div>
      <div>
        <a href="./Huttonrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId1 ?>?zoom=2" alt=""> </a>
        <a href="./Huttonrank.php" > <p> <?= $characterName1 ?> </p> </a>
      </div>
      <div>
        <a href="./Lewisrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId2 ?>?zoom=2" alt=""> </a>
        <a href="./Lewisrank.php" > <p> <?= $characterName2 ?> </p> </a>
      </div>
      <div>
        <a href="./Tararank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId3 ?>?zoom=2" alt=""> </a>
        <a href="./Tararank.php" > <p> <?= $characterName3 ?> </p> </a>
      </div>
      <div>
        <a href="./Triviarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId4 ?>?zoom=2" alt=""> </a>
        <a href="./Triviarank.php" > <p> <?= $characterName4 ?> </p> </a>
      </div>
      <div>
        <a href="./Cainrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId5 ?>?zoom=2" alt=""> </a>
        <a href="./Cainrank.php" > <p> <?= $characterName5 ?> </p> </a>
      </div>
      <div>
        <a href="./Lenarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId6 ?>?zoom=2" alt=""> </a>
        <a href="./Lenarank.php" > <p> <?= $characterName6 ?> </p> </a>
      </div>
      <div>
        <a href="./Drexlerrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId7 ?>?zoom=2" alt=""> </a>
        <a href="./Drexlerrank.php" > <p> <?= $characterName7 ?> </p> </a>
      </div>
      <div>
        <a href="./Doylerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId8 ?>?zoom=2" alt=""> </a>
        <a href="./Doylerank.php" > <p> <?= $characterName8 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Thomasrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId9 ?>?zoom=2" alt=""> </a>
        <a href="./Thomasrank.php" > <p> <?= $characterName9 ?> </p> </a>
      </div>
      <div>
        <a href="./Niobrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId10 ?>?zoom=2" alt=""> </a>
        <a href="./Niobrank.php" > <p> <?= $characterName10 ?> </p> </a>
      </div>
      <div>
        <a href="./Shivarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId11 ?>?zoom=2" alt=""> </a>
        <a href="./Shivarank.php" > <p> <?= $characterName11 ?> </p> </a>
      </div>
      <div>
        <a href="./Wesleyrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId12 ?>?zoom=2" alt=""> </a>
        <a href="./Wesleyrank.php" > <p> <?= $characterName12 ?> </p> </a>
      </div>
      <div>
        <a href="./Stellarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId13 ?>?zoom=2" alt=""> </a>
        <a href="./Stellarank.php" > <p> <?= $characterName13 ?> </p> </a>
      </div>
      <div>
        <a href="./Aliciarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId14 ?>?zoom=2" alt=""> </a>
        <a href="./Aliciarank.php" > <p> <?= $characterName14 ?> </p> </a>
      </div>
      <div>
        <a href="./Clairerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId15 ?>?zoom=2" alt=""> </a>
        <a href="./Clairerank.php" > <p> <?= $characterName15 ?> </p> </a>
      </div>
      <div>
        <a href="./Daimusrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId16 ?>?zoom=2" alt=""> </a>
        <a href="./Daimusrank.php" > <p> <?= $characterName16 ?> </p> </a>
      </div>
      <div>
        <a href="./Eaglerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId17 ?>?zoom=2" alt=""> </a>
        <a href="./Eaglerank.php" > <p> <?= $characterName17 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Marlenerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId18 ?>?zoom=2" alt=""> </a>
        <a href="./Marlenerank.php" > <p> <?= $characterName18 ?> </p> </a>
      </div>
      <div>
        <a href="./Charlotterank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId19 ?>?zoom=2" alt=""> </a>
        <a href="./Charlotterank.php" > <p> <?= $characterName19 ?> </p> </a>
      </div>
      <div>
        <a href="./Willardrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId20 ?>?zoom=2" alt=""> </a>
        <a href="./Willardrank.php" > <p> <?= $characterName20 ?> </p> </a>
      </div>
      <div>
        <a href="./Laytonrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId21 ?>?zoom=2" alt=""> </a>
        <a href="./Laytonrank.php" > <p> <?= $characterName21 ?> </p> </a>
      </div>
      <div>
        <a href="./Michellerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId22 ?>?zoom=2" alt=""> </a>
        <a href="./Michellerank.php" > <p> <?= $characterName22 ?> </p> </a>
      </div>
      <div>
        <a href="./Lynnrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId23 ?>?zoom=2" alt=""> </a>
        <a href="./Lynnrank.php" > <p> <?= $characterName23 ?> </p> </a>
      </div>
      <div>
        <a href="./Victorrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId24 ?>?zoom=2" alt=""> </a>
        <a href="./Victorrank.php" > <p> <?= $characterName24 ?> </p> </a>
      </div>
      <div>
        <a href="./Carlosrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId25 ?>?zoom=2" alt=""> </a>
        <a href="./Carlosrank.php" > <p> <?= $characterName25 ?> </p> </a>
      </div>
      <div>
        <a href="./Hotarurank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId26 ?>?zoom=2" alt=""> </a>
        <a href="./Hotarurank.php" > <p> <?= $characterName26 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Trixierank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId27 ?>?zoom=2" alt=""> </a>
        <a href="./Trixierank.php" > <p> <?= $characterName27 ?> </p> </a>
      </div>
      <div>
        <a href="./Ricardorank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId28 ?>?zoom=2" alt=""> </a>
        <a href="./Ricardorank.php" > <p> <?= $characterName28 ?> </p> </a>
      </div>
      <div>
        <a href="./Camillerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId29 ?>?zoom=2" alt=""> </a>
        <a href="./Camillerank.php" > <p> <?= $characterName29 ?> </p> </a>
      </div>
      <div>
        <a href="./Janetrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId30 ?>?zoom=2" alt=""> </a>
        <a href="./Janetrank.php" > <p> <?= $characterName30 ?> </p> </a>
      </div>
      <div>
        <a href="./Peterrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId31 ?>?zoom=2" alt=""> </a>
        <a href="./Peterrank.php" > <p> <?= $characterName31 ?> </p> </a>
      </div>
      <div>
        <a href="./Isaacrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId32 ?>?zoom=2" alt=""> </a>
        <a href="./Isaacrank.php" > <p> <?= $characterName32 ?> </p> </a>
      </div>
      <div>
        <a href="./Rebeccarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId33 ?>?zoom=2" alt=""> </a>
        <a href="./Rebeccarank.php" > <p> <?= $characterName33 ?> </p> </a>
      </div>
      <div>
        <a href="./Ellierank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId34 ?>?zoom=2" alt=""> </a>
        <a href="./Ellierank.php" > <p> <?= $characterName34 ?> </p> </a>
      </div>
      <div>
        <a href="./Martinrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId35 ?>?zoom=2" alt=""> </a>
        <a href="./Martinrank.php" > <p> <?= $characterName35 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Brucerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId36 ?>?zoom=2" alt=""> </a>
        <a href="./Brucerank.php" > <p> <?= $characterName36 ?> </p> </a>
      </div>
      <div>
        <a href="./Miarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId37 ?>?zoom=2" alt=""> </a>
        <a href="./Miarank.php" > <p> <?= $characterName37 ?> </p> </a>
      </div>
      <div>
        <a href="./Deniserank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId38 ?>?zoom=2" alt=""> </a>
        <a href="./Deniserank.php" > <p> <?= $characterName38 ?> </p> </a>
      </div>
      <div>
        <a href="./Gereonrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId39 ?>?zoom=2" alt=""> </a>
        <a href="./Gereonrank.php" > <p> <?= $characterName39 ?> </p> </a>
      </div>
      <div>
        <a href="./Lucyrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId40 ?>?zoom=2" alt=""> </a>
        <a href="./Lucyrank.php" > <p> <?= $characterName40 ?> </p> </a>
      </div>
      <div>
        <a href="./Tienrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId41 ?>?zoom=2" alt=""> </a>
        <a href="./Tienrank.php" > <p> <?= $characterName41 ?> </p> </a>
      </div>
      <div>
        <a href="./Harangrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId42 ?>?zoom=2" alt=""> </a>
        <a href="./Harangrank.php" > <p> <?= $characterName42 ?> </p> </a>
      </div>
      <div>
        <a href="./Jayrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId43 ?>?zoom=2" alt=""> </a>
        <a href="./Jayrank.php" > <p> <?= $characterName43 ?> </p> </a>
      </div>
      <div>
        <a href="./Belzerrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId44 ?>?zoom=2" alt=""> </a>
        <a href="./Belzerrank.php" > <p> <?= $characterName44 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Richellerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId45 ?>?zoom=2" alt=""> </a>
        <a href="./Richellerank.php" > <p> <?= $characterName45 ?> </p> </a>
      </div>
      <div>
        <a href="./Lisarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId46 ?>?zoom=2" alt=""> </a>
        <a href="./Lisarank.php" > <p> <?= $characterName46 ?> </p> </a>
      </div>
      <div>
        <a href="./Rickrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId47 ?>?zoom=2" alt=""> </a>
        <a href="./Rickrank.php" > <p> <?= $characterName47 ?> </p> </a>
      </div>
      <div>
        <a href="./Zekielrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId48 ?>?zoom=2" alt=""> </a>
        <a href="./Zekielrank.php" > <p> <?= $characterName48 ?> </p> </a>
      </div>
      <div>
        <a href="./Tanyarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId49 ?>?zoom=2" alt=""> </a>
        <a href="./Tanyarank.php" > <p> <?= $characterName49 ?> </p> </a>
      </div>
      <div>
        <a href="./Carolrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId50 ?>?zoom=2" alt=""> </a>
        <a href="./Carolrank.php" > <p> <?= $characterName50 ?> </p> </a>
      </div>
      <div>
        <a href="./Lysanderrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId51 ?>?zoom=2" alt=""> </a>
        <a href="./Lysanderrank.php" > <p> <?= $characterName51 ?> </p> </a>
      </div>
      <div>
        <a href="./Ludwigrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId52 ?>?zoom=2" alt=""> </a>
        <a href="./Ludwigrank.php" > <p> <?= $characterName52 ?> </p> </a>
      </div>
      <div>
        <a href="./Melvinrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId53 ?>?zoom=2" alt=""> </a>
        <a href="./Melvinrank.php" > <p> <?= $characterName53 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Dianarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId54 ?>?zoom=2" alt=""> </a>
        <a href="./Dianarank.php" > <p> <?= $characterName54 ?> </p> </a>
      </div>
      <div>
        <a href="./Cliverank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId55 ?>?zoom=2" alt=""> </a>
        <a href="./Cliverank.php" > <p> <?= $characterName55 ?> </p> </a>
      </div>
      <div>
        <a href="./Helenarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId56 ?>?zoom=2" alt=""> </a>
        <a href="./Helenarank.php" > <p> <?= $characterName56 ?> </p> </a>
      </div>
      <div>
        <a href="./Evarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId57 ?>?zoom=2" alt=""> </a>
        <a href="./Evarank.php" > <p> <?= $characterName57 ?> </p> </a>
      </div>
      <div>
        <a href="./Ronrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId58 ?>?zoom=2" alt=""> </a>
        <a href="./Ronrank.php" > <p> <?= $characterName58 ?> </p> </a>
      </div>
      <div>
        <a href="./Leonorrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId59 ?>?zoom=2" alt=""> </a>
        <a href="./Leonorrank.php" > <p> <?= $characterName59 ?> </p> </a>
      </div>
      <div>
        <a href="./Sydneyrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId60 ?>?zoom=2" alt=""> </a>
        <a href="./Sydneyrank.php" > <p> <?= $characterName60 ?> </p> </a>
      </div>
      <div>
        <a href="./Tayrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId61 ?>?zoom=2" alt=""> </a>
        <a href="./Tayrank.php" > <p> <?= $characterName61 ?> </p> </a>
      </div>
      <div>
        <a href="./Timothyrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId62 ?>?zoom=2" alt=""> </a>
        <a href="./Timothyrank.php" > <p> <?= $characterName62 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Elfriederank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId63 ?>?zoom=2" alt=""> </a>
        <a href="./Elfriederank.php" > <p> <?= $characterName63 ?> </p> </a>
      </div>
      <div>
        <a href="./Tisharank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId64 ?>?zoom=2" alt=""> </a>
        <a href="./Tisharank.php" > <p> <?= $characterName64 ?> </p> </a>
      </div>
      <div>
        <a href="./Karocherank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId65 ?>?zoom=2" alt=""> </a>
        <a href="./Karocherank.php" > <p> <?= $characterName65 ?> </p> </a>
      </div>
      <div>
        <a href="./Ryanrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId66 ?>?zoom=2" alt=""> </a>
        <a href="./Ryanrank.php" > <p> <?= $characterName66 ?> </p> </a>
      </div>
      <div>
        <a href="./Watchman_Arank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId67 ?>?zoom=2" alt=""> </a>
        <a href="./Watchman_Arank.php" > <p> <?= $characterName67 ?> </p> </a>
      </div>
      <div>
        <a href="./Emilyrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId68 ?>?zoom=2" alt=""> </a>
        <a href="./Emilyrank.php" > <p> <?= $characterName68 ?> </p> </a>
      </div>
      <div>
        <a href="./Florianrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId69 ?>?zoom=2" alt=""> </a>
        <a href="./Florianrank.php" > <p> <?= $characterName69 ?> </p> </a>
      </div>
      <div>
        <a href="./Kennethrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId70 ?>?zoom=2" alt=""> </a>
        <a href="./Kennethrank.php" > <p> <?= $characterName70 ?> </p> </a>
      </div>
      <div>
        <a href="./Isabelrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId71 ?>?zoom=2" alt=""> </a>
        <a href="./Isabelrank.php" > <p> <?= $characterName71 ?> </p> </a>
      </div>
    </div>
    <div>
      <div>
        <a href="./Renaturank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId72 ?>?zoom=2" alt=""> </a>
        <a href="./Renaturank.php" > <p> <?= $characterName72 ?> </p> </a>
      </div>
      <div>
        <a href="./Sookheerank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId73 ?>?zoom=2" alt=""> </a>
        <a href="./Sookheerank.php" > <p> <?= $characterName73 ?> </p> </a>
      </div>
      <div>
        <a href="./Gretarank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId74 ?>?zoom=2" alt=""> </a>
        <a href="./Gretarank.php" > <p> <?= $characterName74 ?> </p> </a>
      </div>
      <div>
        <a href="./Bastianrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId75 ?>?zoom=2" alt=""> </a>
        <a href="./Bastianrank.php" > <p> <?= $characterName75 ?> </p> </a>
      </div>
      <div>
        <a href="./Januaryrank.php" > <img src="https://img-api.neople.co.kr/cy/characters/<?= $characterId76 ?>?zoom=2" alt=""> </a>
        <a href="./Januaryrank.php" > <p> <?= $characterName76 ?> </p> </a>
      </div>
    </div>
  </div>
</div>

<script>
  const charactaer_rank_m0 = <?php echo $charactaer_rank_array0[1]; ?> - <?php echo $charactaer_rank_array0[0]; ?>;
  const charactaer_rank_m1 = <?php echo $charactaer_rank_array1[1]; ?> - <?php echo $charactaer_rank_array1[0]; ?>;
  const charactaer_rank_m2 = <?php echo $charactaer_rank_array2[1]; ?> - <?php echo $charactaer_rank_array2[0]; ?>;
  const charactaer_rank_m3 = <?php echo $charactaer_rank_array3[1]; ?> - <?php echo $charactaer_rank_array3[0]; ?>;
  const charactaer_rank_m4 = <?php echo $charactaer_rank_array4[1]; ?> - <?php echo $charactaer_rank_array4[0]; ?>;
  const charactaer_rank_m5 = <?php echo $charactaer_rank_array5[1]; ?> - <?php echo $charactaer_rank_array5[0]; ?>;
  const charactaer_rank_m6 = <?php echo $charactaer_rank_array6[1]; ?> - <?php echo $charactaer_rank_array6[0]; ?>;
  const charactaer_rank_m7 = <?php echo $charactaer_rank_array7[1]; ?> - <?php echo $charactaer_rank_array7[0]; ?>;
  const charactaer_rank_m8 = <?php echo $charactaer_rank_array8[1]; ?> - <?php echo $charactaer_rank_array8[0]; ?>;
  const charactaer_rank_m9 = <?php echo $charactaer_rank_array9[1]; ?> - <?php echo $charactaer_rank_array9[0]; ?>;

  let judgment0 = 0;
  if(charactaer_rank_m0 > 0){     
    judgment0 = 1;
  }else if(charactaer_rank_m0 == 0){   
    judgment0 = 2;
  }else if(charactaer_rank_m0 < 0){   
    judgment0 = 0;
    charactaer_rank_m0 = Math.abs(charactaer_rank_m0);
  }

  let judgment1 = 0;
  if(charactaer_rank_m1 > 0){     
    judgment1 = 1;
  }else if(charactaer_rank_m1 == 0){   
    judgment1 = 2;
  }else if(charactaer_rank_m1 < 0){   
    judgment1 = 0;
    charactaer_rank_m1 = Math.abs(charactaer_rank_m1);
  }

  let judgment2 = 0;
  if(charactaer_rank_m2 > 0){     
    judgment2 = 1;
  }else if(charactaer_rank_m2 == 0){   
    judgment2 = 2;
  }else if(charactaer_rank_m2 < 0){   
    judgment2 = 0;
    charactaer_rank_m2 = Math.abs(charactaer_rank_m2);
  }

  let judgment3 = 0;
  if(charactaer_rank_m3 > 0){     
    judgment3 = 1;
  }else if(charactaer_rank_m3 == 0){   
    judgment3 = 2;
  }else if(charactaer_rank_m3 < 0){   
    judgment3 = 0;
    charactaer_rank_m3 = Math.abs(charactaer_rank_m3);
  }

  let judgment4 = 0;
  if(charactaer_rank_m4 > 0){     
    judgment4 = 1;
  }else if(charactaer_rank_m4 == 0){   
    judgment4 = 2;
  }else if(charactaer_rank_m4 < 0){   
    judgment4 = 0;
    charactaer_rank_m4 = Math.abs(charactaer_rank_m4);
  }

  let judgment5 = 0;
  if(charactaer_rank_m5 > 0){     
    judgment5 = 1;
  }else if(charactaer_rank_m5 == 0){   
    judgment5 = 2;
  }else if(charactaer_rank_m5 < 0){   
    judgment5 = 0;
    charactaer_rank_m5 = Math.abs(charactaer_rank_m5);
  }
  let judgment6 = 0;
  if(charactaer_rank_m6 > 0){     
    judgment6 = 1;
  }else if(charactaer_rank_m6 == 0){   
    judgment6 = 2;
  }else if(charactaer_rank_m6 < 0){   
    judgment6 = 0;
    charactaer_rank_m6 = Math.abs(charactaer_rank_m6);
  }

  let judgment7 = 0;
  if(charactaer_rank_m7 > 0){     
    judgment7 = 1;
  }else if(charactaer_rank_m7 == 0){   
    judgment7 = 2;
  }else if(charactaer_rank_m7 < 0){   
    judgment7 = 0;
    charactaer_rank_m7 = Math.abs(charactaer_rank_m7);
  }

  let judgment8 = 0;
  if(charactaer_rank_m8 > 0){     
    judgment8 = 1;
  }else if(charactaer_rank_m8 == 0){   
    judgment8 = 2;
  }else if(charactaer_rank_m8 < 0){   
    judgment8 = 0;
    charactaer_rank_m8 = Math.abs(charactaer_rank_m8);
  }

  let judgment9 = 0;
  if(charactaer_rank_m9 > 0){     
    judgment9 = 1;
  }else if(charactaer_rank_m9 == 0){   
    judgment9 = 2;
  }else if(charactaer_rank_m9 < 0){   
    judgment9 = 0;
    charactaer_rank_m9 = Math.abs(charactaer_rank_m9);
  }


  let judment0IdFind = document.getElementById('judgment0_Id');
  let judment1IdFind = document.getElementById('judgment1_Id');
  let judment2IdFind = document.getElementById('judgment2_Id');
  let judment3IdFind = document.getElementById('judgment3_Id');
  let judment4IdFind = document.getElementById('judgment4_Id');
  let judment5IdFind = document.getElementById('judgment5_Id');
  let judment6IdFind = document.getElementById('judgment6_Id');
  let judment7IdFind = document.getElementById('judgment7_Id');
  let judment8IdFind = document.getElementById('judgment8_Id');
  let judment9IdFind = document.getElementById('judgment9_Id');
   
  if(judgment0 == 1){
    judment0IdFind.innerHTML = '('+charactaer_rank_m0+'<em class="up"></em>)';
  }else if (judgment0 == 2){
    judment0IdFind.innerHTML = '(-)';
  }else if (judgment0 == 0){
    judment0IdFind.innerHTML = '('+charactaer_rank_m0+'<em class="down"></em>)';
  }else{
    judment0IdFind.innerHTML = 'error';
  }

  if(judgment1 == 1){
    judment1IdFind.innerHTML = '('+charactaer_rank_m1+'<em class="up"></em>)';
  }else if (judgment1 == 2){
    judment1IdFind.innerHTML = '(-)';
  }else if (judgment1 == 0){
    judment1IdFind.innerHTML = '('+charactaer_rank_m1+'<em class="down"></em>)';
  }else{
    judment1IdFind.innerHTML = 'error';
  }

  if(judgment2 == 1){
    judment2IdFind.innerHTML = '('+charactaer_rank_m2+'<em class="up"></em>)';
  }else if (judgment2 == 2){
    judment2IdFind.innerHTML = '(-)';
  }else if (judgment2 == 0){
    judment2IdFind.innerHTML = '('+charactaer_rank_m2+'<em class="down"></em>)';
  }else{
    judment2IdFind.innerHTML = 'error';
  }

  if(judgment3 == 1){
    judment3IdFind.innerHTML = '('+charactaer_rank_m3+'<em class="up"></em>)';
  }else if (judgment3 == 2){
    judment3IdFind.innerHTML = '(-)';
  }else if (judgment3 == 0){
    judment3IdFind.innerHTML = '('+charactaer_rank_m3+'<em class="down"></em>)';
  }else{
    judment3IdFind.innerHTML = 'error';
  }

  if(judgment4 == 1){
    judment4IdFind.innerHTML = '('+charactaer_rank_m4+'<em class="up"></em>)';
  }else if (judgment4 == 2){
    judment4IdFind.innerHTML = '(-)';
  }else if (judgment4 == 0){
    judment4IdFind.innerHTML = '('+charactaer_rank_m4+'<em class="down"></em>)';
  }else{
    judment4IdFind.innerHTML = 'error';
  }

  if(judgment5 == 1){
    judment5IdFind.innerHTML = '('+charactaer_rank_m5+'<em class="up"></em>)';
  }else if (judgment5 == 2){
    judment5IdFind.innerHTML = '(-)';
  }else if (judgment5 == 0){
    judment5IdFind.innerHTML = '('+charactaer_rank_m5+'<em class="down"></em>)';
  }else{
    judment5IdFind.innerHTML = 'error';
  }
  if(judgment6 == 1){
    judment6IdFind.innerHTML = '('+charactaer_rank_m6+'<em class="up"></em>)';
  }else if (judgment6 == 2){
    judment6IdFind.innerHTML = '(-)';
  }else if (judgment6 == 0){
    judment6IdFind.innerHTML = '('+charactaer_rank_m6+'<em class="down"></em>)';
  }else{
    judment6IdFind.innerHTML = 'error';
  }

  if(judgment7 == 1){
    judment7IdFind.innerHTML = '('+charactaer_rank_m7+'<em class="up"></em>)';
  }else if (judgment7 == 2){
    judment7IdFind.innerHTML = '(-)';
  }else if (judgment7 == 0){
    judment7IdFind.innerHTML = '('+charactaer_rank_m7+'<em class="down"></em>)';
  }else{
    judment7IdFind.innerHTML = 'error';
  }

  if(judgment8 == 1){
    judment8IdFind.innerHTML = '('+charactaer_rank_m8+'<em class="up"></em>)';
  }else if (judgment8 == 2){
    judment8IdFind.innerHTML = '(-)';
  }else if (judgment8 == 0){
    judment8IdFind.innerHTML = '('+charactaer_rank_m8+'<em class="down"></em>)';
  }else{
    judment8IdFind.innerHTML = 'error';
  }

  if(judgment9 == 1){
    judment9IdFind.innerHTML = '('+charactaer_rank_m9+'<em class="up"></em>)';
  }else if (judgment9 == 2){
    judment9IdFind.innerHTML = '(-)';
  }else if (judgment9 == 0){
    judment9IdFind.innerHTML = '('+charactaer_rank_m9+'<em class="down"></em>)';
  }else{
    judment9IdFind.innerHTML = 'error';
  }

  function dropdown(){
    let find_dropdown_class = document.querySelector(".dropdown");
    let find_close = document.querySelector(".close")
    let find_open = document.querySelector(".open")
    find_dropdown_class.classList.toggle("hide")
    find_close.classList.toggle("hide")
    find_open.classList.toggle("hide")
}

</script>