<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 9/10/2019
 * Time: 14:21
 */
?>
<div style="width: 650px">
    <div  style="padding: 40px;">
        <table>
            <?php foreach($model as $row):?>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Full Name</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row->name?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Birth Day</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['bday']?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Phone Number</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['phone']?></td>
            </tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">E-mail</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['email']?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">United Kingdome</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['uk']?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">the USA</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['usa']?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Canada</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['canada']?></td>
            </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Europe</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['europe']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Asia</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['asia']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">School Propgrams</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['schoolpropgrams']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Bachelor Masters</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['bachelormasters']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Phd</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['phd']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Language Programs</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['lsnguageprograms']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Professional Courses</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['professionalcourses']?></td>
                </tr>
                <tr>
                    <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Summerschgool for Juniors</td>
                    <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?=$row['summerschgoolforjuniors']?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
