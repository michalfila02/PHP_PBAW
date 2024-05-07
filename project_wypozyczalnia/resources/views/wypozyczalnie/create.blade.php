<x-app-layout>

@section('content')

    <h1>Dodaj Wypozyczalnie</h1>
    <form action="{{ route('wypozyczalnie.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nazwa">Nazwa</label>
            <input type="text" name="Nazwa" class="form-control" required>
            <label for="Miasto">Miasto</label>
            <input type="text" name="Miasto" class="form-control" required>
            <label for="Ulica">Ulica</label>
            <input type="text" name="Ulica" class="form-control" required>
            <label for="Nr_ulicy">Nr_ulicy</label>
            <input type="text" name="Nr_ulicy" class="form-control" required>
            <label for="Telefon_kontaktowy">Telefon_kontaktowy</label>
            <input type="text" name="Telefon_kontaktowy" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
</x-app-layout>