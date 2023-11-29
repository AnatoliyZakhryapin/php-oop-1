<?php

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/Actors.php';
require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/Serie.php';

// Nuove istanze di classe Actors
$jackie_chan = new Actor('Jackie', 'Chan', '7/04/1954');
$marlon_wayans = new Actor('Marlon', 'Wayans', '23/07/1972');
$shawn_wayans = new Actor('Shawn', 'Wayans', '19/01/1791');
$alan_tam = new Actor('Alan', 'Tam', '23/08/1950');
$jenna_ortega = new Actor('Jenna', 'Ortega', '27/09/2002');
$hunter_doohan = new Actor('Hunter', 'Doohan', '19/01/1994');
$melisa_roxburgh = new Actor('Melisa', 'Roxburgh', '10/12/1992');
$wentworth_miller = new Actor('Wentworth', 'Miller', '02/06/1972');
$dominic_purcell = new Actor('Dominic', 'Purcel', '17/02/1970');
$rowan_atkinson = new Actor ('Rowan', 'Atkinson', '06/01/1955');
$jeremy_brett = new Actor ('Jeremy', 'Brett', '03/11/1933');

// Nuove istanze di classe Movie
$scary_movie_1 = new Movie('Scary movie 1', ['italiano', 'inglese'], true, [$marlon_wayans, $shawn_wayans], 6, './img/img1.jpg', '1000', '2 ore');
$scary_movie_2 = new Movie('Scary movie 2', ['italiano', 'inglese'], true, [$marlon_wayans, $shawn_wayans], 7, './img/img2.jpg', '1000', '2 ore');
$armor_of_god_1 = new Movie('Armor of God 1', ['inglese'], false, [$jackie_chan, $alan_tam], 10, './img/img3.jpg', '1000', '2 ore');
$armor_of_god_2 = new Movie('Armor of God 2', ['inglese'], false, [$jackie_chan, $alan_tam], 10, './img/img4.jpg', '1000', '2 ore');
$who_am_i = new Movie('Who i am ?', ['cinese'], true, [$jackie_chan, new Actor('Mirai', 'Yamamoto', '11/04/1974')], 10, './img/img6.jpg', '1000', '2 ore');

// Nuove istanze di classe Serie
$wednesday = new Serie('Wednesday', ['inglese'], true, [$jenna_ortega, $hunter_doohan], 8, './img/img7.jpg', 3);
$manifest = new Serie('Manifest', ['inglese'], true, [$melisa_roxburgh], 8, './img/img8.jpg', 3);
$prison_break = new Serie('Prison Break', ['inglese'], true, [$wentworth_miller, $dominic_purcell], 9, './img/img9.jpg', 3);
$mr_bean = new Serie ('Mr.Bean', ['italiano', 'inglese'], true, [$rowan_atkinson], 10, './img/img10.jpg', 10);
$sherlock_holmes = new Serie ('Sherlock Holmes', ['italiano', 'inglese'], true, [$rowan_atkinson], 10, './img/img11.jpg', 4);

// Array con tutti istanze di classe Production
$production_instances = [
    $scary_movie_1,
    $scary_movie_2,
    new Movie('Scray movie 3', ['italiano'], false, [$marlon_wayans, $shawn_wayans, new Actor('Anna', 'Faris', '29/11/1976')], 0, './img/img5.jpg', '1000', '2 ore'),
    $armor_of_god_1,
    $armor_of_god_2,
    $who_am_i,
    $wednesday,
    $manifest,
    $prison_break,
    $mr_bean,
    $sherlock_holmes
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/08d5002177.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <title>Document</title>
</head>

<body>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row row-gap-5">
                    <?php foreach ($production_instances as $product) { ?>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $product->getSrcPoster(); ?>" class="card-img-top" alt="..." style="height: 400px">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $product->title; ?></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <?php foreach ($product->getAdditionalInfos() as $key => $value) { ?>
                                        <li class="list-group-item"><?php echo $key; ?>: <?php echo $value; ?></li>
                                    <?php } ?>
                                    <li class="list-group-item">Lingue: <?php echo $product->getLanguageAsString(); ?></li>
                                    <li class="list-group-item">Subtitle: <?php echo $product->hasSubtitle(); ?></li>
                                    <li class="list-group-item">Attori: <?php echo $product->printActors(); ?></li>
                                    <li class="list-group-item">Vote: 
                                        <?php foreach ($product->printVote() as $star) {?>
                                            <i class="<?php echo $star?> fa-star" style="color: #fedd06; width: 12px;"></i>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>