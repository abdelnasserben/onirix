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
                        <h1 class="display-5 mb-3">Déviner le scénario de l'avenir par Orinix</h1>
                        <p class="">Nous sommes une équipe de personnes passionnées par l'interprétation des rêves.</p>
                        <p class="mb-5">Nous avons créé un test pour vous aider à comprendre vos rêves, afin d'avoir une idée claire du message que votre esprit essaie de vous faire passer.</p>
                        
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
                <h2 class="display-7 mb-3">Nous étudions avec dévouement le cerveau et ses comportements</h2>
                <p class="lh-lg">Nous étudions comment les traits de personnalité influencent nos comportements.</p>
                <p class="lh-lg">Nous aidons les gens à améliorer leur bien-être personnel et professionnel en leur permettant de mieux connaître leur personnalité. Nous privilégions la qualité à la quantité, l'objectif est de fournir des informations utiles pour votre avenir.</p>
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
                <p>Notre engagement, ce n’est pas seulement de vous offrir des tests de qualité mais aussi nous rassurer que vous évoluez à travers nos interprétations.</p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img/clock.png" alt="" class="mb-2">
                <h3 class="h5 mb-3">Votre avenir, notre priorité</h3>
                <p>Notre objectif est de vous permettre de réaliser vos ambitions : nous étudions en profondeur vos réponses et développons nos analyses à partir de ces interprétations.</p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img/connectivity.png" alt="" class="mb-4">
                <h3 class="h5 mb-3">Une communauté unie</h3>
                <p>L'entraide sur Orinix est l'un des points phares. Notre formulaire de contact permet à nos membres de nous parler d'eux, partager leurs idées et poser leurs questions sur leurs rêves</p>
            </div>
        </div>
    </div>
</section>
    
@endsection