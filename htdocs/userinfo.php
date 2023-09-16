<link rel="stylesheet" href="/./css/rank_style.css">
<?php
  echo "<meta charset='utf-8'>";
  function httpGet($url) {
    $ci = curl_init();
    
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ci, CURLOPT_URL, $url);
    curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, 0);


    $response = curl_exec($ci);
    curl_close($ci);
    return $response;
  }
  $api_key = "p2aWMaT2xs7QFHhZbWAMlVj9lT9WovhZ";
  $get_ranking_url = "https://api.neople.co.kr/cy/ranking/ratingpoint?playerId=&offset=0&limit=1000&apikey=p2aWMaT2xs7QFHhZbWAMlVj9lT9WovhZ";
  $get_ranking = json_decode(httpGet($get_ranking_url), true);
  //20774c6d0d44ec7743b3eb95d8c3dec0
  
  $rank_array0 = [$get_ranking['rows'][0]['rank'], $get_ranking['rows'][0]['beforeRank'],
  $get_ranking['rows'][0]['nickname'], $get_ranking['rows'][0]['grade'], $get_ranking['rows'][0]['ratingPoint'], $get_ranking['rows'][0]['clanName']
  , $get_ranking['rows'][0]['represent']['characterId'], $get_ranking['rows'][0]['represent']['characterName']];

  $rank_array1 = [$get_ranking['rows'][1]['rank'], $get_ranking['rows'][1]['beforeRank'],
  $get_ranking['rows'][1]['nickname'], $get_ranking['rows'][1]['grade'], $get_ranking['rows'][1]['ratingPoint'], $get_ranking['rows'][1]['clanName']
  , $get_ranking['rows'][1]['represent']['characterId'], $get_ranking['rows'][1]['represent']['characterName']];
  
  $rank_array2 = [$get_ranking['rows'][2]['rank'], $get_ranking['rows'][2]['beforeRank'],
  $get_ranking['rows'][2]['nickname'], $get_ranking['rows'][2]['grade'], $get_ranking['rows'][2]['ratingPoint'], $get_ranking['rows'][2]['clanName']
  , $get_ranking['rows'][2]['represent']['characterId'], $get_ranking['rows'][2]['represent']['characterName']];
  
  $rank_array3 = [$get_ranking['rows'][3]['rank'], $get_ranking['rows'][3]['beforeRank'],
  $get_ranking['rows'][3]['nickname'], $get_ranking['rows'][3]['grade'], $get_ranking['rows'][3]['ratingPoint'], $get_ranking['rows'][3]['clanName']
  , $get_ranking['rows'][3]['represent']['characterId'], $get_ranking['rows'][3]['represent']['characterName']];

  $rank_array4 = [$get_ranking['rows'][4]['rank'], $get_ranking['rows'][4]['beforeRank'],
  $get_ranking['rows'][4]['nickname'], $get_ranking['rows'][4]['grade'], $get_ranking['rows'][4]['ratingPoint'], $get_ranking['rows'][4]['clanName']
  , $get_ranking['rows'][4]['represent']['characterId'], $get_ranking['rows'][4]['represent']['characterName']];

  $rank_array5 = [$get_ranking['rows'][5]['rank'], $get_ranking['rows'][5]['beforeRank'],
  $get_ranking['rows'][5]['nickname'], $get_ranking['rows'][5]['grade'], $get_ranking['rows'][5]['ratingPoint'], $get_ranking['rows'][5]['clanName']
  , $get_ranking['rows'][5]['represent']['characterId'], $get_ranking['rows'][5]['represent']['characterName']];
?>

<!-- {
  "rows" : [ {
    "rank" : 1,
    "beforeRank" : 1,
    "playerId" : "20774c6d0d44ec7743b3eb95d8c3dec0",
    "nickname" : "무요",
    "grade" : 110,
    "ratingPoint" : 3419,
    "clanName" : "Oㄱㄴ",
    "represent" : {
      "characterId" : "0cd5fc051d760e9c1a2f19444ea53917",
      "characterName" : "클리브"
    }
  }
-->

<header>
        <a href="#"><img class="logo" src="../img/logo.png" alt="로고"></a>

        <div class="ranking_nav">
            <a href="#">통합 랭킹</a>
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
      <td class="td">등급</td>
      <td class="td">RP</td>
      <td class="td">클랜</td>
      <td class="td">모스트</td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $rank_array0[0] ?></p>
          <p class="up_text" id="judgment0_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$rank_array0[2]?></td>
      <td class="td"><?=$rank_array0[3]?></td>
      <td class="td"><?=$rank_array0[4]?></td>
      <td class="td"><?=$rank_array0[5]?></td>
      <td class="td"><img class="most_img" src="https://img-api.neople.co.kr/cy/characters/<?=$rank_array0[6]?>?zoom=3"></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $rank_array1[0] ?></p>
          <p class="up_text" id="judgment1_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$rank_array1[2]?></td>
      <td class="td"><?=$rank_array1[3]?></td>
      <td class="td"><?=$rank_array1[4]?></td>
      <td class="td"><?=$rank_array1[5]?></td>
      <td class="td"><img src="https://img-api.neople.co.kr/cy/characters/<?=$rank_array1[6]?>?zoom=3" alt="클리브"></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $rank_array2[0] ?></p>
          <p class="up_text" id="judgment2_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$rank_array2[2]?></td>
      <td class="td"><?=$rank_array2[3]?></td>
      <td class="td"><?=$rank_array2[4]?></td>
      <td class="td"><?=$rank_array2[5]?></td>
      <td class="td"><img src="https://img-api.neople.co.kr/cy/characters/<?=$rank_array2[6]?>?zoom=3"></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $rank_array3[0] ?></p>
          <p class="up_text" id="judgment3_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$rank_array3[2]?></td>
      <td class="td"><?=$rank_array3[3]?></td>
      <td class="td"><?=$rank_array3[4]?></td>
      <td class="td"><?=$rank_array3[5]?></td>
      <td class="td"><img src="https://img-api.neople.co.kr/cy/characters/<?=$rank_array3[6]?>?zoom=3"></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $rank_array4[0] ?></p>
          <p class="up_text" id="judgment4_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$rank_array4[2]?></td>
      <td class="td"><?=$rank_array4[3]?></td>
      <td class="td"><?=$rank_array4[4]?></td>
      <td class="td"><?=$rank_array4[5]?></td>
      <td class="td"><img src="https://img-api.neople.co.kr/cy/characters/<?=$rank_array4[6]?>?zoom=3"></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $rank_array5[0] ?></p>
          <p class="up_text" id="judgment5_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$rank_array5[2]?></td>
      <td class="td"><?=$rank_array5[3]?></td>
      <td class="td"><?=$rank_array5[4]?></td>
      <td class="td"><?=$rank_array5[5]?></td>
      <td class="td"><img src="https://img-api.neople.co.kr/cy/characters/<?=$rank_array5[6]?>?zoom=3"></td>
    </tr>
  </table>
</div>

<script>
  let rank_m0 = <?php echo $rank_array0[1]; ?> - <?php echo $rank_array0[0]; ?>;
  let beforeRank0 = <?php echo $rank_array0[1]?>;

  let rank_m1 = <?php echo $rank_array1[1]; ?> - <?php echo $rank_array1[0]; ?>;
  let beforeRank1 = <?php echo $rank_array1[1]?>;

  let rank_m2 = <?php echo $rank_array2[1]; ?> - <?php echo $rank_array2[0]; ?>;
  let beforeRank2 = <?php echo $rank_array2[1]?>;

  let rank_m3 = <?php echo $rank_array3[1]; ?> - <?php echo $rank_array3[0]; ?>;
  let beforeRank3 = <?php echo $rank_array3[1]?>;

  let rank_m4 = <?php echo $rank_array4[1]; ?> - <?php echo $rank_array4[0]; ?>;
  let beforeRank4 = <?php echo $rank_array4[1]?>;

  let rank_m5 = <?php echo $rank_array5[1]; ?> - <?php echo $rank_array5[0]; ?>;
  let beforeRank5 = <?php echo $rank_array5[1]?>;

  let judgment0 = 0;
  if(rank_m0 > 0){     
    judgment0 = 1;
  }else if(rank_m0 == 0){   
    judgment0 = 2;
  }else if(rank_m0 < 0){   
    judgment0 = 0;
    rank_m0 = Math.abs(rank_m0);
  }

  let judgment1 = 0;
  if(rank_m1 > 0){     
    judgment1 = 1;
  }else if(rank_m1 == 0){   
    judgment1 = 2;
  }else if(rank_m1 < 0){   
    judgment1 = 0;
    rank_m1 = Math.abs(rank_m1);
  }

  let judgment2 = 0;
  if(rank_m2 > 0){     
    judgment2 = 1;
  }else if(rank_m2 == 0){   
    judgment2 = 2;
  }else if(rank_m2 < 0){   
    judgment2 = 0;
    rank_m2 = Math.abs(rank_m2);
  }

  let judgment3 = 0;
  if(rank_m3 > 0){     
    judgment3 = 1;
  }else if(rank_m3 == 0){   
    judgment3 = 2;
  }else if(rank_m3 < 0){   
    judgment3 = 0;
    rank_m3 = Math.abs(rank_m3);
  }

  let judgment4 = 0;
  if(rank_m4 > 0){     
    judgment4 = 1;
  }else if(rank_m4 == 0){   
    judgment4 = 2;
  }else if(rank_m4 < 0){   
    judgment4 = 0;
    rank_m4 = Math.abs(rank_m4);
  }

  let judgment5 = 0;
  if(rank_m5 > 0){     
    judgment5 = 1;
  }else if(rank_m5 == 0){   
    judgment5 = 2;
  }else if(rank_m5 < 0){   
    judgment5 = 0;
    rank_m5 = Math.abs(rank_m5);
  }

  let judment0IdFind = document.getElementById('judgment0_Id');
  let judment1IdFind = document.getElementById('judgment1_Id');
  let judment2IdFind = document.getElementById('judgment2_Id');
  let judment3IdFind = document.getElementById('judgment3_Id');
  let judment4IdFind = document.getElementById('judgment4_Id');
  let judment5IdFind = document.getElementById('judgment5_Id');
   
  if(beforeRank0 == 0){
    judment0IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment0 == 1){
    judment0IdFind.innerHTML = '('+rank_m0+'<em class="up"></em>)';
  }else if (judgment0 == 2){
    judment0IdFind.innerHTML = '(-)';
  }else if(judgment0 == 0){
    judment0IdFind.innerHTML = '('+rank_m0+'<em class="down"></em>)';
  }

  if(beforeRank1 == 0){
    judment1IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment1 == 1){
    judment1IdFind.innerHTML = '('+rank_m1+'<em class="up"></em>)';
  }else if (judgment1 == 2){
    judment1IdFind.innerHTML = '(-)';
  }else if (judgment1 == 0){
    judment1IdFind.innerHTML = '('+rank_m1+'<em class="down"></em>)';
  }

  if(beforeRank2 == 0){
    judment2IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment2 == 1){
    judment2IdFind.innerHTML = '('+rank_m2+'<em class="up"></em>)';
  }else if (judgment2 == 2){
    judment2IdFind.innerHTML = '(-)';
  }else if (judgment2 == 0){
    judment2IdFind.innerHTML = '('+rank_m2+'<em class="down"></em>)';
  }

  if(beforeRank3 == 0){
    judment3IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment3 == 1){
    judment3IdFind.innerHTML = '('+rank_m3+'<em class="up"></em>)';
  }else if (judgment3 == 2){
    judment3IdFind.innerHTML = '(-)';
  }else if (judgment3 == 0){
    judment3IdFind.innerHTML = '('+rank_m3+'<em class="down"></em>)';
  }

  if(beforeRank4 == 0){
    judment4IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment4 == 1){
    judment4IdFind.innerHTML = '('+rank_m4+'<em class="up"></em>)';
  }else if (judgment4 == 2){
    judment4IdFind.innerHTML = '(-)';
  }else if (judgment4 == 0){
    judment4IdFind.innerHTML = '('+rank_m4+'<em class="down"></em>)';
  }

  if(beforeRank5 == 0){
    judment5IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment5 == 1){
    judment5IdFind.innerHTML = '('+rank_m5+'<em class="up"></em>)';
  }else if (judgment5 == 2){
    judment5IdFind.innerHTML = '(-)';
  }else if (judgment5 == 0){
    judment5IdFind.innerHTML = '('+rank_m5+'<em class="down"></em>)';
  }

</script>