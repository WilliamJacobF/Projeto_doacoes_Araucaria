<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações</title>
    <style>
      .titulo {
        text-align: center;
        font-family: "Montserrat", sans-serif;
        font-size: 60px;
        background: linear-gradient(90deg, #6a11cb, #2575fc);
        -webkit-background-clip: text;
        color: transparent;
        margin: 5px;
      }
      .subtitulo {
        text-align: center;
        font-family: "Poppins", sans-serif;
        color: #000000ff;
        letter-spacing: 1px;
        margin-top: 30;
      }

      table {
      width: 100%;
      margin: 20px auto;
      border-collapse: collapse;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      }

      th {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
        color: white;
        padding: 10px;
        letter-spacing: 1px;
      }

      td {
        padding: 10px;
        border-bottom: 1px solid #000000ff;
        border: 1px solid #000000ff;
      }

      tr:nth-child(even) {
        background-color: #fafafa;
      }

      tr:hover {
        background-color: #e3f2fd;
      }
    </style>
</head>
<body>
    <h1 class="titulo">Doações Araucária</h1>
    <h2 class="subtitulo">Projeto de extensão - Engenharia de Software</h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th scope="col">Localização</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
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
    </tr>
@endforeach
  </tbody>
</table>
</body>
</html>