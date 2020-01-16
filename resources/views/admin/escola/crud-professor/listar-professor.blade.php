@include('admin.layout._includes.header-escola2')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Professores</h6>
        </div>
        <div class="card-body">
            <div class="table-striped table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                        <th scope="col"></th>
                            <th scope="col" colspan="1">CPF</th>
                            <th scope="col" colspan="2">Nome</th>
                            <th scope="col">Idade</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($registrosP as $registro)

                    <tr>
                    <td><img class="img-profile rounded-circle" src="../{{ $registro->img_prof}}" width = "30px" height = "30px"></td>
                        <th colspan="1">{{ $registro->cpf_prof}}</th>
                        <td colspan="2">{{ $registro->nm_prof." ".$registro->snm_prof}}</td>
                        <td>30</td>
                        <th>{{ $registro->cel_prof}}</th>
                        <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        &nbsp;<button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></td>
                    
                    </tr>

                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('admin.layout._includes.footer2')
