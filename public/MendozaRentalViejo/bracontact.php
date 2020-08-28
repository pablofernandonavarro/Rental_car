<?php 
$pageTitle = 'Formulário de contato para aluguer de carros em Mendoza. Mendoza Rental Service';
$pageDescription = 'Mendoza Rental Service presta servicio de alquiler de autos en Mendoza, Argentina.';
$pageKeywords = 'alquiler de auto, coches de alquiler, rental car, auto mendoza, auto en mendoz';
include 'layout/header.php'; 
?>
<img src="assets/img/headers/contact.jpg" alt="ciudad de mendoza, argentina" class="img__res">
</header>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<div class="padded body__container">
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<?php include 'layout/aside_portugues.php'; ?>
		</div>
		<div class="col-sm-9 col-xs-12">
			<article class="article">
				<h2>Formulário de consulta</h2>
				<form id="contact-form" class="form" method="post" action="bracontact_action.php">
					<legend>Os campos com <span class="Estilo4">*</span> são obrigatórios</legend>
					<div class="form__group">
						<label for="name">Nome e Sobrenome<span class="Estilo4">*</span></label>
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
						<label for="phone">Telefone de Contato</label>
						<input type="text" name="phone" id="phone">
					</div>
					<div class="form__group">
						<label for="message">Mensagem<span class="Estilo4">*</span></label>
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
