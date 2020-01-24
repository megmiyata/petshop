<html>
<body>
    <form method="post" action="/pets/store">

        @csrf

        <label for="">Nome</label>
        <input type="text" name="name">
        <br>
        <br>

        <label for="">RGA</label>
        <input type="text" name="rga">
        <br>
        <br>

        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nascimento">
        <br>
        <br>

        <label for="">Dono</label>
        <select name="owner_id" id="">
            @foreach($owners as $owner)
                <option value="{{ $owner['id']}}">{{ $owner["name"]}}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>
</body>
</html>