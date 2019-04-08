<!DOCTYPE html>   
<!-- FOR THE BAR CHART VISIT: http://bost.ocks.org/mike/bar/ -->
<!-- http://examples.oreilly.com/9780596805531/examples/01.01.loancalc.html this is the page I started from... --> 
<!--  What is the difference with matazza? Well, you play single so you should collect the statistics for all 4 players instead of just one couple -->

<html>

<head>

 <?php $mydepth = "../"; ?>
 <?php include($mydepth . "head_links.php");  ?>

 <?php $mytopic = "A simulator of card games"; ?>
 <title> <?php echo $mytopic; ?> </title>

 
 
</head>


<body>

<?php 
// include($mydepth . 'navbar.php');  
?>

 <div class="parallax_content parallax_container"> 
 <div class="container text-center my_title">
        <h1> <?php echo $mytopic; ?>  </h1>
   </div>
</div>
 
 
<div class="container">

<br>

<h1> GOAL </h1>

 For a given deal of cards, the simulator performs an arbitrary number of random matches of some card games. <br>
 At present, two Italian card games are implemented, Tressette and Beccaccino. <br>
 <a href="https://en.wikipedia.org/wiki/Tressette">Tressette</a> 
 and
 <a href="https://it.wikipedia.org/wiki/Marafone_Beccacino">Beccaccino</a>
<!-- 	 <a href="https://it.wikipedia.org/wiki/Maraffa">Beccaccino</a> -->
 are somewhat similar to other card games such as Whist, Spades and Hearts. <br>
<!-- They only differ in the fact that Tressette does not have a trump, while Beccaccino does. <br> -->
The simulator below computes the frequency distribution of the scores. <br>
The moves are consistent with the rules of the games and are determined randomly. Artificial Intelligence is not implemented yet. <br>
<br>
The simulator can help answer questions such as: <br>
What would the score have been if another trump was picked? <br>
What was the minimum/maximum possible score for the given deal? <br>
What would the score have been if another player started the game? <br>
How could a small variation of the deal have affected the score? <br>


<br> <br> <h1> INPUT </h1> <br>


<ul>
<li>
Insert the number of cards per suit [3-13]:
 <input id="nsinglesuit" type="number" min=3 max=13 value=10
        oninput='var fac = sFact(document.getElementById("nsinglesuit").value); 
                  max_matches.innerHTML = fac*fac*fac*fac;
                  var mymatch = new Match(); 
                  mymatch.deck_set_n_cards();
                  mymatch.match_compute_max_num_deals();
                  mymatch.match_compute_max_score();'>
 <!--I need 3 as a minimum because of the conversion of the scale which is shifted by 3-->

 <!--  I need to understand this onchange event: -->
<!-- <button onclick='document.getElementById("nsinglesuit").value = getRandomInt(3,14);'> Set random number of cards </button> -->
<!--   When I click to get a random number, he doesn't update the other statistics... isn't this a change too?  -->
<!-- <button onmousedown="document.getElementById('pl0_a').type = 'hidden';" onmouseup="document.getElementById('pl0_a').type = 'text';">hide/view</button>  -->
<!-- I want to hold on click and release on click -->

<br>
</li>


<li>
Choose the game: 
<select id="game">
  <option value="bec"  onclick='$(document).ready(function(){$("span.game_specifics").toggle();});'> Beccaccino </option>   <!--onclick='game_spec.innerHTML = "Helloooo";'-->
  <option value="tre"  onclick='$(document).ready(function(){$("span.game_specifics").toggle();});'> Tressette  </option>
</select>


<br>
The couples are Player 0 - Player 2 and Player 1 - Player 3. 
<br>
</li>

<li>
Insert the card numbers in the table below for each player and each suit (the first index of each suit is 1). 
<br>
It doesn't matter what and how many characters you use between the numbers.
It doesn't even matter the order in which you write down the numbers.
<button onclick="var mymatch = new Match(); mymatch.deck_set_n_cards(); mymatch.deck_write_input();"> Deal random cards </button>
<button onclick="var mymatch = new Match(); mymatch.deck_clear_cards();"> Clear cards </button> 
<button onclick="var mymatch = new Match(); mymatch.deck_shift_players();"> Shift players </button> 
<button onclick="var mymatch = new Match(); mymatch.deck_set_n_cards(); mymatch.deck_complete_last_player();"> Complete last player </button> 
<br>

<table class="deck_table">
<tr>
   <tr>
   <td> Player 0  <br>
    <input type="radio" onclick="document.getElementById('pl0_a').type = 'hidden';
                                 document.getElementById('pl0_b').type = 'hidden';
                                 document.getElementById('pl0_c').type = 'hidden';
                                 document.getElementById('pl0_d').type = 'hidden';" /> hide
   </td>  
  <th> 
       a (spade)   <input id="pl0_a" type="text"> <br>
       b (bastoni) <input id="pl0_b" type="text"> <br>
       c (coppe)   <input id="pl0_c" type="text"> <br>
       d (denari)  <input id="pl0_d" type="text"> 
  </th>
  <tr> 
  <td> Player 1  <br>
    <input type="radio" onclick="document.getElementById('pl1_a').type = 'hidden';
                                 document.getElementById('pl1_b').type = 'hidden';
                                 document.getElementById('pl1_c').type = 'hidden';
                                 document.getElementById('pl1_d').type = 'hidden';" /> hide
  </td>
  <th> 
       a (spade)   <input id="pl1_a" type="text"> <br>
       b (bastoni) <input id="pl1_b" type="text"> <br>
       c (coppe)   <input id="pl1_c" type="text"> <br>
       d (denari)  <input id="pl1_d" type="text"> 
  </th>
  <tr> 
  <td> Player 2 <br>
    <input type="radio" onclick="document.getElementById('pl2_a').type = 'hidden';
                                 document.getElementById('pl2_b').type = 'hidden';
                                 document.getElementById('pl2_c').type = 'hidden';
                                 document.getElementById('pl2_d').type = 'hidden';" /> hide
  </td> 
  <th> 
       a (spade)   <input id="pl2_a" type="text"> <br>
       b (bastoni) <input id="pl2_b" type="text"> <br>
       c (coppe)   <input id="pl2_c" type="text"> <br>
       d (denari)  <input id="pl2_d" type="text"> 
  </th>
  <tr>
  <td> Player 3 <br> 
    <input type="radio" onclick="document.getElementById('pl3_a').type = 'hidden';
                                 document.getElementById('pl3_b').type = 'hidden';
                                 document.getElementById('pl3_c').type = 'hidden';
                                 document.getElementById('pl3_d').type = 'hidden';" /> hide

  </td>  
  <th> 
       a (spade)   <input id="pl3_a" type="text"> <br>
       b (bastoni) <input id="pl3_b" type="text"> <br>
       c (coppe)   <input id="pl3_c" type="text"> <br>
       d (denari)  <input id="pl3_d" type="text"> 
  </th>
</table>

<br>
</li>

<li>
<span class="game_specifics" id="game_spec">  <!--why can't we toggle id's?-->
In the Beccaccino case, choose the trump for the match (set by Player 0):
<select id="trump_type">
  <option value="a"> a (spade)   </option>
  <option value="b"> b (bastoni) </option>
  <option value="c"> c (coppe)   </option>
  <option value="d"> d (denari)  </option>
</select>
<!--<button onclick='var mymatch = new Match(); 
                    suit_pos = getRandomInt(0,mymatch.n_suits);
                    my_trump = mymatch.card_suits[suit_pos];
                    document.getElementById("trump_type").value = my_trump;'> Set random trump </button>-->
</span>
<!--<script>
$(document).ready(function(){
    $("button.test").click(function(){
        $("span.game_specifics").toggle();
    });
});
</script>-->

<!-- <button class="test">hello</button> -->

</li>
</ul>


<br>
The maximum number of matches with this number of cards is <span id="max_matches" class="output"> </span> 
<br>
(then in the Beccaccino case multiply by the number of suits to account for the choices of the trump)
<br>
The number of possible card deals is <span id="num_deals" class="output"> </span> 
<br>
The score of a match goes from 0 to <span id="match_max_score" class="output"> </span> 

<br><br> <h1> OUTPUT </h1> <br>
 <!-- ==================================   -->
<button onclick="
var mymatch = new Match(); 
    mymatch.deck_set_n_cards();
 var n_bars =    mymatch.match_compute_max_score();

  var data = [];
    for (var i = 0; i < n_bars+1; i++ ) {
    data[i] = 0;
   }
   
for (var i = 0; i < document.getElementById('n_matches').value; i++)  {
var match_score = mymatch.match_play();
data[parseInt(match_score)]++ ;
}
 createBarChart(data);
">
Play </button> number of matches: <input id="n_matches" type="number" min=1 value=1> 
<!-- ==================================   -->
<br>


<!-- ==================================   -->
<!-- ==================================   -->
<!-- ==================================   -->
<strong> Score distribution for the couple Player 0 - Player 2 </strong> 
<button onclick="clearBarChart();">Clear bar chart</button>

<br>

 <svg class="bar_chart"></svg>  <!-- is the position of this important?!-->
<!-- </canvas> -->

<br>
 Enable text output <input type="checkbox" id="enable_out" value="enable_out"> (check it only for debugging purposes)
<br>
<!-- ==================================   -->
<button onclick="clear_output();">Clear text output</button> 


<br>
Text output: <span id="match_output" class="output"></span>

<!-- =================== -->
<!-- =================== -->
<!-- =================== -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js"></script>
<!-- Normally, this script would go in the document <head> above-->
<script>
"use strict"; // Use ECMAScript 5 strict mode in browsers that support it

//=============================================
window.onload = createBarChart;  //it creates a bar chart with nothing inside
//=============================================

function createBarChart(my_data) {

 clearBarChart();
 

var width_ext = (window.innerWidth > 0) ? window.innerWidth : screen.width; //TODO this could be done better, the purpose is to have a Web-responsive width
var height_ext = width_ext/2;
var margin = {top: 0.05*height_ext, right: 0.05*width_ext, bottom: 0.05*height_ext, left: 0.05*width_ext};
var width = width_ext - margin.left - margin.right;
var height = height_ext - margin.top - margin.bottom;
var border = 1;
var bordercolor = 'black';


 var x = d3.scale.ordinal()
     .rangeRoundBands([0, width], .1);

  var y = d3.scale.linear()
    .range([height,0]);
    
var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");
    

//set box dimensions    
var chart = d3.select(".bar_chart")
    .attr("width", width_ext)
    .attr("height", height_ext);
    
//now we draw the bounding box of the extended chart
    var borderPath = chart.attr("border",border).append("rect")
       			.attr("x", 0)
       			.attr("y", 0)
       			.attr("height", height_ext)
       			.attr("width", width_ext)
       			.style("stroke", bordercolor)
       			.style("fill", "none")
       			.style("stroke-width", border);
  
//now we shift the origin (the top-left corner) to move inside the box
  chart.append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

//set the domains    
    y.domain([0,d3.max(my_data)]);

// //draw the axes    

//   chart.append("g")
//       .attr("class", "x axis")
//       .attr("transform", "translate(0," + height + ")")
//       .call(xAxis);
// 
//   chart.append("g")
//       .attr("class", "y axis")
//       .call(yAxis);
//  .append("text")
//     .attr("transform", "rotate(-90)")
//     .attr("y", 6)
//     .attr("dy", ".71em")
//     .style("text-anchor", "end")
//     .text("Frequency");
  
var barWidth = width / my_data.length;    
    
 var bar = chart.selectAll("g")
    .data(my_data)
    .enter().append("g")
      .attr("transform", function(d, i) { return "translate(" + i * barWidth + ",0)"; });

  bar.append("rect")
      .attr("y", function(d) { return y(d); })
      .attr("height", function(d) { return height - y(d); })
      .attr("width", barWidth - 1);

  bar.append("text")
      .attr("x", barWidth / 2)
      .attr("y", function(d) { return y(d) - 0; })
      .attr("dy", "1em")
      .text(function(df) { return df; });
  
  bar.append("text")
      .attr("x", barWidth / 2)
      .attr("y", function(d) { return y(d) + 10; })
      .attr("dy", "1em")
      .text(function(d,i) { return i; });
  
    return;
    
 }
    
    
 function clearBarChart() {

 d3.select(".bar_chart").selectAll("g").remove();
 
 return;
}
    
//====================================    
    
// <!-- Match (or Hand), Round (or Trick),  -->
// <!-- Player -->
// <!-- Card -->


// function isNumber(obj) { return !isNaN(parseFloat(obj)); }
// function isNumber(n) { return /^-?[\d.]+(?:e-?\d+)?$/.test(n); } //these do not seem to work fine

function sFact(num) {
    var rval=1;
    for (var i = 2; i <= num; i++)
        rval = rval * i;
    return rval;
}


function binomial(n, k) {  
         if ((typeof n !== 'number') || (typeof k !== 'number'))   
      return false;   
        var coeff = 1;  
        for (var x = n-k+1; x <= n; x++) coeff *= x;  
        for (x = 1; x <= k; x++) coeff /= x;  
        return coeff;  
    } 



// Returns a random integer between min (included) and max (excluded)
// Using Math.round() will give you a non-uniform distribution!
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function js_abort() {
   throw "This is not an error. This is just to abort javascript";
}


//numbers start from 0

function Match() {

//these were global variables, but outside of any js function they are not updated... so I must put them in the constructor of the "biggest object"
    this.n_suits = 4;
    this.card_suits = ["a", "b", "c", "d"];
    this.n_players = 4;
    this.n_cards_per_suit = "";
    this.n_cards_per_pl = "";

//Deck
   this.deck = []; 
   
//Match  (or Hand)
  this.match_trump_idx = "";
  this.match_trump = "";
  this.match_running_idx = 0;  //until n_cards_per_pl*n_players
  this.match_level = 0;        //until n_cards_per_pl
  this.match_score = [0,0];    //two couples  

//Round (or Trick)
  this.round_cards = [];
  this.round_winning_card_idx = 0;
  this.round_winner = 0;
  this.round_suit = "";
  this.round_first_player = 0;    //this is the guy who sets the trump
  this.round_current_player_index = 0;  //this is related to the round
  
// Step (a single played card) 
 
 
 this.deck_set_n_cards = function() {

    this.n_cards_per_suit = document.getElementById("nsinglesuit").value;   // difference with nsinglesuit.value?!
    this.n_cards_per_pl = this.n_cards_per_suit*this.n_suits/this.n_players;  //this is also the number of rounds in a match
 
  return;
 }
 
 this.deck_clear_cards  = function() {

    for (var ply = 0; ply < this.n_players; ply++ ) {
        for (var s = 0; s < this.n_suits; s++ ) {
        var field_string = "pl" + ply + "_" + this.card_suits[s];
        document.getElementById(field_string).value = "";
        }
      }

  return;
}
 
 
 this.deck_write_input = function() {

//i'll take a random number for the suit and a random number for the number.
//I will loop over the players (no randomize on them)
//the pattern 5-5 only works with 10 cards, so i'll go 1-1-1-...
//wait, I don't think it's the same to pick the suit and the number separately every time.
// as you go along, in fact, the probabilities change
// so i'll just pick a number from 0 to 40... but no, 
//you should take a number from 0 to 39, and then 0 to 38, and 37, and 36, and so on...

  this.deck_clear_cards();


 //I will add a card to that player if the card wasnt dealt yet
var truth_flags = [];

          for (var i = 0; i < this.n_suits; i++ )  {
          truth_flags[i] = [];
          for (var j = 0; j < this.n_cards_per_suit; j++ )  truth_flags[i][j] = false;
          }

   for (var i = 0; i < this.n_cards_per_pl; i++ ) {
     
   for (var ply = 0; ply < this.n_players; ply++ ) {
     do {
        var suit_rand = getRandomInt(0,this.n_suits);
        var num_rand = getRandomInt(0,this.n_cards_per_suit);
        num_rand = num_rand + 1;
       }  while( truth_flags[suit_rand][parseInt(num_rand)-1] == true )
       var field_string = "pl" + ply + "_" + this.card_suits[suit_rand];
        document.getElementById(field_string).value += " " + num_rand;
      truth_flags[suit_rand][parseInt(num_rand)-1] = true;
    } //players
    
    } //rounds around

    
    return;
 } 
 
//============================================================
//Player 0 becomes Player 1, and so on
  this.deck_shift_players = function() {

    for (var ply = 1; ply < this.n_players; ply++ ) {
        for (var s = 0; s < this.n_suits; s++ ) {
        var field_string_in   = "pl" + "0" + "_" + this.card_suits[s];
        var field_string_out  = "pl" + ply + "_" + this.card_suits[s];
        var temp_array = document.getElementById(field_string_out).value;
        document.getElementById(field_string_out).value = document.getElementById(field_string_in).value;
        document.getElementById(field_string_in).value = temp_array;
        }
      }
  
  
  
    return;
 } 

 
//============================================================
//complete Player 3 to avoid input by hand
 this.deck_complete_last_player = function()  {
 
  var last_player_card_flags = [];
  
     for (var s = 0; s < this.n_suits; s++ ) {
     last_player_card_flags[s] = [];
      for (var c = 0; c < this.n_cards_per_suit; c++ ) {
           last_player_card_flags[s][c] = true;
         }
        }
 
  var player_to_complete_idx = this.n_players - 1; //last player

     for (var ply = 0; ply < player_to_complete_idx; ply++ ) {
     
                   var card_pos = 0;
                   
            for (var s = 0; s < this.n_suits; s++ ) {

    var field_string = "pl" + ply + "_" + this.card_suits[s];
    var pl_list_str = document.getElementById(field_string).value; //how can JS understand that this is a string? maybe from the initialization

//this routine reads integers from strings, it doesn't matter what the separator characters are 
   var str_idx = 0;
     while (str_idx < pl_list_str.length) {
        
        if (pl_list_str[str_idx] == "0")  throw " Input card numbers starting from 1, and without leading 0's "; 

        else if (      //TODO have to find a more synthetic method, but this works
            pl_list_str[str_idx] == "1" || 
            pl_list_str[str_idx] == "2" || 
            pl_list_str[str_idx] == "3" || 
            pl_list_str[str_idx] == "4" || 
            pl_list_str[str_idx] == "5" || 
            pl_list_str[str_idx] == "6" || 
            pl_list_str[str_idx] == "7" || 
            pl_list_str[str_idx] == "8" || 
            pl_list_str[str_idx] == "9" 
        ) {
        
       var number = pl_list_str[str_idx];
       
        while (
            pl_list_str[str_idx+1] == "0" || 
            pl_list_str[str_idx+1] == "1" || 
            pl_list_str[str_idx+1] == "2" || 
            pl_list_str[str_idx+1] == "3" || 
            pl_list_str[str_idx+1] == "4" || 
            pl_list_str[str_idx+1] == "5" || 
            pl_list_str[str_idx+1] == "6" || 
            pl_list_str[str_idx+1] == "7" || 
            pl_list_str[str_idx+1] == "8" || 
            pl_list_str[str_idx+1] == "9" 
           )    {
              number += pl_list_str[str_idx+1];  /*this is an addition as a string*/ 
              str_idx++;
           }
        
        number = parseInt(number);  //the string is now a number
        if ( number >  this.n_cards_per_suit )  throw "A number is larger than the number of cards per suit";
       
       last_player_card_flags[s][number-1] = false;

         card_pos++;
         
        }  //end else if
        
        str_idx++;
    }   //end while
        
           }  //end suits loop

  if (card_pos > this.n_cards_per_suit) { var mes = " Too many cards for  player " + ply; throw  mes; }

         } //end player loop
         
    //now complete the input for last player
    for (var s = 0; s < this.n_suits; s++ ) {
     var field_string = "pl" + player_to_complete_idx + "_" + this.card_suits[s];
      document.getElementById(field_string).value = "";
      for (var c = 0; c < this.n_cards_per_suit; c++ ) {
      var string_in = c+1;
     if (last_player_card_flags[s][c] == true) { document.getElementById(field_string).value += string_in; document.getElementById(field_string).value += " ";}
      }    
    }
    
         
        
    return;
    
    } 
 
 
//==============================================================
 this.deck_read_input = function()  {

               for (var ply = 0; ply < this.n_players; ply++ ) {
                       var card_pos = 0;
                    for (var s = 0; s < this.n_suits; s++ ) {

    var field_string = "pl" + ply + "_" + this.card_suits[s];
    var pl_list_str = document.getElementById(field_string).value; //how can JS understand that this is a string? maybe from the initialization

//this routine reads integers from strings, it doesn't matter what the separator characters are 
        var str_idx = 0;
        while (str_idx < pl_list_str.length) {
        
        if (pl_list_str[str_idx] == "0")  throw " Input card numbers starting from 1, and without leading 0's "; 

        else if (      //TODO have to find a more synthetic method, but this works
            pl_list_str[str_idx] == "1" || 
            pl_list_str[str_idx] == "2" || 
            pl_list_str[str_idx] == "3" || 
            pl_list_str[str_idx] == "4" || 
            pl_list_str[str_idx] == "5" || 
            pl_list_str[str_idx] == "6" || 
            pl_list_str[str_idx] == "7" || 
            pl_list_str[str_idx] == "8" || 
            pl_list_str[str_idx] == "9" 
        ) {
        
       var number = pl_list_str[str_idx];
       
        while (
            pl_list_str[str_idx+1] == "0" || 
            pl_list_str[str_idx+1] == "1" || 
            pl_list_str[str_idx+1] == "2" || 
            pl_list_str[str_idx+1] == "3" || 
            pl_list_str[str_idx+1] == "4" || 
            pl_list_str[str_idx+1] == "5" || 
            pl_list_str[str_idx+1] == "6" || 
            pl_list_str[str_idx+1] == "7" || 
            pl_list_str[str_idx+1] == "8" || 
            pl_list_str[str_idx+1] == "9" 
          )        {
          number += pl_list_str[str_idx+1];  /*this is an addition as a string*/ 
          str_idx++;
           }
        
        number = parseInt(number);  //the string is now a number
       
      if ( number >  this.n_cards_per_suit )  throw "A number is larger than the number of cards per suit";

      //add a card to the deck of the player
       this.deck[ply][card_pos] = new Card(this.card_suits[s],(number + (this.n_cards_per_suit - 3 -1)/*6*/)%this.n_cards_per_suit);
         card_pos++;
        }
        
        str_idx++;
        }   //end while
        
           }  //end suits loop

  if (card_pos > this.n_cards_per_suit) { var mes = " Too many cards for  player " + ply; throw  mes; }

         } //end player loop
        
    return;
    
    } 
 
 
 
  //for the given number of cards per suit, every suit must have all the components, no doubles
//can I avoid using 40 flags and define a cumulative index? the problem about cumulative is that you 
//don't want to count things twice... so you need to keep track of each card... so yeah you need to flag each, I guess
//even the sum of the numbers would not work, because you may have 7+7+7 instead of 6+7+8

 this.deck_check_completeness = function(players) {

//double array n_suits * n_cards_per_suit
//js does not support associative arrays, in the sense that they become Objects, not arrays
var truth_flags = [];

          for (var i = 0; i < this.n_suits; i++ )  {
          truth_flags[i] = [];
          for (var j = 0; j < this.n_cards_per_suit; j++ )  truth_flags[i][j] = false;
          }
          
         for (var i = 0; i <  this.n_players; i++ ) {
                    for (var j = 0; j < this.n_cards_per_pl; j++ ) {
                           var suit_idx = this.card_suits.indexOf(players[i].deck[j].suit);
                           var number_idx =  players[i].deck[j].number;
                           truth_flags[suit_idx][number_idx] = true;
            } 
          }

          
          for (var i = 0; i < this.n_suits; i++ )  
          for (var j = 0; j < this.n_cards_per_suit; j++ ) 
              if (truth_flags[i][j] == false )  { throw "A card from the deck was not dealt"; } //js_abort();  
          
     return;     
}
  
  
     
  //=====================================================================
   //for the first player, it's just a matter of  picking one of those that were not played yet
   //for the other players, the round was initialized already, so we should pass the round and get the suit of that round
   //if the player is the first, the playable cards do not depend on the round_suit because he decides it.
   //in any case, this function does not write the round_suit, but it only reads it
   //This function not only computes the playable cards, but also sets the flags. Actually now it only sets the flags

   //this function is a player issue because it depends on what the first player played
   
   //notice that the playable cards may be of only one suit, or, if the suit is not there, of all the other available ones
   
 this.step_compute_playable_cards = function (player) {
   
   
         if ( this.match_running_idx%this.n_players == 0 ) { //first players
         
          if ( this.match_running_idx/this.n_players < this.n_cards_per_pl  ) {
   
       for (var i = 0; i < this.n_cards_per_pl; i++)  { 
       if (player.deck[i].was_played_in_match == false) {  player.deck[i].is_playable_in_round = true; }
       else                                           {  player.deck[i].is_playable_in_round = false; } //this was done already but I think it doesn't hurt 
       } //loop over all cards yet to be played

    
         }
      }  //end being first player    
      
   else {   //non-first players
   
         var count_suit = 0;   
          for (var i = 0; i < this.n_cards_per_pl; i++)  {
          if (player.deck[i].was_played_in_match == false) {

          if (player.deck[i].suit == this.round_suit ) {
          count_suit++;  
          player.deck[i].is_playable_in_round = true;
          }
          else                                                 { player.deck[i].is_playable_in_round = false;  } //better to restate that
          
            
         } } //loop over all cards yet to be played
          
          if (count_suit==0) { //if you are not the first and you dont have the suit, all cards are playable 
          
          for (var i = 0; i < this.n_cards_per_pl; i++)  {
          if (player.deck[i].was_played_in_match == false) { player.deck[i].is_playable_in_round = true; } 
          else                                             { player.deck[i].is_playable_in_round = false; } //this was done already but I think it doesn't hurt 
          } //loop over all cards yet to be played
          
          }

          
   }  //not first players
   
  
   return; 
   
   }
  

    
 this.step_update_current_player_index = function()   {
    
    this.round_current_player_index = (this.round_first_player + this.match_running_idx)%this.n_players;
    
    return;
    
    }
    


  //take the four cards, if there are trumps, take the higher one
  //in deciding who is the winner, you also need to know who the first player was
  //an alternative would be to compute the winner "on-line", so the temporary winner during the round
  //in fact, the determination of the round winner is incremental
 this.step_compute_current_winner = function (players)  {

       var winning_card = this.round_cards[this.round_winning_card_idx];                    //how do I deal with references and pointers in javascript?!?
       var current_card_idx = players[this.round_current_player_index].index;
       var current_card = this.round_cards[current_card_idx];

     if  (  current_card.suit == winning_card.suit ) {  //first you compare the suit, then the number
          if  ( winning_card.number < current_card.number  ) {
                this.round_winning_card_idx = current_card_idx;
           }
     }

     else {  //if the suits are not the same, the new one may or may not be the trump
     
        if ( document.getElementById("game").value == "bec" ) {
               if  (current_card.suit == this.match_trump)  this.round_winning_card_idx = current_card_idx;
         }
        //      else do nothing
      }
     
     
    if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br/> The current winner for round "  + " is " + this.round_winning_card_idx + "  <br/> ";

     return;
    
    } 
  

     //===================================================
   //I will have a bunch of possible first hands. After each of them I will have a different winner, 
   //so while all the first hands all start from the first player, the other hands may start each 
   //with a different player, so the first player for each round
   
   //With the vertical approach, I will finish each match from the top to the bottom.
   
   //when the index is a multiple of the number of players: compute the winner, increase the depth, and set the new first player
   //whe you reached the number of games, finish the match and RESET EVERYTHING.
   
  this.step_increase = function(players) {
   
   if ( this.match_running_idx > this.n_players*this.n_cards_per_pl ) {   if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " Error: went too far <br />";    return; }  //this is to avoid infinite recursion!!!
   
   

        if ( this.match_running_idx%this.n_players == 0 ) {  //rounds
        
          if ( this.match_running_idx != 0 )  {
          
          var round_prev = this.match_running_idx/this.n_players - 1;  //this is the same as this.match_level
          if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br /> E r " + round_prev + " "  + " <br />";

          //=================
          this.round_winner = this.round_winning_card_idx;
          //=================
          this.round_compute_score();
          
          
          //===== go next ============
          this.round_first_player = this.round_winner;  //the first player for the next is the winner for the previous
          //================
          this.match_level++;
          
          this.step_update_current_player_index();

          //================ all the cards that were not played are playable for the next round. 
          //================ Then after the first player plays, we know which cards are playable for everyone
          for (var i = 0; i < this.n_players; i++ ) {
                    for (var j = 0; j < this.n_cards_per_pl; j++ ) {
                      if (players[i].deck[j].was_played_in_match == true)   players[i].deck[j].is_playable_in_round = false; 
                      else                                                  players[i].deck[j].is_playable_in_round = true; 
                    } 
          } 
          
          //update everything for the round() ===============
         
          }
          
          else {  if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML +=  " <br /> Begin of a match <br />"; }
          
          
          if ( this.match_running_idx/this.n_players < this.n_cards_per_pl  ) {
          
          if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += "  <br/> B r " + this.match_running_idx/this.n_players + " <br/>"; 
          this.round_cards = []; //is this the way to clear an array?
          this.round_suit = "";
//           this.round_first_player = ;  //this was set by the previous round
          this.round_winner = this.round_first_player;
          this.round_winning_card_idx = this.round_first_player;
          }
          
          else if ( this.match_running_idx/this.n_players == this.n_cards_per_pl  ) {
         
          if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br /> End of a match <br />";
          
          //reset all that you need for the match() ===========
//           this.match_score = [0,0]; you need to return it later
          this.match_level = 0;
          this.match_running_idx = 0;
          this.round_first_player = 0;
          this.step_update_current_player_index();
       
          //update the maximum or minimum score
          
          for (var i = 0; i < this.n_players; i++ ) {
                    for (var j = 0; j < this.n_cards_per_pl; j++ ) {
                           players[i].deck[j].was_played_in_match = false;  
                           players[i].deck[j].is_playable_in_round = true;  
            } 
          }

          
          return;  // to avoid a "spare beginning" next time   //this also avoids infinite recursion
//            this.match_running_idx=0;  // this would give infinite loop

          }


        }  //rounds

        
  
         this.step_compute_playable_cards( players[this.round_current_player_index] );
         
//        for (var i = 0; i < 2; i++ ) {
//         if (players[this.round_current_player_index].deck[i].is_playable_in_round == true)   {
//        var  card_idx = i;
         
         //pick one random card from the playable ones
        var card_idx;
 
          do {
            card_idx = getRandomInt(0,this.n_cards_per_pl); 
          }   while (!(players[this.round_current_player_index].deck[card_idx].is_playable_in_round)) 
         
         
         
         if ( document.getElementById('enable_out').checked == true ) 
            match_output.innerHTML += " Player " + players[this.round_current_player_index].index + " : "
                                                 + players[this.round_current_player_index].deck[card_idx].suit + " " 
                                                 + players[this.round_current_player_index].deck[card_idx].number + " / ";
                                         
         players[this.round_current_player_index].deck[card_idx].was_played_in_match = true;                    
         
         this.round_cards[players[this.round_current_player_index].index] = players[this.round_current_player_index].deck[card_idx];

         if ( this.match_running_idx%this.n_players == 0   &&  this.match_running_idx/this.n_players < this.n_cards_per_pl )  {
         this.round_suit = this.round_cards[this.round_first_player].suit;
            if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br/> " + " The suit for this round is " + this.round_suit; // + " <br/> ";
         }
      
         this.step_compute_current_winner(players);
      
         this.match_running_idx++;
         this.step_update_current_player_index();

         this.step_increase(players);  //this must be at the end, as a recursive call

         
//           }  
//          }  // loop over playable cards
        


   return;
   
   }  
  

   
    //I tried to make it flexible with a varying number of cards
 this.round_compute_score = function()   {
    
    var couple_idx = 0; if (this.round_winner%2 == 1) couple_idx = 1;
    if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br/> The winning couple is " +  couple_idx + "  <br/> ";   
    
    
    for (var i = 0; i < this.n_players; i++)  {
    
       if (this.round_cards[i].number >= /*4*/ Math.floor((this.n_cards_per_suit-1)/2) ) this.match_score[couple_idx]   += 1;
       if (this.round_cards[i].number == /*7*/ Math.ceil((this.n_cards_per_suit)*2/3)  ) this.match_score[couple_idx]   += 2;
    
    }
    
    if (this.match_level == this.n_cards_per_pl - 1) this.match_score[couple_idx]   += 3;
    
    
    
    if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br/> The scores at this round are " + this.match_score[0] + " - " + this.match_score[1] + " <br/> ";
  
    
   return;
   
    }

  
  
  this.match_compute_max_num_deals = function()   {
 
    var num_of_deals = 
                 binomial(this.n_suits*this.n_cards_per_suit,this.n_cards_per_pl) *
                 binomial(this.n_suits*this.n_cards_per_suit - this.n_cards_per_pl,this.n_cards_per_pl) *
                 binomial(this.n_suits*this.n_cards_per_suit - this.n_cards_per_pl*2,this.n_cards_per_pl);

    num_deals.innerHTML = num_of_deals;
   
   return num_of_deals;
   
   }


//this function is connected to the one that computes the score at each round   
  this.match_compute_max_score = function()   {
    
    var match_max_score_in = 0;
    
           for (var j = 0; j < this.n_cards_per_suit; j++)  {
             if (j >= /*4*/ Math.floor((this.n_cards_per_suit-1)/2) ) match_max_score_in += 1;
             if (j == /*7*/ Math.ceil((this.n_cards_per_suit)*2/3)  ) match_max_score_in += 2;
             }
             
      match_max_score_in *= this.n_suits;
      
      match_max_score_in += 3;
      
      match_max_score.innerHTML = match_max_score_in;    //I believe there is some problem if you call the variables like the <span> output fields
    
    return match_max_score_in;
    }


  this.match_play = function() {


//clear the output =========================================
 clear_output();
  
 //the match was initialized outside ==========================================
 
 
// fill the decks =================================================
 for (var i = 0; i < this.n_players; i++ )  this.deck[i] = [];
 
 try {
   this.deck_read_input();
    }
  catch(e) { if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += e;  return; }

//from the real to the program add 6, or subtract 4...
   
 // create the players =====================================
 var players = [];
   for (var i = 0; i < this.n_players; i++ )  players[i] = new Player(this.deck[i],i);

 //check whole deck correctness =====================================
//  Need to put it here because some variables belong to the Match
 // the try catch must be OUTSIDE of the function containing the throw
  try{
   this.deck_check_completeness(players);
    }
  catch(err) { if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += err;  return; }

 // set the trump (decided by Player 0) =================================================
   if ( document.getElementById("game").value == "bec" )  this.match_read_trump();

//initialize the scores to zero ===================================
  this.match_score = [0,0];  
//play ======================================================
  this.step_update_current_player_index();
//=================================
  this.step_increase(players);

  
// return the match score of the couple 0-2 ===============================
  return parseInt(this.match_score[0]);

}

  
  this.match_read_trump = function()   {
    
    this.match_trump_idx = this.card_suits.indexOf(document.getElementById("trump_type").value);

    this.match_trump = this.card_suits[this.match_trump_idx];

    if ( document.getElementById('enable_out').checked == true ) match_output.innerHTML += " <br /> Starting with trump ====== " + this.match_trump + "<br/> ";
    
    return;
    }
  

 

  
  
    
  }   //end Match class


 
 function Card(suit, number) {
 
   this.suit = suit;
   this.number = number;
   this.was_played_in_match = false;
   this.is_playable_in_round = true;

}
 
 
 
function Player(deck,index) {

   this.deck = deck;
   this.index = index;

   
}




function clear_output() {  

  match_output.innerHTML = "";
      
      return;
 }
 


//=========================================
//============= HISTOGRAM ============================

// function makeGraph()
// {
//     var container = document.getElementById("histogram");
//     var labels = document.getElementById("labels");
//     var dnl = container.getElementsByTagName("li");
//     for(var i = 0; i < dnl.length; i++)
//     {
//         var item = dnl.item(i);
//         var value = item.innerHTML;
//         var content = value.split(":");
//         value = content[0];
//         item.style.height=value + "px";
//         item.style.top=(199 - value) + "px";
//         item.style.left = (i * 50 + 20) + "px";
//         item.style.height = value + "px";
//         item.innerHTML = value;
//         item.style.visibility="visible";	
//         left = (i * 50 + 58) + "px";
//         labels.innerHTML = labels.innerHTML + 
//            "<span style='position:absolute;top:-16px;left:"+ 
//            left+";background:"+ color+"'>" + year + "</span>";
//     }	
// }
// 


</script>


<!--//=========================================
//=========================================

//completely interactive (prompt for every input)
//abstraction for other games (mattazza, trionfo, hearts)
//with graphics (italian or french cards)
//with probabilities
// asynchronous programming? XMLHttpRequest()
//I want to disable the printing of all the match_output instances... If I act on the STYLE, the code is still executed... so I have to act on the code with some if...-->




<!-- Trying to deal with input arrays ======== -->

   <!--<input id="academy_name" name="ORDER_VALUE[]" value="3 4 7" >-->  <!--type="text"--><!--<input type="text" pattern="\d+, \d+, \d+" />-->  

<!-- Can I put php inside javascript?!? No, one is server-side and the other is client-side. You should use AJAX -->
<?php
foreach ($_POST["ORDER_VALUE"] as $order_value) {

echo $order_value."<br />";
}
?>

<!-- Implementations of the factorial =========== -->

<!--Recursive

function rFact(num)
{
    if (num === 0)
      { return 1; }
    else
      { return num * rFact( num - 1 ); }
}

Iterative

function sFact(num)
{
    var rval=1;
    for (var i = 2; i <= num; i++)
        rval = rval * i;
    return rval;
}-->



<!--<form method="post" action="">

  <p>Enter your friend's names (first, last):</p>

  <input maxlength="30" name="friend[]" size="30" type="text" />
  <input maxlength="30" name="friend[]" size="30" type="text" />
  <input maxlength="30" name="friend[]" size="30" type="text" />

  <input type="submit" value="Submit" />
</form>-->

<!--// <php
// foreach ($_POST['friend'] as $value) {
// 
//   // Do something with each valid friend entry ...
//   if ($value) {
//     echo $value."<br />";
// 
//   }
// }
// ?>-->

<!--  How to change the type of an input field ========================= -->
<!--<script>
function changeInputType(oldObject, oType) {
  var newObject = document.createElement('input');
  newObject.type = oType;
  if(oldObject.size) newObject.size = oldObject.size;
  if(oldObject.value) newObject.value = oldObject.value;
  if(oldObject.name) newObject.name = oldObject.name;
  if(oldObject.id) newObject.id = oldObject.id;
  if(oldObject.className) newObject.className = oldObject.className;
  oldObject.parentNode.replaceChild(newObject,oldObject);
  return newObject;
}
</script>-->



</div>

<?php 
  include($mydepth . 'footer.php');  
?>






</body>
</html>
