
$("#test").on("click", function () {

   $.getJSON("managment.php", function (result) {
      console.log(result);
   })

})
