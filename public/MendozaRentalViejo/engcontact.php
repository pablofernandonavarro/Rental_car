<?php 
$pageTitle = 'Contact us about car rental. Mendoza Rental Service';
$pageDescription = 'Mendoza Rental Service offers car rental service in Mendoza, Argentina.';
$pageKeywords = 'car rental in mendoza,car renting mendoza,rental car mendoza,rent a car mendoza,car hiring in mendoza, mendoza, argentina';
include 'layout/header.php'; 
?>
<img src="assets/img/headers/contact.jpg" alt="Andes Mountains in Mendoza, Argentina" class="img__res">
</header>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<div class="padded body__container">
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<?php include 'layout/aside_english.php'; ?>
		</div>
		<div class="col-sm-9 col-xs-12">
			<article class="article">
				<h2>Contact us</h2>
				<form id="contact-form" class="form" method="post" action="engcontact_action.php">
					<legend>Fields with <span class="Estilo4">*</span> are required</legend>
					<div class="form__group">
						<label for="name">First name and Last name<span class="Estilo4">*</span></label>
						<input type="text" name="name" id="name">
					</div>
					<div class="form__group">
						<label for="company">Company</label>
						<input type="text" name="company" id="company">
					</div>
					<div class="form__group">
						<label for="email">Email<span class="Estilo4">*</span></label>
						<input type="email" name="email" id="email">
					</div>
					<div class="form__group">
						<label for="phone">Phone</label>
						<input type="text" name="phone" id="phone">
					</div>
					<div class="form__group">
						<label for="message">Message<span class="Estilo4">*</span></label>
						<textarea name="message" id="message" cols="30" rows="10"></textarea>
					</div>
					<div id="alert" class="hidden"></div>
					<button id="send" type="submit" class="form__group">Send</button>
				</form>
			</article>
		</div>
	</div>
	<script src="assets/js/scripts.js"></script>
<?php 
include 'layout/footer.php'; 
?>