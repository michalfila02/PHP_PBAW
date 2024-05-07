<x-app-layout>
@section('content')
<h1>Edycja samochody</h1>

    <form method="POST" action="{{ route('samochody.update', ['samochody' => $samochody->Nr_rejestracyjny]) }}">
        @csrf
        @method('PUT')

        <div>
        label for="Nr_rejestracyjny">Nr_rejestracyjny</label>
            <input type="text" name="Nr_rejestracyjny" class="form-control" required value="{{ $samochody->Nr_rejestracyjny }}">
            <label for="Marka">Marka</label>
            <input type="text" name="Marka" class="form-control" required value="{{ $samochody->Marka }}">
            <label for="Model">Model</label>
            <input type="text" name="Model" class="form-control" required value="{{ $samochody->Model }}">
            <label for="Koszt_wynajecia_na_dzien">Koszt_wynajecia_na_dzien</label>
            <input type="text" name="Koszt_wynajecia_na_dzien" class="form-control" required value="{{ $samochody->Koszt_wynajecia_na_dzien }}">
            <label for="Przebieg_w_km">Przebieg_w_km</label>
            <input type="text" name="Przebieg_w_km" class="form-control" required value="{{ $samochody->Przebieg_w_km }}">
            <label for="samochody_Nazwa">samochody_Nazwa</label>
            <input type="text" name="samochody_Nazwa" class="form-control" required value="{{ $samochody->samochody_Nazwa }}">
        </div>

    

        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
@endsection
</x-app-layout>