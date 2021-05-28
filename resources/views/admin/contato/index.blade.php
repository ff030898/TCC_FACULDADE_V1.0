<div class="container">
@foreach($registros as $registro)
            
<p>Nome: {{ $registro->nome }}</p>
<p>Telefone: {{ $registro->tel }}</p>
             
@endforeach
  </div>