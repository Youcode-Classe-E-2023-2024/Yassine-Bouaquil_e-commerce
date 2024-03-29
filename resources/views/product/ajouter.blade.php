<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container ">
    <div class="row">
        <div class="col">
            <h1>Ajouter un Produit</h1>
            <hr>


            @if(session('status'))
                <div class="alert alert-success">
                    {{ (session('status')) }}
                </div>
            @endif
            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{ $errors }}</li>
                @endforeach
            </ul>


            <form action="/ajouter/traitement" method="POST" class="form-group">
                @csrf
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom de produit</label>
                    <input type="text" class="form-control" id="Nom"  name="nom">
                </div>
                <div class="mb-3">
                    <label for="Prix" class="form-label">Prix</label>
                    <input type="text" class="form-control" id="Prix"  name="prix">
                </div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>

            <hr>
            <a href="/" class="btn btn-danger">Revenir a la liste des Produits</a>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
