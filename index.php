<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calculator for Study International</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="study international">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">
</head>

<body>	
	<div class="wrapper">
		<div id="main">	
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
// Get values from form
$age 						= isset($_POST['age'])?$_POST['age']:'';
$english 					= isset($_POST['english'])?$_POST['english']:'';
$employment 				= isset($_POST['employment'])?$_POST['employment']:'';
$employment_australia 		= isset($_POST['employment_australia'])?$_POST['employment_australia']:'';
$qualification 				= isset($_POST['qualification'])?$_POST['qualification']:'';
$australia_requirment 		= isset($_POST['australia_requirment'])?$_POST['australia_requirment']:'';
$education_qualification 	= isset($_POST['education_qualification'])?$_POST['education_qualification']:'';
$comunity 					= isset($_POST['comunity'])?$_POST['comunity']:'';
$regional 					= isset($_POST['regional'])?$_POST['regional']:'';
$partner 					= isset($_POST['partner'])?$_POST['partner']:'';
$professional_year 			= isset($_POST['professional_year'])?$_POST['professional_year']:'';
$your_name 					= isset($_POST['your_name'])?$_POST['your_name']:'';
$your_email 				= isset($_POST['your_email'])?$_POST['your_email']:'';
$your_mobile 				= isset($_POST['your_mobile'])?$_POST['your_mobile']:'';
$message 					= isset($_POST['message'])?$_POST['message']:'';
$score						= isset($_POST['score'])?$_POST['score']:'';


echo $score; exit;


	 
$to = "a.bakar87@gmail.com";

//$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$your_name.' <info@studyinternational.net.au>' . "\r\n";
$headers .= 'Cc:'. $your_email . "\r\n";

$subject = "Quyery form Study International";

$msg = '<table style="border-collapse: collapse;"><tr><td colspan="2" style="padding: 5px; border: 1px solid #ddd;"> Quyery form Study International by : ('.  $your_name .') And Score is ('. $score .')</td></tr>';

$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Age :</td><td style="padding: 5px; border: 1px solid #ddd;">'. $age .'</td></tr>';
$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">English :</td><td style="padding: 5px; border: 1px solid #ddd;">'. $english  .'</td></tr>';
$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Skilled Employment in last 10 Years - Outside Australia
 :</td><td style="padding: 5px; border: 1px solid #ddd;">'. $employment  .'</td></tr>';
$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Skilled Employment in last 10 Years - in Australia
 :</td><td style="padding: 5px; border: 1px solid #ddd;">'. $employment_australia  .'</td></tr>';
$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Qualifications :</td><td style="padding: 5px; border: 1px solid #ddd;">'. $qualification  .'</td></tr>';

if ($australia_requirment !='') {
	$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Australian Study Requirements :</td><td style="padding: 5px; border: 1px solid #ddd;"><input type="checkbox" checked="yes"> One or more degrees, diplomas or trade qualifications awarded by an Australian education institution and meet the</td></tr>';
}

if ($education_qualification !='') {
	$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Specialist Education Qualification :</td><td style="padding: 5px; border: 1px solid #ddd;"><input type="checkbox" checked="yes"> Masters degree by Research through a course or courses taken for at least 2 academic years at an Australian</td></tr>';
}

$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Others</td><td style="padding: 5px; border: 1px solid #ddd;">';

if ($comunity !='') {
	$msg .= '<input type="checkbox" checked="yes">Credentialled community language qualifications';
}
if ($regional !='') {
	$msg .= '<input type="checkbox" checked="yes">Study in regional Australia';
}
if ($partner !='') {
	$msg .= '<input type="checkbox" checked="yes">Partner skill qualifications';
}
if ($professional_year !='') {
	$msg .= '<input type="checkbox" checked="yes">Professional Year of study in Australia for at least 12 Months';
}

$msg .= '</td></tr>';

$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Name :</td><td style="padding: 5px; border: 1px solid #ddd;">'.$your_name .'</td></tr>';

$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Email :</td><td style="padding: 5px; border: 1px solid #ddd;">'.$your_email .'</td></tr>';

$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Mobile :</td><td style="padding: 5px; border: 1px solid #ddd;">'.$your_mobile .'</td></tr>';

$msg .= '<tr><td style="padding: 5px; border: 1px solid #ddd;">Message :</td><td style="padding: 5px; border: 1px solid #ddd;">'.$message .'</td></tr>';

$msg .= '</table>';
 

	if(@mail($to,$subject,$msg,$headers)){
	  $success = 'Thanks, '.  $your_name .'  <br>  we have received your query, <br> we will contact with you very soon';
	}else{
	  $error = "Something wrong please try again";
	}

}

if (isset($success) && $success !='') {
?>
		<div class="confirmwrap">
			<h2><?php echo  $success; ?></h2>
		</div>

<?php
	} else {
?>
		<form id="contact-form" action="" method="post">
			<div class="res">
				<h1>Self Assessment Form</h1>
				<h3 id="resultinfo"></h3>
				<h4>Please submit your information</h4>
				<a href="javascript:void(0)" class="backbutton" id="back"> Back </a>
			</div>	
			<div class="first-stepform">
				<div class="row">
					<label>
						<span>Age : (required)</span> 
						<select name="age" id="age" required autofocus>
							<option value="0"> Select </option>
							<option value="25">Between 18 to 24 years</option>
							<option value="30">Between 25 to 32 Years</option>
							<option value="25">Between 33 to 39 Years</option>
							<option value="15">Between 40 to 44 Years</option>
						</select>
						<strong class="ageer"> this is requirefield</strong>
					</label>
				</div>
				<div class="row">
					<label>
						<span>English : (required)</span>
						<select name="english" id="english" required autofocus>
							<option value="0">Competent English – 6.0 Each</option>
							<option value="10">Proficient English – 7.0 Each</option>
							<option value="20">Superior English – 8.0 Each</option>
						</select>
					</label>
				</div>
				<div class="row">
					<label>
						<span>Skilled Employment in last 10 Years - Outside Australia</span>
						<select name="employment" id="employment">
							<option value="0"> Select </option>
							<option value="0">Less than 3 Years</option>
							<option value="5">3 – 4 Years</option>
							<option value="10">5 – 7 Years</option>
							<option value="15">8 – 10 Years </option>
						</select>
					</label>
				</div>
				<div class="row">
					<label>
						<span>Skilled Employment in last 10 Years - in Australia</span>
						<select name="employment_australia" id="employment_australia">
							<option value="0"> Select </option>
							<option value="0">Less than 1 Year</option>
							<option value="5">1 - 2 Years</option>
							<option value="10">3 - 4 Years</option>
							<option value="15">5 - 7 Years</option>
							<option value="20">8 – 10 Years</option>
						</select>
					</label>
				</div>
				<div class="row">
					<label>
						<span>Qualifications</span>
						<select name="qualification" id="qualification" class="mb15">
							<option value="0"> Select</option>

							<option value="20" class="optionWrap">Doctorate from an Australian Education Institute/ other doctorate of a recognised standard </option>

							<option value="15" class="optionWrap">At least a Bachelor Degree from Australian Education Institution </option>
							<option value="10" class="optionWrap">A Diploma or Trade Qualification completed in Australia</option>
							<option value="10" class="optionWrap">An award or qualification recognised by the assessing authority in the assessment of skilled occupation</option>
						</select>
					</label>
				</div>
				<div class="row">
					<label><span>Australian Study Requirements</span></label>
					<label for="australia_requirment" class="checkbox-label mb15">
						<input type="checkbox" value="5" name="australia_requirment" id="australia_requirment"> One or more degrees, diplomas or trade qualifications awarded by an Australian education institution and meet the </label>
				</div>
				<div class="row">
					<label><span>Specialist Education Qualification</span></label>
					<label for="education_qualification" class="checkbox-label mb15">
						<input type="checkbox" value="5" name="education_qualification" id="education_qualification"> Masters degree by Research through a course or courses taken for at least 2 academic years at an Australian 
					</label>
				</div>
				<div class="row">
					<label><span>Others</span></label>
					<label for="comunity" class="checkbox-label">
						<input type="checkbox" value="5" name="comunity" id="comunity"> Credentialled community language qualifications
					</label>
					<label for="regional" class="checkbox-label">
						<input type="checkbox" value="5" name="regional" id="regional"> Study in regional Australia  
					</label>
					<label for="partner" class="checkbox-label">
						<input type="checkbox" value="5" name="partner" id="partner"> Partner skill qualifications 
					</label>
					<label for="professional_year" class="checkbox-label">
						<input type="checkbox" value="5" name="professional_year" id="professional_year"> Professional Year of study in Australia for at least 12 Months 
					</label>
				</div>
				<div  class="row" style="margin-top: 10px;">
					<button name="total" type="button" id="total" class="calculate">Total  Points </button>
				</div>
			</div>
			<div class="second-stepform">
				<div  class="row">
					<label>
						<span>Name : (required)</span>
						<input placeholder="Please enter your name" name="your_name" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div class="row">
					<label>
						<span>Email : (required)</span>
						<input placeholder="Please enter your email address" type="email" name="your_email" tabindex="2" required>
					</label>
				</div>
				<div class="row">
					<label>
						<span>Mobile : (required)</span>
						<input placeholder="Please enter your number" name="your_mobile" type="tel" tabindex="3" required>
					</label>
				</div>
				<div class="row">
					<label>
						<span>Message : (required)</span>
						<textarea placeholder="Include all the details you can" name="message" tabindex="5" required></textarea>
					</label>
				</div>
				<div class="row">
					<input type="hidden" name="score" id="score">
					<button name="submit" type="submit" id="contact-submit">Submit Now</button>
				</div>				
			</div>			
		</form>
		<?php  } ?>

		<!-- /Form -->		
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script>
(function() {
// Create input element for testing
var inputs = document.createElement('input');

// Create the supports object
var supports = {};

supports.autofocus   = 'autofocus' in inputs;
supports.required    = 'required' in inputs;
supports.placeholder = 'placeholder' in inputs;

// Fallback for autofocus attribute
if(!supports.autofocus) { }

// Fallback for required attribute
if(!supports.required) { }

// Fallback for placeholder attribute
if(!supports.placeholder) { }	
})();

(function($) {
	$('#total').click(function(){
		var $er = false;
		var $age = parseInt($('#age').val());
		var $english = parseInt($('#english').val());
		var $employment = parseInt($('#employment').val());
		var $employment_australia = parseInt($('#employment_australia').val());
		var $qualification = parseInt($('#qualification').val());
		var $australia_requirment = parseInt( $('#australia_requirment').is(':checked')? $('#australia_requirment').val() : 0 );
		var $education_qualification = parseInt( $('#education_qualification').is(':checked')? $('#education_qualification').val() : 0 );		
		var $comunity = parseInt( $('#comunity').is(':checked')? $('#comunity').val() : 0 );
		var $regional = parseInt( $('#regional').is(':checked')? $('#regional').val() : 0 );
		var $partner = parseInt($('#partner').is(':checked')? $('#partner').val() : 0 );
		var $professional_year = parseInt( $('#professional_year').is(':checked') ? $('#professional_year').val() : 0 );

		if ($age < 1) {
			$er = true;
			$('.ageer').css('display', 'block');
		} else{
			$er = false;
		}

		var $total = parseInt($age + $english + $employment +  $qualification + $australia_requirment + $education_qualification + $comunity + $regional + $partner + $professional_year);

		 $("#score").val($total);


		if ($er == false) {
			if ($total > 60) {				
				$('#resultinfo').html('Congratulation! You Are Eligible <br> Your Total Point is  <strong>'+ $total +'</strong>' );
				$('#back').fadeOut( "slow");
			} else {

				$('#resultinfo').html('<span class="err"> Sorry! You Are Not Eligible <br> Your Total Point is <strong> '+ $total +'</strong></span>');
				$('#back').fadeIn( "slow");
			}

			$(".first-stepform" ).fadeOut( "slow", function() {
		    	$('.second-stepform').fadeIn( "slow");
			});
		}

		$('#back').click(function(){
			location.reload();
		})
	})
})(jQuery);
</script>
</body>
</html>