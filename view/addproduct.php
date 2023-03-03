<?php 
/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 * 
 * This is page for add products.
 */
?>
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
                    Save
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
                        <p id="dangerSku" class="alert alert-danger" role="alert"> Please, submit required data!!!</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                        <p id="dangerName" class="alert alert-danger" role="alert"> Please, submit required data!!!</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price ($)</label>
                        <input type="number" class="form-control" id="price">
                        <p id="dangerPrice" class="alert alert-danger" role="alert"> Please, submit required data!!!</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Type switcher</label>
                        <select type="" class="form-select" id="productType">
                            <option selected disabled>
                                Type switcher
                            </option>
                            <option value="Size">
                                DVD
                            </option>
                            <option value="Weight">
                                Book
                            </option>
                            <option value="Dimension">
                                Furniture
                            </option>
                        </select>
                        <p id="infoType" class="form-text" role="alert"> Please select!!!</p>
                        <p id="dangerValue" class="alert alert-danger " role="alert">Please, provide the data of indicated type!!!</p>
                    </div>

                    <div class="mb-3" id="switcherSize">
                        <label for="" class=" form-label">Size (MB)</label>
                        <input type="number" class="form-control" id="size">
                        <p id="infoSize" class="form-text" role="alert">Please, enter the number of megabytes in this field for the size of selected DVD. </p>
                        <p id="dangerSize" class="alert alert-danger " role="alert"> Please, submit required data!!!</p>
                    </div>

                    <div class="mb-3" id="switcherWeight">
                        <label for="" class=" form-label">Weight (KG)</label>
                        <input type="number" class="form-control" id="weight">
                        <p id="infoWeight" class="form-text" role="alert">Please, enter the number of kilogram in this field for the weight of selected book. </p>
                        <p id="dangerWeight" class="alert alert-danger" role="alert"> Please, submit required data!!!</p>
                    </div>

                    <div class="mb-3" id="switcherFurniture">
                        <label for="" class=" form-label">Height (CM)</label>
                        <input type="number" class="form-control" id="height">
                        <p id="dangerHeight" class="alert alert-danger" role="alert">Please, submit required data</p>
                        <p id="infoHeight" class="form-text" role="alert">Please, enter the number of centimeters in this field for the height of selected furniture. </p>
                        <label for="" class=" form-label">Width (CM)</label>
                        <input type="number" class="form-control" id="width">
                        <p id="dangerWidth" class="alert alert-danger" role="alert"> Please, submit required data!!!</p>
                        <p id="infoWidth" class="form-text" role="alert">Please, enter the number of centimeters in this field for the width of selected furniture. </p>
                        <label for="" class=" form-label">Length (CM)</label>
                        <input type="number" class="form-control" id="length">
                        <p id="dangerLength" class="alert alert-danger" role="alert"> Please, submit required data!!!</p>
                        <p id="infoLength" class="form-text" role="alert"> Please, enter the number of centimeters in this field for the length of selected furniture. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require_once "../view/footer.html"; ?>

    <script src="../controller/addProduct.js"></script>
</body>

</html>