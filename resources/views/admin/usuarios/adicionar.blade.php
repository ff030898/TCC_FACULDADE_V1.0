
<div class="container">
    <h3 class="center">Adicionar Usuarios</h3>
    <div class="row">
      <form class="" action="{{route('adm.usuario.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.usuarios._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>





