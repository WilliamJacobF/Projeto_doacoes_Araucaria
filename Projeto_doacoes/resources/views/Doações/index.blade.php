<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações</title>
    <link rel="icon" href="favicond.svg" type="image/png">
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f4f6fb;
      color: #333;
      }

      header {
        background: linear-gradient(135deg, #4e54c8, #8f94fb);
      color: white;
      text-align: center;
      padding: 50px 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      }
      
      .titulo {
        font-size: 3rem;
      margin-bottom: 10px;
      }

      .subtitulo {
        font-size: 1.1rem;
      opacity: 0.9;

      }
      main {
        max-width: 1200px;
      margin: 40px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      overflow: hidden;
      }

      table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
    }

    th, td {
      padding: 15px;
      text-align: left;
      vertical-align: top;
      border-bottom: 1px solid #eee;
    }

    th {
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    tbody tr:hover {
      background-color: #f0f4ff;
      transition: background 0.3s;
    }

    td:first-child, th:first-child {
      text-align: center;
      font-weight: bold;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
      color: #777;
    }

    @media (max-width: 768px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        display: none;
      }

      td {
        border: none;
        position: relative;
        padding: 10px 15px;
      }

      td::before {
        content: attr(data-label);
        font-weight: bold;
        color: #555;
        display: block;
        margin-bottom: 5px;
      }
    }

    .btn {
    background: transparent;
    color: #0066ffff;
    border: 2px solid #0066ffff;
    padding: 10px 18px;
    border-radius: 6px;
    transition: all 0.3s ease;
    cursor: pointer;
    }

    .btn:hover {
    background: #0051ffff;
    color: white;
    }

    .solicita{
    height: 100px;
    margin-left: 100px;
    }
    </style>
</head>
<body>
  <header>
    <h1 class="titulo">Doações Araucária</h1>
    <h2 class="subtitulo">Projeto de extensão em Engenharia de Software voltado à divulgação de intituições beneficientes</h2>
  </header>
  <main>
  <h1 class="list"><ul><li>Listagem de Intituições/Ongs</li></ul></h1>
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
@foreach($doacoes as $doacao)
    <tr>
        <th>{{ $doacao->id }}</th>
        <td>{{ $doacao->descrição }}</td>
        <td>{{ $doacao->doacao_requisitada }}</td>
        <td>{{ $doacao->localizacao }}</td>
        <td>{{ $doacao->telefone }}</td>
        <td>{{ $doacao->email }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</main>
<div class="solicita">
<h1>Como Fazer uma Solicitação?</h1>
<p>Para aqueles que querem solicitar uma doação ou o cadrastro de uma nova ong/instituição beneficiente. Clique no botão abaixo para a pagina do formulario.</p>
<br>
<a href="{{ route('solicitações-create') }}" class="btn">Fazer Solicitação</a>
</div>
</body>
</html>