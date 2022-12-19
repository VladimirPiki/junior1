<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Junior Developer Test Task">
    <meta name="keywords" content="Web for products (add and delete)">
    <meta name="author" content="Vladimir Krstevski">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Dev Test Task - Vladimir Krstevski</title>

    <!--Bootstrap 5.2.2. framework-->
    <link rel="stylesheet" href="assets/bootstrap-5.2.2/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>

    <!--jQuery v3.6.1 -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!--my style my events-->
    <link href="assets/css/style.css" rel="stylesheet">
</head>


<body>

    <?php
    require_once "view/header.html";
    ?>

    <div class="container">
        <div class="firstSection">
            <div class="mt-3">
                <h1>Product List</h1>
            </div>
            <div>
                <button>
                    <a href="#!details_products"> ADD PRODUCT </a>
                </button>
                <button>MASS DELETE</button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container myContainer">
        <div class="row myContainer" id="ajtuka">
        </div>
    </div>

    <?php require_once "view/footer.html"; ?>

    <script src="controller/productList.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Question Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fontawesome Sytle CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>