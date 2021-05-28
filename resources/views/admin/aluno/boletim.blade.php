@include('admin.layout._includes.header-aluno2')
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
                      <th rowspan="2">Matéria</th>
                      <th colspan="2">1º Bimestre</th>
                      <th colspan="2">2º Bimestre</th>
                      <th colspan="2">3º Bimestre</th>
                      <th colspan="2">4º Bimestre</th>
                      <th colspan="2">Resultado</th>
                    </tr>
                    <tr>
                      <th>N</th>
                      <th>F</th>
                      <th>N</th>
                      <th>F</th>
                      <th>N</th>
                      <th>F</th>
                      <th>N</th>
                      <th>F</th>
                      <th>MF</th>
                      <th>F</th>
                  </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th rowspan="2">Matéria</th>
                      <th colspan="2">1º Bimestre</th>
                      <th colspan="2">2º Bimestre</th>
                      <th colspan="2">3º Bimestre</th>
                      <th colspan="2">4º Bimestre</th>
                      <th colspan="2">Resultado</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Matemática</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                      <td class="bg-success" style="color: #fff;">3</td>
                    </tr>
                    <tr>
                      <td>História</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                      <td class="bg-success" style="color: #fff;">3</td>
                    </tr>
                    <tr>
                      <td>Geografia</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-danger" style="color: #fff;">2</td>
                      <td class="bg-danger" style="color: #fff;">5</td>
                    </tr>
                    <tr>
                      <td>Quimica</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                      <td class="bg-success" style="color: #fff;">3</td>
                    </tr>
                    <tr>
                      <td>Fisica</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                      <td class="bg-success" style="color: #fff;">3</td>
                    </tr>
                    <tr>
                      <td>Biologia</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                      <td class="bg-success" style="color: #fff;">3</td>
                    </tr>
                    <tr>
                      <td>Ed. Fisica</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-danger" style="color: #fff;">4</td>
                      <td class="bg-danger" style="color: #fff;">3</td>
                    </tr>
                    <tr>
                      <td>Espanhol</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-danger" style="color: #fff;">3</td>
                      <td class="bg-danger" style="color: #fff;">10</td>
                    </tr>
                    <tr>
                      <td>Português</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-danger" style="color: #fff;">2</td>
                      <td class="bg-danger" style="color: #fff;">15</td>
                    </tr>
                    <tr>
                      <td>Sociologia</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                      <td class="bg-success" style="color: #fff;">8</td>
                    </tr>
                    <tr>
                      <td>Filosofia</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">9</td>
                      <td class="bg-success" style="color: #fff;">4</td>
                    </tr>
                    <tr>
                      <td>Inglês</td>
                      <td>5</td>
                      <td>2</td>
                      <td>7</td>
                      <td>1</td>
                      <td>5</td>
                      <td>6</td>
                      <td>5</td>
                      <td>2</td>
                      <td class="bg-success" style="color: #fff;">8</td>
                      <td class="bg-success" style="color: #fff;">7</td>
                    </tr>
                  </tbody>
                </table>
                <p>N = Nota</p>
                <p>F = Falta</p>
                <p>MF = Media Final</p>
              
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@include('admin.layout._includes.footer2')
