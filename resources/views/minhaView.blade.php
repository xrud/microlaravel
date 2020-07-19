<a href="rota/create"> <button>Adcionar novo</button></a>
<hr>
@foreach($consulta as $consulta)
{{$consulta->name}} -- {{$consulta->description}}
<a href="{{route('rota.edit', $consulta->id)}}">Editar</a>
<form action="{{ route('rota.destroy',$consulta->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button>Apagar</button>
</form>
<br>
@endforeach