<?php
        session_start(); 

        include("infra/conexao.php");
        $usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");
        $pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Prato</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main>
        <div id="divPrincipal"
            class="w-25 p-5 pb-4 pt-5 container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3 translate-middle">

            <form action="public/prato/cadastrarPrato.php" method="POST">
                <p class="h2 pb-3 d-flex justify-content-center">Inserir prato</p>
                <div>
                    <label class="form-label" for="nome">Nome do Prato:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div>
                    <label class="form-label" for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria">
                </div>
                <div>
                    <label class="form-label" for="descricao">Descricão:</label>
                    <input class="form-control" type="text" name="descricao">
                </div>
                <div>
                    <label class="form-label" for="preco">Preço:</label>
                    <input class="form-control" type="number" name="preco">
                </div>
                <br>
                <div>
                    <label class="form-label" for="id_usuario">Selecione o usuário para cadastrar o prato:</label>
                    <select class="form-select" name="id_usuario" id="usuarioSelect">
                        <option selected>Selecione um usuário</option>
                        <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                            <option value="<?php echo $usuario["id"]; ?>">
                                <?php echo $usuario["nome"] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>

                <div>
                    <h4 class="d-flex justify-content-center">Deseja cadastrar um usuário?</h4>
                    <div class="d-flex justify-content-center">
                        <button 
                            class="btn btn-secondary btn-sm" onclick="window.location.href='public/usuario/cadastrar.php'">Cadastrar Usuário
                        </button>
                    </div>
                </div>
            </form>
                
        </div>

        <div id="divSegundaria"
            class=" d-flex justify-content-between w-50 p-5 pb-4 pt-5 container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3 translate-middle">
            <div>
                <h2>Pratos cadastrados</h2>
                    <table class="table table-striped">
                        <tr>
                            <th>Nome:</th>
                            <th>Preço:</th>
                            <th>Descrição:</th>
                            <th>Categoria</th>
                            <th>Opções</th>
                        </tr>
                        <?php while ($prato = mysqli_fetch_assoc($pratos)) { ?>
                            <tr>
                                <td><?php echo $prato["nome"] ?></td>
                                <td><?php echo $prato["preco"] ?></td>
                                <td><?php echo $prato["descricao"] ?></td>
                                <td><?php echo $prato["categoria"] ?></td>
                                <td>
                                    <form action="public/prato/excluirPrato.php" method="POST" onsubmit="return confirm('Deseja excluir este Prato?')">
                                        <input type="hidden" name="id_prato" value = "<?php echo $prato["id"] ?>">
                                        <button type = "submit">Excluir</button>
                                    </form>
                                    <a href="public/excluir.php?id=<?php echo $prato["id"] ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
            </div>
        </div>




    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>