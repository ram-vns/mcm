<?php

?>
<!DOCTYPE html>
<html>
<meta charset='utf-8'/>
<link rel="stylesheet" href="colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.colorbox.js"></script>

<script>
$(document).ready(function(){
$(".ajax").colorbox();
});
</script>

<body>

<form>
<input type="text" id="myval" name="mydata">
<a class='ajax' href="searchurl.phtml" title="Homer Defined"><button>Select</button></a>
</form>
<script>
function call(){

}
</script>

</body>
</html>

