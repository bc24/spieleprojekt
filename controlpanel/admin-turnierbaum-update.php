<?php
session_start();
// $bomberman_table1 =$_POST['bomberman_table1'];
// $bomberman_table2 =$_POST['bomberman_table2'];
// $bomberman_table3 =$_POST['bomberman_table3'];
// $bomberman_table4 =$_POST['bomberman_table4'];
// $bomberman_table5 =$_POST['bomberman_table5'];
// $bomberman_table6 =$_POST['bomberman_table6'];
// $bomberman_table7 =$_POST['bomberman_table7'];
// $bomberman_table8 =$_POST['bomberman_table8'];
$teeworlds_game1_test =$_POST['$teeworlds_game1_test'];
$teeworlds_game2 =$_POST['$teeworlds_game2'];
$teeworlds_game3 =$_POST['$teeworlds_game3'];
$teeworlds_game4 =$_POST['$teeworlds_game4'];
$teeworlds_game5 =$_POST['$teeworlds_game5'];
$teeworlds_game6 =$_POST['$teeworlds_game6'];
file_put_contents('../turnierbaum/turnierbaum-test.html',
"
<!-- Start des Headers -->
<div class='thumbnail'>
    <h1 class='text-center' id='header-top'><strong>Turnierbaum $bomberman_table1[0]</strong></h1>
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
<div class='thumbnail active-game'>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Raum 1</th>
                <th>$teeworlds_game1_test[0]</th>
                <th>$bomberman_table1[1]</th>
                <th>$bomberman_table1[2]</th>
                <th>$bomberman_table1[3]</th>
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
</div>
<!-- Ende des Table-Raum1-Bomberman -->
<!-- Start des Table-Raum2-Bomberman -->
<div class='thumbnail'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
            <th>$bomberman_table2[0]</th>
            <th>$bomberman_table2[1]</th>
            <th>$bomberman_table2[2]</th>
            <th>$bomberman_table2[3]</th>
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
</div>
<!-- Ende des Table-Raum2-Bomberman -->
<!-- Start des Table-Raum3-Bomberman -->
<div class='thumbnail'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
            <th>$bomberman_table3[0]</th>
            <th>$bomberman_table3[1]</th>
            <th>$bomberman_table3[2]</th>
            <th>$bomberman_table3[3]</th>
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
</div>
<!-- Ende des Table-Raum3-Bomberman -->
<!-- Start des Table-Raum4-Bomberman -->
<div class='thumbnail'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
            <th>$bomberman_table4[0]</th>
            <th>$bomberman_table4[1]</th>
            <th>$bomberman_table4[2]</th>
            <th>$bomberman_table4[3]</th>
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
</div>
<!-- Ende des Table-Raum4-Bomberman -->
<!-- Start des Headers-Finalrunde-Bomberman -->
<div class='thumbnail thumbnail-bomberman'>
    <h3 class='text-center' id='header-vorrunde'><strong>Finalrunde</strong></h3>
</div>
<!-- Ende des Headers-Finalrunde-Bomberman -->
<!-- Start des Table-Raum1-Bomberman -->
<div class='thumbnail'>
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
</div>
<!-- Ende des Table-Raum1-Bomberman -->
<!-- Start des Table-Raum2-Bomberman -->
<div class='thumbnail'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
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
</div>
<!-- Ende des Table-Raum2-Bomberman -->
<!-- Start des Table-Raum3-Bomberman -->
<div class='thumbnail'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
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
</div>
<!-- Ende des Table-Raum3-Bomberman -->
<!-- Start des Table-Raum4-Bomberman -->
<div class='thumbnail'>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Raum 1</th>
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
                <div class='icon_und_spielNummer'>
                    <span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span>
                    <h3 id='gameNumber'>Spiel 1</h3>
                </div>
            </div>
            <div class='col-md-9'>
                <div class='teams_und_vs'>
                    <h3><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 2</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$teeworlds_game1_test[0]X</span></h3>
              <h3><span id='punkteRechts'>$teeworlds_game1[1]</span></h3>
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
                    <h3><span>Team 3 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 4</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$teeworlds_game2[0]</span></h3>
              <h3><span id='punkteRechts'>$teeworlds_game2[1]</span></h3>
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
                    <h3><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 3</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$teeworlds_game3[0]</span></h3>
              <h3><span id='punkteRechts'>$teeworlds_game3[1]</span></h3>
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
                    <h3><span>Team 2 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 4</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$teeworlds_game4[0]</span></h3>
              <h3><span id='punkteRechts'>$teeworlds_game4[1]</span></h3>
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
                    <h3><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 4</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$teeworlds_game5[0]</span></h3>
              <h3><span id='punkteRechts'>$teeworlds_game5[1]</span></h3>
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
                    <h3><span>Team 2 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 3</span></h3>
                </div>
            </div>
            <div class='col-md-9 col-md-offset-1'>
            <div class='punkte'>
              <h3><span>Punkte:</span></h3>
              <h3><span id='punkteLinks'>$teeworlds_game6[0]</span></h3>
              <h3><span id='punkteRechts'>$teeworlds_game6[1]</span></h3>
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
</div>
<!-- Ende des Spiel6-Teeworlds -->
    ");

?>
