<?php
  require_once 'listar_perguntas.php';
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gráfico das Perguntas</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

     <script type="text/javascript" src="conection.js"></script>
   
	 
</head>
<body>



<div>
    <form action="" class="center campo_opcoes" method="post">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <select class="mdl-textfield__input" id="frase" name="frase">
             <?php 
                 foreach($dados as $pergunta):?>
                    <option value="<?=$pergunta['id'];?>"><?=$pergunta['texto'];?></option>
              <?php  endforeach;?> 
          <select>
        <label class="mdl-textfield__label" for="professsion">Escolha o curso</label>
      </div>
    </form>
</div>



<h3>Gráfico Colunas</h3>
<h6>Somente este aceite o WHEE no select</h6>
<div id="column-chart" class="div-chart"></div>
<hr>


<h3>Gráfico Colunas 2</h3>
<div id="ComboChart" class="div-chart"></div>
<hr>
<h3>Gráfico AreaChart</h3>
<div id="AreaChart" class="div-chart"></div>
<hr>
<h3>Gráfico CandlestickChart</h3>
<div id="CandlestickChart" class="div-chart"></div>
<h3>Gráfico Pizza</h3>
<div id="div-chart" class="div-chart"></div>
<hr>

</body>
</html>