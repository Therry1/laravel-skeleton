@extends('../layouts/template_customer')

@section('title')  Enregistrement    @endsection

@section('css-content')

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
                <h3>S'inscrire <i class="fa fa-square-plus" style="color: orangered"></i></h3>
            </div>
            <div class="text-danger text-center mt-3" style="font-size: 13px; font-style: italic; ">Apres le choix du niveau de formation vous pourez soumettre votre formulaire</div>
            <div class="card-body">
                <div class="row">

                    <div class="row">
                        <form action="">
                            <div class="row">
                                <div>
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder">Informations personnelles</h3>
                                        <i class="fa fa-user fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> code de la vague de formation <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" readonly id="round_input">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> Ville de résidence <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="" class="form-control select2">
                                                <option value="">Selectionnez votre ville de résidence</option>
                                                @foreach($cities as $city)
                                                    <option value="">{{$faculty->city_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mt-3">
                                            <label class="form-label"> Nom et prenom <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" id="student_name" placeholder="entrez le nom de l etudiant">
                                            <div class="text-danger small d-none" id="student_name_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Fillière d'école <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" id="student_program" placeholder="entrez la fillière de l etudiant">
                                            <div class="text-danger small d-none" id="student_program_error">Ce champ est requis</div>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Faculté <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="student_faculty" class="form-control select2">
                                                <option value="" selected>Selectionnez l ecole</option>
                                                @foreach($school_faculties as $faculty)
                                                    <option value="">{{$faculty['faculty_name'].' ('.$faculty['code'].')'}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="student_faculty_error">Ce champ est requis</div>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Niveau scolaire <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="student_level" class="form-control select2">
                                                <option value="" selected>Selectionner le niveau</option>
                                                @foreach($school_levels as $level)
                                                    <option value="">{{$level->level_number.' ('.$level->level_label.')'}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="student_level_error">Ce champ est requis</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder ">Informations de formation</h3>
                                        <i class="fa fa-pen-alt fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Ville de formation souhaitée <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="" class="form-control select2">
                                                <option value="">Choisissez votre ville de formation</option>
                                                @foreach($formation_cities as $city)
                                                    <option value="">{{$city->city_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> option choisie <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="choice_option" class="form-control select2">
                                                <option value="" selected>Choisir l'option</option>
                                                @foreach($formation_options as $option)
                                                    <option value="">{{$option->option_label}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="choice_option_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Niveau de formation choisi <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="formation_level" class="form-control select2">
                                                <option value="" selected>Niveau de formation</option>
                                                @foreach($formation_levels as $level)
                                                    <option value="{{$level->id}}">{{$level->level_label}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>

                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder">Contacts</h3>
                                        <i class="fa fa-mobile-android fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de téléphone whatsapp <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero whatsapp">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de téléphone d'appelle <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero de téléphone">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de téléphone d'un proche <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero d'un proche'">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
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
                                            <select name="" id="" class="form-control select2">
                                                @foreach($payment_modes as $mode)
                                                    <option value="">{{$mode->mean_payment_name.' ('.$mode->code.')'}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Numéro de paiement <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="tel" class="form-control" id="student_amount_pay" placeholder="entrez le compte débiteur">
                                            <div class="text-danger small d-none" id="student_amount_pay_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-3">
                                            <label class="form-label"> Montant versé <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="student_amount_pay" placeholder="entrez le montant versé">
                                            <div class="text-danger small d-none" id="student_amount_pay_error">Ce champ est requis</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 d-none">
                                    <button class="btn btn-primary fw-bolder w-100" id="subscription_btn">S'Inscrire</button>
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

            $('#formation_level').on('change', function (){
                const level_formation_id = $(this).val();

                $.ajax({
                    url: '{{route('student.inscription.check.round',':level_id')}}'.replace(':level_id',level_formation_id),
                    type : 'GET',
                    success: function (response){
                        if (response.status_code === 200){
                            Swal.fire({
                                text: response.message,
                                icon: 'success'
                            });

                            $('#round_input').val(response.data.round_code);
                            $('#subscription_btn').removeClass('d-none');
                        }else{
                            Swal.fire({
                                text: response.message,
                                icon: 'error'
                            });

                            $('#round_input').val('');
                            $('#subscription_btn').addClass('d-none');
                        }
                    },
                    error: function (response){
                        Swal.fire({
                            text: 'Une erreur s est produite dans le systeme. veillez consulter les logs',
                            icon: 'error'
                        });
                        console.log('data_error :', response.json());
                    }
                })
            });
        })

    </script>
@endsection
