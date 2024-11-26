<?php
session_start();
    class vistaModelo{
        protected static function obtener_vista($vista){
            $nombres_permitidos = ['view-categoria-admin', 'view-compra-admin', 'view-persona-admin', 'view-producto-admin', 'panel-administracion', 'view-categoria', 'view-compra', 'view-detalle-venta', 'view-pago', 'view-persona', 'view-producto', 'view-sesion', 'view-venta', 'update-categoria', 'update-compra', 'update-detalle-venta', 'update-pago', 'update-persona', 'update-producto', 'update-sesion', 'update-venta', 'insert-categoria', 'insert-compra', 'insert-detalle-venta', 'insert-pago', 'insert-persona', 'insert-producto', 'insert-sesion', 'insert-venta', 'usuario', 'producto', 'descripcion', 'carrito', 'contactos', 'perfil', 'p-informativas', 'computadoras', 'laptops', 'impresoras', 'celulares', 'camaras', 'compras'];
            /* if (!isset($_SESSION['sesion_ventas_id'])) {
                return "login";
            } */
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