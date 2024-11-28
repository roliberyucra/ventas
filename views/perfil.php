<div id="contenido">
            <div class="opciones">
                <div class="foto_perfil">
                    <img src="./views/plantilla/img/perfil.jpg" height="100%" alt="">
                </div>
                <div class="nombre_usuario">
                    <h6><?php echo 'Hola, ' . $_SESSION['sesion_ventas_nombres'] ?></h6>
                </div>
                <button class="opciones_cuenta" onclick="window.location.href = './perfil.html';"><h5>Mi perfil</h5></button>
                <button class="opciones_cuenta" onclick="window.location.href = './compras.html';"><h5>Mis compras</h5></button>
                <button class="opciones_cuenta" onclick="window.location.href = './vistos.html';"><h5>Vistos recientemente</h5></button>
                <button class="opciones_cuenta" onclick="window.location.href = './favoritos.html';"><h5>Favoritos</h5></button>
                <button class="opciones_cuenta" onclick="window.location.href = './contraseña.html';"><h5>Mi contraseña</h5></button>
            </div>
            <div class="separacion_perfil"></div>
            <div class="contenido_perfil">
                <div class="informacion_perfil">
                    <div class="titulo_info_perfil">
                        <h2>Mis datos personales</h2>
                    </div>
                    <div class="datos_perfil">
                        <h6>Nombres: </h6>
                        <input type="text" class="name" placeholder="<?php echo $_SESSION['sesion_ventas_nombres'] ?>">
                    </div>
                    <div class="datos_perfil">
                        <h6>Apellidos: </h6>
                        <input type="text" class="name" placeholder="<?php echo $_SESSION['sesion_ventas_dni'] ?>">
                    </div>
                    <div class="datos_perfil">
                        <h6>Email: </h6>
                        <input type="text" class="name" placeholder="yucracuroroliber@gmail.com">
                    </div>
                    <div class="datos_perfil_numericos">
                        <div class="dato_telefono">
                            <h6>Telefono: </h6>
                            <input type="number" class="name" placeholder="<?php echo $_SESSION['sesion_ventas_dni'] ?>">
                        </div>
                        <div class="dato_fecha">
                            <h6>Fecha de nacimiento: </h6>
                            <input type="date" class="name">
                        </div>
                    </div>
                </div>
            </div>
        </div>