@extends('layouts.main')
@section('content')
<div class="bg-light py-1 mt-3">

  <nav class="my-2 mx-3" aria-label="breadcrumb">
    <ol class="breadcrumb small">
      <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="/">Главная</a></li>
      <li class="breadcrumb-item active" aria-current="page">Каталог заведений</li>
    </ol>
  </nav>

  <div class="shadow bg-white p-2 mt-3 mx-2 rounded-3 mb-3">
    <div class="row row-cols-3 row-cols-lg-6 pb-2">
      <a href="/page/position.php?id=1" class="col text-center my-2 text-decoration-none link-dark">
          <img class="my-1 mx-auto col-6 d-block" src="https://tutderbent.ru/media/images/arhc.png" alt="...">
          <span class="small">Где погулять</span>
      </a>
    </div>
  </div>

</div>
@endsection