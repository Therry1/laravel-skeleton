@extends('../layouts/template_admin')


@section('title') Profil de l'utilisateur @endsection
@section('other-css')

    <style>

    </style>
@endsection
@section('content')
    <div>
        <div class="" style="margin: 0 3%; padding: 0 5% ;border-radius: 0 0 20px 20px; background-color: #053e6c">
            <div class="">
                <div class="row bg-white p">
                    <div class="col-md-7 border" style="padding-left: 5%">
                        <div class="fw-bold" style="height: 40% ;color: #44693e; font-family: 'Times New Roman'; font-size: 25px">Profil utilisateur</div>
                        <div style="height: 60% ; padding-bottom: 0">
                            <div class="fw-bold" style="font-family: 'Times New Roman'; color: #000000; font-size: 27px ">
                                BOGANGWACK KENGNE CLAUDY
                            </div>
                            <div class="" style="font-family: 'Times New Roman'; ">
                                PDG DE I-TECH FORMATION
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 border py-3" style="">
                        <div style="border-radius: 50px; text-align: right">
                            <img src="{{asset('images/sl2.jpg')}}" alt=" profil" width="30%" height="40%" style="border-radius: 50px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" style="padding-left: 5%; padding-right: 5%; padding-top: 5%">
            <div class="row">
                <div class="col-md-7">
                    <div class="">
                        <div class="card border mb-2"> projet1</div>
                        <div class="card border"> projet2</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border">
                        <h3 class="fw-bolder px-2 pt-2 pb-3" style="color: black;font-family: 'Times New Roman';">Informations d'identification</h3>
                        <div class="px-2">
                            <div style="display: flex ;justify-content: space-between">
                                <span class="fw-bolder" style="font-family: 'Times New Roman' ; color: black">Role système</span>
                                <span style="font-family: 'Times New Roman' ; color: black">SUPER ADMINISTRATEUR</span>
                            </div>
                            <div style="display: flex ;justify-content: space-between">
                                <span class="fw-bolder" style="font-family: 'Times New Roman' ; color: black">Role proffessionnel</span>
                                <span style="font-family: 'Times New Roman' ; color: black">Directeur</span>
                            </div>
                            <div style="display: flex ;justify-content: space-between">
                                <span class="fw-bolder" style="font-family: 'Times New Roman' ; color: black">Numéro de téléphone</span>
                                <span style="font-family: 'Times New Roman' ; color: black">+237 692502488</span>
                            </div>
                            <div style="display: flex ;justify-content: space-between">
                                <span class="fw-bolder" style="font-family: 'Times New Roman' ; color: black">Email</span>
                                <span style="font-family: 'Times New Roman' ; color: black">therrynganga5@gmail.com</span>
                            </div>
                            <div style="display: flex ;justify-content: space-between">
                                <span class="fw-bolder" style="font-family: 'Times New Roman' ; color: black">Adresse</span>
                                <span style="font-family: 'Times New Roman' ; color: black">Bini-Dang</span>
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

