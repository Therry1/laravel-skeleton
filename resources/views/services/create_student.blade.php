@extends('layouts.v2.main-v2')

@section('title', 'Enregistrer un étudiant')

@section('other-css')
    <link rel="stylesheet" href="{{ asset('v2/css/apex-charts.css') }}" />
    <link href="{{ asset('css/datatables.min.css') }}" rel='stylesheet' />
@endsection



@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>CREER UN ETUDIANT <span class="fa fa-save text-info fa-2x"></span></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label class="form-label"> nom et prenom</label>
                            <input type="text" class="form-control" id="student_name" placeholder="entrez le nom de l etudiant">
                            <div class="text-danger small d-none" id="student_name_error">Ce champ est requis</div>
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label"> Fillière d'école</label>
                            <input type="text" class="form-control" id="student_program" placeholder="entrez la fillière de l etudiant">
                            <div class="text-danger small d-none" id="student_program_error">Ce champ est requis</div>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Faculté</label>
                            <select name="" id="student_faculty" class="form-control select2">
                                <option value="" selected>Selectionnez l ecole</option>
                                @foreach($propertiesHelpers->faculty as $itemFaculty)
                                    <option value="{{$itemFaculty}}">{{$itemFaculty}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger small d-none" id="student_faculty_error">Ce champ est requis</div>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Niveau scolaire</label>
                            <select name="" id="student_level" class="form-control select2">
                                <option value="" selected>Selectionner le niveau</option>
                                @foreach($propertiesHelpers->schoolLevels as $itemSchoolLevels)
                                    <option value="{{$itemSchoolLevels}}">Niveau {{$itemSchoolLevels}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger small d-none" id="student_level_error">Ce champ est requis</div>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> option choisie</label>
                            <select name="" id="choice_option" class="form-control select2">
                                <option value="" selected>Choisir l'option</option>
                                @foreach($propertiesHelpers->choiceOptions as $itemChoiceOptions)
                                    <option value="{{$itemChoiceOptions}}">Option {{$itemChoiceOptions}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger small d-none" id="choice_option_error">Ce champ est requis</div>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Niveau de formation</label>
                            <select name="" id="formation_level" class="form-control select2">
                                <option value="" selected>Niveau de formation</option>
                                @foreach($propertiesHelpers->levelsFormation as $itemLevelsFormation)
                                    <option value="{{$itemLevelsFormation}}">Niveau {{$itemLevelsFormation}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Numéro de téléphone</label>
                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero de téléphone">
                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Montant versé</label>
                            <input type="number" class="form-control" id="student_amount_pay" placeholder="entrez le montant versé">
                            <div class="text-danger small d-none" id="student_amount_pay_error">Ce champ est requis</div>
                        </div>
                    </div>
                    <div class="mt-3" style="margin-left: 83%">
                        <button class="btn btn-info" id="save-student"><span class="fa fa-save"></span>Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('other-js')

    <script>
        $('.select2').select2({
            width: "100%",
            allowClear: true,
        });

        $('#save-student').on('click', function (e){
            e.preventDefault();

            let counter_error = 0;

            if ($('#student_name').val().length === 0){
                $('#student_name_error').removeClass('d-none');
                counter_error++;
            }else{
                $('#student_name_error').addClass('d-none');
            }

            if ($('#student_program').val().length === 0){
                $('#student_program_error').removeClass('d-none');
                counter_error++;
            }else{
                $('#student_program_error').addClass('d-none');
            }

            if ($('#student_faculty').val().length === 0){
                $('#student_faculty_error').removeClass('d-none');
                counter_error++;

            }else{
                $('#student_faculty_error').addClass('d-none');
            }

            if ($('#student_level').val().length === 0){
                $('#student_level_error').removeClass('d-none');
                counter_error++;

            }else{
                $('#student_level_error').addClass('d-none');
            }

            if ($('#choice_option').val().length === 0){
                $('#choice_option_error').removeClass('d-none');
                counter_error++;

            }else{
                $('#choice_option_error').addClass('d-none');
            }

            if ($('#phone_number').val().length === 0 || parseInt($('#phone_number').val()) === 0){
                $('#phone_number_error').removeClass('d-none');
                counter_error++;

            }else{
                $('#phone_number_error').addClass('d-none');
            }

            if ($('#formation_level').val().length === 0){
                $('#formation_level_error').removeClass('d-none');
                counter_error++;

            }else{
                $('#formation_level_error').addClass('d-none');
            }

            if ($('#student_amount_pay').val().length === 0 || $('#student_amount_pay').val() === 0){
                $('#student_amount_pay_error').removeClass('d-none');
                counter_error++;

            }else{
                $('#student_amount_pay_error').addClass('d-none');
            }

            if (counter_error !== 0)
                return;

            let student_name    = $('#student_name').val();
            let student_program = $('#student_program').val();
            let student_faculty = $('#student_faculty').val();
            let student_level   = $('#student_level').val();
            let choice_option   = $('#choice_option').val();
            let phone_number    = $('#phone_number').val();
            let formation_level = $('#formation_level').val();
            let student_amount_pay = $('#student_amount_pay').val();

            const data_student= {
                'student_name'      : student_name,
                'student_program'   : student_program,
                'student_faculty'   : student_faculty,
                'student_level'     : student_level,
                'choice_option'     : choice_option,
                'phone_number'      : phone_number,
                'formation_level'   : formation_level,
                'student_amount_pay' : student_amount_pay
            }

            $.ajax({
                url : '/store-student',
                type: 'POST',
                data: JSON.stringify(data_student),
                headers : {
                    'X-CSRF-TOKEN': `{{csrf_token()}}`,
                    'Content-type': 'application/json'
                },
                success: function(response){
                    if (response.status_code === 200){
                        Swal.fire({
                            text: response.message,
                            icon: "success"
                        })
                        setTimeout(function(){
                            window.location.replace("{{ route('student.view_inscripted') }}");
                        }, 2000);
                    }else{
                        console.log("erreur : ", response.error);
                        Swal.fire({
                            text: response.message,
                            icon: "error"
                        })
                    }
                },
                error: function (error){
                    console.log(error);
                }
            })


        })

    </script>
    <script src="{{ asset('v2/js/apexcharts.js') }}"></script>
    <script src="{{ asset('v2/js/dashboards-analytics.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
@endsection
