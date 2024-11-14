@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('usersx.update', $usersx->id) }}" method="POST">
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
            <label class="form-label"> adı </label>
            <input type="text" class="form-control" name="name" value="{{ $usersx->name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">emaili </label>
            <input type="text" class="form-control" name="email" value="{{ $usersx->email }}">

        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
