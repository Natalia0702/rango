<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp3p3x0/2oMTZP5EFPtLBI5n90PI7OJgxr6QY3" crossorigin="anonymous">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1d398; color: #333;">

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ed1c24; padding: 10px 30px;">
        <a class="navbar-brand" href="/RANGO_DO_REI/app/views/rango.php">
            <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Logo" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Home com ícone -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/RANGO_DO_REI/app/views/rango.php" style="font-size: 18px; font-weight: bold;">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <!-- Área Restrita com ícone de cadeado -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/RANGO_DO_REI/app/views/area-restrita/loginRestrito.php" style="font-size: 18px; font-weight: bold;">
                        <i class="fas fa-lock"></i> Área Restrita
                    </a>
                </li>
                <!-- Login ou Cadastro -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/RANGO_DO_REI/app/views/login/login.php" style="font-size: 18px; font-weight: bold;">Login ou Cadastro</a>
                </li>
                <!-- Contato -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/RANGO_DO_REI/app/views/contato/contato.php" style="font-size: 18px; font-weight: bold;">Contato</a>
                </li>
                <!-- Cardápio -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/rango_do_rei/app/Views/cardapio/cardapio.php" style="font-size: 18px; font-weight: bold;">Cardápio</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Conteúdo da Página do Carrinho -->
<div class="container mt-5">
    <h2 class="text-center" style="color: #ed1c24; font-weight: bold;">Carrinho de Compras</h2>
    
    <!-- Tabela do Carrinho -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped">
            <thead style="background-color: #ed1c24; color: white;">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produto Exemplo 1</td>
                    <td>2</td>
                    <td>R$ 5,00</td>
                    <td>R$ 10,00</td>
                </tr>
                <tr>
                    <td>Produto Exemplo 2</td>
                    <td>1</td>
                    <td>R$ 7,50</td>
                    <td>R$ 7,50</td>
                </tr>
                <tr>
                    <td>Produto Exemplo 3</td>
                    <td>3</td>
                    <td>R$ 4,00</td>
                    <td>R$ 12,00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end"><strong>Total</strong></td>
                    <td>R$ 29,50</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Botão para Finalizar a Compra -->
    <div class="text-center mt-4">
        <a href="finalizar_compra.html" class="btn btn-success" style="background-color: #ed1c24; border: none;">Finalizar Compra</a>
    </div>
</div>

<!-- Footer -->
<footer style="background-color: #ed1c24; width: 100%; color: white; padding: 20px 0; position: relative; margin-top: 30px;">
    <div class="container">
        <div class="row text-center text-md-start align-items-center">
            <div class="col-md-4 mb-4 mb-md-0">
                <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Rango do Rei" style="height: 80px;">
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <ul style="list-style: none; padding-left: 0;">
                    <li><a href="cardapio.html" style="text-decoration: none; color: white;">Cardápio</a></li>
                    <li><a href="contato.html" style="text-decoration: none; color: white;">Contato</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul style="list-style: none; padding-left: 0;">
                    <li><a href="https://www.instagram.com/rangodorei/" style="text-decoration: none; color: white;">Instagram: @rangodorei</a></li>
                    <li>contato@rangodorei.com.br</li>
                    <li>(31) 99185-1690</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <p>&copy; 2024 Rango do Rei - Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
