/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

/*
This is function for display value (Select) with AJAX through select.php from database.
Function getData work with ajax, post method to url and stringify post data. Respond success function data and this data is parsed from array to json with jQuery.parseJSON,and then is json limit with length. For loop is for all json data for display from database to <div id="#showProduct"> in html.
*/
function getData(action, post_data) {
  $.ajax({
    type: "POST",
    url: "model/select.php",
    data: JSON.stringify(post_data),
    success: function (data) {
      let json = jQuery.parseJSON(data);
      let jsonL = json.length;
      let divCol3 = "";
      if (action) {
        for (let i = 0; i < jsonL; i++) {
          if (json[i].id != null) {
            divCol3 +=
              '<div class="col-3" id="' +
              json[i].id +
              '"><div class="card myContainer""><div class="card-body text-center"><input type="checkbox" " id="' +
              json[i].id +
              '"><p>' +
              json[i].id +
              "</p><p>" +
              json[i].name +
              "</p><p>" +
              json[i].price +
              " $</p><p>" +
              json[i].attributes +
              ": " +
              json[i].value +
              "</p></div></div></div></div>";
          }
          $("#showProduct").html(divCol3);
        }
      }
    },
  });
}

/*This function is for which table is the displaying */
$(document).ready(function () {
  getData("product", { table_name: "product" });
});

/*This function is for deleting through id value to function postData and then in delete.php */
$(document).on('click', 'input', function () {
  let id_html = $(this).attr("id");
  $(document).on('click', '#massDelete', function () {
    postData("delete", [{ "pk_id": id_html, "table_name": "product" }]);
  });
});
