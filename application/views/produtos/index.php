    <h1>Listagem de produtos da padaria</h1>
    <a 
        href="/index.php/produto/formNovo"
        class="btn btn-success"
    >
        Novo
    </a>
    <table class="table table-striped" >
        <thead>
            <tr>
            <th>Produto</th>
                <th>Perecivel</th>
                <th>Tipo</th>
                <th>Valor</th>
                
            </tr>
        </thead>
        <?php 
        foreach($lista_produtos as $item){
            echo "
            <tr>
                
            </tr>
            ";
        }

        echo $tabela; ?>
    </table>