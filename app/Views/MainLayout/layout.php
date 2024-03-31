<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <title><?=$this->e($title)?></title>
  </head>


  <header>
    <?=$this->insert('MainLayout/header')?>
  </header>



  <body>
    <?=$this->section('content')?>
  </body>



  <footer>
    <?=$this->insert('MainLayout/footer')?>
  </footer>

</html>