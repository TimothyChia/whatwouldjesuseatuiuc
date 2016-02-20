<!DOCTYPE html>
<html>
<head>
  <title>UIUC POOP</title>
  
		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="//wwje.azurewebsites.net/js/jquery-2.1.1.min.js"><\/script>')</script>
		<script src="//wwje.azurewebsites.net/js/global.js?v=ytEawujPk7XzkKtfIXzUItZz24b22P4aTQBlun3PRik1"></script>

</head>
<body>

<p>Test forms</p>

<script>
    $(function () {
        $("#txtServingDate").datepicker();
    });
</script>

<form method="post" action="http://wwje.azurewebsites.net" id="MyHousingForm"> //form

<input name="pagebody_0$txtServingDate" value="2/20/2016" id="txtServingDate" tabindex="2" class="form-control hasDatepicker" type="text"> //date

<select name="pagebody_0$ddlLocations" id="pagebody_0_ddlLocations" class="form-control">
	<option value="Busey-Evans Serving">Busey-Evans</option>
	<option value="FAR Serving">FAR</option>
	<option value="Don's Chophouse Serving, Gregory Street Diner Serving, Hortensia's Serving, Penne Lane Serving, Prairie Fire Serving, Soytainly Serving, Euclid Street Deli Serving, Baked Expectations Serving, Better Burger IKE Serving, Neo Soul Serving">Ikenberry</option>
	<option value="ISR Serving">ISR</option>
	<option value="LAR Serving">LAR</option>
	<option selected="selected" value="Abbondante Serving, Arugula's Serving, La Avenida Serving, Panini Bar, Provolone Serving, Sky Garden Serving, Better Burger Serving">PAR</option>

</select>

<input name="pagebody_0$btnSubmit" value="Select" id="pagebody_0_btnSubmit" class="btn btn-primary" type="submit">
-------------------
<a id="MenuStart"></a>
<script type="text/javascript">
//<![CDATA[
document.getElementById('MenuStart').scrollIntoView();//]]>
</script>
</body>
</html>
