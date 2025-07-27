@extends('../layouts/template_customer')

@section('title')  Enregistrement    @endsection

@section('css-content')

    <style>
        .register-container{
            padding: 7% 15%;
        }
    </style>
@endsection

@section('content')
    <div class="register-container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Enregistrer un utilisateur</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-sm-12 text-center">
                        <i class="fa fa-square-plus" style="color: orangered"></i>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="">Nom et prénom:</label>
                                    <input type="text" class="form-control" placeholder="first and lastname example">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">E-mail:</label>
                                    <input type="email" class="form-control" placeholder="e-mail@gmail.com">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">Nom d'utilisateur:</label>
                                    <input type="text" class="form-control" placeholder="user name">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="" class="">Mot de passe:</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="col-12 mt-2">
                                    <button class="btn btn-success w-100 fw-bolder">Enregistrer</button>
                                </div>

                                <div class="text-center pt-3">
                                    &copy; - I-Tech formation registration
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center align-items-center">
                        <i class="fa fa-square-plus" style="color: orangered"></i>
                    </div>
                </div>
                <div class="">
                    <a href="{{route('user.login.view')}}" class="text-info" style="text-decoration: none;">Se connecter <i class="fa fa-user-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
