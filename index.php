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


<div class="my_landing parallax_content">
 <div class="parallax_container3">   <!--id="" if you set more than one id then the FIRST ONE is taken-->
  <div class="container text-center">

  <br>

  <img src="./img/giorgio_bornia.jpg" alt="giorgio" style=" border-radius : 30%; "> 
    <h1> Giorgio Bornia </h1>
    <h3> Associate Professor </h3>
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

 <ul>
 <li> optimal control for partial differential equations </li>
 <li>  fluid dynamics, multi-physics problems (fluid-structure interaction, magnetohydrodynamics, fluid flows in porous media)  </li>
 <li>  numerical analysis  </li>
 <li>  finite element methods   </li>
 <li>  boundary element methods   </li>
 <li> multigrid and domain decomposition methods  </li>
 <li> scientific computing, design of finite element software  </li>
 <li> numerical linear algebra, preconditioning  </li>
<!--  <li> geometric PDEs </li> -->
 </ul>

 
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

 
 <ul>
 
 <li> Spring 2020, MATH 4330 - MATHEMATICAL COMPUTING
  <a href="./teaching/2020a_spring_math4330.pdf" > syllabus </a> 
  </li>
  
 <li> Spring 2020, MATH 3350 - HIGHER MATHEMATICS FOR ENGINEERS AND SCIENTISTS I (Honors)
  <a href="./teaching/2020a_spring_math3350.pdf" > syllabus </a> 
  </li>

  <li> Fall 2019, MATH 3354 - DIFFERENTIAL EQUATIONS I 
  <a href="./teaching/2019b_fall_math3354.pdf" > syllabus </a> 
  </li>

 <li> Fall 2019, MATH 3350 - HIGHER MATHEMATICS FOR ENGINEERS AND SCIENTISTS I (Honors)
  <a href="./teaching/2019b_fall_math3350.pdf" > syllabus </a> 
  </li>

  <li> Spring 2019, MATH 2360 - LINEAR ALGEBRA (Sections 012 and H01) 
  <a href="./teaching/2019a_spring_math2360.pdf" > syllabus </a> </li>
 
 <li> Fall 2018, MATH 4354 - DIFFERENTIAL EQUATIONS II
  <a href="./teaching/2018b_fall_math4354.pdf" > syllabus </a> </li>


 <li> Fall 2018, MATH 5344 - TOPICS IN NUMERICAL ANALYSIS I - FINITE ELEMENT METHODS
  <a href="./teaching/2018b_fall_math5344.pdf" > syllabus </a> </li>

  
 <li> Spring 2018, MATH 5335 - NUMERICAL ANALYSIS II
  <a href="./teaching/2018a_spring_math5335.pdf" > syllabus </a> </li>

  
 <li> Spring 2018, MATH 2360 - LINEAR ALGEBRA
  <a href="./teaching/2018a_spring_math2360.pdf" > syllabus </a> </li>

  
 <li> Fall 2017, MATH 5334 - NUMERICAL ANALYSIS I
  <a href="./teaching/2017b_fall_math5334.pdf" > syllabus </a> </li>

  
 <li> Fall 2017, MATH 4354 - DIFFERENTIAL EQUATIONS II
  <a href="./teaching/2017b_fall_math4354.pdf" > syllabus </a> </li>

  
 <li> Spring 2017, MATH 2360 - LINEAR ALGEBRA
  <a href="./teaching/2017a_spring_math2360.pdf" > syllabus </a> </li>


 <li> Fall 2016, MATH 2360 - LINEAR ALGEBRA
  <a href="./teaching/2016b_fall_math2360.pdf" > syllabus </a> </li> 


 <li> Spring 2016, MATH 5345 - TOPICS IN NUMERICAL ANALYSIS II
 <a href="./teaching/2016a_spring_math5345.pdf" > syllabus </a> </li> 


 <li> Spring 2016, MATH 4351 - ADVANCED CALCULUS II
 <a href="./teaching/2016a_spring_math4351.pdf" > syllabus </a> </li>  


 <li> Fall 2015, MATH 5344 - TOPICS IN NUMERICAL ANALYSIS I 
 <a href="./teaching/2015b_fall_math5344.pdf" > syllabus </a> </li>  


 <li>  Fall 2015, MATH 2360 - LINEAR ALGEBRA 
 <a href="./teaching/2015b_fall_math2360.pdf" > syllabus </a> </li>  


 <li> Spring 2015, MATH 5335 - NUMERICAL ANALYSIS II
 <a href="./teaching/2015a_spring_math5335.pdf" > syllabus </a> </li>  

 <li>  Fall 2014, MATH 5334 - NUMERICAL ANALYSIS I
 <a href="./teaching/2014b_fall_math5334.pdf" > syllabus </a> </li>  


 <li> Fall 2014, MATH 4354 - DIFFERENTIAL EQUATIONS II
 <a href="./teaching/2014b_fall_math4354.pdf" > syllabus </a> </li>  


 <li>  Spring 2014, MATH 4350 - ADVANCED CALCULUS I 
 <a href="./teaching/2014a_spring_math4350.pdf" > syllabus </a> </li> 


 <li> Fall 2013, MATH 4354 - DIFFERENTIAL EQUATIONS II 
 <a href="./teaching/2013b_fall_math4354.pdf" > syllabus </a> </li> 


 <li> Spring 2013, MATH 3350 - HIGHER MATHEMATICS FOR ENGINEERS AND SCIENTISTS I (sections 14 and 15) 
 <a href="./teaching/2013a_spring_math3350.pdf" > syllabus </a> </li>  


 <li>  Fall 2012, MATH 2450 - CALCULUS III WITH APPLICATIONS (sections 14 and 16)
 <a href="./teaching/2012b_fall_math2450.pdf" > syllabus </a> </li> 

 </ul>

 <br>
 At University of Bologna:<br>

<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
 <li> Fall 2011, FOUNDATIONS OF COMPUTER SCIENCE, 
 Teaching Assistant  </li>
 


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
