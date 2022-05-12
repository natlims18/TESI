<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="/index.php/produto/salvaralteracao">
        <input type="hidden" name="id" value="<?php echo $produto->id; ?>"/>

        <label>Perecivel</label>
        <input type="text" name="perecivel" value="<?php echo $produto->perecivel; ?>"/>
        <br />

        <label>Produto</label>
        <input type="text" name="produto" id="produto" value="<?php echo $produto->produto; ?>" required/>
        <br />

        <label>Tipo</label>
        <select name="tipo" required>
            <option value="">Escolha o tipo</option>
            <?php echo $opcoes; ?>
        </select>
        <br />

        <label>Valor</label>
        <input type="text" name="valor" value="<?php echo $produto->valor; ?>"/>
        <br />

        <label>Imagem</label>
        <input type="text" name="imagem" value="<?php echo $produto->imagem; ?>"/>
        <br />
        
        <br />
        <input type="submit" value="Salvar" />
        <a href='/index.php/veiculo'>Voltar/Cancelar</a>

    </form>
</body>
</html>