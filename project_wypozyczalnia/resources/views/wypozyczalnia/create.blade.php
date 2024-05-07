<x-app-layout>

@section('content')

    <h1>Dodaj Wypozyczalnie</h1>
    <form action="{{ route('wypozyczalnie.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nr_wypozyczenia">Nr_wypozyczenia</label>
            <input type="text" name="Nr_wypozyczenia" class="form-control" required>
            <label for="Imie">Imie</label>
            <input type="text" name="Imie" class="form-control" required>
            <label for="Nazwisko">Nazwisko</label>
            <input type="text" name="Nazwisko" class="form-control" required>
            <label for="PESEL">PESEL</label>
            <input type="text" name="PESEL" class="form-control" required>
            <label for="Data_wypożyczenia">Data_wypożyczenia</label>
            <input type="text" name="Data_wypożyczenia" class="form-control" required>
            <label for="Data_wypożyczenia">Data_wypożyczenia</label>
            <input type="text" name="Data_wypożyczenia" class="form-control" required>
            <label for="Samochody_Nr_rejestracyjny">Samochody_Nr_rejestracyjny</label>
            <input type="text" name="Samochody_Nr_rejestracyjny" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
</x-app-layout>