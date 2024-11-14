<!-- resources/views/contact/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Sosyal Medya Bağlantısı Ekle</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rcontact.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="social_name">Platform Adı</label>
                                <input type="text" class="form-control" id="social_name" name="social_name"
                                    placeholder="Örneğin: LinkedIn" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="social_url">Platform URL</label>
                                <input type="text" class="form-control" id="social_url" name="social_url"
                                    placeholder="Örneğin: https://www.linkedin.com/in/kullanici" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
