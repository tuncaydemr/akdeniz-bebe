@extends('index')

@section('content')
  <div class="container" style="padding-top: 150px; padding-bottom: 150px;">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-4">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="row flex-column">
                <div class="col">
                    <div class="mb-5">
                        <h3 class="text-center fw-bold">Kayıt Ol</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Ad Soyad</label>
                        <input type="text" class="form-control" name="adSoyad">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Cep Telefonu</label>
                        <input type="tel" class="form-control" name="phone">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-5">
                        <label for="" class="form-label">Şifre</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="col d-grid">
                    <button type="submit" class="btn btn-danger">Gönder</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
