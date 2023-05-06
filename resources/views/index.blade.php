@extends('layouts.basic')

@section('content')
    <!-- Mashead header-->
    <header class="masthead pt-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Showcase your app beautifully.</h1>
                        <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                        <a class="btn btn-danger text-uppercase py-3 px-4 rounded" href="https://startbootstrap.com/theme/new-age" target="_blank">Lancer le test</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <img src="assets/img/hero-img.png" alt="" style="width: 20rem;">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-end">
                <div class="col-md-6 mb-5 mb-lg-0">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="assets/img/man-reading.jpg"  class="img-fluid mb-3" alt="">
                        <h3 class="font-alt mb-4">Découvrez votre personnalité<br>en quelques minutes !</h3>
                        <p class="text-muted mb-0">Il vous fournit des informations détaillées et uniques qui peuvent vous aider à améliorer votre vie personnelle et professionnelle, avec plus de succès.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="assets/img/undraw_projections.svg" style="width: 18rem" class="img-fluid mb-3" alt="">
                        <h3 class="font-alt mb-4">Obtenez des informations<br>précieuses sur votre vie</h3>
                        <p class="text-muted mb-0">90% des utilisateurs considèrent qu'ils ont pu prendre des mesures concrètes pour améliorer des domaines de leur vie personnelle et professionnelle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-success">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"An intuitive solution to a common problem that we all face, wrapped up in a single app!"</div>
                    <a href="#" class="btn btn-warning text-uppercase">Commencer le test</a>
                </div>
            </div>
        </div>
    </aside>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h3 class="text-center mt-0 font-alt">Comment ça fonctionne ?</h3>
            <hr class="divider mb-5" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <!-- Feature item-->
                    <div class="text-center">
                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                        <h3 class="font-alt">Free to Use</h3>
                        <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <!-- Feature item-->
                    <div class="text-center">
                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                        <h3 class="font-alt">Free to Use</h3>
                        <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <!-- Feature item-->
                    <div class="text-center">
                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                        <h3 class="font-alt">Free to Use</h3>
                        <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



