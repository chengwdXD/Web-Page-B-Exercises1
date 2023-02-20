<h3 class="cent">新增標題區圖片</h3>
<form action="./api/upload.php" method="post" enctype="multipart/form-data">
<hr>
<table>
    <tr>
        <td style="text-align: right;">標題區:</td>
        <td><input type="file" name="img"></td>
    </tr>
 
</table>
<div class="cent">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="Title">
<input type="submit" value="更新">
<input type="reset" value="重製">
</div>
</form>