<html><head><title>myfirstcode</title></head>
<body>
    <form action="" method="POST">
        
        <input type="submit" value="click me" onclick="click1()"/>
    </form>
    <?php    
    function fun(){
        echo "Hello World";
        $a=1;
        $b=2;
       $c=$a+$b;
       echo "<br><br>$c";
    }   
    ?>
    <script> 
    function click1(){
    document.write("<?php fun() ?>");
   
}

</script>
</body>
    </html>
