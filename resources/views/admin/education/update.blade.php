@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('education.update', $edu->id) }}" method="POST">
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
            <label class="form-label">işe başlama </label>
            <input type="date" class="form-control" name="edu_start" value="{{ $edu->edu_start }}">

        </div>
        <div class="mb-3">
            <label class="form-label">iş sonu </label>
            <input type="date" class="form-control" name="edu_end" value="{{ $edu->edu_end }}">

        </div>
        <div class="mb-3">
            <label class="form-label">okul adı </label>
            <input type="text" class="form-control" name="school_name" value="{{ $edu->school_name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">okul açıklama </label>
            <input type="text" class="form-control" name="school_description" value="{{ $edu->school_description }}">

        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
