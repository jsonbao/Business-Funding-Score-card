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
    <li class="progtrckr-todo">Finance</li>
    <li class="progtrckr-todo">Market Place</li>
    <li class="progtrckr-todo">Operations</li>
    <li class="progtrckr-todo">Funding Profile Score</li>
</ol>
<br/>
<br/>
<br/>
<div class="algo_form">
<form action = "../algo_processes" method="POST">
<div><label>Business Type:</label></div>
<div><select class="form-control" name="businesstype">
	<option value="Start Up">Start Up</option>
	<option value="Small Business">Small Business</option>
</select></div>

<div><label>Owner Name:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Company Legal Name:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>State/ City/Zip:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Phone( Area code/Phone number):</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Email:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Website:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Years in Business:</label></div>
<div><select class="form-control">
	<option value="0-3 years">0-3 years</option>
	<option value="3-7 years">3-7 years</option>
	<option value="7-10 years">7-10 years</option>
	<option value="10-15 years">10-15 years</option>
	<option value="15 and above years">15 and above years</option>
</select>
</div>

<div><label>Ownership structure:</label></div>
<div>
<select class="form-control">
	<option value="LLC">LLC</option>
 	<option value="Corporation">Corporation</option>
 	<option value="Sole Proprietor">Sole Proprietor</option>
 	<option value="S Corporation">S Corporation</option>
 	<option value="Partnership">Partnership</option>
 	<option value="Cooperative">Cooperative</option>
</select>
</div>

<div><label>Number of Employees:</label></div>
<div><select class="form-control">
	<option value="1-15 employees">1-15 employees</option>
	<option value="16-50 employees">16-50 employees</option>
	<option value="50-100 employees">50-100 employees</option>
	<option value="100-150 employees">100-150 employees</option>
	<option value="150-250 employees">150-250 employees</option>
	<option value="250-500 employees">250-500 employees</option>
	<option value="500 and above">500 and above</option>
</select></div>

<div><label>Industry Focus:</label></div>
<div><select class="form-control">
	<option value="Technology">Technology</option>
	<option value="Transportation">Transportation</option>
	<option value="Health">Health</option>
 	<option value="Automotive">Automotive</option>
	<option value="Apparel, Arts  and Entertainment">Apparel, Arts  and Entertainment</option>
	<option value="Food and Beverage">Food and Beverage</option>
	<option value="Broadcasting">Broadcasting</option>
	<option value="Broadcasting">Computer</option>
	<option value="Electronics">Electronics</option>
	<option value="Construction">Construction</option>
	<option value="Financial Services">Financial Services</option>
 	<option value="Internet, Data Related Services">Internet, Data Related Services</option>
	<option value="Education">Education</option>
	<option value="">Others</option>
</option>
</select></div>

<div><label>Describe the Primary Product or Service: :</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Marketplace:</label></div>
<div><select class="form-control">
	<option value=">B-B">B-B</option>
	<option value="B-C">B-C</option>
	<option value="B-G">B-G</option>
	</select>
</div>

<div><label>Is business for a profit business:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Total amount of finance you are seeking:</label></div>
<div><select class="form-control">
	<option value="$1,000"> < $1,000</option>
	<option value="$1,000-$2,000">$1,000-$2,000</option>
	<option value="$2,000-$5,000">$2,000-$5,000</option>
	<option value="$5,000-$10,000">$5,000-$10,000</option>
	<option value="$10,000-$15,000">$10,000-$15,000</option>
	<option value="$15,000-$20,000">$15,000-$20,000</option>
	<option value="$20,000-$50,000">$20,000-$50,000</option>
	<option value="$50,000-$100,000">$50,000-$100,000</option>
	<option value="$100,000-$200,000">$100,000-$200,000</option>
	<option value="$200,000-$500,000">$200,000-$500,000</option>
	<option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
	<option value="$1,000,000-$10,000,000">$1,000,000-$10,000,000</option>
	<option value="$10,000,000"> > $10,000,000</option>
</select>
</div>

<div><label>Can you provide collateral:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><label>Amount of collateral:</label></div>
<div><input type="text" class="form-control" name="name"></div>

<div><input type="submit" class="algo_submit" name="submit"></div>
<br/>
<br/>
</form>
</div>

</div>
</div>


<?php get_footer(); ?>