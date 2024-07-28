$(document).ready(function () {
  $("#slider-range-min").slider({
    range: "min",
    value: 8000,
    min: 100,
    max: 10000,
    slide: function (event, ui) {
      $("#amount").val(ui.value);
      loadData(100, ui.value); // min is always 100
    },
  });
  $("#amount").val($("#slider-range-min").slider("value"));

  function loadData(range1, range2) {
    $("#mainData").fadeOut("fast", function () {
      $.ajax({
        url: "get_data.php",
        type: "POST",
        data: {
          range1: range1,
          range2: range2,
        },
        success: function (data) {
          $("#mainData").html(data).fadeIn("fast");
        },
      });
    });
  }

  // Load initial data
  loadData(100, $("#slider-range-min").slider("value"));
});
