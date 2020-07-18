@include('templates.template')
<body>
    <h1>Novo produto</h1>
  <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}                        
    <input type="text" name="name" placeholder="nome">
    <input type="text" name="description" placeholder="Descrição">
    <input type="number" name="quantity" placeholder="Quantidade" >
    <input type="text" name="price" placeholder="Preço">
    <button type="reset" class="btn btn-default">
    Limpar
    </button>
    <button type="submit">
    Cadastrar
    </button>
  </form>
</body>
</html>