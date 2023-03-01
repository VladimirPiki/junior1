$(document).ready(function () {
  $("#dangerSku").hide();
  $("#dangerName").hide();
  $("#dangerPrice").hide();
  $("#dangerSize").hide();
  $("#dangerWeight").hide();
  $("#dangerHeight").hide();
  $("#dangerWidth").hide();
  $("#dangerLength").hide();
  $("#dangerValue").hide();
  $("#switcherSize").hide();
  $("#switcherWeight").hide();
  $("#switcherFurniture").hide();

  $("#productType").on("change", function () {
    $("#infoType").hide();
    let selectOption = $("option:selected").val();
    
    if (selectOption === "Size") {
      $("#switcherSize").show();
      $("#switcherWeight").hide();
      $("#switcherFurniture").hide();
      $("#dangerValue").hide();
    } else if (selectOption === "Weight") {
      $("#switcherWeight").show();
      $("#switcherFurniture").hide();
      $("#switcherSize").hide();
      $("#dangerValue").hide();
    } else if (selectOption === "Dimension") {
      $("#switcherFurniture").show();
      $("#switcherSize").hide();
      $("#switcherWeight").hide();
      $("#dangerValue").hide();
    } else {
      $("#infoType").show();
      $("#switcherSize").hide();
      $("#switcherWeight").hide();
      $("#switcherFurniture").hide();
    }
  });
});

///// This is for input field do not recive negative numbers
$(document).on(
  "input",
  "#size",
  function () {
    this.value = this.value.replace(/\D/g, "");
  }
);

$(document).on("click", "button", function () {
  let addSku = $("#sku").val();
  let addName = $("#name").val();
  let addPrice = $("#price").val();
  let addType = $("#productType").find(":selected").val();
  let addSize = $("#size").val();
  let addWeight = $("#weight").val();
  let addHeight = $("#height").val();
  let addWidth = $("#width").val();
  let addLength = $("#length").val();

if(addSize != ""){
  var addValue=addSize+" MB";
}

if(addWeight != ""){
  var addValue=addWeight+" Kg";
}

if(addHeight != "" && addWidth != "" && addLength != ""){
  var addValue=addHeight+"x"+addWidth+"x"+addLength;
}
  let objProduct = [
    {
      id: addSku,
      name: addName,
      price: addPrice,
      attributes: addType,
      value: addValue,
      "table_name": "product"
    },
  ];

  if (addSku != "" && addName != "" && addPrice != "" && addType != "Type switcher" && addValue != undefined) {
    postData("insert", objProduct);
  } else {
    if( addSku === ""){
      $("#dangerSku").show();
    }else{
      $("#dangerSku").hide();
    }

    if( addName === ""){
      $("#dangerName").show();
    }else{
      $("#dangerName").hide();
    }

    if( addPrice === ""){
      $("#dangerPrice").show();
    }else{
      $("#dangerPrice").hide();
    }

    if(addType === "Type switcher"){
      $("#dangerValue").show();
      $("#infoType").hide();
    }else{
      $("#dangerValue").hide();
      $("#infoType").show();
    }

    if( addSize === ""){
      $("#dangerSize").show();
      $("#infoSize").hide();
    }else{
      $("#dangerSize").hide();
      $("#infoSize").show();
    }

    if( addWeight === ""){
      $("#dangerWeight").show();
      $("#infoWeight").hide();
    }else{
      $("#dangerWeight").hide();
      $("#infoWeight").show();
    }

    if( addHeight === ""){
      $("#dangerHeight").show();
      $("#infoHeight").hide();
    }else{
      $("#dangerHeight").hide();
      $("#infoHeight").show();
    }

    if( addWidth === ""){
      $("#dangerWidth").show();
      $("#infoWidth").hide();
    }else{
      $("#dangerWidth").hide();
      $("#infoWidth").show();
    }

    if( addLength === ""){
      $("#dangerLength").show();
      $("#infoLength").hide();
    }else{
      $("#dangerLength").hide();
      $("#infoLength").show();
    }
  }
});
