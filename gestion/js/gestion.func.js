/*
    Fonction qui permet d'afficher la modal de la page d'administration (gestion.php)
 */

$(document).ready(function () {
  $(".modal").modal();

  $(".see_projet").click(function () {
    var id = $(this).attr("id");
    $.post("validation/see_projet.php", { id: id }, function () {});
  });
});
