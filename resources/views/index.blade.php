@extends('layouts.basic')

@section('content')
    <!-- Mashead header-->
    <header class="masthead pt-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Vos rêves en disent plus.</h1>
                        <p class="lead fw-normal text-muted mb-5">Avec ce test de personnalité, vous découvrirez ce que votre esprit essaie de te communiquer à travers vos rêves.</p>
                        <a class="btn btn-danger text-uppercase py-3 px-4 rounded" href="{{route('interview')}}">Lancer le test</a>
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
                        <h3 class="font-alt mb-4">Obtenez des informations<br>précieuses sur votre avenir</h3>
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
                    <div class="h2 fs-1 text-white mb-4">"Les gens adorent passer ce test. Ayez une idée de votre avenir à travers vos aspirations"</div>
                    <a href="{{route('interview')}}" class="btn btn-light text-uppercase">Commencer le test</a>
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
                        <i class="bi bi-back icon-feature text-gradient d-block mb-3"></i>
                        <h3 class="font-alt">Soyez prêt</h3>
                        <p class="text-muted mb-0">Assurez-vous d'être dans un environnement confortable où vous pourrez vous concentrer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <!-- Feature item-->
                    <div class="text-center">
                        <i class="bi bi-play-circle icon-feature text-gradient d-block mb-3"></i>
                        <h3 class="font-alt">Faites le test</h3>
                        <p class="text-muted mb-0">Répondez aux multiples questions sur vous-même en étant le plus expilicite et plus honnête possible</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <!-- Feature item-->
                    <div class="text-center">
                        <i class="bi bi-check-circle icon-feature text-gradient d-block mb-3"></i>
                        <h3 class="font-alt">Vos résultats</h3>
                        <p class="text-muted mb-0">Obtenez ce rapport si vous souhaitez jeter un coup d'œil pour découvrir où vous vous situez !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



