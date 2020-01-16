@include('admin.layout._includes.header-escola2')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Boletim</h1>
<p class="mb-4">Informações sobre notas e faltas do aluno.</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Boletim anual</h6>
  </div>
  <div class="card-body">
    <div class="table-striped table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Matéria</th>
            <th>1º Bimestre</th>
            <th>2º Bimestre</th>
            <th>3º Bimestre</th>
            <th>4º Bimestre</th>
            <th>Resultado</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Matéria</th>
            <th>1º Bimestre</th>
            <th>2º Bimestre</th>
            <th>3º Bimestre</th>
            <th>4º Bimestre</th>
            <th>Resultado</th>
            </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Portugues</td>
            <td>10</td>
            <td>8</td>
            <td>5</td>
            <td>7</td>
            <td><i class="btn btn-success">Aprovado</i></td>
          </tr>
          <tr>
            <td>Matemática</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td><i class="btn btn-success">Aprovado</i></td>
          </tr>
          <tr>
            <td>História</td>
            <td>10</td>
            <td>8</td>
            <td>5</td>
            <td>7</td>
            <td><i class="btn btn-success">Aprovado</i></td>
          </tr>
          <tr>
            <td>Geografia</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td><i class="btn btn-danger">Reprovado</i></td>
          </tr>
          <tr>
            <td>Quimica</td>
            <td>10</td>
            <td>8</td>
            <td>5</td>
            <td>7</td>
            <td><i class="btn btn-success">Aprovado</i></td>
          </tr>
          <tr>
            <td>Fisica</td>
            <td>1</td>
            <td>4</td>
            <td>7</td>
            <td>2</td>
            <td><i class="btn btn-danger">Reprovado</i></td>
          </tr>
          <tr>
            <td>Biologia</td>
            <td>10</td>
            <td>8</td>
            <td>5</td>
            <td>7</td>
            <td><i class="btn btn-danger">Reprovado</i></td>
          </tr>
          <tr>
            <td>Ed. Fisica</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>2</td>
            <td><i class="btn btn-success">Aprovado</i></td>
          </tr>
          <tr>
            <td>Informática</td>
            <td>10</td>
            <td>8</td>
            <td>5</td>
            <td>7</td>
            <td><i class="btn btn-success">Aprovado</i></td>
          </tr>
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