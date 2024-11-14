@extends('admin.layout.adminlayout')

@section('content')
    <a href="{{ route('usersx.create') }}" class="btn btn-success"> Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">İsim soyisim</th>
                <th scope="col">encrypt şifre</th>
                <th scope="col">mail </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usersx as $u)
                <tr>
                    <th scope="row">{{ $u->id }}</th>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->password }}</td>



                    <td><a href="{{ route('usersx.edit', $u->id) }}" class="btn btn-info">Güncelle</a>

                    </td>
                    <td>
                        <form action="{{ route('usersx.destroy', $u->id) }}" method="POST">
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
