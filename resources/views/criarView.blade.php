<form method="post" action="{{route('rota.store')}}" enctype="multipart/form-data">
      {{ csrf_field() }}                        
      <input type="text" name="name" placeholder="nome">
      <input type="text" name="description" placeholder="description">	
      <button type="submit">
      Cadastrar
      </button>   
</form>