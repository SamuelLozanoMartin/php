<!DOCTYPE html>
<html>
<title>Examen Final Prova Practica Modul 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>
	<div class="w3-card-4">

	<div class="w3-container w3-brown">
	  <h2>Registre d'empleats</h2>
	</div>
	<form class="w3-container" method="POST" action="plantilla.php">

	<p>
	<label class="w3-label w3-text-brown"><b>Nombre</b></label>
	<input class="w3-input w3-border w3-sand" name="nombre" type="text"></p>

	<p>
	<label class="w3-label w3-text-brown"><b>Apellidos</b></label>
	<input class="w3-input w3-border w3-sand" name="apellidos" type="text"></p>
	<p>

	<p>
	<label class="w3-label w3-text-brown"><b>Fecha de nacimiento</b><i> (format: 2016-07-17)</i></label>
	<input class="w3-input w3-border w3-sand" name="fechanacimiento" type="text"></p>
	
	<p>
	<label class="w3-label w3-text-brown"><b>Ciudad de nacimiento</b></label>
	<input class="w3-input w3-border w3-sand" name="ciudad" type="text"></p>
	<p>
	<p><button class="w3-btn w3-brown">registrar</button></p>

	</form>
</div>
	
<div class="w3-container w3-responsive">
Se ha creado un nuevo registro
<table class="w3-table w3-bordered w3-striped w3-large">
	<tr>
	  <th>Id</th>
	  <th>Nom</th>
	  <th>Cognoms</th>
	  <th>Data Naix.</th>
	</tr>

	<tr>
	  <td>25</td>
	  <td>Charo</td>
	  <td>Perez</td>
	  <td>2011-02-12</td>
	</tr>
	

	<tr>
	  <td>24</td>
	  <td>Pepe</td>
	  <td>Garcia</td>
	  <td>2120-01-01</td>
	</tr>
	

	<tr>
	  <td>23</td>
	  <td>Maria</td>
	  <td>Gracia</td>
	  <td>2001-12-02</td>
	</tr>
	

	<tr>
	  <td>22</td>
	  <td>Luis</td>
	  <td>Gil</td>
	  <td>1992-01-01</td>
	</tr>
	

	<tr>
	  <td>20</td>
	  <td>Juan</td>
	  <td>Garcia</td>
	  <td>1997-01-01</td>
	</tr>
	

</table>
</div>
</body>
</html>