<?php

require_once "conexion.php";
require_once "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


class CatalogosModelo{

    /*===================================================================
    REALIZAR LA CARGA MASIVA DE PRODUCTOS MEDIANTE ARCHIVO EXCEL
    ====================================================================*/
    static public function mdlCargaMasivaProductos($fileProductos){

        $nombreArchivo = $fileProductos['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        $hojaCatalogos = $documento->getSheetByName("Catalogos");
        $numeroFilasCatalogos = $hojaCatalogos->getHighestDataRow(); 
        
        $hojaBotones = $documento->getSheetByName("Botones");
        $numeroFilasBotones = $hojaBotones->getHighestDataRow();


        $catalogosRegistrados = 0;
        $botonesRegistrados = 0;

        var_dump($numeroFilasCatalogos);
        var_dump($numeroFilasBotones);

        $stmt = Conexion::conectar()->prepare("DELETE FROM `productos_botones` WHERE 1");

        if($stmt->execute()){
            $stmt = Conexion::conectar()->prepare("DELETE FROM `catalogo_botones` WHERE 1");

            
            if($stmt->execute()){


                for ($j=3; $j <= $numeroFilasCatalogos ; $j++) { 

                    $id_catalogo         = $hojaCatalogos->getCell("B".$j);
                    $nombre              = $hojaCatalogos->getCell("C".$j);
                    $descripcion         = $hojaCatalogos->getCell("D".$j);
                    $id_icono            = $hojaCatalogos->getCell("E".$j);
                    $id_color            = $hojaCatalogos->getCell("F".$j);

                    // Utilizar expresión regular para extraer solo los dígitos numéricos de id_color
                    $matches_color = [];
                    preg_match('/\d+/', $id_color, $matches_color);
                    $id_color = !empty($matches_color) ? intval($matches_color[0]) : null;

                    // Utilizar expresión regular para extraer solo los dígitos numéricos de id_icono
                    $matches_icono = [];
                    preg_match('/\d+/', $id_icono, $matches_icono);
                    $id_icono = !empty($matches_icono) ? intval($matches_icono[0]) : null;
                    

                    

                    if(!empty($nombre) && !is_null($id_color)){

                        $stmt = Conexion::conectar()->prepare("INSERT INTO `catalogo_botones`(`id_catalogo`, `nombre`, `descripcion`, `id_color`, `id_icono`) 
                                                                    VALUES (:id_catalogo,:nombre,:descripcion,:id_color,:id_icono)");

                        $stmt -> bindParam(":id_catalogo",$id_catalogo,PDO::PARAM_STR);
                        $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
                        $stmt -> bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
                        $stmt -> bindParam(":id_color",$id_color,PDO::PARAM_INT);
                        $stmt -> bindParam(":id_icono",$id_icono,PDO::PARAM_INT);
                        
                        if($stmt->execute()){
                            $catalogosRegistrados = $catalogosRegistrados + 1;
                            
                        }else{
                            $catalogosRegistrados = 0;
                        }
                    }
                }

                if($catalogosRegistrados > 0){

                    //CICLO FOR PARA REGISTROS DE PRODUCTOS
                    for ($i=5; $i <= $numeroFilasBotones ; $i++) { 

                        $id_boton                = $hojaBotones->getCell("C".$i);
                        $id_catalogo               = $hojaBotones->getCell("D".$i);
                        $nombre                  = $hojaBotones->getCell("E".$i);
                        $producto                  = $hojaBotones->getCell("F".$i);
                        $id_icono                  = $hojaBotones->getCell("G".$i);
                        $id_color                  = $hojaBotones->getCell("H".$i);

                        // Utilizar expresión regular para extraer solo los dígitos numéricos de id_color
                        $matches_color = [];
                        preg_match('/\d+/', $id_color, $matches_color);
                        $id_color = !empty($matches_color) ? intval($matches_color[0]) : null;

                        // Utilizar expresión regular para extraer solo los dígitos numéricos de id_icono
                        $matches_icono = [];
                        preg_match('/\d+/', $id_icono, $matches_icono);
                        $id_icono = !empty($matches_icono) ? intval($matches_icono[0]) : null;

                        $matches_catalogo = [];
                        preg_match('/\d+/', $id_catalogo, $matches_catalogo);
                        $id_catalogo = !empty($matches_catalogo) ? intval($matches_catalogo[0]) : null;

    

                        if(!empty($nombre) && !is_null($id_color) && !is_null($id_catalogo)){
                            $stmt = Conexion::conectar()->prepare("INSERT INTO `productos_botones`(`id_boton`, `nombre`, `producto`, `id_color`, `id_icono`, `id_catologo`) 
                                                                    VALUES (:id_boton,   
                                                                            :nombre,     
                                                                            :producto,   
                                                                            :id_color,   
                                                                            :id_icono,   
                                                                            :id_catologo);");

                            $stmt -> bindParam(":id_boton",$id_boton,PDO::PARAM_STR);
                            $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
                            $stmt -> bindParam(":producto",$producto,PDO::PARAM_STR);
                            
                            $stmt -> bindParam(":id_color",$id_color,PDO::PARAM_INT);
                            $stmt -> bindParam(":id_icono",$id_icono,PDO::PARAM_INT);
                            $stmt -> bindParam(":id_catologo",$id_catalogo,PDO::PARAM_INT);


                            if($stmt->execute()){
                                $botonesRegistrados = $botonesRegistrados + 1;
                                
                            }else{
                                $botonesRegistrados = 0;
                            }
                        }
                    }

                    
                }
                var_dump($catalogosRegistrados);
                var_dump($botonesRegistrados);

                
                $respuesta["totalCatalogos"] = $catalogosRegistrados;
                $respuesta["totalBotones"] = $botonesRegistrados;


                var_dump($respuesta);



                return $respuesta;
            }
            
        }

       
    }

}