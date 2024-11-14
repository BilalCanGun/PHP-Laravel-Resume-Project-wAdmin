@extends('admin.layout.adminlayout')

@section('content')
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf


        <div class="mb-3">
            <label class="form-label">Başlama Zamanı</label>
            <input type="date" class="form-control" name="job_start" value="{{ old('job_start') }}">
            @error('job_start')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Bitiş Zamanı</label>
            <input type="date" class="form-control" name="job_end" value="{{ old('job_end') }}">
            @error('job_end')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Şirket Adı</label>
            <input type="text" class="form-control" name="company" value="{{ old('company') }}">
            @error('company')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Açıklama</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
