@extends('../layouts/template_admin')

@section('title')
    Information de l'étudiant
@endsection
@section('other-css')
    <style>

    </style>
@endsection
@section('content')
    <div class="modal fade" id="new-payment-modal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Effectuer un paiement <i class="fa fa-money-bill mx-1 text-info"></i></h5>
                </div>
                <div class="modal-body" id="detailBody">
                    <div class="row"> 
                        <?php
                            $level_formation = $round->round_level;
                            $tranche_amount = $level_formation = 1 ? 2500 : ($level_formation = 2 ? 5000 : 7500 );
                            $month_amount = $level_formation = 1 ? 5000 : ($level_formation = 2 ? 10000 : 15000 );
                        ?>  
                        <div class="col-md-4">
                            <span class="fw-bolder">Niveau de formation :</span><span>{{$round->round_level}}</span>
                        </div>
                        <div class="col-md-4">
                            <span class="fw-bolder">Montant d'une tranche :</span><span>{{$tranche_amount}} FCFA</span>
                        </div>
                        <div class="col-md-4">
                            <span class="fw-bolder">Montant d'un mois:</span><span>{{$month_amount}} FCFA</span>
                        </div>
                    </div>
                    <div id="loader" class="text-center text-info mx-1 loader d-none">
                        <div class="spinner-border" role="status">
                            <span class="sr-only"> Recherche...</span>
                        </div>
                    </div>
                    <div class="row" id="body_new_round">
                        <div class="col-12 mt-3">
                            <label class="form-label"> entrer le montant versé <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="number" class="form-control" id="amount_paid" placeholder="{{$tranche_amount}} par tranche">
                            <div class="text-danger small d-none" id="amount_paid_error"></div>
                        </div>
                        <div class="col-12 mt-3">
                            <label class="form-label"> Matricule <span class="text-danger fw-bolder">*</span>:</label>
                            <input type="text" class="form-control" id="student_identifier" value="{{$student->matricule}}" readonly>
                            <div class="text-danger small d-none" id="student_identifier_error">Ce champ est requis</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success"  id="new-payment-btn" data-student="">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>


    <div>
        <h2>Informations de l'étudiant</h2>
    </div>
    <div class="">
        <div class="row">
            <div class="col-md-4 pt-4" style="border: 1px solid grey; border-radius: 20px;border-radius: 20px;margin-right:2%; margin-bottom: 2%" >
                <div class="card-header" >
                    <h3 class="text-center" style="font-family: 'Times New Roman'; color: black">
                        <span class="text-secondary" style="font-family: 'Times New Roman'">Etudiant / </span>Détails personnel
                    </h3>
                </div>
                <div class="card-body" style="padding: 3%">
                    <div class="row">
                        <div class="">
                            <h4 class="fw-bolder" style="font-family: 'Times New Roman'">Identité <i class="fa fa-home-user"></i></h4>
                            <div class="row">
                                <div class="">
                                    <span class="text-secondary" style="font-size: 20px; font-family: Algerian">Matricule :</span><span class="fw-bolder" style="font-size: 18px; padding-left: 2%; color: black">{{$student->matricule}}</span>
                                </div>
                                <div class="">
                                    <span class="text-secondary" style="font-size: 20px; font-family: Algerian">Nom :</span><span class="fw-bolder" style="font-size: 18px; padding-left: 2%; color: black">{{$student->name}}</span>
                                </div>
                                <div class="">
                                    <span class="text-secondary" style="font-size: 20px; font-family: Algerian">Numero d'appel :</span><span class="fw-bolder" style="font-size: 18px; padding-left: 2%; color: black">{{$student->call_phone_number}}</span>
                                </div>
                                <div class="">
                                    <span class="text-secondary" style="font-size: 20px; font-family: Algerian">Numéro whatsapp :</span><span class="fw-bolder" style="font-size: 18px; padding-left: 2%; color: black">XXXXXXXXX</span>
                                </div>

                            </div>
                            <h4 class="fw-bolder pt-2" style="font-family: 'Times New Roman'">Adresse <i class="fa fa-address-book"></i></h4>
                            <div>
                                <div class="">
                                    <span class="text-secondary" style="font-size: 20px; font-family: Algerian">Email :</span><span class="fw-bolder" style="font-size: 18px; padding-left: 2%; color: black">{{$student->email}}</span>
                                </div>
                                <div class="">
                                    <span class="text-secondary" style="font-size: 20px; font-family: Algerian">Ville de résidence :</span><span class="fw-bolder" style="font-size: 18px; padding-left: 2%; color: black">XXXXXXXXX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 pt-4" style="box-shadow: 2px 4px 15px gray; border-radius: 20px">
                <div class="card-header text-white">
                    <h3 class="" style="font-family: 'Times New Roman'; color: black">
                        <span class="text-secondary">Etudiant / </span>Statut des paiements
                    </h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center fw-bolder" style="font-family: 'Times New Roman'">Liste des paiements <span style="font-size: 17px; color: #0652fc"><a
                                href="#" data-bs-toggle="modal" data-bs-target="#new-payment-modal"> <i class="fa fa-plus-square" style="color: orangered"></i> add</a></span></h3>
                    <div>
                        <div class="row" style="overflow: auto">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover small" id="student_round_table">
                                    <thead class="table-light iq-border-radius-5">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Mois courrent</th>
                                        <th class="text-center">Montant à payer</th>
                                        <th class="text-center">Tranche1</th>
                                        <th class="text-center">Tranche2</th>
                                        <th class="text-center">Statut du paiement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{$i = 0}}
                                    @foreach($student_payment->billPayments as $month_payment)
                                        <tr>
                                            <td class="text-center fw-bolder">{{$i}}</td>
                                            <td class="text-center">{{$month_payment->month_label}}</td>
                                            <td class="text-center text-info fw-bolder">{{$month_payment->remaining_amount + $month_payment->amount_paid}}</td>
                                            <td class="text-center fw-bolder bg-label-{{$month_payment->tranche1 ? 'success' : 'danger'}}">{{$month_payment->tranche1 ? 'True' : 'False'}}</td>
                                            <td class="text-center fw-bolder bg-label-{{$month_payment->tranche2 ? 'success' : 'danger'}}">{{$month_payment->tranche2 ? 'True' : 'False'}}</td>
                                            <td class="text-center fw-bolder bg-label-{{($month_payment->tranche1 and $month_payment->tranche2) ? 'success' : 'danger'}} ?>"> {{($month_payment->tranche1 and $month_payment->tranche2) ? 'Payé' : 'Non payé'}} </td>
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
        <div class="row text-center">
            <div style="padding-top: 4%">
                <a
                    href="#"
                    class="small text-white"
                    style="background-color: orangered; padding:1%; border-radius: 20px"
                    data-bs-toggle="modal" data-bs-target="#new-payment-modal"
                >
                    Effectuer un paiement
                </a>
            </div>
        </div>
    </div>
    <div class="d-none">
        <input type="text" value="{{$student->id}}" id="student_id">
        <input type="text" value="{{$round->id}}" id="round_id">
        <input type="text" value="{{$student_payment->id}}" id="student_payment_id">
        <input type="text" value="{{$round->round_level}}" id="round_level">
        <input type="text" value="{{$participation_id}}" id="participation_id">
        <input type="text" data-state-modal="0" id="state_modal">
    </div>
@endsection
@section('other-js')
    <script>
        $(document).ready(function (){
            const tab_amount = {
                'tranche_level_1' : 2500,
                'tranche_level_2' : 5000,
                'tranche_level_3' : 7500
            }
            
            // fonction permettant de faire le paiement des fras de formation d'un éudiant
            // on commence par récupérer les informations de la page qui nous seront utiles.
            // certaines pour veifier si l'étudiant appartient à la formation qu'il souhaite payer
            // et d'autre pour initier réellement le paiement
            $('#new-payment-btn').on('click', function (event){
                event.preventDefault();
                const amount_paid           = $('#amount_paid').val();
                const student_identifier    = $('#student_identifier').val();
                const student_id            = $('#student_id').val();
                const round_id              = $('#round_id').val();
                const student_payment_id    = $('#student_payment_id').val();
                const participation_id      = $('#participation_id').val();

                const round_level        = $('#round_level').val();

                const state_modal           = parseInt($('#state_modal').attr('data-state-modal'));

                const amount_paid_error = $('#amount_paid_error')

                // recherche des éléments indispensable à l'identification d'un étudiant dans le système
                if (
                    amount_paid.length === 0 
                ){
                    amount_paid_error.empty().text('Ce champ est requi');
                    amount_paid_error.removeClass('d-none');
                    //showCustomSweetAlert("s", 'error');
                    //console.log();
                    return;
                }else{
                    console.log("****", amount_paid.length)
                    
                    amount_paid_error.addClass('d-none');
                }
                const tranche_level = "tranche_level_"+round_level
                const tranche_amount = tab_amount[tranche_level]                
                if (
                    amount_paid % tranche_amount != 0
                ){
                    console.log("tranche level est :",tranche_amount ,"montant payé:", amount_paid, 'modulo:', amount_paid % tranche_amount ,'roud_level :',round_level)
                    amount_paid_error.empty().text(amount_paid + 'FCFA ne couvrira pas une des tranches de paiement');
                    amount_paid_error.removeClass('d-none');
                    console.log(amount_paid.parseInt)
                    return;
                }else{
                    console.log(amount_paid)
                    amount_paid_error.addClass('d-none');
                }

                // costruction du tableau de données à envoyer au backend
                const payment_data = {
                    'amount_paid'           : amount_paid,
                    'student_identifier'    : student_identifier,
                    'student_id'            : student_id,
                    'round_id'              : round_id,
                    'participation_id'      : participation_id,
                    'student_payment_id'    : student_payment_id
                }

                console.log("données de paiement:", payment_data);
                // requete http pour traiter la requete
                $.ajax({
                    url : "{{route('system.admin.student.paid_month')}}",
                    method: 'POST',
                    data : JSON.stringify(payment_data),
                    headers : {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    },
                    success: function (response){
                        if (response.status_code === 200){
                            Swal.fire({
                                text: response.message,
                                icon: "success"
                            })

                            setTimeout(function (){
                                window.location.reload();
                            },2000);
                        }else{
                            Swal.fire({
                                text: response.message,
                                icon: "error"
                            })
                        }
                    },
                    error: function(response){
                        Swal.fire({
                            text: response.message,
                            icon: "error"
                        })
                    }
                })


            })





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
