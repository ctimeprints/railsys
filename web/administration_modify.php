<?php
session_start();
$meta_tag2jump = "";

if(isset($_SESSION['temp_user']))
  {

  }
else
  {
	// header("location:login.php");
	$meta_tag2jump = '<meta http-equiv="refresh" content="0;login.php">';
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home: Trains Schedule Searching System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Database project, by Simon Cao.">
	<meta name="author" content="Simon Cao">

<?php
	echo $meta_tag2jump;
?>

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>
	<link href='css/mymymy.css' rel='stylesheet'>
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- get sites from databse-->
<script type="text/javascript">
var id=null;
function confirmclicked(){
	if (id != null) {

		// var child=document.getElementById("tr" + trainid);
		// child.parentNode.removeChild(child);
		//todo: delete the tuple in database
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    alert(xmlhttp.responseText);
    }
  }

xmlhttp.open("POST","administration_handle.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("trainid="+id+"&myQuestType=deleterow");

		location.reload();
	}
}


//get clicked row
function deleteTr(trainid){
	id = trainid;
}
</script>


	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>




<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><img alt="Charisma Logo" src="img/logo20.png" /><span>Trains Schedule Searching System</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="login.php">Logout</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- topbar ends -->



		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="administration_home.php"><i class="icon-home"></i><span class="hidden-tablet"> Admin Home</span></a></li>
						<li><a class="ajax-link" href="administration_add.php"><i class="icon-plus"></i><span class="hidden-tablet"> Add Info</span></a></li>
						<li><a class="ajax-link" href="administration_modify.php"><i class="icon-pencil"></i><span class="hidden-tablet"> Modify</span></a></li>
						
					</ul>
					
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="administration_home.php">Admin Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="administration_modify.php">Modify</a>
					</li>
				</ul>
			</div>

<!--mymymy-->
<?php
$con = mysql_connect("localhost","trainsAdmin","nwGXxXjTJzVJLuS4");
if (!$con)
  {
  die('请检查: ' . mysql_error());
  }
mysql_select_db("trains_system", $con);

$sql = "SELECT no, train_name, depart_time, arrival_time, count_day, site_name_1, site_name_2 FROM view_trains;";
$result = mysql_query($sql);


$table_header = "<th>车次</th><th>始发时间</th><th>终到时间</th><th>天数</th><th>起始站</th><th>终点站</th><th>操作</th>";

echo '<!--table!!!!, start from here -->
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>';
							  echo $table_header;
						echo '</tr>
						  </thead>   
						  <tbody>';

						  while($row = mysql_fetch_array($result))
  							{
  							echo '<tr id="tr'.$row['no'].'">';
  							echo "<td>" . $row['train_name'] . "</td>";
  							echo "<td>" . $row['depart_time'] . "</td>";
  							echo "<td>" . $row['arrival_time'] . "</td>";
  							echo "<td>" . $row['count_day'] . "</td>";
  							echo "<td>" . $row['site_name_1'] . "</td>";
  							echo "<td>" . $row['site_name_2'] . "</td>";
  							echo "<td>" . '<a href="admin_editatrain.php?trainid='.$row['no'].'"><span class="icon icon-blue icon-edit"></span></a>&nbsp;&nbsp;
  											<a href="#" class="btn-setting" onclick="deleteTr('.$row['no'].')">
  											<span class="icon icon-blue icon-trash"></span></a>'. "</td>";
  							echo "</tr>";
  							}
  						echo '</tbody>
					  </table>            
					</div>';



?>	
<!--mymymy-->
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Warning!</h3>
			</div>
			<div class="modal-body" id="my-modal-body">
				<p>确认删除？删除路线后将不可恢复</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary noty" onclick="confirmclicked()" data-noty-options="{&quot;text&quot;:&quot;handling&quot;,&quot;layout&quot;:&quot;topCenter&quot;,&quot;type&quot;:&quot;success&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">Confirm</button>
				<a href="#" class="btn" data-dismiss="modal">Cancel</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="http://ctimeprints.github.io" target="_blank">Simon Cao</a> 2015</p>
			<p class="pull-right">Powered by: <a href="index.html">Trains Schedule Searching System</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->



	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	
		
</body>
</html>