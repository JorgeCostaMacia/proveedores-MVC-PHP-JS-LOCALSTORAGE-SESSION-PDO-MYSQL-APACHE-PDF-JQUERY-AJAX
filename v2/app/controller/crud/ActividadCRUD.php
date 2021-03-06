<?php

class ActividadCRUD{
    public function insert($connection, $dataContent, $cod_tabla, $tabla, $accion, $cod_usuario, $usuario){
        $result = $connection->insert('actividad(cod_usuario, tipo_usuario, cod_tabla, tabla, accion, fecha)', '(' . $cod_usuario . ', "' . $usuario .'",' . $cod_tabla . ', "' . $tabla. '", "' . $accion . '","' . date("Y-m-d H:i:s") . '")');
        if ($result["success"]) {
            $dataContent->setSuccess(true);
        } else {
            $dataContent->setSuccess(false);
            $dataContent->addErrores(new DBerror("Se produjo un error intentelo mas tarde"));
            $dataContent->addErrores($result["error"]);
        }
    }

    public function prepareLineas($connection, $dataContent, $cod, $values, $tabla, $accion, $cod_usuario, $usuario){
        $query2 = 'INSERT INTO actividad(cod_usuario, tipo_usuario, cod_tabla, cod_linea, tabla, accion, fecha) VALUE(' . $cod_usuario . ',"' . $usuario .'", ' . $cod . ',:cod_linea, "' . $tabla . '", "' . $accion . '","' . date("Y-m-d H:i:s") . '")';
        $bindParams2 = ["cod_linea"];
        $values2 = [];
        $values2[] = [];

        foreach ($values as $key => $subValues) {
            foreach ($subValues as $key2 => $linea) {
                if ($key2 === "cod_linea") {
                    $values2[$key]["cod_linea"] = $linea;
                }
            }
        }

        $result = $connection->prepare($query2, $bindParams2, $values2);

        if ($result["success"]) {
            $dataContent->setSuccess(true);
        } else {
            $dataContent->setSuccess(false);
            $dataContent->addErrores(new DBerror("Se produjo un error intentelo mas tarde"));
            $dataContent->addErrores($result["error"]);
        }
    }

    public function prepareLineasGrupo($connection, $dataContent, $values, $tabla, $accion, $cod_usuario, $usuario){
        $query2 = 'INSERT INTO actividad(cod_usuario, tipo_usuario, cod_tabla, cod_linea, tabla, accion, fecha) VALUE(' . $cod_usuario . ',"' . $usuario .'", :cod_tabla, :cod_linea, "' . $tabla . '", "' . $accion . '","' . date("Y-m-d H:i:s") . '")';
        $bindParams2 = ["cod_tabla", "cod_linea"];
        $values2 = [];
        $values2[] = [];

        foreach ($values as $key => $subValues) {
            foreach ($subValues as $key2 => $linea) {
                if ($key2 === "cod_linea") {
                    $values2[$key]["cod_linea"] = $linea;
                }
                if ($key2 === "cod_tabla") {
                    $values2[$key]["cod_tabla"] = $linea;
                }
            }
        }

        $result = $connection->prepare($query2, $bindParams2, $values2);

        if ($result["success"]) {
            $dataContent->setSuccess(true);
        } else {
            $dataContent->setSuccess(false);
            $dataContent->addErrores(new DBerror("Se produjo un error intentelo mas tarde"));
            $dataContent->addErrores($result["error"]);
        }
    }

    public function prepareTabla($connection, $dataContent, $values, $tabla, $accion, $cod_usuario, $usuario){
        $query2 = 'INSERT INTO actividad(cod_usuario, tipo_usuario, cod_tabla, tabla, accion, fecha) VALUE(' . $cod_usuario . ',"' . $usuario .'",:cod_tabla, "' . $tabla . '", "' . $accion . '","' . date("Y-m-d H:i:s") . '")';
        $bindParams2 = ["cod_tabla"];
        $values2 = [];
        $values2[] = [];

        foreach ($values as $key => $subValues) {
            foreach ($subValues as $key2 => $codTabla) {
                if ($key2 === "cod_albaran") {
                    $values2[$key]["cod_tabla"] = $codTabla;
                }
                if ($key2 === "cod_factura") {
                    $values2[$key]["cod_tabla"] = $codTabla;
                }
            }
        }

        $result = $connection->prepare($query2, $bindParams2, $values2);

        if ($result["success"]) {
            $dataContent->setSuccess(true);
        } else {
            $dataContent->setSuccess(false);
            $dataContent->addErrores(new DBerror("Se produjo un error intentelo mas tarde"));
            $dataContent->addErrores($result["error"]);
        }
    }

    public function select($connection, $dataContent, $col, $more){
        $result = $connection->select($col, 'actividad', $more);
        if ($result["success"]) {
            $dataContent->setSuccess(true);
            $dataContent->setActividad($connection->format_select_Object($result["result"], 'Actividad'));
        }
        else {
            $dataContent->setSuccess(false);
            $dataContent->addErrores(new DBerror("Se produjo un error intentelo mas tarde"));
            $dataContent->addErrores($result["error"]);
            $dataContent->addErrores($result["error"]);
        }
    }

}