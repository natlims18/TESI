<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>

                    <!-- Horizontal Form -->
                    <form method="POST" action="/index.php/produto/salvarnovo" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Perecivel</label>
                            <div class="col-sm-10">
                                <input type="text" name="perecivel" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Produto</label>
                            <div class="col-sm-10">
                                <input type="text" name="produto" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-10">
                            <input type="text" name="tipo" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Valor</label>
                            <div class="col-sm-10">
                                <input type="text" name="valor" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Imagem</label>
                            <div class="col-sm-10">
                                <input type="text" name="imagem" class="form-control" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href="/index.php/produto">Volta/Cancelar</a>
                        </div>

                        <input type='file' multiple name='arquivos' >

                    </form><!-- End Horizontal Form -->

                </div>
            </div>

        </div>

    </div>
</section>
