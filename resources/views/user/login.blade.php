@extends('../layouts/template_customer')

@section('title')  Connexion    @endsection

@section('css-content')

    <style>
        .login-container{
            padding: 7% 15%;
        }
    </style>
@endsection

@section('content')
    <div class="login-container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Connexion</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-sm-12 text-center">
                        <i class="fa fa-square-plus" style="color: orangered"></i>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form action="{{route('user.login.handle')}}" method="POST">
                            @csrf
                            @method('post')

                            @if(session('error'))
                                <div class="text-white small fst-italic" style="background-color: #ec0808">{{session('error')}}</div>
                            @endif
                            <div>
                                <div>
                                    <label for="">E-mail:</label>
                                    <input type="email" class="form-control" placeholder="e-mail@gmail.com" name="email">
                                    @error('email')
                                        <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="">Nom d'utilisateur:</label>
                                    <input type="text" class="form-control" placeholder="user name" name="user_name">
                                    @error('user_name')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="" class="">Mot de passe:</label>
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-success w-100 fw-bolder">se connecter</button>
                                </div>

                                <div class="text-center pt-3">
                                    &copy; - I-Tech formation login
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center align-items-center">
                        <i class="fa fa-square-plus" style="color: orangered"></i>
                    </div>
                </div>
                @auth 
                    <div class="">
                        <a href="{{route('user.register.view')}}" class="text-info" style="text-decoration: none;">Créer un utilisateur <i class="fa fa-user-alt"></i></a>
                    </div>
                @endauth
            </div>
        </div>
    </div>

@endsection
