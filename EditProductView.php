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
                    <a class="nav-link" aria-current="page" href="ProductListView.php">Produkty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="AddProductView.php">Dodaj produkt</a>
                </li>
                <li>
                    <a class="nav-link" aria-current="page" href="Logout.php">Wyloguj</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div id="maincontent" style="margin:20px;">
        <div id="productform">
            <form method="POST">
                <div class="col-md-4">
                    <label for="title" class="form-label">Podaj tytuł</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">Tytuł powinien się składać conajmniej z 6 znaków</div>
                </div>
                <div class="col-md-4">
                    <label for="description" class="form-label">Podaj tytuł</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="col-md-4">
                    <label for="isAvailable" class="form-label">Podaj tytuł</label>
                    <select class="form-select" id="isAvailable" name="isAvailable">
                    <option value="1" selected>Dostępny</option>
                    <option value="0">Niedostępny</option>
                </div>
                <input type="submit" value="Edytuj produkt" class="btn btn-success" style="margin-top:15px;">
            </form>
        </div>
        <div id="editproduct">
            <?php require_once("EditProduct.php") ?>
        </div>
    </div>
</body>