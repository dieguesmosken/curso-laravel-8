<h1>Pagina Produtos</h1>
<br>
<p>Produto: <b>{{$produto}}</b></p>
<br>
<p>Preço: <b>{{$preco}}</b></p>
<br>
<p>Categoria: <b>{{$categoria}}</b></p>
<br>
<p>Voltar para o index <b><a href="/">Clique Aqui</a></b></p>
<br>

<hr>
<form method="post">
    @csrf
    <b>Produto</b>
    <input type="text" name="produto"><br><br>

    <b>Preço</b>
    <input type="text" name="preco"><br><br>

    <b>Categoria</b>
    <input type="text" name="categoria"><br><br>
    <input type="submit" value="Salvar">
    
</form>
<hr>