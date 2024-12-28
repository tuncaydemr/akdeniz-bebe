@extends('index')

@section('content')
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h4 class="mb-4">Mağazalarımız</h4>
            </div>
        </div>
        <div class="row d-flex justify-content-evenly">
            <div class="col-12 col-md-5 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.6383616865664!2d35.35105617627654!3d36.99456455671854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f9879e716d7%3A0x1538d803cc9542ed!2sDeniz%20Bebe!5e0!3m2!1str!2str!4v1702199355374!5m2!1str!2str" width="550" height="500" style="border:0;" class="border border-2 rounded-5" allowfullscreen=""></iframe>
            </div>
            <div class="col-12 col-md-5 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.4353164447843!2d35.35963527627671!3d36.99940995644416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288fb0c78995b7%3A0xf3a1e2ac5b8f4580!2sAkdeniz%20Bebe!5e0!3m2!1str!2str!4v1702199693539!5m2!1str!2str" width="550" height="500" style="border:0;" class="border border-2 rounded-5" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-evenly">
            <div class="col-12 col-md-5 p-3 border border-2 rounded-6 bg-danger">
                <div class="row">
                    <div class="col">
                        <h4 class="text-white">Telefon</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-white">Hafta içi 08:00 - 22:00, Hafta sonu 12:00 - 22:00 saatleri arasında hizmet vermekteyiz.</p>
                        <a href="tel:+905355021131" class="text-white">+90 535 502 11 31</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 p-3 border border-2 rounded-6 bg-danger">
                <div class="row">
                    <div class="col">
                        <h4 class="text-white">Mail</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-white">Bize aşağıdaki mail adresimizden ulaşabilirsiniz.<br><br></p>
                        <a href="mailto:Ram_zan01@hotmail.com" class="text-white">Ram_zan01@hotmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
