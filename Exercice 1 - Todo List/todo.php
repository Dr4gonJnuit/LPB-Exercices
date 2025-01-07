<?php
// echo "<p>PHP is running now</p>";

$todo_array = array();

// echo "<p>Empty array created (name is 'todo_array')</p>";

array_push($todo_array, "Finish this assignment", "Play board games with my family", "Finish reading the book I got at Christmas", "Finally returning with the milk");
?>

<ul>
    <?php foreach ($todo_array as $todo) { ?>
        <li><?php echo $todo; ?></li>
    <?php } ?>
</ul>