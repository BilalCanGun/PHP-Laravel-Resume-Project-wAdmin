@extends('admin.layout.adminlayout')

@section('content')
    <a href="{{ route('about.create') }}" class="btn btn-success"> Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Ad Soyad</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
                <th scope="col">websitesi</th>
                <th scope="col">Adres</th>
                <th scope="col">Fotoğraf</th>
                <th scope="col">Seçenekler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $abo)
                <tr>
                    <th scope="row">{{ $abo->id }}</th>
                    <td>{{ $abo->name }}</td>
                    <td>{{ $abo->phone }}</td>
                    <td>{{ $abo->email }}</td>
                    <td>{{ $abo->website }}</td>
                    <td>{{ $abo->address }}</td>
                    <td>
                        @if ($abo->profile_image)
                            <img src="{{ asset('storage/' . $abo->profile_image) }}" alt="Fotoğraf" width="50"
                                height="50">
                        @else
                            <p>Fotoğraf mevcut değil.</p>
                        @endif
                    </td>
                    <td><a href="{{ route('about.edit', $abo->id) }}" class="btn btn-info">Güncelle</a>

                    </td>
                    <td>
                        <form action="{{ route('about.destroy', $abo->id) }}" method="POST">
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
