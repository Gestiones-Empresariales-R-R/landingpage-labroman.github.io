<?php include('../resource/head.php') ?>

<header style="background-image: url(../img/contactos.jpg);">
    <nav class="nav" id="nav-menu">
        <ul class="nav_list">
            <li class="nav_item">
                <a href="../index.php" class="nav_link">Inicio</a>
            </li>
			<li class="nav_item">
                <a href="servicios.php" class="nav_link">Servicios</a>
            </li>
            <li class="nav_item">
                <a href="https://www.clinsis.com/roman/" class="nav_link">Resultados</a>
            </li>
        </ul>
    </nav>
    <div class="text">
        <h1><b style="color: black;">Contac</b>tenos</h1>
    </div>
</header>

<div id="contactos_info">
		<div id="contactos_title">
			<h2>
				<em class="contactos_strong_1 t1">Contacta con</em>
				<em class="contactos_strong_2 t2">Nosotros</em>
			</h2>
			<p class="contactos_descripcion">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
			</p>
			<hr>
			<div id="contactos_contenido">
				
				<div id="izquierda">
					<p class="descripcion-pagina texto-contacto">
						Direccion: <strong>Oficentro Metropolitano Km9.5 Carretera a Masaya,
						edificio Oficentro modulo 7.</strong><br>
						Direccion: <strong>Pista Jean Paul Genie Club Terraza 400mtr arriba,
						frente al costado Este, Centro Comercial El Tiangue.</strong><br>
						Direccion: <strong>Uniplaza k-8km carretera sur.</strong><br>
						Direccion: <strong>Plaza Serranias km 12.5 Carretera Sur.</strong><br>
						Telélefono: <strong>7605-1000</strong><br>
						PBX: <strong>2298 1434</strong><br>
						Celular: <strong>*2273</strong><br>
					</p>
				</div>	

				<div id="derecha">
					<form action="#" method="POST">
						<label for="">Nombre Completo: </label><input type="text" name="nombre" placeholder="Ingresa tu nombre" class="nombre-mensaje"><br><br>
						<label for="">correo Electronico: </label><input type="email" name="correo" placeholder="Ingresa tu coreo" class="email-asunto"><br><br>
						<label for="">Asunto: </label><input type="text" name="asunto" placeholder="Ingresa el asunto" class="email-asunto"><br><br>
						<label for="">Mensaje: </label><br><br>
						<textarea name="mensaje" placeholder="Ingrese su mensaje " class="nombre-mensaje"></textarea>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="enviar" value="Enviar consulta">
					</form>
				</div>
				<div id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d632.3116002281504!2d-86.28414918923373!3d12.137384894263311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7155d857262b13%3A0x36896d51d558d74b!2sLaboratorio%20Cl%C3%ADnico%20Rom%C3%A1n%20-%20Sucursal%20Central!5e0!3m2!1ses!2sni!4v1642244540409!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>

    <?php include('../resource/footer.php') ?>