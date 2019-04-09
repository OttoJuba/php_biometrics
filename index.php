<!DOCTYPE html>

<html>
   <head>
       <link href="main.css" rel="stylesheet">
       
   </head>
   <body>
	<h1>CIS 475 Biometric Server Authentication</h1>

	<h2>Otto Juba</h2>
        <form action="/" method="post">
            <input class="btn blue" type="submit" name="index" value="index">
            <input class="btn blue" type="submit" name="search" value="search">
            <input class="btn" type="submit" name="enroll" value="enroll">
            <input class="btn red" type="submit" name="delete" value="delete">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['index'])) {
        indexFunc();
    }
    if(isset($_POST['enroll'])) {
        enrollFunc();
    }
    if(isset($_POST['delete'])) {
        deleteFunc();
    }
    if(isset($_POST['search'])) {
        searchFunc();
    }



    function indexFunc(){
       $command = 'python pyfingerprint/src/files/examples/example_index.py';
       exec($command,$output,$status);
       //print_r($output);
       foreach($output as &$line){
	 echo $line . '<br/> ';
       }
    }
    function enrollFunc(){
       $command = 'python pyfingerprint/src/files/examples/example_enroll.py';
       exec($command,$output,$status);
       foreach($output as &$line){
	 echo $line . '<br/> ';
       }
    }
    function deleteFunc(){
       $command = 'python pyfingerprint/src/files/examples/example_delete.py';
       exec($command,$output,$status);
       //print_r($output);
       foreach($output as &$line){
	 echo $line . '<br/> ';
       }
    }
    function searchFunc(){
       $command = 'python pyfingerprint/src/files/examples/example_search.py';
       exec($command,$output,$status);
       //print_r($output);
       foreach($output as &$line){
	 echo $line . '<br/> ';
       }
       if (isset($output[4])) {
 	 header("Location: http://localhost/loggedin.html");
       }
    }

?>
