<!DOCTYPE html>
<?php
include_once ('../include/connect.php');
?>

<html lang="hu">
<head>
    <title>Gépjárművek szén-dioxid-kibocsátása az EU-ban</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../eauto.css">
    <script src="../js/bootstrap.js"></script>
</head>
<body>

<div class="container">
    <div class="jumbotron bg-fej text-center">
        <h2 class="bag">Európi Parlamaent</h2>
        <h3>Amit érdemes tudni a gépjárművek szén-dioxid-kibocsátásáról az EU-ban</h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2><a href="https://www.europarl.europa.eu/news/hu/headlines/society/20190313STO31218/amit-erdemes-tudni-a-gepjarmuvek-szen-dioxid-kibocsatasarol-az-eu-ban#website-body">Az autók a legfőbb szennyezők</a>  </h2>
            A személyszállításból származó szén-dioxid-kibocsátás aránya jelentősen eltér az egyes közlekedési eszközöket tekintetében. A személygépjárművek a leginkább szennyezőek, az európai közúti közlekedésből adódó teljes szén-dioxid-kibocsátás 60,7 százalékáért felelősek. Az sem mindegy azonban, hogy hány utast szállít egy-egy autó: ha többet és nem egyedül utazik a sofőr, akkor a legkevésbé szennyező járművek közé tartozhat. Európában azonban átlagosan csupán <a href="https://core.ac.uk/download/pdf/82726264.pdf" target="_blank">1,7 utast szállít egy autó</a>, így pedig más közlekedési eszközök, mint például a buszok, jelenleg kevésbé káros alternatívát jelentenek. Azt a kérdés viszont, hogy egy autó mennyi szén-dioxidot bocsájt ki, nemcsak használatuk közben kell feltennünk, hanem az előállításuk és szállításuk során is.
            Az elektromos autók előállítása és szállítása kevésbé környezetkímélő, mint a belsőégésű motorral rendelkező autóké, az elektromos gépjárművek szén-dioxid-kibocsátásának mértéke pedig annak megfelelően változik, hogyan állítják elő az elektromosságot.
            Ha azonban azt nézzük, hogy mennyi károsanyagot bocsátanak ki az autók a gyártásuktól a bontásukig, akkor az elektromos autók bizonyítottan környezetkímélőbbek, mint a benzinnel működők.
            Mivel a megújuló energiaforrásokból származó elektromosság használata várhatóan egyre növekszik a jövőben, az elektromos autók egyre kevésbé lesznek károsak a környezetre.
        </div>
        <div class="col-md-4">
            <img src="../img/20190507PHT44968_original.jpg" class="img-thumbnail" alt="Kölekedési formák szerint" title="Kölekedési formák szerint"/>
        </div>
    </div>
    <div class="container bg-info">
        <div class="row bg-info">
            <div class="col-sm-12">
                <h3 align="center">BEV és PHEV modellek aránya az összes eladott személyautóhoz képest<br> Európa - 2014-2020</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="align-items-md-center"><img src="../img/eu_world.png" class="img-thumbnail" alt="grafikon" title="grafikon"/>
                </div>
                    <div class="col-sm-6">

                        <table class="table-striped table">
                            <thead>
                            <tr align="right">
                                <th>Eladás éve</th>
                                <th>Elektromos</th>
                                <th>Hagyományos</th>
                                <th>E-autók aránya</th>
                             </tr>
                            </thead>
                            <tbody>

                            <?php

                            $q = "SELECT
                                      eu_world.ev,
                                     CONCAT(FORMAT(eu_world.elektromos,2), ' db') AS elektromos,
                                     CONCAT(FORMAT(eu_world.hagyomanyos,2), ' db') AS hagyomanyos,
                                     CONCAT(eu_world.elektromos / eu_world.hagyomanyos * 100, '%') AS arany
                                    FROM eu_world";

                            $result = mysqli_query($connect, $q);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td align='center'>" . $row['ev'] . "</td>";
                                    echo "<td align='right'>" . $row['elektromos']. "</td>";
                                    echo "<td align='right'>" . $row['hagyomanyos']."</td>";
                                    echo "<td align='right'>" . $row['arany']."</td>";
                                     echo "</tr>";
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</body>
</html>