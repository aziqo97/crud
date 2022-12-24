@extends('layouts.app')

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th style="width: 0px;" scope="col">ID</th>
      <th style="width: 0px;" scope="col">Rasmi</th>
      <th style="width: 0px;" scope="col">Nomi</th>
      <th scope="col">Izox</th>
      <th scope="col"></th>
      <th scope="col"><a href="/post/create"><img class="ico" src="/img/add.png" alt=""></a></th>
    </tr>
  </thead>
  <tbody>
  @foreach($post as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td><img style="border-radius: 20%;" class="ico" src="/storage/post-photos/{{ $post->rasm }}"></td>
      <td>{{ $post->nomi }}</td>
      <td>{{ $post->izox }}</td>
        <td><a href="/post/delete/{{ $post->id }}"><img class="ico" src="/img/del.png" alt=""></a></td>
      <td><img class="ico" src="/img/edit.png" alt=""></td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
