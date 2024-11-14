@extends('admin.layout.adminlayout')

@section('content')
    <a href="{{ route('contact.create') }}" class="btn btn-success"> Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>

                <th scope="col">site Adı</th>
                <th scope="col">link</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $c)
                <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->social_name }}</td>
                    <td>{{ $c->social_url }}</td>


                    <td><a href="{{ route('contact.edit', $c->id) }}" class="btn btn-info">Güncelle</a>

                    </td>
                    <td>
                        <form action="{{ route('contact.destroy', $c->id) }}" method="POST">
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
