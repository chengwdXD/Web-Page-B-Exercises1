<h3 class="cent">新增校園映像</h3>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>
<table>
  
    <tr>
        <td style="text-align: right;">校園映像:</td>
        <td><input type="file" name="img"></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="新增">
    <input type="hidden" name="table" value="Image">
<input type="reset" value="重製">
</div>
</form>