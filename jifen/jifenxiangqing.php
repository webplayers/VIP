<!-- 业务功能 开始 -->
<div class="osBusinessContent">
    <div class="bn-clear"></div>
        <?php
        header('Content-Type:text/html;charset=utf8');
        require_once '../config/connectdb.php';

        $sql="select * from MESSAGE";
        $result=mysql_query($sql);
        echo "<table border=1px width=80% align='center'>";
        echo "<tr><td align='center'>积分详情</td></tr>";
        while($row=mysql_fetch_array($result))
        {
        echo "<tr>";
        echo "<td align='center'>会员账号".$row[M_cardID]."共有".$row[M_jifen]."积分</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
</div>
<!-- 业务功能 结束 -->