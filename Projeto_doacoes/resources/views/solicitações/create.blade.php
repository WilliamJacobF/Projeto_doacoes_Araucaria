<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>
      main {
      max-width: 1400px;
      margin: 40px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      overflow: hidden;
      }
    </style>
</head>
<body>
    <h1>Enviar solicitação</h1>
<hr>
<main>
<form action="{{ route('solicitações-store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="descrição" class="form-label">Descrição</label>
    <input type="text" name="descrição" class="form-control">
  </div>
  <div class="mb-3">
    <label for="doacao_requisitada" class="form-label">Doação Requisitada</label>
    <input type="text" name="doacao_requisitada" class="form-control">
  </div>
  <div class="mb-3">
    <label for="localizacao" class="form-label">Localização</label>
    <input type="text" name="localizacao" class="form-control">
  </div>
  <div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</main>
<br>
</body>
</html>