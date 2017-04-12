<?php
session_start();
$bomberman_table1 =$_POST['bomberman_table1'];
$bomberman_table2 =$_POST['bomberman_table2'];
$bomberman_table3 =$_POST['bomberman_table3'];
$bomberman_table4 =$_POST['bomberman_table4'];
$bomberman_table5 =$_POST['bomberman_table5'];
$bomberman_table6 =$_POST['bomberman_table6'];
$bomberman_table7 =$_POST['bomberman_table7'];
$bomberman_table8 =$_POST['bomberman_table8'];
$tw_firstgame = $_POST['tw_firstgame'];
$tw_secondgame = $_POST['tw_secondgame'];
$tw_thirdgame = $_POST['tw_thirdgame'];
$tw_fourthgame = $_POST['tw_fourthgame'];
$tw_fifthgame = $_POST['tw_fifthgame'];
$tw_sixthgame = $_POST['tw_sixthgame'];
$bomberman_table1_button = $_POST['bomberman_table1_button'];
$bomberman_table2_button = $_POST['bomberman_table2_button'];
$bomberman_table3_button = $_POST['bomberman_table3_button'];
$bomberman_table4_button = $_POST['bomberman_table4_button'];
$bomberman_table5_button = $_POST['bomberman_table5_button'];
$bomberman_table6_button = $_POST['bomberman_table6_button'];
$bomberman_table7_button = $_POST['bomberman_table7_button'];
$bomberman_table8_button = $_POST['bomberman_table8_button'];
$teeworlds_game1_button = $_POST['teeworlds_game1_button'];
$teeworlds_game2_button = $_POST['teeworlds_game2_button'];
$teeworlds_game3_button = $_POST['teeworlds_game3_button'];
$teeworlds_game4_button = $_POST['teeworlds_game4_button'];
$teeworlds_game5_button = $_POST['teeworlds_game5_button'];
$teeworlds_game6_button = $_POST['teeworlds_game6_button'];
$teeworlds_info = $_POST['teeworlds_info'];
$bomberman_info = $_POST['bomberman_info'];

$tw_table_rightwin = array("notwon", "notwon", "notwon", "notwon", "notwon", "notwon");
$tw_table_leftwin = array("notwon", "notwon", "notwon", "notwon", "notwon", "notwon");
$bb_table_info =array("","","","","","","","");
$tw_table_info =array("","","","","","");
$tw_table = array("inactive-game", "inactive-game", "inactive-game", "inactive-game", "inactive-game", "inactive-game");
$bb_table = array("inactive-game", "inactive-game", "inactive-game", "inactive-game", "inactive-game", "inactive-game", "inactive-game", "inactive-game");
if ($bomberman_table1_button[1] == 'true')
{
  $bb_table[0] = "active-game";
}
if ($bomberman_table1_button[2] == 'true')
{
  $bb_table[0] = "closed-game";
}
if ($bomberman_table1_button[3] == 'true')
{
  $bb_table_info[0] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[0]
    </div>
  </div>";
}
if ($bomberman_table2_button[1] == 'true')
{
  $bb_table[1] = "active-game";
}
if ($bomberman_table2_button[2] == 'true')
{
  $bb_table[1] = "closed-game";
}
if ($bomberman_table2_button[3] == 'true')
{
  $bb_table_info[1] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[1]
    </div>
  </div>";
}
if ($bomberman_table3_button[1] == 'true')
{
  $bb_table[2] = "active-game";
}
if ($bomberman_table3_button[2] == 'true')
{
  $bb_table[2] = "closed-game";
}
if ($bomberman_table3_button[3] == 'true')
{
  $bb_table_info[2] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[2]
    </div>
  </div>";
}
if ($bomberman_table4_button[1] == 'true')
{
  $bb_table[3] = "active-game";
}
if ($bomberman_table4_button[2] == 'true')
{
  $bb_table[3] = "closed-game";
}
if ($bomberman_table4_button[3] == 'true')
{
  $bb_table_info[3] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[3]
    </div>
  </div>";
}
if ($bomberman_table5_button[1] == 'true')
{
  $bb_table[4] = "active-game";
}
if ($bomberman_table5_button[2] == 'true')
{
  $bb_table[4] = "closed-game";
}
if ($bomberman_table5_button[3] == 'true')
{
  $bb_table_info[4] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[4]
    </div>
  </div>";
}
if ($bomberman_table6_button[1] == 'true')
{
  $bb_table[5] = "active-game";
}
if ($bomberman_table6_button[2] == 'true')
{
  $bb_table[5] = "closed-game";
}
if ($bomberman_table6_button[3] == 'true')
{
  $bb_table_info[5] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[5]
    </div>
  </div>";
}
if ($bomberman_table7_button[1] == 'true')
{
  $bb_table[6] = "active-game";
}
if ($bomberman_table7_button[2] == 'true')
{
  $bb_table[6] = "closed-game";
}
if ($bomberman_table7_button[3] == 'true')
{
  $bb_table_info[6] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[6]
    </div>
  </div>";
}
if ($bomberman_table8_button[1] == 'true')
{
  $bb_table[7] = "active-game";
}
if ($bomberman_table8_button[2] == 'true')
{
  $bb_table[7] = "closed-game";
}
if ($bomberman_table8_button[3] == 'true')
{
  $bb_table_info[7] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $bomberman_info[7]
    </div>
  </div>";
}
//Teeworlds Spielkontrolle Spiel 1
if ($teeworlds_game1_button[1] == 'true')
{
  $tw_table[0] = "active-game-tw-glyp";
}
if ($teeworlds_game1_button[2] == 'true')
{
  $tw_table[0] = "finished-game-tw-glyp";
}
if ($teeworlds_game1_button[3] == 'true')
{
  $tw_table_info[0] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $teeworlds_info[0]
    </div>
  </div>";
}
if ($teeworlds_game1_button[4] == 'true')
{
  $tw_table_leftwin[0] = "finished-game-tw-text";
}
if ($teeworlds_game1_button[5] == 'true')
{
  $tw_table_rightwin[0] = "finished-game-tw-text";
}
//Teeworlds Spielkontrolle Spiel 2
if ($teeworlds_game2_button[1] == 'true')
{
  $tw_table[1] = "active-game-tw-glyp";
}
if ($teeworlds_game2_button[2] == 'true')
{
  $tw_table[1] = "finished-game-tw-glyp";
}
if ($teeworlds_game2_button[3] == 'true')
{
  $tw_table_info[1] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $teeworlds_info[1]
    </div>
  </div>";
}
if ($teeworlds_game2_button[4] == 'true')
{
  $tw_table_leftwin[1] = "finished-game-tw-text";
}
if ($teeworlds_game2_button[5] == 'true')
{
  $tw_table_rightwin[1] = "finished-game-tw-text";
}
//Teeworlds Spielkontrolle Spiel 3
if ($teeworlds_game3_button[1] == 'true')
{
  $tw_table[2] = "active-game-tw-glyp";
}
if ($teeworlds_game3_button[2] == 'true')
{
  $tw_table[2] = "finished-game-tw-glyp";
}
if ($teeworlds_game3_button[3] == 'true')
{
  $tw_table_info[2] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $teeworlds_info[2]
    </div>
  </div>";
}
if ($teeworlds_game3_button[4] == 'true')
{
  $tw_table_leftwin[2] = "finished-game-tw-text";
}
if ($teeworlds_game3_button[5] == 'true')
{
  $tw_table_rightwin[2] = "finished-game-tw-text";
}
//Teeworlds Spielkontrolle Spiel 4
if ($teeworlds_game4_button[1] == 'true')
{
  $tw_table[3] = "active-game-tw-glyp";
}
if ($teeworlds_game4_button[2] == 'true')
{
  $tw_table[3] = "finished-game-tw-glyp";
}
if ($teeworlds_game4_button[3] == 'true')
{
  $tw_table_info[3] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $teeworlds_info[3]
    </div>
  </div>";
}
if ($teeworlds_game4_button[4] == 'true')
{
  $tw_table_leftwin[3] = "finished-game-tw-text";
}
if ($teeworlds_game4_button[5] == 'true')
{
  $tw_table_rightwin[3] = "finished-game-tw-text";
}
//Teeworlds Spielkontrolle Spiel 5
if ($teeworlds_game5_button[1] == 'true')
{
  $tw_table[4] = "active-game-tw-glyp";
}
if ($teeworlds_game5_button[2] == 'true')
{
  $tw_table[4] = "finished-game-tw-glyp";
}
if ($teeworlds_game5_button[3] == 'true')
{
  $tw_table_info[4] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $teeworlds_info[4]
    </div>
  </div>";
}
if ($teeworlds_game5_button[4] == 'true')
{
  $tw_table_leftwin[4] = "finished-game-tw-text";
}
if ($teeworlds_game5_button[5] == 'true')
{
  $tw_table_rightwin[4] = "finished-game-tw-text";
}
//Teeworlds Spielkontrolle Spiel 6
if ($teeworlds_game6_button[1] == 'true')
{
  $tw_table[5] = "active-game-tw-glyp";
}
if ($teeworlds_game6_button[2] == 'true')
{
  $tw_table[5] = "finished-game-tw-glyp";
}
if ($teeworlds_game6_button[3] == 'true')
{
  $tw_table_info[5] = "<div class='panel panel-primary'>
    <div class='panel-heading'>Hinweise zum Spiel</div>
    <div class='panel-body'>
      $teeworlds_info[5]
    </div>
  </div>";
}
if ($teeworlds_game6_button[4] == 'true')
{
  $tw_table_leftwin[5] = "finished-game-tw-text";
}
if ($teeworlds_game6_button[5] == 'true')
{
  $tw_table_rightwin[5] = "finished-game-tw-text";
}
file_put_contents('../turnierbaum/turnierbaum.html',
"
<!-- Start des Headers -->
<div class='thumbnail'>
    <h1 class='text-center' id='header-top'><strong>Turnierbaum</strong></h1>
    <div class='panel panel-default'>
        <div class='panel-body text-center' id='panel-header'>
            Hier findest du alle Informationen zu den aktuellen Spielen :) Die Seite aktualisiert sich aller 7 Sekunden automatisch.
        </div>
    </div>
</div>
<!-- Ende des Headers -->
<!-- Start des Headers-Bomberman -->
<div class='thumbnail thumbnail-bomberman'>
    <h1 class='text-center' id='header'><strong>Bomberman</strong></h1>
    <!-- <div class='panel panel-default'>
<div class='panel-body text-center' id='panel-header'>
  Hier findest du alle Informationen zum Bomberman-Turnier :) Natürlich immer up-to-date
</div> -->
</div>
</div>
<!-- Ende des Headers-Bomberman -->
<!-- Start des Headers-Vorrunde-Bomberman -->
<div class='thumbnail thumbnail-bomberman'>
    <h3 class='text-center' id='header-vorrunde'><strong>Vorrunde</strong></h3>
</div>
<!-- Ende des Headers-Vorrunde-Bomberman -->
<!-- Start des Table-Raum1-Bomberman -->
<div class='thumbnail $bb_table[0]'>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Raum 1</th>
                <th>Sara</th>
                <th>Alec</th>
                <th>Kevin K.</th>
                <th>Dennis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td>$bomberman_table1[4]</td>
                <td>$bomberman_table1[5]</td>
                <td>$bomberman_table1[6]</td>
                <td>$bomberman_table1[7]</td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td>$bomberman_table1[8]</td>
                <td>$bomberman_table1[9]</td>
                <td>$bomberman_table1[10]</td>
                <td>$bomberman_table1[11]</td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td>$bomberman_table1[12]</td>
                <td>$bomberman_table1[13]</td>
                <td>$bomberman_table1[14]</td>
                <td>$bomberman_table1[15]</td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td>$bomberman_table1[16]</td>
            <td>$bomberman_table1[17]</td>
            <td>$bomberman_table1[18]</td>
            <td>$bomberman_table1[19]</td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td>$bomberman_table1[20]</td>
            <td>$bomberman_table1[21]</td>
            <td>$bomberman_table1[22]</td>
            <td>$bomberman_table1[23]</td>
        </tr>
        <tr>
            <th>Platz</th>
            <td>$bomberman_table1[24]</td>
            <td>$bomberman_table1[25]</td>
            <td>$bomberman_table1[26]</td>
            <td>$bomberman_table1[27]</td>
        </tr>
        </thead>
    </table>
    <div>
    $bb_table_info[0]
    </div>
</div>
<!-- Ende des Table-Raum1-Bomberman -->
<!-- Start des Table-Raum2-Bomberman -->
<div class='thumbnail $bb_table[1]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 2</th>
            <th>Eric</th>
            <th>Cora</th>
            <th>Raphael</th>
            <th>Erik</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table2[4]</td>
            <td>$bomberman_table2[5]</td>
            <td>$bomberman_table2[6]</td>
            <td>$bomberman_table2[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table2[8]</td>
            <td>$bomberman_table2[9]</td>
            <td>$bomberman_table2[10]</td>
            <td>$bomberman_table2[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table2[12]</td>
            <td>$bomberman_table2[13]</td>
            <td>$bomberman_table2[14]</td>
            <td>$bomberman_table2[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table2[16]</td>
        <td>$bomberman_table2[17]</td>
        <td>$bomberman_table2[18]</td>
        <td>$bomberman_table2[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table2[20]</td>
        <td>$bomberman_table2[21]</td>
        <td>$bomberman_table2[22]</td>
        <td>$bomberman_table2[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table2[24]</td>
        <td>$bomberman_table2[25]</td>
        <td>$bomberman_table2[26]</td>
        <td>$bomberman_table2[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[1]
</div>
</div>
<!-- Ende des Table-Raum2-Bomberman -->
<!-- Start des Table-Raum3-Bomberman -->
<div class='thumbnail $bb_table[2]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 3</th>
            <th>Noah</th>
            <th>Tom</th>
            <th>Max</th>
            <th>Konstantin</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table3[4]</td>
            <td>$bomberman_table3[5]</td>
            <td>$bomberman_table3[6]</td>
            <td>$bomberman_table3[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table3[8]</td>
            <td>$bomberman_table3[9]</td>
            <td>$bomberman_table3[10]</td>
            <td>$bomberman_table3[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table3[12]</td>
            <td>$bomberman_table3[13]</td>
            <td>$bomberman_table3[14]</td>
            <td>$bomberman_table3[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table3[16]</td>
        <td>$bomberman_table3[17]</td>
        <td>$bomberman_table3[18]</td>
        <td>$bomberman_table3[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table3[20]</td>
        <td>$bomberman_table3[21]</td>
        <td>$bomberman_table3[22]</td>
        <td>$bomberman_table3[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table3[24]</td>
        <td>$bomberman_table3[25]</td>
        <td>$bomberman_table3[26]</td>
        <td>$bomberman_table3[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[2]
</div>
</div>
<!-- Ende des Table-Raum3-Bomberman -->
<!-- Start des Table-Raum4-Bomberman -->
<div class='thumbnail $bb_table[3]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 4</th>
            <th>Gregor</th>
            <th>Roman</th>
            <th>Richard</th>
            <th>Julian</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table4[4]</td>
            <td>$bomberman_table4[5]</td>
            <td>$bomberman_table4[6]</td>
            <td>$bomberman_table4[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table4[8]</td>
            <td>$bomberman_table4[9]</td>
            <td>$bomberman_table4[10]</td>
            <td>$bomberman_table4[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table4[12]</td>
            <td>$bomberman_table4[13]</td>
            <td>$bomberman_table4[14]</td>
            <td>$bomberman_table4[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table4[16]</td>
        <td>$bomberman_table4[17]</td>
        <td>$bomberman_table4[18]</td>
        <td>$bomberman_table4[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table4[20]</td>
        <td>$bomberman_table4[21]</td>
        <td>$bomberman_table4[22]</td>
        <td>$bomberman_table4[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table4[24]</td>
        <td>$bomberman_table4[25]</td>
        <td>$bomberman_table4[26]</td>
        <td>$bomberman_table4[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[3]
</div>
</div>
<!-- Ende des Table-Raum4-Bomberman -->
<!-- Start des Headers-Finalrunde-Bomberman -->
<div class='thumbnail thumbnail-bomberman'>
    <h3 class='text-center' id='header-vorrunde'><strong>Finalrunde</strong></h3>
</div>
<!-- Ende des Headers-Finalrunde-Bomberman -->
<!-- Start des Table-Raum1-Bomberman -->
<div class='thumbnail $bb_table[4]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
            <th>$bomberman_table5[0]</th>
            <th>$bomberman_table5[1]</th>
            <th>$bomberman_table5[2]</th>
            <th>$bomberman_table5[3]</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table5[4]</td>
            <td>$bomberman_table5[5]</td>
            <td>$bomberman_table5[6]</td>
            <td>$bomberman_table5[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table5[8]</td>
            <td>$bomberman_table5[9]</td>
            <td>$bomberman_table5[10]</td>
            <td>$bomberman_table5[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table5[12]</td>
            <td>$bomberman_table5[13]</td>
            <td>$bomberman_table5[14]</td>
            <td>$bomberman_table5[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table5[16]</td>
        <td>$bomberman_table5[17]</td>
        <td>$bomberman_table5[18]</td>
        <td>$bomberman_table5[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table5[20]</td>
        <td>$bomberman_table5[21]</td>
        <td>$bomberman_table5[22]</td>
        <td>$bomberman_table5[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table5[24]</td>
        <td>$bomberman_table5[25]</td>
        <td>$bomberman_table5[26]</td>
        <td>$bomberman_table5[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[4]
</div>
</div>
<!-- Ende des Table-Raum1-Bomberman -->
<!-- Start des Table-Raum2-Bomberman -->
<div class='thumbnail $bb_table[5]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 2</th>
            <th>$bomberman_table6[0]</th>
            <th>$bomberman_table6[1]</th>
            <th>$bomberman_table6[2]</th>
            <th>$bomberman_table6[3]</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table6[4]</td>
            <td>$bomberman_table6[5]</td>
            <td>$bomberman_table6[6]</td>
            <td>$bomberman_table6[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table6[8]</td>
            <td>$bomberman_table6[9]</td>
            <td>$bomberman_table6[10]</td>
            <td>$bomberman_table6[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table6[12]</td>
            <td>$bomberman_table6[13]</td>
            <td>$bomberman_table6[14]</td>
            <td>$bomberman_table6[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table6[16]</td>
        <td>$bomberman_table6[17]</td>
        <td>$bomberman_table6[18]</td>
        <td>$bomberman_table6[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table6[20]</td>
        <td>$bomberman_table6[21]</td>
        <td>$bomberman_table6[22]</td>
        <td>$bomberman_table6[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table6[24]</td>
        <td>$bomberman_table6[25]</td>
        <td>$bomberman_table6[26]</td>
        <td>$bomberman_table6[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[5]
</div>
</div>
<!-- Ende des Table-Raum2-Bomberman -->
<!-- Start des Table-Raum3-Bomberman -->
<div class='thumbnail $bb_table[6]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 3</th>
            <th>$bomberman_table7[0]</th>
            <th>$bomberman_table7[1]</th>
            <th>$bomberman_table7[2]</th>
            <th>$bomberman_table7[3]</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table7[4]</td>
            <td>$bomberman_table7[5]</td>
            <td>$bomberman_table7[6]</td>
            <td>$bomberman_table7[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table7[8]</td>
            <td>$bomberman_table7[9]</td>
            <td>$bomberman_table7[10]</td>
            <td>$bomberman_table7[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table7[12]</td>
            <td>$bomberman_table7[13]</td>
            <td>$bomberman_table7[14]</td>
            <td>$bomberman_table7[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table7[16]</td>
        <td>$bomberman_table7[17]</td>
        <td>$bomberman_table7[18]</td>
        <td>$bomberman_table7[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table7[20]</td>
        <td>$bomberman_table7[21]</td>
        <td>$bomberman_table7[22]</td>
        <td>$bomberman_table7[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table7[24]</td>
        <td>$bomberman_table7[25]</td>
        <td>$bomberman_table7[26]</td>
        <td>$bomberman_table7[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[6]
</div>
</div>
<!-- Ende des Table-Raum3-Bomberman -->
<!-- Start des Table-Raum4-Bomberman -->
<div class='thumbnail $bb_table[7]'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 4</th>
            <th>$bomberman_table8[0]</th>
            <th>$bomberman_table8[1]</th>
            <th>$bomberman_table8[2]</th>
            <th>$bomberman_table8[3]</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1. Platz</th>
            <td>$bomberman_table8[4]</td>
            <td>$bomberman_table8[5]</td>
            <td>$bomberman_table8[6]</td>
            <td>$bomberman_table8[7]</td>
        </tr>
        <tr>
            <th>2. Platz</th>
            <td>$bomberman_table8[8]</td>
            <td>$bomberman_table8[9]</td>
            <td>$bomberman_table8[10]</td>
            <td>$bomberman_table8[11]</td>
        </tr>
        <tr>
            <th>3. Platz</th>
            <td>$bomberman_table8[12]</td>
            <td>$bomberman_table8[13]</td>
            <td>$bomberman_table8[14]</td>
            <td>$bomberman_table8[15]</td>
        </tr>
        <thead>
    </tbody>
    <tr>
        <th>4. Platz</th>
        <td>$bomberman_table8[16]</td>
        <td>$bomberman_table8[17]</td>
        <td>$bomberman_table8[18]</td>
        <td>$bomberman_table8[19]</td>
    </tr>
    <tr>
        <th>Punkte</th>
        <td>$bomberman_table8[20]</td>
        <td>$bomberman_table8[21]</td>
        <td>$bomberman_table8[22]</td>
        <td>$bomberman_table8[23]</td>
    </tr>
    <tr>
        <th>Platz</th>
        <td>$bomberman_table8[24]</td>
        <td>$bomberman_table8[25]</td>
        <td>$bomberman_table8[26]</td>
        <td>$bomberman_table8[27]</td>
    </tr>
    </thead>
</table>
<div>
$bb_table_info[7]
</div>
</div>
<!-- Ende des eader-Teeworlds -->
<div class='thumbnail thumbnail-bomberman'>
    <h1 class='text-center' id='header'><strong>Teeworlds</strong></h1>
</div>
<!-- Ende des Header-Teeworlds -->
<!-- Start des Spiel1-Teeworlds -->
<div class='thumbnail'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <div class='icon_und_spielNummer $tw_table[0]'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 1</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3 class=' $tw_table_leftwin[0] '><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3 class=' $tw_table_rightwin[0] '><span>Team 2</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$tw_firstgame[0]</span></h3>
              <h3><span id='punkteRechts'>$tw_firstgame[1]</span></h3>
            </div>
          </div>
          <div class='col-md-9 col-md-offset-1'>
            <div class='start_und_dauer'>
              <h3><span>Start:</span><span id='start_zeit'>13:59</span></h3>
              <br />
              <h3><span id='dauer'>Dauer:</span><span>10 min</span></h3>
            </div>
            </div>
        </div>
    </div>
    <div>
    $tw_table_info[0]
    </div>
</div>
<!-- Ende des Spiel1-Teeworlds -->
<!-- Start des Spiel2-Teeworlds -->
<div class='thumbnail'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <div class='icon_und_spielNummer'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 2</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3 class=' $tw_table_leftwin[1] '>Team 3 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3 class=' $tw_table_rightwin[1] '>Team 4</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$tw_secondgame[0]</span></h3>
              <h3><span id='punkteRechts'>$tw_secondgame[1]</span></h3>
            </div>
          </div>
          <div class='col-md-9 col-md-offset-1'>
            <div class='start_und_dauer'>
              <h3><span>Start:</span><span id='start_zeit'>13:59</span></h3>
              <br />
              <h3><span id='dauer'>Dauer:</span><span>10 min</span></h3>
            </div>
            </div>
        </div>
    </div>
    <div>
    $tw_table_info[1]
    </div>
</div>
<!-- Ende des Spiel2-Teeworlds -->
<!-- Start des Spiel3-Teeworlds -->
<div class='thumbnail'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <div class='icon_und_spielNummer'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 3</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3 class=' $tw_table_leftwin[2] '>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3 class=' $tw_table_rightwin[2] '>Team 3</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$tw_thirdgame[0]</span></h3>
              <h3><span id='punkteRechts'>$tw_thirdgame[1]</span></h3>
            </div>
          </div>
          <div class='col-md-9 col-md-offset-1'>
            <div class='start_und_dauer'>
              <h3><span>Start:</span><span id='start_zeit'>14:11</span></h3>
              <br />
              <h3><span id='dauer'>Dauer:</span><span>10 min</span></h3>
            </div>
            </div>
        </div>
    </div>
    <div>
    $tw_table_info[2]
    </div>
</div>
<!-- Ende des Spiel3-Teeworlds -->
<!-- Start des Spiel4-Teeworlds -->
<div class='thumbnail'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <div class='icon_und_spielNummer'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 4</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3 class=' $tw_table_leftwin[3] '>Team 2 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3 class=' $tw_table_rightwin[3] '>Team 4</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$tw_fourthgame[0]</span></h3>
              <h3><span id='punkteRechts'>$tw_fourthgame[1]</span></h3>
            </div>
          </div>
          <div class='col-md-9 col-md-offset-1'>
            <div class='start_und_dauer'>
              <h3><span>Start:</span><span id='start_zeit'>14:11</span></h3>
              <br />
              <h3><span id='dauer'>Dauer:</span><span>10 min</span></h3>
            </div>
            </div>
        </div>
    </div>
    <div>
    $tw_table_info[3]
    </div>
</div>
<!-- Ende des Spiel4-Teeworlds -->
<!-- Start des Spiel5-Teeworlds -->
<div class='thumbnail'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <div class='icon_und_spielNummer'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 5</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3 class=' $tw_table_leftwin[4] '>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3 class=' $tw_table_rightwin[4] '>Team 4</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$tw_fifthgame[0]</span></h3>
              <h3><span id='punkteRechts'>$tw_fifthgame[1]</span></h3>
            </div>
          </div>
          <div class='col-md-9 col-md-offset-1'>
            <div class='start_und_dauer'>
              <h3><span>Start:</span><span id='start_zeit'>14:23</span></h3>
              <br />
              <h3><span id='dauer'>Dauer:</span><span>10 min</span></h3>
            </div>
            </div>
        </div>
    </div>
    <div>
    $tw_table_info[4]
    </div>
</div>
<!-- Ende des Spiel5-Teeworlds -->
<!-- Start des Spiel6-Teeworlds -->
<div class='thumbnail'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>
                <div class='icon_und_spielNummer'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 6</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3 class=' $tw_table_leftwin[5] '>Team 2 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3 class=' $tw_table_rightwin[5] '>Team 3</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$tw_sixthgame[0]</span></h3>
              <h3><span id='punkteRechts'>$tw_sixthgame[1]</span></h3>
            </div>
          </div>
          <div class='col-md-9 col-md-offset-1'>
            <div class='start_und_dauer'>
              <h3><span>Start:</span><span id='start_zeit'>14:23</span></h3>
              <br />
              <h3><span id='dauer'>Dauer:</span><span>10 min</span></h3>
            </div>
            </div>
        </div>
    </div>
    <div>
    $tw_table_info[5]
    </div>
</div>
<!-- Ende des Spiel6-Teeworlds -->
    ");

?>
