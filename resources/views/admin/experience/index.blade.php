@extends('admin.layout.adminlayout')

@section('content')
    <a href="{{ route('experience.create') }}" class="btn btn-success"> Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Başlama Zamanı</th>
                <th scope="col">Bitiş Zamanı</th>
                <th scope="col">İşyeri Adı</th>
                <th scope="col">Açıklama</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($exp as $ex)
                <tr>
                    <th scope="row">{{ $ex->id }}</th>
                    <td>{{ $ex->job_start }}</td>
                    <td>{{ $ex->job_end }}</td>
                    <td>{{ $ex->company }}</td>
                    <td>{{ $ex->description }}</td>

                    <td><a href="{{ route('experience.edit', $ex->id) }}" class="btn btn-info">Güncelle</a>

                    </td>
                    <td>
                        <form action="{{ route('experience.destroy', $ex->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
