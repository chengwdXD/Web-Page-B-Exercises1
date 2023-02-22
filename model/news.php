<h3 class="cent">新增新增最新消息</h3>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>
<table>
  
    <tr>
        <td style="text-align: right;">最新消息資料:</td>
        <td><textarea name="text" style="width:300px;height:145px"></textarea></td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="News">
<input type="submit" value="新增">
<input type="reset" value="重製">
</div>
</form>