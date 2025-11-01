<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações</title>
</head>
<body>
    <h1>quelquer titulo</h1>
<hr>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th scope="col">Localização</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Outro Contato</th>
    </tr>
  </thead>
  <tbody>
@foreach($doacoes as $doacao)
    <tr>
        <th>{{ $doacao->id }}</th>
        <td>{{ $doacao->descrição }}</td>
        <td>{{ $doacao->localizacao }}</td>
        <td>{{ $doacao->telefone }}</td>
        <td>{{ $doacao->email }}</td>
        <td>{{ $doacao->outro_contato }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</html>