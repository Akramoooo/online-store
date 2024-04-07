<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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