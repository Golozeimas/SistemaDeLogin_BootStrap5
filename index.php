<?php

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de login </title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" >
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
            
    <main class="w-100 m-auto">
                <form>
                    <img src="https://www.pi.gov.br/wp-content/uploads/2024/11/cropped-favicon.jpg" class="mb-4" height="70">
                    <h1 class="h3 mb-3 fw-normal">Sead - login</h1> <!-- usamos h1 para manter a semântica do projeto, enquanto o bootstrap transforma em h3, 
                    e fw-normal define o peso da fonte-->
                    <div class="form-floating">
                        <label for="floatingInput">E-mail</label>
                        <input type="email" class="form-control" id="floatingInput" placeholder="seu-email@gmail.com">
                    </div>
                    <div class="form-floating">
                        <label for="floatingInput">Senha</label>
                        <input type="password" class="form-control" id="floatingInput" placeholder="sua senha">
                    </div>
                </form>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>