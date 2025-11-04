<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        width: 100%;
        border-collapse: collapse;
        }

        th, td {
        border: 1px solid #333;
        padding: 8px;
        text-align: left;
        }

        th {
        background-color: #f2f2f2;

        }
        h1 {
          text-align: center;
          font-family: Arial, sans-serif;
          color: #333;
        }
    </style>
</head>
<body>
    <h1>solicitações</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th scope="col">Doação requisitada</th>
      <th scope="col">Localização</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
@foreach($pedidos as $pedido)
    <tr>
        <th>{{ $pedido->id }}</th>
        <td>{{ $pedido->descrição }}</td>
        <td>{{ $pedido->doacao_requisitada }}</td>
        <td>{{ $pedido->localizacao }}</td>
        <td>{{ $pedido->telefone }}</td>
        <td>{{ $pedido->email }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</html>