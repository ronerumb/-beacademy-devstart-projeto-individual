@extends('page.estrutura')
@section('content')
@if($errors->any())
  @foreach($errors->all() as $erro)
  {{$erro}}
  @endforeach
  @endif

<form method="post" action="/cadastro">
    @csrf
    <div class="form-group mb-3">
      <label for="name">Digite o nome do produto</label>
      <input type="text" class="form-control" id="name" name="name"  placeholder="Digite o nome">      
    </div>

    <div class="form-group mb-3">
        <label for="description">Digite a Descrição</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Digite a descrição">      
      </div>

      
    <div class="form-group mb-3">
        <label for="price">Digite o preço</label>
        <input type="text" class="form-control" id="price" name="price"  placeholder="Digite o preço">      
      </div>

           
    <div class="form-group mb-3">
        <label for="quantity">Digite a quantidade no estoque</label>
        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Digite o preço">      
      </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection