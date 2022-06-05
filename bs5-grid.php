<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
Bootstrap 5 Grids

https://codepen.io/jca2016satx/pen/gOvjgbW?editors=1010

Bootstrap's grid system is built with flexbox and allows up to 12 columns across the page.

If you do not want to use all 12 columns individually, you can group the columns together to create wider columns:

<div class="w3-responsive">
<table class="table grid">
<tbody><tr>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
</tr>
<tr>
  <td colspan="4">&nbsp;span 4</td>
  <td colspan="4">&nbsp;span 4</td>  
  <td colspan="4">&nbsp;span 4</td>
</tr>
<tr>
  <td colspan="4">span 4</td>
  <td colspan="8">span 8</td>  
</tr>
<tr>
  <td colspan="6">span 6</td>
  <td colspan="6">span 6</td>  
</tr>
<tr>
  <td colspan="12">span 12</td>
</tr>
</tbody></table>
</div>


The grid system is responsive, and the columns will re-arrange automatically depending on the screen size.

Make sure that the sum adds up to 12 or fewer (it is not required that you use all 12 available columns).
--->

<!---
Grid Classes

The Bootstrap 5 grid system has six classes:

.col- (extra small devices - screen width less than 576px)

.col-sm- (small devices - screen width equal to or greater than 576px)

.col-md- (medium devices - screen width equal to or greater than 768px)

.col-lg- (large devices - screen width equal to or greater than 992px)

.col-xl- (xlarge devices - screen width equal to or greater than 1200px)

.col-xxl- (xxlarge devices - screen width equal to or greater than 1400px)

The classes above can be combined to create more dynamic and flexible layouts.

Tip: Each class scales up, so if you want to set the same widths for sm and md, you only need to specify sm.
--->


<!---
Basic Structure of a Bootstrap 5 Grid

The following is a basic structure of a Bootstrap 5 grid:


Control the column width, and how they should appear on different devices 

<div class="row">
  <div class="col-*-*"></div>
  <div class="col-*-*"></div>
</div>
<div class="row">
  <div class="col-*-*"></div>
  <div class="col-*-*"></div>
  <div class="col-*-*"></div>
</div>

Or let Bootstrap automatically handle the layout
<div class="row">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
</div>
--->

<!---
First example: create a row (<div class="row">). Then, add the desired number of columns (tags with appropriate .col-*-* classes). The first star (*) represents the responsiveness: sm, md, lg, xl or xxl, while the second star represents a number, which should add up to 12 for each row.

Second example: instead of adding a number to each col, let bootstrap handle the layout, to create equal width columns: two "col" elements = 50% width to each col, while three cols = 33.33% width to each col. Four cols = 25% width, etc. You can also use .col-sm|md|lg|xl|xxl to make the columns responsive.

Below we have collected some examples of basic Bootstrap 5 grid layouts.
--->


<!---
Three Equal Columns

<div class="row test">
  <div class="col-4 ws-grey">.col</div>
  <div class="col-4 ws-grey">.col</div>
  <div class="col-4 ws-grey">.col</div>
</div>

The following example shows how to create three equal-width columns, on all devices and screen widths:

<div class="row">
  <div class="col">.col</div>
  <div class="col">.col</div>
  <div class="col">.col</div>
</div>
--->
<div class="container-fluid mt-3">
  <h1>Three equal width columns</h1>
  <p>Note: Try to add a new div with class="col" inside the row class - this will create four equal-width columns.</p>
  <div class="row">
    <div class="col p-3 bg-primary text-white">.col</div>
    <div class="col p-3 bg-dark text-white">.col</div>
    <div class="col p-3 bg-primary text-white">.col</div>
  </div>
</div>


<!---
Responsive Columns

<div class="row test">
  <div class="col-sm-3 ws-grey">.col-sm-3</div>
  <div class="col-sm-3 ws-grey">.col-sm-3</div>
  <div class="col-sm-3 ws-grey">.col-sm-3</div>
  <div class="col-sm-3 ws-grey">.col-sm-3</div>
</div>

The following example shows how to create four equal-width columns starting at tablets and scaling to extra large desktops. On mobile phones or screens that are less than 576px wide, the columns will automatically stack on top of each other:

<div class="row">
  <div class="col-sm-3">.col-sm-3</div>
  <div class="col-sm-3">.col-sm-3</div>
  <div class="col-sm-3">.col-sm-3</div>
  <div class="col-sm-3">.col-sm-3</div>
</div>
--->
<div class="container-fluid mt-3">
  <h1>Responsive Columns</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
  <div class="row">
    <div class="col-sm-3 p-3 bg-primary text-white">.col</div>
    <div class="col-sm-3 p-3 bg-dark text-white">.col</div>
    <div class="col-sm-3 p-3 bg-primary text-white">.col</div>
    <div class="col-sm-3 p-3 bg-dark text-white">.col</div>
  </div>
</div>



<!---
Two Unequal Responsive Columns

<div class="row test">
  <div class="col-sm-4 ws-grey">.col-sm-4</div>
  <div class="col-sm-8 ws-grey">.col-sm-8</div>
</div>

The following example shows how to get two various-width columns starting at tablets and scaling to large extra desktops:

<div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-8">.col-sm-8</div>
</div>
--->
<div class="container-fluid mt-3">
  <h1>Two Unequal Responsive Columns</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
  <div class="row">
    <div class="col-sm-4 p-3 bg-primary text-white">.col</div>
    <div class="col-sm-8 p-3 bg-dark text-white">.col</div>
  </div>
</div>


<!---
The Grid System

Bootstrap's grid system is built with flexbox and allows up to 12 columns across the page.

If you do not want to use all 12 columns individually, you can group the columns together to create wider columns:

<div class="w3-responsive">
<table class="table grid">
<tbody><tr>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
  <td>span 1</td>
  <td>span 1</td>  
  <td>span 1</td>
</tr>
<tr>
  <td colspan="4">&nbsp;span 4</td>
  <td colspan="4">&nbsp;span 4</td>  
  <td colspan="4">&nbsp;span 4</td>
</tr>
<tr>
  <td colspan="4">span 4</td>
  <td colspan="8">span 8</td>  
</tr>
<tr>
  <td colspan="6">span 6</td>
  <td colspan="6">span 6</td>  
</tr>
<tr>
  <td colspan="12">span 12</td>
</tr>
</tbody></table>
</div>

The grid system is responsive, and the columns will re-arrange automatically depending on the screen size.

Make sure that the sum adds up to 12 or fewer (it is not required that you use all 12 available columns).
--->

<!---
Grid Classes

The Bootstrap 5 grid system has six classes:

.col- (extra small devices - screen width less than 576px)
.col-sm- (small devices - screen width equal to or greater than 576px)
.col-md- (medium devices - screen width equal to or greater than 768px)
.col-lg- (large devices - screen width equal to or greater than 992px)
.col-xl- (xlarge devices - screen width equal to or greater than 1200px)
.col-xxl- (xxlarge devices - screen width equal to or greater than 1400px)

The classes above can be combined to create more dynamic and flexible layouts.

Tip: Each class scales up, so if you want to set the same widths for sm and md, you only need to specify sm.
--->

<!---
Basic Structure of a Bootstrap 5 Grid

The following is a basic structure of a Bootstrap 5 grid:

Control the column width, and how they should appear on different devices

<div class="row">
  <div class="col-*-*"></div>
  <div class="col-*-*"></div>
</div>
<div class="row">
  <div class="col-*-*"></div>
  <div class="col-*-*"></div>
  <div class="col-*-*"></div>
</div>

Or let Bootstrap automatically handle the layout
<div class="row">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
</div>

First example: create a row (<div class="row">). Then, add the desired number of columns (tags with appropriate .col-*-* classes). The first star (*) represents the responsiveness: sm, md, lg, xl or xxl, while the second star represents a number, which should add up to 12 for each row.

Second example: instead of adding a number to each col, let bootstrap handle the layout, to create equal width columns: two "col" elements = 50% width to each col, while three cols = 33.33% width to each col. Four cols = 25% width, etc. You can also use .col-sm|md|lg|xl|xxl to make the columns responsive.
--->
<div class="container-fluid mt-3">
  <h1>Basic Grid Structure</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The first, second and third row will automatically stack on top of each other when the screen is less than 576px wide.</p>
  
  <!-- Control the column width, and how they should appear on different devices -->
  <div class="row">
    <div class="col-sm-6 bg-primary text-white">50%</div>
    <div class="col-sm-6 bg-dark text-white">50%</div>
  </div>
  <br>
    
  <div class="row">
    <div class="col-sm-4 bg-primary text-white">33.33%</div>
    <div class="col-sm-4 bg-dark text-white">33.33%</div>
    <div class="col-sm-4 bg-primary text-white">33.33%</div>
  </div>
  <br>

  <!-- Or let Bootstrap automatically handle the layout -->
  <div class="row">
    <div class="col-sm bg-primary text-white">25%</div>
    <div class="col-sm bg-dark text-white">25%</div>
    <div class="col-sm bg-primary text-white">25%</div>
    <div class="col-sm bg-dark text-white">25%</div>
  </div>
  <br>
    
  <div class="row">
    <div class="col bg-primary text-white">25%</div>
    <div class="col bg-dark text-white">25%</div>
    <div class="col bg-primary text-white">25%</div>
    <div class="col bg-dark text-white">25%</div>
  </div>
</div>


<!---
Grid Options

The following table summarizes how the Bootstrap 5 grid system works across different screen sizes:

<div class="table-responsive">
<table class="ws-table-all table-bordered notranslate">
  <tbody><tr>
    <th style="width:20%;">&nbsp;</th>
    <th style="width:17%;">Extra small (&lt;576px)</th>
    <th style="width:16%;">Small (&gt;=576px)</th>
    <th style="width:16%;">Medium (&gt;=768px)</th>
    <th style="width:16%;">Large (&gt;=992px)</th>
    <th style="width:16%;">Extra Large (&gt;=1200px)</th>
    <th style="width:16%;">XXL (&gt;=1400px)</th>
  </tr>
  <tr>
    <td><strong>Class prefix</strong></td>
    <td><code class="w3-codespan">.col-</code></td>
    <td><code class="w3-codespan">.col-sm-</code></td>
    <td><code class="w3-codespan">.col-md-</code></td>
    <td><code class="w3-codespan">.col-lg-</code></td>
    <td><code class="w3-codespan">.col-xl-</code></td>
    <td><code class="w3-codespan">.col-xxl-</code></td>
  </tr>
  <tr>
    <td><strong>Grid behaviour</strong></td>
    <td>Horizontal at all times</td>
    <td>Collapsed to start, horizontal above breakpoints</td>
    <td>Collapsed to start, horizontal above breakpoints</td>
    <td>Collapsed to start, horizontal above breakpoints</td>        
    <td>Collapsed to start, horizontal above breakpoints</td>        
    <td>Collapsed to start, horizontal above breakpoints</td>        
  </tr>
  <tr>
    <td><strong>Container width</strong></td>
    <td>None (auto)</td>
    <td>540px</td>
    <td>720px</td>
    <td>960px</td>
    <td>1140px</td>
    <td>1320px</td>
  </tr>
  <tr>
    <td><strong>Suitable for</strong></td>
    <td>Portrait phones</td>
    <td>Landscape phones</td>
    <td>Tablets</td>
    <td>Laptops</td>
    <td>Laptops and Desktops</td>    
    <td>Laptops and Desktops</td>    
  </tr>
  <tr>
    <td><strong># of columns</strong></td>
    <td>12</td>
    <td>12</td>
    <td>12</td>
    <td>12</td>    
    <td>12</td>    
    <td>12</td>    
  </tr>
  <tr>
    <td><strong>Gutter width</strong></td>
    <td>1.5rem (.75rem on each side of a column)</td>
    <td>1.5rem (.75rem on each side of a column)</td>
    <td>1.5rem (.75rem on each side of a column)</td>
    <td>1.5rem (.75rem on each side of a column)</td>
    <td>1.5rem (.75rem on each side of a column)</td>
    <td>1.5rem (.75rem on each side of a column)</td>
  </tr>
  <tr>
    <td><strong>Nestable</strong></td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
  </tr>
  <tr>
    <td><strong>Offsets</strong></td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
  </tr>
  <tr>
    <td><strong>Column ordering</strong></td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
  </tr>
</tbody></table>
</div>
--->

<!---
Bootstrap 5 Grid Stacked to horizontal

Let's create a basic grid system that starts out stacked on extra small devices, before becoming horizontal on larger devices.

The following example shows a simple "stacked-to-horizontal" two-column layout, meaning it will result in a 50%/50% split on all screens, except for extra small screens, which it will automatically stack (100%):

<div class="row">
  <div class="col-sm-6 w3-padding-16 bg-primary text-white container">
    col-sm-6
  </div>
  <div class="col-sm-6 w3-padding-16 bg-dark text-white container">
    col-sm-6
  </div>
</div>

Example: Stacked-to-horizontal

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 bg-primary">
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-6 bg-dark">
      <p>Sed ut perspiciatis...</p>
    </div>
  </div>
</div>
--->
<div class="container-fluid mt-3">
  <h1>Grid Example</h1>
  <p>This example demonstrates a 50%/50% split on small, medium, large, xlarge and xxlarge devices. On extra small devices, it will stack (100% width).</p>      
  <p>Resize the browser window to see the effect.</p> 
  <div class="row">
    <div class="col-sm-6 bg-primary text-white p-3">
      Lorem ipsum...
    </div>
    <div class="col-sm-6 bg-dark text-white p-3">
      Sed ut perspiciatis...
    </div>
  </div>
</div>

<!---
Tip: The numbers in the .col-sm-* classes indicates how many columns the div should span (out of 12). So, .col-sm-1 spans 1 column, .col-sm-4 spans 4 columns, .col-sm-6 spans 6 columns, etc.

Note: Make sure that the sum adds up to 12 or fewer (it is not required that you use all 12 available columns):

Tip: You can turn any full-width layout into a fixed-width responsive layout, by changing the .container-fluid class to .container:
--->

<!---
Example: Responsive Container

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-6">
      <p>Sed ut perspiciatis...</p>
    </div>
  </div>
</div>
--->

<div class="container mt-3">
  <h1>Grid Example</h1>
  <p>This example demonstrates a 50%/50% split on small, medium, large, xlarge and xxlarge devices. On extra small devices, it will stack (100% width).</p>      
  <p>Resize the browser window to see the effect.</p> 
  <div class="row">
    <div class="col-sm-6 bg-primary text-white p-3">
      Lorem ipsum...
    </div>
    <div class="col-sm-6 bg-dark text-white p-3">
      Sed ut perspiciatis...
    </div>
  </div>
</div>


<!---
Auto Layout Columns

In Bootstrap 5, there is an easy way to create equal width columns for all devices: just remove the number from .col-size-* and only use the .col-size class on a specified number of col elements. Bootstrap will recognize how many columns there are, and each column will get the same width. The size classes (sm, md, etc.) determines when the columns should be responsive:

Two columns: 50% width on all screens, except for extra small (100% width)
<div class="row">
  <div class="col-sm">1 of 2</div>
  <div class="col-sm">2 of 2</div>
</div>

Four columns: 25% width on all screens, except for extra small (100% width)
<div class="row">
  <div class="col-sm">1 of 4</div>
  <div class="col-sm">2 of 4</div>
  <div class="col-sm">3 of 4</div>
  <div class="col-sm">4 of 4</div>
</div>

<div class="w3-white w3-padding">
<div class="row w3-padding">
  <div class="col w3-padding-16 bg-primary text-white container">
    1 of 2
  </div>
  <div class="col w3-padding-16 bg-dark text-white container">
    2 of 2
  </div>
</div>

<div class="row w3-padding">
  <div class="col w3-padding-16 bg-primary text-white container">
    1 of 4
  </div>
  <div class="col w3-padding-16 bg-dark text-white container">
    2 of 4
  </div>
  <div class="col w3-padding-16 bg-primary text-white container">
    3 of 4
  </div>
  <div class="col w3-padding-16 bg-dark text-white container">
    4 of 4
  </div>
</div>
</div>
--->

<div class="container-fluid mt-3">
  <h1>Auto Layout Columns</h1>
  <p>In Bootstrap 5, there is an easy way to create equal width columns: just use the <code>.col-size</code> class on a specified number of col elements. Bootstrap will recognize how many columns there are, and each column will get the same width.</p>
  <p>Two columns: 50% width on all screens, except for extra small (100% width on screens less than <strong>576px</strong> wide)</p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm bg-primary text-white p-3">1 of 2</div>
      <div class="col-sm bg-dark text-white p-3">2 of 2</div>
    </div>  
  </div>
  <br>
  
  <p>Four columns: 25% width on all screens, except for extra small (100% width on screens less than <strong>576px</strong> wide)</p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm bg-primary text-white p-3">1 of 4</div>
      <div class="col-sm bg-dark text-white p-3">2 of 4</div>
      <div class="col-sm bg-primary text-white p-3">3 of 4</div>
      <div class="col-sm bg-dark text-white p-3">4 of 4</div>
    </div>  
  </div>
</div>


<!---
Bootstrap 5 Grid Examples

Below we have collected some examples of Bootstrap 5 grid layouts.

Three Equal Columns

Use the .col class on a specified number of elements and Bootstrap will recognize how many elements there are (and create equal-width columns). In the example below, we use three col elements, which gets a width of 33.33% each.

<div class="row">
  <div class="col w3-padding-16 bg-success xp-3">
    col
  </div>
  <div class="col w3-padding-16 bg-warning xp-3">
    col
  </div>
  <div class="col w3-padding-16 bg-success xp-3">
    col
  </div>
</div>

Example

<div class="row">
  <div class="col">col</div>
  <div class="col">col</div>
  <div class="col">col</div>
</div>
--->
<div class="container-fluid mt-3">
  <h2>Three Equal Columns</h2>
  <p>Use the .col class on a specified number of elements and Bootstrap will recognize how many elements there are (and create equal-width columns). In the example below, we use three col elements, which gets a width of 33.33% each.</p>
  <div class="row">
    <div class="col bg-success">.col</div>
    <div class="col bg-warning">.col</div>
    <div class="col bg-success">.col</div>
  </div>
</div>


<!---
Three Equal Columns Using Numbers

You can also use numbers to control the column width. Just make sure that the sum adds up to 12 or fewer (it is not required that you use all 12 available columns):

<div class="row">
  <div class="col-4 w3-padding-16 bg-success">
    col-4
  </div>
  <div class="col-4 w3-padding-16 bg-warning">
    col-4
  </div>
  <div class="col-4 w3-padding-16 bg-success">
    col-4</div>
</div>

Example

<div class="row">
  <div class="col-4">col-4</div>
  <div class="col-4">col-4</div>
  <div class="col-4">col-4</div>
</div>
--->

<div class="container-fluid mt-3">
  <h2>Three Equal Columns</h2>
  <p>You can also use numbers to control the column width. Just make sure that the sum always adds up to 12:</p>
  <div class="row">
    <div class="col-4 bg-success">.col-4</div>
    <div class="col-4 bg-warning">.col-4</div>
    <div class="col-4 bg-success">.col-4</div>
  </div>
</div>


<!---
Three Unequal columns

To create unequal columns, you have to use numbers. The following example will create a 25%/50%/25% split:

<div class="row">
  <div class="col-3 w3-padding-16 bg-success">
    col-3
  </div>
  <div class="col-6 w3-padding-16 bg-warning">
    col-6
  </div>
  <div class="col-3 w3-padding-16 bg-success">
    col-3
  </div>
</div>

Example

<div class="row">
  <div class="col-3">col-3</div>
  <div class="col-6">col-6</div>
  <div class="col-3">col-3</div>
</div>
--->


<div class="container-fluid mt-3">
  <h2>Three Unequal Columns</h2>
  <p>To create unequal columns, you have to use numbers. The following example will create a 25%/50%/25% split:</p>
  <div class="row">
    <div class="col-3 bg-success">.col-3</div>
    <div class="col-6 bg-warning">.col-6</div>
    <div class="col-3 bg-success">.col-3</div>
  </div>
</div>

<!---
Setting One Column Width

However, it is enough to only set the width of one column, and have the sibling columns automatically resize around it. The following example will create a 25%/50%/25% split:

<div class="row">
  <div class="col w3-padding-16 bg-success">
    col
  </div>
  <div class="col-6 w3-padding-16 bg-warning">
    col-6
  </div>
  <div class="col w3-padding-16 bg-success">
    col
  </div>
</div>

Example

<div class="row">
  <div class="col">col</div>
  <div class="col-6">col-6</div>
  <div class="col">col</div>
</div>
--->

<div class="container-fluid mt-3">
  <h2>Three Unequal Columns</h2>
  <p>It is enough to only set the width of one column, and have the sibling columns automatically resize around it. The following example will create a 25%/50%/25% split:</p>
  <div class="row">
    <div class="col bg-success">.col</div>
    <div class="col-6 bg-warning">.col-6</div>
    <div class="col bg-success">.col</div>
  </div>
</div>

<!---


More Equal Columns

<div class="row">
  <div class="col w3-padding-16 bg-success">
    1 of 4
  </div>
  <div class="col w3-padding-16 bg-warning">
    2 of 4
  </div>
  <div class="col w3-padding-16 bg-success">
    3 of 4
  </div>
  <div class="col w3-padding-16 bg-warning">
    4 of 4
  </div>
</div>

Example

Two equal columns
<div class="row">
  <div class="col">1 of 2</div>
  <div class="col">2 of 2</div>
</div>

Four equal columns
<div class="row">
  <div class="col">1 of 4</div>
  <div class="col">2 of 4</div>
  <div class="col">3 of 4</div>
  <div class="col">4 of 4</div>
</div>

Six equal columns
<div class="row">
  <div class="col">1 of 6</div>
  <div class="col">2 of 6</div>
  <div class="col">3 of 6</div>
  <div class="col">4 of 6</div>  
  <div class="col">5 of 6</div>
  <div class="col">6 of 6</div>
</div>
--->

<div class="container-fluid mt-3">
  <h2>More Equal Columns</h2>
  <div class="row">
    <div class="col bg-success">1 of 2</div>
    <div class="col bg-warning">2 of 2</div>
  </div>
  <br>
  <div class="row">
    <div class="col bg-success">1 of 4</div>
    <div class="col bg-warning">2 of 4</div>
    <div class="col bg-success">3 of 4</div>
    <div class="col bg-warning">4 of 4</div>
  </div>
  <br>
  <div class="row">
    <div class="col bg-success">1 of 6</div>
    <div class="col bg-warning">2 of 6</div>
    <div class="col bg-success">3 of 6</div>
    <div class="col bg-warning">4 of 6</div>
    <div class="col bg-success">5 of 6</div>
    <div class="col bg-warning">6 of 6</div>
  </div>
</div>


<!---
Row Cols

You can also control how many columns that should appear next to each other (regardless of how many cols), with the .row-cols-* classes:

<div class="row row-cols-1">
  <div class="col w3-padding-16 bg-success">
    1 of 2
  </div>
  <div class="col w3-padding-16 bg-warning">
    2 of 2
  </div>
</div>

<div class="row row-cols-2">
  <div class="col w3-padding-16 bg-success">
    1 of 4
  </div>
  <div class="col w3-padding-16 bg-warning">
    2 of 4
  </div>
  <div class="col w3-padding-16 bg-success">
    3 of 4
  </div>
  <div class="col w3-padding-16 bg-warning">
    4 of 4
  </div>
</div>

<div class="row row-cols-3">
  <div class="col w3-padding-16 bg-success">
    1 of 6
  </div>
  <div class="col w3-padding-16 bg-warning">
    2 of 6
  </div>
  <div class="col w3-padding-16 bg-success">
    3 of 6
  </div>
  <div class="col w3-padding-16 bg-warning">
    4 of 6
  </div>
  <div class="col w3-padding-16 bg-success">
    5 of 6
  </div>
  <div class="col w3-padding-16 bg-warning">
    6 of 6
  </div>
</div>

Example

<div class="row row-cols-1">
  <div class="col">1 of 2</div>
  <div class="col">2 of 2</div>
</div>

<div class="row row-cols-2">
  <div class="col">1 of 4</div>
  <div class="col">2 of 4</div>
  <div class="col">3 of 4</div>
  <div class="col">4 of 4</div>
</div>

<div class="row row-cols-3">
  <div class="col">1 of 6</div>
  <div class="col">2 of 6</div>
  <div class="col">3 of 6</div>
  <div class="col">4 of 6</div>  
  <div class="col">5 of 6</div>
  <div class="col">6 of 6</div>
</div>
--->

<div class="container-fluid mt-3">
  <h2>Row Cols</h2>
  <p>The .row-cols-* classes are used to set the number of columns that should appear next to each other.</p>

  <div class="row row-cols-1">
    <div class="col bg-success">1 of 2</div>
    <div class="col bg-warning">2 of 2</div>
  </div>
  <br>
  <div class="row row-cols-2">
    <div class="col bg-success">1 of 4</div>
    <div class="col bg-warning">2 of 4</div>
    <div class="col bg-success">3 of 4</div>
    <div class="col bg-warning">4 of 4</div>
  </div>
  <br>
  <div class="row row-cols-3">
    <div class="col bg-success">1 of 6</div>
    <div class="col bg-warning">2 of 6</div>
    <div class="col bg-success">3 of 6</div>
    <div class="col bg-warning">4 of 6</div>
    <div class="col bg-success">5 of 6</div>
    <div class="col bg-warning">6 of 6</div>
  </div>
</div>


<!---
More Unequal Columns

<div class="row">
  <div class="col-8 w3-padding-16 bg-success">
    1 of 2
  </div>
  <div class="col-4 w3-padding-16 bg-warning">
    2 of 2
  </div>
</div>

<div class="row">
  <div class="col-8 w3-padding-16 bg-success">
    1 of 2
  </div>
  <div class="col-4 w3-padding-16 bg-warning">
    2 of 2
  </div>
</div>

<div class="row">
  <div class="col-4 w3-padding-16 bg-warning">
    1 of 4
  </div>
  <div class="col-6 w3-padding-16 bg-success">
    2 of 4
  </div>
  <div class="col w3-padding-16 bg-warning">
    3 of 4
  </div>
  <div class="col w3-padding-16 bg-success">
    4 of 4
  </div>
</div>

Example

Two Unequal Columns
<div class="row">
  <div class="col-8">1 of 2</div>
  <div class="col-4">2 of 2</div>
</div>

Four Unequal Columns
<div class="row">
  <div class="col-2">1 of 4</div>
  <div class="col-2">2 of 4</div>
  <div class="col-2">3 of 4</div>
  <div class="col-6">4 of 4</div>
</div>

Setting two column widths
<div class="row">
  <div class="col-4">1 of 4</div>
  <div class="col-6">2 of 4</div>
  <div class="col">3 of 4</div>
  <div class="col">4 of 4</div>
</div>
--->
<div class="container-fluid mt-3">
  <h2>More Unequal Columns</h2>
  <div class="row">
    <div class="col-8 bg-success">1 of 2</div>
    <div class="col-4 bg-warning">2 of 2</div>
  </div>
  <br>
  <div class="row">
    <div class="col-2 bg-success">1 of 4</div>
    <div class="col-2 bg-warning">2 of 4</div>
    <div class="col-2 bg-success">3 of 4</div>
    <div class="col-6 bg-warning">4  of 4</div>
  </div>
  <br>
  <div class="row">
    <div class="col-4 bg-success">1 of 4</div>
    <div class="col-6 bg-warning">2 of 4</div>
    <div class="col bg-success">3 of 4</div>
    <div class="col bg-warning">4  of 4</div>
  </div>
</div>
<!---
--->
<!---
--->
<!---
--->
<!---
--->
<!---
--->
<!---
--->
<!---
--->
<!---
--->
<!---
--->
<!---
--->
</body>
</html>


