<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário para teste com codeception</title>
  <style media="screen">
    form{
      padding: 20px;
    }
  </style>
</head>
<body>
  <header style="text-align:center;">
    <h1>Formulário</h1>
  </header>
  <section style="padding:20px;text-align:center;">
    <form class="form" action="response.php?name=" method="get">
      <label>Nome: </label>
      <input type="text" name="name" value="" placeholder="Escreva seu nome." required>
      <br>
      <br>
      <label>Idade</label>
      <input type="number" name="idade" value="" placeholder="Escreva sua idade" required>
      <br>
      <br>
      <label>E-mail</label>
      <input type="email" name="email" value="" placeholder="Escreva seu email" required>
      <br>
      <br>
      <button type="submit" name="button">Enviar</button>
    </form>
  </section>
</body>
</html>
