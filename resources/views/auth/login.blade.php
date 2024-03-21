<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PFE 2021</title>

    
    

    <!-- Bootstrap -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Pe-icon-7-stroke -->
    <link href="{{ asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
    <!-- style css -->
    <link href="{{ asset('assets/dist/css/stylehealth.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>
<body style="background-image: url('{{ asset('assets/background/image.jpg') }}');background-repeat:no-repeat;background-size: 100% 100%;">
    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Content Wrapper -->
    <div class="login-wrapper">
        
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock" ></i>
                        </div>
                        <div class="header-title">
                            <h3>Connexion</h3>
                            <small><strong>entrez vos identifiants pour vous connecter.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="index.html" id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="control-label" for="username">Nom d'utilisateur</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username"  id="email"   name="email"  required class="form-control">
                            <span class="help-block small">Votre nom d'utilisateur unique pour l'application</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Mot de passe</label>
                            <input type="password" title="Please enter your password" placeholder="******"  id="password"  name="password" required class="form-control">
                            <span class="help-block small">Votre mot de passe</span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn btn-primary center">Connexion</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </form>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>


