<!-- Site navigation menu -->
<?php  
$mypath = dirname(__FILE__);
 //echo $mypath; 
//  echo $_SERVER['DOCUMENT_ROOT']
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation" id="my_nav">

<a class="navbar-brand" href="http://www.math.ttu.edu/~gbornia" style="font-family: 'Courier Bold', Courier, monospace; " >HOME();</a>   <!--writing class=" " and class=" " twice NEGLECTS the SECOND INSTANTIATION of CLASS!!!-->

<button 
class="navbar-toggler" 
type="button" 
data-toggle="collapse" 
data-target="#my_navbar"
aria-expanded="false"
aria-controls="my_navbar"
aria-label="Toggle navigation"
>

<span class="navbar-toggler-icon"></span>

</button>


<div class="collapse navbar-collapse"  id="my_navbar" style="color: #00FF00; font-family: 'Courier Bold', Courier, monospace; ">

<ul class="navbar-nav ml-auto">
  <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
    <a class="nav-link" style="font-family: 'Courier Bold', Courier, monospace; "  href="#my_research"> research(); </a>
  </li> <!--"title=" for hovering message with pointer, not important for smartphones -->
  <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
    <a class="nav-link" style="font-family: 'Courier Bold', Courier, monospace; "  href="#my_teaching"> teaching(); </a>
  </li> <!-- DIFFERENCE with FULL LINK and only LOCAL LINK for scrolling...http://www.math.ttu.edu/~gbornia/index.php#my_teaching-->
  <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
    <a class="nav-link" style="font-family: 'Courier Bold', Courier, monospace; "  href="#my_personal"> personal(); </a>
  </li> 
<!--   <li><a href="http://femttu.github.io/">./software</a></li> -->
  <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
    <a class="nav-link" style="font-family: 'Courier Bold', Courier, monospace; "  href="http://www.math.ttu.edu/events/"> ttu_math_events(); </a>
  </li>
<!-- here I need to provide ABSOLUTE PATHS because this navigation bar 
is included by files in several positions... -->
<!-- Or I should do some php with a variable...-->
</ul>
</div>



</nav>

