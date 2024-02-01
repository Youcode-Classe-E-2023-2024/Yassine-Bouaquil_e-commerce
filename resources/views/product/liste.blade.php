<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Les Produits</h1>
            <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un produit</a>
            <hr>

            @if(session('status'))
                <div class="alert alert-success">
                    {{ (session('status')) }}
                </div>
            @endif


            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom du produit</th>
                    <th>Prix</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @php
                    $ide = 1;
                @endphp


                @foreach($product as $products)
                    <tr>
                        <td>{{ $ide}}</td>
                        <td>{{ $products->nom }}</td>
                        <td>{{ $products ->prix }}</td>
                        <td>{{ $products ->description }}</td>
                        <td>
                            <a href="/product/{{ $products->id }}" class="btn btn-danger">Afficher les details</a>
                            <a href="/update-product/{{ $products->id }}" class="btn btn-primary">Modifier</a>
                            <a href="/delete-product/{{ $products->id }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>

                    @php
                    $ide += 1;
                     @endphp
                @endforeach
                </tbody>
            </table>

            {{ $product-> links()}}
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
