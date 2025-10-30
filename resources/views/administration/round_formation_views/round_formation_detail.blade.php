@extends('../layouts/template_admin')

@section('title')
    Détail d'un round
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
    <div class="bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Détail d'un tour de formation</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="text-center fw-bolder">Code du Tour :</div>
                        <div class="text-center">{{$round->round_code}}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-center fw-bolder">Libélé du Tour :</div>
                        <div class="text-center">{{$round->round_label}}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-center fw-bolder">Niveau du Tour : </div>
                        <div class="text-center">{{$round->round_level}}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-center fw-bolder">Nombre de participant :</div>
                        <div class="text-center">{{count($participations)}}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-center fw-bolder">Date de début : </div>
                        <div class="text-center">{{$round->start_date}}</div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-center fw-bolder">Date de fin :</div>
                        <div class="text-center">{{$round->end_date}}</div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="border-top">
                        <h4 class="text-center">Liste Des Etudiants Du tour de formation</h4>
                    </div>
                    <div>
                        <div class="row" style="overflow: auto">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover small" id="student_round_table">
                                    <thead class="table-light iq-border-radius-5">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Matricule De l'étudiant</th>
                                        <th class="text-center">Nom et prénom</th>
                                        <th class="text-center">Niveau du tour</th>
                                        <th class="text-center">Option du cours</th>
                                        <th class="text-center">Option de l'etu.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    <tr>--}}
{{--                                        <td class="text-center fw-bolder">1</td>--}}
{{--                                        <td class="text-center">xxxxxxxxxxxxx</td>--}}
{{--                                        <td class="text-center fw-bolder">xxxxxxxxxxxxxx</td>--}}
{{--                                        <td class="text-center fw-bolder">xxxxxxxxxxxxxxxx</td>--}}
{{--                                        <td class="text-center fw-bolder"> xxxxxxxxxxxxxxxx</td>--}}
{{--                                        <td class="text-center text-info fw-bolder"><a href="#"><i class="fa fa-folder-open"></i></a></td>--}}
{{--                                    </tr>--}}
                                        {{$i = 0}}
                                        @foreach($participations as $participation)
                                            <tr>
                                                <td class="text-center fw-bolder">{{$i}}</td>
                                                <td class="text-center text-success">{{$participation->student->matricule}}</td>
                                                <td class="text-center fw-bolder">{{$participation->student->name}}</td>
                                                <td class="text-center text-info fw-bolder">{{$round->round_level}}</td>
                                                <td class="text-center text-warning fw-bolder"> {{$participation->formationOption->option_label}} </td>
                                                <td class="text-center text-info fw-bolder"><a href="{{Route('system.admin.student.view',[
                                                        'student_id'=>$participation->student->id,
                                                        'round_id'=>$round->id,
                                                        'participation_id'=>$participation->id,

                                                    ])}}"><i class="fa fa-folder-open"></i></a></td>
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
        </div>
    </div>
@endsection
@section('other-js')
    <script>
        $(document).ready(function (){






            $("#student_round_table").DataTable({
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
        });
    </script>
@endsection
