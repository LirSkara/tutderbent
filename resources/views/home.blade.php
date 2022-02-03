@extends('layouts.main')
@section('content')
<div class="container col-xxl-7 mt-3 px-3">
    <div class="text-center mt-4">
        <a href="/" class="text-decoration-none text-dark">
            <img src="/images/fortress.jpg" class="col-3 col-lg-2 col-lg-1 mb-2" alt="Bootstrap Themes" width="40"><br>
            <h1 class="display-5 d-inline lh-1 mb-1 text-center">Тут Дербент</h1>
        </a>
    </div>
    <div class="form-floating mt-3 mt-lg-5">
        <input type="search" class="form-control border-success border-2 br-search" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput"><i class="bi bi-search"></i> Что будем искать?</label>
    </div>
</div>

<div class="bg-light pt-1 pb-3 mt-3">
<div class="container col-xxl-7 px-3">
    <div class="shadow bg-white border rounded-3 mt-2">
        <div>
            <div class="row mb-2 mt-2 mx-1 border-bottom pb-2">
                <div class="col">
                <span class="py-1 text-dark text-decoration-none">
                    <i class="bi bi-list"></i> Главное меню
                </span>
                </div>
            </div>
            <ul class="row row-cols-4 px-0 py-0 my-3 text-center mx-0 rounded-3 small">
                <li class="col px-0 list-group">
                    <a href="/page/catalog.php" class="text-decoration-none link-dark">
                        <i class="bi bi-book text-primary d-block fs-3"></i>Каталог
                    </a>
                </li>
                <li class="col px-0 list-group">
                    <a href="/page/news.php" class="text-decoration-none link-dark">
                        <i class="bi bi-newspaper text-info d-block fs-3"></i>Новости
                    </a>
                </li>
                <li class="col px-0 list-group">
                    <a href="/page/ads.php" class="text-decoration-none link-dark">
                        <i class="bi bi-layout-text-sidebar text-warning d-block fs-3"></i>Объявления
                    </a>
                </li>
                <li class="col px-0 list-group">
                    <a href="/page/market.php" class="text-decoration-none link-dark">
                        <i class="bi bi-shop text-danger d-block fs-3"></i>Маркет
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container col-xxl-7 px-3">
<div class="shadow bg-white rounded-3 p-2 mt-3">
    <div>

    <div class="row mb-2 mt-1 px-1">
        <div class="col">
        <a href="" class="px-2 py-1 text-dark text-decoration-none">
            <i class="bi bi-newspaper"></i> Новости сейчас
        </a>
        </div>

        <div class="col-4 text-end">
        </div>
    </div>

    <div class="text-dark px-2">
        <ul class="nav nav-pills small" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Последняя новость</button>
        </li>
        </ul>
        <div class="tab-content mt-3 px-1" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="mb-3"><a href="page/new.php?id=12" class="text-decoration-none link-dark"><h5 class="fw-normal">Дербенту придали особый статус</h5><p class="display-6 fs-6">Закон «Об особом статусе города Дербента как исторического и культурного центра Республики Дагестан» приняли депутаты дагестанского парламента на 56-сессии во втором окончательном чтении.</p></a>
            </div>

        </div>
        </div>

    </div>
    </div>
</div>
</div></div>
@endsection