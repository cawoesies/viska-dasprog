<!DOCTYPE html>
<html>
  <head>
    <title>PROFIL</title>
  </head>
  <body>
  
    <div class="servicess">
      <a href="hai.php" class="learn-isi"><button>Back</button></a>
  </div>
    <!--Navigasi-->

    <div class="navigasi">
      <div class="logo">
        <h1>PROFIL</h1>
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
    </div>

    <!--Ini Banner-->

    <div class="banner">
      <img src="VISKA.jpg" />
      <h1>HALO... <span></span></h1>
      <p>SALAM KENAL</p>
      <a href="https://instagram.com/viskawaii?igshid=MzMyNGUyNmU2YQ=="><button>MY INSTAGRAM</button></a>
    </div>
    <style>
      * {
    margin: 0;
    padding: 0;
    font-family: Georgia;
  }
  
  body {
    background-color: #FFC5C5;
  }

  .servicess {
    font-size: 30px;
    text-align: left ;
    padding-left: 30px;
  }
  
  .servicess button {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 20px;
    width: 130px;
    border-radius: 10px;
    border: none;
    font-size: 30px;
  }
  
  .servicess button:hover {
    background-color: #A2678A;
    border: 2px solid white;
    color: #533E85 ;
  }

  .navigasi {
    background-color: #AF2655;
    width: 200%;
    height: 100px;
    color: #ED9ED6;
    position: fixed;
  }
  

  .logo {
    float: left;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 40px;
  
  }
  
  .logo h1 {
    font-size: 40px;
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
    background-color: #FFC5C5;
    height: 100px;
    text-align: center;
    color: #C70039;
  }
  
  .banner img {
    border-radius: 50px;
    height: 150px;
    border: 3px solid white;
    margin-top: 200px;
  }
  
  .banner h1 {
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 50px;
  }
  
  .banner button {
    margin-top: 60px;
    padding: 10px;
    width: 400px;
    border-radius: 30px;
    border: none;
    font-size: 30px;
  }

  .banner p {
    font-size: 40px;
    color: #D67BFF;
  }
  
  .banner button:hover {
    background-color: #E19898;
    border: 1px solid white;
    color: #3F1D38;
  }
  
  h1 span:before {
    content: '';  
    animation: gerak infinite 8s ease;
    transform: translateY(-50%);
    color: #FF3FA4;
    font-size: 50px;
  }
  
  @keyframes gerak {
    0% {
      content: "SAYA VISKA ATALIA RAMADHANI";
    }
  
    50% {
      content: "SAYA DARI KELAS X SIJA 1 ";
    }
  
    100% {
      content: "NO.ABSEN SAYA 32";
    } 
  }
    </style>