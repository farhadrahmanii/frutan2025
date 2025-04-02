<?php require_once './header.php'; ?>
<div data-scroll-container>
    <div data-controller="blog">
        <div data-controller="post">
            <div class="cover-cont">
                <div class="columns">
                    <div class="column">
                        <div class="img-cont" id="post-image" style="background-image: url(./img/services7.jpg);">
                        </div>
                    </div>
                    <div class="column">
                        <div class="txt-cont">
                            <p class="category" id="post-category">Director</p>
                            <h5 class="title" id="post-title">The Dark Future</h5>
                            <p>The Dark Future Film got Award That Made by Alibaba Frutan</p>
                            <p class="author">Director: <span id="post-author">Alibaba Frutan</span><br><span
                                    id="post-date">17/12/2022</span></p>
                            <div class="social-sharing">
                                <div class="icons"><a id="fb-share-post" target="_blank" rel="noopener"><img
                                            class="first"
                                            src="https://d33wubrfki0l68.cloudfront.net/25bd5ec34112ab73b6e0a71f1b200ba30e03b5b6/4638f/img/social-07.svg"
                                            alt="facebook" jda48lshb=""></a><a id="tw-share-post"
                                        href="https://twitter.com/intent/tweet?text=https://levector.com/post/2b9SAM3fpJs1kuzfF0ADEX/voces-y-atmosferas-el-camino-del-director-de-sonido"
                                        target="_blank" rel="noopener"><img
                                            src="https://d33wubrfki0l68.cloudfront.net/26028bd2c3636736a890d81bc09c8b0c94a8a9e5/5cd6b/img/social-12.svg"
                                            alt="Twitter" jda48lshb=""></a><a id="li-share-post" target="_blank"
                                        rel="noopener"><img class="last"
                                            src="https://d33wubrfki0l68.cloudfront.net/733639a10c3d03fe417983ee093b4c781037399e/9d39b/img/social-11.svg"
                                            alt="linkedin" jda48lshb=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-text-cont">
                <div class="txt-cont" id="post-data">
                    <div class="bg">
                    </div>
                </div>
            </div>
        </div>
        <div class="category-filter">
            <div class="cat-lg">
                <p class="blog-cat active" data-cat="">TODAY</p>
                <p class="blog-cat" data-cat="Marketing y publicidad">MARKETING PUBLISHED</p>
                <p class="blog-cat" data-cat="Corporativo">ANNONCEMENT</p>
                <p class="blog-cat" data-cat="Film">FILMS</p>
                <p class="blog-cat" data-cat="Tras cámaras">ANIMATION</p>
            </div>
        </div>
        <div class="post-cont">
            <div class="columns car-cont" style="position: relative; height:auto;">
                <?php
                $Feach = showAllPost('0,20');

                foreach ($Feach as $result) { ?>
                    <div class="column">
                        <div class="post-card">
                            <a href="">
                                <div class="cover-img"
                                    style="background-image: url(./backend/assets/img/<?php echo $result['img']; ?>);">
                                </div>
                            </a>
                            <div class="txt-cont">
                                <a href="#">
                                    <p class="category"><?php echo $result[
                                        'category'
                                    ]; ?></p>
                                    <h6 class="title"><?php echo $result[
                                        'title'
                                    ]; ?></h6>
                                    <p class="desc"><?php echo substr(
                                        $result['content'],
                                        0,
                                        50
                                    ); ?></p>
                                    <p class="author">AUTHOR: <span><?php echo $result[
                                        'author'
                                    ]; ?></span> <br><?php echo $result[
                                         'date_issue'
                                     ]; ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once './footer.php'; ?>
</div>