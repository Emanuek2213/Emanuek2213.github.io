<?php

require_once "conexion.php";

class ProductosVentaRapidaModelo{

    /*static public function mdlGetDatosDashboard(){

        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

       
    }*/

    static public function mdlTablaVentaRapida(){

        $stmt = Conexion::conectar()->prepare('call prc_InventarioVentaRapida()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlProductosVentaRapida(){
    
        $stmt = Conexion::conectar()->prepare('call prc_CategoriasMasVendidas()');
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlBuscarProductos($codigo){

        $stmt = Conexion::conectar()->prepare('call prc_ProductosVentaRapida()');
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlTablaModal($num_categoria){

        $stmt = Conexion::conectar()->prepare(' SELECT 	p.codigo_producto,
                                                        p.id_categoria_producto as id_categoria,
                                                        c.nombre_categoria as categoria,
                                                        p.descripcion_producto,
                                                        p.stock_producto as cantidad, 						
                                                        SUM(Round(vd.total_venta,2)) as total_venta,
                                                        c.aplica_peso
                                                FROM venta_detalle vd inner join productos p on vd.codigo_producto = p.codigo_producto and p.id_categoria_producto = :num_categoria
                                                INNER JOIN categorias c on c.id_categoria = :num_categoria
                                                group by p.codigo_producto, p.descripcion_producto
                                                order by sum(Round(vd.total_venta,2)) DESC
                                                LIMIT 5; ');
        
        $stmt -> bindParam(":num_categoria", $num_categoria , PDO::PARAM_INT);

        
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    /*static public function mdlProductosPocoStock(){
    
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosPocoStock');
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }*/

    static public function mdlObtenerDetalleVenta($nro_boleta){

        try {
            
            $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                        vc.total_venta,
                                                        vc.fecha_venta,
                                                        vd.codigo_producto,
                                                        upper(p.descripcion_producto) as descripcion_producto,
                                                        vd.cantidad,
                                                        (vd.total_venta/vd.cantidad) as precio_unitario_venta,
                                                        vd.total_venta
                                                from venta_cabecera vc inner join venta_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                        inner join productos p on p.codigo_producto = vd.codigo_producto
                                                where vc.nro_boleta =  :nro_boleta");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }

    }

    static public function mdlMostrarIcono(){

            $stmt = Conexion::conectar()->prepare ("SELECT `id_icono`, `nombre_icono`, `codigo_icono` FROM `iconos` WHERE 1
                                                    order by `id_icono`");

            $stmt -> execute();

            return $stmt->fetchAll();

    }

    static public function mdlListarCategorias(){

            $stmt = Conexion::conectar()->prepare ("SELECT '',cb.id_catalogo, cb.nombre, cb.descripcion,
                                                    (SELECT COUNT(*) FROM productos_botones pb WHERE pb.id_catologo = cb.id_catalogo) as Productos
                                                    ,'', c.codigo_color, i.codigo_icono,c.nombre_color,i.nombre_icono,cb.orden
                                                    FROM catalogo_botones cb INNER JOIN colores c INNER JOIN iconos i  
                                                    WHERE c.id_color = cb.id_color and i.id_icono = cb.id_icono order by `id_catalogo`;");

            $stmt -> execute();

            return $stmt->fetchAll();

    }

    static public function mdlListarBotones(){

        $stmt = Conexion::conectar()->prepare ("SELECT '', pb.id_boton, pb.nombre, pb.producto, cb.nombre,'',c.codigo_color, i.codigo_icono, pb.id_catologo 
                                                FROM productos_botones pb 
                                                INNER JOIN catalogo_botones cb ON cb.id_catalogo = pb.id_catologo
                                                INNER JOIN iconos i ON i.id_icono = cb.id_icono
                                                INNER JOIN colores c ON c.id_color = cb.id_color
                                                ORDER BY pb.Orden;");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlListarBotonesPopulares(){

        $stmt = Conexion::conectar()->prepare ("SELECT '', pb.id_popular, pb.nombre_popular, pb.producto_popular, 'Populares' ,'',c.codigo_color, i.codigo_icono, ''
                                                FROM populares pb 
                                                INNER JOIN iconos i ON i.id_icono = 1
                                                INNER JOIN colores c ON c.id_color = 2
                                                ORDER BY pb.Orden;");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlMostrarColor(){

        $stmt = Conexion::conectar()->prepare ("SELECT `id_color`, `nombre_color`, `codigo_color` FROM `colores` WHERE 1
                                                order by `id_color`");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlAgregarCatalogo($icono, $color){

        $stmt = Conexion::conectar()->prepare ("SELECT i.id_icono, c.id_color FROM iconos i INNER JOIN colores c WHERE i.nombre_icono =:icono AND c.nombre_color= :color");

        $stmt -> bindParam(":icono",$icono,PDO::PARAM_STR);
        $stmt -> bindParam(":color",$color,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlAgregarCatalogo_p2($id_color, $id_icono, $nombre, $descripcion){
        try {
            // Consulta para obtener el valor de contador
            $stmt2 = Conexion::conectar()->prepare("SELECT COUNT(*) as total_filas FROM catalogo_botones");
            $stmt2->execute();
            
            // Obtenemos el número total de filas
            $totalFilas = $stmt2->fetch(PDO::FETCH_ASSOC)['total_filas'];
        
            // Valor de orden es el número de filas + 1
            $orden = $totalFilas + 1;
        
            // Preparamos la consulta de inserción
            $stmt = Conexion::conectar()->prepare("INSERT INTO `catalogo_botones` (`id_catalogo`, `nombre`, `descripcion`, `id_color`, `id_icono`, `orden`) 
                                                    VALUES (:contador, :nombre, :descripcion, :id_color, :id_icono, :orden)");
            
            // Enlazamos los parámetros
            $stmt->bindParam(":contador", $orden, PDO::PARAM_INT);
            $stmt->bindParam(":id_color", $id_color, PDO::PARAM_STR);
            $stmt->bindParam(":id_icono", $id_icono, PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(":orden", $orden, PDO::PARAM_INT);
            
            // Ejecutamos la consulta de inserción
            if($stmt->execute()){
                return "ok";
            } else {
                return "Hubo un problema con los datos";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static public function mdlAgregarBoton($icono, $color, $padre) {

        $stmt = Conexion::conectar()->prepare("SELECT i.id_icono, c.id_color, cb.id_catalogo 
                                                FROM iconos i 
                                                INNER JOIN colores c 
                                                INNER JOIN catalogo_botones cb 
                                                WHERE i.nombre_icono = :icono AND c.nombre_color = :color AND cb.nombre = :padre");
    
        $stmt->bindParam(":icono", $icono, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":padre", $padre, PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdlAgregarBoton_p2($id_color, $id_icono, $nombre, $descripcion, $id_padre) {

        // Verificar si ya existe un producto con el mismo id_padre, descripcion o nombre
        $stmt_check = Conexion::conectar()->prepare("SELECT COUNT(*) AS cantidad FROM productos_botones WHERE id_catologo = :id_padre AND (nombre = :nombre OR producto = :descripcion)");
        $stmt_check->bindParam(":id_padre", $id_padre, PDO::PARAM_INT);
        $stmt_check->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt_check->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        $stmt_check->execute();
        $result = $stmt_check->fetch(PDO::FETCH_ASSOC);
    
        if ($result['cantidad'] > 0) {
            // Ya existe un producto con el mismo id_padre, descripcion o nombre
            return "ok";
        } else {
            // Contar cuántos botones existen con el mismo id_catologo
            $stmt_count = Conexion::conectar()->prepare("SELECT COUNT(*) AS cantidad FROM productos_botones WHERE id_catologo = :id_padre");
            $stmt_count->bindParam(":id_padre", $id_padre, PDO::PARAM_INT);
            $stmt_count->execute();
            $cantidad_botones = $stmt_count->fetch(PDO::FETCH_ASSOC)['cantidad'] + 1; 

            if($cantidad_botones < 10){

                // Preparamos la consulta de inserción
            $stmt_insert = Conexion::conectar()->prepare("INSERT INTO `productos_botones` (`nombre`, `producto`, `id_color`, `id_icono`, `id_catologo`, `Orden`) 
                                                        VALUES (:nombre, :descripcion, :id_color, :id_icono, :id_padre, CONCAT(:id_padre,0,:cantidad))");
        
            // Enlazamos los parámetros  
            $stmt_insert->bindParam(":id_color", $id_color, PDO::PARAM_STR);
            $stmt_insert->bindParam(":id_icono", $id_icono, PDO::PARAM_STR);
            $stmt_insert->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt_insert->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $stmt_insert->bindParam(":id_padre", $id_padre, PDO::PARAM_STR);
            $stmt_insert->bindParam(":cantidad", $cantidad_botones, PDO::PARAM_INT);
        
            // Ejecutamos la consulta de inserción
            if ($stmt_insert->execute()) {
                return "ok";
            } else {
                return "Hubo un problema con los datos.";
            }

            }else{

                // Preparamos la consulta de inserción
            $stmt_insert = Conexion::conectar()->prepare("INSERT INTO `productos_botones` (`nombre`, `producto`, `id_color`, `id_icono`, `id_catologo`, `Orden`) 
                                                        VALUES (:nombre, :descripcion, :id_color, :id_icono, :id_padre, CONCAT(:id_padre, :cantidad))");
        
            // Enlazamos los parámetros  
            $stmt_insert->bindParam(":id_color", $id_color, PDO::PARAM_STR);
            $stmt_insert->bindParam(":id_icono", $id_icono, PDO::PARAM_STR);
            $stmt_insert->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt_insert->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $stmt_insert->bindParam(":id_padre", $id_padre, PDO::PARAM_STR);
            $stmt_insert->bindParam(":cantidad", $cantidad_botones, PDO::PARAM_INT);
        
            // Ejecutamos la consulta de inserción
            if ($stmt_insert->execute()) {
                return "ok";
            } else {
                return "Hubo un problema con los datos.";
            }
                
            }
        
            
        }
    }

    static public function mdlAgregarBotonPopular($icono, $color) {

        $stmt = Conexion::conectar()->prepare("SELECT i.id_icono, c.id_color
                                                FROM iconos i 
                                                INNER JOIN colores c 
                                                WHERE i.nombre_icono = :icono AND c.nombre_color = :color");
    
        $stmt->bindParam(":icono", $icono, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdlAgregarBotonPopular_p2($id_color, $id_icono, $nombre, $descripcion) {


        // Contar cuántos botones existen con el mismo id_catologo
        $stmt_count = Conexion::conectar()->prepare("SELECT COUNT(*) AS cantidad FROM populares WHERE 1");
        $stmt_count->execute();
        $cantidad_botones = $stmt_count->fetch(PDO::FETCH_ASSOC)['cantidad'] + 1; 



            // Preparamos la consulta de inserción
            $stmt_insert = Conexion::conectar()->prepare("INSERT INTO `populares`(`id_popular`, `nombre_popular`, `producto_popular`, `id_color`, `id_icono`, `Orden`) 
                                                        VALUES (:cantidad, :nombre, :descripcion, :id_color, :id_icono, :cantidad)");
        
            // Enlazamos los parámetros  
            $stmt_insert->bindParam(":id_color", $id_color, PDO::PARAM_STR);
            $stmt_insert->bindParam(":id_icono", $id_icono, PDO::PARAM_STR);
            $stmt_insert->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt_insert->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $stmt_insert->bindParam(":cantidad", $cantidad_botones, PDO::PARAM_INT);
        
            // Ejecutamos la consulta de inserción
            if ($stmt_insert->execute()) {
                return "ok";
            } else {
                return "Hubo un problema con los datos.";
            }
            
        
            
        
    }
    

    static public function mdlProductosNombre(){


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
            $data["value"] = $descripcion_producto;
            $data["label"] = '
            <a href = "javascript:void(0);" class = "d-flex" style = "width:100% !important; ">
                <img src= "http://localhost/market-pos/vistas/assets/imagenes/productos/'.$producto['imagen_producto'].'"width = "70" height = "70" />
                <div class = "d-flex ml-4 flex-column">
                    <span class = "text-sm"> Codigo: ' .$codigo_producto .'</span>
                    <span class = "text-sm"> Producto: <strong>'. $descripcion_producto . '</strong></span>
                    <span class = "text-sm"> '.' Categoria:'.$nombre_categoria.'</span>
                </div>
            </a>
            ';

            array_push($productData, $data);
        }

        return $productData;

    }

    static public function mdlListaBotonesCatalogo(){

        $stmt = Conexion::conectar()->prepare("SELECT cb.id_catalogo, cb.nombre, cb.descripcion, i.codigo_icono, c.codigo_color, cb.orden
                                                FROM catalogo_botones cb 
                                                INNER JOIN iconos i ON cb.id_icono = i.id_icono 
                                                INNER JOIN colores c ON cb.id_color = c.id_color 
                                                ORDER BY cb.orden 
                                                LIMIT 40;");

        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdlListaBotonesProductos($id_catologo){

        $stmt = Conexion::conectar()->prepare("SELECT pb.id_boton, pb.nombre, pb.producto, i.codigo_icono , c.codigo_color, pb.id_catologo, cb.nombre 
                                                FROM productos_botones pb 
                                                INNER JOIN iconos i 
                                                INNER JOIN colores c 
                                                INNER JOIN catalogo_botones cb 
                                                WHERE c.id_color= pb.id_color AND i.id_icono = pb.id_icono AND cb.id_catalogo = pb.id_catologo AND pb.id_catologo =:id_catologo ORDER BY pb.Orden LIMIT 100;");

        $stmt->bindParam(":id_catologo", $id_catologo, PDO::PARAM_STR);

        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdlDarCodigoProducto($boton){

        $stmt = Conexion::conectar()->prepare("SELECT  pb.nombre, p.codigo_producto FROM productos_botones pb INNER JOIN productos p 
                                                WHERE p.descripcion_producto = pb.producto and pb.id_boton= :boton ;");

        $stmt->bindParam(":boton", $boton, PDO::PARAM_STR);

        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdlVerificaStockProducto($codigo_producto,$palabra,$numero){

        $stmt = Conexion::conectar()->prepare("SELECT count(*) as existe FROM productos p
        WHERE p.codigo_producto = :codigo_producto
        AND p.stock_producto > (
        CASE 
            WHEN :palabra = 'Unidades' THEN :numero
            WHEN :palabra = 'Paquetitos' THEN :numero
            WHEN :palabra = 'Docenas' THEN :numero * 12
            WHEN :palabra = 'Cientos' THEN :numero
            WHEN :palabra = 'Millares' THEN :numero * p.cantidad_millar
            WHEN :palabra = 'Cajas' THEN :numero * p.cantidad_caja
            WHEN :palabra = 'Fardos' THEN :numero * p.cantidad_fardo
            ELSE :numero
        END
        );");
        
        $stmt -> bindParam(":codigo_producto",$codigo_producto,PDO::PARAM_INT);
        $stmt -> bindParam(":palabra",$palabra,PDO::PARAM_INT);
        $stmt -> bindParam(":numero",$numero,PDO::PARAM_STR);
        $stmt ->execute();

        
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    static public function mdlEliminarCatalogo($numero,$orden){

        $stmt = Conexion::conectar()->prepare("DELETE FROM `catalogo_botones` WHERE `id_catalogo` = :numero");
        $stmt -> bindParam(":numero",$numero,PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare("DELETE FROM `productos_botones` WHERE `id_catologo` = :numero");
            $stmt -> bindParam(":numero",$numero,PDO::PARAM_STR);

            if($stmt -> execute()){
                // Actualizar los números de fila restantes
                $stmt = Conexion::conectar()->prepare("UPDATE `catalogo_botones` SET `id_catalogo` = `id_catalogo` - 1 WHERE `id_catalogo` > :numero");
                $stmt->bindParam(":numero", $numero, PDO::PARAM_INT);


                if($stmt -> execute()){
                    $stmt = Conexion::conectar()->prepare("UPDATE `productos_botones` SET `id_catologo` = `id_catologo` - 1 WHERE `id_catologo` > :numero");
                    $stmt->bindParam(":numero", $numero, PDO::PARAM_INT);

                    if($stmt -> execute()){
                        $stmt = Conexion::conectar()->prepare("UPDATE `catalogo_botones` SET `Orden` = `Orden` - 1 WHERE `Orden` > :orden");
                        $stmt->bindParam(":orden", $orden, PDO::PARAM_INT);

                        if($stmt -> execute()){
                            return "ok";
                        }else{
                            return "error";
                        }
                    }else{
                        return "error";
                    }

                }else{
                    return "error";
                }

            }else{
                return "error";
            }

        }else{
            return "error";
        }

    }

    static public function mdlReacomodarCatalogo($numero){

        // Actualizar los números de fila restantes
        $stmt = Conexion::conectar()->prepare("UPDATE `catalogo_botones` SET `id_catalogo` = `id_catalogo` - 1 WHERE `id_catalogo` > :numero");
        $stmt->bindParam(":numero", $numero, PDO::PARAM_INT);
        $stmt->execute();

        if($stmt -> execute()){
            $stmt = Conexion::conectar()->prepare("UPDATE `productos_botones` SET `id_catologo` = `id_catologo` - 1 WHERE `id_catologo` > :numero");
            $stmt->bindParam(":numero", $numero, PDO::PARAM_INT);
            $stmt->execute();

            if($stmt -> execute()){
                return "ok";
            }else{
                return "error";
            }

        }else{
            return "error";
        }
    }

    static public function mdlEliminarBoton($numero){

        $stmt = Conexion::conectar()->prepare("DELETE FROM `productos_botones` WHERE `id_boton` = :numero");
        $stmt -> bindParam(":numero",$numero,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";

        }else{
            return "error";
        }


    }

    static public function mdlEliminarBotonPopulares($numero){

        $stmt = Conexion::conectar()->prepare("DELETE FROM `populares` WHERE `id_popular` = :numero");
        $stmt -> bindParam(":numero",$numero,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";

        }else{
            return "error";
        }


    }

    static public function mdlListaBotonesProductos_Popular(){

        $stmt = Conexion::conectar()->prepare('SELECT p.codigo_producto, p.descripcion_producto 
                                                FROM populares po INNER JOIN productos p WHERE p.descripcion_producto = po.producto_popular
                                                ORDER BY p.ventas_producto DESC
                                                LIMIT 20;');

        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdldarOrdenBotones($id_catalogo){

        $stmt = Conexion::conectar()->prepare('SELECT `id_boton` as id,
                                                      "#" as parent,
                                                      `nombre` as text,
                                                      `producto` as vista
                                               FROM `productos_botones`
                                               WHERE `id_catologo` = :id_catalogo
                                               ORDER BY `Orden`');
    
        $stmt->bindParam(":id_catalogo", $id_catalogo, PDO::PARAM_INT);
    
        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    

    static public function mdlReordenarBotones($modulos_ordenados){

        $total_registros = 0;

        foreach($modulos_ordenados as $modulo){

            $array_item_modulo= explode(";",$modulo);

            $stmt = Conexion::conectar()->prepare ("UPDATE productos_botones 
                                                    SET orden = :p_orden
                                                    WHERE id_boton = :p_id");
            
            $stmt -> bindParam(':p_id',$array_item_modulo[0],PDO::PARAM_INT);
            $stmt -> bindParam(':p_orden',$array_item_modulo[2],PDO::PARAM_INT);

            if($stmt->execute()){
                $total_registros = $total_registros +1 ;
            }else{
                $total_registros = 0;
            }

        }

        

        return $total_registros;

    }

    static public function mdlAgregarPorCategoria($categorias,$id_catalogo,$color_catalogo,$icono_catalogo){

        
        $stmt = Conexion::conectar()->prepare ("INSERT INTO `productos_botones`(`id_boton`, `nombre`, `producto`, `id_color`, `id_icono`, `id_catologo`, `Orden`) VALUES ()");
        
        $stmt -> bindParam(':id_catalogo',$id_catalogo,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";

        }else{
            return "error";
        }


    }

    static public function mdldarOrdenBotonesCatalogos(){

        $stmt = Conexion::conectar()->prepare('SELECT `id_catalogo` as id,
                                                      "#" as parent,
                                                      `nombre` as text,
                                                      `descripcion` as vista
                                               FROM `catalogo_botones`
                                               ORDER BY `Orden`');
    
    
        $stmt->execute();
    
        return $stmt->fetchAll();

    }


    static public function mdlReordenarBotonesCatalogos($modulos_ordenados){

        $total_registros = 0;

        foreach($modulos_ordenados as $modulo){

            $array_item_modulo= explode(";",$modulo);

            $stmt = Conexion::conectar()->prepare ("UPDATE catalogo_botones 
                                                    SET Orden = :p_orden
                                                    WHERE id_catalogo = :p_id");
            
            $stmt -> bindParam(':p_id',$array_item_modulo[0],PDO::PARAM_INT);
            $stmt -> bindParam(':p_orden',$array_item_modulo[2],PDO::PARAM_INT);

            if($stmt->execute()){
                $total_registros = $total_registros +1 ;
            }else{
                $total_registros = 0;
            }

        }

        

        return $total_registros;

    }

    static public function mdlEditarBoton_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion, $id_padre) {

        $stmt = Conexion::conectar()->prepare(' UPDATE `productos_botones` SET `nombre`= :nombre,`producto`=:descripcion,`id_color`=:id_color,`id_icono`=:id_icono,`id_catologo`=:id_padre WHERE `id_boton`= :id_boton; ');

        $stmt -> bindParam(':id_boton',$id_boton,PDO::PARAM_STR);
        $stmt -> bindParam(':id_color',$id_color,PDO::PARAM_STR);
        $stmt -> bindParam(':id_icono',$id_icono,PDO::PARAM_STR);
        $stmt -> bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt -> bindParam(':descripcion',$descripcion,PDO::PARAM_STR);
        $stmt -> bindParam(':id_padre',$id_padre,PDO::PARAM_STR);                      
            
    
        // Ejecutamos la consulta de inserción
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "Hubo un problema con los datos.";
        }

    }

    static public function mdlEditarBotonPopular_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion) {

        $stmt = Conexion::conectar()->prepare(' UPDATE `populares` SET `nombre_popular`= :nombre,`producto_popular`=:descripcion,`id_color`=:id_color,`id_icono`=:id_icono WHERE `id_popular`= :id_boton; ');

        $stmt -> bindParam(':id_boton',$id_boton,PDO::PARAM_STR);
        $stmt -> bindParam(':id_color',$id_color,PDO::PARAM_STR);
        $stmt -> bindParam(':id_icono',$id_icono,PDO::PARAM_STR);
        $stmt -> bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt -> bindParam(':descripcion',$descripcion,PDO::PARAM_STR);

    
        // Ejecutamos la consulta de inserción
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "Hubo un problema con los datos.";
        }

    }

    static public function mdlAgregarBotonCatalogo($icono, $color) {

        $stmt = Conexion::conectar()->prepare("SELECT i.id_icono, c.id_color
                                                FROM iconos i 
                                                INNER JOIN colores c 
                                                WHERE i.nombre_icono = :icono AND c.nombre_color = :color");
    
        $stmt->bindParam(":icono", $icono, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetchAll();

    }

    static public function mdlEditarBotonCatalogo_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion) {

        $stmt = Conexion::conectar()->prepare(' UPDATE `catalogo_botones` SET `nombre`= :nombre,`descripcion`=:descripcion,`id_color`=:id_color,`id_icono`=:id_icono WHERE `id_catalogo`= :id_boton; ');

        $stmt -> bindParam(':id_boton',$id_boton,PDO::PARAM_STR);
        $stmt -> bindParam(':id_color',$id_color,PDO::PARAM_STR);
        $stmt -> bindParam(':id_icono',$id_icono,PDO::PARAM_STR);
        $stmt -> bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt -> bindParam(':descripcion',$descripcion,PDO::PARAM_STR);                     
            
    
        // Ejecutamos la consulta de inserción
        if ($stmt->execute()) {

            $stmt = Conexion::conectar()->prepare(' UPDATE `productos_botones` SET `id_color`= :id_color WHERE `id_catologo` = :id_boton; ');

            $stmt -> bindParam(':id_boton',$id_boton,PDO::PARAM_STR);
            $stmt -> bindParam(':id_color',$id_color,PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "Hubo un problema con los datos.";
            }

        } else {
            return "Hubo un problema con los datos.";
        }

    }

    static public function mdlVerCatalogo($id_padre) {

        $stmt = Conexion::conectar()->prepare('SELECT COUNT(*) FROM productos_botones pb WHERE pb.id_catologo = :id_padre');

        $stmt -> bindParam(':id_padre',$id_padre,PDO::PARAM_STR);                     
            
        $stmt->execute();

        return $stmt->fetchAll();
    
    }

    static public function mdlVerCatalogoPopulares() {

        $stmt = Conexion::conectar()->prepare('SELECT COUNT(*) FROM populares pb WHERE 1');                   
            
        $stmt->execute();

        return $stmt->fetchAll();
    
    }

}