<?php 
// include "db.php";
session_start();
$user=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex - Buy & Sell Digital Assets In The cryptex</title>

  <!-- 
    - favicon
  -->

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">



  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="images/logo.svg" width="32" height="32" alt="Cryptex logo">
        Cryptex
      </a>

      <nav class="navbar" data-navbar id="navbar">
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link active" data-nav-link>Homepage</a>
          </li>

          <li class="navbar-item">
            <a href="nft1.html" class="navbar-link" data-nav-link>NFT</a>
          </li>

          <li class="navbar-item">
            <a href="market.html" class="navbar-link" data-nav-link>Markets</a>
          </li>

          <li class="navbar-item">
            <a href="port.html" class="navbar-link" data-nav-link>Portfolio</a>
          </li>

          <li class="navbar-item">
            <a href="blog.html" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="sign-up.php" class="navbar-link" data-nav-link>Sign Up</a>
          </li>

          <li class="navbar-item">
            <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
            <!-- <a href="login.html" class="navbar-link" data-nav-link>Sign Up</a> -->
          </li>

        </ul>
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="images/user.png">
              <h2><?php echo $user; ?></h2>
            </div>
            <hr>
      
            <a href="#" class="sub-menu-link">
              <img src="images/profile.png">
                <button id="second">Edit Profile</button> 
              <span class="pp">></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="images/setting.png">
              <button id="third"> Settings & Privacy</button>
              <span class="po">></span>
            </a>

            <a href="#" class="sub-menu-link">
              <img src="images/help.png">
              <button id="four">Help & Support</button>
              <span class="fg">></span>
            </a>
            <a href="log-in.php" class="sub-menu-link">
              <img src="images/logout.png">
              <button id="first">Logout</button>
              <span id="sp">></span>
            </a>
          </div>
        </div>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>
      <div class="bs">
      <a href="wallet.html" class="champ">Wallet</a>
    </div> 

    </div>
  </header>
  <main>
    <article>

    

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Buy & Sell Digital Assets In The Cryptex</h1>

            <p class="hero-text">
              Coin Cryptex is the easiest, safest, and fastest way to buy & sell crypto asset exchange.
            </p>

            <a href="#" class="btn btn-primary">Get started now</a>

          </div>

          <figure class="hero-banner">
            <img src="images/hero-banner.png" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #TREND
      -->

      <section class="section trend" aria-label="crypto trend" data-section>
        <div class="container">

          <div class="trend-tab">

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active">Crypto</button>
              </li>

              
            </ul>
            <marquee behavior="" direction="">
            <ul class="tab-content">

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="images/coin-1.svg" width="24" height="24" alt="bitcoin logo">

                    <a href="#" class="card-title">
                      Bitcoin <span class="span">BTC/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="46168.95">USD 46,168.95</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge red">-0.79%</div>
                  </div>

                </div>
              </li>




              <li>
                <div class="trend-card active">

                  <div class="card-title-wrapper">
                    <img src="images/coin-2.svg" width="24" height="24" alt="ethereum logo">

                    <a href="#" class="card-title">
                      Ethereum <span class="span">ETH/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="3480.04">USD 3,480.04</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge green">+10.55%</div>
                  </div>

                </div>
              </li>




              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge red">-0.01%</div>
                  </div>

                </div>
              </li>





              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="images/coin-4.svg" width="24" height="24" alt="bnb logo">

                    <a href="#" class="card-title">
                      BNB <span class="span">BNB/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="443.56">USD 443.56</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge red">-1.24%</div>
                  </div>

                </div>
              </li>
             




            </ul>
 </marquee>
          </div>

        </div>
      </section>





      <!-- 
        - #MARKET
      -->

      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Market Update</h2>

            <a href="market.html" class="btn-link">See All Coins</a>
          </div>

          <div class="market-tab">

            <ul class="tab-nav">



              <li>
                <button class="tab-btn active">View All</button>
              </li>
 
              <li>
                <button class="tab-btn"> <a href="market.html">Market </a></button>
              </li>
              <li>
                <button class="tab-btn"> <a href="nft1.html"> NFT </a></button>
              </li>

          

  


            </ul>

            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading" scope="col">#</th>

                  <th class="table-heading" scope="col">Name</th>

                  <th class="table-heading" scope="col">Last Price</th>

                  <th class="table-heading" scope="col">24h %</th>

                  <th class="table-heading" scope="col">Market Cap</th>

                  <th class="table-heading" scope="col">Last 7 Days</th>

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body">

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>



                  <th class="table-data rank" scope="row">1</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline" >Trade</button>
                  </td>

                </tr>


                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>



                  <th class="table-data rank" scope="row">2</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-5.12%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>



                  <th class="table-data rank" scope="row">3</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>



                  <th class="table-data rank" scope="row">4</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-3.75%%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>




                  <th class="table-data rank" scope="row">5</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>



                  <th class="table-data rank" scope="row">6</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-2.22%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>
                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">7</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+0.8%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline ">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>



                  <th class="table-data rank" scope="row">8</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.41%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </section>



      



      <!-- 
        - #INSTRUCTION
      -->

      <section class="section instruction" aria-label="instruction" data-section>
        <div class="container">

          <h2 class="h2 section-title">How It Work</h2>

          <p class="section-text">
            Stacks is a production-ready library of stackable content blocks built in React Native.
          </p>

          <ul class="instruction-list">

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="images/instruction-1.png" width="96" height="96" loading="lazy" alt="Step 1"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 1</p>

                <h3 class="h3 card-title">Download</h3>

                <p class="card-text">
                  Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="images/instruction-2.png" width="96" height="96" loading="lazy" alt="Step 2"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 2</p>

                <h3 class="h3 card-title">Connect Wallet</h3>

                <p class="card-text">
                  Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="images/instruction-3.png" width="96" height="96" loading="lazy" alt="Step 3"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 3</p>

                <h3 class="h3 card-title">Start Trading</h3>

                <p class="card-text">
                  Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="images/instruction-4.png" width="96" height="96" loading="lazy" alt="Step 4"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 4</p>

                <h3 class="h3 card-title">Earn Money</h3>

                <p class="card-text">
                  Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" data-section>
        <div class="container">

          <figure class="about-banner">
            <img src="images/about-banner.png" width="748" height="436" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title">What Is Cryptex</h2>

            <p class="section-text">
              Experience a variety of trading on Bitcost. You can use various types of coin transactions such as Spot
              Trade, Futures
              Trade, P2P, Staking, Mining, and margin.
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text">
                  Experience a variety of trading on Bitcost. You can use various types of coin transactions such as
                  Spot Trade, Futures
                  Trade, P2P, Staking, Mining, and margin.
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title">Buy and sell BTC, ETH, XRP, OKB, Etc...</h3>
                </div>

                <p class="item-text">
                  Experience a variety of trading on Bitcost. You can use various types of coin transactions such as
                  Spot Trade, Futures
                  Trade, P2P, Staking, Mining, and margin.
                </p>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">Explore More</a>

          </div>

        </div>
      </section>





      <!-- 
        - #APP
      -->

      <!-- <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-content">

            <h2 class="h2 section-title">Free Your Money & Invest With Confident</h2>

            <p class="section-text">
              With Cryptor Trade, you can be sure your trading skills are matched
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Buy, Sell, And Trade On The Go</h3>
                </div>

                <p class="item-text">
                  Manage Your Holdings From Your Mobile Decive
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Take Control Of Your Wealth</h3>
                </div>

                <p class="item-text">
                  Rest Assured You (And Only You) Have Access To Your Funds
                </p>
              </li>

            </ul>

            <div class="app-wrapper">
              <a href="#">
                <img src="images/googleplay.png" width="135" height="40" loading="lazy"
                  alt="get it on google play">
              </a>

              <a href="#">
                <img src="images/appstore.png" width="120" height="40" loading="lazy"
                  alt="download on the app store">
              </a>
            </div>

          </div>

          <div class="app-banner">
            <img src="images/app-banner.png" width="618" height="526" loading="lazy" alt="app banner"
              class="w-100">

            <span class="span">Scan To Download</span>
          </div>

        </div>
      </section>

    </article>
  </main>

 -->



  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top" data-section>
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="images/logo.svg" width="50" height="50" alt="Cryptex logo">
            Cryptex
          </a>

          <h2 class="footer-title">Let's talk! 🤙</h2>

          <a href="tel:+123456789101" class="footer-contact-link">+91 7499095929</a>

          <a href="mailto:hello.cryptex@gmail.com" class="footer-contact-link">hello.cryptex@gmail.com</a>

          <address class="footer-contact-link">
           Government college of engineering, Yavatmal-445001
          </address>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Products</p>
          </li>

          <li>
            <a href="#" class="footer-link">Spot</a>
          </li>

          <li>
            <a href="#" class="footer-link">Inverse Perpetual</a>
          </li>

          <li>
            <a href="#" class="footer-link">USDT Perpetual</a>
          </li>

          <li>
            <a href="#" class="footer-link">Exchange</a>
          </li>

          <li>
            <a href="#" class="footer-link">Launchpad</a>
          </li>

          <li>
            <a href="#" class="footer-link">Binance Pay</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">NFT</a>
          </li>

          <li>
            <a href="#" class="footer-link">Markets</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tranding Fee</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">Referral Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">API</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Bybit Learn</a>
          </li>

          <li>
            <a href="#" class="footer-link">Help Center</a>
          </li>

          <li>
            <a href="#" class="footer-link">User Feedback</a>
          </li>

          <li>
            <a href="#" class="footer-link">Submit a request</a>
          </li>

          <li>
            <a href="#" class="footer-link">API Documentation</a>
          </li>

          <li>
            <a href="#" class="footer-link">Trading Rules</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Bybit</a>
          </li>

          <li>
            <a href="#" class="footer-link">Authenticity Check</a>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">Business Contacts</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="user.js"></script>
</body>

</html>