<?php

if($_POST["myusername"]=="gigi")   {

   header( 'Location:game.html' ) ;
//    echo "<strong>Have fun!</strong>";  //This instruction is neglected completely because in the html file there is <html> and </html> so it is outside
}
else
{
echo "<strong>Hai stato sfortunato</strong>";  //can this be processed even though it is not inside <html> tags? Yes, somehow it can...
// Ci vuole il punto e virgola maledetto, ma se c'e' solo una istruzione puo' essere evitato...
}


// // // // // // INTERACTION WITH A DATABASE: later...
//Si', il passo successivo e' che io faccio interagire PHP con un database, nel senso che lui LEGGE quel database 
//e cerca se il nome fornito c'e' o non c'e'...
// The point is that we need to connect PHP with a database
// For instance we could connect to a Microsoft Access database...
// But what if we use other databases, open source, or stuff like that...?
// For instance, a MySQL database. In order to deal with MySQL databases
// there is a program called phpMyAdmin.

//Se aggiungo queste 3-4 righe va lentissimo
// $mysqli = new mysqli("example.com", "user", "password", "database");
// $result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $result->fetch_assoc();
// echo htmlentities($row['_message']);




// // // $host="localhost"; // Host name
// // // $username=""; // username
// // // $password=""; // password
// // // $db_name="test"; // Database name
// // // $tbl_name="members"; // Table name
// // // 
// // // // I have to create a database and table, first
// // // // $sql="CREATE DATABASE '$db_name'";
// // // // if (mysqli_query($con,$sql))
// // // //   {
// // // //   echo "Database my_db created successfully";
// // // //   }
// // // // else
// // // //   {
// // // //   echo "Error creating database: " . mysqli_error($con);
// // // //   }
// // // 
// // // 
// // // // Replace database connect functions depending on database you are using.
// // // mysqli_connect("$host", "$username", "$password");
// // // // Check connection
// // // // if (mysqli_connect_errno())
// // // //   {
// // // //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// // // //   }
// // // mysql_select_db("$db_name");
// // // 
// // // // username and password sent from form
// // // //NEVER Remove the mysql_real_escape_string. Else there could be an Sql-Injection!
// // // $myusername=mysql_real_escape_string($_POST['myusername']);
// // // $mypassword=mysql_real_escape_string($_POST['mypassword']);
// // //  
// // //  
// // // $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
// // // $result=mysql_query($sql);
// // // 
// // // // Replace counting function based on database you are using.
// // // $count=mysql_num_rows($result);
// // // // If result matched $myusername and $mypassword, table row must be 1 row
// // // 
// // // if($count==1){
// // //   // Register $myusername, $mypassword and redirect to file "login_success.php"
// // //   session_register("myusername");
// // //   session_register("mypassword");
// // //   header("location:login_success.php");
// // // } else {
// // //   echo "Wrong Username or Password";
// // // }


?>



<!--  This is just a redirect page which decides how to handle the login depending on whether the username is valid or not -->
<!--It is a SERVER-SIDE SCRIPT, and it's clear that it must be server side because it is the server that handles the database 
of available names...

<!-- //here i will put the tetris game
//he doesnt seem to like that... how can i either put tetris or put "hai stato sfortunato"?
//Voglio fare una cosa semplice: in base al valore dello username scelgo di usare un codice html oppure un altro...
//Per fare questo if bisogna usare php o si puo' fare anche dentro html?
// il fatto e' che quello che c'e' scritto dentro questo campo php dev'essere scritto in linguaggio php,
// quindi non posso metterci del codice html... almeno dovro' trovare il modo per mettercelo...
// il metodo becero e' mettere tutto dentro ECHO... io vorrei un semplice comando 
// che faccia APRIRE un'altra pagina .html...
// oppure devo trovare un altro modo per fare l'IF basato sulla variabile "myusername"... che ci siano gli if anche dentro HTML...?
// Cercare INTERACTIVE IF based on USER INPUTS...
// Nel nostro caso sappiamo gia' che il form ci rispedisce verso la pagina checklogin.php...
//Noi vorremmo in realta' finire dentro checklogin1.php o checklogin2.php a seconda del valore dello username...
// diciamo che vorremmo un REDIRECT verso un'altra pagina...
// C'e' la sintassi php per il redirect, ma dice che non si puo' usare se nel file c'e' gia' un tag <html>
// Non esistono if statements in html, quello che si puo' fare e' un JavaScript
// credo che nel campo "action" di un form ci si possa mettere la CHIAMATA ad una funzione <script> in JavaScript!
// questo puo' essere un'alternativa ad una action che chiama una pagina php.
-->

<!--In questa pagina non voglio fare cose troppo complicate.
Voglio solo dirgli che se il login non e' uguale a quello che gli dico io,
allora vai in una pagina,
altrimenti vai in un'altra.
La mia domanda e': io vedo qui le variabili del form la cui azione e' questa pagina?!?
Certo! E' proprio cosi' che funziona!!! Cosi' si possono vedere le variabili da un file all'altro -->
<!--  -->

<!--/*Have to find another way because this can be very easily hacked... NO YOU'RE RIGHT, IT'S NOT HACKED! because the user doesnt see the PHP code, he only sees the result AFTER processing!!*/-->
