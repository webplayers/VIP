<!-- 业务功能 开始 -->
<div class="osBusinessContent">
    <div class="bn-clear"></div>
        <?php
        header('Content-Type:text/html;charset=utf8');
        require_once '../config/connectdb.php';

        $sql="select * from YOUHUI";
        $result=mysql_query($sql);
        echo "历史优惠信息：";
        echo "<table width=80%>";
        while($row=mysql_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>".$row[Y_message]."</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
</div>
<!-- 业务功能 结束 -->