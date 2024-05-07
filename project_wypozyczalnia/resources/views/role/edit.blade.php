<x-app-layout>
@section('content')
<h1>Edycja Role</h1>

    <form method="POST" action="{{ route('role.update', ['role' => $role->Nazwa]) }}">
        @csrf
        @method('PUT')

        <div>
        <label for="Role">Role</label>
            <input type="text" name="Role" class="form-control" required  value="{{ $role->Role }}">
            <label for="Wypozyczalnie_Nazwa">Wypozyczalnie_Nazwa</label>
            <input type="text" name="Wypozyczalnie_Nazwa" class="form-control" required  value="{{ $role->Wypozyczalnie_Nazwa }}">
        </div>

    

        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
@endsection
</x-app-layout>