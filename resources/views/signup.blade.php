<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Orinix</title>
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
    <body class="vh-100 bg-light">

        <div class="container h-100 px-5">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="card border-0 col-md-9 col-lg-7 shadow p-5">
                    <h2 class="h4 pb-2 border-bottom border-sub mb-3">Inscricption</h2>
                    
                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="e.g. Alex Smith" required autofocus>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('name') as $message)
                                    {{ $message }}<br>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="e.g. alexsmith@gmail.com" required>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('email') as $message)
                                    {{ $message }}<br>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Votre mot de passe" required autocomplete="new-password">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('password') as $message)
                                    {{ $message }}<br>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirmer le mot de passe" required>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('password_confirmation') as $message)
                                    {{ $message }}<br>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary me-3">S'enregistrer</button>
                            <small class="">
                                Déjà un compte ? 
                                <a href="">Connectez-vous</a>
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        

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