<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?= $titulo ?>
<pre>
<!-- <//?php print_r($produtos); ?> -->
<h1>Pagina de produtos</h1>
<table class="table table-striped" border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor de Compra</th>
            <th>Valor de venda</th>
            <th>Quantidade</th>
            <th>Validade</th>
            <th>Acao</th>
        </tr>
    </thead>
    <tbody>
        <!-- craindo um froeach -->
        <?php foreach($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto['nome'];?></td>
            <td><?php echo $produto['descricao'];?></td>
            <td><?php echo $produto['valor_de_compra'];?></td>
            <td><?php echo $produto['valor_de_venda'];?></td>
            <td><?php echo $produto['quantidade'];?></td>
            <!-- exemplode um if  -->
            <?php if($produto['validade'] == ""): ?>
                <td>Pruduto sem validade</td>
                <?php else : ?>
                <td><?php echo $produto['validade'];?></td>
            <?php endif;?>
            
            <td><button  class="btn btn-Primary">Edit</button>
             <button class="btn btn-Danger">Excluir</button>
            </td>
           
        </tr>
      <?php endforeach ; ?>
    </tbody>
</table>

