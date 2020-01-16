<div class="form-group col-md-1" style="float: left; ">

          <label class="newbtn">
            <img id="blah" src="http://placehold.it/120x120">
            <input id="pic" class='pis' name="img_aluno" value="{{isset($registro->img_aluno) ? $registro->img_aluno : ''}}" onchange="readURL(this);" type="file" required>
          </label>

        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail4">Sobrenome *</label>
          <input type="text" class="form-control" id="inputEmail4" name="sobrenome" 
          value="{{isset($registro->snm_aluno) ? $registro->snm_aluno : ''}}"
          placeholder="Sobrenome" required>
        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail4">Nome *</label>
          <input type="text" class="form-control" id="inputEmail4" 
          value="{{isset($registro->nm_aluno) ? $registro->nm_aluno : ''}}"
          name="nome"
          placeholder="Nome" required>
        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail4">Data de Nascimento *</label>
          <input type="date" class="form-control" name="datan" id="datan" 
          value="{{isset($registro->dt_nascimento) ? $registro->dt_nascimento : ''}}"
          placeholder="dd/mm/yyyy" onblur="dataNasc()" required>
        </div>
        <div class="form-group col-md-5">
          <label for="inputPassword4">Turma *</label>
          <select id="inputState" class="form-control">
            <option selected>Selecione uma Turma</option>
            <option>1º A</option>
            <option>1º B</option>
          </select>
        </div>


        <div class="form-group col-md-12">
          <label for="inputPassword4">Email *</label>
          <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
        </div>


        <div class="form-group col-md-2">
          <label for="inputPassword4">UF</label>
          <input type="text" class="form-control" id="uf" placeholder="UF" readonly required>
        </div>


        <div class="form-group col-md-3">
          <label for="inputPassword4">CEP *</label>
          <input type="text" class="form-control" value="" name="cep" id="cep" size="10" maxlength="9" 
          onkeyup="mascara('#####-###',this,event,true)"
          placeholder="CEP" onblur="pesquisacep(this.value);" required >
        </div>

        <div class="form-group col-md-4">
          <label for="inputPassword4">Possui Deficiência *</label>
          <select id="inputState" class="form-control">
            <option selected>Selecione uma Opção</option>
            <option>Sim</option>
            <option>Não</option>
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="inputState">Celular *</label>
          <input type="text" class="form-control" id="celular" name="celular" placeholder="(##)#####.####" 
          onkeyup="mascara('(##)#####.####',this,event,true)" maxlength="14" required>
        </div>


        <div class="form-group col-md-2">
          <label for="inputPassword4">Número *</label>
          <input type="number" class="form-control disabled" id="num" name="num" onblur="mudar()" placeholder="000" required>
        </div>

        <div class="form-group col-md-10">
          <label for="inputPassword4">Endereço *</label>
          <input type="text" class="form-control disabled" name="rua" id="rua" placeholder="Endereço" readonly required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Cidade *</label>
          <input type="text" class="form-control disabled" name="cidade" id="cidade" placeholder="Cidade" readonly required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Bairro *</label>
          <input type="text" class="form-control disabled" name="bairro" id="bairro" placeholder="Bairro" readonly required>
        </div>

        <div class="form-group col-md-4">
          <label for="inputPassword4">Bloco</label>
          <input type="text" class="form-control disabled" id="bloco" placeholder="Bloco">
        </div>

        <div class="form-group col-md-3">
          <label for="inputPassword4">APTO</label>
          <input type="number" class="form-control disabled" id="apto" placeholder="APTO">
        </div>

        <div class="form-group col-md-5">
          <label for="inputPassword4">Complemento *</label>
          <input type="text" class="form-control" id="ref" name="ref" placeholder="Referência" required>
        </div>

        <div class="form-group col-md-4">
          <label for="inputEmail4">CPF</label>
          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="###.###.###-##" 
          onkeyup="mascara('###.###.###-##',this,event,true)" maxlength="14" onblur="valida()" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4">RG</label>
          <input type="text" class="form-control" id="rg" name="rg" placeholder="##.###.###-#" 
          onkeyup="mascara('##.###.###-#',this,event,true)" maxlength="12" required>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Sexo</label>
          <select id="inputState" class="form-control">
            <option selected>Masculino</option>
            <option>Feminino</option>
          </select>
        </div>

        
        <br>