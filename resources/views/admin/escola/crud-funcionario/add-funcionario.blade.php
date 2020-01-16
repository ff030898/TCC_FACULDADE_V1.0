@include('admin.layout._includes.header-escola2')

<script type="text/javascript" src="../../../js/mascara/mascara.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cadastrar Funcionário</h6>
      
    </div>
    <div class="card-body">
      <!-- Inicio do formulario -->
      <form method="get" action="." name="formCad">

        <div class="form-group col-md-1" style="float: left; ">

          <label class="newbtn">
            <img id="blah" src="http://placehold.it/120x120">
            <input id="pic" class='pis' onchange="readURL(this);" type="file" required>
          </label>

        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail4">Sobrenome *</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Sobrenome" required>
        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail4">Nome *</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" required>
        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail4">Data de Nascimento *</label>
          <input type="date" class="form-control" name="datan" id="datan" placeholder="dd/mm/yyyy" onblur="dataNasc()" required>
        </div>

        <div class="form-group col-md-5">
          <label for="inputState">Sexo</label>
          <select id="inputState" class="form-control">
            <option selected>Masculino</option>
            <option>Feminino</option>
          </select>
        </div>

        <div class="form-group col-md-12">
          <label for="inputPassword4">Email *</label>
          <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
        </div>

        <div class="form-group col-md-4">
          <label for="inputEmail4">CPF *</label>
          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="###.###.###-##" 
          onkeyup="mascara('###.###.###-##',this,event,true)" maxlength="14" onblur="valida()" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4">RG</label>
          <input type="text" class="form-control" id="rg" name="rg" placeholder="##.###.###-#" 
          onkeyup="mascara('##.###.###-#',this,event,true)" maxlength="12" required>
        </div>

        <div class="form-group col-md-4">
          <label for="inputState">Celular *</label>
          <input type="text" class="form-control" id="celular" name="celular" placeholder="(##)#####.####" 
          onkeyup="mascara('(##)#####.####',this,event,true)" maxlength="14" required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputState">Situação</label>
          <select id="inputState" class="form-control">
            <option selected>Selecione uma Opção</option>
            <option>Ativo</option>
            <option>Afastado</option>
            <option>Demitido</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="inputState">Cargo</label>
          <select id="inputState" class="form-control">
            <option selected>Diretor(a)</option>
            <option>Diretor(a) de Serviços Acadêmicos</option>
            <option>Supervisor(a) Pedagógico</option>
            <option>Coordenador(a) de Esportes e Cultura</option>]
            <option>Coordenador(a) Pedagógica</option>
            <option>Orientador(a) Educacional</option>
            <option>Psicólogo(a) Escolar</option>
            <option>Supervisor(a) Pedagógico</option>
            <option>Secretário(a)</option>
            <option>Inspetor(a)</option>
            <option>Faxineiro(a)</option>
            <option>Nutricionista</option>
            <option>Cozinheira</option>
            <option>Faxineiro(a)</option>
            <option>Bibliotecário(a)</option>
            <option>Enfermeiro(a)</option>
            <option>Outros</option>
    
          </select>
        </div>

        
        <br>
        <div class="form-group col-md-12">
        
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <p class="text-right">Campos Obrigatórios *</p>
        </div>

      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script language="javascript">
  function dataNasc() {
    var data = document.getElementById('datan').value; // pega o valor do input
    if (data != "") {

      data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
      var data_array = data.split("-"); // quebra a data em array

      // para o IE onde será inserido no formato dd/MM/yyyy
      if (data_array[0].length != 4) {
        data = data_array[2] + "-" + data_array[1] + "-" + data_array[0]; // remonto a data no formato yyyy/MM/dd
      }

      // comparo as datas e calculo a idade
      var hoje = new Date();
      var nasc = new Date(data);
      var idade = hoje.getFullYear() - nasc.getFullYear();
      var m = hoje.getMonth() - nasc.getMonth();
      if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;

      if (idade < 0) {

        alert("Data de Nascimento Incorreta!");
        document.getElementById('datan').value = "";
        formCad.datan.focus();
        return false;
      } else if (idade >= 18) {
        return true;
      } else {

        alert("A idade do professor deve ser maior que 18 anos!");
        document.getElementById('datan').value = "";
        formCad.datan.focus();
        return false;
      }

      // se for maior que 60 não vai acontecer nada!
      return false;


    }
  }
</script>

<script language="javascript">
  function valida() {
    if (valida_cpf(document.getElementById('cpf').value)) {

      //alert('CPF Válido');
      //document.getElementById('cpf').disabled = true;
      formCad.celular.focus();
    } else {

      var cpf = formCad.cpf.value;
      if (cpf != "") {
        alert('CPF Inválido. Digite Novamente!');
        document.getElementById('cpf').value = "";
        var cpf2 = formCad.cpf.value;
        formCad.cpf.focus();

      }

    }

  }

  function valida_cpf(cpf3) {
    var cpf = cpf3.replace(/\D/g, '');

    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cpf.length < 11)
      return false;
    for (i = 0; i < cpf.length - 1; i++)
      if (cpf.charAt(i) != cpf.charAt(i + 1)) {
        digitos_iguais = 0;
        break;
      }
    if (!digitos_iguais) {
      numeros = cpf.substring(0, 9);
      digitos = cpf.substring(9);
      soma = 0;
      for (i = 10; i > 1; i--)
        soma += numeros.charAt(10 - i) * i;
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(0))
        return false;
      numeros = cpf.substring(0, 10);
      soma = 0;
      for (i = 11; i > 1; i--)
        soma += numeros.charAt(11 - i) * i;
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(1))
        return false;
      return true;
    } else
      return false;
  }
</script>


<script>
  $('.newbtn').bind("click", function() {
    $('#pic').click();
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah')
          .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<style>
  #pic {
    display: none;
  }

  .newbtn {
    cursor: pointer;
    margin: 0;
  }

  #blah {
    max-width: 160px;
    height: 170px;
    margin: 0;
    padding: 0;

  }

  .form-group {
    float: right;
  }
</style>



@include('admin.layout._includes.footer2')