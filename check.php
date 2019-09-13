<?php
echo "<table align='center' border='1' bgcolor='gray'>";
echo "<tr>";
echo "<td>";
$i=$_GET['min'];
$num_count =$_GET['max'];
    $div_3 = "Divisible by 3";
    $div_5 = "Divisible by 5";
    $div_both = "Divisible by 3 and 5";

    for($i=$i;$i<=$num_count;$i++)
    {
        switch($i)
        {
            case ($i%15==0):
            echo "<span style='color:yellow;'> $i. ('.$div_both.')</br>";
            break;
			case ($i%3==0):
            echo "<span style='color:red;'> $i. ('.$div_3.')</br>";
            break;
            case ($i%5==0):
            echo "<span style='color:blue;'> $i. ('.$div_5.')</br>";
            break;
			
            default:
            echo "<span style='color:black;text-align:center;'>$i</br>";
            break;
        }
    }
	echo "</td>";
	echo "</tr>";
	echo "<table>";
	?>
