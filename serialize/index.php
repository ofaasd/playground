<html>
<head>
  <title>Serialize Testing</title>
</head>
<body>
  <form>
    <div id="cek">
     <input type="checkbox" name="check[]" value="1" id="ch1">
     <label for="ch1">check1</label><br />
     <input type="checkbox" name="check[]" value="2" checked="checked" id="ch2">
     <label for="ch2">check2</label>
     <br>
   </div>
  </form>

  <p><tt id="results"></tt></p>
  <div id="hasil"></div>
  <script src="jquery.js"></script>
  <script>
  $( "#cek :checkbox" ).click(function(){
    var myCheckboxes = new Array();
    $("#cek > input:checked").each(function() {
       myCheckboxes.push($(this).val());
    });
    $.ajax({
      data : "testing="+myCheckboxes,
      type : "POST",
      url : "testing.php",
      success : function(data){
        $("#hasil").html(data);
      }
    });
  });


  </script>
</body>
</html>
