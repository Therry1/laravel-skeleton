@extends('../layouts/template_admin')


@section('title') Liste des étudiants @endsection
@section('other-css')

    <style>
        .big-research-container{

        }
        .research-bar-container{
            width: 100%;
            height: 5.5vh;
            border: 1px solid black;
            text-align: center;
            border-radius: 50px;
        }

        .big-research-bar{
            width: 80%;
            height: 5vh;
            border: none;
            outline: none;
        }
    </style>
@endsection
@section('content')

    <div>
        <div>
            <h1>Liste des étudiants inscrits</h1>
        </div>
        <div class="card px-2">
            <div class="card-header">
                <h3>Mon titre</h3>
            </div>
            <div class="card-body">

                <div class="row big-research-container">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="research-bar-container">
                            <input type="text" placeholder="rechercher un étudiant" class="big-research-bar">
                        </div>

                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover small" id="studentsList">
                            <thead class="table-light iq-border-radius-5">
                            <tr>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">#</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">Nom et prenom</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">niveau formation</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">option choisit</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">Inscrit ?</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">Montant versé(FCFA)</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">Reste à versé(FCFA)</span></th>
                                <th class="text-center" scope="col"><span style="font-weight: bold;">options</span></th>
                            </tr>
                            </thead>
                            <tbody id="purchaseList">
                            <?php $i = 0; ?>
                            <tr>
                                <th class="text-center">0</th>
                                <td class="text-center">BOGANGWACK KENGNE</td>
                                <td class="text-center fw-bolder">3</td>
                                <td class="text-center"> Développement</td>
                                <td class="text-center fw-bolder">OUI</td>
                                <td class="text-center fw-bolder">2000</td>
                                <td class="text-center fw-bolder text-success">0</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=""><span class="fa fa-circle-info text-info mx-1"></span>Détails</a>
                                            <a class="dropdown-item" href=""><span class="fa fa-edit text-success mx-1"></span>Modifier</a>
                                            <a class="dropdown-item" href="#"><span class="fa fa-trash text-danger mx-1"></span>Suspendre</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">1</th>
                                <td class="text-center">AUTRE KENGNE</td>
                                <td class="text-center fw-bolder">3</td>
                                <td class="text-center">Réseau</td>
                                <td class="text-center fw-bolder ">NON</td>
                                <td class="text-center fw-bolder">1500</td>
                                <td class="text-center fw-bolder text-danger">500</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=""><span class="fa fa-circle-info text-info mx-1"></span>Détails</a>
                                            <a class="dropdown-item" href=""><span class="fa fa-edit text-success mx-1"></span>Modifier</a>
                                            <a class="dropdown-item" href="#"><span class="fa fa-trash text-danger mx-1"></span>Suspendre</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
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
@endsection

