<?php
/**
 * Template Name: Calculator
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php consulting_get_header(); ?>

<style>#contact-form button[type=submit],#contact-form input[type=text],#contact-form input[type=email],#contact-form input[type=tel],#contact-form input[type=url],#contact-form textarea{font-size:14px}#contact-form{width:100%;text-shadow:0 1px 0 #FFF;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;background:#F9F9F9;padding:30px}#contact-form h3{color:#0048bf;display:block;font-size:24px;margin:0;padding:0}#contact-form div.row,#contact-form label{display:block;width:100%;margin:0;padding:0}#contact-form h3:after,#contact-form h4:after{display:none}#contact-form h3 .err{color:#ff5a00}#contact-form h4{margin:5px 0 15px;display:block;font-size:16px}#contact-form label span{color:#0048bf;display:block;margin:5px 0;font-weight:900}#contact-form input[type=text],#contact-form input[type=email],#contact-form input[type=tel],#contact-form input[type=url],#contact-form select,#contact-form textarea{width:100%;box-shadow:inset 0 1px 2px #DDD,0 1px 0 #FFF;-webkit-box-shadow:inset 0 1px 2px #DDD,0 1px 0 #FFF;-moz-box-shadow:inset 0 1px 2px #DDD,0 1px 0 #FFF;border:1px solid #CCC;background:#FFF;margin:0 0 5px;padding:10px;border-radius:5px}#contact-form input[type=text]:hover,#contact-form input[type=email]:hover,#contact-form input[type=tel]:hover,#contact-form input[type=url]:hover,#contact-form textarea:hover{-webkit-transition:border-color .3s ease-in-out;-moz-transition:border-color .3s ease-in-out;transition:border-color .3s ease-in-out;border:1px solid #AAA}#contact-form textarea{height:100px;max-width:100%}#contact-form button[type=submit],button.calculate{cursor:pointer;width:100%;border:none;background:#0048bf;background-image:linear-gradient(bottom,#434bee 0,#0048bf 52%);background-image:-moz-linear-gradient(bottom,#434bee 0,#0048bf 52%);background-image:-webkit-linear-gradient(bottom,#434bee 0,#0048bf 52%);color:#FFF;margin:0 0 5px;padding:10px;border-radius:5px}#contact-form button[type=submit]:hover{background-image:linear-gradient(bottom,#0093ca 0,#7800ff 52%);background-image:-moz-linear-gradient(bottom,#0093ca 0,#7800ff 52%);background-image:-webkit-linear-gradient(bottom,#0093ca 0,#7800ff 52%);-webkit-transition:background .3s ease-in-out;-moz-transition:background .3s ease-in-out;transition:background-color .3s ease-in-out}#contact-form button[type=submit]:active{box-shadow:inset 0 1px 3px rgba(0,0,0,.5)}#contact-form input:focus,#contact-form textarea:focus{outline:0;border:1px solid #999}::-webkit-input-placeholder{color:#888}:-moz-placeholder{color:#888}::-moz-placeholder{color:#888}:-ms-input-placeholder{color:#888}.mb15{margin-bottom:15px}.checkbox-label{cursor:pointer;display:block;overflow:hidden;clear:both}.res{display:block;text-align:center;position:relative}.backbutton{position:absolute;left:0;top:50px;display:none}.err{color:#ff5a00}#contact-form input.err,#contact-form select.err{color:#ff5a00;border-color:#ff5a00}#contact-form label input[type=checkbox]{display:inline-block;float:left;margin:5px 5px 5px 0}#contact-form select{word-wrap:break-word;white-space:-moz-pre-wrap;white-space:pre-wrap;display:inline-block;width:100%!important}#contact-form select option,.optionWrap,.selectboxit-options .selectboxit-option .selectboxit-option-anchor{white-space:normal;min-height:30px;height:auto}.ageer,.second-stepform{display:none}.selectboxit-container .selectboxit,.selectboxit-container .selectboxit-options{width:600px;border-radius:0;max-height:240px}.confirmwrap{text-shadow:0 1px 0 #FFF;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;background:#F9F9F9;padding:25px;color:#007300}.confirmwrap h2{font-size:22px;text-transform:uppercase;font-weight:400;line-height:1.4;text-align:center}.ageer{float:right;color:red;font-weight:300;margin-bottom:10px}#resultinfo strong{margin-left:5px;color:#000}.backbutton{border:1px solid #ddd;background:#fff;padding:8px 15px;color:#000}</style>

<div class="content-area">

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

<?php get_footer(); ?>

<script>!function(){var e=document.createElement("input"),a={};a.autofocus="autofocus"in e,a.required="required"in e,a.placeholder="placeholder"in e,a.autofocus,a.required,a.placeholder}(),function(e){e("#total").click(function(){var a=!1,r=parseInt(e("#age").val()),t=parseInt(e("#english").val()),n=parseInt(e("#employment").val()),o=(parseInt(e("#employment_australia").val()),parseInt(e("#qualification").val())),i=parseInt(e("#australia_requirment").is(":checked")?e("#australia_requirment").val():0),l=parseInt(e("#education_qualification").is(":checked")?e("#education_qualification").val():0),s=parseInt(e("#comunity").is(":checked")?e("#comunity").val():0),c=parseInt(e("#regional").is(":checked")?e("#regional").val():0),u=parseInt(e("#partner").is(":checked")?e("#partner").val():0),p=parseInt(e("#professional_year").is(":checked")?e("#professional_year").val():0);r<1?(a=!0,e(".ageer").css("display","block")):a=!1;var d=parseInt(r+t+n+o+i+l+s+c+u+p);e("#score").val(d),0==a&&(d>60?(e("#resultinfo").html("Congratulation! You Are Eligible <br> Your Total Point is  <strong>"+d+"</strong>"),e("#back").fadeOut("slow")):(e("#resultinfo").html('<span class="err"> Sorry! You Are Not Eligible <br> Your Total Point is <strong> '+d+"</strong></span>"),e("#back").fadeIn("slow")),e(".first-stepform").fadeOut("slow",function(){e(".second-stepform").fadeIn("slow")})),e("#back").click(function(){location.reload()})})}(jQuery);</script>
