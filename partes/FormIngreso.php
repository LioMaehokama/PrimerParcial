<form class="form-ingreso " onsubmit="login();return false;">
	<h2 class="form-ingreso-heading">Ingrese sus datos</h2>
    <label for="dni" class="sr-only">DNI</label>
    <input type="number" id="dni" class="form-control" placeholder="DNI" required="" autofocus="" min="1000000" max="99999999">
    <label for="sexo" class="sr-only">Sexo</label>
	<select id="sexo" class="form-control">
		<option value = "1"> Masculino </option>
		<option value = "2"> Femenino </option>
	</select>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
</form>
