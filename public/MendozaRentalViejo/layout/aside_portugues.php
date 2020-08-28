<aside class="menu">
	<p>
		<a href="index-english.php"><img src="assets/img/flags/uk.gif" alt="English"> English Version</a>
	</p>
	<p>
		<a href="index.php"><img src="assets/img/flags/es.gif" alt="Español"> Versión Español</a>
	</p>
	<ul>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'index-portugues.php')){
				echo 'Início'; 
			}
			else { 
				echo '<a href="index-portugues.php">Início</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'localizacao-de-nosso-escritorio.php')){
				echo 'Onde estamos'; 
			}
			else { 
				echo '<a href="localizacao-de-nosso-escritorio.php">Onde estamos</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'aluguel-de-carros.php')){
				echo 'Nossos carros'; 
			}
			else { 
				echo '<a href="aluguel-de-carros.php">Nossos carros</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'requisitos-aluguer-carro.php')){
				echo 'Requisitos'; 
			}
			else { 
				echo '<a href="requisitos-aluguer-carro.php">Requisitos</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'hoteis-em-mendoza.php')){
				echo 'Hotéis em Mendoza'; 
			}
			else { 
				echo '<a href="hoteis-em-mendoza.php">Hotéis em Mendoza</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'bracontact.php')){
				echo 'Contato'; 
			}
			else { 
				echo '<a href="bracontact.php">Contato</a>';
			}
			?>
		</li>
	</ul>
</aside>