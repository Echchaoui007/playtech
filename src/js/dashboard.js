let tr = $("tbody tr");
tr.on("click", function () {
   tr.removeClass('table-active'); // remove seleted style from all rows 

   $(this).addClass('table-active'); // add selected style to clicked row
   $("#btn-delete").val($(this).children(":first").text())
   $("html,body").animate({scrollTop: $("#controls").offset().top})
})


