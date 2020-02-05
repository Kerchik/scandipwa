$(document).ready(function(){
  $("#book").hide();
  $("#furniture").hide();
  $("#dvd").hide();
  $("#switcher").change(function() {
    let selected = $(this).children("option:selected").val();
    if (selected == "book") {
      $("#book").show();
      $("#furniture").hide();
      $("#dvd").hide();
      $("#s1").val("");
      $("#f1").val("");
      $("#f2").val("");
      $("#f3").val("");
    }
    if (selected == "furniture") {
      $("#furniture").show();
      $("#book").hide();
      $("#dvd").hide();
      $("#dvd").hide();
      $("#s1").val("");
      $("#b1").val("");
    }
    if (selected == "dvd-disc") {
      $("#dvd").show();
      $("#furniture").hide();
      $("#book").hide();
      $("#b1").val("");
      $("#f1").val("");
      $("#f2").val("");
      $("#f3").val("");
    }

});

});
