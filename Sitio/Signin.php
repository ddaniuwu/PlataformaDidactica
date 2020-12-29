<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="Stylesheet" href="Estilos.css" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Registro</title>
</head>
<body class="imagen" >
	<div class="container-login" >
        <center><h1 class="h1 text-white">Registrate para comenzar a jugar</h1></center>

	<br>
	<form method="POST" action="Conexion_Registro.php" class="formulario">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nombre</label>
      <input type="text" class="form-control" id="validationDefault01" required name="nombre">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Apellido Paterno</label>
      <input type="text" class="form-control" id="validationDefault02"  required name="ApPat">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Apellido Materno</label>
      <input type="text" class="form-control" id="validationDefault03" required name="ApMat">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Correo Electrónico</label>
      <input type="text" class="form-control" id="validationDefault03" required name="correo"> 
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Edad</label>
      <select class="custom-select" id="validationDefault04" required name="age">
        <option selected disabled value="">Elegir</option>
          <option  value="36">18</option>
          <option  value="36">19</option>
          <option  value="36">20</option>
          <option  value="36">21</option>
          <option  value="36">22</option>
          <option  value="36">23</option>
          <option  value="36">24</option>
          <option  value="36">25</option>
          <option  value="36">26</option>
          <option  value="36">27</option>
          <option  value="36">28</option>
          <option  value="36">29</option>
          <option  value="36">30</option>
          <option  value="36">31</option>
          <option  value="36">32</option>
          <option  value="36">33</option>
          <option  value="36">34</option>
          <option  value="36">35</option>
          <option  value="36">36</option>
        <option  value="37">37</option>
        <option  value="38">38</option>
	    <option  value="39">39</option>
        <option  value="40">40</option>
        <option  value="41">41</option>
        <option  value="42">42</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
     <label for="validationDefault05">Sexo</label>
      <select class="custom-select" id="validationDefault05" required name="sex">
        <option selected disabled value="">Elegir</option>
          <option  value="Hombre">Hombre</option>
        <option  value="Mujer">Mujer</option>
     
      </select>
    </div>
       <div class="col-md-3 mb-3">
      <label for="validationDefault06">Nombre usuario</label>
      <input type="text" class="form-control" id="validationDefault06" required name="_User">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault07">Contraseña</label>
      <input type="password" class="form-control" id="validationDefault07" required name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Estoy de acuerdo con los términos y condiciones
      </label>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Aceptar</button><br><br>
		<a href="login.php"><h5>¿Ya tienes una cuenta?<br>Incia Sesión</h5></a>

	</form>
	</div>		

</body>
<script>
	

</script>
</html>