<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test |</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body id="body">
        <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="text-white">
                            <input type="button" value="Sombre" onclick="changeDark()" />
                        </li>
                        <li>
                            <input type="button" value="Blanc" onclick="changeWhite()" />
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <script>
            function changeDark() {
                document.getElementById('body').style.backgroundColor = 'black';
                document.getElementById('body').style.color = 'white'
            }
            function changeWhite() {
                document.getElementById('body').style.backgroundColor = 'white';
                document.getElementById('body').style.color = 'black';
            }
        </script>
        <style>
            body {
                margin-top: 40px;
                width: 100%;               
            }
        </style>
        test<br>

        
        



    </body>
</html>
