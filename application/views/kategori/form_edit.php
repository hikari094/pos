<!-- <!DOCTYPE html>
<html>
<head>
    
<script>
    function myFunction()
        {
            alert("Success Edit Category");
        }
</script>

</head>
<body> -->

	<title>Edit Data</title>
    <h3> Edit Data Category</h3>
    <?php
    echo form_open('kategori/edit');
?>
 <input type="hidden" value="<?php echo $record['kategori_id'] ?>" name="id">
<table border="1">

        <tr><td>Name of Category</td>
            <td><input type="text" name="kategori" placeholder="Category" value="<?php echo $record['nm_kategori']?>"></td>
        </tr>
        <tr><td colspan="2"> <button type="submit" name="submit">Save</button></td></tr>

</table>

    </form>
<!-- </body>
</html>
 -->