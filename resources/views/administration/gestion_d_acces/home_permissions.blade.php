@extends('../layouts/template_admin')

@section('title')
   Gestion des permissions
@endsection
@section('other-css')
    <style>
        
    </style>
@endsection
@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>GESTION DES PERMISSIONS</h1>
            </div>
            <div class="card-body">
                <h3 class="text-center fw-bolder" style="font-family: 'Times New Roman'">
                    Liste des utilisateurs 
                </h3>
                <div>
                    <div class="row" style="overflow: auto">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover small" id="users_table">
                                <thead class="table-light iq-border-radius-5">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Nom et prénom</th>
                                        <th class="text-center">Adresse email</th>
                                        <th class="text-center">Téléphone</th>
                                        <th class="text-center">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{$i = 0}}
                                @foreach($users as $user)
                                    <tr>
                                        <td class="text-center fw-bolder">{{$i}}</td>
                                        <td class="text-center">{{$user->name}}</td>
                                        <td class="text-center text-info fw-bolder">{{$user     ->email}}</td>
                                        <td class="text-center fw-bolder">{{$user->phone}}</td>
                                        <td class="text-center fw-bolder"><a href="">conf. <i class="fa fa-gears text-info"></i></a></td>
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


@endsection
@section('other-js')
    <script>
        $(document).ready(function (){



            $("#users_table").DataTable({
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
        })
    </script>
@endsection