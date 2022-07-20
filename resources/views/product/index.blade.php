@extends('page.estrutura')
@section('content')

<div class="mb-3" style="margin-top:10px">
<a href={{route('product.create') }}> <button type="button" class="btn btn-primary">Cadastrar novo produto</button></a>
</div>

<div class="mb-3">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['description']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['quantity']}}</td>
        <td>  <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary text-white">Editar</a>
          <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger text-white">Excluir</a>
        </td>

      </tr>  
      @endforeach   
    </tbody>
  </table>
</div>



@endsection