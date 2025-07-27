@extends('../layouts/template_customer')

@section('title')      @endsection

@section('css-content')
    <style>

    </style>
@endsection
@section('content')
    <div>
        <div>
            <div class="text-center py-2">
                <h1 class="text-capitalize pt-5">nous contacter <i class="fa fa-square-plus" style="color: orangered"></i></h1>
            </div>
            <div class="text-center pb-2" style="font-size: 10px">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet azdfg</div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <label for="" class="">E-mail <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="therry@gmail.com">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <label for="" class="">Message <span class="text-danger">*</span></label>
                    <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Entrez votre message ..."></textarea>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-6">
                    <button class="btn btn-warning text-capitalize w-100">envoyez votre message</button>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
@endsection
