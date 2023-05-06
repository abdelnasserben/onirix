@extends('layouts.basic')

@section('content')
<header class="pt-5 border-bottom bg-light">
    <div class="container px-5 mt-3 pt-5">
        <div class="d-flex justify-content-between align-items-center flex-wrap my-4">
            <div class="row align-items-center mb-4">
                <div class="col-auto">
                    <img src="http://techydevs.com/demos/themes/html/disilab-demo/disilab/images/img4.jpg" alt="" class="img-profile img-border shadow-own-sm">
                </div>
                <div class="col-auto mx-0 px-0">
                    <h6 class="h6 mb-2 text-uppercase">{{$user->name}}</h6>
                    <p class="small mb-1">Membre depuis le {{date_format($user->created_at, "d/m/Y")}}</p>
                    <span>2344</span>
                </div>
            </div>
            <form method="post" action="{{route('logout')}}">
                @csrf
                <button type="submit" class="btn btn-primary-light mb-4">
                    <i class="bi bi-box-arrow-in-left me-1"></i> Déconnecter
                </button>
            </form>
        </div>
        <nav class="">
            <div class="nav nav-pills" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Profil</button>
                <button class="nav-link" id="nav-feedback-tab" data-bs-toggle="tab" data-bs-target="#nav-feedback" type="button" role="tab" aria-controls="nav-feedback" aria-selected="false">Avis</button>
            </div>
        </nav>
    </div>
</header>
<section class="py-4">
    <div class="container px-5">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <p class="mb-4">I am a programmer. My principal language is C++. I've also done commercial work in Java, C, Perl, Python, Javascript and APL. I've also been known to dabble in lisp, Haskell, assembler (ARM, x86, amd64) and probably a few other languages that haven't left as big a mark.</p>
                
            </div>
        </div>
        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab" tabindex="0">
            <h2 class="h6 bg-gray rounded m-0 mb-4 py-3 px-4">Partagez-nous votre avis</h2>
            <div class="border rounded px-3 py-4 text-center mb-4">
                <div class="d-flex flex-column align-items-center">
                    <p class="text-muted mb-4">Dites-nous ce qui vous plait et ce qu’on pourrait améliorer afin<br>de vous offrir la meilleure expérience possible sur Dabel.</p>
                    <a href="" target="_blank" class="d-block w-50 text-decoration-none rounded border d-flex justify-content-between align-items-end pt-3 px-3 mb-4">
                        <p class="text-muted fw-bold">Donner mon avis <i class="bi bi-box-arrow-up-right ms-1"></i></p>
                        <p><i class="bi bi-chevron-right"></i></p>
                    </a>
                    <div class="alert alert-primary border-0 text-dark mt-4" role="alert">
                        <div class="row align-items-center">
                            <i class="bi bi-info-circle-fill d-block col-auto text-primary ic-md"></i>
                            <div class="col"> 
                                <p class="m-0 text-start">Vous avez une question ou besoin d’un suivi individuel sur un sujet ?<br>Trouvez de nombreuses réponses dans 
                                    le <a class="text-decoration-underline text-dark fw-bold" href="Centre d’aide">centre d'aide</a> ou <a class="text-decoration-underline text-dark fw-bold" href="{{route('contact')}}">contactez-nous</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>  
@endsection