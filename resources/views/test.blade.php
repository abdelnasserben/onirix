<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Onirix - Découvrez qui vous êtes</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="{{ route('home') }}">Onirix</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('contact') }}">Aide</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="pt-5 mt-5 pb-0"></header>

        <div class="container py-4">
            <div class="card bg-light px-2 pt-5 pb-4">
                <div class="wrapper">
                    <div class="header">
                        <ul class="row">
                            <li class="col active form_1_progessbar">
                                <div>
                                    <p>1</p>
                                </div>
                            </li>
                            <li class="col form_2_progessbar">
                                <div>
                                    <p>2</p>
                                </div>
                            </li>
                            <li class="col form_3_progessbar">
                                <div>
                                    <p>3</p>
                                </div>
                            </li>
                            <li class="col form_4_progessbar">
                                <div>
                                    <p>4</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="container row justify-content-center px-3">
                        <form action="">

                        </form>
                        <div class="form_1 data_info col-lg-6">
                            <h2 class="text-center mb-3">Infos générales</h2>
                            <div class="row g-3 mb-3">
                                <div class="col-12">
                                    <label class="fw-bold mb-2">Quel est votre genre ?</label>
                                    <select class="form-select" aria-label="Default select example" required>
                                        <option selected>Homme</option>
                                        <option value="1">Femme</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Quel est votre âge ?</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" required>
                                </div>
                            </div>
                        </div>
                        <div class="form_2 data_info col-lg-6" style="display: none;">
                            <h2 class="text-center mb-3">Qu'avez-vous vu ?</h2>
                            <div class="row g-3 mb-3">
                                <div class="col-12">
                                    <label class="fw-bold mb-2">Cochez ce qui est vraie</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Je me disputais avec un collègue au boulot
                                        </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        J'étais avec mon amour
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                          J'ai vu un proche tombé malade
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                          J'étais en voyage à l'etranger
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_3 data_info col-lg-6" style="display: none;">
                            <h2 class="text-center mb-3">Qu'est-ce qui s'est passé après ?</h2>
                            <div class="row g-3 mb-3">
                                <div class="col-12">
                                    <label class="fw-bold mb-2">Le sommeil</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          J'ai pu me rendormir
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          J'en ai fais des cauchemars
                                        </label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <label class="fw-bold mb-2">Votre sentiment</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Heureux
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Triste
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_4 data_info col-lg-6" style="display: none;">
                            <h2 class="text-center mb-3">Autres informations</h2>
                            <div class="row g-3 mb-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Décrivez votre rêve si vous avez d'autres choses nécessaire</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btns_wrap">
                        <div class="common_btns form_1_btns">
                            <button type="button" class="btn_next">Suivant <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                        </div>
                        <div class="common_btns form_2_btns" style="display: none;">
                            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Précedent</button>
                            <button type="button" class="btn_next">Suivant <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                        </div>
                        <div class="common_btns form_3_btns" style="display: none;">
                            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Précedent</button>
                            <button type="button" class="btn_next">Suivant <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                        </div>
                        <div class="common_btns form_4_btns" style="display: none;">
                            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Précedent</button>
                            <button type="button" class="btn_done">Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Onirix 2023. All Rights Reserved.</div>
                    <a href="#!">Conditions d'utilisation</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('about') }}">A propos de nous</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('contact') }}">Contact</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('faq') }}">FAQ</a>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>