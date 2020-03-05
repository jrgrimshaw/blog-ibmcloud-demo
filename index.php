<html>

<head>
  <title>Shop</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>Marina's Shop</h1>

    <nav>
      <a href="">Home</a> | <a href="">Products</a> | <a href="">Cart</a>
    </nav>

    <div class="posts">
      <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="post">
          <img src="tea-image.jpg" alt="">
          <p><strong>Green Tea Set</strong></p>
          <p><em>£49.99</em></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, libero odio. Ex officia dicta id quo eaque aut harum cumque optio iste itaque nemo maiores similique, eos debitis exercitationem consectetur modi amet, eveniet provident corporis neque repellat dolorum laudantium?</p>
        </div>
      <?php endfor; ?>
    </div>
  </div>

</body>

</html>