<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    {{-- POPPER JS --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Mon profil - Coinks</title>
</head>
<body class='container-fluid'>
    <main class='row justify-content-center'>
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-center text-center mt-5">

            <h1>Salut {{Auth::user()->pseudo}}</h1>
            <a name="logout-btn" id="logout-btn" class="btn btn-outline-danger mx-auto" href="/logout" role="button" style="width:max-content">Déconnexion</a>

            <form action="/messages/nouveau" method='POST' class='mt-5 pt-5 border-top'>
                @csrf

                <div class="form-group">
                    <label for="text">Votre message</label>
                    <textarea type="text" class="form-control" name="text" id="text" aria-describedby="helpText"></textarea>
                    <small id="helpText" class="form-text text-muted">Restez courtois et n'envoyez pas d'insanités.</small>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

            @foreach ($messages as $message)
                <div class="card my-3">
                    <div class="card-body">
                        <p class="card-text mb-0">{{$message->text}}</p>
                    </div>
                    <div class="card-footer">
                        <p class='mb-0 text-right'>{{$message->user->pseudo}} - Le {{$message->created_at->formatLocalized('%e %B %G à %H:%M')}}</p>
                    </div>
                </div>  
            @endforeach

        </div>
    </main>
</body>
</html>