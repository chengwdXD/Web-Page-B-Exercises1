<form action="./api/add.php" method="psot" enctype="multipart/form-data">
<h3 class="cent">新增標題區圖片</h3>
<hr>
<table>
    <tr>
        <td style="text-align: right;">標題區:</td>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>
        <td style="text-align: right;">標題區替代文字:</td>
        <td><input type="text" name="text"></td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="Title">
<input type="submit" value="新增">
<input type="reset" value="重製">
</div>
</form>