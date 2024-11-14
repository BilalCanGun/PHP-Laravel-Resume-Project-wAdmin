@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('skills.store') }}" method="POST">
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
            <label class="form-label">yetenek adı </label>
            <input type="text" class="form-control" name="skill_name">

        </div>
        <div class="mb-3">
            <label class="form-label">yüzde </label>
            <input type="text" class="form-control" name="percent">

        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
