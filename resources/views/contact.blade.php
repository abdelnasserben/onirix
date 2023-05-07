@extends('layouts.basic')

@section('content')
<header class="pt-5 shadow-sm pb-0">
    <div class="container-fluid position-relative mt-3 py-4">

        <i class="shape shape-1 bi bi-circle-fill"></i>
        <i class="shape shape-2 bi bi-star-fill"></i>
        <i class="shape shape-3 bi bi-asterisk"></i>
        <i class="shape shape-4 bi bi-square-fill"></i>
        <i class="shape shape-5 bi bi-pentagon-fill"></i>
        <i class="shape shape-6 bi bi-square-fill"></i>
        <i class="shape shape-7 bi bi-award"></i>

        <div class="container text-center py-5">
            <h1 class="display-5">Nous contacter</h1>
            <p class="lh-lg">Vos suggestions réfléchies et vos commentaires sincères sont importants pour nous.<br>N'hésitez pas à nous faire part de tout ce qui vous préoccupe.</p>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container m-auto">
        <div class="card border-0 m-lg-4 p-5 shadow-own-sm rounded">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-2">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom et prénom</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="e.g. Alex Smith">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label mb-3">Adresse email</label>
                            <input type="email" class="form-control py-input" id="exampleFormControlInput2" placeholder="e.g. alexsmith@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Sujet</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="e.g. Partenariat">
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Votre message ici"></textarea>
                        </div>

                        <button class="btn btn-primary">Envoyer le message</button>
                    </form>
                </div>
                <div class="col-lg-auto border-end"></div>
                <div class="col-lg-4 mb-2">
                    <h2 class="h4 pb-2 border-bottom border-sub mb-3">Contact information</h2>
                    <p class="mb-5">Vous pouvez également nous réjoindre à travers les autres moyens ci-dessous.</p>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-telephone text-info me-3"></i>
                        <span>+522 672-452-1120</span>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-envelope ic-basic text-info me-3"></i>
                        <span>contact@onirix.com</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-geo-alt ic-basic text-info me-3"></i>
                        <span>Moroni, Mangani BP 2345. Comores</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection