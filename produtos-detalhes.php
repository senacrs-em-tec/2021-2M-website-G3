<?php
    // include dos arquivos de dados
    include_once './include/_dados.php';
 
    // include dos arquivos de header da pagina
    include_once './include/_header.php';
 
    // menu
    include_once './include/_menu.php';
?>
 
<?php
//captura o código informado pelo usuário no click
$codigo = $_ARRAY['cod'];
//produto com o código informado 
$produto = $colecaoProdutos[$codigo];
?>
 
<div class="container bootdey">
<div class="col-md-12">
<section class="panel">
        <div class="panel-body"> 
        <div class="col-md-6">
            <div class="pro-img-details">
            <h1><?php echo $produto['nome'].'<br>';?></h1>
            <img src="img/calca1.png" alt="" width="100%" height="400"></a>
        </div>
 
</div>
<div class="col-md-6">
    <h4 class="pro-d-title">
 
         Descrição
 
</h4>
<p>
  Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível.
</p>
<div class="product_meta">
    <span class="tagged_as"><strong>Filtros:</strong> <a rel="tag" href="#">Calças</a>
</div>
<div class="form-group">
    <label>Quantidade</label>
    <button class="buy_button js-buy" style="background: #ADD8E6">
 
                                    COMPRAR
 
 </button>
 
    <input type="quantiy" placeholder="1" class="form-control quantity">
</div>
 <p>
    
 </p>
</div>
</div>
</section>
</div>