<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="/update-pokemon/{{$pokemon->id}}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name="nome" placeholder="nome" value="{{$pokemon->nome}}">
    <input type="text" name="ataque1" placeholder="ataque1" value="{{$pokemon->ataque1}}">
    <input type="text" name="ataque2" placeholder="ataque2" value="{{$pokemon->ataque2}}">
    <input type="text" name="ataque3" placeholder="ataque3" value="{{$pokemon->ataque3}}">
    <input type="text" name="ataque4" placeholder="ataque4" value="{{$pokemon->ataque4}}">
    <input type="submit" value="Adicionar">
</form>

</body>
</html>