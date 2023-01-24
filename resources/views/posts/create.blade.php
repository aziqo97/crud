@extends('layouts.app')

@section('content')

    <div class="container">
        <div class=" text-center mt-5 ">

            <h1>Форма для регистратсия ползователя</h1>


        </div>


        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form  action="/post/create" enctype="multipart/form-data" method="post">
                                <div class="controls">
                                    <div class="row">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Введите имя</label>
                                                <input id="form_name" type="text" name="nomi" class="form-control"
                                                       placeholder="Введите имя *" required="required"
                                                       data-error="Введите имя.">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Загрузите фотографию</label>
                                                <input id="form_name" type="file" name="rasmi" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Saqlash</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.8 -->
            </div>
            <!-- /.row-->
        </div>
    </div>

@endsection
