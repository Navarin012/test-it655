<?php
include("connect.php");
$sql = "SELECT * FROM `student3`";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
?>
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <th >รหัสนักเรียน</th>
            <th >ชื่อ</th>
            <th >รหัสกลุ่มการเรียน</th>
            <th >ระดับชั้น</th>
        </tr>
<?php
    while ($row = mysqli_fetch_assoc($res)) {
        ?>

            <tr>
                <td ><?php echo $row["student_id"] ?></td>
                <td  ><?php echo $row["name"] ?></td>
                <td  ><?php echo $row["group_id"] ?></td>
                <td><?php echo $row["level_group"] ?></td>
            </tr>
        <?php
}
?>
    </table>
    <?php
} else {
    "0 results";
} 
    ?>
<style>
    .row {
        padding: 10px;
    }
</style>