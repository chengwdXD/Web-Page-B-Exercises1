<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">

    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="68%">最新消息</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>

                </tr>
                <?php
                // $rows = $Image->all();
                $all=$News->count();
                $div=4;
                $pages=ceil($all/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$News->all("limit $start,$div");
                foreach ($rows as $row) {
                    $checked = ($row['sh'] == 1) ? "checked" : "";

                ?>
                    <tr>

                        <td width="23%">
                            <textarea name="text[]" style="width:95%;height:62px"><?= $row['text']; ?></textarea>

                        </td>
                        <td width="7%">
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td>

                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
        <div style="text-align:center;">
            <?php
            if (($now - 1) > 0) {
            ?>
                <a style="font-size: 30px;" href="?do=news&p=<?= $now - 1; ?>">&lt;&nbsp;</a>
            <?php
            }
            ?>
            <?php
            for ($i = 1; $i <= $pages; $i++) {
                $size = ($i == $now) ? "26px" : "18px";
            ?>
                <a style="font-size: <?= $size; ?>;" href="?do=news&p=<?= $i; ?>">&nbsp;<?= $i; ?>&nbsp;</a>
            <?php
            }
            ?>
            <?php
            if (($now + 1) <= $pages) {
            ?>
                <a style="font-size: 30px;" href="?do=news&p=<?= $now + 1; ?>">&nbsp;&gt;</a>
            <?php
            }
            ?>
        </div>
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;model/news.php&#39;)" value="新增最新消息"></td>
                    <td class="cent">
                        <input type="hidden" name="table" value="News">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>