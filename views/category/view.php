<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 6/1/2019
 * Time: 1:08 PM
 */
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<!-- Page -->

<div class="page">
    <div class="row page-wrapper">

        <!-- Page Title -->
        <div class="page-title-wrapper">
            <h1 class="page-title">&nbsp;</h1>
            <h1 class="page-title-shadow">&nbsp;</h1>
        </div>


        <!-- Main Content -->
        <div class="large-10 ten columns blog-container">


            <?php foreach ($products as $product): ?>
            <div class="post blog-list"> <!-- Start Post -->
                <!-- Date -->

                <div class="post-date cf">
                    <span class="post-month"><?php
                        $timestamp = strtotime($product->date);
                        echo  date('M', $timestamp);
                        ?></span>
                    <span class="post-day">
                        <?=date('d', $timestamp);?>
                    </span>
                </div>

                <div class="standard-post"> <!-- Standard Post -->

                    <!-- Picture -->
                    <img src="uploads/post/<?=$product->img?>" alt="">

                    <!-- Tag -->
<!--                    <span class="tag">Thoughts On Design</span>-->

                    <!-- Title -->
                    <a href="<?= \yii\helpers\Url::to(['/post',  'id' => $product->id]) ?>"><h1 class="uppercase bold"><?= $product->name ?></h1></a>

                    <!-- Post Excerpt Text -->

                    <div class="post-excerpt">

                        <p>
                            <?php
                            echo $foo = mb_substr($product->content, 0, 142, "utf-8");
                            ?>
                        </p>

                    </div>

                </div>  <!-- End Standard Post -->

            </div> <!-- End  Post -->
            <?php endforeach; ?>






















<!--            <div class="row">-->
<!--                <div class="large-12 columns">-->
<!--                    <a class="btn black big full">More Projects</a>-->
<!--                </div>-->
<!--            </div>-->

        </div>

        <!-- Sidebar -->
        <div class="large-2 two columns sidebar">


            <!-- Search Bar -->

<!--            <div class="widget">-->
<!--                <form action="post">-->
<!--                    <input type="text" name="q" placeholder="Type and hit enter" />-->
<!--                    <input class="zoom" type="submit" value=""/>-->
<!--                </form>-->
<!--            </div>-->


            <!--  Categories -->

<!--            <div class="widget categories-widget">-->
<!--                <div class="corner"></div>-->
<!--                <h5 class="uppercase">categories</h5>-->
<!--                <ul>-->
<!--                    <li><a href="#">Audio<span class="quantity">(2)</span></a></li>-->
<!--                    <li><a href="#">Gallery<span class="quantity">(1)</span></a></li>-->
<!--                    <li><a href="#">Link<span class="quantity">(2)</span></a></li>-->
<!--                    <li><a href="#">Quote<span class="quantity">(3)</span></a></li>-->
<!--                    <li><a href="#">Standard<span class="quantity">(2)</span></a></li>-->
<!--                    <li><a href="#">Video<span class="quantity">(1)</span></a></li>-->
<!--                </ul>-->
<!--            </div>-->

            <!-- Archive -->

<!--            <div class="widget archive-widget">-->
<!--                <div class="corner"></div>-->
<!--                <h5 class="uppercase">Archive</h5>-->
<!--                <ul>-->
<!--                    <li><a href="#">August 2013</a></li>-->
<!--                    <li><a href="#">March 2013</a></li>-->
<!--                    <li><a href="#">January 2013</a></li>-->
<!--                    <li><a href="#">October 2012</a></li>-->
<!--                    <li><a href="#">September 2012</a></li>-->
<!--                </ul>-->
<!--            </div>-->

            <!-- Meta -->

<!--            <div class="widget meta-widget">-->
<!--                <div class="corner"></div>-->
<!--                <h5 class="uppercase">meta</h5>-->
<!--                <ul>-->
<!--                    <li><a href="#">Log In</a></li>-->
<!--                    <li><a href="#">Entries RSS</a></li>-->
<!--                    <li><a href="#">Comments RSS</a></li>-->
<!--                    <li><a href="#">Wordpress.org</a></li>-->
<!--                </ul>-->
<!--            </div>-->


        </div><!-- Sidebar Ends -->



    </div><!-- Row Ends -->
</div><!-- Page Ends -->
