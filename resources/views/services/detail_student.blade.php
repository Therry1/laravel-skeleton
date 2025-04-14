@extends('layouts.v2.main-v2')

@section('title', 'Détails un étudiant')

@section('other-css')
    <link rel="stylesheet" href="{{ asset('v2/css/apex-charts.css') }}" />
    <link href="{{ asset('css/datatables.min.css') }}" rel='stylesheet' />
@endsection



@section('content')

    <div class="modal fade" id="student-payment-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">
                        <div>
                            Effectuer un paiement <span class="fa fa-cash-register text-success mx-1"></span>
                        </div>
                        <div id="name_for_modal">

                        </div>
                    </h5>
                </div>
                <div class="modal-body" id="detailBody">
                    <div class="row">
                        <div class="card-6 mt-3">
                            <label class="form-label"> Tranche à payer:</label>
                            <select name="" id="tranche_to_paid" class="form-control">
                                <option value="1">Tranche1</option>
                                <option value="2">Toutes les tranches</option>
                            </select>
                        </div>
                        <div class="card-6 mt-3">
                            <label class="form-label"> Niveau de formation:</label>
                            <input type="text" class="form-control" value="" id="current_level_formation" readonly>
                        </div>
                        <div class="card-6 mt-3">
                            <label class="form-label"> Nouveau Montant (FCFA)</label>
                            <input type="number" class="form-control" placeholder="enter le montant de la tranche choisi" id="amount_paid">
                        </div>
                        <div class="text-danger fst-italic small d-none" id="amount_paid_error"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" data-studentid="" id="save-payment">Payer</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="student-complet-payment-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Completer le paiement</h5>
                </div>
                <div class="modal-body" id="detailBody">
                    <div id="loader" class="text-center text-info mx-1 loader">
                        <div class="spinner-border" role="status">
                            <span class="sr-only"> Recherche...</span>
                        </div>
                    </div>
                    <div class="row d-none" id="body_payment_completion">
                        <div class="card-6 mt-3">
                            <label class="form-label"> Montant actuel (FCFA)</label>
                            <input type="number" class="form-control" id="current_amount_payment" value="2500" readonly>
                        </div>
                        <div class="card-6 mt-3">
                            <label class="form-label"> Nouveau Montant (FCFA)</label>
                            <input type="number" class="form-control" id="new_amount" placeholder="enter le montant de completion">
                            <div class="text-danger small d-none" id="new_amount_error"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" data-paymentid="" id="save_payment_completion">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card" style="background-color: #E8E8E8">
            <div class="card-header d-flex justify-content-between">
                <div class="fw-bolder fst-italic">DETAIL D'UN ETUDIANT <span class="fa fa-info-circle text-info"></span></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <img src="{{asset('images/avatar-homme.png')}}" alt="avatar" width="72px" height="72px">
                    </div>
                    <div class="col-md-4">
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Nom      : </span><span style="text-transform: uppercase">{{$student->name}}</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Fillière : </span><span style="text-transform: uppercase">{{$student->program}}</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Option   : </span><span style="text-transform: uppercase">{{$student->choice_option}}</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">STATUT   : </span><span class="text-danger" style="text-transform: uppercase">INCONFORME</span>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-3">
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Sexe      : </span><span>Masculin/Feminin</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Age : </span><span>__ an(s)</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Faculté   : </span><span>{{$student->school_name}}</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Tel   : </span><span>{{$student->phone_number}}</span>
                        </div>
                        <div  class="fw-bolder small">
                            <span class="fw-bolder">Niveau de formation  : </span><span class="text-info">{{$student->level_formation}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header text-center fw-bolder">PARAMETRES DE FORMATION/ <a href="#" data-bs-target="#student-payment-modal" data-bs-toggle="modal" onclick="organize_payment_modal(<?php echo $student->id.","."'$student->name'"."  ,".$student->level_formation; ?>)" class="{{$month_is_paid ? 'd-none':''}}">Faire un paiement</a></div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover small" id="detailStudentList">
                            <thead class="table-light iq-border-radius-5">
                                <tr>
                                    <th scope="col"><span style="font-weight: bold;">#</span></th>
                                    <th scope="col"><span style="font-weight: bold;">Mois courrent</span></th>
                                    <th scope="col"><span style="font-weight: bold;">Tranche1</span></th>
                                    <th scope="col"><span style="font-weight: bold;">Tranche2</span></th>
                                    <th scope="col"><span style="font-weight: bold;">Montant</span></th>
                                    <th scope="col"><span style="font-weight: bold;">Reste</span></th>
                                    <th scope="col"><span style="font-weight: bold;">options</span></th>
                                </tr>
                            </thead>
                            <tbody id="detailStudent">
                                <?php $i=0; ?>
                                @foreach($student->studentPayment as $paymentItem)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td>{{$paymentItem->current_month}}</td>
                                        <td class="fw-bolder <?php if($paymentItem->tranche1) echo 'text-success'; else echo 'text-danger'; ?>"><?php if($paymentItem->tranche1) echo 'Payé'; else echo 'Non Payé'; ?></td>
                                        <td class="fw-bolder <?php if($paymentItem->tranche2) echo 'text-success'; else echo 'text-danger'; ?>"><?php if($paymentItem->tranche2) echo 'Payé'; else echo 'Non Payé'; ?></td>
                                        <td>{{$paymentItem->amount_paid}}</td>
                                        <td class="{{$paymentItem->stay_to_paid == 0 ? 'text-info':'text-danger'}}">{{$paymentItem->stay_to_paid}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    @if($paymentItem->stay_to_paid != 0)
                                                        <a class="dropdown-item" href="#" onclick="read_current_amount_for_complet({{$paymentItem->id}})" data-bs-target="#student-complet-payment-modal" data-bs-toggle="modal"><span class="fa fa-edit text-success mx-1"></span>Completer</a>
                                                    @endif
                                                    <a class="dropdown-item" href="#"><span class="fa fa-notes-medical text-danger mx-1"></span>Bulletin</a>
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

        const price_level_1 = 5000;
        const price_level_2 = 10000;
        const price_level_3 = 15000;


        $('.select2').select2({
            width: "100%",
            allowClear: true,
        });

        $('#tranche_to_paid').select2({
            width: "100%",
            allowClear: true,
            dropdownParent: $('#student-payment-modal')
        });

        function organize_payment_modal(student_id , student_name , level_formation){
            console.log(student_name);
            $('#name_for_modal').text(student_name)
            $('#current_level_formation').val(level_formation)
            $('#save-payment').attr('data-studentid', student_id)
        }

        function read_current_amount_for_complet(payment_id){

            $('#save_payment_completion').attr('data-paymentid', payment_id);
            const current_amount_payment = $('#current_amount_payment')
            const loader = $('#loader');
            const body_payment_completion = $('#body_payment_completion')
            loader.removeClass('d-none');
            body_payment_completion.addClass('d-none');

            $.ajax({
                url : '{{route('read.current_amount_formation',':paymentId')}}'.replace(':paymentId',payment_id),
                type: 'GET',
                success: function (response){
                    if (response.status_code === 200){
                        current_amount_payment.val(response.current_amount_inscription);
                        body_payment_completion.removeClass('d-none');
                        loader.addClass('d-none');
                    }else{
                        Swal.fire({
                            text: response.message,
                            icon: 'error'
                        });
                        $('#student-complet-payment-modal').modal('hide');
                    }
                }
            })
        }

        $('#save_payment_completion').on('click', function (e){
            e.preventDefault();
            const current_amount_payment = $('#current_amount_payment').val();
            const new_amount = $('#new_amount').val();
            const new_amount_error = $('#new_amount_error');
            const payment_id = $(this).attr('data-paymentid');

            if(new_amount.toString().length === 0 || parseInt(new_amount) === 0 ){
                new_amount_error.text('le montant de completion est requis');
                new_amount_error.removeClass('d-none');
                return;
            }else{
                new_amount_error.addClass('d-none');
            }

            if (parseInt(new_amount) !== parseInt(current_amount_payment)){
                new_amount_error.text('le montant de completion doit etre de'+ current_amount_payment);
                new_amount_error.removeClass('d-none');
                return;
            }else{
                new_amount_error.addClass('d-none');
            }

            $.ajax({
                url : '{{route('update.current_amount_formation', ':paymentId')}}'.replace(':paymentId', payment_id),
                type: 'PUT',
                data: JSON.stringify({
                    'new_amount'   : new_amount,
                }),
                headers: {
                    'X-CSRF-TOKEN'  : `{{csrf_token()}}`,
                    'content-type'  : 'application/json'
                },
                success: function (response){
                    if (response.status_code === 200){
                        Swal.fire({
                            text: response.message,
                            icon: 'success'
                        });
                        setTimeout(function (){
                            window.location.reload();
                        },2000);
                    }else{
                        Swal.fire({
                            text : 'Paiement non enregistré',
                            icon : 'error'
                        })
                    }
                }
            })
        });

        $('#save-payment').on('click', function (e){
            e.preventDefault();

            const tranche_to_paid = $('#tranche_to_paid').val();
            const student_id = $(this).attr('data-studentid');
            const current_level_formation = $('#current_level_formation').val();
            const amount_paid = $('#amount_paid').val();
            const amount_paid_error = $('#amount_paid_error');

            if (parseInt(current_level_formation) === 1 && parseInt(tranche_to_paid) === 1 && parseInt(amount_paid) !== price_level_1/2)
            {
                amount_paid_error.text('Le montant doit etre de 2.500FCFA');
                amount_paid_error.removeClass('d-none');
                return;
            }else{
                amount_paid_error.addClass('d-none');
            }

            if (parseInt(current_level_formation) === 1 && parseInt(tranche_to_paid) === 2 && parseInt(amount_paid) !== price_level_1)
            {
                amount_paid_error.text('Le montant doit etre de 5.000FCFA');
                amount_paid_error.removeClass('d-none');
                return;
            }else{
                amount_paid_error.addClass('d-none');
            }

            if (parseInt(current_level_formation) === 2 && parseInt(tranche_to_paid) === 1 && parseInt(amount_paid) !== price_level_2/2)
            {
                amount_paid_error.text('Le montant doit etre de 5.000FCFA');
                amount_paid_error.removeClass('d-none');
                return;
            }else{
                amount_paid_error.addClass('d-none');
            }

            if (parseInt(current_level_formation) === 2 && parseInt(tranche_to_paid) === 2 && parseInt(amount_paid) !== price_level_2)
            {
                amount_paid_error.text('Le montant doit etre de 10.000FCFA');
                amount_paid_error.removeClass('d-none');
                return;
            }else{
                amount_paid_error.addClass('d-none');
            }

            console.log(current_level_formation ,tranche_to_paid ,amount_paid, price_level_3);

            if (parseInt(current_level_formation) === 3 && parseInt(tranche_to_paid) === 1 && parseInt(amount_paid) !== price_level_3/2)
            {
                amount_paid_error.text('Le montant doit etre de 7.500FCFA');
                amount_paid_error.removeClass('d-none');
                return;
            }else{
                amount_paid_error.addClass('d-none');
            }

            if (parseInt(current_level_formation) === 3 && parseInt(tranche_to_paid) === 2 && parseInt(amount_paid) !== price_level_3)
            {
                amount_paid_error.text('Le montant doit etre de 15.000FCFA');
                amount_paid_error.removeClass('d-none');
                return;
            }else{
                amount_paid_error.addClass('d-none');
            }

            $.ajax({
                url : '{{route('student.store.payment', ':studentId')}}'.replace(':studentId', student_id),
                type: 'POST',
                data: JSON.stringify({
                    'current_level_formation'   : current_level_formation,
                    'tranche_to_paid'           : tranche_to_paid,
                    'amount_paid'               : amount_paid,
                    'student_id'                : student_id
                }),
                headers: {
                    'X-CSRF-TOKEN'  : `{{csrf_token()}}`,
                    'content-type'  : 'application/json'
                },
                success: function (response){
                    if (response.status_code === 200){
                        Swal.fire({
                            text: 'Paiement enregistré avec success',
                            icon: 'success'
                        });
                        setTimeout(function (){
                            window.location.reload();
                        },2000);
                    }else{
                        Swal.fire({
                            text : 'Paiement non enregistré',
                            icon : 'error'
                        })
                    }
                }
            })
        })

        $("#detailStudentList").DataTable({
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
