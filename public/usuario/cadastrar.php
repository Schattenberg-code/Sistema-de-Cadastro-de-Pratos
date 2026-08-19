<?php
        session_start(); 

        include("../../infra/conexao.php");

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main>
        <div
            class="w-25 p-5 pb-4 pt-5 container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3 position-absolute top-50 start-50 translate-middle">

            <form action="cadastrarUsuario.php" method="POST">
                <p class="h2 pb-3 d-flex justify-content-center">Cadastrar Usuário</p>
                <div>
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control" type = "email" name="email">
                </div>
                <div>
                    <label class="form-label" for="nome">Usuário:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>

            <div>
                <h4 class="d-flex justify-content-center">Deseja cadastrar um prato?</h4>
                <div class="d-flex justify-content-center">
                    <button 
                        class="btn btn-secondary btn-sm" onclick="window.location.href='../../index.php'">Voltar
                    </button>
                </div>
            </div>

        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>