<!-- resources/views/skills/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Beceri Ekle</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rskills.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="skill_name">Beceri Adı</label>
                                <input type="text" class="form-control" id="skill_name" name="skill_name"
                                    placeholder="Örneğin: Laravel" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="percent">Yüzde (%)</label>
                                <input type="number" class="form-control" id="percent" name="percent"
                                    placeholder="Örneğin: 85" min="0" max="100" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
