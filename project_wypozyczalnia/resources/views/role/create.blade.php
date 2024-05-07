<x-app-layout>

@section('content')

    <h1>Dodaj Role</h1>
    <form action="{{ route('role.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Role">Role</label>
            <input type="text" name="Role" class="form-control" required>
            <label for="Wypozyczalnie_Nazwa">Wypozyczalnie_Nazwa</label>
            <input type="text" name="Wypozyczalnie_Nazwa" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
</x-app-layout>