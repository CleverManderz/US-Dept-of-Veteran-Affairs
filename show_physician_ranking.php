<?php 
include '../scripts/config.php'; 
if(!isset($_SESSION['client_id']) ) header("location: ../scripts/logout.php");
check_login();
$action = $_GET['action'];
$aid = $_GET['id'];
$msg = $_GET['msg'];
global $cid;

$cid = '17';
$client = new pi_client($cid);

### set session variables
$_SESSION['client_id'] = $client->id;
$_SESSION['client_name'] = $client->name;
$user = new pi_user($_SESSION['user_id']);
include('demo_header.php'); 

$arrVacciantedOfage19T49 = array();
/*
* get all the records for per_age19_vaccinated
*/
$strColumnsage19T49 = "team_name,age19_to_49_eligible_for_vaccination,age19_to_49_vaccinated,per_age19_to_49_vaccinated";
$strFromage19T49 = "metric_category";
$strWhereage19T49 = "metric_category.type='Metric1' ORDER BY per_age19_to_49_vaccinated Desc"; 
$arrVacciantedOfage19T49 = admin_pi_ctvhs_rank::getValues($strColumnsage19T49,$strFromage19T49,$strWhereage19T49);


/*
* get all the records for per_age19_vaccinated
*/
$strColumnsage50T64 = "team_name,age50_to_64_eligible_for_vaccination,age50_to_64_vaccinated,per_age50_to_64_vaccinated";
$strFromage50T64 = "metric_category";
$strWhereage50T64 = "metric_category.type='Metric1' ORDER BY per_age50_to_64_vaccinated Desc"; 
$arrVacciantedOfage50T64 = admin_pi_ctvhs_rank::getValues($strColumnsage50T64,$strFromage50T64,$strWhereage50T64);

/*
* get all the records for per_age19_vaccinated
*/
$strColumnsage65 = "team_name,age65_or_greater_eligible_for_vaccination,age65_or_greater_vaccinated,per_age65_or_greater_vaccinated";
$strFromage65 = "metric_category";
$strWhereage65 = "metric_category.type='Metric1' ORDER BY per_age65_or_greater_vaccinated Desc"; 
$arrVacciantedOfage65 = admin_pi_ctvhs_rank::getValues($strColumnsage65,$strFromage65,$strWhereage65);

/*
* get all the records for per_age19_vaccinated
*/
$strColumns = "team_name,age19_eligible_for_vaccination,age19_vaccinated,per_age19_vaccinated";
$strFrom = "metric_category";
$strWhere = "metric_category.type='Metric1' ORDER BY per_age19_vaccinated Desc"; 
$arrVacciantedOf19 = admin_pi_ctvhs_rank::getValues($strColumns,$strFrom,$strWhere);


$_SESSION['arrVacciantedOfage19T49'] = $arrVacciantedOfage19T49;
$_SESSION['arrVacciantedOfage50T64'] = $arrVacciantedOfage50T64;
$_SESSION['arrVacciantedOfage65'] = $arrVacciantedOfage65;
$_SESSION['arrVacciantedOf19'] = $arrVacciantedOf19;

?>
<br>
<br>
<br>
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Age 19-49 (Metric 1)</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge5064" class="tablesorter"> 
					<thead> 
					<tr> 
						<th>Rank</th> 
					    <th>Team Name</th> 
					    <th>Unq Pt Age 19-49 Eligble for Vaccination</th> 
					    <th>Unq Pt Age 19-49 With Vaccination</th> 
					    <th>Percent Unq Pt Age 19-49 With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOfage19T49 as $age19T49Key => $age19T49Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($age19T49Key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$age19T49Value['team_name']."' target='_blank'>".$age19T49Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$age19T49Value['age19_to_49_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$age19T49Value['age19_to_49_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$age19T49Value['per_age19_to_49_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
<!-- GRID 1 END -->

<!-- GRID Start -->
<br>
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Age 50-64 (Metric 1)</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge5064" class="tablesorter"> 
					<thead> 
					<tr> 
						<th>Rank</th> 
					    <th>Team Name</th> 
					    <th>Unq Pt Age 50-64 Eligble for Vaccination</th> 
					    <th>Unq Pt Age 50-64 With Vaccination</th> 
					    <th>Percent Unq Pt Age 50-64 With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOfage50T64 as $age50T64Key => $age50T64Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($age50T64Key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$age50T64Value['team_name']."' target='_blank'>".$age50T64Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$age50T64Value['age50_to_64_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$age50T64Value['age50_to_64_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$age50T64Value['per_age50_to_64_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
<!-- GRID END -->
<br>
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Age > 64 (Metric 1)</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge5064" class="tablesorter"> 
					<thead> 
					<tr> 
						<th>Rank</th> 
					    <th>Team Name</th> 
					    <th>Unq Pt Age > 64 Eligble for Vaccination</th> 
					    <th>Unq Pt Age > 64 With Vaccination</th> 
					    <th>Percent Unq Pt Age > 64 With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOfage65 as $age65Key => $age65Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($age65Key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$age65Value['team_name']."' target='_blank'>".$age65Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$age65Value['age65_or_greater_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$age65Value['age65_or_greater_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$age65Value['per_age65_or_greater_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
<br>
<!-- GRID 1 -->
<div id="page-wrapper" class="fixed">

<div class="full-width">

<div id="main-content">

 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">ALL Age (Metric 1)</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge19" class="tablesorter"> 
					<thead> 
					<tr> 
						<th class='td-text-center'>Rank</th> 
					    <th class='td-text-center'>Team Name</th> 
					    <th class='td-text-center'>Unq Pt ALL age Ranges Eligble for Vaccination</th> 
					    <th class='td-text-center'>Unq Pt ALL age Ranges With Vaccination</th> 
					    <th class='td-text-center'>Percent Unq Pt ALL age Ranges With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOf19 as $key => $value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$value['team_name']."' target='_blank'>".$value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$value['age19_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$value['age19_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$value['per_age19_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
</div><br>
<!-- GRID END -->

<!-- Metric Two Data-->

<?php 
/*
* get all the records for per_age19_vaccinated
*/
$strColumns_M2_age19T49 = "team_name,age19_to_49_eligible_for_vaccination,age19_to_49_vaccinated,per_age19_to_49_vaccinated";
$strFromage_M2_19T49 = "metric_category";
$strWhereage_M2_19T49 = "metric_category.type='Metric2' ORDER BY per_age19_to_49_vaccinated Desc"; 
$arrVacciantedOf_M2_age19T49 = admin_pi_ctvhs_rank::getValues($strColumns_M2_age19T49,$strFromage_M2_19T49,$strWhereage_M2_19T49);


/*
* get all the records for per_age19_vaccinated
*/
$strColumns_M2_age50T64 = "team_name,age50_to_64_eligible_for_vaccination,age50_to_64_vaccinated,per_age50_to_64_vaccinated";
$strFrom_M2_age50T64 = "metric_category";
$strWhere_M2_age50T64 = "metric_category.type='Metric2' ORDER BY per_age50_to_64_vaccinated Desc"; 
$arrVacciantedOf_M2_age50T64 = admin_pi_ctvhs_rank::getValues($strColumns_M2_age50T64,$strFrom_M2_age50T64,$strWhere_M2_age50T64);

/*
* get all the records for per_age19_vaccinated
*/
$strColumns_M2_age65 = "team_name,age65_or_greater_eligible_for_vaccination,age65_or_greater_vaccinated,per_age65_or_greater_vaccinated";
$strFrom_M2_age65 = "metric_category";
$strWhere_M2_age65 = "metric_category.type='Metric2' ORDER BY per_age65_or_greater_vaccinated Desc"; 
$arrVacciantedOf_M2_age65 = admin_pi_ctvhs_rank::getValues($strColumns_M2_age65,$strFrom_M2_age65,$strWhere_M2_age65);

/*
* get all the records for per_age19_vaccinated
*/
$strColumnsM2 = "team_name,age19_eligible_for_vaccination,age19_vaccinated,per_age19_vaccinated";
$strFromM2 = "metric_category";
$strWhereM2 = "metric_category.type='Metric2' ORDER BY per_age19_vaccinated Desc"; 
$arrVacciantedOf19M2 = admin_pi_ctvhs_rank::getValues($strColumnsM2,$strFromM2,$strWhereM2);

$_SESSION['arrVacciantedOf_M2_age19T49'] = $arrVacciantedOf_M2_age19T49;
$_SESSION['arrVacciantedOf_M2_age50T64'] = $arrVacciantedOf_M2_age50T64;
$_SESSION['arrVacciantedOf_M2_age65'] = $arrVacciantedOf_M2_age65;
$_SESSION['arrVacciantedOf19M2'] = $arrVacciantedOf19M2;
?>
<!-- Grid Start -->
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Age 19-49 (Metric 2 )</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge5064" class="tablesorter"> 
					<thead> 
					<tr> 
						<th>Rank</th> 
					    <th>Team Name</th> 
					    <th>Unq Pt Age 19-49 Eligble for Vaccination</th> 
					    <th>Unq Pt Age 19-49 With Vaccination</th> 
					    <th>Percent Unq Pt Age 19-49 With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOf_M2_age19T49 as $ageM219T49Key => $ageM219T49Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($ageM219T49Key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$ageM219T49Value['team_name']."' target='_blank'>".$ageM219T49Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$ageM219T49Value['age19_to_49_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$ageM219T49Value['age19_to_49_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$ageM219T49Value['per_age19_to_49_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
<!-- GRID 1 END -->

<!-- GRID Start -->
<br>
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Age 50-64 (Metric 2 )</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge5064" class="tablesorter"> 
					<thead> 
					<tr> 
						<th>Rank</th> 
					    <th>Team Name</th> 
					    <th>Unq Pt Age 50-64 Eligble for Vaccination</th> 
					    <th>Unq Pt Age 50-64 With Vaccination</th> 
					    <th>Percent Unq Pt Age 50-64 With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOf_M2_age50T64 as $ageM250T64Key => $ageM250T64Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($ageM250T64Key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$ageM250T64Value['team_name']."' target='_blank'>".$ageM250T64Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$ageM250T64Value['age50_to_64_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$ageM250T64Value['age50_to_64_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$ageM250T64Value['per_age50_to_64_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
<!-- GRID END -->
<!-- GRID END -->
<br>
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">Age > 64 (Metric 2)</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge5064" class="tablesorter"> 
					<thead> 
					<tr> 
						<th>Rank</th> 
					    <th>Team Name</th> 
					    <th>Unq Pt Age > 64 Eligble for Vaccination</th> 
					    <th>Unq Pt Age > 64 With Vaccination</th> 
					    <th>Percent Unq Pt Age > 64 With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOf_M2_age65 as $age65M2Key => $age65M2Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($age65M2Key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$age65M2Value['team_name']."' target='_blank'>".$age65M2Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$age65M2Value['age65_or_greater_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$age65M2Value['age65_or_greater_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$age65M2Value['per_age65_or_greater_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
</div><br>
<!-- GRID 2 END -->

<!-- GRID 1 -->
<div id="page-wrapper" class="fixed">
<div class="full-width">
<div id="main-content">
 <div class="page-title ui-widget-content ui-corner-all">
  <div class="other">
        <div class="portlet">
	    <div class="portlet-header">ALL Age (Metric 2)</div>
			<div class="portlet-content">
				<div class="hastable addScroll">
                <table id="MetricAge19" class="tablesorter"> 
					<thead> 
					<tr> 
						<th class='td-text-center'>Rank</th> 
					    <th class='td-text-center'>Team Name</th> 
					    <th class='td-text-center'>Unq Pt ALL age Ranges Eligble for Vaccination</th> 
					    <th class='td-text-center'>Unq Pt ALL age Ranges With Vaccination</th> 
					    <th class='td-text-center'>Percent Unq Pt ALL age Ranges With Vaccination</th>  
					</tr> 
					</thead> 
					<tbody> 
					<?php 
					foreach ($arrVacciantedOf19M2 as $M2key => $M2Value) {
						echo "<tr>";
						echo "<td class='td-text-center'>".($M2key+1)."</td>";
						echo "<td><a href='show_indivisiual_ranks.php?team_name=".$M2Value['team_name']."' target='_blank'>".$M2Value['team_name']."</a></td>";
						echo "<td class='td-text-center'>".$M2Value['age19_eligible_for_vaccination']."</td>";
						echo "<td class='td-text-center'>".$M2Value['age19_vaccinated']."</td>";
						echo "<td class='td-text-center'>".$M2Value['per_age19_vaccinated']."</td>";
						echo "</tr>";
					}
					?> 
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
</div><br>
<!-- GRID END -->
	<script>
	$(document).ready(function() {
   		//$("#accordion").accordion('activate', 4);
   		$("#MetricAge19,#MetricAge5064").tablesorter(); 
	});

</script>

<?php include('footer.php'); ?>
	</div>
</body>
</html>
