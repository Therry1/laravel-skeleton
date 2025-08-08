@extends('../layouts/template_admin')


@section('title')

@endsection
@section('other-css')

    <style>
        #new-year-btn{
            background-color: #c40ff1;
            border-radius: 20px;
            padding: 10px 10px;
            color: white;
            font-weight: bolder;
        }

        .year-option-card{
            background-color: #c40ff1;
            color: white;
            font-weight: bolder;
            border-radius: 10px;
            height: 100px;
            display: flex;
            align-items: center;       /* centre verticalement */
            justify-content: center;
            box-shadow: 5px 5px 10px #676767;
            margin-bottom: 5%;
        }

        .year-option-link:hover {
            position: relative;
            top: 3px;
        }
    </style>
@endsection
@section('content')

    <div class="modal fade" id="new-round-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Nouveau tour de formation <i class="fa fa-square-plus mx-1 text-info"></i></h5>
                </div>
                <div class="modal-body" id="detailBody">
                    <div id="loader" class="text-center text-info mx-1 loader d-none">
                        <div class="spinner-border" role="status">
                            <span class="sr-only"> Recherche...</span>
                        </div>
                    </div>
                    <div class="row" id="body_new_round">
                        <div class="col-12 mt-3">
                            <label class="form-label"> Niveau de formation <span class="text-danger fw-bolder">*</span>:</label>
                            <select name="" id="formation_level" class="form-control select2" style="">
                                <option value="" selected>Choisir un iveau de formation</option>
                                @foreach($formation_levels as $level)
                                    <option value="{{$level->id}}">{{$level->level_label}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success"  id="new-round-btn" data-student="">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>



    <div class="">
        <div class="">
            <h1 class="text-center">BIENVENU DANS LE SYSTEME DE GESTION DES ETUDIANTS</h1>
        </div>
        <div class="text-center new-year-container" style="padding-top: 20%;{{$exist ? '
                    padding-top: 7%;
                    transition : transform 1s ease;
                    transform: translateY(-20px);
                    padding-bottom: 4%;
                    border-bottom : 3px solid purple;
            ' : ''}}">
            <a href="#" class="small" id="new-year-btn"  >NOUVELLE ANNEE <i class="fa fa-plus-circle mx-1"></i></a>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a href="" class="year-option-link" data-bs-toggle="modal" data-bs-target="#new-round-modal">
                            <div class="year-option-card" style="">
                                <div class="text-center">
                                    <div><i class="fa fa-sync mx-1 fa-3x"></i></div>
                                    <div>Nouvau round</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="#" class="year-option-link">
                            <div class="year-option-card" style="background-color: #5bb1e5">
                                <div class="text-center">
                                    <div><i class="fa fa-sync mx-1 fa-3x"></i></div>
                                    <div>Autre round</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="#" class="year-option-link">
                            <div class="year-option-card" style="background-color: #5bb1e5">
                                <div class="text-center">
                                    <div><i class="fa fa-rotate-back mx-1 fa-3x"></i></div>
                                    <div>Retour au site</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="#" class="year-option-link">
                            <div class="year-option-card" style="">
                                <div class="text-center">
                                    <div><i class="fa fa-trash mx-1 fa-3x"></i></div>
                                    <div>Reinitialiser le syst.</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row" style="overflow: auto">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover small" id="round_table">
                            <thead class="table-light iq-border-radius-5">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Code du tour</th>
                                    <th class="text-center">Intitulée</th>
                                    <th class="text-center">Niveau du tour</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-center">Détail</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{$i = 0}}
                                @foreach($formation_rounds as $round)
                                    <tr>
                                        <td class="text-center fw-bolder">{{$i}}</td>
                                        <td class="text-center">{{$round->round_code}}</td>
                                        <td class="text-center fw-bolder">{{$round->round_label}}</td>
                                        <td class="text-center fw-bolder">{{$round->round_level}}</td>
                                        <td class="text-center {{$round->state == 1 ? 'text-success': 'text-warning'}}  fw-bolder"> {{$round->state == 1 ? 'Encours': 'Terminé'}}</td>
                                        <td class="text-center text-info fw-bolder"><a href="#"><i class="fa fa-folder-open"></i></a></td>
                                    </tr>
                                    {{$i++}}
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
        $(document).ready(function (){

            $('.select2').select2({
                width : '100%',
                allowClear: true,
                dropdownParent: $('#new-round-modal')
            });

            $('#new-year-btn').on('click', function (){
                $.ajax({
                    url : '{{route('year.admin.new')}}',
                    type: 'GET',
                    success: function (response){
                        if (response.status_code === 200){

                            Swal.fire({
                                text: 'Année créé avec succès',
                                icon: "success"
                            });

                            $('.new-year-container').css({
                                'padding-top': '7%',
                                'transition' : 'transform 1s ease',
                                'transform': 'translateY(-20px)',
                                'padding-bottom': '4%',
                                'border-bottom' : '3px solid purple'
                            });
                        }else if(response.status_code === 400){
                            Swal.fire({
                                text: response.message,
                                icon: "error"
                            });
                        }
                    },
                    error: function (response){
                        Swal.fire({
                            text: 'Une erreur s\'est produite dans le system. Consultez les logs',
                            icon: "error"
                        });

                        console.log(response);
                    }
                })
            });

            $('#new-round-btn').on('click', function (e){

                e.preventDefault();
                const formation_level = $('#formation_level');
                const error = $('#formation_level_error');

                const loader = $('#loader');
                const body_new_round = $('#body_new_round');

                if (formation_level.val().toString() === ""){
                    error.removeClass('d-none');
                    return;
                }

                error.addClass('d-none');

                loader.removeClass('d-none');
                body_new_round.addClass('d-none');

                console.log('erere');
                $.ajax({
                    url : '{{route('round.admin.new')}}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN' : `{{csrf_token()}}`,
                        'Content-Type' : 'application/json'
                    },
                    data: JSON.stringify({
                        'round_level' : formation_level.val()
                    }),
                    success: function (response){
                        if (response.status_code === 200){

                            Swal.fire({
                                text: 'Nouvelle vague créé avec succès',
                                icon: "success"
                            });

                            $('#new-round-modal').modal('hide');

                            window.location.reload();
                        }else{
                            Swal.fire({
                                text: response.message,
                                icon: "error"
                            });
                        }
                    },
                    error: function (response){
                        Swal.fire({
                            text: 'Une erreur s\'est produite dans le system, Veillez consulter les logs',
                            icon: "error"
                        });

                        console.log(response);
                    }
                });

                loader.addClass('d-none');
                body_new_round.removeClass('d-none');
            });
        });

        $("#round_table").DataTable({
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
@endsection

