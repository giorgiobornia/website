<!DOCTYPE html>   
<!-- HTTP server -->
<!-- PHP server -->
<!-- Maybe SQL server later on -->

<html>


<head>

 <?php $mydepth = "./"; ?>
 <?php include($mydepth . "head_links.php");  ?>

 <?php $mytopic = "Giorgio Bornia"; ?>
 <title> <?php echo $mytopic; ?> </title>

</head>




<body>

 <?php 
   include($mydepth . 'navbar.php');  
 ?>
 
<section id="my_home">


<div class="my_landing  parallax_content">
 <div class="parallax_container3">   <!--id="" if you set more than one id then the FIRST ONE is taken-->
  <div class="container text-center">

  <br>

  <img class="img-circle" src="./img/giorgio_bornia.jpg" alt="giorgio"> 
    <h1> Giorgio Bornia </h1>
    <h3> Assistant Professor </h3>
     <hr class="intro-divider">
    <h3> Department of Mathematics and Statistics </h3>
    <h3> Texas Tech University </h3>
     <br>
     <br>
  <h4>  giorgio dot bornia at ttu dot edu </h4> 
  <h4> office phone:  806-834-8754 </h4> 
  <h4> office: MATH 225 </h4>
 </div>
 </div>
 </div>

</section> 
 
<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->
<section id="my_research">

<br>
<br>

 <div class="parallax_container2 parallax_content"></div>
 <div style="height:10px;"></div>

<?php $mytopic = "Research"; ?>
 <div class="parallax_container parallax_content">
 <div class="container text-center my_title">
        <h1> <?php echo $mytopic; ?>  </h1>
  </div>
</div> 

 <div style="height:10px;"></div>
  <div class="parallax_container2 parallax_content"></div>

<div  class="container" >
<br>
<!-- Main content -->
 <span class="semester">
- optimal control for partial differential equations<br>
- fluid dynamics, multi-physics problems (fluid-structure interaction, magnetohydrodynamics, fluid flows in porous media) <br>
- numerical analysis  <br>
- finite element methods  <br>
- multigrid and domain decomposition methods<br>
- scientific computing, design of finite element software <br>
- numerical linear algebra, preconditioning<br>
- geometric PDEs
</span>

<br>
<br>

<a href="./research/CV.pdf"><b>CURRICULUM VITAE</b></a><br>
<!-- <a href="./research/RS.pdf"><b>RESEARCH STATEMENT</b></a><br> -->
<!-- <a href="./research/TS.pdf"><b>TEACHING STATEMENT</b></a> -->

<br>
<br>

<!-- <a href="./research/PhD.pdf"><b>PhD DISSERTATION</b></a><br> -->

<br>
<br>



<br>
<br>



</div>

</section>

<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->
<section id="my_teaching">
 

<br>
<br>


 <div class="parallax_container2 parallax_content"></div>
 <div style="height:10px;"></div>


<?php $mytopic = "Teaching"; ?>
 <div class="parallax_container parallax_content" data-stellar-background-ratio="0.5">
 <div class="container  text-center  my_title">
        <h1> <?php echo $mytopic; ?>  </h1>
  </div>
</div> 

 <div style="height:10px;"></div>
  <div class="parallax_container2 parallax_content"></div>


<div class="container">

<br>

 At Texas Tech University: <br>

 <span class="semester"> Spring 2019, MATH 2360 - LINEAR ALGEBRA (Sections 012 and H01) </span>
  <a href="./teaching/2019a_Spring_MATH2360/math2360.pdf" > syllabus </a>
  <br>
 
 <span class="semester"> Fall 2018, MATH 4354 - DIFFERENTIAL EQUATIONS II </span>
  <a href="./teaching/2018b_Fall_MATH4354/math4354.pdf" > syllabus </a>
  <br>

 <span class="semester"> Fall 2018, MATH 5344 - TOPICS IN NUMERICAL ANALYSIS I - FINITE ELEMENT METHODS </span>
  <a href="./teaching/2018b_Fall_MATH5344/math5344.pdf" > syllabus </a>
  <br>
  
 <span class="semester"> Spring 2018, MATH 5335 - NUMERICAL ANALYSIS II </span>
  <a href="./teaching/2018a_Spring_MATH5335/math5335.pdf" > syllabus </a>
  <br>
  
 <span class="semester"> Spring 2018, MATH 2360 - LINEAR ALGEBRA </span>
  <a href="./teaching/2018a_Spring_MATH2360/math2360.pdf" > syllabus </a>
  <br>
  
 <span class="semester"> Fall 2017, MATH 5334 - NUMERICAL ANALYSIS I </span>
  <a href="./teaching/2017b_Fall_MATH5334/math5334.pdf" > syllabus </a>
  <br>
  
 <span class="semester"> Fall 2017, MATH 4354 - DIFFERENTIAL EQUATIONS II </span>
  <a href="./teaching/2017b_Fall_MATH4354/math4354.pdf" > syllabus </a>
  <br>
  
 <span class="semester"> Spring 2017, MATH 2360 - LINEAR ALGEBRA </span>
  <a href="./teaching/2017a_Spring_MATH2360/math2360.pdf" > syllabus </a>
  <br>

 <span class="semester"> Fall 2016, MATH 2360 - LINEAR ALGEBRA </span>
  <a href="./teaching/2016b_Fall_MATH2360/math2360.pdf" > syllabus </a> 
  <br>

 <span class="semester"> Spring 2016, MATH 5345 - TOPICS IN NUMERICAL ANALYSIS II </span>
 <a href="./teaching/2016a_Spring_MATH5345/math5345.pdf" > syllabus </a> 
 <br>

 <span class="semester"> Spring 2016, MATH 4351 - ADVANCED CALCULUS II </span>
 <a href="./teaching/2016a_Spring_MATH4351/math4351.pdf" > syllabus </a>  
 <br>

 <span class="semester"> Fall 2015, MATH 5344 - TOPICS IN NUMERICAL ANALYSIS I  </span>
 <a href="./teaching/2015b_Fall_MATH5344/math5344.pdf" > syllabus </a>  
 <br>

 <span class="semester">  Fall 2015, MATH 2360 - LINEAR ALGEBRA  </span>
 <a href="./teaching/2015b_Fall_MATH2360/math2360.pdf" > syllabus </a>  
 <br>

 <span class="semester"> Spring 2015, MATH 5335 - NUMERICAL ANALYSIS II </span>
 <a href="./teaching/2015a_Spring_MATH5335/math5335.pdf" > syllabus </a>  
 <br>

<!-- <span class="semester"> Spring 2015, MATH 5099 - SCIENTIFIC PROGRAMMING AND FINITE ELEMENT METHODS (individual study)  </span> 
 <br>-->

 <span class="semester">  Fall 2014, MATH 5334 - NUMERICAL ANALYSIS I </span>
 <a href="./teaching/2014b_Fall_MATH5334/math5334.pdf" > syllabus </a>  
 <br>

 <span class="semester"> Fall 2014, MATH 4354 - DIFFERENTIAL EQUATIONS II </span>
 <a href="./teaching/2014b_Fall_MATH4354/math4354.pdf" > syllabus </a>  
 <br>

 <span class="semester">  Spring 2014, MATH 4350 - ADVANCED CALCULUS I  </span>
 <a href="./teaching/2014a_Spring_MATH4350/math4350.pdf" > syllabus </a> 
 <br>

 <span class="semester"> Fall 2013, MATH 4354 - DIFFERENTIAL EQUATIONS II  </span>
 <a href="./teaching/2013b_Fall_MATH4354/math4354.pdf" > syllabus </a> 
 <br>

 <span class="semester"> Spring 2013, MATH 3350 - HIGHER MATHEMATICS FOR ENGINEERS AND SCIENTISTS I (sections 14 and 15)  </span>
 <a href="./teaching/2013a_Spring_MATH3350/math3350.pdf" > syllabus </a>  
 <br>

 <span class="semester">  Fall 2012, MATH 2450 - CALCULUS III WITH APPLICATIONS (sections 14 and 16) </span>
 <a href="./teaching/2012b_Fall_MATH2450/math2450.pdf" > syllabus </a> 
 <br>

 <br>
 At University of Bologna:<br>

<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
 <span class="semester"> Fall 2011, FOUNDATIONS OF COMPUTER SCIENCE,  </span>
 Teaching Assistant  <br>
 
<br>



<!--<strong> Fondamenti di Informatica T, A.A. 2011/2012 <br>
Corso di Laurea in Ingegneria Meccanica <br>
</strong>        

<hr style="width: 100%; height: 2px;"><br>
<a href="ErrCalcNum.pdf" > Errori in calcolo numerico</a>
<br>
<a href="zeros_conv_rate.c" > Ordine di convergenza zeri</a>
<br>
<a href="integrals_conv_rate.c" > Ordine di convergenza integrali</a>
<br>

<hr style="width: 100%; height: 2px;"><br>

<a href="teaching/" > Qui trovate tutti i file </a>-->


</div>

</section>

<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->
<section id="my_personal"> 

<br>
<br>


<div class="parallax_container2 parallax_content"></div>
 <div style="height:10px;"></div>

<?php $mytopic = "Personal"; ?>
 <div class="parallax_container parallax_content" data-stellar-background-ratio="0.5">
 <div class="container  text-center my_title">
        <h1> <?php echo $mytopic; ?>  </h1>
  </div>
</div> 

 <div style="height:10px;"></div>
  <div class="parallax_container2 parallax_content"></div>



 <div class="container text-center">
 
<br>

<!-- Add wiki -->
 <p> Some pictures of my hometown, Dozza </p>

 
<img class="dozza img-fluid img-rounded" src="./img/dozza/dozza8.jpg" alt="dozza">
<img class="dozza img-fluid img-rounded" src="./img/dozza/dozza1.jpg" alt="dozza">
<img class="dozza img-fluid img-rounded" src="./img/dozza/dozza3.jpg" alt="dozza">
<img class="dozza img-fluid img-rounded" src="./img/dozza/dozza2.jpg" alt="dozza">
<img class="dozza img-fluid img-rounded" src="./img/dozza/dozza4.jpg" alt="dozza">
<img class="dozza img-fluid img-rounded" src="./img/dozza/dozza5.jpg" alt="dozza">
<!-- <img class="dozza img-fluid img-rounded" src="./img/dozza/dozza6.jpg" alt="dozza"> -->
<!-- <img class="dozza img-fluid img-rounded" src="./img/dozza/dozza7.jpg" alt="dozza"> -->

<br>
<a href="personal/cards.php">A simulator of card games</a>

<br>
<br>
<br>

</div>

</section>



 <?php 
   include($mydepth . 'footer.php');  
 ?>

</body>

</html>

<!-- avoid covering from nav menu in mobile -->
<!-- img_responsive does not let me have more than one image next to the other one -->
