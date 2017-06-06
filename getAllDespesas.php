<?php
 
       
         try{
          
        
        
require_once 'conexao.php';

          $table = array(); 
          $table['cols']=array(
                                 array('label'=>'Pergunta', 'type'=>'string'), 
                                 array('label'=>'Alunos que entenderam', 'type'=>'number'),
                                 array('label'=>'Alunos que entenderam uma parte do conteúdo', 'type'=>'number'),
                                 array('label'=>'Alunos que não entenderam o conteúdo', 'type'=>'number')
          	                  );

            $rows = array();
           

         //$id = $_POST["frase"];

         

      

          	$result = $pdo ->query('SELECT * FROM frases where id=7');
          	 if($result){
         	 	
          	 	while ($linha = $result->fetch(PDO::FETCH_ASSOC)) {
          	 		
                
          	 	    $pergunta = $linha['texto'];
                  $resposta_zero=$linha['entendi'];
          	 		  $resposta_um=$linha['n_entendi'];
          	 		  $resposta_dois=$linha['entendi_pouco'];
          	 		  $temp=array();
           
                  $temp[]=array('v'=>utf8_encode($pergunta));
          	 		  $temp[]=array('v'=>$resposta_zero);
                  $temp[]=array('v'=>$resposta_um);
          	 		  $temp[]=array('v'=>$resposta_dois);
          	 		  $rows[]=array('c'=>$temp);
					}

					$table['rows']=$rows;
				

					$jsonTable =json_encode($table);
					
             	 }

             		 echo $jsonTable;

             		

          }catch(PDOException $i){
          		print "Erro:".$i->getMessage();
          }

         
       
     

