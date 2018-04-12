<?php
require_once('PeopleDB.php');
class NameAPI 
{    
     public function API()
     {
         header('Content-Type: application/JSON');                
         $method = $_SERVER['REQUEST_METHOD'];
         switch ($method) {
         case 'GET'://consulta
             $this->getName();
             break;     
         default://metodo NO soportado
             echo 'METODO NO SOPORTADO';
             break;
         }
     }   

        /**
     * Respuesta al cliente
     * @param int $code Codigo de respuesta HTTP
     * @param String $status indica el estado de la respuesta puede ser "success" o "error"
     * @param String $message Descripcion de lo ocurrido
     */
     function response($code=200, $status="", $message="") 
       {
        http_response_code($code);
        if( !empty($status) && !empty($message) )
           {
            $response = array("status" => $status ,"message"=>$message);  
            echo json_encode($response,JSON_PRETTY_PRINT);    
            } 
       }

     /**
     * función que segun el valor de "action" e "id":
     *  - mostrara una array con todos los registros de personas
     *  - mostrara un solo registro 
     *  - mostrara un array vacio
     */
     function getName()
     {
         if($_GET['action']=='names')
            {         
                 $db = new PeopleDB();
                 if(isset($_GET['id']))
                 {
                     //muestra 1 solo registro si es que existiera ID                 
                     $response = $db->getPeople($_GET['id']);                
                     echo json_encode($response,JSON_PRETTY_PRINT);
                 }else
                     { //muestra todos los registros                   
                     $response = $db->getName();              
                     echo json_encode($response,JSON_PRETTY_PRINT);
                     }
             }else{
                   $this->response(400);
                  }       
     }  




        
}//end class
?>