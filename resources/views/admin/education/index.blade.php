@extends('admin.layout.adminlayout')

@section('content')
    <a href="{{ route('education.create') }}" class="btn btn-success"> Ekle</a>
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
            @foreach ($edu as $e)
                <tr>
                    <th scope="row">{{ $e->id }}</th>
                    <td>{{ $e->edu_start }}</td>
                    <td>{{ $e->edu_end }}</td>
                    <td>{{ $e->school_name }}</td>
                    <td>{{ $e->school_description }}</td>

                    <td><a href="{{ route('education.edit', $e->id) }}" class="btn btn-info">Güncelle</a>

                    </td>
                    <td>
                        <form action="{{ route('education.destroy', $e->id) }}" method="POST">
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
