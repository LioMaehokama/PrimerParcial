<form class="form-ingreso " onsubmit="login();return false;">
	<h2 class="form-ingreso-heading">Ingrese sus datos</h2>
    <label for="dni" class="sr-only">DNI</label>
    <input type="number" id="dni" class="form-control" placeholder="DNI" required="" autofocus="" min="1000000" max="99999999">
    <label for="provincia" class="sr-only">Provincia</label>
	<select id="sexo" class="form-control">
		<option value = "1"> Buenos Aires </option>
		<option value = "2"> Catamarca </option>
		<option value = "2"> Chaco </option>
		<option value = "4"> Chubut </option>
		<option value = "5"> Córdoba </option>
		<option value = "6"> Corrientes </option>
		<option value = "7"> Entre Ríos </option>
		<option value = "8"> Formosa </option>
		<option value = "9"> Jujuy</option>
		<option value = "10"> La Pampa </option>
		<option value = "11"> La Rioja </option>
		<option value = "12"> Mendoza </option>
		<option value = "13"> Misiones </option>
		<option value = "14"> Neuquén </option>
		<option value = "15"> Río Negro </option>
		<option value = "16"> Salta </option>
		<option value = "17"> San Juan </option>
		<option value = "18"> San Luis </option>
		<option value = "19"> Santa Cruz </option>
		<option value = "20"> Santa Fe </option>
		<option value = "21"> Santiago del Estero </option>
		<option value = "22"> Tierra del Fuego, Antártida e Islas del Atlántico Sur </option>
		<option value = "23"> Tucumán </option>
	</select>
    <label for="sexo" class="sr-only">Sexo</label>
	<select id="sexo" class="form-control">
		<option value = "1"> Masculino </option>
		<option value = "2"> Femenino </option>
	</select>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
</form>
