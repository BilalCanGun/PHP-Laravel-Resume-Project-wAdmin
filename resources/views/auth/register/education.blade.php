@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4> Eğitim Ekle</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reducation.store') }}" method="POST">
                            @csrf

                            <div id="education-fields">
                                <div class="education-group">
                                    <h5>Eğitim 1</h5>
                                    <div class="form-group mb-3">
                                        <label for="edu_start">Başlangıç Yılı</label>
                                        <input type="date" class="form-control" name="edu_start"
                                            placeholder="Örneğin: 2020" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="edu_end">Bitiş Yılı</label>
                                        <input type="date" class="form-control" name="edu_end"
                                            placeholder="Örneğin: 2024" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="school_name">Okul Adı</label>
                                        <input type="text" class="form-control" name="school_name" placeholder="Okul Adı"
                                            required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="school_description">Açıklama</label>
                                        <textarea class="form-control" name="school_description" rows="3" placeholder="Okul hakkında açıklama" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-secondary mb-3" id="add-education">Başka Bir Eğitim
                                Ekle</button>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-education').addEventListener('click', function() {
            let educationFields = document.getElementById('education-fields');
            let educationCount = educationFields.getElementsByClassName('education-group').length;

            let newEducation = document.createElement('div');
            newEducation.classList.add('education-group');
            newEducation.innerHTML = `
            <h5>Eğitim ${educationCount + 1}</h5>
            <div class="form-group mb-3">
                <label>Başlangıç Yılı</label>
                <input type="text" class="form-control" name="educations[${educationCount}][edu_start]" placeholder="Örneğin: 2020" required>
            </div>

            <div class="form-group mb-3">
                <label>Bitiş Yılı</label>
                <input type="text" class="form-control" name="educations[${educationCount}][edu_end]" placeholder="Örneğin: 2024" required>
            </div>

            <div class="form-group mb-3">
                <label>Okul Adı</label>
                <input type="text" class="form-control" name="educations[${educationCount}][school_name]" placeholder="Okul Adı" required>
            </div>

            <div class="form-group mb-3">
                <label>Açıklama</label>
                <textarea class="form-control" name="educations[${educationCount}][school_description]" rows="3" placeholder="Okul hakkında açıklama" required></textarea>
            </div>
        `;

            educationFields.appendChild(newEducation);
        });
    </script>
@endsection
