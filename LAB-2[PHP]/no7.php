<?php
 
echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%' height='50px'>";
echo "<tr>";
echo "<td>";  for($i=0; $i<3; $i++)
  {
    for($j=0;$j<=$i; $j++)
    {
        echo "* ";
    }
    echo "<br>";
  }
  echo "</td>";
echo "<td>";
 for($i=3; $i>=1; $i--)
  {
    for($j=1;$j<=$i; $j++)
    {
        echo $j." ";
    }
    echo "<br>";
  }
  echo "</td>";
echo "<td>";
 $c='A';
  for($i=0; $i<3; $i++)
  {
    for($j=0;$j<=$i; $j++)
    {
        echo $c." ";
        $c++;
    }
    echo "<br>";
  }
  echo "</td>";
 
?>