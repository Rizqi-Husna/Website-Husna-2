<!DOCTYPE html>
<html lang="en">
<head>
<title>About Huzna</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 10px;
  text-align: center;
  background: #6b7db3;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #000000;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
  background-color: #666;
  color: white;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  float: left;
  background-color: #666;
  color: white;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 700px; /* Should be removed. Only for demonstration */
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 2px;
  text-align: center;
  background: #6b7db3;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>My Tour and Travel</h1>
  <p>A <b> Hope You Can Enjoyed </b></p>
</div>

<div class="navbar">
  <a href="index.html" class="active">Home</a>
  <a href="abtme.php" class="right">About Me</a>
</div>
  <div class="column" style="background-color:#ffffff">
  </div>
  <div class="column" style="background-color:#e6ecff;">
    <center><h2>About Me</h2> <hr/>
    <img src="img/IMG_0555.jpg" width="300"> <hr/>
    <p>Hai, saya Rizqi Husna dan saya menulis My Tour And Travel untuk membantu para teman-teman yang ingin mengunjungi tempat wisata yang pernah saya kunjungi. Saya memulai My Tour And Travel pada tahun 2022 (baru-baru ini) untuk membantu para wisatawan yang mungkin ingin mengunjungi tempat wisata seperti Tanjung Benoa, Telaga Ngebel dan Pantai Damas bersama keluarga maupun teman-teman yang mungkin belum tahu apa isi tempat wisata disana. Pastinya ketiga tempat tersebut memiliki keunikan masing-masing entah itu pada perjalanannya, lingkungan, dan cuaca. Sebelum saya seorang penulis blog ini, saya adalah mahasiswi di Universitas Negeri Surabaya. Untuk menghubungi saya, silakan email rizqi.20013@mhs.unesa.ac.id. </p></center> <hr/>
  </div>
  <div class="column" style="background-color:#ffffff"> 
    </center>
</div>
<div class="footer">
  <h2>2022</h2>
</div>
</body>
</html>
