<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">

    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
       
                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
            
                </tr>
                <?php
                $rows = $Menu->all(['parent'=>0]);
                foreach ($rows as $row) {
                    $checked = ($row['sh'] == 1) ? "checked" : "";

                ?>
                    <tr>
                        
                        <td width="23%">
                            <input type="text" name="name[]" value="<?=$row['name'];?>">
                        </td>
                        <td width="23%">
                            <input type="text" name="href[]" value="<?=$row['href'];?>">
                        </td>
                        <td><?=$Menu->count(['parent'=>$row['id']]);?></td>
                        <td width="7%">
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$checked;?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <td width="7%">
                        <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;model/submenu.php?id=<?=$row['id'];?>&#39;)" value="編輯次選單">
                        </td>
                        <td>
                            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;model/menu.php&#39;)" value="新增主選單"></td>
                    <td class="cent">
                        <input type="hidden" name="table" value="Menu">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>