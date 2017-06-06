
  google.charts.load('visualization', '1', {packages:['corechart'],'language':'pt-BR'});
	google.charts.setOnLoadCallback(desenhaGraficoPerguntas);

		function desenhaGraficoPerguntas(){

   			var jsonData = $.ajax({
    		url:"getAllDespesas.php",
	        dataType: "json",
	        async:false
          }).responseText;





        var dados = new google.visualization.DataTable(jsonData);
             
      

        var option = {
           width:960,
           height:500,
           title: 'Gráficos de Perguntas'

          // colors: ['#e0440e', '#e6693e', '#ec8f6e']
        }

       var chart = new google.visualization.PieChart(document.getElementById('div-chart'));
	    chart.draw(dados, option);


	     var chart2 = new google.visualization.ColumnChart(document.getElementById('column-chart'));
         chart2.draw(dados, option);

       var chart3 = new google.visualization.ComboChart(document.getElementById('ComboChart'));
       chart3.draw(dados, option); 

        
        var chart3 = new google.visualization.AreaChart(document.getElementById('AreaChart'));
        chart3.draw(dados, option);
         
      var chart4 = new google.visualization.CandlestickChart(document.getElementById('CandlestickChart'));
      chart4.draw(dados, option);

}

