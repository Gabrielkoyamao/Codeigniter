<div class="content-wrapper">

	<section class="content container-fluid">

		<div class="container">

      <div class="col-md-9 col-md-offset-1">
        <h1> <b>  Produtos </b></h1>
      </div>

    	<div class="col-md-9 col-md-offset-1 well" id="tabela"></div>
		</div>
	</section>
</div>


<script>

    $(document).ready(function(){
      
      var produtos        = '<?php echo json_encode($lista);?>';
      var data_produto    = JSON.parse( produtos );

      htm = "<table class='table table-stripped table-hover'>";
      htm += "<tbody>";
      htm += "<tr><th>Titulo</th>";
      htm += "<th>Valor</th></tr>";

      if(data_produto)
      
        data_produto.map(function (e) {

        htm += "<tr><th>" + e.nome + "</th>";
        htm += "<th>" + e.preco + "</th></tr>";
        
      });

      htm += "</body>";
      htm += "</table>";

      $("#tabela").html( htm );

      // var nomes   = data_produto.map((e) => {return e.nome})
      // var precos  = data_produto.map((e) => {return e.preco})

      // console.log('DEU CERTO?::', data_produto) 
      // console.log('NOME::',   nomes) 
      // console.log('PRECO::',  precos) 

  });

</script>
	