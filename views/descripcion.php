<div id="contenido">
            <div id="imagen_desc_producto">
                <div class="imagengrande">
                    <img src="../img/celular1.png" height="100%" alt="">
                </div>
                <div class="imagenpeque">
                    <div class="i_p">
                        <img src="../img/appleCelular1.png" height="100%" alt="">
                    </div>
                    <div class="i_p">
                        <img src="../img/appleCelular2.png" height="100%" alt="">
                    </div>
                    <div class="i_p">
                        <img src="../img/appleCelular3.png" height="100%" alt="">
                    </div>
                </div>
            </div>
            <div id="descripcion_producto">
                <div class="caracteres">
                    <div class="texto_caracteres">
                        <h1>SAMSUNG</h1>
                        <h2>Samsung Galaxy A14 5g 4gb 128gb Black</h2>
                    </div>
                    <div class="calificacion">
                        <img src="../img/estrella.png" height="100%" alt="">
                        <img src="../img/estrella.png" height="100%" alt="">
                        <img src="../img/estrella.png" height="100%" alt="">
                        <img src="../img/estrella.png" height="100%" alt="">
                        <img src="../img/estrella.png" height="100%" alt="">
                    </div>
                    <div class="color_producto">
                        <h2>Color: Negro</h2>
                    </div>
                </div>
                <div class="precio_descripcion_producto">
                    <div class="cantidad_descripcion_producto">
                        <div class="quantity">
                            <input type="button" id="decrease" value="-">
                            <input type="number" id="quantity" value="1" min="1">
                            <input type="button" id="increase" value="+">
                        </div>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const decreaseButton = document.getElementById('decrease');
                                const increaseButton = document.getElementById('increase');
                                const quantityInput = document.getElementById('quantity');
                    
                                decreaseButton.addEventListener('click', function() {
                                    decreaseQuantity();
                                });
                    
                                increaseButton.addEventListener('click', function() {
                                    increaseQuantity();
                                });
                    
                                function decreaseQuantity() {
                                    let currentValue = parseInt(quantityInput.value);
                                    if (currentValue > 1) {
                                        quantityInput.value = currentValue - 1;
                                    }
                                }
                    
                                function increaseQuantity() {
                                    let currentValue = parseInt(quantityInput.value);
                                    quantityInput.value = currentValue + 1;
                                }
                            });
                        </script>
                    </div>
                    <div class="precio_descripcion">
                        <h1>s/ 799.99</h1>
                    </div>
                </div>
                <a class="btn btn-dark" href="carrito.html" role="button">Agregar al carrito</a>
            </div>
            <div id="informacion_descripcion">
                <div class="info_"><h5><b><a href="" style="text-decoration: none; color: black;">Descripción</a></b></h5></div>
                <div class="info_"><h5><b><a href="" style="text-decoration: none; color: black;">Especificaciones</a></b></h5></div>
                <div class="info_"><h5><b><a href="" style="text-decoration: none; color: black;">Comentarios</a></b></h5></div>
                <div class="info_"><h5><b><a href="" style="text-decoration: none; color: black;">Cambios y Devoluciones</a></b></h5></div>
            </div>
        </div>