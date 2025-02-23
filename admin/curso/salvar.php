<div class="col-sm-12 mb-4">
    <h3 class="text-primary">
        Cadastrar Curso
    </h3>
</div>

<div class="col-sm-12">
    <div class="card shadow">
        <form method="post" name="frmsalvar" class="m-3">
            <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtnome" placeholder="Digite seu Nome" maxlength="50" minlength="3"/>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <a class="btn btn-primary">Salvar<i class="bi bi-arrow-return-left"></i></a>
                    <a class="btn btn-danger" href="?p=curso/consultar">Voltar<i class="bi bi-arrow-return-left"></i></a>
                </div>
            </div>
        </form>
    </div>
</div>