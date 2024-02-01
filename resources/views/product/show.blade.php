<!-- resources/views/products/show.blade.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>{{ $product->nom }}</h1>
        </div>
        <div class="card-body">
            <p class="lead">Price: {{ $product->prix }}</p>
            <p>{{ $product->description }}</p>
            <!-- Ajoutez d'autres détails du produit ici selon vos besoins -->
        </div>
        <div class="card-footer">
            <a href="/" class="btn btn-danger">Revenir a la liste des Produits</a>
        </div>
    </div>
</div>

</body>
</html>

