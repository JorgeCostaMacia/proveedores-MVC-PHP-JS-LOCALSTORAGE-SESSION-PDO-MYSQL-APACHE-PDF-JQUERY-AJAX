<?php

class Includes {
    function css(){
        foreach(_cssFileName as $name){
            foreach(_actualPath as $apath){
                $filePath = $apath . _cssPath . $name . '.css';
                if (file_exists($filePath) && is_file($filePath)) {
                    echo '<link rel="stylesheet" href="' . $filePath . '">';
                }
            }
        }
    }
    function jsComun($actualPath = ""){
        echo '<script src="' . $actualPath . _jsPath . _jsJquery . '.js"></script>' .
            '<script src="' . $actualPath . _jsPath . jsBootstrap . '.js"></script>';
    }

    function jsLogin(){
        $this->jsComun();
        echo '<script src="' . _jsPath . 'login.min.js"></script>';
    }
    function jsHome(){
        $this->jsComun('../');
        echo  '<script src="../' . _jsPath . 'home.min.js"></script>';
    }
    function jsDatosCliente(){
        $this->jsComun('../');
        echo '<script src="../' . _jsPath . 'datosCliente.min.js"></script>';
    }
    function jsPedidosCliente(){
        $this->jsComun('../');
        echo '<script src="../public/pedidosCliente/controller/class/Ajax.js"></script>';
        echo '<script src="../public/pedidosCliente/controller/class/pedidosCliente.js"></script>';
        echo '<script src="../public/pedidosCliente/libraries/typeValidate.js"></script>';
        echo '<script src="../public/pedidosCliente/view/mensajes.js"></script>';
        echo '<script src="../public/pedidosCliente/view/pedidosCliente.js"></script>';
        echo '<script src="../public/pedidosCliente/controller/inputsHandler.js"></script>';
        echo '<script src="../public/pedidosCliente/controller/pedidosCliente.js"></script>';
        echo '<script src="../public/pedidosCliente/controller/ini.js"></script>';
    }
    function jsRealizarPedidosCliente(){
        $this->jsComun('../');
        echo   '<script src="../' . _jsPath . 'realizarPedidosCliente.min.js"></script>';
    }

    function phpHead($services){ include_once _layoutsPathPHP . "head.php"; }
    function phpPriController($services){ include_once "../controller/primary.php"; }
    function phpFooter(){ include_once _layoutsPathPHP . "footer.php"; }

    function phpLogin(){ include_once _assetsPathPHP . "login.php";}
    function phpNavCliente($services){ include_once _assetsPathPHP . "navCliente.php";}
    function phpNavGestor($services){ include_once _assetsPathPHP . "navGestor.php";}
    function phpDatosCliente($services){ include_once _assetsPathPHP . "datosCliente.php"; }
    function phpPedidosCliente($services){include_once _assetsPathPHP . "pedidosCliente.php";}
    function phpRealizarPedidosCliente($services){include_once _assetsPathPHP . "RealizarPedidosCliente.php";}
}