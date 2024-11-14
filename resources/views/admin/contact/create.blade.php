@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('contact.store') }}" method="POST">
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

        <div class="mb-3">
            <label class="form-label">site adı </label>
            <input type="text" class="form-control" name="social_name">

        </div>
        <div class="mb-3">
            <label class="form-label">link </label>
            <input type="text" class="form-control" name="social_url">

        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
