@include('admin.layout._includes.header-escola2')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Turmas</h6>
        </div>
        <div class="card-body">
            <div class="table-striped table-responsive">
            <table class="table table-bordered">
                    <thead>
                        <tr>
                           
                            <th scope="col">#</th>
                            <th scope="col" colspan="2">Turma</th>
                            <th scope="col">Data de Cadastro</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($registrosT as $registro)

                    <tr>
            
                        <th scope="row">{{ $registro->cd_turma}}</th>
                        <td colspan="2">{{ $registro->nm_turma}}</td>
                        <td>{{ $registro->dt_cadastro}}</td>
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