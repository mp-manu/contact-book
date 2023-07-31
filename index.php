<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Книга контактов</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--    <link href="signin.css" rel="stylesheet">-->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="card phone-card">
    <div class="card-header">
        <h6 class="card-title">
            Добавить контакт
        </h6>
    </div>
    <div class="card-body">
        <form action="#" method="post" id="contact-form">
            <div class="input-group mb-3">
                <input type="fio" id="fio" required class="form-control" placeholder="Имя">
            </div>
            <div class="input-group mb-3">
                <input type="phone" id="phone" required class="form-control" placeholder="Телефон">
            </div>
            <div class="row d-flex flex-row justify-content-end">
                <div class="col-4">
                    <button type="submit" class="btn btn-block btn-save">Добавить</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card list-card">
    <div class="card-header">
        <h6 class="card-title">
           Список контактов
        </h6>
    </div>
    <div class="card-body contact-card-body">
        <?php include 'contact_list.php' ?>
    </div>
</div>
</body>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</html>
