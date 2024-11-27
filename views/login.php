<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="icon" href="https://via.placeholder.com/32" type="image/x-icon"> <!-- Icono placeholder -->
    <title>Login</title>
    <style>
        body {
            background-image: url('https://www.bmw.com.pe/cotent/dam/bmw/common/all-models/7-series/sedan/2021/highlights/bmw-series-7-sedan-onepager-taphold-design-desktop-02.jpg'); /* Imagen aleatoria de coches */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.5); /* Efecto de opacidad para mejorar la legibilidad */
            padding: 30px;
            border-radius: 10px;
        }
        .form-input {
            margin-bottom: 15px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .social-icons img {
            width: 30px;
            margin: 0 10px;
        }
        .divider {
            margin: 20px 0;
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-container col-md-6 col-lg-4">
            <div class="text-center mb-4">
                <!-- Logo con imagen aleatoria -->
                <img src="https://source.unsplash.com/random/200x200?logo" alt="Logo" class="img-fluid mb-3" width="100%">
                <h2 class="text-white">Iniciar sesión</h2>
            </div>

            <p class="text-white text-center mb-4">Bienvenido, por favor inicia sesión para continuar</p>

            <!-- Botones de inicio de sesión social -->
            <div class="d-flex justify-content-center social-icons mb-4">
                <!-- Iconos sociales con imágenes aleatorias -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google" width="30">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Twitter_Logo_2021.svg" alt="Twitter" width="30">
            </div>

            <div class="text-center mb-4">ó</div>

            <!-- Formulario de login -->
            <form id="form_iniciar_sesion" action="">
                <div class="form-input">
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Correo*" required>
                </div>
                <div class="form-input">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña*" required>
                </div>
                <button type="submit" class="btn btn-custom w-100">Iniciar sesión</button>
            </form>

            <div class="text-center mt-3">
                <a href="#" class="text-white">¿Olvidaste tu contraseña?</a>
            </div>

            <!-- Crear nueva cuenta -->
            <div class="text-center mt-4">
                <p class="text-white">¿Eres nuevo aquí?</p>
                <a href="#" class="btn btn-outline-light w-100">Crear cuenta</a>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>/views/js/function_login.js"></script>
</body>
</html>
