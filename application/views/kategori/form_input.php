<!-- <!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
<script>
    function myFunction()
        {
            alert("Success Add Category");
        }
</script>

</head>
<body> -->
    <title>Add Data</title>
    <h3> Add Data Category</h3>
<?php
    echo form_open('kategori/post');
?> 
<table border="1">
        <tr><td>Name of Category</td>
            <td><input type="text" name="kategori" placeholder="Category"></td>
        </tr>
        <tr><td colspan="2"> <button type="submit" name="submit">Save</button></td></tr>

</table>

    </form>
<!-- </body>
</html>
 -->