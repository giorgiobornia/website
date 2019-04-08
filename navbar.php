<!-- Site navigation menu -->
<?php  
$mypath = dirname(__FILE__);
 //echo $mypath; 
//  echo $_SERVER['DOCUMENT_ROOT']
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="my_nav">

<div class="container">

<div class="navbar-header">
<button type="button"
class="navbar-toggle collapsed" 
data-toggle="collapse" 
data-target="#my_navbar"
aria-expanded="false"
aria-controls="my_navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#compensate_navbar_height" class="smoothScroll navbar-brand" >$HOME</a>   <!--writing class=" " and class=" " twice NEGLECTS the SECOND INSTANTIATION of CLASS!!!-->
</div>

<div class="navbar-collapse collapse"  id="my_navbar">
<ul class="nav navbar-nav navbar-right">
  <li><a href="#my_research" class="smoothScroll">./research</a></li> <!--"title=" for hovering message with pointer, not important for smartphones -->
  <li><a href="#my_teaching" class="smoothScroll">./teaching</a></li> <!-- DIFFERENCE with FULL LINK and only LOCAL LINK for scrolling...http://www.math.ttu.edu/~gbornia/index.php#my_teaching-->
  <li><a href="#my_personal" class="smoothScroll">./personal</a></li> 
<!--   <li><a href="http://femttu.github.io/">./software</a></li> -->
  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/">./seminar_in_applied_math</a></li>
<!-- here I need to provide ABSOLUTE PATHS because this navigation bar 
is included by files in several positions... -->
<!-- Or I should do some php with a variable...-->
</ul>
</div>

</div>

</nav>

<div class="container" id="compensate_navbar_height">

</div>

