@extends('layouts.v2.main-v2')

@section('title', 'Enregistrer un étudiant')

@section('other-css')
    <link rel="stylesheet" href="{{ asset('v2/css/apex-charts.css') }}" />
    <link href="{{ asset('css/datatables.min.css') }}" rel='stylesheet' />
@endsection



@section('content')


    <div class="row">
        <div class="card">
            <div class="card-header fw-bolder">STATISTICS DU SYSTEME <span class="bx bx-cart-download text-info mx-1"></span></div>
            <div class="card-body">
                <div class="row">yo</div>
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
            let formation_level = $('#formation_level').val();
            let student_amount_pay = $('#student_amount_pay').val();

            const data_student= {
                'student_name'      : student_name,
                'student_program'   : student_program,
                'student_faculty'   : student_faculty,
                'student_level'     : student_level,
                'choice_option'     : choice_option,
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
