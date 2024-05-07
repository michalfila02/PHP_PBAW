<x-app-layout>

@section('content')

    <h1>Dodaj Wypozyczalnie</h1>
    <form action="{{ route('wypozyczalnie.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nr_rejestracyjny">Nr_rejestracyjny</label>
            <input type="text" name="Nr_rejestracyjny" class="form-control" required>
            <label for="Marka">Marka</label>
            <input type="text" name="Marka" class="form-control" required>
            <label for="Model">Model</label>
            <input type="text" name="Model" class="form-control" required>
            <label for="Koszt_wynajecia_na_dzien">Koszt_wynajecia_na_dzien</label>
            <input type="text" name="Koszt_wynajecia_na_dzien" class="form-control" required>
            <label for="Przebieg_w_km">Przebieg_w_km</label>
            <input type="text" name="Przebieg_w_km" class="form-control" required>
            <label for="Wypozyczalnie_Nazwa">Wypozyczalnie_Nazwa</label>
            <input type="text" name="Wypozyczalnie_Nazwa" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
</x-app-layout>