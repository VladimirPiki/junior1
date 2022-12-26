console.log("test");
////////////////////////////////--------INSERT-------------////////////////////////////////////////////////////////

$(document).on("click", "#proba", function () {
  $("#probaTuka").append(
    '<span class="mb-3">' +
      '<label for="" class=" form-label">Size</label>' +
      '<input type="number" class="form-control" id="price">' +
      "</span>"
  );
});
$(document).on(function () {});

/*
$(document).on("click", "#save", function () {
  let addOriginalName = $("#originalName").val();
  let addAlternativeName = $("#alternativeName").val();
  let addSport = $("#natprevaruvanjeSport").find(":selected").val();
  let addEfTeam = $("#efTeam").val();
  let objTeams = [
    {
      original_name: addOriginalName,
      alternative_name: addAlternativeName,
      sport: addSport,
      ef_team: addEfTeam,
      table_name: "teams",
    },
  ];
  //console.log(objTeams)
  if (addOriginalName.length > 3 && addSport != "" && addEfTeam.length != "") {
    if (findCellInTable("#myTable", "#originalName") == -1) {
      postData("insert", objTeams);
      alert("Успешно додадовте");
      window.location.href = "../view/teams.html";
    } else {
      alert("Записот постои!!!");
      window.location.href = "../view/teams.html";
    }
  } else {
    alert("Неуспешно додадовте. Пополнете правилно!!!");
  }
});
*/
