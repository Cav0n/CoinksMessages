<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    {{-- POPPER JS --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <title>Bienvenue - Coinks</title>
</head>
<body class='container-fluid'>
    <main class='row justify-content-center'>
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-center text-right" style="height:100vh">
            
            <form action="/inscription" method="post">
                @csrf

                <div class="form-group row">

                    <div class="col-lg-4 text-right p-0 d-flex flex-column justify-content-center">
                        <label for="pseudo" class="mr-3">Pseudo</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="pseudo" id="pseudo"> 
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-lg-4 text-right p-0 d-flex flex-column justify-content-center">
                        <label for="email" class="mr-3">Email</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpEmail" placeholder="">
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-lg-4 text-right p-0 d-flex flex-column justify-content-center">
                        <label for="password" class="mr-3">Mot de passe</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="password" id="password" aria-describedby="helpPassword">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>

        </div>
    </main>
</body>
</html>