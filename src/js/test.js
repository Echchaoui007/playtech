
$("#test").on("click", function () {

   $.getJSON("./admin/managment.php", function (result) {
      console.log(result);
   })

})
