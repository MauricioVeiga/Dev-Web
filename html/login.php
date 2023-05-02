<!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/style/reset.css">
      <link rel="stylesheet" href="../style/styleLogin.css">
      <link rel="stylesheet" href="../style/footer.css">
      <link rel="stylesheet" href="../style/styleCabecalho.css">
  
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <title>Login</title>
  </head>

  <body>
    <nav>
      <input type="checkbox" name="" id="check">
      <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i>
      </label>

      <ul>
        <li><a  href="../index.html">Home</a></li>
        <li><a href="../html/produtos.html">Bicicletas</a></li>
        <li><a href="../html/acessorios.html">Acessórios</a></li>
        <li><a class="active" href="../html/login.html">Login</a></li>
      </ul>
      <img class="imagem" src="../imagens/logo-fundo-transparente_resized.png" alt="">

    </nav>
    <div class="geral">
      <div class="sobre-grupo-sete">
        <h2>Sobre o grupo 7</h2>
        <p>
          Parte do grupo 7 entrou na faculdade UnirRuy durante o primeiro período de 2022, e um calouro do primeiro período de 2023, todos no curso de Ciências da Computação. Fissurados por tecnologia, essa galerinha do barulho resolveu se juntar na maioria dos trabalhos para passar pela faculdade como uma equipe para agitar os dias de aula deixando sua marca de forma autêntica.
        </p>
        <ul class="lista">
          <li>
            <a href="https://www.linkedin.com/in/arthur-oliveira-487890241/">
              <i class="fa fa-linkedin">   Arthur Santos |   Vulgo: Rato</i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-linkedin">   Esther Brito |   Vulgo: EsthéRica</i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-linkedin">   Luís Tavares |   Vulgo: Tabaco</i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-linkedin">   Luiz Barreto |    Vulgo: HéteroTopzeira</i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/maur%C3%ADciov/">
              <i class="fa fa-linkedin">   Maurico Veiga |   Vulgo: Mau Mau </i>
            </a>
          </li>
        </ul>
      </div>
      
      <div class="formulario-login">
        <form>
          <h1>Login na RatoBikeStore</h1>
          <div class="login">
            <label for="email">Email:
              <input class="input" type="email" id="email" name="email" required>
            </label>

            <label for="senha">Senha:
              <input class="input" type="password" id="senha" name="senha" required>
            </label>
          </div>
          <div class="enviar-cadastro">
            <button class="btn-login" type="submit">Login</button>
            <a class="cadastro" href="../cadastro.php">Cadastre-se</a> 
          </div>
        </form>
      </div>
  </body>
</html>