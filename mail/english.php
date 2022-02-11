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
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">General English </td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->generalenglish; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">Cambridge ESOL Exams (Cambridge ESOL, KET, PET, FCE, CAE )
                </td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->esol; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">IELTS </td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->ielts; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">TOEFL</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->toefl; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">SAT</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->sat; ?> </td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">GMAT</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->gmat; ?></td>
            </tr>
            <tr>
                <td style="width40%; height: 55px; border: 2px solid #eee;font-size: 18px;">gre</td>
                <td style="width60%;height: 55px; border: 2px solid #eee;font-size: 18px;"><?= $items->gre; ?></td>
            </tr>
        </table>
    </div>
</div>
