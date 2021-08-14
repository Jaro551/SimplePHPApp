<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikacja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="LoginView.php">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="RegistrationView.php">Rejestracja</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div id="maincontent" style="margin:20px;">
        <div id="productform">
            <form method="POST">
                <div class="col-md-4">
                    <label for="login" class="form-label">Login: </label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Hasło</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <input type="submit" value="Zaloguj" class="btn btn-success" style="margin-top:15px;">
            </form>
        </div>
        <div id="login">
            <?php require_once("Login.php") ?>
        </div>
    </div>
</body>