@extends('page.estrutura')
@section('content')

<form method="post" action="{{ route('product.edit', $product->id) }}">
    @csrf
    <div class="form-group mb-3">
      <label for="name">Digite o nome do produto</label>
      <input type="text" class="form-control" id="name" name="name" value={{$product->name}}  placeholder="Digite o nome">      
    </div>

    <div class="form-group mb-3">
        <label for="description">Digite a Descrição</label>
        <input type="text" class="form-control" id="description" value={{$product->description}}  name="description" placeholder="Digite a descrição">      
      </div>

      
    <div class="form-group mb-3">
        <label for="price">Digite o preço</label>
        <input type="text" class="form-control" id="price" name="price" value={{$product->price}}  placeholder="Digite o preço">      
      </div>

           
    <div class="form-group mb-3">
        <label for="quantity">Digite a quantidade no estoque</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value={{$product->quantity}}  placeholder="Digite o preço">      
      </div>
   
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>

@endsection