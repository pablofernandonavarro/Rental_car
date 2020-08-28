<?php 
$pageTitle = 'Formulario de consulta para el alquiler de autos. Mendoza Rental Service Mendoza';
$pageDescription = 'Mendoza Rental Service presta servicio de alquiler de autos en Mendoza, Argentina.';
$pageKeywords = 'alquiler de auto, coches de alquiler, rental car, auto mendoza, auto en mendoza';
include 'layout/header.php'; 
?>
<img src="assets/img/headers/contact.jpg" alt="ciudad de mendoza, argentina" class="img__res">
</header>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<div class="padded body__container">
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<?php include 'layout/aside.php'; ?>
		</div>
		<div class="col-sm-9 col-xs-12">
			<article class="article">
				<h2>Formulario de consulta</h2>
				<form id="contact-form" class="form" method="post" action="espcontact_action.php">
					<legend>Los campos con <span class="Estilo4">*</span> son obligatorios</legend>
					<div class="form__group">
						<label for="name">Nombre y Apellido<span class="Estilo4">*</span></label>
						<input type="text" name="name" id="name">
					</div>
					<div class="form__group">
						<label for="company">Empresa</label>
						<input type="text" name="company" id="company">
					</div>
					<div class="form__group">
						<label for="email">Email<span class="Estilo4">*</span></label>
						<input type="email" name="email" id="email">
					</div>
					<div class="form__group">
						<label for="phone">Télefono de contacto</label>
						<input type="text" name="phone" id="phone">
					</div>
					<div class="form__group">
						<label for="message">Mensaje<span class="Estilo4">*</span></label>
						<textarea name="message" id="message" cols="30" rows="10"></textarea>
					</div>
					<div id="alert" class="hidden"></div>
					<button id="send" type="submit" class="form__group">Enviar</button>
				</form>
			</article>
		</div>
	</div>
	<script src="assets/js/scripts.js"></script>		
<?php 
 
include 'layout/footer.php'; 
?>
