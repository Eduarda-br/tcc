﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Webleb</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r125/three.min.js"></script>
  <link href="../style/loading.css" rel="stylesheet">
  <script src="../animation/loading.js"></script>
<script type="x-shader/x-vertex" id="vertexshader">

  attribute float size;
  attribute vec3 customColor;
  varying vec3 vColor;

  void main() {

    vColor = customColor;
    vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
    gl_PointSize = size * ( 300.0 / -mvPosition.z );
    gl_Position = projectionMatrix * mvPosition;

  }

</script>
<script type="x-shader/x-fragment" id="fragmentshader">

 uniform vec3 color;
 uniform sampler2D pointTexture;

 varying vec3 vColor;

 void main() {

   gl_FragColor = vec4( color * vColor, 1.0 );
   gl_FragColor = gl_FragColor * texture2D( pointTexture, gl_PointCoord );

 }
</script>
  <!-- </head> -->
  <a href="home.php">

    <body>
      <div id="magic"></div>
      <div class="playground">
        <div class="bottomPosition">
        </div>
      </div>
    </body>
  </a>
</html>