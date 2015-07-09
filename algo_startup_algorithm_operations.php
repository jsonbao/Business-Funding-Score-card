<?php
session_start();
?><?php
/*
Template Name: algo_startup_operations
*/
?><?php
if (!defined('THEME_VERSION')) {    header('HTTP/1.0 403 Forbidden'); exit; }
?>
<?php
get_header();
?>
<div style="width: 90%; margin: auto; text-align: center;">

<div style="margin-left: 10px; position: relative; display: inline-block; margin-top: 30px; margin-bottom: 35px; width: 1200px; min-height: 950px;">
<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Basic Information</li>
    <li class="progtrckr-done">Finance</li>
    <li class="progtrckr-done">Market Place</li>
    <li class="progtrckr-done">Operations</li>
    <li class="progtrckr-todo">Funding Profile Score</li>
</ol>
<br/>
<br/>
<br/>
<div class="algo_form">
<form action = "../algo_startup_process_operations" method="POST">
<div><label>What is the Financing Structure You Are Seeking:</label></div>
<div><select type="text" class="form-control" name="financingStructure">
		<option value="Equity">Equity</option>
		<option value="Debt">Debt</option>
		<option value="Combination">Combination</option>
		<option value="Convertible">Convertible</option> 
		<option value="All">All</option>
	</select></div>

<div><label>Can You Pinpoint How the Funding Will Improve the Company Over Next 12 Months:</label></div>
<div><select type="text" class="form-control" name="fundingImprove">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select></div>

<div><label>What is the Likelihood of Your Company Scaling Over the Next 12 Months:</label></div>
<div><select type="text" class="form-control" name="companyScaling">
		<option value="None">None</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
		<option value="Excellent">Excellent</option>
	</select></div>

<div><label>Describe Your Exit Strategy for the Company:</label></div>
<div><select type="text" class="form-control" name="exitStrategy">
		<option value="IPO (Initial Public Offering)">IPO (Initial Public Offering)</option>
		<option value="Retain Ownership">Retain Ownership</option>
		<option value="Sell for Profit">Sell for Profit</option>
	</select></div>

<div><label>What is Your Ownership Percentage in the Business:</label></div>
<div><select type="text" class="form-control" name="ownershipPercentage">
		<option value="1-15%">1-15%</option>
		<option value="15-30%">15-30%</option>
		<option value="30-50%">30-50%</option>
		<option value="More than 50%">More than 50%</option>
	</select></div>

<div><label>Have You Utilized Risk Mitigation Processes and Tools for the Company Over Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="riskMitigation">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select></div>

<div><label>Does the Company Have Board Members/Formal Advisors:</label></div>
<div><select type="text" class="form-control" name="borderMembers">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Will the Company Provide Employee Vesting Options:</label></div>
<div><select type="text" class="form-control" name="employeeVesting">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>How Consistent Were Your Revenue Streams Over Last 12 Months: </label></div>
<div><select type="text" class="form-control" name="revenueStreamConsistence">
		<option value="None">None</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>Determine Your Leadership Team's Management Abilities: </label></div>
<div><select type="text" class="form-control" name="leaderhipTeam">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>Explain Your Company's Level of Employee Expertise:</label></div>
<div><select type="text" class="form-control" name="employeeExpertise">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>Does Your Product/Company Have Competitive Advantage in the Marketplace:</label></div>
<div><select type="text" class="form-control" name="competitiveAdvantage">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>How Effective Was Your Marketing/Promotions Strategy Over the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="marketingStrategy">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>How Effective Was Your Sales Strategy Over the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="salesStrategy">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>What is the Potential of Your Sales Forecast Over the Next 12 Months:</label></div>
<div><select type="text" class="form-control" name="salesForcast">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>What is the Potential of Your Market Growth Forecast Over the Next 12 Months:</label></div>
<div><select type="text" class="form-control" name="growthForcast">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>How Strong is Your Current Distribution Strategy:</label></div>
<div><select type="text" class="form-control" name="distributionStrategy">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>

<div><label>How Strong are Your Vendor/Supplier Relationships:</label></div>
<div><select type="text" class="form-control" name="supplierRelationship">
		<option value="Poor">Poor</option>
		<option value="Fair">Fair</option>
		<option value="Good">Good</option>
		<option value="Very Good">Very Good</option>
	</select>
</div>
<div><input type="submit" class="algo_submit" name="submit"></div>
<br/>
<br/>
</form>
</div>

</div>
</div>
<?php
get_footer();
?>