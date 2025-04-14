@extends('layouts.v2.main-v2')

@section('title', 'Modifier un etudiant')

@section('other-css')
    <link rel="stylesheet" href="{{ asset('v2/css/apex-charts.css') }}" />
    <link href="{{ asset('css/datatables.min.css') }}" rel='stylesheet' />
@endsection



@section('content')
    <div class="modal fade" id="add-student-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Nouvelle étudiant</h5>
                </div>
                <div class="modal-body" id="detailBody">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label"> nom et prenom</label>
                            <input type="text" class="form-control" placeholder="entrez le nom de l etudiant">
                        </div>
                        <div class="col-6">
                            <label class="form-label"> Fillière d'école</label>
                            <input type="text" class="form-control" placeholder="entrez la fillière de l etudiant">
                        </div>
                        <div class="col-4">
                            <label class="form-label"> Faculté</label>
                            <select name="" id="faculté" class="form-control select2">
                                <option value="">FS</option>
                                <option value="">FASEG</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label"> Niveau scolaire</label>
                            <select name="" id="niveau" class="form-control select2">
                                <option value="">Niveau 1</option>
                                <option value="">Niveau 2</option>
                                <option value="">Niveau 3</option>
                                <option value="">Niveau 4</option>
                                <option value="">Niveau 5</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label"> option choisie</label>
                            <select name="" id="option" class="form-control select2">
                                <option value="">Devellopement</option>
                                <option value="">Reseau</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label"> Inscrit ?</label>
                            <select name="" id="inscrit" class="form-control select2">
                                <option value="">oui</option>
                                <option value="">non</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label"> Montant versé</label>
                            <input type="number" class="form-control" placeholder="entrez le montant versé">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>MODIFIER UN ETUDIANT <span class="fa fa-edit text-info fa-2x"></span></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label class="form-label"> nom et prenom</label>
                            <input type="text" class="form-control" value="entrez le nom de l etudiant">
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label"> Fillière d'école</label>
                            <input type="text" class="form-control" placeholder="entrez la fillière de l etudiant">
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Faculté</label>
                            <select name="" id="faculté" class="form-control select2">
                                <option value="">FS</option>
                                <option value="">FASEG</option>
                            </select>
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> Niveau scolaire</label>
                            <select name="" id="niveau" class="form-control select2">
                                <option value="">Niveau 1</option>
                                <option value="">Niveau 2</option>
                                <option value="">Niveau 3</option>
                                <option value="">Niveau 4</option>
                                <option value="">Niveau 5</option>
                            </select>
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label"> option choisie</label>
                            <select name="" id="option" class="form-control select2">
                                <option value="">Devellopement</option>
                                <option value="">Reseau</option>
                            </select>
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label"> Inscrit ?</label>
                            <select name="" id="inscrit" class="form-control select2">
                                <option value="">oui</option>
                                <option value="">non</option>
                            </select>
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label"> Montant versé</label>
                            <input type="number" class="form-control" placeholder="entrez le montant versé">
                        </div>
                    </div>
                    <div class="mt-3" style="margin-left: 83%">
                        <button class="btn btn-success"><span class="fa fa-edit"></span>Modifier</button>
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

    </script>
    <script src="{{ asset('v2/js/apexcharts.js') }}"></script>
    <script src="{{ asset('v2/js/dashboards-analytics.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
@endsection
