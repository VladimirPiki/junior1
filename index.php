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
        <div class="firstSection" id="firstSection">

            <div class="mt-3">
                <h1>Product List</h1>
            </div>
            <div>
                <button id="addproduct">
                     ADD PRODUCT 
                </button>
                <button>MASS DELETE</button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container myContainer">
        <div class="row myContainer" id="showProduct">
        </div>
    </div>

    <?php require_once "view/footer.html"; ?>

    <script src="controller/productList.js"></script>
</body>

</html>