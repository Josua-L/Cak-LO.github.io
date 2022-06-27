<?php
include('layouts/header.php');
?>

<link rel="stylesheet" href="./playlist/style.css">

<div class="dent"></div>

<div class="siso">

<section class="secciones">

<h2 class="NamesAnim"></h2>
        <div class="container-video">
            <div id="video_player">
                <iframe controls id="main-Video" src="" frameborder="0"></iframe>
            </div>
            <div class="playlistBx">
                <div class="headers">
                    <div class="row">
                        <span class="AllLessons"></span>
                    </div>
                </div>
                <ul class="playlist" id="playlist">
                </ul>
            </div>
        </div>


    </section>
    <script src="./playlist/script.js"></script>
    <script src="./playlist/video-list.js"></script>

</div>



<?php

include('layouts/footer.php');
?>