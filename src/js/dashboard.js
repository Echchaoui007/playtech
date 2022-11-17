let tr = $("tbody tr");
tr.on("click", function () {
   tr.removeClass('table-active'); // remove seleted style from all rows 

   $(this).addClass('table-active'); // add selected style to clicked row
})


