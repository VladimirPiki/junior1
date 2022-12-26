console.log("ova e app.js aj da vidime")
$(document).on('click', "#addproduct", function () {
    window.location.href = "view/addproduct.php";
})
$(document).on('click', "#cancel", function () {
    window.location.href = "../index.php";
})
