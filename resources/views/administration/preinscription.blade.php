@extends('../layouts/template_admin')

@section('title')  Enregistrement    @endsection

@section('other-css')

    <style>
        .inscription-container{
            padding: 7% 4%;
            background-color: #6479a9;
        }
    </style>
@endsection

@section('content')
    <div class="inscription-container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Formulaire de pré-inscription <i class="fa fa-square-plus" style="color: orangered"></i></h3>
            </div>
            <div class="text-danger text-center mt-3" style="font-size: 13px; font-style: italic; ">Apres le choix du niveau de formation vous pourez soumettre votre formulaire</div>
            <div class="card-body">
                <div class="row">

                    <div class="row">
                        <form action="{{route('system.admin.student.pre_inscription.store')}}" id="subscription_form" method="POST">
                            @csrf
                            @method('post')

                            @if (session('success'))
                                <div class="alert alert-success text-center">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger text-center">
                                    {{session('error')}}
                                </div>
                            @endif

                            <div class="row">
                                <div>
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder">Informations personnelles</h3>
                                        <i class="fa fa-user fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> Ville de résidence <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="city_residence" id="city_residence" class="form-control select2">
                                                <option value="">Selectionnez votre ville de résidence</option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="city_residence_error">Ce champ est requis</div>
                                            @error('city_residence')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> Nom et prenom <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="entrez le nom de l etudiant" value="{{old('name')}}">
                                            <div class="text-danger small d-none" id="name_error">Ce champ est requis</div>
                                            @error('name')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> Mode passe: <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                            <div class="text-danger small d-none" id="password_error">Ce champ est requis</div>
                                            @error('password')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> email <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="email" class="form-control" placeholder="i-techformation@gmail.com" id="email" name="email" value="{{old('email')}}">
                                            <div class="text-danger small d-none" id="email_error">Ce champ est requis</div>
                                            @error('email')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Fillière d'école <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" id="school_sector" name="school_sector" placeholder="entrez la fillière de l etudiant" value="{{old('school_sector')}}">
                                            <div class="text-danger small d-none" id="school_sector_error">Ce champ est requis</div>
                                            @error('school_sector')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Faculté <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="school_faculty" id="school_faculty" class="form-control select2">
                                                <option value="" selected>Selectionnez l ecole</option>
                                                @foreach($school_faculties as $faculty)
                                                    <option value="{{$faculty['id']}}">{{$faculty['faculty_name'].' ('.$faculty['code'].')'}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="school_faculty_error">Ce champ est requis</div>
                                            @error('school_faculty')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Niveau scolaire <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="school_level" id="school_level" class="form-control select2">
                                                <option value="" selected>Selectionner le niveau</option>
                                                @foreach($school_levels as $level)
                                                    <option value="{{$level->id}}">{{$level->level_number.' ('.$level->level_label.')'}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="school_level_error">Ce champ est requis</div>
                                            @error('school_level')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder">Contacts</h3>
                                        <i class="fa fa-mobile-android fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de téléphone whatsapp <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="whatsapp_number" name="whatsapp_number" placeholder="entrez le numero whatsapp" value="{{old('whatsapp_number')}}">
                                            <div class="text-danger small d-none" id="whatsapp_number_error">Ce champ est requis</div>
                                            @error('whatsapp_number')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de téléphone d'appelle <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number"  name="phone_number" placeholder="entrez le numero de téléphone" value="{{old('phone_number')}}">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                                            @error('phone_number')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de téléphone d'un proche <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="relative_number" name="relative_number" placeholder="entrez le numero d'un proche" value="{{old('relative_number')}}">
                                            <div class="text-danger small d-none" id="relative_number_error">Ce champ est requis</div>
                                            @error('relative_number')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12 mt-3">
                                            <label class="form-label"> Parainné par <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="guid_parent_id" id="guid_parent_id" class="form-select select2">
                                                <option value="" selected>Sélectionner un parain</option>
                                                @foreach($students as $student)
                                                    <option value="{{$student->id}}">{{$student->name ?? 'N/A'}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder border-bottom">Information de Paiement</h3>
                                        <i class="fa fa-money-check-dollar fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Moyen de paiement <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="payment_mode" id="payment_mode" class="form-control select2">
                                                @foreach($payment_modes as $mode)
                                                    <option value="{{$mode->id}}" data-code="{{$mode->code}}">{{$mode->mean_payment_name.' ('.$mode->code.')'}}</option>
                                                @endforeach
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
                                </div>
                                <div class="pt-2" id="subscription_btn_container">
                                    <button class="btn btn-primary fw-bolder w-100" id="subscription_btn">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('other-js')
    <script>
        $(document).ready(function (){
            $('.select2').select2({
                width: "100%",
                allowClear: true
            })

            $('#city_residence').select2({
                width: "100%",
                allowClear: true
            });

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
                    url: "{{route('system.admin.student.inscription.check.round',':level_id')}}".replace(':level_id',level_formation_id),
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

            $('#subscription_btn').on('click', function (e){
                e.preventDefault();

                const subscription_form = $('#subscription_form');
                const form_data = subscription_form.serializeArray();

                let cpt_error = 0;

                $.each(form_data, function(key , element) {

                    console.log('la clé :', key , ' la valeur :', element);

                    if (element.name.toString() !== "output_account" && element.name.toString() !== "guid_parent_id" && element.value.toString() === ""){
                        cpt_error++;
                        $('#'+element.name+'_error').removeClass('d-none');
                    }else {
                        $('#'+element.name+'_error').addClass('d-none');
                    }

                });

                if(cpt_error !== 0)
                    return;

                console.log(form_data);
                subscription_form.submit();

            })
        })

    </script>
@endsection
