@extends('layouts.v2.main-v2')

@section('title', 'Liste des etudiants')

@section('other-css')
    <link rel="stylesheet" href="{{ asset('v2/css/apex-charts.css') }}" />
    <link href="{{ asset('css/datatables.min.css') }}" rel='stylesheet' />
@endsection



@section('content')
    <div class="modal fade" id="student-complet-inscription-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Completer l'inscription</h5>
                </div>
                <div class="modal-body" id="detailBody">
                    <div id="loader" class="text-center text-info mx-1 loader">
                        <div class="spinner-border" role="status">
                            <span class="sr-only"> Recherche...</span>
                        </div>
                    </div>
                    <div class="row d-none" id="body_completed_inscription">
                        <div class="card-6 mt-3">
                            <label class="form-label"> Montant actuel (FCFA)</label>
                            <input type="number" class="form-control" id="current_amount_inscription" value="" readonly>
                        </div>
                        <div class="card-6 mt-3">
                            <label class="form-label"> Nouveau Montant (FCFA)</label>
                            <input type="number" class="form-control" id="incrase_amount_inscription"  placeholder="enter le montant de completion">
                            <div class="text-danger small d-none" id="incrase_amount_inscription_error">Ce champ est requis</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" id="save_completion_inscription" data-student="">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="add-student-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Nouvelle étudiant</h5>
                </div>
                <div class="modal-body" id="detailBody">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" id="save-student">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>LISTE DES ETUDIANTS</div>
                <div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-student-modal" class="btn btn-info small">Nouvelle étudiant</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover small" id="studentsList">
                            <thead class="table-light iq-border-radius-5">
                            <tr>
                                <th scope="col"><span style="font-weight: bold;">#</span></th>
                                <th scope="col"><span style="font-weight: bold;">Nom et prenom</span></th>
                                <th scope="col"><span style="font-weight: bold;">faculté</span></th>
                                <th scope="col"><span style="font-weight: bold;">filiere</span></th>
                                <th scope="col"><span style="font-weight: bold;">niveau forma</span></th>
                                <th scope="col"><span style="font-weight: bold;">option choisit</span></th>
                                <th scope="col"><span style="font-weight: bold;">Inscrit ?</span></th>
                                <th scope="col"><span style="font-weight: bold;">a completer?</span></th>
                                <th scope="col"><span style="font-weight: bold;">Montant versé</span></th>
                                <th scope="col"><span style="font-weight: bold;">Reste à versé</span></th>
                                <th scope="col"><span style="font-weight: bold;">options</span></th>
                            </tr>
                            </thead>
                            <tbody id="purchaseList">
                                <?php $i = 0; ?>
                                @foreach($list_students as $studentItem)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td>{{$studentItem->name}}</td>
                                        <td>{{$studentItem->school_name}}</td>
                                        <td>{{$studentItem->program}}</td>
                                        <td>{{$studentItem->level_formation}}</td>
                                        <td>{{$studentItem->choice_option}}</td>
                                        <td class="<?php
                                               if(in_array($studentItem->amount_paid_for_inscription, [2000,2500]))
                                                   echo 'text-success';
                                               else echo 'text-danger';
                                        ?>">
                                                <?php
                                                if(in_array($studentItem->amount_paid_for_inscription, [2000,2500]))
                                                    echo 'OUI';
                                                else echo 'NON';
                                                ?>
                                        </td>
                                        <td class="<?php
                                               if(in_array($studentItem->amount_paid_for_inscription, [2000,2500]))
                                                   echo 'text-success';
                                               else echo 'text-danger';
                                        ?>">
                                                <?php
                                                if(in_array($studentItem->amount_paid_for_inscription, [2000,2500]))
                                                    echo 'NON';
                                                else echo 'OUI';
                                                ?>
                                        </td>
                                        <td class="<?php if(in_array($studentItem->amount_paid_for_inscription, [2000,2500]))echo 'text:success'; else echo 'text:danger'; ?>">{{$studentItem->amount_paid_for_inscription}}</td>
                                        <td class="<?php
                                               if($studentItem->stay_to_paid_for_inscription == 0)
                                                   echo 'text-success';
                                               else echo 'text-danger';
                                        ?>">
                                            {{$studentItem->stay_to_paid_for_inscription}}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('student.details', $studentItem->id)}}"><span class="fa fa-circle-info text-info mx-1"></span>Détails</a>
                                                    <a class="dropdown-item" href="{{route('student.edit', $studentItem->id)}}"><span class="fa fa-edit text-success mx-1"></span>Modifier</a>
                                                    @if($studentItem->stay_to_paid_for_inscription != 0)
                                                        <a class="dropdown-item" href="#" onclick="read_current_amount_inscription({{ $studentItem->id}})" data-bs-target="#student-complet-inscription-modal" data-bs-toggle="modal"><span class="fa fa-circle-exclamation text-warning mx-1"></span>Completer</a>
                                                    @endif
                                                    <a class="dropdown-item" href="#"><span class="fa fa-trash text-danger mx-1"></span>Suspendre</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach

                            </tbody>
                        </table>
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
            dropdownParent: $('#add-student-modal')
        });

        function read_current_amount_inscription(student_id){
            console.log('identifiant de l etudiant',student_id)
            $.ajax({
                url : '{{route('read.current_amount_inscription', ':studentId')}}'.replace(':studentId',student_id),
                type: 'GET',
                success: function (response){
                    if(response.status_code === 404){
                        Swal.fire({
                            text: response.message,
                            icon: "error"
                        })
                    }else{
                        $('#current_amount_inscription').val(response.current_amount_inscription);
                        $('#loader').addClass('d-none');
                        $('#body_completed_inscription').removeClass('d-none');
                        $('#save_completion_inscription').attr('data-student',student_id);
                    }
                }
            })
        }

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

        $('#save_completion_inscription').on('click', function (e){
            e.preventDefault();
            let student_id = $(this).attr('data-student');

            if($('#incrase_amount_inscription').val().length === 0){
                $('#incrase_amount_inscription_error').removeClass('d-none');
                return;
            }else{
                $('#incrase_amount_inscription_error').addClass('d-none');
            }

            $.ajax({
                url : '{{route('update.current_amount_inscription', ':studentId')}}'.replace(':studentId',student_id),
                type : 'PUT',
                data : JSON.stringify({
                    'amount' : $('#incrase_amount_inscription').val()
                }),
                headers : {
                    'X-CSRF-TOKEN' : `{{csrf_token()}}`,
                    'content-type' : 'application/json'
                },
                success: function(response){
                    if(response.status_code === 200){
                        Swal.fire({
                            'text' : response.message,
                            'icon' : 'success'
                        })
                        setTimeout(function(){
                            window.location.replace("{{ route('student.view_inscripted') }}");
                        }, 2000);
                    }else{
                        Swal.fire({
                            'text' : 'une erreur s est produite dans le système',
                            'icon' : 'error'
                        });
                    }
                }
            })

        });

        $("#studentsList").DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':visible',
                        format: {
                            body: function(data, row, column, node) {
                                data = $('<p>' + data + '</p>').text();
                                return $.isNumeric(data.replaceAll(' ', '')) ? data.replaceAll(' ', '') : data;
                            }
                        }
                    }
                },
                'colvis'
            ],
            columnDefs: [
                {targets: 'hidden-column', visible: false}
            ],
            "pageLength": 25,
            pagingType: 'simple',
            language: {
                searchPlaceholder: "Rechercher",
                search: "",
                decimal: ',',
                thousands: " "
            },
            drawCallback: function () {
                $('.dt-buttons .buttons-excel').addClass('btn-outline-secondary');
                $('.dt-buttons .buttons-excel').removeClass('btn-secondary');
                $('.dt-buttons .buttons-colvis').addClass('btn-outline-secondary');
                $('.dt-buttons .buttons-colvis').removeClass('btn-secondary');

                $('button.buttons-colvis span').text('Colonnes à afficher');
            }
        });
    </script>
    <script src="{{ asset('v2/js/apexcharts.js') }}"></script>
    <script src="{{ asset('v2/js/dashboards-analytics.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
@endsection
