<?php
    class vistaModelo{
        protected static function obtener_vista($vista){
            $nombres_permitidos = ['panel-administracion', 'insert-categoria', 'insert-compra', 'insert-detalle-venta', 'insert-pago', 'insert-persona', 'insert-producto', 'insert-sesion', 'insert-venta', 'usuario', 'producto', 'descripcion', 'carrito', 'contactos', 'perfil', 'p-informativas', 'computadoras', 'laptops', 'impresoras', 'celulares', 'camaras', 'compras'];
            if (in_array($vista, $nombres_permitidos)) {
                if (is_file("./views/".$vista.".php")) {
                    $contenido = "./views/".$vista.".php";
                }else {
                    $contenido = "404";
                }
            }elseif ($vista=="login" || $vista=="index") {
                $contenido = "login";
            }else {
                $contenido = "404";
            }
            return $contenido;
        }
    }
?>