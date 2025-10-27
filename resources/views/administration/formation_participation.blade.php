@extends('../layouts/template_admin')


@section('title')
   Participer à une formation
@endsection
@section('other-css')
    <style>
        .content-body {
            background: linear-gradient(135deg, #6f42c1, #d63384);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 7%;

        }
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            width: 100%;
        }
        .form-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #6f42c1;
        }
        .btn-custom {
            background-color: #6f42c1;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #5a359e;
        }
        #btn-formationInscription:hover {
            font-weight: bolder;
            color: black;
        }
    </style>
@endsection
@section('content')

    <div class="row">
        <div>
            <h5 class="content-title" id="modalFullTitle">INSCRIPTION A UN COURS</h5>
        </div>
        <div class="content-body">
            <div class="form-container">
                <h3 class="form-title">Formulaire d'inscription</h3>
                <form action="" method="POST" id="formation_inscription_form">
                    @csrf
                    @method('post')

                    <div class="row g-3 formationInscription-1">

                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Matricule: <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="text" class="form-control" placeholder="MAT24F001I-TECH" id="identifier" name="identifier">
                            <div class="text-danger small d-none" id="identifier_error">Ce champ est requis</div>
                            @error('identifier')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> email <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="email" class="form-control" placeholder="i-techformation@gmail.com" id="email" name="email" data-state="0">
                            <div class="text-danger small d-none" id="email_error">Ce champ est requis</div>
                            @error('email')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Mode passe: <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="password" class="form-control" id="password" name="password" data-state="0">
                            <div class="text-danger small d-none" id="password_error">Ce champ est requis</div>
                            @error('password')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 d-none" id="formationInscription-2" data-state="0">
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label class="form-label"> Mode de formation :<span class="text-danger fw-bolder">*</span>:</label>
                            <select name="formation_mode" id="formation_mode" class="form-control select2-for-template">
                                <option value="">Choisissez votre mode de formation</option>
                            </select>
                            <div class="text-danger small d-none" id="formation_mode_error">Ce champ est requis</div>
                            @error('formation_mode')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label class="form-label"> Ville de formation <span class="text-danger fw-bolder">*</span>:</label>
                            <select name="formation_city" id="formation_city" class="form-control select2-for-template">
                                <option value="">Choisissez votre ville de formation</option>
                            </select>
                            <div class="text-danger small d-none" id="formation_city_error">Ce champ est requis</div>
                            @error('formation_city')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> option choisie <span class="text-danger fw-bolder">*</span>:</label>
                            <select name="formation_option" id="formation_option" class="form-control select2-for-template">
                                <option value="" selected>Choisir l'option</option>
                            </select>
                            <div class="text-danger small d-none" id="formation_option_error">Ce champ est requis</div>
                            @error('formation_option')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Niveau de formation choisi <span class="text-danger fw-bolder">*</span>:</label>
                            <select name="formation_level" id="formation_level" class="form-control select2-for-template">
                                <option value="" selected>Niveau de formation</option>
                            </select>
                            <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>
                            @error('formation_level')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Round de formation <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="text" class="form-control" id="round_input" name="round_input" readonly>
                            <div class="text-danger small d-none" id="round_input_error">Ce champ est requis</div>
                            @error('round_input')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Moyen de paiement <span class="text-danger fw-bolder">*</span>:</label>
                            <select name="payment_mode" id="payment_mode" class="form-control select2-for-template">

                            </select>
                            <div class="text-danger small d-none" id="payment_mode_error">Ce champ est requis</div>
                            @error('payment_mode')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Numéro de paiement <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="number" class="form-control" id="output_account" name="output_account" placeholder="entrez le compte débiteur" value="{{old('output_account')}}">
                            <div class="text-danger small d-none" id="output_account_error">Ce champ est requis</div>
                            @error('output_account')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <label class="form-label"> Montant versé <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="number" class="form-control" id="amount_paid" name="amount_paid" placeholder="entrez le montant versé" value="{{old('amount_paid')}}">
                            <div class="text-danger small d-none" id="amount_paid_error">Ce champ est requis</div>
                            @error('amount_paid')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-custom px-5" id="btn-formationInscription">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
@section('other-js')
    <script>
        $(document).ready(function(){

            $('.select2-for-template').select2({
                width : '100%',
                allowClear: true
            });


            // fonction permettant à un étudiant de participer à une formation
            $('#btn-formationInscription').on('click', function (e){
                e.preventDefault();

                const formation_inscription = $('#formationInscription-2');

                if ( parseInt(formation_inscription.attr('data-state')) === 0){

                    const identifier = $('#identifier');
                    const password = $('#password');
                    const email = $('#email');

                    let cpt_error = 0;

                    if (identifier.val().toString() === ""){
                        cpt_error++;
                        $('#identifier_error').removeClass('d-none');
                    }else{
                        $('#identifier_error').addClass('d-none');
                    }

                    // if (password.val().toString() === ""){
                    //     cpt_error++;
                    //     $('#password_error').removeClass('d-none');
                    // }else{
                    //     $('#password_error').addClass('d-none');
                    // }
                    //
                    // if (email.val().toString() === ""){
                    //     cpt_error++;
                    //     $('#email_error').removeClass('d-none');
                    // }else{
                    //     $('#email_error').addClass('d-none');
                    // }

                    if (cpt_error !== 0){
                        console.log('nombre d erreur',cpt_error);
                        return;
                    }

                    $.ajax({
                        url : '{{route('system.admin.student.inscription.check.exist')}}',
                        type : 'POST',
                        headers: {
                            'X-CSRF-TOKEN': `{{csrf_token()}}`,
                            'Content-Type': 'application/json'
                        },
                        data: JSON.stringify({
                            'identifier' : identifier.val(),
                            // 'email'      : email.val(),
                            // 'password'   : password.val()
                        }),
                        success: function (response){
                            if (response.status_code === 200){

                                formation_inscription.removeClass('d-none');
                                formation_inscription.attr('data-state', '1');

                                email.empty().val(response.student.email ?? 'N/A');
                                password.empty().val(response.student.password ?? 'N/A');

                                email.attr('readonly',true);
                                password.attr('readonly',true);

                                email.attr('data-state',1);
                                password.attr('data-state',1);

                                Swal.fire({
                                    text: response.message,
                                    icon: 'success'
                                });

                                const payment_mode_select      =  $('#payment_mode');
                                const formation_level_select   =  $('#formation_level');
                                const formation_option_select  =  $('#formation_option');
                                const formation_city_select    =  $('#formation_city');
                                const formation_mode_select    =  $('#formation_mode');

                                payment_mode_select.empty().append('<option value="" selected>Selectionner le moyen de paiement</option>');
                                formation_level_select.empty().append('<option value="" selected>Niveau de formation choisit</option>');
                                formation_option_select.empty().append('<option value="" selected>Option choisit</option>');
                                formation_city_select.empty().append('<option value="" selected>ville de formation choisit</option>');
                                formation_mode_select.empty().append('<option value="" selected>Mode de formation désiré</option>');

                                $.each(response.payment_modes , function (key , element){

                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.mean_payment_name + '(' + element.code + ')'
                                    });

                                    payment_mode_select.append(nouvelleOption);
                                });
                                $.each(response.formation_levels , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.level_label
                                    });

                                    formation_level_select.append(nouvelleOption);
                                });
                                $.each(response.formation_options , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.option_label
                                    });

                                    formation_option_select.append(nouvelleOption);
                                });
                                $.each(response.formation_cities , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.city_name
                                    });

                                    formation_city_select.append(nouvelleOption);
                                });
                                $.each(response.formation_modes , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.mode_name
                                    });

                                    formation_mode_select.append(nouvelleOption);
                                });
                            }else{

                                console.log('je suis la');
                                formation_inscription.addClass('d-none');
                                formation_inscription.attr('data-state', '0');

                                Swal.fire({
                                    text: response.message,
                                    icon: 'success'
                                });

                            }
                        },
                        error: function (response){
                            Swal.fire({
                                text: 'etudiant non existant. Veillez vous pré-inscrire ou contacter un administrateur',
                                icon: 'error'
                            });
                        }
                    })
                }else{

                    const subscription_form = $('#formation_inscription_form');
                    const form_data = subscription_form.serializeArray();

                    let cpt_error = 0;

                    $.each(form_data, function(key , element) {

                        console.log('la clé :', key , ' la valeur :', element);

                        if (element.value.toString() === ""){
                            cpt_error++;
                            $('#'+element.name+'_error').text('ce champ est requis');
                            $('#'+element.name+'_error').removeClass('d-none');
                        }else {
                            $('#'+element.name+'_error').addClass('d-none');
                        }

                    });

                    if(cpt_error !== 0)
                        return;

                    const amount_table = @json(config('constants.amount'));
                    const amount_paid_error = $('#amount_paid_error');
                    const formation_level = $('#formation_level').val();
                    const required_amount = amount_table['inscription_level-' + formation_level];
                    const paid_amount = $('#amount_paid').val();

                    if (parseInt(paid_amount) !== parseInt(required_amount)) {
                        amount_paid_error.text('La somme requise est de ' + required_amount + ' FCFA');
                        amount_paid_error.removeClass('d-none');
                        return;
                    }

                    amount_paid_error.addClass('d-none');

                    const form_data_request = {};

                    $.each(form_data, function(key , element) {

                        form_data_request[element.name] = element.value;

                    });

                    console.log(form_data_request);

                    $.ajax({
                        url : '{{route('system.admin.student.formation.student.registration')}}',
                        type : 'POST',
                        headers: {
                            'X-CSRF-TOKEN' : `{{csrf_token()}}`,
                            'Content-Type' : 'application/json'
                        },
                        data: JSON.stringify(form_data_request),
                        success: function (response){

                            if (response.status_code === 200){

                                window.location.replace(`/student/set-badge/${response.data.student.id}/${response.data.round.id}/${response.data.participation.id}`);
                            }
                        },
                        error: function(response){
                            console.log(response);
                            Swal.fire({
                                text : 'le service souhaité est indisponible',
                                icon : 'error'
                            });
                        }
                    })

                    //subscription_form.submit();
                }
            })

            // fonction permettant des controlles lorsque sur le formulaire d inscription à un cours l on decide de modifier le atricule
            $('#identifier').on('input' , function (){

                const formation_inscription = $('#formationInscription-2');
                const password = $('#password');
                const email = $('#email');

                console.log($(this).val().length);

                if ($(this).val().length !== 15){
                    const payment_mode_select      =  $('#payment_mode');
                    const formation_level_select   =  $('#formation_level');
                    const formation_option_select  =  $('#formation_option');
                    const formation_city_select    =  $('#formation_city');
                    const formation_mode_select    =  $('#formation_mode');

                    payment_mode_select.empty().append('<option value="" selected>Selectionner le moyen de paiement</option>');
                    formation_level_select.empty().append('<option value="" selected>Niveau de formation choisit</option>');
                    formation_option_select.empty().append('<option value="" selected>Option choisit</option>');
                    formation_city_select.empty().append('<option value="" selected>ville de formation choisit</option>');
                    formation_mode_select.empty().append('<option value="" selected>Mode de formation désiré</option>');
                }

                if ($(this).val().length !== 15 && parseInt(email.attr('data-state')) === 1){

                    console.log(' lorsque c est pas 15',email.attr('data-state') ,password.attr('data-state'))

                    email.attr('readonly',false);
                    password.attr('readonly',false);
                    formation_inscription.addClass('d-none');
                    formation_inscription.attr('data-state', '0');

                    email.attr('data-state','0');
                    password.attr('data-state','0');

                }else if ($(this).val().length !== 15 && parseInt(email.attr('data-state')) === 0){

                    console.log(' lorsque c est 15',email.attr('data-state') ,password.attr('data-state'));

                    email.attr('readonly',false);
                    password.attr('readonly',false);

                }else if ($(this).val().length === 15 && parseInt(email.attr('data-state')) === 0){

                    console.log(' lorsque c est 15',email.attr('data-state') ,password.attr('data-state'));

                    email.attr('readonly',false);
                    password.attr('readonly',false);

                }else{
                    console.log(' lorsque c est 15',email.attr('data-state') ,password.attr('data-state'));

                    email.attr('readonly',true);
                    password.attr('readonly',true);
                }
            })

            // fonction permettant de verifier si un round de formation est en cours pour le niveau de formation choisis par l etudiant à l inscription au cours
            $('#formation_level').on('change', function (){

                const level_formation_id = $(this).val();
                const empty_level = $('#formation_level_error');
                const round_input = $('#round_input');
                const subscription_btn_container = $('#subscription_btn_container');

                if (level_formation_id.toString() === ""){
                    round_input.val('');
                    subscription_btn_container.addClass('d-none');
                    empty_level.text('Choisisez un niveau de formation');
                    empty_level.removeClass('d-none');
                    return;
                }
                empty_level.addClass('d-none');

                $.ajax({
                    url: '{{route('system.admin.student.inscription.check.round',':level_id')}}'.replace(':level_id',level_formation_id),
                    type : 'GET',
                    success: function (response){
                        if (response.status_code === 200){
                            Swal.fire({
                                text: response.message,
                                icon: 'success'
                            });

                            round_input.val(response.data.round_code);
                            subscription_btn_container.removeClass('d-none');

                        }else{
                            Swal.fire({
                                text: response.message,
                                icon: 'error'
                            });

                            round_input.val('');
                            subscription_btn_container.addClass('d-none');
                        }
                    },
                    error: function (response){
                        Swal.fire({
                            text: 'Service indisponible. veillez consulter les logs',
                            icon: 'error'
                        });
                        round_input.val('');
                        subscription_btn_container.addClass('d-none');
                        console.log('data_error :', response.json());
                    }
                })
            });

        })
    </script>
@endsection

