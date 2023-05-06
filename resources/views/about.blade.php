@extends('layouts.basic')

@section('content')

<header class="bg-light pt-5">
    <div class="container-fluid position-relative">

        <i class="shape shape-1 bi bi-circle-fill"></i>
        <i class="shape shape-2 bi bi-star-fill"></i>
        <i class="shape shape-3 bi bi-asterisk"></i>
        <i class="shape shape-4 bi bi-square-fill"></i>
        <i class="shape shape-5 bi bi-pentagon-fill"></i>
        <i class="shape shape-6 bi bi-square-fill"></i>
        <i class="shape shape-7 bi bi-award"></i>

        <div class="container py-5">
            <div class="row align-items-end justify-content-between mt-5 mb-lg-5">
                <div class="col-lg-6 col-xl-6">
                    <p class="text-dark fw-bold">Qui sommes-nous ?</p>
                    <div class="mb-5 mb-lg-0">
                        <h1 class="display-5 mb-3">Ecrire le scénario de l'avenir par l'éducation</h1>
                        <p class="">Nous préconisons de rendre l'éducation accessible partout et par tous.</p>
                        <p class="mb-5">Notre plateforme publie régulièrement de nouveaux cours dans lesquels 80% du contenu est gratuitement accessible afin de ne laisser personne de côté.</p>
                        
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 position-relative d-none d-lg-block">
                    <img class="rounded-circle img-border img-pos-1" src="http://techydevs.com/demos/themes/html/disilab-demo/disilab/images/img2.jpg" alt="">
                    <img class="rounded-circle img-border img-pos-2" src="http://techydevs.com/demos/themes/html/disilab-demo/disilab/images/img1.jpg" alt="">
                    <img class="rounded-circle img-border img-pos-3" src="http://techydevs.com/demos/themes/html/disilab-demo/disilab/images/img4.jpg" alt="">
                    <img class="rounded-circle img-border img-pos-4" src="http://techydevs.com/demos/themes/html/disilab-demo/disilab/images/img3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</header>

<section class="border-bottom py-5">
    <div class="container my-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-xl-5 position-relative d-none d-lg-block">
                <img src="assets/img/online_collaboration.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-xl-6 text-center text-lg-start">
                <h2 class="display-7 mb-3">Partager et développer les connaissances</h2>
                <p class="lh-lg">La mission de Dabel est de partager et d'enrichir les connaissances du monde. Une grande partie des connaissances qui seraient précieuses pour de nombreuses personnes n'est actuellement accessible qu'à quelques-uns, soit enfermée dans la tête des gens, soit accessible uniquement à des groupes sélectionnés.</p>
                <p class="lh-lg">Nous voulons mettre en relation les personnes qui possèdent des connaissances avec celles qui en ont besoin, réunir des personnes ayant des points de vue différents afin qu'elles puissent mieux se comprendre, et donner à chacun la possibilité de partager ses connaissances au profit du reste du monde.</p>
            </div>
        </div>
        
    </div>
</section>

<section class="py-5">
    <div class="container text-center my-5">
        <h2 class="display-7 mb-3">Nos valeurs fondamentales</h2>
        <p class="mb-5">Avoir une idée de ce dont nous nous soucions le plus.</p>
        <div class="row pt-4">
            <div class="col-lg-4">
                <img src="assets/img/chart.png" alt="" class="mb-4">
                <h3 class="h5 mb-3">Apprendre, se développer</h3>
                <p>Notre engagement, ce n’est pas seulement de vous offrir des cours de qualité mais aussi nous rassurer que vous évoluez à travers des quiz et exercices.</p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img/clock.png" alt="" class="mb-2">
                <h3 class="h5 mb-3">Votre avenir, notre priorité</h3>
                <p>Notre objectif est de vous permettre de réaliser vos ambitions : nous étudions les metiers prommeteurs et développons nos cours à partir de ces compétences.</p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img/connectivity.png" alt="" class="mb-4">
                <h3 class="h5 mb-3">Une communauté unie</h3>
                <p>L'entraide sur Dabel est l'un des points phares. Notre forum permet à nos membres d'echanger, partager leurs idées et poser leurs questions sur des sujets divers</p>
            </div>
        </div>
    </div>
</section>
    
@endsection