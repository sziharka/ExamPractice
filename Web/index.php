<!DOCTYPE html>
<?php
    include_once 'include/connect.php';
    include_once  'include/eauto_osszesitett.php';
?>
<html lang="hu" xmlns="http://www.w3.org/1999/html">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Gépjárművek szén-dioxid-kibocsátása az EU-ban</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="eauto.css">
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
                <div class="col-md-6 bg-torzs">
                    <h2>Az európai piac toplistája</h2>
                    <p>...A lista első helyét a Renault Zoe vette át. A francia kisautó frissített tartalommal, nagyobb aksival, DC villámtöltéssel és vonzó árral szállt harcba, és kétszer annyi fogyott belőle, mint egy évvel korábban. Ár/hatótáv arányban, itthon is nehéz lett volna jobb vételt ajánlani. A Zoénál jóval drágább, nagyobb és erősebb Tesla Model 3 egy helyet visszaesve a második lett tavaly. A cég első, harmadik és negyedik negyedéves eladásai nagyjából hozták a 2019-es számokat, de a fremonti gyár koronavírus miatti lezárása 40%-os csökkenést eredményezett a második negyedévben..."</p>
                    <p><img src="img/europai-eladasok-tipus.png" alt="" class="img-thumbnail"></p>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Villanyautó eladások európában</h3>
                        <p>
                            <div class="form-group">
                                <?php
                                    $q1 = 'SELECT * FROM eu_world';
                                    $r = mysqli_query($connect, $q1);
                                ?>
                                <h6>A kiválasztott európai adatok jelennek meg.</h6>
                                <label for="regiokod">Válassza ki, melyik év adatait szeretné látni:</label>
                                <form method="get" action="nezet/europa.php">
                                    <select class="form-control" name="ev">
                                        <option value="">Válasszon évet...</option>
                                        <?php foreach($r as $item) { ?>
                                        <option value="<?php echo $item['id'];?>"><?php echo $item['ev'];?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                    <input type="submit" value="Adatok">
                                </form>
                            </div>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h3>Toplista</h3>
                        <div class="form-group">
                            <?php
                                $q1 = 'SELECT * FROM etipusok';
                                $r = mysqli_query($connect, $q1);
                            ?>
                            <label for="regiokod">Válassza ki, melyik jelentős szereplő adatait szeretné látni:</label>
                            <form method="get" action="nezet/europa_top_lista.php">
                                <select class="form-control" name="id">
                                    <option value="">Válasszon e-autó típust...</option>
                                    <?php foreach($r as $item) { ?>
                                    <option value="<?php echo $item['id'];?>"><?php echo $item['nev'];?></option>
                                    <?php } ?>
                                </select><br>
                            <input type="submit" value="Adatok">
                            </form>
                        </div>
                    </div>
                    <div class="container bg-info">
                        <div class="row bg-info">
                            <div class="col-sm-12">
                                <h3 align="center">BEV és PHEV modellek aránya az összes eladott szemékyautóhoz képest<br> Európa - 2014-2020</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="align-items-md-center"><img src="img/eu_world.png" alt="" class="img-thumbnail">
                                </div>
                                </p>
                                <div class="col-sm-5">
                                    <form>
                                        <div class="form-group form-text">
                                            <p>
                                                <ul class="list-group">
                                                    <li class="list-group-item">Európai összesen (E-auto): <?php echo '<h6>'.eu_osszes_eauto().'</h6>';?></li>
                                                    <li class="list-group-item">Világpiac összesen (hagyományos): <?php echo '<h6>'.osszes_auto().'</h6>';?></li>
                                                    <li class="list-group-item">Európai piac aránya: <?php echo '<h6>'.eu_world_arany().'</h6>';?></li>
                                                    <li class="list-group-item active"><a href="nezet/reszletes_adatok.php">Részletes adatok</a></li>
                                                </ul>
                                    </form>
                                            </p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <script src="js/bootstrap.js"></script>
</body>

</html>