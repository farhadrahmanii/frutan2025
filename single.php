<?php require_once 'header.php'; ?>
<div data-scroll-container>
    <!-- new -->
    <!-- <div data-controller="corporativos">
            <div class="txt-cont">
                <div class="head-txt">
                    <h2>FILMS</h2>
                    
                </div>
            </div>

        </div> -->
    <!-- END new -->
    <div data-controller="post">
        <?php
        $singlePost = showSinglePost($_GET['id']);
        foreach ($singlePost as $detail) { ?>
            <div class="cover-cont">


                <div class="columns">
                    <div class="column">
                        <div class="img-cont" id="post-image"
                            style="background-image: url(./backend/assets/img/<?php echo $detail['img']; ?>);">
                        </div>
                    </div>
                    <div class="column">
                        <div class="txt-cont">

                            <p class="category" id="post-category">
                                <?php echo $detail['title']; ?>
                            </p>
                            <h5 class="title" id="post-title"><?php echo $detail['date_issue'] ?></h5>
                            <p></p>
                            <p class="author">Por: <span id="post-author"><?php echo $detail['author']; ?></span><br><span
                                    id="post-date"><?php echo $detail['issue_date']; ?></span></p>
                            <div class="social-sharing">
                                <div class="icons"><a id="fb-share-post" target="_blank" rel="noopener"><img class="first"
                                            src="https://d33wubrfki0l68.cloudfront.net/25bd5ec34112ab73b6e0a71f1b200ba30e03b5b6/4638f/img/social-07.svg"
                                            alt="facebook"></a><a id="tw-share-post" href="#" target="_blank"
                                        rel="noopener"><img
                                            src="https://d33wubrfki0l68.cloudfront.net/26028bd2c3636736a890d81bc09c8b0c94a8a9e5/5cd6b/img/social-12.svg"
                                            alt="Twitter"></a><a id="li-share-post" target="_blank" rel="noopener"><img
                                            class="last"
                                            src="https://d33wubrfki0l68.cloudfront.net/733639a10c3d03fe417983ee093b4c781037399e/9d39b/img/social-11.svg"
                                            alt="linkedin"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="post-text-cont">
                <div class="txt-cont" id="post-data">
                    <div class="columns">
                        <div class="column">
                            <div class="perk-cont">
                                <?php echo $detail['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
    <?php require_once 'footer.php'; ?>