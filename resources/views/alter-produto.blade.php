@include('templates.template')
<body>
  <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
  <br> 
  <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
    {!! method_field('put') !!}
    {{ csrf_field() }}
    <input type="text" name="name" value="{{$product->name}}">
    <input type="text" name="description" value="{{$product->description}}">
    <input type="number" name="quantity" value="{{$product->quantity}}" >
    <input type="text" name="price" value="{{$product->price}}">
    <button type="reset" class="btn btn-default">
    Limpar
    </button>
    <button type="submit">
    Cadastrar
    </button>
  </form>
</body>
</html>