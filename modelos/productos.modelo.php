<?php

require_once "conexion.php";
require_once "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


class ProductosModelo{

    /*===================================================================
    REALIZAR LA CARGA MASIVA DE PRODUCTOS MEDIANTE ARCHIVO EXCEL
    ====================================================================*/
    static public function mdlCargaMasivaProductos($fileProductos){

        $nombreArchivo = $fileProductos['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        $hojaCategorias = $documento->getSheetByName("Categorias");
        $numeroFilasCategorias = $hojaCategorias->getHighestDataRow(); 
        
        $hojaProductos = $documento->getSheetByName("Productos");
        $numeroFilasProductos = $hojaProductos->getHighestDataRow();

        $hojaClientes = $documento->getSheetByName("Clientes");
        $numeroFilasClientes = $hojaClientes->getHighestDataRow();

        $categoriasRegistradas = 0;
        $productosRegistrados = 0;
        $clientesRegistrados = 0;

        var_dump($numeroFilasCategorias);
        var_dump($numeroFilasProductos);

        $stmt = Conexion::conectar()->prepare("DELETE FROM `productos` WHERE 1");

        if($stmt->execute()){
            $stmt = Conexion::conectar()->prepare("DELETE FROM `categorias` WHERE 1");

            if($stmt->execute()){

                $stmt = Conexion::conectar()->prepare("DELETE FROM `clientes_nombre` WHERE 1");

                if($stmt->execute()){


                    for ($j=2; $j <= $numeroFilasClientes ; $j++) { 

                        $id_cliente                     = $hojaClientes->getCell("A".$j);
                        $Nombres                        = $hojaClientes->getCell("B".$j);
                        $Razon                          = $hojaClientes->getCell("C".$j);
                        $Identificacion                 = $hojaClientes->getCell("E".$j);
                        $Direccion                      = $hojaClientes->getCell("D".$j);
                        $Telefono                       = $hojaClientes->getCell("F".$j);            

                        if(!empty($Nombres)){
                            $stmt = Conexion::conectar()->prepare("INSERT INTO `clientes_nombre`(`id_cliente`, `Nombres`, `Razon`, `Identificacion`, `Direccion`, `Telefono`) 
                                                                                VALUES (:id_cliente,
                                                                                        :Nombres,
                                                                                        :Razon,
                                                                                        :Identificacion,
                                                                                        :Direccion,
                                                                                        :Telefono)");

                            $stmt -> bindParam(":id_cliente",$id_cliente,PDO::PARAM_STR);

                            $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
                            $stmt -> bindParam(":Razon",$Razon,PDO::PARAM_STR);
                            $stmt -> bindParam(":Identificacion",$Identificacion,PDO::PARAM_STR);
                            $stmt -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
                            $stmt -> bindParam(":Telefono",$Telefono,PDO::PARAM_STR);
                            
                            
                            

                            if($stmt->execute()){
                                $clientesRegistrados = $clientesRegistrados + 1;
                                
                            }else{
                                $clientesRegistrados = 0;
                            }
                        }
                    }

                    //CICLO FOR PARA REGISTROS DE CATEGORIAS
                    for ($i=2; $i <= $numeroFilasCategorias ; $i++) { 

                        $categoria = $hojaCategorias->getCellByColumnAndRow(1,$i);
                        $aplica_peso = $hojaCategorias->getCellByColumnAndRow(2,$i);
                        $fecha_actualizacion = date("Y-m-d");

                        if(!empty($categoria)){
                            $stmt = Conexion::conectar()->prepare("INSERT INTO categorias(nombre_categoria,
                                                                                            aplica_peso,
                                                                                            fecha_actualizacion_categoria)
                                                                                values(:nombre_categoria,
                                                                                        :aplica_peso,
                                                                                        :fecha_actualizacion_categoria);");

                            $stmt -> bindParam(":nombre_categoria",$categoria,PDO::PARAM_STR);
                            $stmt -> bindParam(":aplica_peso",$aplica_peso,PDO::PARAM_STR);
                            $stmt -> bindParam(":fecha_actualizacion_categoria",$fecha_actualizacion,PDO::PARAM_STR);

                            if($stmt->execute()){
                                $categoriasRegistradas = $categoriasRegistradas + 1;
                            }else{
                                $categoriasRegistradas = 0;
                            }
                        }                
                    }

                    if($categoriasRegistradas > 0){

                        //CICLO FOR PARA REGISTROS DE PRODUCTOS
                        for ($i=2; $i <= $numeroFilasProductos ; $i++) { 

                            $codigo_producto = $hojaProductos->getCell("A".$i);
                            $id_categoria_producto = ProductosModelo::mdlBuscarIdCategoria($hojaProductos->getCell("B".$i));
                            $descripcion_producto = $hojaProductos->getCell("C".$i);

                            $precio_paquetito               = $hojaProductos->getCell("D".$i);
                            $precio_unidad                  = $hojaProductos->getCell("E".$i);
                            $precio_docena                  = $hojaProductos->getCell("F".$i);
                            $precio_ciento                  = $hojaProductos->getCell("G".$i);
                            $precio_millar                  = $hojaProductos->getCell("H".$i);
                            $precio_caja                    = $hojaProductos->getCell("I".$i);
                            $precio_fardo                   = $hojaProductos->getCell("J".$i);

                            $cantidad_millar                = $hojaProductos->getCell("K".$i);
                            $cantidad_docena                = $hojaProductos->getCell("L".$i);
                            $cantidad_fardo                 = $hojaProductos->getCell("M".$i);
                            $cantidad_caja                  = $hojaProductos->getCell("N".$i);

                            $precio_compra                  = $hojaProductos->getCell("O".$i);
                            $utilidad                       = $hojaProductos->getCell("P".$i);
                            $stock_producto                 = $hojaProductos->getCell("Q".$i);
                            $minimo_stock_producto          = $hojaProductos->getCell("R".$i);
                            $ventas_producto                = $hojaProductos->getCell("S".$i);
                            $fecha_actualizacion_producto   = date('Y-m-d');

                            if(!empty($codigo_producto)){
                                $stmt = Conexion::conectar()->prepare("INSERT INTO productos(codigo_producto,
                                                                                            id_categoria_producto,
                                                                                            descripcion_producto,
                                                                                            precio_paquetito,
                                                                                            precio_unidad,   
                                                                                            precio_docena,   
                                                                                            precio_ciento,   
                                                                                            precio_millar,  
                                                                                            precio_caja,     
                                                                                            precio_fardo,    
                                                                                            cantidad_millar, 
                                                                                            cantidad_docena, 
                                                                                            cantidad_fardo,  
                                                                                            cantidad_caja,
                                                                                            precio_compra,   
                                                                                            utilidad,
                                                                                            stock_producto,
                                                                                            minimo_stock_producto,
                                                                                            ventas_producto,
                                                                                            fecha_actualizacion_producto)
                                                                                    values(:codigo_producto,
                                                                                            :id_categoria_producto,
                                                                                            :descripcion_producto,
                                                                                            :precio_paquetito,
                                                                                            :precio_unidad,   
                                                                                            :precio_docena,   
                                                                                            :precio_ciento,   
                                                                                            :precio_millar,  
                                                                                            :precio_caja,     
                                                                                            :precio_fardo,    
                                                                                            :cantidad_millar, 
                                                                                            :cantidad_docena, 
                                                                                            :cantidad_fardo,  
                                                                                            :cantidad_caja,
                                                                                            :precio_compra,
                                                                                            :utilidad,
                                                                                            :stock_producto,
                                                                                            :minimo_stock_producto,
                                                                                            :ventas_producto,
                                                                                            :fecha_actualizacion_producto);");

                                $stmt -> bindParam(":codigo_producto",$codigo_producto,PDO::PARAM_STR);
                                $stmt -> bindParam(":id_categoria_producto",$id_categoria_producto[0],PDO::PARAM_STR);
                                $stmt -> bindParam(":descripcion_producto",$descripcion_producto,PDO::PARAM_STR);
                                
                                $stmt -> bindParam(":precio_paquetito",$precio_paquetito,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_unidad",$precio_unidad,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_docena",$precio_docena,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_ciento",$precio_ciento,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_millar",$precio_millar,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_caja",$precio_caja,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_fardo",$precio_fardo,PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad_millar",$cantidad_millar,PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad_docena",$cantidad_docena,PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad_fardo",$cantidad_fardo,PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad_caja",$cantidad_caja,PDO::PARAM_STR);
                                $stmt -> bindParam(":precio_compra",$precio_compra,PDO::PARAM_STR);

                                $stmt -> bindParam(":utilidad",$utilidad,PDO::PARAM_STR);
                                $stmt -> bindParam(":stock_producto",$stock_producto,PDO::PARAM_STR);
                                $stmt -> bindParam(":minimo_stock_producto",$minimo_stock_producto,PDO::PARAM_STR);
                                $stmt -> bindParam(":ventas_producto",$ventas_producto,PDO::PARAM_STR);
                                $stmt -> bindParam(":fecha_actualizacion_producto",$fecha_actualizacion_producto,PDO::PARAM_STR);

                                if($stmt->execute()){
                                    $productosRegistrados = $productosRegistrados + 1;
                                    
                                }else{
                                    $productosRegistrados = 0;
                                }
                            }
                        }

                        
                    }
                    var_dump($categoriasRegistradas);
                    var_dump($productosRegistrados);
                    var_dump($clientesRegistrados);
                    
                    $respuesta["totalCategorias"] = $categoriasRegistradas;
                    $respuesta["totalProductos"] = $productosRegistrados;
                    $respuesta["totalClientes"] = $clientesRegistrados;

                    var_dump($respuesta);



                    return $respuesta;
                }
            }
        }

       
    }

    /*===================================================================
    BUSCAR EL ID DE UNA CATEGORIA POR EL NOMBRE DE LA CATEGORIA
    ====================================================================*/
    static public function mdlBuscarIdCategoria($nombreCategoria){

        $stmt = Conexion::conectar()->prepare("select id_categoria from categorias where nombre_categoria = :nombreCategoria");
        $stmt -> bindParam(":nombreCategoria", $nombreCategoria,PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }

    /*===================================================================
    OBTENER LISTADO TOTAL DE PRODUCTOS PARA EL DATATABLE
    ====================================================================*/
    static public function mdlListarProductos(){
    
        $stmt = Conexion::conectar()->prepare("SELECT       '' AS detalles, p.id,
                                                            p.codigo_producto, 
                                                            
                                                            c.id_categoria,
                                                            c.nombre_categoria,
                                                            p.descripcion_producto,
                                                            ROUND(p.precio_unidad,2) as precio_unidad,
                                                            ROUND(p.precio_paquetito,2) as precio_paquetito,
                                                            ROUND(p.precio_docena,2) as precio_docena,
                                                            ROUND(p.precio_ciento,2) as precio_ciento,
                                                            ROUND(p.precio_millar,2) as precio_millar,
                                                            ROUND(p.precio_caja,2) as precio_caja,
                                                            ROUND(p.precio_fardo,2) as precio_fardo,
                                                            
                                                            ROUND(p.cantidad_docena,2) as cantidad_docena,
                                                            ROUND(p.cantidad_millar,2) as cantidad_millar,
                                                            ROUND(p.cantidad_caja,2) as cantidad_caja,
                                                            ROUND(p.cantidad_fardo,2) as cantidad_fardo,
                                                            
                                                            p.precio_compra as precio_compra,
                                                            p.utilidad as utilidad,
                                                            
                                                            CASE WHEN c.aplica_peso = 1 THEN concat(p.stock_producto,'Und(s))') else concat(p.stock_producto,'Und(s)') end as stock,
                                                            
                                                            CASE WHEN c.aplica_peso = 1 THEN concat(p.minimo_stock_producto,'Und(s)') else concat(p.minimo_stock_producto,'Und(s)') end as minimo_stock,
                                                            
                                                            CASE WHEN c.aplica_peso = 1 THEN concat(p.ventas_producto,'Und(s)') else concat(p.ventas_producto,'Und(s)') end as ventas,
                                                            
                                                            p.fecha_creacion_producto,
                                                            p.fecha_actualizacion_producto,
                                                            p.imagen_producto,
                                                            p.direccion,
                                                            '' as opciones
                                                FROM productos p INNER JOIN categorias c on p.id_categoria_producto = c.id_categoria;");
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    /*===================================================================
    OBTENER LISTADO TOTAL DE PRODUCTOS PARA EL DATATABLE
    ====================================================================*/
    static public function mdlListarProductosNuevo(){
    
        $stmt = Conexion::conectar()->prepare("SELECT       '' AS detalles, p.id,
                                                            p.codigo_producto, 
                                                            
                                                            c.id_categoria,
                                                            c.nombre_categoria,
                                                            p.descripcion_producto,
                                                            ROUND(p.precio_unidad,2) as precio_unidad,
                                                            ROUND(p.precio_paquetito,2) as precio_paquetito,
                                                            ROUND(p.precio_docena,2) as precio_docena,
                                                            ROUND(p.precio_ciento,2) as precio_ciento,
                                                            ROUND(p.precio_millar,2) as precio_millar,
                                                            ROUND(p.precio_caja,2) as precio_caja,
                                                            ROUND(p.precio_fardo,2) as precio_fardo,
                                                            ROUND(p.precio_plancha,2) as precio_plancha,
                                                            
                                                            ROUND(p.cantidad_docena,2) as cantidad_docena,
                                                            ROUND(p.cantidad_millar,2) as cantidad_millar,
                                                            ROUND(p.cantidad_caja,2) as cantidad_caja,
                                                            ROUND(p.cantidad_fardo,2) as cantidad_fardo,
                                                            ROUND(p.cantidad_plancha,2) as cantidad_plancha,
                                                            ROUND(p.cantidad_ciento,2) as cantidad_ciento,
                                                            
                                                            p.precio_compra as precio_compra,
                                                            p.utilidad as utilidad,
                                                            
                                                            CASE WHEN c.aplica_peso = 1 THEN concat(p.stock_producto,'Und(s))') else concat(p.stock_producto,'Und(s)') end as stock,
                                                            
                                                            CASE WHEN c.aplica_peso = 1 THEN concat(p.minimo_stock_producto,'Und(s)') else concat(p.minimo_stock_producto,'Und(s)') end as minimo_stock,
                                                            
                                                            CASE WHEN c.aplica_peso = 1 THEN concat(p.ventas_producto,'Und(s)') else concat(p.ventas_producto,'Und(s)') end as ventas,
                                                            
                                                            p.fecha_creacion_producto,
                                                            p.fecha_actualizacion_producto,
                                                            p.imagen_producto,
                                                            p.direccion,
                                                            '' as opciones
                                                FROM productos p INNER JOIN categorias c on p.id_categoria_producto = c.id_categoria;");
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }


    /*===================================================================
    REGISTRAR PRODUCTOS UNO A UNO DESDE EL FORMULARIO DEL INVENTARIO
    ====================================================================*/
    static public function mdlRegistrarProducto($table, $data, $id, $nameId,$imagen){        

                $set = "";
                $set2 = "";

                $set .= $nameId.",";
                $set2 .= ":".$nameId.",";

                foreach ($data as $key => $value) {
                    
                    $set .= $key.",";
                    $set2 .= ":".$key.",";
                        
                }
                
                $set = substr($set, 0, -1);
                $set2 = substr($set2, 0, -1);
                
                
                //var_dump($set);
        
                $stmt = Conexion::conectar()->prepare("INSERT INTO $table ($set) values ($set2);");
        
                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		
        
                $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);
        
                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    if ($imagen) {
                        $guardarImagen = new ProductosModelo();
                        $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);
                        
                    }
                    return "ok";
        
                }else{
        
                    return Conexion::conectar()->errorInfo();
                
                }

    }

    static public function mdlActualizarInformacion($table, $data, $id, $nameId,$imagen){

        // $nombre = $data["descripcion_producto"];

        // $set = "";

        // foreach ($data as $key => $value) {
            
        //     $set .= $key." = :".$key.",";
                
        // }

        // $set = substr($set, 0, -1);

        // //var_dump($set);

        // $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

        // foreach ($data as $key => $value) {
            
        //     $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
            
        // }		

        // $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

        // if($stmt->execute()){

        //     //GUARDAMOS LA IMAGEN EN LA CARPETA
        //     if ($imagen) {
        //         $guardarImagen = new ProductosModelo();
        //         $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);
        //     }

        //     $stmt = Conexion::conectar()->prepare("UPDATE productos_botones pb
        //                                             INNER JOIN productos p ON pb.producto = p.descripcion_producto
        //                                             SET pb.producto = :nombre
        //                                             WHERE p.codigo_producto = :codigo;");

        //     $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
        //     $stmt -> bindParam(":codigo",$id,PDO::PARAM_INT);

        //     if($stmt->execute()){

        //          $stmt = Conexion::conectar()->prepare("UPDATE populares pb
        //                                                 INNER JOIN productos p ON pb.producto_popular = p.descripcion_producto
        //                                                 SET pb.producto_popular = :nombre
        //                                                 WHERE p.codigo_producto = :codigo;");

        //         $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
        //         $stmt -> bindParam(":codigo",$id,PDO::PARAM_INT);

        //         if($stmt->execute()){
        
        //             return "ok";
        
        //         }else{
        
        //             return Conexion::conectar()->errorInfo();
        //         }
    
        //     }else{
    
        //         return Conexion::conectar()->errorInfo();
        //     }

        // }else{

        //     return Conexion::conectar()->errorInfo();
        
        // }

        $nombre = $data["descripcion_producto"];


        $stmt = Conexion::conectar()->prepare(" UPDATE productos_botones pb
                                                INNER JOIN productos p ON pb.producto = p.descripcion_producto
                                                SET pb.producto = :nombre
                                                WHERE p.codigo_producto = :codigo;");

        $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $stmt -> bindParam(":codigo",$id,PDO::PARAM_INT);

        // var_dump($stmt, $nombre , $id);

        if($stmt->execute()){

             $stmt = Conexion::conectar()->prepare("UPDATE populares pb
                                                    INNER JOIN productos p ON pb.producto_popular = p.descripcion_producto
                                                    SET pb.producto_popular = :nombre
                                                    WHERE p.codigo_producto = :codigo;");

            $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $stmt -> bindParam(":codigo",$id,PDO::PARAM_INT);

            if($stmt->execute()){    
                
                $set = "";

                foreach ($data as $key => $value) {
                    
                    $set .= $key." = :".$key.",";
                        
                }

                $set = substr($set, 0, -1);

                //var_dump($set);

                $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		

                $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    if ($imagen) {
                        $guardarImagen = new ProductosModelo();
                        $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);
                    }

                    return "ok";

                }else{

                    return Conexion::conectar()->errorInfo();
                
                }
    
            }else{
    
                return Conexion::conectar()->errorInfo();
            }

            

            

        }else{

            return Conexion::conectar()->errorInfo();
        }
    }

    /*=============================================
    Peticion DELETE para eliminar datos
    =============================================*/

    static public function mdlEliminarInformacion($table, $id, $nameId){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $table WHERE $nameId = :$nameId");

        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";;
        
        }else{

            return Conexion::conectar()->errorInfo();

        }

    }   

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function mdlListarNombreProductos(){

        // $stmt = Conexion::conectar()->prepare("SELECT 
        //                                         CONCAT(
        //                                             codigo_producto, ' - ', c.nombre_categoria, ' - ', descripcion_producto, 
        //                                             ' - S./ ',
        //                                             CASE 
        //                                                 WHEN p.precio_unidad > 0 THEN p.precio_unidad
        //                                                 WHEN p.precio_paquetito > 0 THEN p.precio_paquetito
        //                                                 ELSE p.precio_ciento
        //                                             END
        //                                         ) as descripcion_producto
        //                                     FROM productos p
        //                                     INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria;");

        // $stmt -> execute();

        // return $stmt->fetchAll();

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                     p.codigo_producto, 
                                                     c.nombre_categoria, 
                                                     p.descripcion_producto, 
                                                     (CASE 
                                                         WHEN p.precio_unidad > 0 THEN p.precio_unidad
                                                         WHEN p.precio_paquetito > 0 THEN p.precio_paquetito
                                                         ELSE p.precio_ciento
                                                     END)as precio_venta_producto,
                                                     p.stock_producto,
                                                     p.imagen_producto
                                        
                                             FROM productos p

                                             INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria");

        $stmt -> execute();

        $productos = $stmt->fetchAll();

        $productData = array();

        foreach($productos as $producto){
            $codigo_producto = $producto["codigo_producto"];
            $nombre_categoria = $producto["nombre_categoria"];
            $descripcion_producto = $producto["descripcion_producto"];
            $precio_venta_producto = $producto["precio_venta_producto"];
            $stock_producto = $producto["stock_producto"];

            $data["id"] = $producto["codigo_producto"];
            $data["value"] = $codigo_producto.' - '.$nombre_categoria.' - '. $descripcion_producto.' - '. $precio_venta_producto.' - '. $stock_producto;
            $data["label"] = '
            <a href = "javascript:void(0);" class = "d-flex" style = "width:100% !important; ">
                <img src= "http://localhost/market-pos/vistas/assets/imagenes/productos/'.$producto['imagen_producto'].'"width = "70" height = "70" />
                <div class = "d-flex ml-4 flex-column">
                    <span class = "text-sm"> Codigo: ' .$codigo_producto .'/ - / Producto: <strong>'. $descripcion_producto . '</strong></span>
                    <span class = "text-sm"> Precio: ' .round($precio_venta_producto,2) . '/ - / Categoria:'.$nombre_categoria.'</span>
                    <span class = "text-sm"> '.' Stock: ' .$stock_producto.'</span>
                </div>
            </a>
            ';

            array_push($productData, $data);
        }

        return $productData;

    }

    /*===================================================================
    BUSCAR PRODUCTO POR SU CODIGO DE BARRAS
    ====================================================================*/
    static public function mdlGetDatosProducto($codigoProducto){

        $stmt = Conexion::conectar()->prepare("SELECT id, codigo_producto, c.id_categoria, c.nombre_categoria, descripcion_producto,
                                                    '0' as cantidad,
                                                    CASE
                                                        WHEN p.precio_plancha > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_plancha, 2), CHAR)) 
                                                        WHEN p.precio_unidad > 0 THEN CONCAT('S./ ', CONVERT(ROUND(p.precio_unidad, 2), CHAR))
                                                        WHEN p.precio_paquetito > 0 THEN CONCAT('S./ ', CONVERT(ROUND(p.precio_paquetito, 2), CHAR))
                                                        ELSE CONCAT('S./ ', CONVERT(ROUND(p.precio_ciento, 2), CHAR))
                                                    END as precio_venta,
                                                    CASE 
                                                        WHEN p.precio_plancha > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_plancha, 2), CHAR))
                                                        WHEN p.precio_unidad > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_unidad, 2), CHAR))
                                                        WHEN p.precio_paquetito > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_paquetito, 2), CHAR))
                                                        ELSE CONCAT('S./ ', CONVERT(ROUND(1* p.precio_ciento, 2), CHAR))
                                                    END as total,
                                                    '' as acciones,
                                                    c.aplica_peso,
                                                    p.precio_unidad,
                                                    p.precio_paquetito,
                                                    p.precio_ciento,
                                                    p.precio_docena,
                                                    p.precio_millar,
                                                    p.precio_caja,
                                                    p.precio_fardo,
                                                    p.precio_plancha,
                                                    p.precio_unidad_2,
                                                    p.precio_paquetito_2,
                                                    p.precio_ciento_2,
                                                    p.precio_docena_2,
                                                    p.precio_millar_2,
                                                    p.precio_caja_2,
                                                    p.precio_fardo_2,
                                                    p.precio_plancha_2,
                                                    p.cantidad_millar,
                                                    p.cantidad_docena,
                                                    p.cantidad_caja,
                                                    p.cantidad_fardo,
                                                    p.cantidad_plancha
                                                FROM productos p
                                                INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                                                WHERE codigo_producto = :codigoProducto
                                                    AND p.stock_producto > 0 ;");
        
        $stmt -> bindParam(":codigoProducto",$codigoProducto,PDO::PARAM_INT);
        
        $stmt -> execute();

        

        return $stmt->fetch(PDO::FETCH_OBJ);
    }


    /*===================================================================
    VERIFICA EL STOCK DEL PRODUCTO PARA AÑADIRLO O NO
    ====================================================================*/
    static public function mdlVerificaStockProducto($codigo_producto, $cantidad_a_comprar,$medida){

        $stmt = Conexion::conectar()->prepare('SELECT count(*) as existe FROM productos p
        WHERE p.codigo_producto = :codigo_producto
        AND p.stock_producto > (
        CASE 
            WHEN :medida = "Docenas" THEN :cantidad_a_comprar * 12
            WHEN :medida = "Millares" THEN :cantidad_a_comprar * p.cantidad_millar
            WHEN :medida = "Cajas"  THEN :cantidad_a_comprar * p.cantidad_caja
            WHEN :medida = "Fardos"  THEN :cantidad_a_comprar * p.cantidad_fardo
            ELSE :cantidad_a_comprar
        END
        );');
        
        $stmt -> bindParam(":codigo_producto",$codigo_producto,PDO::PARAM_INT);
        $stmt -> bindParam(":cantidad_a_comprar",$cantidad_a_comprar,PDO::PARAM_INT);
        $stmt -> bindParam(":medida",$medida,PDO::PARAM_STR);
        $stmt ->execute();

        
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS x CLIENTES PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function mdlListarNombreProductosxClientes($dni){

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                CONCAT(
                                                    codigo_producto, ' - ', c.nombre_categoria, ' - ', descripcion_producto, 
                                                    ' - S./ ',
                                                    CASE 
                                                        WHEN p.precio_unidad > 0 THEN p.precio_unidad
                                                        WHEN p.precio_paquetito > 0 THEN p.precio_paquetito
                                                        ELSE p.precio_ciento
                                                    END
                                                ) as descripcion_producto
                                            FROM productos p
                                            INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                                            INNER JOIN cliente_producto cp ON cp.id_cliente = :dni AND p.codigo_producto = cp.cod_producto;");

        $stmt -> bindParam(":dni",$dni,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    public function guardarImagen($folder, $ubicacionTemporal, $nuevoNombre)
    {
        file_put_contents(strtolower($folder . $nuevoNombre), file_get_contents($ubicacionTemporal));
    }

    static public function mdlListarProductos2(){
    
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductos2');
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlListarxCliente( $id_cliente){
    
        $stmt = Conexion::conectar()->prepare("SELECT
                                                '' as Opciones,
                                                ROW_NUMBER() OVER (ORDER BY p.codigo_producto) as Item, 
                                                p.codigo_producto,
                                                c.id_categoria,
                                                c.nombre_categoria,
                                                p.descripcion_producto,
                                                c.aplica_peso
                                            FROM productos p
                                            INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                                            INNER JOIN cliente_producto cp ON cp.id_cliente = :id_cliente AND p.codigo_producto = cp.cod_producto;");

        $stmt -> bindParam(":id_cliente",$id_cliente,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlListarProductos3(){
    
        $stmt = Conexion::conectar()->prepare('call prc_listarProductosxPrecios');
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlListarProductosxClientes($id_cliente){
    
        $stmt = Conexion::conectar()->prepare("CALL prc_listarProductosxPreciosxClientes (:id_cliente);");

        $stmt -> bindParam(":id_cliente",$id_cliente,PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }


    /*===================================================================
    BUSCAR PRODUCTO POR SU CODIGO DE BARRAS
    ====================================================================*/
    static public function mdlGetDatosProductoxCliente($codigo_producto, $dni) {
        $stmt = Conexion::conectar()->prepare("SELECT 
                                                    p.id, 
                                                    p.codigo_producto, 
                                                    c.id_categoria, 
                                                    c.nombre_categoria, 
                                                    p.descripcion_producto,
                                                    '1' as cantidad,
                                                    CASE
                                                        WHEN cp.precio_plancha > 0 THEN CONCAT('S./ ', CONVERT(ROUND(cp.precio_plancha, 2), CHAR)) 
                                                        WHEN cp.precio_unidad > 0 THEN CONCAT('S./ ', CONVERT(ROUND(cp.precio_unidad, 2), CHAR))
                                                        WHEN cp.precio_paquetito > 0 THEN CONCAT('S./ ', CONVERT(ROUND(cp.precio_paquetito, 2), CHAR))
                                                        ELSE CONCAT('S./ ', CONVERT(ROUND(cp.precio_ciento, 2), CHAR))
                                                    END as precio_venta,
                                                    CASE
                                                        WHEN cp.precio_plancha > 0 THEN CONCAT('S./ ', CONVERT(ROUND(cp.precio_unidad, 2), CHAR)) 
                                                        WHEN cp.precio_unidad > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1 * cp.precio_unidad, 2), CHAR))
                                                        WHEN cp.precio_paquetito > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1 * cp.precio_paquetito, 2), CHAR))
                                                        ELSE CONCAT('S./ ', CONVERT(ROUND(1 * cp.precio_ciento, 2), CHAR))
                                                    END as total,
                                                    '' as acciones,
                                                    c.aplica_peso,
                                                    cp.precio_unidad,
                                                    cp.precio_paquetito,
                                                    cp.precio_ciento,
                                                    cp.precio_docena,
                                                    cp.precio_millar,
                                                    cp.precio_caja,
                                                    cp.precio_fardo,
                                                    cp.precio_plancha
                                                FROM productos p
                                                INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                                                INNER JOIN cliente_producto cp ON cp.id_cliente = :dni AND cp.cod_producto = :codigoProducto 
                                                WHERE codigo_producto = :codigoProducto 
                                                    AND p.stock_producto > 0");
            
        $stmt->bindParam(":codigoProducto", $codigo_producto, PDO::PARAM_INT);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
            
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    static public function mdlVerificarProductoCliente($codigo_producto,$dni){
    
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `cliente_producto` WHERE id_cliente = :dni AND cod_producto = :codigoProducto");

        $stmt->bindParam(":codigoProducto", $codigo_producto, PDO::PARAM_INT);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
    
        $stmt->execute();
    
        $resultados = $stmt->fetchAll();

        if (empty($resultados)) {
            // Si no se encontraron resultados, devuelve "nuevo"
            return "nuevo";
        } else {
            // Si se encontraron resultados, devuelve "viejo"
            return "viejo";
        }
    }

    static public function mdlAñadirProductoCliente($codigo_producto,$dni){
    
        // Consulta para obtener los precios del producto
        // $stmtPrecio = Conexion::conectar()->prepare("SELECT `precio_paquetito`, `precio_unidad`, `precio_docena`, `precio_ciento`, `precio_millar`, `precio_caja`, `precio_fardo` FROM `productos` WHERE `codigo_producto` = :codigoProducto");
        // $stmtPrecio->bindParam(":codigoProducto", $codigo_producto, PDO::PARAM_STR);
        // $stmtPrecio->execute();
        // $precios = $stmtPrecio->fetch(PDO::FETCH_ASSOC);

        // Insertar los datos en la tabla cliente_producto
        $stmtInsert = Conexion::conectar()->prepare("INSERT INTO `cliente_producto`(`id`, `id_cliente`, `cod_producto`, `orden`, `precio_paquetito`, `precio_unidad`, `precio_docena`, `precio_ciento`, `precio_millar`, `precio_caja`, `precio_fardo`) 
                                                    VALUES ('', :dni, :codigoProducto, '0', '0', '0', '0', '0', '0', '0', '0')");

        $stmtInsert->bindParam(":dni", $dni, PDO::PARAM_STR);
        $stmtInsert->bindParam(":codigoProducto", $codigo_producto, PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_paquetito", $precios['precio_paquetito'], PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_unidad", $precios['precio_unidad'], PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_docena", $precios['precio_docena'], PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_ciento", $precios['precio_ciento'], PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_millar", $precios['precio_millar'], PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_caja", $precios['precio_caja'], PDO::PARAM_STR);
        // $stmtInsert->bindParam(":precio_fardo", $precios['precio_fardo'], PDO::PARAM_STR);

        if($stmtInsert->execute()){
            return "añadido";
        }else{
            return "error";
        }
    }

    static public function mdlCambiarPrecioCliente($codigo_producto,$dni,$opcion,$precio){
    
        switch ($opcion) {
            case 1:
                $campoPrecio = "precio_paquetito";
                break;
            case 2:
                $campoPrecio = "precio_unidad";
                break;
            case 3:
                $campoPrecio = "precio_docena";
                break;
            case 4:
                $campoPrecio = "precio_ciento";
                break;
            case 5:
                $campoPrecio = "precio_millar";
                break;
            case 6:
                $campoPrecio = "precio_caja";
                break;
            case 7:
                $campoPrecio = "precio_fardo";
                break;
            case 8:
                $campoPrecio = "precio_plancha";
                break;
            // Añade más casos según la lógica necesaria para cada opción
            // ...
            default:
                $campoPrecio = "precio_paquetito";
        }
        
        $stmtUpdate = Conexion::conectar()->prepare("UPDATE `cliente_producto` 
                                                    SET `{$campoPrecio}` = :precio 
                                                    WHERE `id_cliente` = :dni AND `cod_producto` = :codigoProducto");
        

        $stmtUpdate->bindParam(":codigoProducto", $codigo_producto, PDO::PARAM_STR);
        $stmtUpdate->bindParam(":dni", $dni, PDO::PARAM_STR);
        $stmtUpdate->bindParam(":precio", $precio, PDO::PARAM_STR);
    
        $stmtUpdate->execute();
    
    }

    static public function mdlDarDatosProducto($codigo_producto){
    
        $stmt = Conexion::conectar()->prepare("SELECT c.nombre_categoria, `id`, `codigo_producto`, `id_categoria_producto`, `descripcion_producto`, `precio_paquetito`, `precio_paquetito_2`, `precio_unidad`, `precio_unidad_2`, 
                                                    `precio_docena`, `precio_docena_2`, `precio_ciento`, `precio_ciento_2`, `precio_millar`, `precio_millar_2`, `precio_caja`, `precio_caja_2`, `precio_fardo`, `precio_fardo_2`, 
                                                    `precio_plancha`,`precio_plancha_2`, `cantidad_millar`, `cantidad_docena`, `cantidad_fardo`, `cantidad_caja`, `cantidad_plancha`, `precio_compra`, `utilidad`, `stock_producto`, `minimo_stock_producto`, 
                                                    `ventas_producto`, `fecha_creacion_producto`, `fecha_actualizacion_producto`, `imagen_producto`, `direccion` FROM `productos` INNER JOIN categorias c WHERE `codigo_producto` = :codigoProducto and 
                                                    c.id_categoria = `id_categoria_producto`;");

        $stmt->bindParam(":codigoProducto", $codigo_producto, PDO::PARAM_INT);
    
        $stmt->execute();
    
       return $stmt->fetchAll();

    }

    static public function mdlEditarProducto($codigo,$descripcion,$precio_unidad,$precio_paquete,$precio_docena,$precio_ciento,$precio_millar,$precio_caja,$precio_fardo,$precio_plancha,$precio_unidad_2,$precio_paquete_2,$precio_docena_2,$precio_ciento_2,$precio_millar_2,$precio_caja_2,$precio_fardo_2,$precio_plancha_2,$cantidad_ciento,$cantidad_millar,$cantidad_caja,$cantidad_fardo,$cantidad_plancha,$stock,$min_stock,$direccion,$id_categoria_producto){
    
        $stmt = Conexion::conectar()->prepare("UPDATE productos SET   
                                                                        id_categoria_producto=:id_categoria_producto,
                                                                        descripcion_producto=:descripcion ,

                                                                        precio_paquetito=:precio_paquete ,
                                                                        precio_unidad=:precio_unidad ,
                                                                        precio_docena=:precio_docena ,
                                                                        precio_ciento=:precio_ciento ,
                                                                        precio_millar=:precio_millar ,
                                                                        precio_caja=:precio_caja ,
                                                                        precio_fardo=:precio_fardo ,
                                                                        precio_plancha=:precio_plancha ,

                                                                        precio_paquetito_2=:precio_paquete_2 ,
                                                                        precio_unidad_2=:precio_unidad_2 ,
                                                                        precio_docena_2=:precio_docena_2 ,
                                                                        precio_ciento_2=:precio_ciento_2 ,
                                                                        precio_millar_2=:precio_millar_2 ,
                                                                        precio_caja_2=:precio_caja_2 ,
                                                                        precio_fardo_2=:precio_fardo_2 ,
                                                                        precio_plancha_2=:precio_plancha_2 ,
                                                                        
                                                                        cantidad_ciento=:cantidad_ciento ,
                                                                        cantidad_millar=:cantidad_millar ,
                                                                        cantidad_caja=:cantidad_caja ,
                                                                        cantidad_fardo=:cantidad_fardo ,
                                                                        cantidad_plancha=:cantidad_plancha ,

                                                                        stock_producto=:stock ,
                                                                        minimo_stock_producto=:min_stock ,
                                                                        direccion=:direccion 
                                                                        WHERE codigo_producto=:codigo ");

        $stmt->bindParam(":codigo", $codigo, PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);

        $stmt->bindParam(":precio_unidad", $precio_unidad, PDO::PARAM_STR);
        $stmt->bindParam(":precio_paquete", $precio_paquete, PDO::PARAM_STR);
        $stmt->bindParam(":precio_docena", $precio_docena, PDO::PARAM_STR);
        $stmt->bindParam(":precio_ciento", $precio_ciento, PDO::PARAM_STR);
        $stmt->bindParam(":precio_millar", $precio_millar, PDO::PARAM_STR);
        $stmt->bindParam(":precio_caja", $precio_caja, PDO::PARAM_STR);
        $stmt->bindParam(":precio_fardo", $precio_fardo, PDO::PARAM_STR);
        $stmt->bindParam(":precio_plancha", $precio_plancha, PDO::PARAM_STR);

        $stmt->bindParam(":precio_unidad_2", $precio_unidad_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_paquete_2", $precio_paquete_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_docena_2", $precio_docena_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_ciento_2", $precio_ciento_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_millar_2", $precio_millar_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_caja_2", $precio_caja_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_fardo_2", $precio_fardo_2, PDO::PARAM_STR);
        $stmt->bindParam(":precio_plancha_2", $precio_plancha_2, PDO::PARAM_STR);
        
        $stmt->bindParam(":cantidad_ciento", $cantidad_ciento, PDO::PARAM_STR);
        $stmt->bindParam(":cantidad_millar", $cantidad_millar, PDO::PARAM_STR);
        $stmt->bindParam(":cantidad_caja", $cantidad_caja, PDO::PARAM_STR);
        $stmt->bindParam(":cantidad_fardo", $cantidad_fardo, PDO::PARAM_STR);
        $stmt->bindParam(":cantidad_plancha", $cantidad_plancha, PDO::PARAM_STR);

        $stmt->bindParam(":stock", $stock, PDO::PARAM_STR);
        $stmt->bindParam(":min_stock", $min_stock, PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $direccion, PDO::PARAM_STR);
        $stmt->bindParam(":id_categoria_producto", $id_categoria_producto, PDO::PARAM_STR);
    
        if($stmt->execute()){
            return "OK";
        }else{
            return "ERROR";
        }

    }

    static public function mdlListarNombreProductosClientes($id_cliente){

        $stmt = Conexion::conectar()->prepare(" SELECT 
                                                    p.codigo_producto,
                                                    cp.id_cliente, 
                                                    c.nombre_categoria, 
                                                    p.descripcion_producto, 
                                                    (
                                                        CASE 
                                                            WHEN cp.precio_unidad > 0 THEN cp.precio_unidad
                                                            WHEN cp.precio_paquetito > 0 THEN cp.precio_paquetito
                                                            WHEN cp.precio_docena > 0 THEN cp.precio_docena
                                                            WHEN cp.precio_ciento > 0 THEN cp.precio_ciento
                                                            WHEN cp.precio_millar > 0 THEN cp.precio_millar
                                                            WHEN cp.precio_caja > 0 THEN cp.precio_caja
                                                            WHEN cp.precio_fardo > 0 THEN cp.precio_fardo
                                                            ELSE -1
                                                        END
                                                    ) as precio_venta_producto,
                                                    p.stock_producto,
                                                    p.imagen_producto
                                                FROM productos p
                                                INNER JOIN cliente_producto cp ON cp.cod_producto = p.codigo_producto 
                                                INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                                                WHERE cp.id_cliente = :id_cliente
                                                AND (
                                                    CASE 
                                                        WHEN cp.precio_unidad > 0 THEN cp.precio_unidad
                                                        WHEN cp.precio_paquetito > 0 THEN cp.precio_paquetito
                                                        WHEN cp.precio_docena > 0 THEN cp.precio_docena
                                                        WHEN cp.precio_ciento > 0 THEN cp.precio_ciento
                                                        WHEN cp.precio_millar > 0 THEN cp.precio_millar
                                                        WHEN cp.precio_caja > 0 THEN cp.precio_caja
                                                        WHEN cp.precio_fardo > 0 THEN cp.precio_fardo
                                                        ELSE -1
                                                    END
                                                ) > 0;");

        $stmt->bindParam(":id_cliente", $id_cliente, PDO::PARAM_STR);
        $stmt -> execute();

        $productosxcliente = $stmt->fetchAll();

        $productData = array();

        foreach($productosxcliente as $producto) {
            $codigo_producto = $producto["codigo_producto"];
            $nombre_categoria = $producto["nombre_categoria"];
            $descripcion_producto = $producto["descripcion_producto"];
            $precio_venta_producto = $producto["precio_venta_producto"];
            $stock_producto = $producto["stock_producto"];
            $id_cliente = $producto["id_cliente"];
        
            $data["id"] = $producto["codigo_producto"];
            $data["value"] = $codigo_producto.'/'.$id_cliente.'/'.$nombre_categoria.' - '. $descripcion_producto.' - '. $precio_venta_producto.' - '. $stock_producto;
            $data["label"] = '
                <a href="javascript:void(0);" class="d-flex" style="width:100% !important; ">
                    <img src="http://192.168.1.41/market-pos/vistas/assets/imagenes/productos/'.$producto['imagen_producto'].'" width="70" height="70" />
                    <div class="d-flex ml-4 flex-column">
                        <span class="text-sm"> Codigo: <span style="color: green;">' .$codigo_producto .'</span>/ - / Producto: <span style="color: green;"><strong>'.$descripcion_producto.'</strong></span></span>
                        <span class="text-sm"> Precio: <span style="color: green;">' .round($precio_venta_producto, 2) .'</span>/ - / Categoria:<span style="color: green;">'.$nombre_categoria.'</span></span>
                        <span class="text-sm"> Stock: <span style="color: green;">' .$stock_producto .'</span></span>
                    </div>
                </a>
            ';
        
            array_push($productData, $data);
        }
        

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                     p.codigo_producto, 
                                                     c.nombre_categoria, 
                                                     p.descripcion_producto, 
                                                     (CASE 
                                                         WHEN p.precio_unidad > 0 THEN p.precio_unidad
                                                         WHEN p.precio_paquetito > 0 THEN p.precio_paquetito
                                                         ELSE p.precio_ciento
                                                     END)as precio_venta_producto,
                                                     p.stock_producto,
                                                     p.imagen_producto
                                        
                                             FROM productos p

                                             INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria");

        $stmt -> execute();

        $productos = $stmt->fetchAll();


        foreach($productos as $producto){
            $codigo_producto = $producto["codigo_producto"];
            $nombre_categoria = $producto["nombre_categoria"];
            $descripcion_producto = $producto["descripcion_producto"];
            $precio_venta_producto = $producto["precio_venta_producto"];
            $stock_producto = $producto["stock_producto"];

            $data["id"] = $producto["codigo_producto"];
            $data["value"] = $codigo_producto.'//'.$nombre_categoria.' - '. $descripcion_producto.' - '. $precio_venta_producto.' - '. $stock_producto;
            $data["label"] = '
            <a href = "javascript:void(0);" class = "d-flex" style = "width:100% !important; ">
                <img src= "http://localhost/market-pos/vistas/assets/imagenes/productos/'.$producto['imagen_producto'].'"width = "70" height = "70" />
                <div class = "d-flex ml-4 flex-column">
                    <span class = "text-sm"> Codigo: ' .$codigo_producto .'/ - / Producto: <strong>'. $descripcion_producto . '</strong></span>
                    <span class = "text-sm"> Precio: ' .round($precio_venta_producto,2) . '/ - / Categoria:'.$nombre_categoria.'</span>
                    <span class = "text-sm"> '.' Stock: ' .$stock_producto.'</span>
                </div>
            </a>
            ';

            array_push($productData, $data);
        }

        return $productData;

    }

    static public function mdlGetDatosProductoCliente($codigo_producto, $id_cliente) {
        $conn = Conexion::conectar();
        
        // Define the common query part
        $query = "SELECT p.id, p.codigo_producto, c.id_categoria, c.nombre_categoria, p.descripcion_producto,
                         '1' as cantidad,
                         CASE
                             WHEN COALESCE(cp.precio_plancha, p.precio_plancha) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_plancha, p.precio_plancha), 2), CHAR))
                             WHEN COALESCE(cp.precio_unidad, p.precio_unidad) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_unidad, p.precio_unidad), 2), CHAR))
                             WHEN COALESCE(cp.precio_paquetito, p.precio_paquetito) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_paquetito, p.precio_paquetito), 2), CHAR))
                             WHEN COALESCE(cp.precio_docena, p.precio_docena) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_docena, p.precio_docena), 2), CHAR))
                             WHEN COALESCE(cp.precio_ciento, p.precio_ciento) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_ciento, p.precio_ciento), 2), CHAR))
                             WHEN COALESCE(cp.precio_millar, p.precio_millar) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_millar, p.precio_millar), 2), CHAR))
                             WHEN COALESCE(cp.precio_caja, p.precio_caja) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_caja, p.precio_caja), 2), CHAR))
                             WHEN COALESCE(cp.precio_fardo, p.precio_fardo) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_fardo, p.precio_fardo), 2), CHAR))
                             ELSE CONCAT('S./ ', CONVERT(ROUND(p.precio_ciento, 2), CHAR))
                         END as precio_venta,
                         CASE
                             WHEN COALESCE(cp.precio_plancha, p.precio_plancha) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_plancha, p.precio_plancha), 2), CHAR))
                             WHEN COALESCE(cp.precio_unidad, p.precio_unidad) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_unidad, p.precio_unidad), 2), CHAR))
                             WHEN COALESCE(cp.precio_paquetito, p.precio_paquetito) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_paquetito, p.precio_paquetito), 2), CHAR))
                             WHEN COALESCE(cp.precio_docena, p.precio_docena) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_docena, p.precio_docena), 2), CHAR))
                             WHEN COALESCE(cp.precio_ciento, p.precio_ciento) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_ciento, p.precio_ciento), 2), CHAR))
                             WHEN COALESCE(cp.precio_millar, p.precio_millar) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_millar, p.precio_millar), 2), CHAR))
                             WHEN COALESCE(cp.precio_caja, p.precio_caja) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_caja, p.precio_caja), 2), CHAR))
                             WHEN COALESCE(cp.precio_fardo, p.precio_fardo) > 0 THEN CONCAT('S./ ', CONVERT(ROUND(COALESCE(cp.precio_fardo, p.precio_fardo), 2), CHAR))
                             ELSE CONCAT('S./ ', CONVERT(ROUND(p.precio_ciento, 2), CHAR))
                         END as total,
                         '' as acciones,
                         c.aplica_peso,
                         CASE
                             WHEN cp.precio_unidad > 0 THEN cp.precio_unidad
                             ELSE p.precio_unidad
                         END as precio_unidad,
 
                         CASE
                             WHEN cp.precio_paquetito > 0 THEN cp.precio_paquetito
                             ELSE p.precio_paquetito
                         END as precio_paquetito,
 
                         CASE
                             WHEN cp.precio_docena > 0 THEN cp.precio_docena
                             ELSE p.precio_docena
                         END as precio_docena,
 
                         CASE
                             WHEN cp.precio_ciento > 0 THEN cp.precio_ciento
                             ELSE p.precio_ciento
                         END as precio_ciento,
 
                         CASE
                             WHEN cp.precio_millar > 0 THEN cp.precio_millar
                             ELSE p.precio_millar
                         END as precio_millar,
 
                         CASE
                             WHEN cp.precio_caja > 0 THEN cp.precio_caja
                             ELSE p.precio_caja
                         END as precio_caja,
 
                         CASE
                             WHEN cp.precio_fardo > 0 THEN cp.precio_fardo
                             ELSE p.precio_fardo
                         END as precio_fardo,
 
                         CASE
                             WHEN cp.precio_plancha > 0 THEN cp.precio_plancha
                             ELSE p.precio_plancha
                         END as precio_plancha,
                         p.precio_unidad_2,
                         p.precio_paquetito_2,
                         p.precio_ciento_2,
                         p.precio_docena_2,
                         p.precio_millar_2,
                         p.precio_caja_2,
                         p.precio_fardo_2,
                         p.precio_plancha_2,
                         p.cantidad_millar,
                         p.cantidad_docena,
                         p.cantidad_caja,
                         p.cantidad_fardo,
                         p.cantidad_plancha
                  FROM productos p
                  INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                  LEFT JOIN cliente_producto cp ON p.codigo_producto = cp.cod_producto AND cp.id_cliente = :id_cliente
                  WHERE p.codigo_producto = :codigo_producto
                  AND p.stock_producto > 0;";
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":codigo_producto", $codigo_producto, PDO::PARAM_INT);
        
        if ($id_cliente !== "VARIOS" && $id_cliente != 0) {
            $stmt->bindParam(":id_cliente", $id_cliente, PDO::PARAM_STR);
        }
    
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    

    static public function mdlRegistrarProductoSinImagen($table, $data, $id, $nameId){        

                $set = "";
                $set2 = "";

                $set .= $nameId.",";
                $set2 .= ":".$nameId.",";

                foreach ($data as $key => $value) {
                    
                    $set .= $key.",";
                    $set2 .= ":".$key.",";
                        
                }
                
                $set = substr($set, 0, -1);
                $set2 = substr($set2, 0, -1);
                
                
                //var_dump($set);
        
                $stmt = Conexion::conectar()->prepare("INSERT INTO $table ($set) values ($set2);");
        
                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		
        
                $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);
        
                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    return "ok";
        
                }else{
        
                    return Conexion::conectar()->errorInfo();
                
                }

    }

    static public function mdlActualizarInformacionSinImagen($table, $data, $id, $nameId){

        $nombre = $data["descripcion_producto"];


        $stmt = Conexion::conectar()->prepare(" UPDATE productos_botones pb
                                                INNER JOIN productos p ON pb.producto = p.descripcion_producto
                                                SET pb.producto = :nombre
                                                WHERE p.codigo_producto = :codigo;");

        $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $stmt -> bindParam(":codigo",$id,PDO::PARAM_INT);

        // var_dump($stmt, $nombre , $id);

        if($stmt->execute()){

             $stmt = Conexion::conectar()->prepare("UPDATE populares pb
                                                    INNER JOIN productos p ON pb.producto_popular = p.descripcion_producto
                                                    SET pb.producto_popular = :nombre
                                                    WHERE p.codigo_producto = :codigo;");

            $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $stmt -> bindParam(":codigo",$id,PDO::PARAM_INT);

            if($stmt->execute()){    
                
                $set = "";

                foreach ($data as $key => $value) {
                    
                    $set .= $key." = :".$key.",";
                        
                }

                $set = substr($set, 0, -1);

                //var_dump($set);

                $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		

                $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

                if($stmt->execute()){

                    return "ok";

                }else{

                    return Conexion::conectar()->errorInfo();
                
                }
    
            }else{
    
                return Conexion::conectar()->errorInfo();
            }

            

            

        }else{

            return Conexion::conectar()->errorInfo();
        }

        
        
    }

    static public function mdlCodigoRepetido($codigo){

        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM `productos` WHERE `codigo_producto` = :codigoProducto ;");
    
        $stmt->bindParam(":codigoProducto", $codigo, PDO::PARAM_INT);
    
        $stmt->execute();
    
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Verificar si el código está repetido
        if ($resultado['total'] > 0) {
            return "repetido";
        } else {
            return "no_repetido";
        }
    }

    static public function mdlDarPrecio($codigo){
        
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM `productos` WHERE `codigo_producto` = :codigoProducto ;");
    
        $stmt->bindParam(":codigoProducto", $codigo, PDO::PARAM_INT);
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlConteoProductos(){
        
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM `productos` WHERE 1");
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlListarPreciosCantidades(){
    
        $stmt = Conexion::conectar()->prepare("SELECT `id_cantidada_tablas`, `Cantidades`, `Precio`,Min, `Cantidad` FROM `tabla_cantidades` WHERE 1 ORDER BY id_cantidada_tablas ASC LIMIT 300");
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlRegistrarProductoNuevo($table, $data, $id, $nameId,$imagen){        

                $set = "";
                $set2 = "";

                $set .= $nameId.",";
                $set2 .= ":".$nameId.",";

                foreach ($data as $key => $value) {
                    
                    $set .= $key.",";
                    $set2 .= ":".$key.",";
                        
                }
                
                $set = substr($set, 0, -1);
                $set2 = substr($set2, 0, -1);
                
                
                //var_dump($set);
        
                $stmt = Conexion::conectar()->prepare("INSERT INTO $table ($set) values ($set2);");
        
                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		
        
                $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);
        
                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    if ($imagen) {
                        $guardarImagen = new ProductosModelo();
                        $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);
                        
                    }
                    return "ok";
        
                }else{
        
                    return Conexion::conectar()->errorInfo();
                
                }

    }

    static public function mdlRegistrarProductoNuevoSinImagen($table, $data, $id, $nameId){        

                $set = "";
                $set2 = "";

                $set .= $nameId.",";
                $set2 .= ":".$nameId.",";

                foreach ($data as $key => $value) {
                    
                    $set .= $key.",";
                    $set2 .= ":".$key.",";
                        
                }
                
                $set = substr($set, 0, -1);
                $set2 = substr($set2, 0, -1);
                
                
                //var_dump($set);
        
                $stmt = Conexion::conectar()->prepare("INSERT INTO $table ($set) values ($set2);");
        
                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		
        
                $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);
        
                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    return "ok";
        
                }else{
        
                    return Conexion::conectar()->errorInfo();
                
                }

    }

    static public function mdlActualizarProductoNuevo($table, $data, $id, $nameId,$imagen){        

                $set = "";

                foreach ($data as $key => $value) {
                    
                    $set .= $key."= :".$key.",";
                        
                }
                
                $set = substr($set, 0, -1);
        
                $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE `codigo_producto` = :codigo_producto ;");
        
                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		
        
                $stmt->bindParam(":codigo_producto", $id, PDO::PARAM_STR);
        
                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    if ($imagen) {
                        $guardarImagen = new ProductosModelo();
                        $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);
                        
                    }
                    return "ok";
        
                }else{
        
                    return Conexion::conectar()->errorInfo();
                
                }

    }

    static public function mdlActualizarProductoNuevoSinImagen($table, $data, $id, $nameId){        

                $set = "";

                foreach ($data as $key => $value) {
                    
                    $set .= $key."= :".$key.",";
                        
                }
                
                $set = substr($set, 0, -1);
        
                $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE `codigo_producto` = :codigo_producto ;");
        
                foreach ($data as $key => $value) {
                    
                    $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
                    
                }		
        
                $stmt->bindParam(":codigo_producto", $id, PDO::PARAM_STR);

        
                if($stmt->execute()){

                    //GUARDAMOS LA IMAGEN EN LA CARPETA
                    return "ok";
        
                }else{
        
                    return Conexion::conectar()->errorInfo();
                
                }

    }

    static public function mdlListarPreciosCompletosCantidades($codigo_producto){
    
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `productos` WHERE codigo_producto = :codigo_producto");

        $stmt -> bindParam(":codigo_producto",$codigo_producto,PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }
}