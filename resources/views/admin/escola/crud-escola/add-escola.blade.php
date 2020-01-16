<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastrar Escola</title>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../css/sb-admin-2.css" rel="stylesheet">

</head>

     
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Preencha o Formulário para Cadastrar a Escola</h1>
				        <br>
              </div>

              <form class="" action="{{route('adm.escola.salvar')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                @include('admin.escola.crud-escola._form')
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    CADASTRAR ESCOLA
                  </button>
        
              </form>
           
              <hr>
			  
			  <p>*Campos Obrigatórios</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Adicionando Javascript -->
<script type="text/javascript">
  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.

    document.getElementById('cep_escola').value = ("");
    document.getElementById('rua_escola').value = ("");
    document.getElementById('bairro_escola').value = ("");
    document.getElementById('cidade_escola').value = ("");
    document.getElementById('uf_escola').value = ("");
    formCad.cep.focus();

  }

  function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua_escola').value = (conteudo.logradouro);
      document.getElementById('bairro_escola').value = (conteudo.bairro);
      document.getElementById('cidade_escola').value = (conteudo.localidade);
      document.getElementById('uf_escola').value = (conteudo.uf);

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
        document.getElementById('rua_escola').value = "...";
        document.getElementById('bairro_escola').value = "...";
        document.getElementById('cidade_escola').value = "...";
        document.getElementById('uf_escola').value = "...";
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

  <!-- Bootstrap core JavaScript-->
  <script src="../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../../js/sb-admin-2.min.js"></script>

  <script>
                     
                     $('.newbtn').bind("click" , function () {
                            $('#pic').click();
                     });
                     
                      function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                    
                                    reader.onload = function (e) {
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
						float:left;
					  }

					  .newbtn {
						cursor: pointer;
						margin: 0;
					  }

					  #blah {
						max-width: 210px;
						height: 220px;
						margin: 0;
						padding: 0;

					  }

                    }
                    
                    </style>

</body>

</html>
