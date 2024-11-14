@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">sosyal medya adı </label>
            <input type="text" class="form-control" name="social_name" value="{{ $contact->social_name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">url </label>
            <input type="text" class="form-control" name="social_url" value="{{ $contact->social_url }}">

        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
