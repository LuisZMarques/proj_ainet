<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
 maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tshirt_image</title>
</head>

<body>
    <h2>Novo tshirt_image</h2>
    <form method="POST" action="/tshirt_images">
        @csrf
        <div>
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" id="inputNome">
        </div>
        <div>
            <label for="inputAbr">Descrição</label>
            <input type="text" name="descricao" id="inputAbr">
        </div>
        <div>
            <label for="inputImage">Image</label>
            <textarea name="Image" id="inputImage" rows=10></textarea>
        </div>
        <div>
            <button type="submit" name="ok">Guardar novo tshirt_image</button>
        </div>
    </form>
</body>