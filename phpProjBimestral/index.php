<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container px-5 d-flex justify-content-center align-items-center min-vh-100">
        <form action="./array.php">
            <div class="border p-5 rounded">
                <div class="my-5">
                    <label class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control ">
                </div>

                <div class="my-5">
                    <label class="form-label">Senha:</label>
                    <input type="text" class="form-control" name="senha">
                </div>

                <div class="d-flex flex-column align-items-center">
                    <button class="btn btn-dark" type="submit">Login</button>
                </div>
            </div>
    </div>

    </form>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>