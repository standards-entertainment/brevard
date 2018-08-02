Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<html>
<body>

<form action="test.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 

<?php
// First create an array of 52 elements, numbered 1…52.
for ($number=1; $number<=52; $number++)
    {
    $sequential_list[$number] = $number;
    }

print_r($sequential_list);

// Find the middle of $sequential_list

$middle = 26;

// Set the $middle as the first element in the new_list to seed it.
// Now go up one and down one from the $middle
    $new_list[1] = $sequential_list[$middle];
    $up = $middle;
    $down = $middle;
$index = 2; 

while ($index<=52)
    {
    $new_list[$index] = $sequential_list[$up++];
    echo "up is: " . $up . "\n";
    $new_list[$index++] = $sequential_list[$down--];
    }

print_r($new_list);
?>