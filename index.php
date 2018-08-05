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
				<h1>Free Self-Assessment Test For Permeant Migration To Australia </h1>
			</div>	
			<div class="first-stepform">
				<div class="form-wrap">
					<div class="form-row">
						<h3>Australian Skilled Visas</h3>
						<h4>Select the below skilled visas you are eligible to apply.</h4>
						<label class="controll-label">
							<input type="radio" name="auskvisa" value="0" required><strong>Skilled Independent Subclass 189 - </strong> It's a non-Sponsored Visa so you don't need a sponsor for it. However, your occupation must be listed in latest Skilled Occupations List. For further details, check the Subclass 189 Visa page.
						</label>
						<label class="controll-label">
							<input type="radio" name="auskvisa" value="5"><strong>Skilled Nominated Subclass 190 - </strong> To apply for this visa you need nomination from a State or Territory Government Agency. Moreover, your occupation must be listed on the Consolidated Sponsored Occupations List (CSOL). For further information, visit the Subclas190 Visa page.
						</label>
						<label class="controll-label">
							<input type="radio" name="auskvisa" value="10"><strong>Skilled Regional (Provisional) Subclass 489 -</strong> requires sponsorship by a relative living in a designated area or a state or territory government.
						</label>
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>Age</h3>
						<h4>Which age band do you fit into?</h4>
						<label class="controll-label">
							<select name="age">
								<option value="0">My Age Group is: Under 18</option>
								<option value="25">My Age Group is: 18 to 24</option>
								<option value="30">My Age Group is: 25 to 32</option>
								<option value="25">My Age Group is: 33 to 39</option>
								<option value="15">My Age Group is: 40 to 44</option>
							</select>
						</label>
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>My English Language is:</h3>
						<label class="controll-label">
							<input type="radio" name="elang" value="0" required>
							<strong>Competent English: </strong> <br>
							<ul>
								<li>Passport from UK, USA, Ireland, Canada or NZ; or</li>
								<li>IELTS: 6+ in each component; or</li>
								<li>PTE Academic: 50+ in each component; or</li>
								<li>Cambridge (CAE): 169+ in each component; or</li>
								<li>TOEFL iBT: 12 in Listening, 13 Reading, 21 Writing, 18 Speaking</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="elang" value="10" required>
							<strong>Proficient English:</strong> <br>
							<ul>
								<li>IELTS: 7+ in each component; or</li>
								<li>OET: B pass in each component; or</li>
								<li>PTE Academic: 65+ in each component; or</li>
								<li>Cambridge (CAE): 185+ in each component; or</li>
								<li>TOEFL iBT: 24 in Listening, 24 Reading, 27 Writing, 23 Speaking</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="elang" value="20" required>
							<strong>Superior English:</strong> <br>
							<ul>
								<li>IELTS: 8+ in each component; or</li>
								<li>OET: A pass in each component; or</li>
								<li>PTE Academic: 79+ in each component; or</li>
								<li>Cambridge (CAE): 200+ in each component; or</li>
								<li>TOEFL iBT: 28 in Listening, 29 Reading, 30 Writing, 26 Speaking</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="elang" value="20" required>
							<strong>Below the competent English :</strong>
						</label>
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>My English Language is:</h3>
						<label class="controll-label">
							<input type="radio" name="elang" value="0" required>
							<strong>Competent English: </strong> <br>
							<ul>
								<li>Passport from UK, USA, Ireland, Canada or NZ; or</li>
								<li>IELTS: 6+ in each component; or</li>
								<li>PTE Academic: 50+ in each component; or</li>
								<li>Cambridge (CAE): 169+ in each component; or</li>
								<li>TOEFL iBT: 12 in Listening, 13 Reading, 21 Writing, 18 Speaking</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="elang" value="10" required>
							<strong>Proficient English:</strong> <br>
							<ul>
								<li>IELTS: 7+ in each component; or</li>
								<li>OET: B pass in each component; or</li>
								<li>PTE Academic: 65+ in each component; or</li>
								<li>Cambridge (CAE): 185+ in each component; or</li>
								<li>TOEFL iBT: 24 in Listening, 24 Reading, 27 Writing, 23 Speaking</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="elang" value="20" required>
							<strong>Superior English:</strong> <br>
							<ul>
								<li>IELTS: 8+ in each component; or</li>
								<li>OET: A pass in each component; or</li>
								<li>PTE Academic: 79+ in each component; or</li>
								<li>Cambridge (CAE): 200+ in each component; or</li>
								<li>TOEFL iBT: 28 in Listening, 29 Reading, 30 Writing, 26 Speaking</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="elang" value="20" required>
							<strong>Below the competent English :</strong>
						</label>
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>My Australian Educational Qualification</h3>
						<label class="controll-label">
							<input type="radio" name="auskvisa" value="0" required> <strong> Yes : </strong> Diploma, Advanced Diploma, Degree, or trade qualification(s) taking minimum two years of full-time study at an Australian Educational Institution.  
						</label>
						<label class="controll-label">
							<input type="radio" name="auskvisa" value="5"> <strong> NO </strong>
						</label>
						<div class="ausqua">
							<h5>My study in Australian regional area</h5>
							<label class="controll-label">
								<input type="radio" name="stau" value="5"> <strong> Yes </strong>
								<input type="radio" name="stau" value="5"> <strong> No </strong>
							</label>
							<h5>Professional year </h5>
							<label class="controll-label">
								<input type="radio" name="pryear" value="5"> <strong> Yes </strong>
								<input type="radio" name="pryear" value="0"> <strong> No </strong>
							</label>
						</div>
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>My Education Qualifications (Except Australia)</h3>
						<h4>What is your highest/top Qualification?</h4>
						<label class="controll-label">
							<input type="radio" name="eqea" value="20" required>
							<strong>Valid and recognized PhD (Doctorate</strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="eqea" value="15" required>
							<strong>Valid and recognized Bachelor degree or higher</strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="eqea" value="10" required>
							<strong>: Valid and recognized Trade Qualification including</strong> <br>
							<ul>
								<li>Diploma or Trade Certificate acquired at an Australian educational institution</li>
								<li>Other award or educational qualification recognized by the relevant skills assessing authority</li>
							</ul>
						</label>
						<label class="controll-label">
							<input type="radio" name="eqea" value="15" required>
							<strong>No Valid/ recognized Qualifications</strong>
						</label>
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>Australian Work Experience</h3>
						<h4>Regarding your work experience in Australia, in the last ten years, for what duration you have worked in occupation you have nominated or any related skilled occupation</h4>
						<label class="controll-label">
							<input type="radio" name="awe" value="20" required>
							<strong>8 Years or more</strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="awe" value="15" required>
							<strong>5 Years or more</strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="awe" value="10" required>
							<strong>3 Years or more </strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="awe" value="5" required>
							<strong>1 Year or more</strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="awe" value="0" required>
							<strong>Less than one year </strong>
						</label>						
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>My Work Experience (Except Australia)</h3>
						<h4>With regards to your foreign work experience, in the last ten years, till what duration you have worked in the occupation you have nominated or related skilled occupation:</h4>
						<label class="controll-label">
							<input type="radio" name="weea" value="15" required>
							<strong>8 Years or more </strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="weea" value="10" required>
							<strong>5 Years or more </strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="weea" value="5" required>
							<strong>3 Years or more </strong>
						</label>
						<label class="controll-label">
							<input type="radio" name="weea" value="0" required>
							<strong>Less than 3 years </strong>
						</label>											
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>Will I get any additional points?</h3>
						<h4>My Partner Skill Qualifications</h4>
						<label class="controll-label">
							<input type="checkbox" name="page" value="yes" required>
							<strong>My partner is aged below 50</strong>
						</label>
						<label class="controll-label">
							<input type="checkbox" name="page" value="yes" required>
							<strong>My partner has competent English skills</strong>
						</label>
						<label class="controll-label">
							<input type="checkbox" name="page" value="yes" required>
							<strong>My partner can pass skills assessment in an occupation (for my skilled visa) on the relevant Skilled Occupations List.</strong>
						</label>																	
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>Designated Language</h3>
						<h4>Do any of the following apply to you?</h4>
						<label class="controll-label">
							<input type="radio" name="page" value="5" required>
							I am certified as a Para-professional interpreter or translator (level 2) by the National Accreditation Authority (NAA) for Translators and Interpreters
						</label>
						<label class="controll-label">
							<input type="radio" name="page" value="5" required> None of the above 
						</label>																	
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<h3>Others </h3>
						<h4>Will I get any additional points?</h4>
						<p>Sponsorship by state or territory government</p>
						<label class="controll-label">
							<input type="radio" name="page" value="5" required> Yes 
						</label>
						<label class="controll-label">
							<input type="radio" name="page" value="5" required> No 
						</label>	

						<p>Sponsorship by family or state or territory government to regional Australia</p>
						<label class="controll-label">
							<input type="radio" name="page" value="5" required> Yes 
						</label>
						<label class="controll-label">
							<input type="radio" name="page" value="5" required> No 
						</label>																	
					</div>					
				</div>
				<div class="form-wrap">
					<div class="form-row">
						<div class="col-md-3">Name</div>
						<div class="col-md-9"><input type="text" name="name" class="form-ctrl"> </div>
					</div>	
					<div class="form-row">
						<div class="col-md-3">Email</div>
						<div class="col-md-9"><input type="email" name="email" class="form-ctrl"> </div>
					</div>
					<div class="form-row">
						<div class="col-md-3">Phone</div>
						<div class="col-md-9">
							<input type="text" name="phone" class="form-ctrl">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">Mobile</div>
						<div class="col-md-9">
							<input type="text" name="mobile" class="form-ctrl">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">Address</div>
						<div class="col-md-9">
							<input type="text" name="adrs" class="form-ctrl">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">Country</div>
						<div class="col-md-9">
							<input type="text" name="country" class="form-ctrl">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">District</div>
						<div class="col-md-9">
							<input type="text" name="district" class="form-ctrl">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">Thana</div>
						<div class="col-md-9">
							<input type="text" name="thana" class="form-ctrl">
						</div>
					</div>
				</div>
			</div>		
		</form>
		<?php  } ?>

		<h5>To get the below visas please communicate at our office</h5>
		<ul>
			<li>Australian Business Visa Points Test Calculator</li>
			<li>Australian Partner Visa Assessment (instant)</li>
			<li>New Zealand Points Calculator for Skilled Migration (instant)</li>
			<li>Visa Assessment Corporate Immigration Solutions</li>
		</ul>

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