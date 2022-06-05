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


<!---
Bootstrap 5 Grids

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

<!-- 
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
--->
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

</body>
</html>


