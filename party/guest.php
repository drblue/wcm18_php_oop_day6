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
$guest = $guestController->getGuest($_REQUEST['id']);

?>

<h2><?php echo $guest->getName(); ?></h2>

<table>
	<tbody>
		<tr>
			<th>E-post-adress</th>
			<td><?php echo $guest->getEmail(); ?></td>
		</tr>
		<tr>
			<th>Telefonnummer</th>
			<td><?php echo $guest->getPhone(); ?></td>
		</tr>
	</tbody>
</table>

<a href="index.php">&laquo; Tillbaka</a>

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
