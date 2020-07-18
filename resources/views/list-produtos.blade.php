@include('templates.template')
<body>
  <h1>Produtos </h1>
  <h3><a href="product/create"> <button>Adcionar novo</button> </a></h3>
  @foreach($produtos as $consulta)
  <b>ID:</b>          {{$consulta->id}}          -- 
  <b>Nome :</b>       {{$consulta->name}}        -- 
  <b>Descrição:</b>   {{$consulta->description}} -- 
  <b>Quantidade:</b>  {{$consulta->quantity}} -- 
  <b>Preço:</b> R$    {{number_format($consulta->price, 2,',','.')}} -- 
  <a href="{{route('product.edit', $consulta->id)}}">Editar</a>
  <form action="{{ route('product.destroy',$consulta->id) }}" method="POST">
    <!-- Confirmação de delete:  <form action=".... onsubmit="return confirm('Tem certeza que deseja excluir?'); > -->
    @csrf
    @method('DELETE')
    <button>Apagar</button> 
  </form>
  <p>
    @endforeach
</body>
</html>