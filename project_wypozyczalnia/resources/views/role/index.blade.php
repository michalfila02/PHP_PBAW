<x-app-layout>
@section('content')    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('wypozyczalnia.index') }}">wypozyczalnia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('samochody.index') }}">samochody</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('wypozyczalnie.index') }}">wypozyczalnie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('role.index') }}">role</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <h2>role</h2>
    <a href="{{ route('role.create') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $role = DB::table('role')->get();
            @endphp
            @foreach ($role as $rll)
                <tr>
                    <td>{{ $rll->Role}}</td>
                    <td>{{ $rll->Wypozyczalnie_Nazwa}}</td>
                    <td>
                        <a href="{{ route('role.edit', $rll->Role) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('role.destroy', $rll->Role) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


<a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
@endsection
</x-app-layout>