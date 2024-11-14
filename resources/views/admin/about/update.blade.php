@extends('admin.layout.adminlayout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('about.update', ['about' => $about->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Ad Soyad </label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $about->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Telefon Numarası </label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone', $about->phone) }}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email </label>
            <input type="text" class="form-control" name="email" value="{{ old('email', $about->email) }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Website </label>
            <input type="text" class="form-control" name="website" value="{{ old('website', $about->website) }}">
            @error('website')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Adres </label>
            <input type="text" class="form-control" name="address" value="{{ old('address', $about->address) }}">
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Profil Resmi</label>
            <input type="file" class="form-control" name="profile_image">
            @error('profile_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
