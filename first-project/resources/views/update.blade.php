<!DOCTYPE html>
<html>
<head>
<title>Student Management | Edit</title>
</head>
<body>
<form action = "/edit/" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Computer_Type</td>
<td>
<input type = 'text' name = 'name'
value = 'name'/> </td>
</tr>
<tr>
<td>Computer_Price</td>
<td>
<input type = 'text' name = 'price'
value = 'price'/>
</td>
</tr>




<input type = 'submit' value = "Update Info" />

</table>
</form>
</body>
</html>