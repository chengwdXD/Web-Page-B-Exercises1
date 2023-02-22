<h3 class="cent">新增動態文字廣告</h3>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>
<table>
  
    <tr>
        <td style="text-align: right;">動態文字廣告:</td>
        <td><input type="text" name="text"></td>
    </tr>
</table>
<div class="cent">
    <input type="submit" value="新增">
    <input type="hidden" name="table" value="Ad">
<input type="reset" value="重製">
</div>
</form>