$(document).on("click", "#addproduct", function () {
  window.location.href = "view/addproduct.php";
});
$(document).on("click", "#cancel", function () {
  window.location.href = "../index.php";
});

function postData(file, dataVariable) {
  $.ajax({
    type: "POST",
    url: "../model/" + file + ".php",
    data: JSON.stringify(dataVariable),
    success: function (data) {
      if (file === "insert") {
        if (data === "success") {
          window.location.href = "../index.php";
        } 
      }
    },
  });
}
