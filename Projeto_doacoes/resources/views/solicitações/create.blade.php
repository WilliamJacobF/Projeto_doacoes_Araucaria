<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="icon" href="favicond.svg" type="image/png">
    <style>
      body {
      font-family: "Poppins", sans-serif;
      background: #f5f6fa;
      display: flex;
      height: 100vh;
      }

      form {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
      max-height: 500px;
      margin: 40px auto;
      }

      label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
      color: #555;
      }

      input, textarea, select {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: 0.3s;
      }

      input:focus, textarea:focus, select:focus {
      border-color: #6c63ff;
      box-shadow: 0 0 5px rgba(108,99,255,0.3);
      outline: none;
      }

      button {
      width: 100%;
      padding: 12px;
      background: #6c63ff;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
      }

      button:hover {
      background: #5a52e0;
      }

    </style>
</head>
<body>
<a href="{{ route('Doações-index') }}">Voltar</a>
<form action="{{ route('solicitações-store') }}" method="POST">
    @csrf
  <h1>Faça sua solicitação</h1>
    <label for="descrição" class="form-label">Descrição</label>
    <input type="text" name="descrição" class="form-control">
  
    <label for="doacao_requisitada" class="form-label">Doação Requisitada</label>
    <input type="text" name="doacao_requisitada" class="form-control">
  
    <label for="localizacao" class="form-label">Localização</label>
    <input type="text" name="localizacao" class="form-control">
  
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control">
  
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control">
 
  <button type="submit" class="btn btn-primary">Enviar</button>
  <br>
  <br>
</form>
</body>
</html>