<?php 
use CodeIgniter\Config\Services;
helper('form');

?>

<?= \Config\Services::form() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../assets/dist/styles/site.min.css">
</head>
<body>
<h1>Formulário</h1>
    <?= form_open('api-gpt'); ?>
        <div class="mb-3">
            <label for="pergunta" class="form-label">Pergunta:</label>
            <input type="text" class="form-control" id="pergunta" name="pergunta" required>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL:</label>
            <textarea class="form-control" id="url" name="url" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tag_html" class="form-label">Tag HTML em que o conteúdo se encontra:</label>
            <input type="text" class="form-control" id="tag_html" name="tag_html" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    <?= form_close(); ?>
<footer>

</footer>
<script async defer src="../../assets/dist/scripts/main.js"></script>
</body>
</html>