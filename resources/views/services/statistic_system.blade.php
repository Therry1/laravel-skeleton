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
                <div class="row">
{{--                    <div class="col-md-4">--}}
{{--                        <div class="card bg-warning mx-1" style="box-shadow: 1px 5px grey ">--}}
{{--                            <div class="mx-2 py-2 border-bottom fst-italic fw-bolder text-center text-white" style="">--}}
{{--                                <i class="fa fa-money-bill"></i> TOTAL INSCRIPTION--}}
{{--                            </div>--}}
{{--                            <div class="text-center text-white fw-bolder fst-italic" style="font-size: 50px">--}}
{{--                                {{$sum_inscription}} <span class="fst-normal">FCFA</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-6">
                        <div class="card bg-info mx-1" style="box-shadow: 1px 5px grey ">
                            <div class="mx-2 py-2 border-bottom fst-italic fw-bolder text-center text-white" style="">
                                <i class="fa fa-money-bill"></i> TOTAL FORMATION
                            </div>
                            <div class="text-center text-white fw-bolder fst-italic" style="font-size: 50px">
                                {{$sum_payment_formation}} <span class="fst-normal">FCFA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-warning mx-1" style="box-shadow: 1px 5px grey ">
                            <div class="mx-2 py-2 border-bottom fst-italic fw-bolder text-center text-white" style="">
                                <i class="fa fa-money-bill"></i> TOTAL MOIS COURENT
                            </div>
                            <div class="text-center text-white fw-bolder fst-italic" style="font-size: 50px">
                                {{$sum_payment_formation}} <span class="fst-normal">FCFA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
        <div class="row pt-3 text-center">
            <div class="col-md-5 mx-1">
                <div class="card text-white bg-black">
                    <div class="d-flex px-2 py-2">
                        <div class="fa fa-user-circle fa-3x"></div>
                        <div class="text-center" style="font-size: 150px; margin-right: 25px">{{$students->count()}}</div>
                    </div>
                    <div class="fw-bolder">
                        Nombre d'étudiant(e)s
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-4 mx-1">
                <div class="card text-info fw-bolder fst-italic">
                    <span>Historique des paiements <i class="fa fa-calendar-days mx-1"></i></span>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover small">
                        <thead>
                        <tr>
                            <th scope="col"><span style="font-weight: bold;">#</span></th>
                            <th scope="col"><span style="font-weight: bold;">Mois courrent</span></th>
                            <th scope="col"><span style="font-weight: bold;">Montant</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <td>mars</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>mars</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>mars</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>mars</td>
                            <td>10000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row mt-2" style="padding: 0 20% 0 20% ">
                <div class="row mt-2 mb-2 border-bottom fw-bolder">
                    <div class="text-center">TOTAL DU SYSTEME</div>
                </div>
                <div class="fst-italic fw-bolder" style="font-size: 100px; font-family: Algerian">{{$sum_payment_formation}} <span style="font-size: 30px; font-family: 'Times New Roman'">FCFA</span></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="fw-bolder">STATISTIQUES ETUDIANTS</div>
                <div>
                    <select name="" id="student-filter" class="form-control select2">
                        <option value="KO" selected>Etudiants non conforme </option>
                        <option value="KO1" >Etudiants non conforme 1</option>
                        <option value="KO2" >Etudiants non conforme 2</option>
                        <option value="OK">Etudiants en règles</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover small" id="statStudentList">
                            <thead class="table-light iq-border-radius-5">
                            <tr>
                                <th scope="col"><span style="font-weight: bold;">#</span></th>
                                <th scope="col"><span style="font-weight: bold;">Mois courrent</span></th>
                                <th scope="col"><span style="font-weight: bold;">Nom</span></th>
                                <th scope="col"><span style="font-weight: bold;">Tranche1</span></th>
                                <th scope="col"><span style="font-weight: bold;">Tranche2</span></th>
                                <th scope="col"><span style="font-weight: bold;">Montant</span></th>
                                <th scope="col"><span style="font-weight: bold;">Reste</span></th>
                            </tr>
                            </thead>
                            <tbody id="bodyStudentStat">
                            <?php $i=0; ?>
                            @foreach($array_students as $student_item)
                                <tr>
                                    <th>{{$i}}</th>
                                    <td>{{$current_month}}</td>
                                    <td>{{$student_item->name}}</td>
                                    <td class="fw-bolder text-danger">Non Payé</td>
                                    <td class="fw-bolder text-danger">Non Payé</td>
                                    <td>0</td>
                                    <td class="text-danger">5000</td>
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
        });

        $('#student-filter').on('change', function(){

            $('#statStudentList').DataTable().destroy();

            const current_value = $(this).val();
            const body_data_table = $('#bodyStudentStat');

            body_data_table.empty();

            $.ajax({
                url : '{{route('system.student.by.status',':status')}}'.replace(':status',current_value),
                type : 'GET',
                success : function (response){
                    console.log('resultat:', response.data);

                    if (response.statusCode === 200){
                        if (response.data.length === 0){
                            body_data_table.empty().append(`<tr class='text-black fw-bolder text-center fst-italic' colspan = 7> No Data</tr>`);
                            return;
                        }
                        let i = 0;
                        $.each(response.data , function (key , element){

                            console.log(element);
                            let tranche1 = "";
                            let tranche2 = "";
                            let content1 = "";
                            let content2 = "";

                            if (element.student_payment.tranche1){
                                tranche1 = 'text-success';
                                content1 = 'Payé';
                            }else{
                                tranche1 = 'text-danger';
                                content1 = 'Non payé';
                            }

                            if (element.student_payment.tranche2){
                                tranche2 = 'text-success';
                                content2 = 'Payé';
                            }else{
                                tranche2 = 'text-danger';
                                content2 = 'Non payé';
                            }

                            let row = `
                                <tr>
                                    <th>${i}</th>
                                    <td>${response.current_month}</td>
                                    <td>${element.student_identity.name}</td>
                                    <td class="fw-bolder ${tranche1} ">${content1}</td>
                                    <td class="fw-bolder ${tranche2}">${content2}</td>
                                    <td class="fw-bolder ">${element.student_payment.amount_paid}</td>
                                    <td class="text-danger">${element.student_payment.stay_to_paid}</td>
                                </tr>
                            `;

                            body_data_table.append(row);
                            i++;
                        })

                        create_data_table('statStudentList');
                    }else{
                        Swal.fire({
                            text : 'Une erreur s\'est produite lors du chargement. consultez les logs',
                            icon : 'error'
                        });
                    }

                },
                error: function (){
                    Swal.fire({
                        text : 'Error',
                        icon : 'error'
                    });
                    setTimeout( function (){
                        window.location.load();
                    },2000);
                }
            })
        });

        function create_data_table(table_id){
            $("#"+table_id).DataTable({
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
        }


        $("#statStudentList").DataTable({
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
