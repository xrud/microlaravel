@include('templates.template')
<body>
  <h1><b>Produtos</b></h1>
  <h4 id="center"><b>PRODUTOS CADASTRADOS ({{$total}}) <a href="product/create"><button>Novo</button></a></b></h4>
  <br>
  <div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th id="center">Código</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th id="center">Quantidade</th>
        <th>Preço</th>
        <th id="center">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $produto)
      <tr>
        <td id="center">{{$produto->id}}</td>
        <td title="Nome">{{$produto->name}}</td>
        <td title="Descrição">{{$produto->description}}</td>
        <td title="Quantidade" id="center">{{$produto->quantity}}</td>
        <td title="Preço">R$ {{number_format($produto->price, 2,',','.')}}</td>
        <td id="center">
        <td id="center">
          <a href="{{route('product.edit', $produto->id)}}" 
            data-toggle="tooltip" 
            data-placement="top"
            title="Alterar"><i class="fa fa-pencil"></i></a>
          &nbsp;
          <form style="display: inline-block;" method="POST" 
            action="{{route('product.destroy', $produto->id)}}"                                                        
            data-toggle="tooltip" data-placement="top"
            title="Excluir" 
            onsubmit="return confirm('Confirma exclusão?')">
            {{method_field('DELETE')}}{{ csrf_field() }}    
            <button type="submit" style="background-color: #fff">
            <a><i class="fa fa-trash-o"></i></a>                                                    
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <h1>Rotas uteis</h1>

  <table>
      <tr>
          <td>product/5/edit</td>
      </tr>

      <tr>
          <td>product/create</td>
      </tr>

      <tr>
          <td>Rota3</td>
      </tr>
  </table>

<pre><code class="html"><td>CÓDIGO</td></code></pre>


</body>
</html>