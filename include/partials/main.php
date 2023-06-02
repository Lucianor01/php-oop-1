<?php

include __DIR__ . '/../database/db.php';

// var_dump($arrayMovies);
$numero_elem_cliccato = 1;

?>

<main>
    <!-- CARD -->
    <div class="container mt-5">
        <div class="row">
            <?php for ($i = 0; $i < count($arrayMovies); $i++) { ?>
                <div class="col-4">
                    <a class="text-decoration-none" href="" onclick="<?php $numero_elem_cliccato = $i ?>" data-bs-toggle="modal" data-bs-target="<?php echo "#movie" . $i ?>" style="display: inline-block;">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="<?php echo $arrayMovies[$i]->poster ?>" class="card-img-top" alt="Poster Film" style="height: 430px;">
                            <div class="card-body">
                                <h5 class="card-title mb-4"><strong><?php echo $arrayMovies[$i]->titolo ?></strong></h5>
                                <div class="d-flex">
                                    <span class="me-1"><strong>Genere:</strong></span>
                                    <?php foreach ($arrayMovies[$i]->genere as $genereFilm) { ?>
                                        <p class="card-text"><?php echo $genereFilm->nome ?></p>
                                    <?php } ?>
                                </div>
                                <!-- STAMPA GENERE FILM -->
                                <p class="card-text"><strong>Regista:</strong> <?php echo $arrayMovies[$i]->regista ?></p>
                                <p class="card-text"><strong>Durata:</strong> <?php echo $arrayMovies[$i]->durata ?></p>
                                <p class="card-text"><?php echo $arrayMovies[$i]->anno ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="<?php echo "movie" . $i ?>" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="display: contents;">
                            <div class="card h-100" style="width: 18rem; margin: auto;">
                                <img src="<?php echo $arrayMovies[$i]->poster ?>" class="card-img-top" alt="Poster Film" style="height: 430px;">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><strong><?php echo $arrayMovies[$i]->titolo ?></strong></h5>
                                    <div class="d-flex">
                                        <span class="me-1"><strong>Genere:</strong></span>
                                        <?php foreach ($arrayMovies[$i]->genere as $genereFilm) { ?>
                                            <p class="card-text"><?php echo $genereFilm->nome ?></p>
                                        <?php } ?>
                                    </div>
                                    <!-- STAMPA GENERE FILM -->
                                    <p class="card-text"><strong>Regista:</strong> <?php echo $arrayMovies[$i]->regista ?></p>
                                    <p class="card-text"><strong>Durata:</strong> <?php echo $arrayMovies[$i]->durata ?></p>
                                    <p class="card-text"><?php echo $arrayMovies[$i]->anno ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


</main>