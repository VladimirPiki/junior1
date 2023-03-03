/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

/////Navigation ///////////////////////
$(document).on("click", "#addproduct", function () {
  window.location.href = "view/addproduct.php";
});
$(document).on("click", "#cancel", function () {
  window.location.href = "../index.php";
});

///////Post data to PHP insert or delete//////////////
function postData(file, dataVariable) {
  if(file==="insert"){
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
  }else if(file==="delete"){
    $.ajax({
      type: "POST",
      url: "model/" + file + ".php",
      data: JSON.stringify(dataVariable),
     success: function (data) {
        if(file === "delete") {
          if (data === "success") {
            window.location.href = "index.php";
          } 
        }
      },
    });
  }

}