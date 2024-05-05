<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reproductor de video HLS</title>
  <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet">
  <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
</head>
<body>
    <video id="my-video" class="video-js" controls preload="auto" width="640" height="360" data-setup="{}">
      <source src="https://unlimited1-cl-isp.dps.live/mega/mega.smil/playlist.m3u8?PlaylistM3UCL" type="application/x-mpegURL">
    </video>
</body>
</html>