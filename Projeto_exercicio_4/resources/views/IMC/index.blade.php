<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Calcular IMC</h4>
                    </div>
                    <div class="card-body">
                        <form action="/IMC" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso (kg)</label>
                                <input type="number" class="form-control" name="peso" step="0.1" required placeholder="Digite seu peso em kg">
                            </div>
                            <div class="mb-3">
                                <label for="altura" class="form-label">Altura (m)</label>
                                <input type="number" class="form-control" name="altura" step="0.01" required placeholder="Digite sua altura em metros">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Calcular IMC</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
