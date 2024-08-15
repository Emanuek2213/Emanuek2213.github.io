<?php

require_once "conexion.php";
require_once "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

class AdminstrarClienteModelo{

    static public function mdlAnalizarProducto(){
        $stmt = Conexion::conectar()->prepare("SELECT
                                                    ROW_NUMBER() OVER(ORDER BY cn.Nombres) AS 'Item',
                                                    cp.dni_cliente as 'Cod.cliente',
                                                    CONCAT(cn.Nombres) as 'Cliente',
                                                    cp.cod_producto as 'Codigo',
                                                    p.id_categoria_producto as 'id_categoria',
                                                    c.nombre_categoria as 'Categoria',
                                                    p.descripcion_producto as 'Producto',
                                                    p.stock_producto as 'Cantidad'
                                                FROM
                                                    cliente_producto cp
                                                INNER JOIN
                                                    productos p ON p.codigo_producto = cp.cod_producto
                                                INNER JOIN
                                                    clientes_nombre cn ON cn.Identificacion = cp.dni_cliente
                                                INNER JOIN
                                                    categorias c ON p.id_categoria_producto = c.id_categoria
                                                ORDER BY
                                                    cn.Nombres");
        
        $stmt -> execute();

        return $stmt->fetchAll();
    }


    static public function mdlVerDuplicado($id, $dni){
        $stmt = Conexion::conectar()->prepare("SELECT
                                                cp.dni_cliente, cp.cod_producto
                                                FROM
                                                    cliente_producto cp
                                                WHERE 
                                                    cp.dni_cliente = :dni AND cp.cod_producto = :id
                                                ");
        
        $stmt -> bindParam(":dni",$dni,PDO::PARAM_STR);
        $stmt -> bindParam(":id",$id,PDO::PARAM_STR);
        $stmt -> execute();

        $filas = $stmt->fetchAll();

        if (count($filas) > 0) {
            return "ya esta";
        } else {
            return "no esta";
        }
    }

    static public function mdlAgregarProducto($id, $dni){
        try {
            $stmtCount = Conexion::conectar()->query("SELECT COUNT(*) AS total FROM cliente_producto");
            $totalFilas = $stmtCount->fetch(PDO::FETCH_ASSOC)['total'];
    
            // Incrementar el número de filas en 1 para obtener el próximo valor de 'orden'
            $orden = $totalFilas + 1;
    
            $stmtInsert = Conexion::conectar()->prepare("INSERT INTO cliente_producto(
                                                                id,
                                                                dni_cliente,
                                                                cod_producto,
                                                                orden
                                                            )
                                                            VALUES(
                                                                NULL,
                                                                :dni,
                                                                :id,
                                                                :orden
                                                            )");
    
            $stmtInsert->bindParam(":dni", $dni, PDO::PARAM_STR);
            $stmtInsert->bindParam(":id", $id, PDO::PARAM_STR);
            $stmtInsert->bindParam(":orden", $orden, PDO::PARAM_INT);
            
            $stmtInsert->execute();
    
            return "OK"; // Si se ejecuta correctamente, retorna "OK"
        } catch (PDOException $e) {
            // En caso de error, retorna "ERROR"
            return "ERROR" ;
        }
        
    }


    static public function mdlEliminarProducto($id, $dni){
        try {
            
            $stmt = Conexion::conectar()->prepare("DELETE FROM cliente_producto WHERE dni_cliente = :dni and cod_producto = :id");
    
            $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            
            
            $stmt->execute();
    
            return "OK"; // Si se ejecuta correctamente, retorna "OK"
        } catch (PDOException $e) {
            // En caso de error, retorna "ERROR"
            return "ERROR" ;
        }
        
    }

}