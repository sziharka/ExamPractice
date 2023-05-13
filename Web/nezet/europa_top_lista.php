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
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-torzs">
                <h2>Az európai piac toplistája</h2>
                <p>"...A lista első helyét a Renault Zoe vette át. A francia kisautó frissített tartalommal, nagyobb aksival, DC villámtöltéssel és vonzó árral szállt harcba, és kétszer annyi fogyott belőle, mint egy évvel korábban. Ár/hatótáv arányban, itthon is nehéz lett volna jobb vételt ajánlani. A Zoénál jóval drágább, nagyobb és erősebb Tesla Model 3 egy helyet visszaesve a második lett tavaly. A cég első, harmadik és negyedik negyedéves eladásai nagyjából hozták a 2019-es számokat, de a fremonti gyár koronavírus miatti lezárása 40%-os csökkenést eredményezett a második negyedévben..."</p>
                <p><img src="../img/europai-eladasok-tipus.png" class="img-thumbnail" alt="grafikon" title="grafikon"/></p>
            </div>
        <div class="col-sm-6 align-content-center" >
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">E-autók</th>
                    <th scope="col">Dátum</th>
                    <th scope="col">Mennyiség</th>

                </tr>
                </thead>
                <tbody>

                <?php

                $id = $_GET['id'];
                $q = "SELECT
                          eu_eladas_data.mennyiseg,
                          ev.datum,
                          etipusok.nev,
                          etipusok.id
                        FROM eu_eladas_data
                          INNER JOIN etipusok
                            ON eu_eladas_data.etipusID = etipusok.id
                          INNER JOIN ev
                            ON eu_eladas_data.evId = ev.Id
                        WHERE etipusok.id = '$id'";

                $result = mysqli_query($connect, $q);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nev'] . "</td>";
                        echo "<td>" . $row['datum'] . " </td>";
                        echo "<td>" . $row['mennyiseg'] . " db</td>";
                        echo "</tr>";
                    }
                }
                ?>

                </tbody>
            </table>

        </div>
    </div>


</body>
</html>