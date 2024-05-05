<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet">
        <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
        <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="showAlertAndSetActive('mega', this); changeVideoSource('mega')">mega</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showAlertAndSetActive('canal13', this); changeVideoSource('canal13')">canal13</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showAlertAndSetActive('tvn', this); changeVideoSource('tvn')">tvn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Chilevision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Red</a>
                </li>
            </ul>
            <div class="nav justify-content-center">
            <video 
                id="my-video" 
                class="video-js" 
                controls preload="auto" 
                data-setup="{}">
                <source id="video-source" 
                    src="https://unlimited1-cl-isp.dps.live/lared/lared.smil/playlist.m3u8?PlaylistM3UCL" 
                    type="application/x-mpegURL">
                Your browser does not support the video tag.
            </video>
            </div>
        </div>
    </body>
</html>
<script>
  git config --global user.email "you@example.com"
  git config --global user.name "alexfal1952"

    function showAlertAndSetActive(channel, element) {
      var navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(function(link) {
        link.classList.remove('active');
      });      
      element.classList.add('active');
    }
    function changeVideoSource(channel) {
      var videoSource = document.getElementById('video-source');
      if (channel === 'mega') {
        videoSource.src = 'https://unlimited1-cl-isp.dps.live/mega/mega.smil/playlist.m3u8?PlaylistM3UCL';
      } else if (channel === 'canal13') {
        videoSource.src = 'https://redirector.rudo.video/hls-video/10b92cafdf3646cbc1e727f3dc76863621a327fd/t13/t13.smil/playlist.m3u8?PlaylistM3UCL';
      } else if (channel === 'tvn') {
        videoSource.src = 'https://mdstrm.com/live-stream-playlist/5346f657c1e6f5810b5b9df3.m3u8?PlaylistM3UCL';
      }
      var player = videojs('my-video');
      player.src(videoSource.src);
      player.play();
    }
  </script>