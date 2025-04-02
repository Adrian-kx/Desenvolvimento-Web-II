<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Viagem</title>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Resultado do Cálculo de Viagem</h4>
                    </div>
                    <div class="card-body text-center">
                        <p class="h5">Custo estimado da viagem: <strong>R$ {{ number_format($custoViagem, 2, ',', '.') }}</strong></p>
                        <a href="/Viagem" class="btn btn-primary w-100 mt-4">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
