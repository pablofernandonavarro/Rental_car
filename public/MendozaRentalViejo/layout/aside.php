<aside class="menu">
	<p>
		<a href="index-english.php"><img src="assets/img/flags/uk.gif" alt="English"> English Version</a>
	</p>
	<p>
		<a href="index-portugues.php"><img src="assets/img/flags/br.gif" alt="Português"> Versâo Português</a>
	</p>
	<ul>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'index.php')){
				echo 'Inicio'; 
			}
			else { 
				echo '<a href="index.php">Inicio</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'ubicacion-de-oficina.php')){
				echo 'Dónde estamos'; 
			}
			else { 
				echo '<a href="ubicacion-de-oficina.php">Dónde estamos</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'alquiler-de-autos.php')){
				echo 'Nuestra flota'; 
			}
			else { 
				echo '<a href="alquiler-de-autos.php">Nuestra flota</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'condiciones-alquiler-auto.php')){
				echo 'Requisitos'; 
			}
			else { 
				echo '<a href="condiciones-alquiler-auto.php">Requisitos</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'hoteles-en-mendoza.php')){
				echo 'Hoteles en Mendoza'; 
			}
			else { 
				echo '<a href="hoteles-en-mendoza.php">Hoteles en Mendoza</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'espcontact.php')){
				echo 'Contacto'; 
			}
			else { 
				echo '<a href="espcontact.php">Contacto</a>';
			}
			?>
		</li>
	</ul>
</aside>