@extends('layouts.app')

@section('content')

    <div class="container">
        <div class=" text-center mt-5 ">

            <h1>Post yaratish formasi</h1>


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
                                                <label for="form_name">Post nomini kiriting</label>
                                                <input id="form_name" type="text" name="nomi" class="form-control"
                                                       placeholder="Iltimos post nomini kiriting *" required="required"
                                                       data-error="Iltimos post nomini kiriting.">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Post rasmini yuklang</label>
                                                <input id="form_name" type="file" name="rasmi" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Izox *</label>
                                                <textarea id="form_message" name="izox" class="form-control"
                                                          placeholder="Iltimos izoxni kiriting" rows="4"
                                                          required="required"
                                                          data-error="Iltimos izoxni kiriting"></textarea>
                                            </div>
                                        </div>
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
