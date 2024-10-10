<div id="contenido">
            <div class="carrito_productos">
                <div class="carrito_title">
                    <h1 style="color: black;">Carrito de compras</h1>
                </div>
                <div class="lista_productos">
                    <div class="img_producto">
                        <img src="./views/plantilla/img/computadora15.png" height="80%" alt="">
                    </div>
                    <div class="descripcion_producto">
                        <h5 style="color: black;">COMPUTADORA AMD A10</h5>
                    </div>
                    <dic class="precio_producto">
                        <h5 style="color: black;">s/ 4 990.90</h5>
                    </dic>
                    <div class="cantidad_producto">
                        <div class="quantity">
                            <input type="button" id="decrease" value="-" class="button_">
                            <input type="number" id="quantity" value="1" min="1" class="valor_cantidad">
                            <input type="button" id="increase" value="+" class="button_">
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
                    <div class="tacho">
                        <a href="basura.html"><img src="./views/plantilla/img/tacho.png" width="30%" alt=""></a>
                    </div>
                </div>
                <div class="lista_productos">
                    <div class="img_producto">
                        <img src="./views/plantilla/img/impresora12.png" height="80%" alt="">
                    </div>
                    <div class="descripcion_producto">
                        <h5 style="color: black;">IMPRESORA MAXIFY G3170</h5>
                    </div>
                    <dic class="precio_producto">
                        <h5 style="color: black;">s/ 899.00</h5>
                    </dic>
                    <div class="cantidad_producto">
                        <div class="quantity">
                            <input type="button" id="decrease1" value="-" class="button_">
                            <input type="number" id="quantity1" value="1" min="1" class="valor_cantidad">
                            <input type="button" id="increase1" value="+" class="button_">
                        </div>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const decreaseButton = document.getElementById('decrease1');
                                const increaseButton = document.getElementById('increase1');
                                const quantityInput = document.getElementById('quantity1');
                    
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
                    <div class="tacho">
                        <a href="basura.html"><img src="./views/plantilla/img/tacho.png" width="30%" alt=""></a>
                    </div>
                </div>
                <div class="lista_productos">
                    <div class="img_producto">
                        <img src="./views/plantilla/img/celular13.png" height="80%" alt="">
                    </div>
                    <div class="descripcion_producto">
                        <h5 style="color: black;">Samsung Galaxy Note 20 Ultra 5G 12GB/256GB Mystic Bronze</h5>
                    </div>
                    <dic class="precio_producto">
                        <h5 style="color: black;">s/ 990.99</h5>
                    </dic>
                    <div class="cantidad_producto">
                        <div class="quantity">
                            <input type="button" id="decrease2" value="-" class="button_">
                            <input type="number" id="quantity2" value="1" min="1" class="valor_cantidad">
                            <input type="button" id="increase2" value="+" class="button_">
                        </div>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const decreaseButton = document.getElementById('decrease2');
                                const increaseButton = document.getElementById('increase2');
                                const quantityInput = document.getElementById('quantity2');
                    
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
                    <div class="tacho">
                        <a href="basura.html"><img src="./views/plantilla/img/tacho.png" width="30%" alt=""></a>
                    </div>
                </div>
                <div class="lista_productos">
                    <div class="img_producto">
                        <img src="./views/plantilla/img/laptop3.png" height="80%" alt="">
                    </div>
                    <div class="descripcion_producto">
                        <h5 style="color: black;">LAPTOP ASUS E1504FA</h5>
                    </div>
                    <dic class="precio_producto">
                        <h5 style="color: black;">s/ 2 599.90</h5>
                    </dic>
                    <div class="cantidad_producto">
                        <div class="quantity">
                            <input type="button" id="decrease3" value="-" class="button_">
                            <input type="number" id="quantity3" value="1" min="1" class="valor_cantidad">
                            <input type="button" id="increase3" value="+" class="button_">
                        </div>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const decreaseButton = document.getElementById('decrease3');
                                const increaseButton = document.getElementById('increase3');
                                const quantityInput = document.getElementById('quantity3');
                    
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
                    <div class="tacho">
                        <a href="basura.html"><img src="./views/plantilla/img/tacho.png" width="30%" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="carrito_resumen">
                <div class="descripcion_resumen">
                    <div class="title_resumen">
                        <h3>Resumen</h3>
                    </div>
                    <div class="total_resumen">
                        <div class="total_texto">
                            <h4>Total normal</h4>
                        </div>
                        <div class="precio_total">
                            <h4>6,480.79</h4>
                        </div>
                    </div>
                    <div class="separacion"></div>
                    <div class="total_resumen">
                        <div class="total_texto">
                            <h4>Total con tarjeta G.</h4>
                        </div>
                        <div class="precio_total">
                            <h4>6,200.00</h4>
                        </div>
                    </div>
                    <div class="separacion"></div>
                </div>
                <button class="carrito_compras" onclick="window.location.href = './basura.html';">Comprar</button>
            </div>
        </div>