@extends('admin.layout.adminlayout')

@section('content')
    <a href="{{ route('skills.create') }}" class="btn btn-success"> Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>

                <th scope="col">yetenek Adı</th>
                <th scope="col">yüzde</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $s)
                <tr>
                    <th scope="row">{{ $s->id }}</th>
                    <td>{{ $s->skill_name }}</td>
                    <td>{{ $s->percent }}</td>


                    <td><a href="{{ route('skills.edit', $s->id) }}" class="btn btn-info">Güncelle</a>

                    </td>
                    <td>
                        <form action="{{ route('skills.destroy', $s->id) }}" method="POST">
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
