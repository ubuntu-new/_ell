<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 9/10/2019
 * Time: 14:21
 */
?>
<div style="width: 650px">
    <div style="padding: 40px;">
        <table>
            <?php $masivi = array($model); ?>
            <?php $items = $masivi[0] ?>
            <?php // debug($items);?>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Full Name</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?php echo $items->name; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Birth Day</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?php echo $items->bday; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Phone Number</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->phone; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">E-mail</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->email; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">United Kingdome</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->uk; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">the USA</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->usa; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Canada</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->canada; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Europe</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->europe; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Asia</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->asia; ?> </td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">School Propgrams </td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->schoolpropgrams; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Bachelor Masters</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->bachelormasters; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Phd</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->phd; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Language Programs</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->lsnguageprograms; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Professional Courses</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->professionalcourses; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Summerschgool for Juniors
                </td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->summerschgoolforjuniors; ?></td>
            </tr>
        </table>
    </div>
</div>
