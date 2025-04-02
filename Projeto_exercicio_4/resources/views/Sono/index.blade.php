<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Sono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Avaliar Sono</h4>
                    </div>
                    <div class="card-body">
                        <form action="/Sono" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="data_vencimento" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" name="data_nascimento" required>
                            </div>
                            <div class="mb-3">
                                <label for="horas" class="form-label">Quantas horas você dormiu?</label>
                                <input type="number" class="form-control" name="horas" required min="0" step="0.1" placeholder="Digite o número de horas">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Avaliar Sono</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
