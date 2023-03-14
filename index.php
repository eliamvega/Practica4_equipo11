<!DOCTYPE html>

<html>
	<head>
		<title>Formulario</title>
		<meta charset="utf-8"/>
		<meta http-equiv="cache-control" content="no-cache" />
		<link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="main-layout">
			<header id="main-header">
			    <center>

				<h2 id="titPral">FORMULARIO</h2>
				</center>
			</header>
			
			<nav id="main-nav">
              <h4>Sitios de interés</h4>
				<ul>
			<li type=circle><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a>
			<li type=circle><a href="https://developer.mozilla.org/es/docs/Web/HTML">HTML</a>
			</ul>
			</nav>
			
			<main id="main-content">
				<section>
					<form method="post" action="recibe.php">
      <table width="80%" height="50%" align="center">
        <tr height="50%">
          <th class="intro" width="7%"></th>
          <th align="justify">
            </th>
            <th align="center">
              <label for="buscador">Tema a buscar</label>
              <input type="search" class="icono1"  placeholder="    Search"  name="buscador"><br>
                </th>
          </tr>
    
          <tr height="50%">
            <th >
		
              <label for="nombre">Nombre cliente
              <input type="text" name="nombre" class="icono1"></label><br>
    
              <label for="correo"> e-mail
                <input type="email" class="icono1" name="correo" placeholder="tucorreo@dominio.com" validate="true">
              </label><br>
    
              <label for="conocimientos">¿Cómo califica nuestros productos del 1 al 10?
                <input type="number" name="puntaje" min="1" max="10" class="icono1"><br>
              </label>
    
              <label for="visita">Elija la fecha de su proxima visita:
              <input type="date" id="visita" name="visita" class="icono1" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></label><br>
            </th>
            <th>
              <label for="servicio">¿Qué le parece el servicio prestado?<br>
            <select name="servicio" class="icono1">
			<option value="Opcion" selected>Elige opción</option>
              <option value="Excelente">Excelente</option>
              <option value="Bueno">Bueno</option>
              <option value="Regular" >Regular </option>
              <option value="Malo">Malo</option>
            </select></label></th>
          </tr>
          <td>
									<label for="txtNumRango">Edad:</label>
								</td>
								<td>
									20
									<input type="range" id="idTxtNumRango" 
									   name="txtNumRango" min="20" max="80"/>
									80
								</td>
							</tr>
    </table>
          <div align=center>
                 <fieldset>
                    <legend>Datos Personales</legend>
                    <table align="referencias">
                    <tr><th class="sexo" width="40%">
    
                    
                      <label for="promociones">¿Cuál es su sexo?<br>
                      <input type="radio" id="sexo" name="sexo" value="hombre" > Hombre<br>
                      <input type="radio" id="sexo" name="sexo" value="mujer"> Mujer<br>
                      <input type="radio" id="sexo" name="sexo" value="otro" > Otro<br>
                      </label>
                    </th>
    
                      <th width="80%"><label for="color">Elija su color favorito:<br>
                      <input type="color" id="c" name="color" value="rgb(255, 54, 0)"><br></label></th>
    
                      <th width="70%"><label for="CURP">CURP:<br>
                      <input type="text" id="your" placeholder="Ingresa CURP" class="icono1" size="18" maxlength="18" pattern="[A-Z]{4}[0-9]{6}[A-Z]{7}[0-9]{1}"><br></label></th></tr>
                      </table>
    
                  </fieldset>
    
                    <div align= center>
                        <label  for="subject" align = "center"><br>
                        <textarea id="opinion" name="opinion" placeholder=  "Escriba sus comentarios adicionales" class="icono1"
                                  style="width:80%"></textarea><br>
                                  </div>
    
    
                                  <input align="left" type="submit" value="Enviar" class="boton" />
      </form>

				
					<div id="inner-grid">
						
					</div>
					
				</section>
			</main>
			<aside id="main-aside">
				<center><h4> ANUNCIOS </h4> 
				
				<iframe width="100" height="100" src="https://www.youtube-nocookie.com/embed/j65L6eB34m0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</center>
			</aside>
			<footer id="main-footer">
                
			</footer>
		</div>
	</body>
</html>
	