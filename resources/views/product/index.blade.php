@extends('page.estrutura')
@section('content')

<div class="mb-3">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
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
      </tr>  
      @endforeach   
    </tbody>
  </table>
</div>


@endsection