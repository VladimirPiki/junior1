/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

/*This is function for navigation on click button */
jQuery(document).ready(function(){
  jQuery('div button').on('click', function(){
        var text = jQuery(this).text();
        if(text === "ADD PRODUCT"){
          window.location.href = "view/addproduct.php";
        }
        if(text === "Cancel"){
          window.location.href = "../index.php";
        }
  });
});

/*This is function to post data to PHP insert.php or delete.php and if is success, execute() to databae responds echo and if condition in this js is true go back to main page  */
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