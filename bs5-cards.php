<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Cards</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!---https://codepen.io/jca2016satx/pen/MWQqWmZ--->
  <!---https://www.w3schools.com/bootstrap5/bootstrap_cards.php--->
  <!---https://getbootstrap.com/docs/5.0/components/card/--->
</head>
<body>

<section class="w3schools">
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Bootstrap 5 Cards</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<!---
Cards

A card in Bootstrap 5 is a bordered box with some padding around its content. It includes options for headers, footers, content, colors, etc.
--->
  
  <div class="container mt-3">
  <h2>Basic Card</h2>
  <div class="card">
    <div class="card-body">Basic card</div>
  </div>
</div>

<!---
Header and Footer

The .card-header class adds a heading to the card and the .card-footer class adds a footer to the card:

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div>
  <div class="card-footer">Footer</div>
</div>
--->
  
<div class="container mt-3">
  <h2>Card Header and Footer</h2>
  <div class="card">
    <div class="card-header">Header</div>
    <div class="card-body">Content</div> 
    <div class="card-footer">Footer</div>
  </div>
</div>

  
<!---
Contextual Cards

To add a background color the card, use contextual classes (.bg-primary, .bg-success, .bg-info, .bg-warning, .bg-danger, .bg-secondary, .bg-dark and .bg-light.
--->
  
<div class="container mt-3">
  <h2>Cards with Contextual Classes</h2>
  <div class="card">
    <div class="card-body">Basic card</div>
  </div>
  <br>
  <div class="card bg-primary text-white">
    <div class="card-body">Primary card</div>
  </div>
  <br>
  <div class="card bg-success text-white">
    <div class="card-body">Success card</div>
  </div>
  <br>
  <div class="card bg-info text-white">
    <div class="card-body">Info card</div>
  </div>
  <br>
  <div class="card bg-warning text-white">
    <div class="card-body">Warning card</div>
  </div>
  <br>
  <div class="card bg-danger text-white">
    <div class="card-body">Danger card</div>
  </div>
  <br>
  <div class="card bg-secondary text-white">
    <div class="card-body">Secondary card</div>
  </div>
  <br>
  <div class="card bg-dark text-white">
    <div class="card-body">Dark card</div>
  </div>
  <br>
  <div class="card bg-light text-dark">
    <div class="card-body">Light card</div>
  </div>
</div>
  
  
<!---
Titles, text, and links

Use .card-title to add card titles to any heading element. The .card-text class is used to remove bottom margins for a <p> element if it is the last child (or the only one) inside .card-body. The .card-link class adds a blue color to any link, and a hover effect.

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some example text. Some example text.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
--->

<div class="container mt-3">
  <h2>Card titles, text, and links</h2>
  <p>Use .card-title to add card titles to any heading element. The .card-text class is used to remove bottom margins for a p element if it is the last child (or the only one) in card-body. The .card-link class adds a blue color to any link, and a hover effect.</p>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">Some example text. Some example text.</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>
  
  
<!---
Card Images

Add .card-img-top or .card-img-bottom to an <img> to place the image at the top or at the bottom inside the card. Note that we have added the image outside of the .card-body to span the entire width:

<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
--->

<div class="container mt-3">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="	https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  <p>Image at the bottom (card-img-bottom):</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="https://www.w3schools.com/bootstrap5/img_avatar5.png" alt="Card image" style="width:100%">
  </div>
</div>

  
<!---
Card Image Overlays

Turn an image into a card background and use .card-img-overlay to add text on top of the image:

<div class="card" style="width:500px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
--->
  

<div class="container mt-3">
  <h2>Card Image Overlay</h2>
  <p>Turn an image into a card background and use .card-img-overlay to overlay the card's text:</p>
  <div class="card img-fluid" style="width:500px">
    <img class="card-img-top" src="	https://www.w3schools.com/bootstrap5/img_avatar3.png" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
</section>

<!---
Kitchen sink

Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.
--->

<div class="card" style="width: 18rem;">
  <img src="https://www.w3schools.com/bootstrap5/img_avatar3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
  
  <div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>
</body>
</html>
