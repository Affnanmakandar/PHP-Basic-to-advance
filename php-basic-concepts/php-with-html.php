<?php
//Styling in php  in php we write html
echo "<h2 style='color:blue'> Hey there </h2>"; //colored blue
?>
<!-- php styling using variable-->
<?php
$name = "affnan makandar";
echo  "<h1  style = 'color:orange'> $name </h1>"; 
?>
<!-- Html tags in php -->
<h1 style = "color:red">
    My real name is
    <?php 
     echo $name;
    
    ?>
</h1>

<?php
//dynamic styling of line 18
// multiple styling in php
$h2_color="blue";
?>
<!-- dynamic way of styling by declaring varaiable h2_color then gave it a color -->
<h2 style = "color:<?php echo  $h2_color ?>"> <?php echo "The hype is real"?></h2>
<h2 style = "color:<?php echo  $h2_color ?>"> <?php echo "The life is real"?></h2>
<h2 style = "color:<?php echo  $h2_color ?>"> <?php echo "The real"?></h2>