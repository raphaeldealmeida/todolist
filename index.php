<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>TODO LIST</h1>
    <form action="/salvar" method="post">
        <input type="text" name="texto" />
        <button type="submit">Salvar</button>
    </form>

    <ul>
        <?php //var_dump($_SESSION['tasks']); ?>
        <?php foreach ($_SESSION['tasks'] as $id => $task): ?>
        <li class="<?=(($task['done'])? 'text-muted': '' )?>">
            <input type="checkbox" />
            <a href="/done/<?= $id ?>">OK</a>
            <?= $task['texto'] ?> 
            <a href="/excluir/<?= $id ?>">X</a>
        </li>
        <?php endforeach; ?>
    </ul>  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>