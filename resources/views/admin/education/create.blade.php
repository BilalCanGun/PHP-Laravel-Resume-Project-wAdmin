@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('education.store') }}" method="POST">
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
            <label class="form-label">başlama zamanı </label>
            <input type="date" class="form-control" name="edu_start">

        </div>
        <div class="mb-3">
            <label class="form-label">bitiş zamanı </label>
            <input type="date" class="form-control" name="edu_end">

        </div>
        <div class="mb-3">
            <label class="form-label">kurum adı </label>
            <input type="text" class="form-control" name="school_name">

        </div>
        <div class="mb-3">
            <label class="form-label">açıkşlama </label>
            <input type="text" class="form-control" name="school_description">

        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
