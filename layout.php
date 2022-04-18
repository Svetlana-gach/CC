<html>
  <head>
    <title><?=$this->e($title)?></title>
  </head>
  <body>
  	<nav>
  		<ul>
  			<li><a href="/">Домашняя страница</a></li>
  			<li><a href="/about">Про нас</a></li>
  		</ul>
  	</nav>

    <?=$this->section('content')?>
  </body>
</html>