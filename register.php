<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
	.input, .button, [type="submit"], [type="button"] {
		user-select: none;
		touch-action: manipulation;
		appearence: none !important;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
	}
	*, *::before, *::after {
		box-sizing: border-box !important;
	}
	html {
		font-size: 100%;
	}
	@media screen and (min-width: 560px) {
		html {
			font-size: 112.5%;
		}
	}
	body {
		font-family: "Inter", sans-serif;
		background-color: royalblue;
	}
	h1, h2, h3, h4, h5, h6 {
		line-height: 1;
		font-weight: 600;
		margin-top: 0.5rem;
	}
	@keyframes fadein {
		0% {
			opacity: 0;
			transform: translate3d(0, -4px, 0);
		}
		100% {
			opacity: 1;
			transform: translate3d(0, 0, 0);
		}
	}
	form, form > *, .container, section {
		opacity: 0;
		transform: translate3d(0, -4px, 0);
		animation-name: fadein;
		animation-direction: forwards;
		animation-fill-mode: both;
		animation-iteration-count: 1;
		animation-duration: 700ms;
		animation-delay: 600ms;
	}
	.title {
		margin-bottom: 2rem;
	}

	.emailVerifiedText{
		color: green;
		font-size: 14px;
	}

	.hidden {
		display: none;
	}
	.icon {
		width: 1.5em;
		height: 1.5em;
		position: absolute;
		top: 2em;
		right: 5px;
		pointer-events: none;
		z-index: 2;
	}
	.icon.icon-success {
		stroke: green;
	}
	.icon.icon-error {
		stroke: red;
	}
	.container, section {
		max-width: 32em;
		margin: 2.5em auto;
		padding: 2.5em;
		border: 0.375em solid rgba(65, 105, 225, 0.75);
		border-radius: 1em;
		background-color: white;
		transition: all 200ms;
		box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
	}
	.label, label {
		font-weight: 500;
		display: block;
		color: #333;
		margin-bottom: 0.25em;
		color: #2d3748;
		font-size: 1em;
	}
	.input {
		appearance: none;
		display: block;
		width: 100%;
		color: #2d3748;
		border: 1px solid #cbd5e0;
		line-height: 1.25;
		background-color: white;
		padding: 0.65em 0.75em;
		border-radius: 0.375em;
		font-size: 1em;
		transition: all 200ms;
	}
	.input:hover {
		background-color: #f8f9fa;
	}
	.input::placeholder {
		color: #a0aec0;
		font-weight: 400;
	}
	.input.input-error {
		border-color: red;
		transition: all 200ms;
	}
	.input.input-error:focus {
		border-color: lightpink;
	}
	.input:focus {
		outline: none;
		border: 1px solid #a0aec0;
		box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 0 0 4px rgba(65, 105, 225, 0.2);
		background-clip: padding-box;
		border-color: royalblue;
		background-color: #f1f1f4;
		outline: solid 6px rgba(65, 105, 225, 0.25);
		outline-offset: -2px;
		outline: none !important;
	}
	.input-group {
		margin-bottom: 2em;
		position: relative;
		transition: all 200ms;
	}
	.error-message {
		font-size: 0.85em;
		color: red;
		transition: all 200ms;
	}
	.button, [type="submit"] {
		background-color: royalblue;
		padding: 1em 1.5em;
		border: none;
		border-radius: 0.375em;
		color: white;
		font-weight: 500;
		display: block;
		width: 100%;
		text-align: center;
		cursor: pointer;
		letter-spacing: 0.75px;
		transition: all 120ms !important;
		transform: translate3d(0, 0, 0);
	}
	.button:active, [type="submit"]:active {
		background-color: #214cce;
		transform: translate3d(0, 2px, 0) !important;
	}
	.button:hover, [type="submit"]:hover {
		filter: brightness(110%);
	}
	.button:focus, [type="submit"]:focus {
		outline: solid 6px rgba(65, 105, 225, 0.25);
		outline-offset: -2px;
		box-shadow: 0 0 0 4px rgba(65, 105, 225, 0.2);
		outline: none !important;
	}
	label {
		transition: all 200ms;
	}
	fieldset, legend {
		display: block;
		width: 100%;
		border: none;
		padding: 0;
		margin: 0;
	}
	legend {
		font-weight: 500;
		font-size: x-large;
		margin: 0 auto 1.5rem;
	}
	form {
		transition: all 200ms;
	}
	form footer {
		width: 100%;
		margin: 1rem 0 0;
		padding: 1rem 0 0;
		transition: all 200ms;
	}
	form footer p {
		line-height: 1 !important;
		margin: 0 auto !important;
		text-align: center;
		transition: all 200ms;
	}
	form * {
		transition: all 200ms;
	}
	a, a:link {
		color: royalblue;
		font-weight: 500;
		text-decoration: none;
		cursor: pointer;
		transition: all 120ms;
	}
	
	.display-flex{
		display:flex;
	}

	.flex-col{
		flex-direction: column;
	}

	.gap-small{
		gap:16px;
	}

	.emailError{
		color:red;
		margin:0;
		font-size: 14px;
		padding-top: 2px;
		padding-left: 2px;
		display: none;
	}



	/* spinner in css */
	.spinner {
		display:none;
		width: 40px;
		height: 40px;
		border: 4px solid #f3f3f3;
		border-top: 4px solid #3498db;
		border-radius: 50%;
		animation: spin 1s linear infinite;
	}

	@keyframes spin {
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(360deg);
	}
	}

    </style>
</head>
<body>
<main>
	<section>
		<form action="#" class="form">
			<fieldset>
				<legend>Create a new account</legend>
				<div class="input-group">
					<label for="username" class="label">Username</label>
					<input id="username" placeholder="John Doe" type="text" class="input">
					<span class="error-message"></span>
					<svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<title>check-circle</title>
						<g fill="none">
							<path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

					<svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<title>exclamation-circle</title>
						<g fill="none">
							<path d="M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>
				</div>

				<div class="input-group display-flex flex-col">

					<label for="email" class="label">Email</label>
					<div class="display-flex  email-div  gap-small">

					<div>
						<input id="email" type="email" class="input">
						
						<p class="emailError">Please Enter valid email address</p>
					</div>

					<input id="sendOTPBtn" type="button" class="button" style="width: inherit; height: fit-content;" value="Send OTP">

					<div class="spinner"></div>
					</div>

				</div>

				<div class="input-group display-flex flex-col">

					<label for="email" class="label">Enter OTP</label>
					<div class="display-flex confirmOTPDiv gap-small">
					<div>
						<input id="userOTP" type="number" class="input" >
						
					</div>

					</div>

				</div>

				<div class="input-group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" placeholder="••••••••">
					<span class="error-message"></span>
					<svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<title>check-circle</title>
						<g fill="none">
							<path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

					<svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<title>exclamation-circle</title>
						<g fill="none">
							<path d="M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>
				</div>

				<div class="input-group">
					<label for="password_confirmation" class="label">Password Confirmation</label>
					<input id="password_confirmation" type="password" class="input" placeholder="••••••••">
					<span class="error-message"></span>
					<svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<title>check-circle</title>
						<g fill="none">
							<path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

					<svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<title>exclamation-circle</title>
						<g fill="none">
							<path d="M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>
				</div>
			</fieldset>

			<input type="submit" value="Create account">
			
			<footer>
				<p>Already have an account? <a href="#">Sign in</a></p>
			</footer>
		</form>
	</section>
</main>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>

	function validateEmail(email){
		return email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g);
	}

	$(document).ready(function () {

		$("#userOTP").keydown(function(){
			
		});

		$("#sendOTPBtn").click(function (e) { 
			e.preventDefault();
			$(".emailError").css("display", "npne");
			const emailAddress = $("#email").val();
			if(validateEmail(emailAddress)){
				
				// disable email and send otp button
				$("#email").attr("disabled","disabled");
				$("#sendOTPBtn").attr("disabled","disabled");

				$(".spinner").css("display", "initial");
				$.post("php_server/sendOTPmail.php",
				{
					emailAddress:emailAddress
				},
				function(data, status){

					console.log(data)

					if(data == 1){
						$(".spinner").css("display", "none");
						$("#sendOTPBtn").css("display","none");

						const svgElement = document.createElement("img")
						svgElement.src = "./images/checkMark.svg";
						svgElement.style.width= "16px";
						$(".email-div").append(svgElement)

						const emailVerifiedElement = document.createElement("p");  // Create with DOM


						emailVerifiedElement.innerHTML = "OTP Sent Successfully";
						emailVerifiedElement.className = "emailVerifiedText"
						$(".email-div").append(emailVerifiedElement)
					}
				});

			} else {
				$(".emailError").css("display", "block");
			}
		});
	});
</script>
</body>
</html>