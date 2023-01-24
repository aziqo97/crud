@extends('layouts.app')

@section('content')

    <div class="container">
        <div class=" text-center mt-5 ">

            <h1>Форма для регистратсия ползователя</h1>


        </div>

@foreach($post as $post)
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form  action="" enctype="multipart/form-data" method="post">
                                <div class="controls">
                                    <div class="row">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Введите имя</label>
                                                <input id="form_name" type="text" name="nomi" class="form-control" value="{{ $post->nomi }}" required="required"
                                                       data-error="Введите имя.">
                                                <input  type="hidden" name="id"  value="{{ $post->id }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Введите заказы</label>
                                                <input id="form_name" type="text" name="izox" class="form-control"
                                                       value="{{ $post->izox }}" required="required"
                                                       data-error="Введите заказы.">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Введите сумму</label>
                                                <input id="form_name" type="text" name="summa" class="form-control"
                                                       value="{{ $post->summa }}" required="required"
                                                       data-error="Введите сумму.">
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
        @endforeach
    </div>

@endsection
