@extends('../layouts/template_customer')

@section('title')  Enregistrement    @endsection

@section('css-content')

    <style>
        .inscription-container{
            padding: 7% 4%;
            background-color: #6479a9;
        }
    </style>
@endsection

@section('content')
    <div class="inscription-container">
        <div class="card">
            <div class="card-header text-center">
                <h3>S'inscrire <i class="fa fa-square-plus" style="color: orangered"></i></h3>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="row">
                        <form action="">
                            <div class="row">
                                <div>
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder">Informations personnelles</h3>
                                        <i class="fa fa-user fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-3">
                                            <label class="form-label"> Ville de résidence <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Selectionner votre ville de formation</option>
                                                <option value="">Garoua</option>
                                                <option value="">Ngaoundéré</option>
                                            </select>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label class="form-label"> Nom et prenom <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" id="student_name" placeholder="entrez le nom de l etudiant">
                                            <div class="text-danger small d-none" id="student_name_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Fillière d'école <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="text" class="form-control" id="student_program" placeholder="entrez la fillière de l etudiant">
                                            <div class="text-danger small d-none" id="student_program_error">Ce champ est requis</div>

                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Faculté <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="student_faculty" class="form-control select2">
                                                <option value="" selected>Selectionnez l ecole</option>
                                                {{--                                        @foreach($propertiesHelpers->faculty as $itemFaculty)--}}
                                                {{--                                            <option value="{{$itemFaculty}}">{{$itemFaculty}}</option>--}}
                                                {{--                                        @endforeach--}}
                                            </select>
                                            <div class="text-danger small d-none" id="student_faculty_error">Ce champ est requis</div>

                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Niveau scolaire <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="student_level" class="form-control select2">
                                                <option value="" selected>Selectionner le niveau</option>
                                                {{--                                        @foreach($propertiesHelpers->schoolLevels as $itemSchoolLevels)--}}
                                                {{--                                            <option value="{{$itemSchoolLevels}}">Niveau {{$itemSchoolLevels}}</option>--}}
                                                {{--                                        @endforeach--}}
                                            </select>
                                            <div class="text-danger small d-none" id="student_level_error">Ce champ est requis</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder ">Informations de formation</h3>
                                        <i class="fa fa-pen-alt fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Ville de formation souhaitée <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Selectionner votre ville de formation</option>
                                                <option value="">Garoua</option>
                                                <option value="">Ngaoundéré</option>
                                            </select>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> option choisie <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="choice_option" class="form-control select2">
                                                <option value="" selected>Choisir l'option</option>
                                                {{--                                        @foreach($propertiesHelpers->choiceOptions as $itemChoiceOptions)--}}
                                                {{--                                            <option value="{{$itemChoiceOptions}}">Option {{$itemChoiceOptions}}</option>--}}
                                                {{--                                        @endforeach--}}
                                            </select>
                                            <div class="text-danger small d-none" id="choice_option_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Niveau de formation choisi <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="formation_level" class="form-control select2">
                                                <option value="" selected>Niveau de formation</option>
                                                {{--                                        @foreach($propertiesHelpers->levelsFormation as $itemLevelsFormation)--}}
                                                {{--                                            <option value="{{$itemLevelsFormation}}">Niveau {{$itemLevelsFormation}}</option>--}}
                                                {{--                                        @endforeach--}}
                                            </select>
                                            <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>

                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder">Contacts</h3>
                                        <i class="fa fa-mobile-android fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Numéro de téléphone whatsapp <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero whatsapp">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Numéro de téléphone d'appelle <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero de téléphone">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Numéro de téléphone d'un proche <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="phone_number" placeholder="entrez le numero d'un proche'">
                                            <div class="text-danger small d-none" id="phone_number_error">Ce champ est requis</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="border-bottom" style="display: flex; justify-content: space-between">
                                        <h3 class="text-black fw-bolder border-bottom">Information de Paiement</h3>
                                        <i class="fa fa-money-check-dollar fa-2x" style="color: orangered"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Moyen de paiement <span class="text-danger fw-bolder">*</span>:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">ORANGE MONEY (OM)</option>
                                                <option value="">MOBILE MONEY (MTN)</option>
                                            </select>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Numéro de paiement <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="tel" class="form-control" id="student_amount_pay" placeholder="entrez le compte débiteur">
                                            <div class="text-danger small d-none" id="student_amount_pay_error">Ce champ est requis</div>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <label class="form-label"> Montant versé <span class="text-danger fw-bolder">*</span>:</label>
                                            <input type="number" class="form-control" id="student_amount_pay" placeholder="entrez le montant versé">
                                            <div class="text-danger small d-none" id="student_amount_pay_error">Ce champ est requis</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <button class="btn btn-primary fw-bolder w-100">S'Inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
