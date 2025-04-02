<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Gasto de Viagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Cálculo de Gasto de Viagem</h4>
                    </div>
                    <div class="card-body">
                        <form action="/Viagem" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="distancia" class="form-label">Distância (km)</label>
                                <input type="number" class="form-control" name="distancia" required min="0" placeholder="Digite a distância em km">
                            </div>
                            <div class="mb-3">
                                <label for="consumo" class="form-label">Consumo do veículo (km/l)</label>
                                <input type="number" class="form-control" name="consumo" required min="0" step="0.1" placeholder="Digite o consumo do veículo em km/l">
                            </div>
                            <div class="mb-3">
                                <label for="preco" class="form-label">Preço do combustível (por litro)</label>
                                <input type="number" class="form-control" name="preco" required min="0" step="0.01" placeholder="Digite o preço do combustível por litro">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Calcular Gasto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
