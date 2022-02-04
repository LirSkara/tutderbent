<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
{{-- Навбар --}}
<nav class="mt-2">
  <div class="container-fluid d-flex flex-wrap">
    <ul class="nav me-auto small">

    {{-- <li class="dropdown">
      <button class="btn bg-light border border-custom me-1 py-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-globe"></i>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="">English</a></li>
        <li><a class="dropdown-item" href="">Русский</a></li>
      </ul>
    </li> --}}
      <li class="nav-item bg-light btn border px-1 me-1">
        <a href="tel:+79618888837" class="link-dark px-2"><i class="bi bi-telephone"></i></a>
      </li>
      <li class="nav-item bg-light btn border px-1 me-1">
        <a href="#" class="link-dark px-2"><i class="bi bi-instagram"></i></a>
      </li>
      <li class="nav-item bg-light btn border px-1">
        <a href="" class="link-dark px-2"><i class="bi bi-whatsapp"></i></a>
      </li>
    </ul>
    <ul class="nav">
      <li class="nav-item"><a data-bs-toggle="modal" data-bs-target="#sign" href="#" class="btn bg-success text-white border-custom px-2 py-1"><i class="bi bi-box-arrow-in-right"></i> Войти</a></li>
    </ul>
  </div>
</nav>
  @yield('content')
  <nav class="navbar navbar-light">
    <div class="container pt-3">
      <div class="btn-group dropup">
        <button class="btn bg-light border border-custom dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-globe"></i> Русский
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="/system/handler.php?c_lng=en&amp;l=https://tutderbent.ru/">English</a></li>
        <li><a class="dropdown-item" href="/system/handler.php?c_lng=ru&amp;l=https://tutderbent.ru/">Русский</a></li>
        </ul>
      </div>
      <div class="d-flex">
        <ul class="nav mx-auto pt-0">
        <li class="nav-item bg-light border btn border-custom px-1 me-1">
        <a href="tel:+79618888837" class="link-dark px-2 py-1"><i class="bi bi-telephone"></i></a>
      </li>
      <!-- <li class="nav-item bg-gray border-custom px-1 me-1">
        <a href="#" class="nav-link link-dark px-2 py-1"><i class="bi bi-instagram"></i></a>
      </li> -->
      <li class="nav-item bg-light border btn border-custom px-1">
        <a href="https://wa.me/79618888837?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%F0%9F%91%8B%20%D0%AF%20%D0%BF%D0%B8%D1%88%D1%83%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%A2%D1%83%D1%82%20%D0%94%D0%B5%D1%80%D0%B1%D0%B5%D0%BD%D1%82." class="link-dark px-2 py-1"><i class="bi bi-whatsapp"></i></a>
      </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="text-center text-muted mb-4">© 2021 Тут Дербент</div>
</body>
</html>