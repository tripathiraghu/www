<html>
<title>President Message</title>
<link href="main.css" rel="stylesheet" type="text/css">
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng( 25.930000000000000000,74.638611099999930000),
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<body>
<div>
<?php
include 'header.php';
?>
</div>
<table width="100%" height="100%" border="1" align="center" class="nm1">
<tr align="center"><td><center>
<div id="googleMap" style="width:700px;height:450px;"></div></center></td>
</tr>
</table>
</body>
</html>