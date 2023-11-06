<!DOCTYPE html> <html lang="pt-br"> <head>
<meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center" style="min-height: 100%; min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            Agenda v1.0
                        </div>
                        <div class="card-body">

                            <div id="login" class="tab">
                                <form action="/usuario/login" method="post">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="senha" id="senha">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                    <small style="margin-left: 10px;">Não tenho cadastro. <a href="#" class="change"
                                            data-target="#cadastro">Cadastrar-me</a></small>
                                </form>
                            </div>

                            <div id="cadastro" class="tab" style="display: none;">
                                <form action="/usuario/cadastrar" method="post">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco">
                                    </div>
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="senha" id="senha">
                                    </div>
                                    <div class="mb-3">
                                        <label for="repetirSenha" class="form-label">Repita a senha</label>
                                        <input type="password" class="form-control" name="repetirSenha"
                                            id="repetirSenha">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    <small style="margin-left: 10px;"><a href="#" class="change"
                                            data-target="#login">Voltar para login</a></small>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('a.change').on('click', function () {
                $('.tab').hide();
                $($(this).data('target')).show();
            });
        });
    </script>
</body>

</html>