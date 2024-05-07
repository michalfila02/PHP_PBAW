<x-app-layout>
@section('content')
<h1>Edycja Wypozyczalnie</h1>

    <form method="POST" action="{{ route('wypozyczalnie.update', ['wypozyczalnie' => $wypozyczalnie->Nazwa]) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="Nazwa">Nazwa:</label>
            <input type="text" id="Nazwa" name="Nazwa" class="form-control" value="{{ $wypozyczalnie->Nazwa }}">
            <label for="Miasto">Miasto</label>
            <input type="text" name="Miasto" class="form-control" required value="{{ $wypozyczalnie->Miasto }}">
            <label for="Ulica">Ulica</label>
            <input type="text" name="Ulica" class="form-control" required value="{{ $wypozyczalnie->Ulica }}">
            <label for="Nr_ulicy">Nr_ulicy</label>
            <input type="text" name="Nr_ulicy" class="form-control" required value="{{ $wypozyczalnie->Nr_ulicy }}">
            <label for="Telefon_kontaktowy">Telefon_kontaktowy</label>
            <input type="text" name="Telefon_kontaktowy" class="form-control" required value="{{ $wypozyczalnie->Telefon_kontaktowy }}">
        </div>

    

        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
@endsection
</x-app-layout>