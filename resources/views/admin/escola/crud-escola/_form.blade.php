<div class="form-group row">
             
             <div class="col-sm-3 mb-3 mb-sm-0">
         <label class=newbtn>
                      <img id="blah" src="http://placehold.it/120x120" >
                      <input id="pic" class='pis' onchange="readURL(this);" type="file" name="img_escola" required>
                  </label>
        </div>
                  <div class="col-sm-9 mb-3 mb-sm-0">
          <label for="inputPassword4">Nome da Instituição *</label>
            <input type="text" class="form-control " id="Nome" name="nm_escola" placeholder="Nome da Instituição" required>
        <br>
        
        <textarea type="text" class="form-control " id="desc" name="desc_escola" placeholder="Descrição da Escola"></textarea>
        <br>
        <select id="inputState" class="form-control" name="tipo_escola" required>
          <option selected>Selecione uma Opção</option>
          <option>Escola Estadual</option>
          <option>Escola Municipal</option>
          <option>Escola Técnica</option>
          </select>
        
                  </div>
        
                </div>
              
      
       <div class="form-group row">
       
                   <div class="col-sm-8 mb-3 mb-sm-0">
                     <label for="inputPassword4">Email *</label>
                       <input type="email" class="form-control " id="email" name="email_escola" placeholder="Email" required>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                         <label for="inputPassword4">Senha *</label>
                          <input type="password" class="form-control " id="senha" name="senha_escola" placeholder="Senha" required>
                        </div>
                      
                   
               </div>
       
      
    
             
              <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
            <label for="inputPassword4">Telefone *</label>
                          <input type="tel" class="form-control " id="Telefone" name="tel_escola" placeholder="(##)####.####" 
          onkeyup="mascara('(##)####.####',this,event,true)" maxlength="13" required >
                        </div>
                        <div class="col-sm-4">
            <label for="inputPassword4">CNPJ</label>
                          <input type="text" class="form-control " id="cnpj" placeholder="CNPJ_escola">
                        </div>
          <div class="col-sm-4">
            <label for="inputPassword4">CEP *</label>
                          <input type="text" class="form-control " id="cep_escola" name="cep_escola" id="cep_escola" size="10" maxlength="9" 
            onkeyup="mascara('#####-###',this,event,true)"
            placeholder="CEP" onblur="pesquisacep(this.value);" required>
                        </div>
              </div>
      
      <div class="form-group row">
      
        <div class="form-group col-md-6">
        <label for="inputPassword4">Cidade *</label>
        <input type="text" class="form-control disabled" name="cidade_escola" id="cidade_escola" placeholder="Cidade" readonly>
      </div>

      <div class="form-group col-md-6">
        <label for="inputPassword4">Bairro *</label>
        <input type="text" class="form-control disabled" name="bairro_escola" id="bairro_escola" placeholder="Bairro" readonly>
      </div>
      
      <div class="form-group col-md-10">
        <label for="inputPassword4">Endereço *</label>
        <input type="text" class="form-control disabled" name="end_escola" id="rua_escola" placeholder="Endereço" readonly>
      </div>
      
      <div class="form-group col-md-2">
        <label for="inputPassword4">Número *</label>
        <input type="number" class="form-control disabled" id="num_escola" name="num_escola" onblur="mudar()" placeholder="000" required>
      </div>
      
      <div class="form-group col-md-12">
        <label for="inputPassword4">Complemento *</label>
        <input type="text" class="form-control" id="ref_escola" name="ref_escola" placeholder="Referência" required>
      </div>
              
    </div>




