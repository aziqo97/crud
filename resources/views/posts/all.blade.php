@extends('layouts.app')

@section('content')

    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Место</th>
      <th>Name</th>
      <th>Заказы</th>
      <th>Сумма</th>
      <th></th>
      <th style="color: #e2fefe;" scope="col"><a href="/post/create"><img class="ico" src="/img/add.png" alt=""></a></th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 0;
  ?>
  @foreach($post as $post)
<?php
    $i++;
    ?>

    <tr>
        <td style="width: 1px;">
            {{ $i }}
        </td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="/storage/post-photos/{{ $post->rasm }}"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{ $post->nomi }}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{ $post->izox }} шт.</p>
      </td>
      <td>{{ $post->summa }} Сум</td>
                <td><a href="/post/delete/{{ $post->id }}"><img class="ico" src="/img/del.png" alt=""></a></td>
                <td><a href="/post/{{ $post->id }}/edit"><img class="ico" src="/img/edit.png" alt=""></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
