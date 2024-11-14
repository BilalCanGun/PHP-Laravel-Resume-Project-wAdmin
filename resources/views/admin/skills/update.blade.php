@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('skills.update', $skills->id) }}" method="POST">
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
            <label class="form-label">yetneke adı </label>
            <input type="text" class="form-control" name="skill_name" value="{{ $skills->skill_name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">yüzde </label>
            <input type="text" class="form-control" name="percent" value="{{ $skills->percent }}">

        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
