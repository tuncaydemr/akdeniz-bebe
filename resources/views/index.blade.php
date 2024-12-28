<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Akdeniz Bebe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mdb/mdb.min.css') }}">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link rel="stylesheet"
        href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
</head>

<body>
    <header>
        <div class="container-fluid bg-light p-1">
            <p class="text-center mb-0 small">600 TL ve Üzeri Alışverişinizde Kargo Ücretsiz</p>
        </div>
        <nav class="container-fluid position-relative">
            <div class="navbar-top row">
                <div class="col-12 text-center p-2 border-bottom">
                    <a class="mx-2 text-decoration-none text-secondary small" href="{{ route('home') }}">Anasayfa</a>
                    <a class="mx-2 text-decoration-none text-secondary small"
                        href="{{ route('shops') }}">Mağazalarımız</a>
                    <a class="mx-2 text-decoration-none text-secondary small" href="tel:+905355021131">Müşteri
                        Hizmetleri</a>
                </div>
            </div>
            <div
                class="navbar-bottom navbar navbar-expand-lg row py-4 mb-2 border-bottom align-items-center justify-content-center">
                <div class="col">
                    <div class="row justify-content-around mb-5">
                        <div class="col-6 col-lg-2 text-lg-center">
                            @php
                                $settings = App\Models\Settings::all();
                            @endphp

                            @foreach ($settings as $setting)
                                <img src="{{ Storage::url('app/public/assets/images/' . $setting->logo) }}"
                                    alt="Logo" width="125" height="125">
                            @endforeach
                        </div>
                        <div class="col-6 d-lg-none text-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#header">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div id="header" class="d-lg-none collapse bg-secondary">
                            <div class="navbar-nav p-5 my-5">
                                <div class="col-12 mb-5 px-2 position-relative d-flex align-items-center">
                                    <input type="text" class="form-control rounded-5"
                                        placeholder="Aramak istediğiniz ürünü yazınız..." />
                                    <label class="position-absolute end-0 me-3">
                                        <i class="fas fa-search text-secondary fa-lg"></i>
                                    </label>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-around">

                                    @if (Session::has('user'))
                                        <div class="notification-box ms-4">
                                            <a href="{{ route('account') }}"
                                                class="text-white text-decoration-none text-capitalize small d-flex flex-column align-items-center justify-content-center">
                                                <i class="fas fa-user text-white fa-lg mb-1"></i>
                                                Hesabım
                                            </a>
                                        </div>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf

                                            <div class="notification-box mx-3">
                                                <button type="submit"
                                                    class="text-white border-0 bg-transparent text-decoration-none text-capitalize small d-flex flex-column align-items-center justify-content-center">
                                                    <i class="fas fa-user text-white fa-lg mb-1"></i>
                                                    Çıkış Yap
                                                </button>
                                            </div>
                                        </form>
                                    @else
                                        <div class="notification-box mx-4">
                                            <a href="{{ route('loginForm') }}"
                                                class="text-white text-decoration-none text-capitalize small d-flex flex-column align-items-center justify-content-center">
                                                <i class="fas fa-user text-white fa-lg mb-1"></i>
                                                Giriş Yap
                                            </a>
                                        </div>
                                    @endif

                                    <div
                                        class="notification-box d-flex flex-column align-items-center justify-content-center me-4">
                                        <i class="fas fa-heart text-white fa-lg"></i>
                                        <a href="{{ route('favories') }}"
                                            class="text-white text-decoration-none mb-0 my-1 text-capitalize small">Favoriler</a>
                                    </div>

                                    @if (Session::has('user'))
                                        <div class="notification-box d-flex flex-column align-items-center justify-content-center"
                                            id="sepet">
                                            <i class="fas fa-shopping-cart text-white fa-lg"></i>
                                            <a href="{{ route('basket') }}"
                                                class="text-white text-decoration-none mb-0 my-1 text-capitalize small">Sepet</a>
                                        </div>
                                    @else
                                        <div class="notification-box d-flex flex-column align-items-center justify-content-center"
                                            id="sepet">
                                            <i class="fas fa-shopping-cart text-white fa-lg"></i>
                                            <a href="{{ route('loginForm') }}"
                                                class="text-white text-decoration-none mb-0 my-1 text-capitalize small">Sepet</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-5 px-2 position-relative d-none d-lg-flex align-items-center">
                            <input type="text" class="form-control rounded-5"
                                placeholder="Aramak istediğiniz ürünü yazınız..." />
                            <label class="position-absolute end-0 me-3">
                                <i class="fas fa-search text-secondary fa-lg"></i>
                            </label>
                        </div>
                        <div class="col-3 d-none d-lg-flex align-items-center">

                            @if (Session::has('user'))
                                <div class="notification-box ms-4">
                                    <a href="{{ route('account') }}"
                                        class="text-secondary text-decoration-none text-capitalize small d-flex flex-column align-items-center justify-content-center">
                                        <i class="fas fa-user text-secondary fa-lg mb-1"></i>
                                        Hesabım
                                    </a>
                                </div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf

                                    <div class="notification-box mx-3">
                                        <button type="submit"
                                            class="text-secondary border-0 bg-transparent text-decoration-none text-capitalize small d-flex flex-column align-items-center justify-content-center">
                                            <i class="fas fa-user text-secondary fa-lg mb-1"></i>
                                            Çıkış Yap
                                        </button>
                                    </div>
                                </form>
                            @else
                                <div class="notification-box mx-4">
                                    <a href="{{ route('loginForm') }}"
                                        class="text-secondary text-decoration-none text-capitalize small d-flex flex-column align-items-center justify-content-center">
                                        <i class="fas fa-user text-secondary fa-lg mb-1"></i>
                                        Giriş Yap
                                    </a>
                                </div>
                            @endif

                            <div
                                class="notification-box d-flex flex-column align-items-center justify-content-center me-4">
                                <i class="fas fa-heart text-secondary fa-lg"></i>
                                <a href="{{ route('favories') }}"
                                    class="text-secondary text-decoration-none mb-0 my-1 text-capitalize small">Favoriler</a>
                            </div>

                            @if (Session::has('user'))
                                <div class="notification-box d-flex flex-column align-items-center justify-content-center"
                                    id="sepet">
                                    <i class="fas fa-shopping-cart text-secondary fa-lg"></i>
                                    <a href="{{ route('basket') }}"
                                        class="text-secondary text-decoration-none mb-0 my-1 text-capitalize small">Sepet</a>
                                </div>
                            @else
                                <div class="notification-box d-flex flex-column align-items-center justify-content-center"
                                    id="sepet">
                                    <i class="fas fa-shopping-cart text-secondary fa-lg"></i>
                                    <a href="{{ route('loginForm') }}"
                                        class="text-secondary text-decoration-none mb-0 my-1 text-capitalize small">Sepet</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @php
                $menus = App\Models\Menu::all();
            @endphp

            <div class="nav-container container-lg position-absolute w-100">
                <div
                    class="row nav-menu-container position-absolute shadow-sm p-3 w-100 align-items-center justify-content-between bg-danger bg-danger border border-2 border-light">

                    <div class="col nav-dropdown p-0">
                        <a href="#" class="menu-link"> Bebek </a>
                        <div class="row nav-dropdown-menu border border-2 border-danger shadow-sm" id="bebek">
                            <div class="col p-4">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => Str::slug('bebek giyim')]) }}">
                                            <h6>Bebek Giyim</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'bebek-odası']) }}">
                                            <h6>Bebek Odası</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => Str::slug('bebek güvenlik')]) }}">
                                            <h6>Bebek Güvenlik</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'bebek-ayakkabı-&-patik']) }}">
                                            <h6>Bebek Ayakkabı & Patik</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'bebek-bakımı']) }}">
                                            <h6>Bebek Bakımı</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach ($menus as $menu)
                                        @php
                                            $menuSlug = Str::lower(str_replace(' ', '-', $menu->menu));
                                            $filteredAltMenu = App\Models\AltMenu::where('menu_id', $menu->id)->get();
                                        @endphp

                                        @if ($menu->id == 1 || $menu->id == 2 || $menu->id == 3 || $menu->id == 4 || $menu->id == 5)
                                            <div class="col">
                                                <ul class="list-unstyled">

                                                    @foreach ($filteredAltMenu as $altmenu)
                                                        @if ($altmenu->menu_id == 1 || $altmenu->menu_id == 2 || $altmenu->menu_id == 3)
                                                            <li>
                                                                <a
                                                                    href="{{ route('altmenu', ['menu' => $menuSlug, 'altmenu' => Str::slug($altmenu->altmenu), 'id' => $altmenu->id]) }}">
                                                                    {{ $altmenu->altmenu }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col nav-dropdown p-0">
                        <a class="menu-link" style="cursor: pointer"> Çocuk </a>
                        <div class="row nav-dropdown-menu border border-2 border-danger shadow-sm">
                            <div class="col p-4">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => Str::slug('erkek çocuk giyim')]) }}">
                                            <h6>Erkek Çocuk Giyim</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <h6>&nbsp;</h6>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'kız-çocuk-giyim']) }}">
                                            <h6>Kız Çocuk Giyim</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <h6>&nbsp;</h6>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach ($menus as $menu)
                                        @php
                                            $menuSlug = Str::lower(str_replace(' ', '-', $menu->menu));
                                            $filteredAltMenu = App\Models\AltMenu::where('menu_id', $menu->id)->get();
                                        @endphp

                                        @if ($menu->id == 6 || $menu->id == 7)
                                            <div class="col">
                                                <ul class="list-unstyled">

                                                    @foreach ($filteredAltMenu as $altmenu)
                                                        @if ($altmenu->menu_id == 6 || $altmenu->menu_id == 7)
                                                            <li>
                                                                <a
                                                                    href="{{ route('altmenu', ['menu' => $menuSlug, 'altmenu' => Str::slug($altmenu->altmenu), 'id' => $altmenu->id]) }}">
                                                                    {{ $altmenu->altmenu }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col nav-dropdown p-0">
                        <a class="menu-link" style="cursor: pointer"> Araç & Gereç </a>
                        <div class="nav-dropdown-menu border border-2 border-danger shadow-sm">
                            <div class="col p-4">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'bebek-arabası']) }}">
                                            <h6>Bebek Arabası</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'araç-&-gereç']) }}">
                                            <h6>Araç & Gereç</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'akülü-ve-pedallı-araçlar']) }}">
                                            <h6>Akülü Ve Pedallı Araçlar</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach ($menus as $menu)
                                        @php
                                            $menuSlug = Str::lower(str_replace(' ', '-', $menu->menu));
                                            $filteredAltMenu = App\Models\AltMenu::where('menu_id', $menu->id)->get();
                                        @endphp

                                        @if ($menu->id == 8 || $menu->id == 9 || $menu->id == 10)
                                            <div class="col">
                                                <ul class="list-unstyled">

                                                    @foreach ($filteredAltMenu as $altmenu)
                                                        @if ($altmenu->menu_id == 8 || $altmenu->menu_id == 9 || $altmenu->menu_id == 10)
                                                            <li>
                                                                <a
                                                                    href="{{ route('altmenu', ['menu' => $menuSlug, 'altmenu' => Str::slug($altmenu->altmenu), 'id' => $altmenu->id]) }}">
                                                                    {{ $altmenu->altmenu }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col nav-dropdown p-0">
                        <a class="menu-link" style="cursor: pointer"> Oyuncak </a>
                        <div class="nav-dropdown-menu border border-2 border-danger shadow-sm">
                            <div class="col p-4">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'oyuncak']) }}">
                                            <h6>Oyuncak</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'kitap-&-kırtasiye']) }}">
                                            <h6>Kitap & Kırtasiye</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'havuz-&-deniz-ürünleri']) }}">
                                            <h6>Havuz & Deniz Ürünleri</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('menu', ['menu' => 'çocuk-odası-aksesuarları']) }}">
                                            <h6>Çocuk Odası Aksesuarları</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach ($menus as $menu)
                                        @php
                                            $menuSlug = Str::lower(str_replace(' ', '-', $menu->menu));
                                            $filteredAltMenu = App\Models\AltMenu::where('menu_id', $menu->id)->get();
                                        @endphp

                                        @if ($menu->id == 11 || $menu->id == 12 || $menu->id == 13 || $menu->id == 14)
                                            <div class="col">
                                                <ul class="list-unstyled">

                                                    @foreach ($filteredAltMenu as $altmenu)
                                                        @if ($altmenu->menu_id == 11 || $altmenu->menu_id == 12)
                                                            <li>
                                                                <a
                                                                    href="{{ route('altmenu', ['menu' => $menuSlug, 'altmenu' => Str::slug($altmenu->altmenu), 'id' => $altmenu->id]) }}">
                                                                    {{ $altmenu->altmenu }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="container-fluid p-4 mt-5">
            @yield('content')
        </section>
    </main>

    <footer class=" bg-light text-center text-lg-start bg-white text-muted">
        <section class="container-fluid bg-light d-flex justify-content-center justify-content-lg-center p-4">
            <div class="col-md-10 col-12 d-flex align-items-center justify-content-center">
                <div class="col-4 footer-icon ">
                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                        <i class="fa fa-handshake border rounded-circle p-4"></i>
                        <p class="mb-0">Güvenli Alışveriş</p>
                    </div>
                </div>
                <div class="col-4 footer-icon ">
                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                        <i class="fa fa-truck border rounded-circle p-4"></i>
                        <p class="mb-0">600 TL üzeri Ücretsiz Kargo</p>
                    </div>
                </div>
                <div class="col-4 footer-icon ">
                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                        <i class="fa fa-truck border rounded-circle p-4"></i>
                        <p class="mb-0">Mağazada Değişim</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row py-3">
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer">
                        <h6 class="fw-bold mb-4 border-bottom">Kurumsal</h6>
                        <div class="d-flex flex-column">
                            <a href="#!">Kurumsal</a>
                            <a href="#!">KVKK</a>
                            <a href="#!">Gizlilik Sözleşmesi</a>
                            <a href="#!">Bilgi Güvenliği Politikası</a>
                            <a href="#!">Kalite Politikası</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer">
                        <h6 class="fw-bold mb-4 border-bottom">Kategoriler</h6>
                        <div class="d-flex flex-column">
                            <a href="{{ route('menu', ['menu' => Str::slug('bebek giyim')]) }}">Bebek Giyim</a>
                            <a href="{{ route('menu', ['menu' => Str::slug('erkek çocuk giyim')]) }}">Erkek Çocuk
                                Giyim</a>
                            <a href="{{ route('menu', ['menu' => 'kız-çocuk-giyim']) }}">Kız Çocuk Giyim</a>
                            <a href="{{ route('menu', ['menu' => 'bebek-odası']) }}">Bebek Odası</a>
                            <a href="{{ route('menu', ['menu' => 'bebek-arabası']) }}">Bebek Arabası</a>
                            <a href="{{ route('menu', ['menu' => Str::slug('bebek güvenlik')]) }}">Bebek Güvenlik</a>
                            <a href="{{ route('menu', ['menu' => 'araç-&-gereç']) }}">Araç & Gereç</a>
                            <a href="{{ route('menu', ['menu' => Str::slug('oyuncak')]) }}">Oyuncak</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer">
                        <h6 class="fw-bold mb-4 border-bottom">Yardım</h6>
                        <div class="d-flex flex-column">
                            <a href="{{ route('security') }}">Güvenlik</a>
                            <a href="{{ route('bankNumber') }}">Hesap Numaralarımız</a>
                            <a href="{{ route('shops') }}">Mağazalarımız</a>
                            <a href="{{ route('shops') }}">Bize Ulaşın</a>
                            <a href="#!">Toptan Satış</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="fw-bold mb-4 border-bottom">İletişim</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> Tahsilli, Kozan Cad. No:303,
                            01250<br>Yüreğir/Adana</p>
                        <p><i class="fas fa-envelope me-3 text-secondary"></i> Ram_zan01@hotmail.com</p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 90 535 502 11 31</p>
                        <div>
                            <a href="https://www.facebook.com/AkdenizBebe/" target="_blank"
                                class="me-4 link-secondary">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/akdenizbebe/" target="_blank"
                                class="me-4 link-secondary">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.025);">
            <div class="container py-4">
                <div class="row">
                    <div class="col text-center">
                        © 2024 Copyright
                        <span class="text-reset fw-bold">Akdeniz Bebe</span>
                    </div>
                    <div class="col text-center fw-bold">
                        Fogo Software
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="{{ asset('js/mdb/mdb.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
