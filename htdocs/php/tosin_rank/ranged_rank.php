<link rel="stylesheet" href="/./css/rangedRank_style.css">
<script src="/./js/Lorasrank.js"></script>

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
$ranged_id_url = "https://api.neople.co.kr/cy/ranking/tsj/ranged?playerId&offset=%3Coffset%3E&limit=%3Climit%3E&apikey=".$api_key;
$ranged_id = json_decode(httpGet($ranged_id_url), true);

$ranged_array0 = [$ranged_id["rows"][0]["rank"] , $ranged_id["rows"][0]["beforeRank"],$ranged_id["rows"][0]["nickname"], 
$ranged_id["rows"][0]["ratingPoint"], $ranged_id["rows"][0]["winCount"], $ranged_id["rows"][0]["loseCount"]];

$ranged_array1 = [$ranged_id["rows"][1]["rank"] , $ranged_id["rows"][1]["beforeRank"],$ranged_id["rows"][1]["nickname"], 
$ranged_id["rows"][1]["ratingPoint"], $ranged_id["rows"][1]["winCount"], $ranged_id["rows"][1]["loseCount"]];

$ranged_array2 = [$ranged_id["rows"][2]["rank"] , $ranged_id["rows"][2]["beforeRank"],$ranged_id["rows"][2]["nickname"], 
$ranged_id["rows"][2]["ratingPoint"], $ranged_id["rows"][2]["winCount"], $ranged_id["rows"][2]["loseCount"]];

$ranged_array3 = [$ranged_id["rows"][3]["rank"] , $ranged_id["rows"][3]["beforeRank"],$ranged_id["rows"][3]["nickname"], 
$ranged_id["rows"][3]["ratingPoint"], $ranged_id["rows"][3]["winCount"], $ranged_id["rows"][3]["loseCount"]];

$ranged_array4 = [$ranged_id["rows"][4]["rank"] , $ranged_id["rows"][4]["beforeRank"],$ranged_id["rows"][4]["nickname"], 
$ranged_id["rows"][4]["ratingPoint"], $ranged_id["rows"][4]["winCount"], $ranged_id["rows"][4]["loseCount"]];

$ranged_array5 = [$ranged_id["rows"][5]["rank"] , $ranged_id["rows"][5]["beforeRank"],$ranged_id["rows"][5]["nickname"], 
$ranged_id["rows"][5]["ratingPoint"], $ranged_id["rows"][5]["winCount"], $ranged_id["rows"][5]["loseCount"]];

$ranged_array6 = [$ranged_id["rows"][6]["rank"] , $ranged_id["rows"][6]["beforeRank"],$ranged_id["rows"][6]["nickname"], 
$ranged_id["rows"][6]["ratingPoint"], $ranged_id["rows"][6]["winCount"], $ranged_id["rows"][6]["loseCount"]];

$ranged_array7 = [$ranged_id["rows"][7]["rank"] , $ranged_id["rows"][7]["beforeRank"],$ranged_id["rows"][7]["nickname"], 
$ranged_id["rows"][7]["ratingPoint"], $ranged_id["rows"][7]["winCount"], $ranged_id["rows"][7]["loseCount"]];

$ranged_array8 = [$ranged_id["rows"][8]["rank"] , $ranged_id["rows"][8]["beforeRank"],$ranged_id["rows"][8]["nickname"], 
$ranged_id["rows"][8]["ratingPoint"], $ranged_id["rows"][8]["winCount"], $ranged_id["rows"][8]["loseCount"]];

$ranged_array9 = [$ranged_id["rows"][9]["rank"] , $ranged_id["rows"][9]["beforeRank"],$ranged_id["rows"][9]["nickname"], 
$ranged_id["rows"][9]["ratingPoint"], $ranged_id["rows"][9]["winCount"], $ranged_id["rows"][9]["loseCount"]];

$rangedWinPro0 = floor(( $ranged_array0[4] / ($ranged_array0[4] + $ranged_array0[5])) * 100);
$rangedWinPro1 = floor(( $ranged_array1[4] / ($ranged_array1[4] + $ranged_array1[5])) * 100);
$rangedWinPro2 = floor(( $ranged_array2[4] / ($ranged_array2[4] + $ranged_array2[5])) * 100);
$rangedWinPro3 = floor(( $ranged_array3[4] / ($ranged_array3[4] + $ranged_array3[5])) * 100);
$rangedWinPro4 = floor(( $ranged_array4[4] / ($ranged_array4[4] + $ranged_array4[5])) * 100);
$rangedWinPro5 = floor(( $ranged_array5[4] / ($ranged_array5[4] + $ranged_array5[5])) * 100);
$rangedWinPro6 = floor(( $ranged_array6[4] / ($ranged_array6[4] + $ranged_array6[5])) * 100);
$rangedWinPro7 = floor(( $ranged_array7[4] / ($ranged_array7[4] + $ranged_array7[5])) * 100);
$rangedWinPro8 = floor(( $ranged_array8[4] / ($ranged_array8[4] + $ranged_array8[5])) * 100);
$rangedWinPro9 = floor(( $ranged_array9[4] / ($ranged_array9[4] + $ranged_array9[5])) * 100);


?>


<header>
  <a href="#"><img class="logo" src="/./img/logo.png" alt="로고"></a>

  <div class="ranking_nav">
    <a href="/./userinfo.php">통합 랭킹</a>
    <a href="/./php/tosin_rank/melee_rank.php">투신전 랭킹</a>
    <a href="/./php/char_rank/lorasrank.php">캐릭터 랭킹</a>
  </div>

  <div class="search_nav">
    <a href="#">전적 검색</a>
    <div class="search">
      <input class="input_username" maxlength="8" placeholder="닉네임을 입력하시오" type="text">
      <button class="search_img"><img src="/./img/search.png" alt=""></button>
    </div>
  </div>
</header>

<div class="rank_1st">
  <table>
    <tr class="border rank_title">
      <td class="td">등수</td>
      <td class="td">닉네임</td>
      <td class="td">RP</td>
      <td class="td">승률</td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array0[0] ?></p>
          <p class="up_text" id="judgment0_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array0[2]?></td>
      <td class="td"><?=$ranged_array0[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow0"></progress><p><?=$ranged_array0[4]?>승 <?= $ranged_array0[5] ?>패 승률 <?= $rangedWinPro0 ?>%</p></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array1[0] ?></p>
          <p class="up_text" id="judgment1_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array1[2]?></td>
      <td class="td"><?=$ranged_array1[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow1"></progress><p><?=$ranged_array1[4]?>승 <?= $ranged_array1[5] ?>패 승률 <?= $rangedWinPro1 ?>%</p></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array2[0] ?></p>
          <p class="up_text" id="judgment2_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array2[2]?></td>
      <td class="td"><?=$ranged_array2[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow2"></progress><p><?=$ranged_array2[4]?>승 <?= $ranged_array2[5] ?>패 승률 <?= $rangedWinPro2 ?>%</p></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array3[0] ?></p>
          <p class="up_text" id="judgment3_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array3[2]?></td>
      <td class="td"><?=$ranged_array3[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow3"></progress><p><?=$ranged_array3[4]?>승 <?= $ranged_array3[5] ?>패 승률 <?= $rangedWinPro3 ?>%</p></td>
    </tr>
    <tr class="border">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array4[0] ?></p>
          <p class="up_text" id="judgment4_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array4[2]?></td>
      <td class="td"><?=$ranged_array4[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow4"></progress><p><?=$ranged_array4[4]?>승 <?= $ranged_array4[5] ?>패 승률 <?= $rangedWinPro4 ?>%</p></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array5[0] ?></p>
          <p class="up_text" id="judgment5_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array5[2]?></td>
      <td class="td"><?=$ranged_array5[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow5"></progress><p><?=$ranged_array5[4]?>승 <?= $ranged_array5[5] ?>패 승률 <?= $rangedWinPro5 ?>%</p></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array6[0] ?></p>
          <p class="up_text" id="judgment6_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array6[2]?></td>
      <td class="td"><?=$ranged_array6[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow6"></progress><p><?=$ranged_array6[4]?>승 <?= $ranged_array6[5] ?>패 승률 <?= $rangedWinPro6 ?>%</p></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array7[0] ?></p>
          <p class="up_text" id="judgment7_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array7[2]?></td>
      <td class="td"><?=$ranged_array7[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow7"></progress><p><?=$ranged_array7[4]?>승 <?= $ranged_array7[5] ?>패 승률 <?= $rangedWinPro7 ?>%</p></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array8[0] ?></p>
          <p class="up_text" id="judgment8_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array8[2]?></td>
      <td class="td"><?=$ranged_array8[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow8"></progress><p><?=$ranged_array8[4]?>승 <?= $ranged_array8[5] ?>패 승률 <?= $rangedWinPro8 ?>%</p></td>
    </tr>
    <tr class="border bgbk">
      <td class="rank_text td">
        <div>
          <p><?= $ranged_array9[0] ?></p>
          <p class="up_text" id="judgment9_Id">(1<em class="up"></em>)</p>
        </div>
      </td>
      <td class="td"><?=$ranged_array9[2]?></td>
      <td class="td"><?=$ranged_array9[3]?></td>
      <td class="td"><progress value="20" max="100" id="winProShow9"></progress><p><?=$ranged_array9[4]?>승 <?= $ranged_array9[5] ?>패 승률 <?= $rangedWinPro9 ?>%</p></td>
    </tr>
  </table>
</div>
<div class="char_select_div"> 
  <div class="char_select_open">
        <p class="tosintitle">투신전:파<img src="/./img/tosinfa.png" alt="#"> </p>
        <p class="open" onclick="dropdown()">&#9660;</p>
        <p class="close hide" onclick="dropdown()">&#9650;</p>
  </div>
  <div class="char_select hide dropdown">
    <div>
      <a href="./melee_rank.php" class="tosinrurtitle">투신전:격<img src="/./img/tosinrur.png" alt="#" class="tosinrur"></a>
    </div>
    <div>
      <a href="./ranged_rank.php" class="tosinfatitle">투신전:파<img src="/./img/tosinfa.png" alt="#" class="tosinfa"></a>
    </div>
  </div>
</div>

<script>

  let rank_m0 = <?php echo $ranged_array0[1]; ?> - <?php echo $ranged_array0[0]; ?>;
  let beforeRank0 = <?php echo $ranged_array0[1]?>;

  let rank_m1 = <?php echo $ranged_array1[1]; ?> - <?php echo $ranged_array1[0]; ?>;
  let beforeRank1 = <?php echo $ranged_array1[1]?>;

  let rank_m2 = <?php echo $ranged_array2[1]; ?> - <?php echo $ranged_array2[0]; ?>;
  let beforeRank2 = <?php echo $ranged_array2[1]?>;

  let rank_m3 = <?php echo $ranged_array3[1]; ?> - <?php echo $ranged_array3[0]; ?>;
  let beforeRank3 = <?php echo $ranged_array3[1]?>;

  let rank_m4 = <?php echo $ranged_array4[1]; ?> - <?php echo $ranged_array4[0]; ?>;
  let beforeRank4 = <?php echo $ranged_array4[1]?>;

  let rank_m5 = <?php echo $ranged_array5[1]; ?> - <?php echo $ranged_array5[0]; ?>;
  let beforeRank5 = <?php echo $ranged_array5[1]?>;

  let rank_m6 = <?php echo $ranged_array6[1]; ?> - <?php echo $ranged_array6[0]; ?>;
  let beforeRank6 = <?php echo $ranged_array6[1]?>;

  let rank_m7 = <?php echo $ranged_array7[1]; ?> - <?php echo $ranged_array7[0]; ?>;
  let beforeRank7 = <?php echo $ranged_array7[1]?>;

  let rank_m8 = <?php echo $ranged_array8[1]; ?> - <?php echo $ranged_array8[0]; ?>;
  let beforeRank8 = <?php echo $ranged_array8[1]?>;

  let rank_m9 = <?php echo $ranged_array9[1]; ?> - <?php echo $ranged_array9[0]; ?>;
  let beforeRank9 = <?php echo $ranged_array9[1]?>;

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

  let judgment6 = 0;
  if(rank_m6 > 0){     
    judgment6 = 1;
  }else if(rank_m6 == 0){   
    judgment6 = 2;
  }else if(rank_m6 < 0){   
    judgment6 = 0;
    rank_m6 = Math.abs(rank_m6);
  }

  let judgment7 = 0;
  if(rank_m7 > 0){     
    judgment7 = 1;
  }else if(rank_m7 == 0){   
    judgment7 = 2;
  }else if(rank_m7 < 0){   
    judgment7 = 0;
    rank_m7 = Math.abs(rank_m7);
  }

  let judgment8 = 0;
  if(rank_m8 > 0){     
    judgment8 = 1;
  }else if(rank_m8 == 0){   
    judgment8 = 2;
  }else if(rank_m8 < 0){   
    judgment8 = 0;
    rank_m8 = Math.abs(rank_m8);
  }

  let judgment9 = 0;
  if(rank_m9 > 0){     
    judgment9 = 1;
  }else if(rank_m9 == 0){   
    judgment9 = 2;
  }else if(rank_m9 < 0){   
    judgment9 = 0;
    rank_m9 = Math.abs(rank_m9);
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
  if(beforeRank6 == 0){
    judment6IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment6 == 1){
    judment6IdFind.innerHTML = '('+rank_m6+'<em class="up"></em>)';
  }else if (judgment6 == 2){
    judment6IdFind.innerHTML = '(-)';
  }else if (judgment6 == 0){
    judment6IdFind.innerHTML = '('+rank_m6+'<em class="down"></em>)';
  }

  if(beforeRank7 == 0){
    judment7IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment7 == 1){
    judment7IdFind.innerHTML = '('+rank_m7+'<em class="up"></em>)';
  }else if (judgment7 == 2){
    judment7IdFind.innerHTML = '(-)';
  }else if (judgment7 == 0){
    judment7IdFind.innerHTML = '('+rank_m7+'<em class="down"></em>)';
  }

  if(beforeRank8 == 0){
    judment8IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment8 == 1){
    judment8IdFind.innerHTML = '('+rank_m8+'<em class="up"></em>)';
  }else if (judgment8 == 2){
    judment8IdFind.innerHTML = '(-)';
  }else if (judgment8 == 0){
    judment8IdFind.innerHTML = '('+rank_m8+'<em class="down"></em>)';
  }

  if(beforeRank9 == 0){
    judment9IdFind.innerHTML = '(new<em class="up"></em>)';
  }else if (judgment9 == 1){
    judment9IdFind.innerHTML = '('+rank_m9+'<em class="up"></em>)';
  }else if (judgment9 == 2){
    judment9IdFind.innerHTML = '(-)';
  }else if (judgment9 == 0){
    judment9IdFind.innerHTML = '('+rank_m9+'<em class="down"></em>)';
  }

  let winPro0 = <?php echo $rangedWinPro0?>;
  let winPro1 = <?php echo $rangedWinPro1?>;
  let winPro2 = <?php echo $rangedWinPro2?>;
  let winPro3 = <?php echo $rangedWinPro3?>;
  let winPro4 = <?php echo $rangedWinPro4?>;
  let winPro5 = <?php echo $rangedWinPro5?>;
  let winPro6 = <?php echo $rangedWinPro6?>;
  let winPro7 = <?php echo $rangedWinPro7?>;
  let winPro8 = <?php echo $rangedWinPro8?>;
  let winPro9 = <?php echo $rangedWinPro9?>;


  document.getElementById( 'winProShow0' ).value = winPro0;
  document.getElementById( 'winProShow1' ).value = winPro1;
  document.getElementById( 'winProShow2' ).value = winPro2;
  document.getElementById( 'winProShow3' ).value = winPro3;
  document.getElementById( 'winProShow4' ).value = winPro4;
  document.getElementById( 'winProShow5' ).value = winPro5;
  document.getElementById( 'winProShow6' ).value = winPro6;
  document.getElementById( 'winProShow7' ).value = winPro7;
  document.getElementById( 'winProShow8' ).value = winPro8;
  document.getElementById( 'winProShow9' ).value = winPro9;

  function dropdown(){
    let find_dropdown_class = document.querySelector(".dropdown");
    let find_close = document.querySelector(".close")
    let find_open = document.querySelector(".open")
    find_dropdown_class.classList.toggle("hide")
    find_close.classList.toggle("hide")
    find_open.classList.toggle("hide")
}

</script>