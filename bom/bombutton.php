<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Sample</title>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../fancybox/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="../fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript" src="../fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox();
});
</script>
    <style type="text/css" title="currentStyle">
			@import "../css/demo_page.css";
			@import "../css/demo_table_jui.css";
			@import "../css/jquery-ui-1.8.4.custom.css";
		</style>
<script src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
				oTable = jQuery('#tbl').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				});
		</script>


</head>
<br>

<center><a href="addbalise.php" id="myButton" class="fancybox fancybox.ajax"><i class="fa fa-plus"><br></i><br> Ajouter</a>

<a href="baliseExport.php" id="myButton"><i class="fa fa-file-excel-o"><br></i><br> Excel</a>

<a id="myButton"  class="fancybox fancybox.ajax" onclick="javascript:window.print()"><i class="fa fa-print"><br></i><br> Imprimer</a>

<br>
<br>


</center>
