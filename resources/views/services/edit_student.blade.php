@extends('layouts.v2.main-v2')

@section('title', 'Modifier un étudiant')

@section('other-css')
    <link rel="stylesheet" href="{{ asset('v2/css/apex-charts.css') }}" />
    <link href="{{ asset('css/datatables.min.css') }}" rel='stylesheet' />
@endsection



@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>MODIFIER UN ETUDIANT <span class="fa fa-user-edit text-success fa-2x"></span></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label class="form-label"> nom et prenom</label>
                            <input type="text" class="form-control" id="student_name" value="{{$student->name}}">
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label"> Fillière d'école</label>
                            <input type="text" class="form-control" id="student_program" value="{{$student->program}}">

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Faculté</label>
                            <select name="" id="student_faculty" class="form-control select2">
                                <option  value="{{$student->school_name}}" selected>{{$student->school_name}}</option>
                                @foreach($propertiesHelpers->faculty as $itemFaculty)
                                    <option value="{{$itemFaculty}}">{{$itemFaculty}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Niveau scolaire</label>
                            <select name="" id="student_level" class="form-control select2">
                                <option value="{{$student->school_level}}" selected>Niveau {{$student->school_level}}</option>
                                @foreach($propertiesHelpers->schoolLevels as $itemSchoolLevels)
                                    <option value="{{$itemSchoolLevels}}">Niveau {{$itemSchoolLevels}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> option choisie</label>
                            <select name="" id="choice_option" class="form-control select2">
                                <option value="{{$student->choice_option}}" selected>{{$student->choice_option}}</option>
                                @foreach($propertiesHelpers->choiceOptions as $itemChoiceOptions)
                                    <option value="{{$itemChoiceOptions}}">Option {{$itemChoiceOptions}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Niveau de formation</label>
                            <select name="" id="formation_level" class="form-control select2">
                                <option value="{{$student->level_formation}}" selected>Niveau {{$student->level_formation}}</option>
                                @foreach($propertiesHelpers->levelsFormation as $itemLevelsFormation)
                                    <option value="{{$itemLevelsFormation}}">Niveau {{$itemLevelsFormation}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Numéro de téléphone</label>
                            <input type="number" class="form-control" id="phone_number" value="{{$student->phone_number}}">
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Montant versé</label>
                            <input type="number" class="form-control" id="student_amount_pay" value="{{$student->amount_paid_for_inscription}}" readonly>
                        </div>
                    </div>
                    <div class="mt-3" style="margin-left: 83%">
                        <button class="btn btn-success" data-student="{{$student->id}}" id="update-student"><span class="fa fa-edit"></span>Modifier</button>
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

        $('#update-student').on('click', function (e){
            e.preventDefault();

            let student_id = $(this).attr('data-student');

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
                url : '{{route('student.update', ':studentId')}}'.replace(':studentId',student_id),
                type: 'PUT',
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
