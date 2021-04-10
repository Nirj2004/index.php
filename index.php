<h1>Arrays</h1>

<?php
$array =(1,2,3, array("dog", "cat", "fish"));

// Add to the end of the array
$array[] = 4
?>

<pre>
 <?php print_r($array); ?>
</pre>

<h3>Retrieve items from arrays by index</h3>

First item: <?php echo $array[0]; ?><br />
First item of third item: <?php echo $array[3][0]; ?><br />

<?php
// PHP 5.4 added the short array syntax.
$languages = ["PHP", "RUBY", "JAVA", "C", "Javascript"];
?>

<h3>languages</h3>
 
<pre>
  <?php print_r($languages); ?>
</pre>

