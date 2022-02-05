@extends('layouts.main')
@section('content')
<div class="container border-bottom shadow-sm col-xxl-7 mt-3 pb-1 px-3">
    <div class="text-center mt-4">
        <a href="/" class="text-decoration-none text-dark">
            <img src="/images/fortress.jpg" class="col-3 col-lg-2 col-lg-1 mb-2" alt="Bootstrap Themes" width="40"><br>
            <h1 class="display-5 d-inline lh-1 mb-1 text-center">Тут Дербент</h1>
        </a>
    </div>
    <form action="">
        <div class="form-floating mt-3 mt-lg-5">
            <input type="search" class="form-control border-success border-2 br-search" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" class="small ms-2"><i class="bi bi-search"></i> Что будем искать?</label>
        </div>
    </form>
            <ul class="d-flex list-unstyled mt-2 mb-1 py-1 scroll-none small hesh-buttons">
                <li><a href="" class="text-dark text-decoration-none rounded-3 py-1 px-2 mx-1 d-flex">
                        <span>Бейсболки</span>
                    </a></li>
                <li><a href="" class="text-dark bg-light text-decoration-none rounded-3 py-1 px-2 mx-1 d-flex">
                        <span>Бомберы</span>
                    </a></li>
                <li><a href="" class="text-dark bg-light text-decoration-none rounded-3 py-1 px-2 mx-1 d-flex">
                        <span>Ботинки</span>
                    </a></li>
                <li><a href="" class="text-dark bg-light text-decoration-none rounded-3 py-1 px-2 mx-1 d-flex">
                        <span>Брюки</span>
                    </a></li>
                <li><a href="" class="text-dark bg-light text-decoration-none rounded-3 py-1 px-2 mx-1 d-flex">
                        <span>Варежки</span>
                    </a></li>
                <li><a href="" class="text-dark bg-light text-decoration-none rounded-3 py-1 px-2 me-2 d-flex">
                        <span class="me-1">Варежки</span>
                    </a></li>
                <li><a href="" class="text-dark bg-light text-decoration-none rounded-3 py-1 px-2 me-2 d-flex">
                        <span>Ветровки</span>
                    </a></li>
            </ul>
            <div class="row g-2 small">
                <div class="col-6 col-lg-3">
                    <div class="bg-light rounded-3">
                        <div class="row ps-3">
                            <div class="col-6 fs-3 pe-0 pt-1">
                                <i class="bi bi-calendar-week text-danger"></i> <span class="fs-2">4</span>
                            </div>
                            <div class="col small py-1 px-0">
                                <span class="fw-bold">Февраля</span><br>
                                Пятница
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-light rounded-3">
                        <div class="row ps-2">
                            <div class="col-6 pt-1 fs-3 pe-0">
                                <img src="https://yastatic.net/weather/i/icons/islands/32/bkn-d.png" alt="..." width="30"> +5°
                            </div>
                            <div class="col small py-1 ps-1">
                                Днем +6°<br>
                                Завтра +5°
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
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

<div class="bg-light pt-1 pb-3 mt-1">
<div class="container col-xxl-7 px-0">
    <div class="row row-cols-1 row-cols-lg-2 mx-0">
        <div class="col">
            <div class="shadow bg-white border rounded-3 mt-2">
                <img src="https://tutderbent.ru/media/images/news/967302825.jpg" class="img-fluid rounded-top img-cover w-100" alt="Дербенту придали особый статус">
                <div class="text-dark px-3 pt-2">
                    <div class="mb-3">
                        <a href="page/new.php?id=12" class="text-decoration-none link-dark">
                            <div class="fs-5 mb-1"><i class="bi bi-newspaper text-info me-1"></i> Дербенту придали статус</div>
                            <p class="display-6 fs-6">Закон «Об особом статусе города Дербента как исторического и культурного центра Республики Дагестан» приняли депутаты дагестанского парламента на 56-сессии во втором окончательном чтении.</p>
                        </a>
                        <div>
                            <span class="bg-light btn">3 Февраля 2022 г.</span>
                            <span class="bg-light btn"><i class="bi bi-person"></i> Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="shadow bg-white border rounded-3 mt-2">
                <img src="https://tutderbent.ru/media/images/list/1460494246.jpeg" class="img-fluid rounded-top img-cover w-100" alt="Дербенту придали особый статус">
                <div class="text-dark px-3 pt-2">
                    <div class="mb-3">
                        <div>
                            <span class="bg-light btn">
                                <span class="text-warning small">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </span>
                            <span class="ms-1">5</span>
                            </span>
                            <span class="bg-light btn"><i class="bi bi-chat"></i> 5</span>
                            <span class="bg-light btn"><i class="bi bi-image"></i> 12</span>
                        </div>
                        <a href="page/new.php?id=12" class="text-decoration-none link-dark">
                            <div class="fs-5 mb-1"><i class="bi bi-book text-primary me-1"></i> Рандеву Ресторан</div>
                            <p class="mb-2 text-muted"><i class="bi bi-geo-alt-fill"></i> Г.Дербент ул.Гагарина 10</p>
                            <p class="display-6 fs-6">Lounge-Cafe “Randevu” - это сочетание Европейской, Японской и Кавказской кухни во вкуснейших блюдах</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection