<!DOCTYPE html>
<?php
    include_once '../include/connect.php';
?>
<html lang="hu" xmlns="http://www.w3.org/1999/html">

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Gépjárművek szén-dioxid-kibocsátása az EU-ban</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../eauto.css">
</head>

<body>

    <div class="container">
        <div class="jumbotron text-center bg-fej">
            <h2>Európi Parlamaent</h2>
            <h3>Amit érdemes tudni a gépjárművek szén-dioxid-kibocsátásáról az EU-ban</h3>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2><a href="https://www.europarl.europa.eu/news/hu/headlines/society/20190313STO31218/amit-erdemes-tudni-a-gepjarmuvek-szen-dioxid-kibocsatasarol-az-eu-ban#website-body">Az autók a legfőbb szennyezők.</a></h2>
                A személyszállításból származó szén-dioxid-kibocsátás aránya jelentősen eltér az egyes közlekedési eszközöket tekintetében. A személygépjárművek a leginkább szennyezőek, az európai közúti közlekedésből adódó teljes szén-dioxid-kibocsátás 60,7 százalékáért felelősek. Az sem mindegy azonban, hogy hány utast szállít egy-egy autó: ha többet és nem egyedül utazik a sofőr, akkor a legkevésbé szennyező járművek közé tartozhat. Európában azonban átlagosan csupán <a href="https://core.ac.uk/download/pdf/82726264.pdf" target="_blank">1,7 utast szállít egy autó</a>, így pedig más közlekedési eszközök, mint például a buszok, jelenleg kevésbé káros alternatívát jelentenek. Azt a kérdés viszont, hogy egy autó mennyi szén-dioxidot bocsájt ki, nemcsak használatuk közben kell feltennünk, hanem az előállításuk és szállításuk során is.
        Az elektromos autók előállítása és szállítása kevésbé környezetkímélő, mint a belsőégésű motorral rendelkező autóké, az elektromos gépjárművek szén-dioxid-kibocsátásának mértéke pedig annak megfelelően változik, hogyan állítják elő az elektromosságot.
        Ha azonban azt nézzük, hogy mennyi károsanyagot bocsátanak ki az autók a gyártásuktól a bontásukig, akkor az elektromos autók bizonyítottan környezetkímélőbbek, mint a benzinnel működők.
        Mivel a megújuló energiaforrásokból származó elektromosság használata várhatóan egyre növekszik a jövőben, az elektromos autók egyre kevésbé lesznek károsak a környezetre.
            </div>
            <div class="col-md-4">
                <img src="img/20190507PHT44968_original.jpg" class="img-thumbnail" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 bg-torzs">
                    <h2>Európában 140%-ot nőttek a villanyautó eladások</h2>
                    <p> Alapvetően nem volt rossz az előző évek növekedése, de 2020 mindenképpen kimagaslóan jónak számít. A 142% növekedés azt jelenti, hogy praktikusan két és félszer annyi tölthető autó fogyott mint egy évvel korábban, ami döbbenetesen jó szám. Az eladások bőven átlépték a milliós küszöböt, sőt, az 1,36 millió eladott konnektoros autó közül a 9 legnépszerűbb modell, valamint az összes eladások 54%-a tisztán elektromos volt. <a href="https://villanyautosok.hu/2021/02/04/europaban-140-ot-nottek-a-villanyauto-eladasok-2020-ban/" target="_blank">Eredeti cikk</a>

                        <p><img src="img/europai-eladasok.png" alt="" class="img-thumbnail"></p>
                </div>
        <div class="col-sm-6 align-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Dátum</th>
                        <th scope="col">Elektromos</th>
                        <th scope="col">Hagyományos</th>
                        <th scope="col">Növekedés</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $q = "SELECT
                        eu_world.ev,
                        eu_world.elektromos,
                        eu_world.hagyomanyos,
                        FORMAT((eu_world.elektromos /eu_world.hagyomanyos)*100,2) AS novekedes
                      FROM eu_world
                      WHERE eu_world.id =$_GET[ev]";
  
                  $result = mysqli_query($connect, $q);
                  if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                          echo "<tr>";
                          echo "<td>" . $row['ev'] . "</td>";
                          echo "<td>" . $row['elektromos'] . " db</td>";
                          echo "<td>" . $row['hagyomanyos'] . " db</td>";
                          echo "<td>" . $row['novekedes'] . "%</td>";
                          echo "</tr>";
                      }
                  }
                    ?>
                </tbody>
            </table>
        </div>
    </div>