<?php 
	include '../scripts/config.php'; 
	include('demo_header.php');
check_login();

$action = $_GET['action'];
$aid = $_GET['id'];
$msg = $_GET['msg'];
// I added this so that we can have a client id and activity id running at the same time
// I am going to Hard  code the client id here because this is the user side for twine
// and the client id will always be the same for this client.
//$cid = $_GET['cid'];

	global $cid;

	$cid = '17';

	$client = new pi_client($cid);

	### set session variables
	$_SESSION['client_id'] = $client->id;
	$_SESSION['client_name'] = $client->name;
	$strMetricTable = "metric_category";
	$strMetric1Where = " type = 'Metric1'";
	$strMetric2Where = " type = 'Metric2'";
	$arrMetric1All = pi_c3_charts::getValues('*',$strMetricTable,$strMetric1Where);
	$arrMetric2All = pi_c3_charts::getValues('*',$strMetricTable,$strMetric2Where);
	$user = new pi_user($_SESSION['user_id']);

 ?>
<br>
<br>
<!-- GRID 1 -->
<div id="page-wrapper" class="fixed">

<div class="full-width">

<div id="main-content">

 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Metric 1</div>
			<div class="portlet-content">
				<div class="hastable add-grid-overflow">
			
            	<? //print $client->get_pi_module_selectlist(); ?>
                
                <? //print $user->get_user_activity_selectlist(0);?>
                <table id="Metric1" class="tablesorter"> 
					<thead> 
					<tr> 
					    <th>Team Name</th> 
					    <th>Age 19-49 <br>Elgible<br> For Vaccination</th> 
					    <th>Age 19-49 <br> Vaccinated</th> 
					    <th>% Age 19-49 Vaccinated </th> 
					    <th>Age 50-64  <br> Eligible <br>  Vaccination</th> 
					    <th>Age 50-64  <br> Vaccinated</th> 
					    <th>% Age 50-64 <br> Vaccinated </th> 
					    <th>Age > 65 <br> Eligible <br>  Vaccination</th> 
					    <th>Age > 65  <br> Vaccinated</th> 
					    <th>% Age > 65 <br> Vaccinated </th> 
					    <th>Age 19 <br>Elgible<br> For Vaccination</th> 
					    <th>Age 19  <br> Vaccinated</th> 
					    <th>% Age 19 <br> Vaccinated </th> 
					</tr> 
					</thead> 
					<tbody>
					<?php foreach($arrMetric1All as $intMetric1Key => $strMetric1Values) {

					echo"
					<tr> 
					   <td> <a href= 'charts.php?pact_name= ".$strMetric1Values['team_name']."' target=_blank>".$strMetric1Values['team_name']."</a></td> 
					    <td>".$strMetric1Values['age19_to_49_eligible_for_vaccination']."</td> 
					    <td>".$strMetric1Values['age19_to_49_vaccinated']."</td> 
					    <td>".$strMetric1Values['per_age19_to_49_vaccinated']."</td> 
					    <td>".$strMetric1Values['age50_to_64_eligible_for_vaccination']."</td> 
					    <td>".$strMetric1Values['age50_to_64_vaccinated']."</td> 
					    <td>".$strMetric1Values['per_age50_to_64_vaccinated']."</td> 
					    <td>".$strMetric1Values['age65_or_greater_eligible_for_vaccination']."</td> 
					    <td>".$strMetric1Values['age65_or_greater_vaccinated']."</td> 
					    <td>".$strMetric1Values['per_age65_or_greater_vaccinated']."</td> 
					    <td>".$strMetric1Values['age19_eligible_for_vaccination']."</td> 
					    <td>".$strMetric1Values['age19_vaccinated']."</td> 
					    <td>".$strMetric1Values['per_age19_vaccinated']."</td> 
					</tr>"; 
					}?> 
					</tbody> 
					</table> 
    
           
           </div>     
           </div>
         <div class="clearfix"></div>
         </div>     
	     </div>
            <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            </div>
			<div class="clearfix"></div>
		</div>

		<div id="page-wrapper" class="fixed">
<!-- GRID 1 END -->
<div class="full-width">
<br>
<br>
<!-- GRID 2 -->
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Metric 2</div>
			<div class="portlet-content">
				<div class="hastable add-grid-overflow">
                <table id="Metric2" class="tablesorter"> 
					<thead> 
					<tr> 
					    <th>Team Name</th> 
					    <th>Age 19-49 <br>Elgible<br> For Vaccination</th> 
					    <th>Age 19-49 <br> Vaccinated</th> 
					    <th>% Age 19-49 Vaccinated </th> 
					    <th>Age 50-64  <br> Eligible <br>  Vaccination</th> 
					    <th>Age 50-64  <br> Vaccinated</th> 
					    <th>% Age 50-64 <br> Vaccinated </th> 
					    <th>Age > 65 <br> Eligible <br>  Vaccination</th> 
					    <th>Age > 65  <br> Vaccinated</th> 
					    <th>% Age > 65 <br> Vaccinated </th> 
					    <th>Age 19 <br>Elgible<br> For Vaccination</th> 
					    <th>Age 19  <br> Vaccinated</th> 
					    <th>% Age 19 <br> Vaccinated </th> 
					</tr> 
					</thead> 
					<tbody> 
					<?php foreach($arrMetric2All as $intMetric2Key => $strMetric2Values) {

					echo"
					<tr> 
					    <td> <a href= 'charts.php?pact_name= ".$strMetric2Values['team_name']."' target=_blank>".$strMetric2Values['team_name']."</a></td> 
					    <td>".$strMetric2Values['age19_to_49_eligible_for_vaccination']."</td> 
					    <td>".$strMetric2Values['age19_to_49_vaccinated']."</td> 
					    <td>".$strMetric2Values['per_age19_to_49_vaccinated']."</td> 
					    <td>".$strMetric2Values['age50_to_64_eligible_for_vaccination']."</td> 
					    <td>".$strMetric2Values['age50_to_64_vaccinated']."</td> 
					    <td>".$strMetric2Values['per_age50_to_64_vaccinated']."</td> 
					    <td>".$strMetric2Values['age65_or_greater_eligible_for_vaccination']."</td> 
					    <td>".$strMetric2Values['age65_or_greater_vaccinated']."</td> 
					    <td>".$strMetric2Values['per_age65_or_greater_vaccinated']."</td> 
					    <td>".$strMetric2Values['age19_eligible_for_vaccination']."</td> 
					    <td>".$strMetric2Values['age19_vaccinated']."</td> 
					    <td>".$strMetric2Values['per_age19_vaccinated']."</td> 
					</tr>"; 
					}?> 
					</tbody> 
					</table> 
    
           
           </div>     
           </div>
         <div class="clearfix"></div>
         </div>     
	     </div>
            <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            </div>
			<div class="clearfix"></div>

		</div>
<!-- GRID 2 END -->
	<script>
	$(document).ready(function() {

   		//$("#accordion").accordion('activate', 4);
   		$("#Metric1, #Metric2").tablesorter(); 
	});

</script>

<?php include('footer.php'); ?>
	</div>
</body>
</html>
