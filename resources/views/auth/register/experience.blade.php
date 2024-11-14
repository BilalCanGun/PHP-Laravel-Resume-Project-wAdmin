@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>İş Deneyimi Ekle</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rexperience.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="job_start">Başlangıç Tarihi</label>
                                <input type="date" class="form-control" id="job_start" name="job_start"
                                    placeholder="Örneğin: 2020" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="job_end">Bitiş Tarihi</label>
                                <input type="date" class="form-control" id="job_end" name="job_end"
                                    placeholder="Örneğin: 2023" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="company">Şirket Adı</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    placeholder="Şirket Adı" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Açıklama</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                    placeholder="Bu işteki görevleriniz hakkında kısa bir açıklama" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
