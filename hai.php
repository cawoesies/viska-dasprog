<!DOCTYPE html>
<html>
  <head>
    <title>TUGAS AKHIR DASPROG</title>
  </head>
  <body>

    <!--Navigasi-->

    <div class="navigasi">
      <div class="logo">
        <h1>Pinka's Bakery</h1>
      </div>

      <div class="menu">
        <ul>
          <li><a href="hai.php">Hai</a></li>
          <li><a href="kue.php">Kue Tradisional</a></li>
          <li><a href="Sejarah.php">Sejarah</a></li>
          <li><a href="bahan dasar.php">Bahan Dasar</a></li>
        </ul>
      </div>
    </div>

    <!--Ini Banner-->

    <div class="banner">
      <img src="Free Bakery Logo Designs _ Bakery Logo Maker.jpg" />
      <h1>HALO ... <span></span></h1>
      <p>ANEKA KUE TRADISIONAL INDONESIA</p>
      <a href="profil.html"><button>SELENGKAPNYA</button></a>
    </div>
    <style>
      *{
    margin: 0;
    padding: 0;
    font-family: Georgia;
  }
  
  .navigasi {
    background-color: #DA0C81;
    width: 300%;
    height: 110px;
    color: white;
    position: fixed;
  }
  
  .logo {
    float: left;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 55px;
  }  
  
  .logo h1 {
    font-size: 50px;
    color: white;
  }
  .menu {
    margin-left: 900px;
    padding-top: 55px;
    font-size: 20px;
  }
  
  .menu ul li {
    list-style: none;
    display: inline-block;
    margin-right: 50px;
  }
  
  .menu ul li a {
    text-decoration: none;
    color: white;
  }
  
  .menu ul li a:hover {
    color: #ffcefe;
    font-style: italic;
    font-size: 20px;
  }
  
  .banner {
    background-color: #ED5AB3;
    height: 700px;
    text-align: center;
    color: white;
  }
  
  .banner img {
    border-radius: 100px;
    height: 150px;
    border: 6px solid white;
    margin-top: 200px;
  }
  
  .banner h1 {
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 50px;
  }
  
  .banner p {
    font-size: 30px;
    color: white;
  }
  .banner button {
    margin-top: 60px;
    padding: 10px;
    width: 400px;
    border-radius: 50px;
    border: none;
    font-size: 20px;
  }
  
  .banner button:hover {
    background-color: #EA1179;
    border: 1px solid #000;
    color: #331D2C;
  }
  
  h1 span:before {
    content: '';  
    animation: gerak infinite 8s ease;
    transform: translateY(-50%);
    color: #000;
    font-size: 50px;
  }
  
  @keyframes gerak {
    0% {
      content: "SELAMAT DATANG";
    }
  
    50% {
      content: "MARI KITA LIHAT KUE";
    }
  
    100% {
      content: "DARI BERBGAI DAERAH";
    } 
  }
    </style>