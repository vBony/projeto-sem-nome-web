<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/template.css">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/<?=$css?>">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/js/jquery.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>app/assets/js/template.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/libraries/bootstrap.css" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/css/homolog-header.css" rel="stylesheet">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/libraries/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header id="header_inv">
        
        <div id="box-header">

            <div id="logo-area" onclick="window.location.href = '  <?= $_ENV['BASE_URL'] ?> ' ">
                QUERO EMPREGO
            </div>

            <div id="buttons-area">

                <div id="button-login">

                    <div id="icon-login-box">
                        <i id="icon-login" class="fas fa-user-alt"></i>
                    </div>

                    <div id="button-login-text">
                        Entrar
                    </div>

                </div>

                <div id="button-register">Cadastre-se</div>

            </div>

        </div>
        
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData)?>

    <footer id="footer_bg">
        <hr>
        <p>rodape do site</p>
    </footer>
</body>
</html>