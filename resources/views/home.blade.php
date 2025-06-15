
    <style>
.container{
    display:flex;
}
        .card{
         padding:1rem;
         margin:0.6rem;
         display:flex;
         justify-content:center;
        }
    </style>
 
    
 @extends('template')
@section('titulo', 'Sobre')
@section('conteudo')


    <h1 class="text-3xl font-bold text-center text-black">Confira nossos principais conteudos!</h1>
<div class="container">
@foreach ($cards as $h)

<div class="card">
<img class="card-img-top" src="{{$h['imagem']}}" alt="Card image" style="width:10rem">
    <div class="card-body">
        <h4 class="card-title"><p>{{$h['nome']}}</p></h4>
        <p class="card-text">{{$h['texto']}}</p>
       <h5 class="card-title"><p>{{$h['preco']}}</p></h5>
       <button class="btn btn-danger"> Saiba mais</button>
    </div>
  </div>
@endforeach
    </div>


@endsection


