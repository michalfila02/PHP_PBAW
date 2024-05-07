<x-app-layout>
@section('content')
<h1>Edycja Wypozyczalnia</h1>

    <form method="POST" action="{{ route('wypozyczalnia.update', ['wypozyczalnia' => $wypozyczalnia->Nr_wypozyczenia]) }}">
        @csrf
        @method('PUT')

        <div>
        <label for="Nr_wypozyczenia">Nr_wypozyczenia</label>
            <input type="text" name="Nr_wypozyczenia" class="form-control" required value="{{ $wypozyczalnia->Nr_wypozyczenia }}">
            <label for="Imie">Imie</label>
            <input type="text" name="Imie" class="form-control" required value="{{ $wypozyczalnia->Imie }}">>
            <label for="Nazwisko">Nazwisko</label>
            <input type="text" name="Nazwisko" class="form-control" required value="{{ $wypozyczalnia->Nazwisko }}">>
            <label for="PESEL">PESEL</label>
            <input type="text" name="PESEL" class="form-control" required value="{{ $wypozyczalnia->PESEL }}">>
            <label for="Data_wypożyczenia">Data_wypożyczenia</label>
            <input type="text" name="Data_wypożyczenia" class="form-control" required value="{{ $wypozyczalnia->Data_wypożyczenia }}">>
            <label for="Data_oddania">Data_oddania</label>
            <input type="text" name="Data_oddania" class="form-control" required value="{{ $wypozyczalnia->Data_oddania }}">>
            <label for="Samochody_Nr_rejestracyjny">Samochody_Nr_rejestracyjny</label>
            <input type="text" name="Samochody_Nr_rejestracyjny" class="form-control" required value="{{ $wypozyczalnia->Samochody_Nr_rejestracyjny }}">>
        </div>

    

        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
@endsection
</x-app-layout>