@include('admin.layout._includes.header-escola2')

<script type="text/javascript" src="../../../js/mascara/mascara.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cadastrar Aluno</h6>
    </div>
    <div class="card-body">
      <!-- Inicio do formulario -->
      <form method="post" action="{{route('adm.escola.salvar.aluno')}}" name="formCad">

      {{ csrf_field() }}
        @include('admin.escola.crud-aluno._form')
        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script language="javascript">
  function mudar() {
    var num = document.getElementById('num').value; // pega o valor do input

    if (num != "") {

      ref.focus();
    }
  }
</script>

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
      } else if (idade >= 5 && idade <= 30) {
        return true;
      } else {

        alert("A idade do aluno deve ser de 5 á 30 anos!");
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


<!-- Adicionando Javascript -->
<script type="text/javascript">
  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.

    document.getElementById('cep').value = ("");
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
    formCad.cep.focus();

  }

  function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua').value = (conteudo.logradouro);
      document.getElementById('bairro').value = (conteudo.bairro);
      document.getElementById('cidade').value = (conteudo.localidade);
      document.getElementById('uf').value = (conteudo.uf);

    } //end if.
    else {
      //CEP não Encontrado.
      limpa_formulário_cep();
      alert("CEP não encontrado.");
    }
  }

  function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value = "...";
        document.getElementById('bairro').value = "...";
        document.getElementById('cidade').value = "...";
        document.getElementById('uf').value = "...";
        formCad.num.focus();


        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
        formCad.cep.focus();
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
      formCad.cep.focus();
    }
  };
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