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
    <link rel="stylesheet" href="../assets/bootstrap-5.2.2/css/bootstrap.min.css">
    <script src="../assets/bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>

    <!--jQuery v3.6.1 -->
    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/app.js"></script>

    <!--my style my events-->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>


<body>

    <?php
    require_once "../view/header.html";
    ?>

    <div class="container">
        <div class="firstSection">
            <div class="mt-3">
                <h1>Product Add</h1>
            </div>
            <div>
                <button>
                    <a> Save </a>
                </button>
                <button id="cancel">
                    <a>Cancel</a>
                </button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form id="product_form">
                    <div class="mb-3">
                        <label for="" class="form-label">SKU</label>
                        <input type="text" class="form-control col-6" id="sku">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price ($)</label>
                        <input type="number" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Type switcher</label>
                        <select type="" class="form-select" id="productType">
                            <option value="">
                                DVD
                            </option>
                            <option value="">
                                Book
                            </option>
                            <option value="" id="proba">
                                Furniture
                            </option>
                        </select>
                    </div>

                    <span class="mb-3">
                        <label for="" class=" form-label">Size</label>
                        <input type="number" class="form-control" id="price">
                    </span>
                    <span class="mb-3">
                        <label for="" class=" form-label">Height </label>
                        <input type="number" class="form-control" id="height">
                        <label for="" class=" form-label">Width </label>
                        <input type="number" class="form-control" id="width">
                        <label for="" class=" form-label">Length </label>
                        <input type="number" class="form-control" id="length">
                    </span>
                    <span class="mb-3">
                        <label for="" class=" form-label">Weight</label>
                        <input type="number" class="form-control" id="weight">
                    </span>
                    <div id="probaTuka"></div>




                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <?php require_once "../view/footer.html"; ?>

    <script src="../controller/addProduct.js"></script>
</body>

</html>