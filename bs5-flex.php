<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap Page</h1>
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
Bootstrap 5 Notes

https://www.w3schools.com/bootstrap5/bootstrap_flex.php

To create a flexbox container and to transform direct children into flex items, use the d-flex class:

<div class="d-flex p-3 bg-secondary text-white">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Flex</h2>
  <p>To create a flexbox container and transform direct children into flex items, use the d-flex class:</p>
  <div class="d-flex p-3 bg-secondary text-white">  
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
To create an inline flexbox container, use the d-inline-flex class:

<div class="d-inline-flex p-3 bg-secondary text-white">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Inline Flex</h2>
  <p>To create an inline flexbox container, use the d-inline-flex class:</p>
  <div class="d-inline-flex p-3 bg-secondary text-white">  
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Use .flex-row to display the flex items horizontally (side by side). This is default.
Tip: Use .flex-row-reverse to right-align the horizontal direction:

<div class="d-flex flex-row bg-secondary">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>

<div class="d-flex flex-row-reverse bg-secondary">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Horizontal Direction</h2>
  <p>Use .flex-row to make the flex items appear side by side (default):</p>
  <div class="d-flex flex-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <p>Use .flex-row-reverse to right-align the direction:</p>
  <div class="d-flex flex-row-reverse bg-secondary">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Use .flex-column to display the flex items vertically (on top of each other), or .flex-column-reverse to reverse the vertical direction:

<div class="d-flex flex-column">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>

<div class="d-flex flex-column-reverse">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>

--->
<div class="container mt-3">
  <h2>Vertical Direction</h2>
  <p>Use .flex-column to display the flex items vertically (on top of each other):</p>
  <div class="d-flex flex-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <p>Use .flex-column-reverse to reverse the vertical direction:</p>
  <div class="d-flex flex-column-reverse">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Use the .justify-content-* classes to change the alignment of flex items. Valid classes are start (default), end, center, between or around:
<div class="d-flex justify-content-start">Flex item<div>
<div class="d-flex justify-content-end">Flex item</div>
<div class="d-flex justify-content-center">Flex item</div>
<div class="d-flex justify-content-between">Flex item</div>
<div class="d-flex justify-content-around">Flex item</div>
--->
<div class="container mt-3">
  <h2>Justify content</h2>
  <p>Use the .justify-content-* classes to change the alignment of flex items. Choose from start (default), end, center, between or around:</p>
  <div class="d-flex justify-content-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Use .flex-fill on flex items to force them into equal widths:

<div class="d-flex">
  <div class="p-2 bg-info flex-fill">Flex item 1</div>
  <div class="p-2 bg-warning flex-fill">Flex item 2</div>
  <div class="p-2 bg-primary flex-fill">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Fill / Equal Widths</h2>
  <p>Use .flex-fill on flex items to force them into equal widths:</p>
  <div class="d-flex mb-3">
    <div class="p-2 flex-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-fill bg-primary">Flex item 3</div>
  </div>
  <p>Example without .flex-fill:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Use .flex-grow-1 on a flex item to take up the rest of the space. In the example below, the first two flex items take up their necessary space, while the last item takes up the rest of the available space:

<div class="d-flex">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary flex-grow-1">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Grow</h2>
  <p>Use .flex-grow-1 on a flex item to take up the rest of the space:</p>
  <div class="d-flex mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 flex-grow-1 bg-primary">Flex item 3</div>
  </div>
  <p>Example without .flex-grow-1:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Change the visual order of a specific flex item(s) with the .order classes. Valid classes are from 0 to 5, where the lowest number has highest priority (order-1 is shown before order-2, etc..):

<div class="d-flex bg-secondary">
  <div class="p-2 bg-info order-3">Flex item 1</div>
  <div class="p-2 bg-warning order-2">Flex item 2</div>
  <div class="p-2 bg-primary order-1">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Order</h2>
  <p>Change the visual order of a specific flex item(s) with the .order classes. Valid classes are from 0 to 5:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-3 bg-info">Flex item 1</div>
    <div class="p-2 order-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-1 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Easily add auto margins to flex items with .ms-auto (push items to the right), or by using .me-auto (push items to the left):

<div class="d-flex bg-secondary">
  <div class="p-2 ms-auto bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 bg-primary">Flex item 3</div>
</div>

<div class="d-flex bg-secondary">
  <div class="p-2 bg-info">Flex item 1</div>
  <div class="p-2 bg-warning">Flex item 2</div>
  <div class="p-2 me-auto bg-primary">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Auto Margins</h2>
  <p>Easily add auto margins to flex items with .mr-auto (push items to the right), or by using .ml-auto (push items to the left):</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 ms-auto bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2  bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 me-auto bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Control how flex items wrap in a flex container with .flex-nowrap (default), .flex-wrap or .flex-wrap-reverse.

<div class="d-flex flex-wrap">..</div>

<div class="d-flex flex-wrap-reverse">..</div>

<div class="d-flex flex-nowrap">..</div>
--->
<div class="container mt-3">
  <h2>Wrap</h2>
  <p>Control how flex items wrap in a flex container with .flex-nowrap (default), .flex-wrap or .flex-wrap-reverse.</p>
  <p><code>.flex-wrap:</code></p>
  <div class="d-flex flex-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  <p><code>.flex-wrap-reverse:</code></p>
  <div class="d-flex flex-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  <p><code>.flex-nowrap:</code></p>
  <div class="d-flex flex-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
    <div class="p-2 border">Flex item 26</div>
    <div class="p-2 border">Flex item 27</div>
    <div class="p-2 border">Flex item 28</div>
    <div class="p-2 border">Flex item 29</div>
    <div class="p-2 border">Flex item 30</div>
    <div class="p-2 border">Flex item 31</div>
    <div class="p-2 border">Flex item 32</div>
    <div class="p-2 border">Flex item 33</div>
    <div class="p-2 border">Flex item 34</div>
    <div class="p-2 border">Flex item 35</div>
  </div>
  <br>
</div>



<!---
Control the vertical alignment of gathered flex items with the .align-content-* classes. Valid classes are .align-content-start (default), .align-content-end, .align-content-center, .align-content-between, .align-content-around and .align-content-stretch.

Note: These classes have no effect on single rows of flex items.

<div class="d-flex flex-wrap align-content-start">..</div>

<div class="d-flex flex-wrap align-content-end">..</div>

<div class="d-flex flex-wrap align-content-center">..</div>

<div class="d-flex flex-wrap align-content-around">..</div>

<div class="d-flex flex-wrap align-content-stretch">..</div>
--->
<div class="container mt-3">
  <h2>Align Content</h2>
  <p>Control the vertical alignment of gathered flex items with the .align-content-* classes.</p>
  <p><strong>Note:</strong> This example does not look good on a small devices. Also note that these classes have no effect on single rows of flex items.</p>
  <p>.align-content-start (default):</p>
  <div class="d-flex flex-wrap align-content-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  <p>.align-content-end:</p>
  <div class="d-flex flex-wrap align-content-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  <p>.align-content-center:</p>
  <div class="d-flex flex-wrap align-content-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  <p>.align-content-around:</p>
  <div class="d-flex flex-wrap align-content-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  <p>.align-content-stretch:</p>
  <div class="d-flex flex-wrap align-content-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
</div>


<!---
Control the vertical alignment of single rows of flex items with the .align-items-* classes. Valid classes are .align-items-start, .align-items-end, .align-items-center, .align-items-baseline, and .align-items-stretch (default).

<div class="d-flex align-items-start">..</div>

<div class="d-flex align-items-end">..</div>

<div class="d-flex align-items-center">..</div>

<div class="d-flex align-items-baseline">..</div>

<div class="d-flex align-items-stretch">..</div>
--->
<div class="container mt-3">
  <h2>Align Items</h2>
  <p>Control the vertical alignment of single rows of flex items with the .align-content-* classes.</p>
  <p>.align-items-start:</p>
  <div class="d-flex align-items-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-items-end:</p>
  <div class="d-flex align-items-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-items-center:</p>
  <div class="d-flex align-items-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-items-baseline:</p>
  <div class="d-flex align-items-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-items-stretch (default):</p>
  <div class="d-flex align-items-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
</div>


<!---
Control the vertical alignment of a specified flex item with the .align-self-* classes. Valid classes are .align-self-start, .align-self-end, .align-self-center, .align-self-baseline, and .align-self-stretch (default).

<div class="d-flex bg-light" style="height:150px">
  <div class="p-2 border">Flex item 1</div>
  <div class="p-2 border align-self-start">Flex item 2</div>
  <div class="p-2 border">Flex item 3</div>
</div>
--->
<div class="container mt-3">
  <h2>Align Self</h2>
  <p>Control the vertical alignment of a specific flex item with the .align-self-* classes.</p>
  <p>.align-self-start:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-self-end:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-self-center:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-self-baseline:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <p>.align-self-stretch (default):</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-stretch">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
</div>


<!---
Responsive Flex Classes

All flex classes comes with additional responsive classes, which makes it easy to set a specific flex class on a specific screen size.

The * symbol can be replaced with sm, md, lg, xl or xxl, which represents small, medium, large, xlarge and xxlarge screens.
--->

<!---
Flex Container
--->

<!---
.d-*-flex
	Creates a flexbox container for different screens
--->
<div class="container mt-3">
  <h2>Flex</h2>
  <p>To create a flexbox container, add the d-flex class. Use any of the d-*-flex classes to control WHEN the element should be a flex element on a specific screen width.</p>
  <p>Resize the browser window to see the effect.</p>
  <div class="d-flex bg-success">d-flex</div>
  <span class="d-sm-flex bg-success">d-sm-flex</span>
  <span class="d-md-flex bg-success">d-md-flex</span>
  <span class="d-lg-flex bg-success">d-lg-flex</span>
  <span class="d-xl-flex bg-success">d-xl-flex</span>
  <span class="d-xxl-flex bg-success">d-xxl-flex</span>
</div>



<!---
.d-*-inline-flex
	Creates an inline flexbox container for different screens
--->
<div class="container mt-3">
  <h2>Inline Flex</h2>
  <p>To create an inline flexbox container, add the d-inline-flex class. Use any of the d-*-inline-flex classes to control WHEN the element should be a flex element on a specific screen width.</p>
  <p>Resize the browser window to see the effect.</p>
  <div class="d-inline-flex bg-success">d-flex</div>
  <div class="d-sm-inline-flex bg-success">d-sm-flex</div>
  <div class="d-md-inline-flex bg-success">d-md-flex</div>
  <div class="d-lg-inline-flex bg-success">d-lg-flex</div>
  <div class="d-xl-inline-flex bg-success">d-xl-flex</div>
  <div class="d-xxl-inline-flex bg-success">d-xxl-flex</div>
</div>


<!---
Direction
--->


<!---
.flex-*-row
	Display flex items horizontally on different screens
--->
<div class="container mt-3">
  <h2>Horizontal Direction</h2>
  <p>Use .flex-row to make the flex items appear side by side (default).</p>
  <p>Use .flex-sm|md|lg|xl-row to achieve this on a specific screen size. Resize the browser window to see the effect</p>
  <p><code>flex-row:</code></p>
  <div class="d-flex flex-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-sm-row:</code></p>
  <div class="d-sm-flex flex-sm-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-md-row:</code></p>
  <div class="d-md-flex flex-md-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-lg-row:</code></p>
  <div class="d-lg-flex flex-lg-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-xl-row:</code></p>
  <div class="d-xl-flex flex-xl-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>flex-xxl-row:</code></p>
  <div class="d-xxl-flex flex-xxl-row bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.flex-*-row-reverse
	Display flex items horizontally, and right-aligned, on different screens
--->
<div class="container mt-3">
  <h2>Horizontal Direction</h2>
  <p>Use .flex-row to make the flex items appear side by side (default).</p>
  <p>Use .flex-row-reverse to right-align the direction, and use .flex-sm|md|lg|xl-row-reverse to right-align the direction on a specific screen size. Resize the browser window to see the effect.</p>
  <p><code>flex-row-reverse:</code></p>
  <div class="d-flex flex-row-reverse bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-sm-row-reverse:</code></p>
  <div class="d-flex flex-sm-row-reverse bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-md-row-reverse:</code></p>
  <div class="d-flex flex-md-row-reverse bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-lg-row-reverse:</code></p>
  <div class="d-flex flex-lg-row-reverse bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>flex-xl-row-reverse:</code></p>
  <div class="d-flex flex-xl-row-reverse bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>flex-xxl-row-reverse:</code></p>
  <div class="d-flex flex-xxl-row-reverse bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.flex-*-column
		Display flex items vertically on different screens
--->
<div class="container mt-3">
  <h2>Vertical Direction</h2>
  <p>Use .flex-column to display the flex items vertically (on top of each other).</p>
  <p>Use .flex-sm|md|lg|xl-column to achieve this on different screen sizes.</p>
  <p><code>.flex-column</code>:</p>
  <div class="d-flex flex-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-sm-column</code>:</p>
  <div class="d-flex flex-sm-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-md-column</code>:</p>
  <div class="d-flex flex-md-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.flex-lg-column</code>:</p>
  <div class="d-flex flex-lg-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.flex-xl-column</code>:</p>
  <div class="d-flex flex-xl-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.flex-xxl-column</code>:</p>
  <div class="d-flex flex-xxl-column mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.flex-*-column-reverse
	Display flex items vertically, with reversed order, on different screens screens
--->
<div class="container mt-3">
  <h2>Vertical Direction</h2>
  <p>Use .flex-column to display the flex items vertically (on top of each other).</p>
  <p>Use .flex-column-reverse to reverse the vertical direction, and use .flex-sm|md|lg|xl-column-reverse to achieve this on different screen sizes.</p>
  <p><code>.flex-column-reverse</code>:</p>
  <div class="d-flex flex-column-reverse mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-sm-column-reverse</code>:</p>
  <div class="d-flex flex-sm-column-reverse mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-md-column-reverse</code>:</p>
  <div class="d-flex flex-md-column-reverse mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.flex-lg-column-reverse</code>:</p>
  <div class="d-flex flex-lg-column-reverse mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.flex-xl-column-reverse</code>:</p>
  <div class="d-flex flex-xl-column-reverse mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-xxl-column-reverse</code>:</p>
  <div class="d-flex flex-xxl-column-reverse mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Justified Content
--->

<!---
.justify-content-*-start
	Display flex items from the start (left-aligned) on different screens
--->
<div class="container mt-3">
  <h2>Justify content start</h2>
  <p>Use the .justify-content-*-start to display flex items from the start (left-aligned) on different screen sizes. <strong>Note:</strong> left-aligned and from the start is default.</p>
  
  <p><code>.justify-content-start</code>:</p>
  <div class="d-flex justify-content-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-sm-start</code>:</p>
  <div class="d-flex justify-content-sm-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-md-start</code>:</p>
  <div class="d-flex justify-content-md-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-lg-start</code>:</p>
  <div class="d-flex justify-content-lg-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-xl-start</code>:</p>
  <div class="d-flex justify-content-xl-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-xxl-start</code>:</p>
  <div class="d-flex justify-content-xxl-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.justify-content-*-end
	Display flex items at the end (right-aligned) on different screens
--->
<div class="container mt-3">
  <h2>Justify content end</h2>
  <p>Use the .justify-content-*-end to display flex items at the end (right-aligned) on different screen sizes.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.justify-content-end</code>:</p>
  <div class="d-flex justify-content-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-sm-end</code>:</p>
  <div class="d-flex justify-content-sm-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-md-end</code>:</p>
  <div class="d-flex justify-content-md-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-lg-end</code>:</p>
  <div class="d-flex justify-content-lg-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-xl-end</code>:</p>
  <div class="d-flex justify-content-xl-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-xxl-end</code>:</p>
  <div class="d-flex justify-content-xxl-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.justify-content-*-center
	Display flex items in the center of a flex container on different screens
--->
<div class="container mt-3">
  <h2>Justify content center</h2>
  <p>Use the .justify-content-*-center to display flex items in the middle of a flex container on different screen sizes.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.justify-content-center</code>:</p>
  <div class="d-flex justify-content-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-sm-center</code>:</p>
  <div class="d-flex justify-content-sm-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-md-center</code>:</p>
  <div class="d-flex justify-content-md-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-lg-center</code>:</p>
  <div class="d-flex justify-content-lg-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-xl-center</code>:</p>
  <div class="d-flex justify-content-xl-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-xxl-center</code>:</p>
  <div class="d-flex justify-content-xxl-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.justify-content-*-between
	Display flex items in "between" on different screens
--->
<div class="container mt-3">
  <h2>Justify content "between"</h2>
  <p>Use the .justify-content-*-between to display flex items in "between" inside a flex container on different screen sizes.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.justify-content-between</code>:</p>
  <div class="d-flex justify-content-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-sm-between</code>:</p>
  <div class="d-flex justify-content-sm-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-md-between</code>:</p>
  <div class="d-flex justify-content-md-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-lg-between</code>:</p>
  <div class="d-flex justify-content-lg-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-xl-between</code>:</p>
  <div class="d-flex justify-content-xl-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-xxl-between</code>:</p>
  <div class="d-flex justify-content-xxl-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
.justify-content-*-around
	Display flex items "around" on different screens
--->
<div class="container mt-3">
  <h2>Justify content "around"</h2>
  <p>Use the .justify-content-*-around to display flex items "around" inside a flex container on different screen sizes.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.justify-content-around</code>:</p>
  <div class="d-flex justify-content-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-sm-around</code>:</p>
  <div class="d-flex justify-content-sm-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-md-around</code>:</p>
  <div class="d-flex justify-content-md-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-lg-around</code>:</p>
  <div class="d-flex justify-content-lg-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.justify-content-xl-around</code>:</p>
  <div class="d-flex justify-content-xl-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>

  <p><code>.justify-content-xxl-around</code>:</p>
  <div class="d-flex justify-content-xxl-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Fill / Equal Width
--->

<!---
.flex-*-fill
	Force flex items into equal widths on different screens
--->
<div class="container mt-3">
  <h2>Fill / Equal Widths</h2>
  <p>Use .flex-fill on flex items to force them into equal widths, and use .flex-*-fill to achieve this on different screen sizes.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.flex-fill</code>:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 flex-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-fill bg-primary">Flex item 3</div>
  </div>
  
  <p><code>.flex-sm-fill</code>:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 flex-sm-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-sm-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-sm-fill bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-md-fill</code>:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 flex-md-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-md-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-md-fill bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-lg-fill</code>:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 flex-lg-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-lg-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-lg-fill bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-xl-fill</code>:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 flex-xl-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-xl-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-xl-fill bg-primary">Flex item 3</div>
  </div>

  <p><code>.flex-xxl-fill</code>:</p>
  <div class="d-flex mb-3 bg-secondary">
    <div class="p-2 flex-xxl-fill bg-info">Flex item 1</div>
    <div class="p-2 flex-xxl-fill bg-warning">Flex item 2</div>
    <div class="p-2 flex-xxl-fill bg-primary">Flex item 3</div>
  </div>
</div>


<!---
Grow

.flex-*-grow-0
		Don't make the items grow on different screens
        
.flex-*-grow-1
	Make items grow on different screens
--->

<!---
Shrink

.flex-*-shrink-0
	Don't make the items shrink on diferent screens

.flex-*-shrink-1
		Make items shrink on different screens
--->



<!---
Order
--->

<!---
.order-*-0-12
	Change the order from 0 to 5 on small screens
--->
<div class="container mt-3">
  <h2>Order</h2>
  <p>Change the visual order of a specific flex item(s) with the .order classes. Valid classes are from 0 to 12.</p>
  <p>Use .order-sm|md|lg|xl-0-12 to achieve this effect on different screen sizes. The classes can also be combined to make an even more flexible layout.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.order</code>:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-3 bg-info">Flex item 1</div>
    <div class="p-2 order-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-1 bg-primary">Flex item 3</div>
  </div> 

  <p><code>.order-sm</code>:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-sm-3 bg-info">Flex item 1</div>
    <div class="p-2 order-sm-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-sm-1 bg-primary">Flex item 3</div>
  </div> 
  
  <p><code>.order-md</code>:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-md-3 bg-info">Flex item 1</div>
    <div class="p-2 order-md-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-md-1 bg-primary">Flex item 3</div>
  </div> 
  
  <p><code>.order-lg</code>:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-lg-3 bg-info">Flex item 1</div>
    <div class="p-2 order-lg-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-lg-1 bg-primary">Flex item 3</div>
  </div> 
  
  <p><code>.order-xl</code>:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-xl-3 bg-info">Flex item 1</div>
    <div class="p-2 order-xl-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-xl-1 bg-primary">Flex item 3</div>
  </div> 
  
  <p><code>.order-xxl</code>:</p>
  <div class="d-flex mb-3">
    <div class="p-2 order-xxl-3 bg-info">Flex item 1</div>
    <div class="p-2 order-xxl-2 bg-warning">Flex item 2</div>
    <div class="p-2 order-xxl-1 bg-primary">Flex item 3</div>
  </div> 
</div>


<!---
Wrap
--->

<!---
.flex-*-nowrap
		Don't wrap items on different screens
--->
<div class="container mt-3">
  <h2>Wrap</h2>
  <p>Control how flex items wrap in a flex container with .flex-nowrap (<strong>default</strong>), .flex-wrap or .flex-wrap-reverse.</p>
  <p>Use the .flex-nowrap class if you don't want the flex items to wrap.</p>
  
  <p><code>.flex-nowrap:</code></p>
  <div class="d-flex flex-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-sm-nowrap:</code></p>
  <div class="d-flex flex-sm-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-md-nowrap:</code></p>
  <div class="d-flex flex-md-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-lg-nowrap:</code></p>
  <div class="d-flex flex-lg-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-xl-nowrap:</code></p>
  <div class="d-flex flex-xl-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-xxl-nowrap:</code></p>
  <div class="d-flex flex-xxl-nowrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>


<!---
.flex-*-wrap
	Wrap items on different screens
--->
<div class="container mt-3">
  <h2>Wrap</h2>
  <p>Control how flex items wrap in a flex container with .flex-nowrap (<strong>default</strong>), .flex-wrap or .flex-wrap-reverse.</p>
  <p>Use the .flex-wrap class if you want the flex items to wrap. Resize the browser window to see the effect.</p>
  
  <p><code>.flex-wrap:</code></p>
  <div class="d-flex flex-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-sm-wrap:</code></p>
  <div class="d-flex flex-sm-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-md-wrap:</code></p>
  <div class="d-flex flex-md-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-lg-wrap:</code></p>
  <div class="d-flex flex-lg-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-xl-wrap:</code></p>
  <div class="d-flex flex-xl-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-xxl-wrap:</code></p>
  <div class="d-flex flex-xxl-wrap bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>


<!---
.flex-*-wrap-reverse
	Reverse the wrapping of items on different screens
--->
<div class="container mt-3">
  <h2>Wrap</h2>
  <p>Control how flex items wrap in a flex container with .flex-nowrap (<strong>default</strong>), .flex-wrap or .flex-wrap-reverse.</p>
  <p>Use the .flex-wrap-reverse class if you want the flex items to wrap, reversed. Resize the browser window to see the effect.</p>
  
  <p><code>.flex-wrap-reverse:</code></p>
  <div class="d-flex flex-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-sm-wrap-reverse:</code></p>
  <div class="d-flex flex-sm-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-md-wrap-reverse:</code></p>
  <div class="d-flex flex-md-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-lg-wrap-reverse:</code></p>
  <div class="d-flex flex-lg-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-xl-wrap-reverse:</code></p>
  <div class="d-flex flex-xl-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.flex-xxl-wrap-reverse:</code></p>
  <div class="d-flex flex-xxl-wrap-reverse bg-light">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13</div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>


<!---
Align Content
--->

<!---
.align-content-*-start
		Align gathered items from the start on different screens
--->
<div class="container mt-3">
  <h2>Align Content Start (default)</h2>
  <p>Use the .align-content-*-start classes to align gathered items from the start on different screens.</p>

  <p><code>.align-content-start</code>:</p>
  <div class="d-flex flex-wrap align-content-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-sm-start</code>:</p>
  <div class="d-flex flex-wrap align-content-sm-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-md-start</code>:</p>
  <div class="d-flex flex-wrap align-content-md-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-lg-start</code>:</p>
  <div class="d-flex flex-wrap align-content-lg-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xl-start</code>:</p>
  <div class="d-flex flex-wrap align-content-xl-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xxl-start</code>:</p>
  <div class="d-flex flex-wrap align-content-xxl-start bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>


<!---
.align-content-*-end
	Align gathered items at the end on different screens
--->
<div class="container mt-3">
  <h2>Align Content End</h2>
  <p>Use the .align-content-*-end classes to align gathered items at the end on different screens.</p>
  <p>Resize the browser window to see the effect.</p>
  
  <p><code>.align-content-end</code>:</p>
  <div class="d-flex flex-wrap align-content-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-sm-end</code>:</p>
  <div class="d-flex flex-wrap align-content-sm-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-md-end</code>:</p>
  <div class="d-flex flex-wrap align-content-md-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-lg-end</code>:</p>
  <div class="d-flex flex-wrap align-content-lg-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xl-end</code>:</p>
  <div class="d-flex flex-wrap align-content-xl-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xxl-end</code>:</p>
  <div class="d-flex flex-wrap align-content-xxl-end bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>


<!---
.align-content-*-center
	Align gathered items in the center on different screens
--->
<div class="container mt-3">
  <h2>Align Content Center</h2>
  <p>Use the .align-content-*-center classes to align gathered items in the center on different screens.</p>

  <p><code>.align-content-center</code>:</p>
  <div class="d-flex flex-wrap align-content-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-sm-center</code>:</p>
  <div class="d-flex flex-wrap align-content-sm-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-md-center</code>:</p>
  <div class="d-flex flex-wrap align-content-md-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-lg-center</code>:</p>
  <div class="d-flex flex-wrap align-content-lg-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xl-center</code>:</p>
  <div class="d-flex flex-wrap align-content-xl-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xxl-center</code>:</p>
  <div class="d-flex flex-wrap align-content-xxl-center bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>

<!---
.align-content-*-around
	Align gathered items "around" on different screens
--->
<div class="container mt-3">
  <h2>Align Content Around</h2>
  <p>Use the .align-content-*-around classes to align gathered items "around" on different screens.</p>

  <p><code>.align-content-around</code>:</p>
  <div class="d-flex flex-wrap align-content-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-sm-around</code>:</p>
  <div class="d-flex flex-wrap align-content-sm-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-md-around</code>:</p>
  <div class="d-flex flex-wrap align-content-md-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-lg-around</code>:</p>
  <div class="d-flex flex-wrap align-content-lg-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xl-around</code>:</p>
  <div class="d-flex flex-wrap align-content-xl-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xxl-around</code>:</p>
  <div class="d-flex flex-wrap align-content-xxl-around bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>]


<!---
.align-content-*-stretch
	Stretch gathered items on different screens
--->
<div class="container mt-3">
  <h2>Align Content Stretch</h2>
  <p>Use the .align-content-*-stretch classes to stretch single rows of flex items on different screens.</p>

  <p><code>.align-content-stretch</code>:</p>
  <div class="d-flex flex-wrap align-content-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-sm-stretch</code>:</p>
  <div class="d-flex flex-wrap align-content-sm-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-md-stretch</code>:</p>
  <div class="d-flex flex-wrap align-content-md-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-lg-stretch</code>:</p>
  <div class="d-flex flex-wrap align-content-lg-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xl-stretch</code>:</p>
  <div class="d-flex flex-wrap align-content-xl-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xxl-stretch</code>:</p>
  <div class="d-flex flex-wrap align-content-xxl-stretch bg-light" style="height:300px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>


<!---
Align Items
--->

<!---
.align-items-*-start
	Align single rows of items from the start on different screens
--->
<div class="container mt-3">
  <h2>Align Items Start</h2>
  <p>Use the .align-items-*-start classes to align single rows of items from the start on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-items-stretch is default.</p>

  <p><code>.align-items-start</code>:</p>
  <div class="d-flex align-items-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-sm-start</code>:</p>
  <div class="d-flex align-items-sm-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-md-start</code>:</p>
  <div class="d-flex align-items-md-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-lg-start</code>:</p>
  <div class="d-flex align-items-lg-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xl-start</code>:</p>
  <div class="d-flex align-items-xl-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xxl-start</code>:</p>
  <div class="d-flex align-items-xxl-start bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
</div>


<!---
.align-items-*-end
	Align single rows of items at the end on different screens
--->
<div class="container mt-3">
  <h2>Align Items End</h2>
  <p>Use the .align-items-*-end classes to align single rows of items at the end on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-items-stretch is default.</p>

  <p><code>.align-items-end</code>:</p>
  <div class="d-flex align-items-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-sm-end</code>:</p>
  <div class="d-flex align-items-sm-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-md-end</code>:</p>
  <div class="d-flex align-items-md-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-lg-end</code>:</p>
  <div class="d-flex align-items-lg-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xl-end</code>:</p>
  <div class="d-flex align-items-xl-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xxl-end</code>:</p>
  <div class="d-flex align-items-xxl-end bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
</div>


<!---
.align-items-*-center
	Align single rows of items in the center on different screens
--->
<div class="container mt-3">
  <h2>Align Items Center</h2>
  <p>Use the .align-items-*-center classes to align single rows of items in the center of a flex container on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-items-stretch is default.</p>

  <p><code>.align-items-center</code>:</p>
  <div class="d-flex align-items-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-sm-center</code>:</p>
  <div class="d-flex align-items-sm-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-md-center</code>:</p>
  <div class="d-flex align-items-md-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-lg-center</code>:</p>
  <div class="d-flex align-items-lg-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xl-center</code>:</p>
  <div class="d-flex align-items-xl-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xxl-center</code>:</p>
  <div class="d-flex align-items-xxl-center bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
</div>


<!---
.align-items-*-baseline
	Align single rows of items on the baseline on different screens
--->
<div class="container mt-3">
  <h2>Align Items Baseline</h2>
  <p>Use the .align-items-*-baseline classes to align single rows of items on the baseline on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-items-stretch is default.</p>

  <p><code>.align-items-baseline</code>:</p>
  <div class="d-flex align-items-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-sm-baseline</code>:</p>
  <div class="d-flex align-items-sm-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-md-baseline</code>:</p>
  <div class="d-flex align-items-md-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-lg-baseline</code>:</p>
  <div class="d-flex align-items-lg-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xl-baseline</code>:</p>
  <div class="d-flex align-items-xl-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xxl-baseline</code>:</p>
  <div class="d-flex align-items-xxl-baseline bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
</div>


<!---
.align-items-*-stretch
	Stretch single rows of items on different screens
--->
<div class="container mt-3">
  <h2>Align Items Stretch (default)</h2>
  <p>Use the .align-items-*-stretch classes to stretch single rows of items on different screens.</p>

  <p><code>.align-items-stretch</code>:</p>
  <div class="d-flex align-items-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-sm-stretch</code>:</p>
  <div class="d-flex align-items-sm-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-md-stretch</code>:</p>
  <div class="d-flex align-items-md-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-items-lg-stretch</code>:</p>
  <div class="d-flex align-items-lg-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xl-stretch</code>:</p>
  <div class="d-flex align-items-xl-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  
  <p><code>.align-items-xxl-stretch</code>:</p>
  <div class="d-flex align-items-xxl-stretch bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
</div>


<!---
Align Self
--->

<!---
.align-self-*-start
	Align a flex item from the start on different screens
--->
<div class="container mt-3">
  <h2>Align Self Start</h2>
  <p>Use the .align-self-*-start classes to align a flex item from the start in a flex container on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-self-stretch is default.</p>

  <p><code>.align-self-start</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-sm-start</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-sm-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-md-start</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-md-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-lg-start</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-lg-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-xl-start</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xl-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <br>

  <p><code>.align-self-xxl-start</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xxl-start">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
</div>


<!---
.align-self-*-end
	Align a flex item at the end on different screens
--->
<div class="container mt-3">
  <h2>Align Self End</h2>
  <p>Use the .align-self-*-end classes to align a flex item at the end in a flex container on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-self-stretch is default.</p>

  <p><code>.align-self-end</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-sm-end</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-sm-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-md-end</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-md-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-lg-end</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-lg-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-xl-end</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xl-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <br>

  <p><code>.align-self-xxl-end</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xxl-end">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
</div>


<!---
.align-self-*-center
		Align a flex item in the center on different screens
--->
<div class="container mt-3">
  <h2>Align Self Center</h2>
  <p>Use the .align-self-*-center classes to align a flex item in the center of a flex container on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-self-stretch is default.</p>

  <p><code>.align-self-center</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-sm-center</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-sm-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-md-center</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-md-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-lg-center</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-lg-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-xl-center</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xl-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <br>

  <p><code>.align-self-xxl-center</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xxl-center">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
</div>


<!---
.align-self-*-baseline
	Align a flex item on the baseline on different screens
--->
<div class="container mt-3">
  <h2>Align Self Baseline</h2>
  <p>Use the .align-self-*-baseline classes to align a flex item on the baseline in a flex container on different screens.</p>
  <p>Resize the browser window to see the effect. <strong>Note:</strong> align-self-stretch is default.</p>

  <p><code>.align-self-baseline</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-sm-baseline</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-sm-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-md-baseline</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-md-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-lg-baseline</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-lg-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>

  <p><code>.align-self-xl-baseline</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xl-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
  <br>

  <p><code>.align-self-xxl-baseline</code>:</p>
  <div class="d-flex bg-light" style="height:150px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border align-self-xxl-baseline">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
  </div>
  <br>
</div>



</body>
</html>
