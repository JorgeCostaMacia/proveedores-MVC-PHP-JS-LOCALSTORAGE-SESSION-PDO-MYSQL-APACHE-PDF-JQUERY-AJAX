<?php

class Pedidos {
    private $cod_pedido;
    private $cod_cliente;
    private $fecha;
    private $countLineas;

    public function getCodPedido(){return $this->cod_pedido;}
    public function setCodPedido($cod_pedido){$this->cod_pedido = $cod_pedido;}

    public function getCodCliente(){return $this->cod_cliente;}
    public function setCodCliente($cod_cliente){$this->cod_cliente = $cod_cliente;}

    public function getFecha(){return $this->fecha;}
    public function setFecha($fecha){$this->fecha = $fecha;}

    public function getCountLineas(){return $this->countLineas;}
    public function setCountLineas($_countLineas){$this->countLineas = $_countLineas;}
}