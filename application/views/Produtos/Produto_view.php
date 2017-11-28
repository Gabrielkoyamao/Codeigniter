<div class="content-wrapper">

	<section class="content container-fluid">

		<div class="container">

            <div class="col-md-9 col-md-offset-1">
            <h2> <b> Adicionar Produto </b> </h2>
            </div>

			<div class="col-md-9 col-md-offset-1" style="background-color:#fdfdfd !important">

                <br/>

                <form action="/produto/addProduto" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome do Produto</label>
                        <input name="nome" type="text" class="form-control" placeholder="Adcionar produto" value="<?=@$data['name']?>">
                        
                        <label class="control-label text-danger"><?=@$error['nome']?></label>


                        <!-- <span class="text-muted alert-danger"><?=@$error['nome']?></span> -->
                        
                    
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Valor</label>
                        <input name="preco" type="text" class="form-control" placeholder="Insira o Valor" value="<?=@$data['preco']?>">
                        
                        <label class="control-label text-danger"><?=@$error['preco']?></label>

                        <!-- <span class="text-muted alert-danger"><?=@$error['preco']?></span> -->
                   
                    </div>

                    <button id="cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
                </form>	
                <br/>		

            </div>

		</div>

	</section>
</div>

<?php

    if(@$error == null){
        print "alert('Produto adicionado com sucesso!')";
    }

?>
