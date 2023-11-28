<?php

include 'production.php'; 

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
                    <?php foreach($movies as $movie) { ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo $movie->getSrcPoster(); ?>" class="card-img-top" alt="..." style="height: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Lingue: <?php echo $movie->getLanguageAsString(); ?></li>
                                        <li class="list-group-item">Subtitle: <?php echo $movie->hasSubtitle(); ?></li>
                                        <li class="list-group-item">Attori: <?php echo $movie->printActors(); ?></li>
                                        <li class="list-group-item">Vote: <?php echo $movie->printVote() ?></li>
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