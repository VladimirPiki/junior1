// BITNOOO NESTOOO  <input type="checkbox" id="' + json[i].id + '"> vo ova treba da stoj i value="' + json[i].id + '"> ako ima problem

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
        console.log(jsonL);
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
              "</p><p>" +
              json[i].attributes +
              "</p><p>" +
              json[i].value +
              "</p></div></div></div></div>";
          }
          $("#showProduct").html(divCol3);
          console.log(divCol3);
        }
      }
    },
  });
}

$(document).ready(function () {
  //checkLogin();
  getData("product", { table_name: "product" });
});

///////////////////////////////POST///////////////////////////////////////////////////////////
function postData(file, podatociOdForm) {
  $.ajax({
    type: "POST",
    url: "../model/" + file + ".php",
    data: JSON.stringify(podatociOdForm),
  });
}

///////////////////////////////DELETE///////////////////////////////////////////////////////
$(document).on("click");
