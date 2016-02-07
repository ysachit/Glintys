<script type="text/javascript" src="js/jquery.min.js">
</script>
<script>
function show()
{
	$("h1").show();
	}
function hide()
{
	$("h1").hide([2],[5],[3]);
	}

</script>
<div id="a">
   <h1>JQuery First example</h1>
   <p>First Jquery </p>
   </div>
  <input type="button" onClick="show()" value="show">
  <input type="button" onClick="hide()" value="hide">
 