$("#apply").hide(); 
$("#browse").show(); 
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    (reader.onload = function (e) {
        var imgName = e.target.result;
        $("#preview").attr("src", e.target.result);
      // insert data
          $("#apply").show();
          $("#browse").hide(); 
        
    }),
      reader.readAsDataURL(input.files[0]);
  }
}
