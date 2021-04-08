<?php/* PUT THIS ON THE INSTAGRAM SECTION AND CHANGE THE CLASSES TO FIT WEBSITE */

  $token = get_field('instagram_token', 'option');
  $fields = 'media_url,permalink';
  $number = 10;
  $count = 1;
  $instaJson = file_get_contents('https://graph.instagram.com/me/media?fields=' . $fields . '&access_token=' . $token);
  $media = json_decode($instaJson);
  foreach ($media->data as $post) {
    if ($number >= $count) {
      echo '<div class="col-2 instagram-container"><a href="' . $post->permalink . '" target="_blank"><div class="instagram-image" style="background-image: url(' . $post->media_url . ')"></div></a></div>';
      if ($count == 2) {
        echo '<div class="col-4 follow-container"><a href="https://www.instagram.com/angelajaynehome/" target="_blank"><div class="instagram-container"><div class="instagram-icon"><i class="fab fa-instagram fa-4x"></i></div><div class="instagram-text"><h4>follow us on</h4><h1>instagram</h1><img src="/wp-content/themes/angelajayne/assets/images/angela-jayne.svg" alt="Angela Jayne"></div></div></a></div>';
      }
      $count++;
    }
  }
  ?>