<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale =1.">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" type="text/css" href="./css/flebox.css">
    <title>FLEXBOX</title>
  </head>
  <body>
    <header>
      <h1>Pagina com Flexbox</h1>
    </header>
      <section>
        <article>
          <h2>Introdução</h2>

          <p>A linguagem SQL é um padrão de banco de dados. Isto decorre da sua simplicidade e facilidade de uso. Ela se diferencia de outras linguagens de consulta a banco de dados no sentido em que uma consulta SQL especifica a forma do resultado e não o caminho para chegar a ele. Ela é uma linguagem declarativa em oposição a outras linguagens procedurais. Isto reduz o ciclo de aprendizado daqueles que se iniciam na linguagem. </p>

        </article>
      
      </section>
    <section>
      <article>
        <h2>Insert</h2>

        <p>O INSERT é responsável pela inserção de uma ou mais linhas em uma tabela, além de permitir que as colunas de destino sejam informadas em qualquer ordem em que forem declaradas.</p>

        <p>exemplo: INSERT INTO produtos (id, descricao, preco, categoria) VALUES (4, 'Resma Ofício c/500 folhas', 17.50, 2);</p>
      </article>

      <article>
        <h2>Update</h2>

        <p>O UPDATE permite a alteração de um ou mais dados armazenados em uma tabela.</p>

        <p>exemplo: UPDATE produtos SET descrição = 'Lápis preto (unid)' WHERE id = 2</p>
      </article>

      <article>
        <h2>Delete</h2>

        <p>O DELETE permite que uma ou mais linhas sejam excluídas de uma tabela do banco de dados.</p>

        <p>exemplo: DELETE FROM produtos WHERE id = 3</p>
      </article>
    </section>
  </body>
</html>