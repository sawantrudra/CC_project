<div class="col-lg-12 col-md-8 ">
    <!-- <section class="section"> -->
        <!-- <div class="container"> -->
            <div class="row justify-content-md-center">
            
                <div class="col-md-15">
                    <div class="card card-plain">
                        <div class="card-header">
                            <!-- <h1 class="profile-title text-left">Videos</h1> -->
                            <h9 class="text-on-back">Uploaded Videos</h9>
                        </div>

                    </div>
                </div>
            
            </div>
            <div class="row">




                <!-- <h2>Uploaded Videos</h2> -->
                <?php
                foreach ($videos_data as $video_data) {
                    $position = strpos($video_data['filename'], ".");
                    $file_extension = substr($video_data['filename'], $position + 1);
                    $file_extension = strtolower($file_extension);
                    echo '
           
            <div class="col-md-auto">
            <img width="150" height ="100" src="' . base_url() . 'uploads/thumbnails/' . $video_data['thumbnail'] . '">
            <p>Title :' . $video_data['title'] . '</p>
            <p>Description :' . $video_data['description'] . '</p>
            <a href="' . base_url() . 'video_player/' . $video_data['id'] . '">Watch</a></div>';
                }
                ?>
            </div>

        <!-- </div> -->

<!-- </section> -->
</div>
          
        