<?php
$open=fopen("counter.txt","r");
$hit=fgets($open,255);
$tutup=fclose($open);
$hit++;
$open=fopen("counter.txt","w");
fputs($open,$hit);
$tutup=fclose($open);
?>
<p>Anda pengunjung ke <?php echo $hit;?></p>