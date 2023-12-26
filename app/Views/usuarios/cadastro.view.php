<section class="container-fluid">
    <div class="row">
        <div class="col col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Buscar Usuário</h3>
                </div>
                <form action="<?= action(\Controllers\Usuarios\Cadastro::class,'find','POST')?>" method="POST">
                    <div class="card-body row">
                        <div class="form-group col-md-6">
                            <label for="inputCPF">
                                CPF<span class="text-danger">*</span>: 
                            </label>
                            <input class="form-control" type="text" required name="cpf" placeholder="CPF..." id="inputCPF">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">
                                Email<span class="text-danger">*</span>: 
                            </label>
                            <input class="form-control" type="email" required name="Email" placeholder="Email..." id="inputEmail">
                        </div>
                    </div>
                    <div class="card-foorter">
                        <button type="reset" class="btn btn-warning">
                            <i class="fas fa-eraser"></i>
                            Limpar
                        </button>
                        <button type="submit" class="btn btn-info float-right">
                            <i class="fas fa-search"></i>
                            Buscar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>