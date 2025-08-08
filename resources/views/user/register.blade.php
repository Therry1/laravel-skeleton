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
                        <form action="{{route('user.register.handle')}}" method="post" id="user_register_form">
                            @csrf
                            @method('POST')
                            <div class="row">
                                @if(session('error'))
                                    <div class="text-danger">
                                        {{session('error')}}
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label for="">Nom et prénom:</label>
                                    <input type="text" class="form-control name" name="name"  id="name" placeholder="first and lastname example">
                                    <div class="text-danger small d-none" id="error_name"></div>
                                    @error('name')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">Tel:</label>
                                    <input type="tel" class="form-control tel" name="tel" id="tel" placeholder="699887766">
                                    <div class="text-danger small d-none" id="error_tel"></div>
                                    @error('tel')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">E-mail:</label>
                                    <input type="email" class="form-control email" name="email" id="email" placeholder="e-mail@gmail.com">
                                    <div class="text-danger small d-none" id="error_email"></div>
                                    @error('email')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">Nom d'utilisateur:</label>
                                    <input type="text" class="form-control user_name" name="user_name" id="user_name" placeholder="user name">
                                    <div class="text-danger small d-none" id="error_user_name"></div>
                                    @error('user_name')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="" class="">Mot de passe:</label>
                                    <input type="password" class="form-control password" name="password" id="password">
                                    <div class="text-danger small d-none" id="error_password"></div>
                                    @error('password')
                                    <span class="text-danger font-bold small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <button class="btn btn-success w-100 fw-bolder" id="save_user">Enregistrer</button>
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
                    <a href="{{route('login')}}" class="text-info" style="text-decoration: none;">Se connecter <i class="fa fa-user-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-content')
    <script>
        const special_symbols = ['&','/','\\','é','\"','\`','_','ç','à',')','(','*','$','^','ù',':',';',',','}','@','','|','[',']','{','#','~','°',']','+','-','µ','è','£','%','§','.',' '];
        const capital_letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        const lowercase_letters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

        $(document).ready(function (){

            $('#password').on('input', function (){

                const password_value = $(this).val();
                const error_password = $('#error_password');
                let strength_test    = {level : 0 , special_symbols: false , capital_letters: false , lowercase_letters: false ,};

                console.log('les entrée :', password_value);

                if (strength_test.special_symbols === false){

                    for (let one_letter of password_value){

                        if ($.inArray(one_letter , special_symbols) !== -1){

                            strength_test.special_symbols = true;
                            strength_test.level++;
                            break;
                        }

                    }

                }



                if (strength_test.capital_letters === false )
                    for (let one_letter of password_value){
                        if ($.inArray(one_letter , capital_letters) !== -1){

                            strength_test.capital_letters = true;
                            strength_test.level++;
                            break;
                        }
                    }

                if (strength_test.lowercase_letters === false )
                    for (let one_letter of password_value){
                        if ($.inArray(one_letter , lowercase_letters) !== -1){

                            strength_test.lowercase_letters = true;
                            strength_test.level++;
                            break;
                        }
                    }

                if (strength_test.level === 1){
                    error_password.empty().text('Mot de passe très faible');
                    error_password.addClass('text-danger');
                    error_password.removeClass('text-success');
                    error_password.removeClass('d-none');
                }else if(strength_test.level === 2){
                    error_password.empty().text('Mot de passe faible');
                    error_password.removeClass('d-none');
                    error_password.addClass('text-danger');
                    error_password.removeClass('text-success');
                }else if(strength_test.level >= 3){
                    error_password.empty().text('Mot de passe fort');
                    error_password.removeClass('d-none');
                    error_password.removeClass('text-danger');
                    error_password.addClass('text-success');
                }else if(strength_test.level === 0) {
                    error_password.addClass('text-danger');
                    error_password.removeClass('text-success');
                    error_password.addClass('d-none');
                }

            })

            $('#save_user').on('click',function (e){
                e.preventDefault();

                const form = $('#user_register_form');
                const data_form = form.serializeArray();

                let error_cpt = 0;
                $.each(data_form, function (i,element){

                    if (element.value === ''){

                        const div_error = $('#error_'+element.name);
                        div_error.text('ce champ est réqui');
                        div_error.removeClass('d-none');

                        error_cpt++;

                    }else {
                        const div_error = $('#error_'+element.name);
                        if (div_error){
                            div_error.text('ce champ est réqui');
                            div_error.addClass('d-none');
                        }
                    }
                    console.log('error :',error_cpt);

                });

                if (error_cpt !== 0){
                    console.log('il ya des erreurs');
                    return;
                }

                form.submit();
            })

        })
    </script>
@endsection
