@extends('layouts.app')

@section('content')
    <form action="{{ route('rabout.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">İsim </label>
            <input type="text" class="form-control" name="name">

        </div>

        <div class="mb-3">
            <label class="form-label">Telefon </label>
            <input type="text" class="form-control" name="phone">

        </div>

        <div class="mb-3">
            <label class="form-label">Mail </label>
            <input type="text" class="form-control" name="email">

        </div>

        <div class="mb-3">
            <label class="form-label">Web Sitesi </label>
            <input type="text" class="form-control" name="website">

        </div>

        <div class="mb-3">
            <label class="form-label">Adres </label>
            <input type="text" class="form-control" name="address">

        </div>

        <div class="mb-3">
            <label class="form-label">Profil Resmi</label>
            <input type="file" class="form-control" name="profile_image">

        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
@endsection
