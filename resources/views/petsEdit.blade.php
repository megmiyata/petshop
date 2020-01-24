<html>
<body>
    <form method="post" action="/pets/update/{{ $pet['id'] }}">

        @csrf
        @method('PATCH')

        <label for="">Nome</label>
        <input type="text" name="name" value="{{ $pet['name'] }}">
        <br>
        <br>

        <label for="">RGA</label>
        <input type="text" name="rga" value="{{ $pet['RGA'] }}">
        <br>
        <br>

        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nascimento" value="{{ $pet['data_nascimento'] }}">
        <br>
        <br>

        <label for="">Dono</label>
        <select name="owner_id" id="">
            @foreach($owners as $owner)
                <option value="{{ $owner['id']}}" @if($owner['id'] == $pet['owner_id']} @endif>{{ $owner["name"]}}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>
</body>
</html>