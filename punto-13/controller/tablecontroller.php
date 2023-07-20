<?php
$numbers = array ( 3, 6, 9, 5, 4);
$sum= 0; 

foreach($numbers as $number) {
    $sum = $sum + $number;
    ?>

  <tr>
    <td><?php echo $number; ?></td>
</tr>
    
<?php } ?>
?>
