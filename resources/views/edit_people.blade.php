@section('body')
    <h2>Update People</h2>
    <form action="/people/update/{{ $people->id }}" method="post">
        @csrf
        <label for="Name">
            Fullname:
            <input type="text" name="fullname" value="{{ $people->fullname }}">
        </label><br><br>
        <label for="Birthday">
            Birthday:
            <input type="text" name="birthday" value="{{ $people->birthday }}">
        </label><br><br>
        <label for="Address">
            Address:
            <input type="text" name="address" value="{{ $people->address }}">
        </label><br><br>
        <button type="submit">Edit people</button>
    </form>
@endsection 