<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

/**
 * - Hämta ut alla gäster och loopa över dem
 * - För varje gäst skriva ut gästens namn och ha en länk till en enskild gästs sida
 * - Länk för att anmäla sig till festen
*/

$guestController = new GuestController();
$guests = $guestController->getGuests();

?>

<h1>Paaaarty!</h1>

<h2>Anmälda gäster</h2>
<ol>
	<?php
		foreach ($guests as $guest) {
			?>
				<li>
					<a href="guest.php?id=<?php echo $guest->getId(); ?>">
						<?php echo $guest->getName(); ?>
					</a>
				</li>
			<?php
		}
	?>
</ol>

<a href="signup.php">Anmäl dig till festen</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
