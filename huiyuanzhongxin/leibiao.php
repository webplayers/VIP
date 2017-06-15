<!-- 业务功能 开始 -->
<div class="osBusinessContent">
    <div class="bn-clear"></div>
        <form action="./findindex.php" method="post">
            <table class="osJoinForm">
                <tr>
                    <td class="osJoinSpaceLeft">会员卡号：</td>
                    <td class="osJoinSpaceContent"><input type="text" title="会员卡号" name="find" class="putxt"/>
                    <td class="osJoinSpaceRight"><span class="os-must">*</span></td>
                    <td class="osJoinSpaceRight"></td>
                </tr>
                <tr>
                    <td class="osJoinSpaceLeft"></td>
                    <td class="osJoinSpaceContent">
                        <!-- 提交 -->
                        <input class="btn-submit" type="submit" value="查询"/>
                    </td>
                    <td class="osJoinSpaceRight"></td>
                </tr>
            </table>
        </form>

        <?php
        header('Content-Type:text/html;charset=utf8');
        require_once '../config/connectdb.php';

        $sql="select * from MESSAGE";
        $result=mysql_query($sql);
        echo "会员详情：";
        echo "<table border=1px width=80% align='center'>";
        echo "<tr>
        <td align='center'>会员卡号</td>
        <td align='center'>会员姓名</td>
        <td align='center'>性别</td>
        <td align='center'>所剩金额</td>
        <td align='center'>邮箱</td>
        <td align='center'>手机号码</td>
        <td align='center'>积分</td></tr>";
        while($row=mysql_fetch_array($result))
        {
        echo "<tr>";
        echo "<td align='center'>".$row[M_cardID]."</td>";
        echo "<td align='center'>".$row[M_name]."</td>";
        echo "<td align='center'>".$row[M_sex]."</td>";
        echo "<td align='center'>".$row[M_money]."</td>";
        echo "<td align='center'>".$row[M_email]."</td>";
        echo "<td align='center'>".$row[M_pihone]."</td>";
        echo "<td align='center'>".$row[M_jifen]."</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
</div>
<!-- 业务功能 结束 -->