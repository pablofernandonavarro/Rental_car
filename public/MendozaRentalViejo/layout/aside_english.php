<aside class="menu">
	<p>
		<a href="index.php"><img src="assets/img/flags/es.gif" alt="Español"> Versión Español</a>
	</p>
	<p>
		<a href="index-portugues.php"><img src="assets/img/flags/br.gif" alt="Português"> Versâo Português</a>
	</p>
	<ul>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'index-english.php')){
				echo 'Home'; 
			}
			else { 
				echo '<a href="index-english.php">Home</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'office-location-in-mendoza.php')){
				echo 'Office location'; 
			}
			else { 
				echo '<a href="office-location-in-mendoza.php">Office location</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'car-and-suv-rental.php')){
				echo 'Car and SUV rental'; 
			}
			else { 
				echo '<a href="car-and-suv-rental.php">Car and SUV rental</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'pickup-and-van-rental.php')){
				echo 'Pickup and Van rental'; 
			}
			else { 
				echo '<a href="pickup-and-van-rental.php">Pickup and Van rental</a>';
			}
			?>	
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'conditions-and-requirements.php')){
				echo 'Conditions'; 
			}
			else { 
				echo '<a href="conditions-and-requirements.php">Conditions</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'hotels-in-mendoza.php')){
				echo 'Hotels in Mendoza'; 
			}
			else { 
				echo '<a href="hotels-in-mendoza.php">	Hotels in Mendoza</a>';
			}
			?>
		</li>
		<li>
			<?php 
			if (stripos($_SERVER['REQUEST_URI'], 'engcontact.php')){
				echo 'Contact us'; 
			}
			else { 
				echo '<a href="engcontact.php">Contact us</a>';
			}
			?>
		</li>
	</ul>
</aside>