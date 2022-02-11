<!-- Page -->
<div class="page">
    <div class="row page-wrapper">

        <!-- Page Title -->
<!--        <div class="page-title-wrapper">-->
            <h1 class="page-title">&nbsp;</h1>
<!--            <h1 class="page-title-shadow">BLOG POST</h1>-->
<!--        </div>-->


        <!-- Main Content -->
        <div class="large-12 eight columns">

            <div class="post">


                <!-- Date -->
                <div class="post-date cf">
                    <span class="post-month"><?php
                        $timestamp = strtotime($postt->date);
                        echo  date('M', $timestamp);
                        ?></span>
                    <span class="post-day">
                        <?=date('d', $timestamp);?>
                    </span>
                </div>


                <!-- Picture -->
                <img src="uploads/post/<?=$postt->img?>" alt="">

                <!-- Tag -->
                <h2 class="tag">
                    <?php  $timestamp = strtotime($postt->date);
                    echo  date('d- M -Y', $timestamp);
                    ?>
                </h2>

                <!-- Title -->
                <h1 class="uppercase bold"><?=$postt->name?></h1>

                <!-- Post Text -->

                <div class="post-content">
                    <?=$postt->content?>
                </div>
            </div> <!-- Post Ends -->
        </div><!-- Main Content Ends -->



        <!-- Sidebar -->
<!--        <div class="large-4 four columns sidebar">-->


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




<!--        </div><!-- Sidebar Ends -->



    </div><!-- Row Ends -->
</div><!-- Page Ends -->