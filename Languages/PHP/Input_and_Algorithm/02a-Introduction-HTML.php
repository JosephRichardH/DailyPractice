<form method="post">  
What's your name?  
<input type="number" name="name" /><br><br>  
What's your age?  
<input type="number" name="age" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  

<?php  
    if(isset($_POST['submit']))  
    {  
        $name = $_POST['name'];  
        $age = $_POST['age'];  
echo "My name is $name, and I'm $age years old.";   
}  
?>  
</body>  
</html>  