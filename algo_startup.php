<?php
session_start();
?><?php
/*
Template Name: algorithm_startup
*/
?><?php
if (!defined('THEME_VERSION')) {    header('HTTP/1.0 403 Forbidden'); exit; }
?>

<?php get_header(); ?>


 
<div style="width: 90%; margin: auto; text-align: center;">

<div style="margin-left: 10px; position: relative; display: inline-block; margin-top: 30px; margin-bottom: 35px; width: 1200px; min-height: 950px;">
<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Basic Information</li>
    <li class="progtrckr-done">Finance</li>
    <li class="progtrckr-todo">Market Place</li>
    <li class="progtrckr-todo">Operations</li>
    <li class="progtrckr-todo">Funding Profile Score</li>
</ol>
<br/>
<br/>
<br/>
<div class="algo_form">
<form action = "../startup_process_finance" method="POST">
<div><label>Total Business  Assets (assets used for only business purpose):</label></div>
<div><input type= "text" name="businessAsset" class="form-control"></div>

<div><label>Current Assets(amount easily converted to liquidity to settle debt):</label></div>
<div><input type="text" class="form-control" name="currentAsset"></div>

<div><label>Total Current Liabilities:</label></div>
<div><input type="text" class="form-control" name="currentLiability"></div>

<div><label>Total Retained Earnings:</label></div>
<div><input type="text" class="form-control" name="totalEarning"></div>

<div><label>Earnings Before Interest and Taxes:</label></div>
<div><input type="text" class="form-control" name="earningsBeforeTax"></div>

<div><label>Book Value of Equity (personal investment in business)</label></div>
<div><input type="text" class="form-control" name="valueOfEquity"></div>

<div><label>Can You Provide A Current Balance Sheets for the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="currentBalanceSheet">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Can You Provide an Income Statement for the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="incomeStatement">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Can You Provide Financial Projections for the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="financialProjection">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Can You Provide A Cash Flow Statement for the Last 12 Months: </label></div>
<div><select type="text" class="form-control" name="cashFlowStatement">
		<option value="48 Months">48 Months</option>
		<option value="36 Months">36 Months</option>
		<option value="24 Months">24 Months</option>
		<option value="12 Months">12 Months</option>
	</select>
</div>

<div><label>Can You Provide A Breakeven Analysis for the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="breakevenAnalysis">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Can You Provide Tax Returns for the Last 12 Months:</label></div>
<div><select type="text" class="form-control" name="taxReturn">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Do You Owe More Than $25,000 Personal Debt:</label></div>
<div><select type="text" class="form-control" name="owePersonalDebt">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Do You Owe More Than $100,000 Company Debt:</label></div>
<div><select type="text" class="form-control" name="companyDebt">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>

<div><label>Do You Have Any Litigation or Bankruptcy Filings:</label></div>
<div><select type="text" class="form-control" name="litigationOrBankruptcy">
		<option value="No">No</option>
		<option value="Maybe">Maybe</option>
		<option value="Yes">Yes</option>
	</select>
</div>
<div><input type="submit" class="algo_submit" name="submit"></div>
<br/>
<br/>
</form>
</div>

</div>
</div>


<?php get_footer(); ?>