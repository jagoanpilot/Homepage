<?php

// basic API call function for JGC to minimalize code.
// usage: jagoanAPI("getblockcount");
// available methods: getdifficulty | getconnectioncount | getblockcount | getnetworkhashps | getblockhash?index=XX (Block ID) | getblock?hash=XX (hash)

function jagoanAPI($method) {
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://explorer.jagoancoin.org/api/" . $method);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    echo $output;
}

function jagoanEXT($method) {
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://explorer.jagoancoin.org/ext/" . $method);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    echo $output;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JAGOANCOIN - FROM ZERO TO BE A HERO</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://explorer.jagoancoin.org">Exolorer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://bitcointalk.org/index.php?topic=5411752.0">Bitcointalk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://miningpoolstats.stream/jagoancoin">Miningpoolstats</a>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Pools</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="https://pool.rplant.xyz/">Rplant</a></li>
                                        <li><a class="nav-link" href="https://zergpool.com/">Zergpool</a></li>
                                        <li><a class="nav-link" href="https://zpool.ca/">Zpool</a></li>
                                        <li><a class="nav-link" href="https://mining4people.com/#jagoan-pplns">Mining4people</a></li>
                                        <li><a class="nav-link" href="https://raptorhash.com/">Raptorhash</a></li>
                                        <li><a class="nav-link" href="http://miningpoolx.com/#jagoancoin">Miningpoolx</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Exchange</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="https://txbit.io/Trade/JGC/USDT">Txbit</a></li>
                                        <li><a class="nav-link" href="https://www.exbitron.com/trading/jgcusdt">Exbitron</a></li>
                                        <li><a class="nav-link" href="https://www.bitoreum.exchange/trading/jgcusdt">Bitoreum</a></li>
                                        <li><a class="nav-link" href="https://xeggex.com/market/JGC_USDT">Xeggex</a></li>
                                        <li><a class="nav-link" href="https://www.nasadax.com/">Nasadax</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">References</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">QT Wallet</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="thttps://github.com/jagoanpilot/jagoancoin/releases/download/v1.1.2/jagoancoin-win-1.1.1.2.zip">Windows</a></li>
                                                <li><a class="nav-link" href="https://github.com/jagoanpilot/jagoancoin/releases/download/v1.1.2/jagoancoin-dmg-1.1.1.2.zip">MacOs</a></li>
                                                <li><a class="nav-link" href="https://github.com/jagoanpilot/jagoancoin/releases/download/v1.1.2/jagoancoin-ubuntu18-1.1.1.2.zip">Ubuntu 18</a></li>
                                                <li><a class="nav-link" href="https://github.com/jagoanpilot/jagoancoin/releases/download/v1.1.2/jagoancoin-ubuntu20-1.1.1.2.zip">Ubuntu 20</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Online Wallet</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="https://wallet.jagoancoin.org/">Webites Wallet</a></li>
                                                <li><a class="nav-link" href="https://t.me/jagoanpilot_bot">Telegram Wallet</a></li>
                                                <li><a class="nav-link" href="https://discord.gg/a3brezx9vD">Discords Wallet</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="https://github.com/jagoanpilot/jagoancoin">Github</a></li>
                                        <li><a class="nav-link" href="https://discord.gg/a3brezx9vD">Discords</a></li>
                                        <li><a class="nav-link" href="https://t.me/jgcofficial">Telegram</a></li>
                                        <li><a class="nav-link" href="https://twitter.com/jagoanpilot">Twitter</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="bottom-area">
                                <span class="btn-border">
                                <a href="/Whitepaper.pdf" class="cmn-btn">Whitepaper</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Banner Section start -->
    <section class="banner-section">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/coin-2.png" class="obj-1" alt="image">
                <img src="assets/images/winner-cup.png" class="obj-2" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="assets/images/coin-1.png" class="obj-1" alt="image">
                        <img src="assets/images/coin-3.png" class="obj-2" alt="image">
                        <img src="assets/images/coin-3.png" class="obj-3" alt="image">
                        <img src="assets/images/coin-4.png" class="obj-4" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="main-content">
                                <div class="top-area section-text">
                                    <h4 class="sub-title">Smartnodes & Earn Today!</h4>
                                    <h1 class="title">FROM ZERO TO BE A HERO</h1>
                                    <p class="xlr">Jagoancoin is a CPU mineable cryptocurrency and open source. It can be mined on GPU too, but CPU mining is more efficient.</p>
                                </div>
                                <div class="bottom-area">
                                    <span class="btn-border">
                                        <a href="https://docs.jagoancoin.org/" class="cmn-btn">Documentation</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-section">
            <div class="container">
                <div class="row cus-mar">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-area d-flex align-items-center">
                            <div class="img-area">
                                <img src="assets/images/icon/counter-icon-1.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h3 class="m-none"><span class=""></span>
                                    <?php jagoanAPI("getmoneysupply"); ?></h3>
                                <p>Total Circulation Supply</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-area d-flex align-items-center">
                            <div class="img-area">
                                <img src="assets/images/icon/counter-icon-2.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h3 class="m-none"><span class="counter"></span>
                                    <?php jagoanAPI("getblockcount"); ?></h3>
                                <p>Total Block Found</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-area d-flex align-items-center">
                            <div class="img-area">
                                <img src="assets/images/icon/counter-icon-3.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h3 class="m-none"><span class="counter"></span>
                                    <?php jagoanEXT("getbalance/Jhd5XVxDZoapDPSczFYxDfN4ssDvRQsBzp"); ?></h3>
                                <p>Total Coin Burn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- About jagoancoin start -->
    <section class="more-features">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-0 order-1">
                        <div class="img-area">
                            <img src="assets/images/more-features-image.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h2 class="title">The Best Mining And Staking Blockchain Solution</h2>
                        </div>
                        <div class="content-area">
                            <div class="single-item">
                                <div class="image-area">
                                    <img src="assets/images/icon/more-features-icon-1.png" alt="image">
                                </div>
                                <div class="text-area">
                                    <h5>Miners Reward 70% Of A Block</h5>
                                    <p>The current Mining reward 1400 Jagoancoin each block.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="image-area">
                                    <img src="assets/images/icon/more-features-icon-2.png" alt="image">
                                </div>
                                <div class="text-area">
                                    <h5>Smartnodes 25% Of A Block</h5>
                                    <p>The current Smartnodes reward 500 Jagoancoin each block.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="image-area">
                                    <img src="assets/images/icon/more-features-icon-3.png" alt="image">
                                </div>
                                <div class="text-area">
                                    <h5>Team Reward 5% Of A Block</h5>
                                    <p>100 Jagoancoin of each block will be used for development in order to maintain the security of the network, community reward and to pay for exchange listing fees.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About jagoancoin end -->

    <!-- How it Works start -->
    <section class="how-it-works">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Get to Know</h5>
                            <h2 class="title">Jagoancoin Roadmap</h2>
                            <p>How Jagoancoin Works?</p>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <ul class="nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link active" id="sport-tab" data-bs-toggle="tab"
                                        data-bs-target="#sport" role="tab" aria-controls="sport" aria-selected="true">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-1.png" alt="icon">
                                        </span>
                                        Phase 1
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link" id="match-tab" data-bs-toggle="tab" data-bs-target="#match"
                                        role="tab" aria-controls="match" aria-selected="false">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-2.png" alt="icon">
                                        </span>
                                        Phase 2
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team"
                                        role="tab" aria-controls="team" aria-selected="false">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-3.png" alt="icon">
                                        </span>
                                        Phase 3
                                    </h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="sport" role="tabpanel"
                                    aria-labelledby="sport-tab">
                                    <div class="img-area">
                                        <img src="assets/images/process-img-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="match" role="tabpanel" aria-labelledby="match-tab">
                                    <div class="img-area">
                                        <img src="assets/images/process-img-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                                    <div class="img-area">
                                        <img src="assets/images/process-img-3.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works end -->

    <!-- Betpop Up Modal start -->
    <div class="betpopmodal">
        <div class="modal fade" id="betpop-up" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-11">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="top-item">
                                        <a href="javascript:void(0)" class="cmn-btn firstTeam">Eagle will win</a>
                                        <a href="javascript:void(0)" class="cmn-btn active draw">Draw</a>
                                        <a href="javascript:void(0)" class="cmn-btn lastTeam">Paeek will win</a>
                                    </div>
                                    <div class="select-odds d-flex align-items-center">
                                        <h6>Select Odds</h6>
                                        <div class="d-flex in-dec-val">
                                            <input type="text" value="1.5" class="InDeVal2">
                                            <div class="btn-area">
                                                <button class="plus2">
                                                    <img src="assets/images/icon/up-arrow.png" alt="icon">
                                                </button>
                                                <button class="minus2">
                                                    <img src="assets/images/icon/down-arrow.png" alt="icon">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mid-area">
                                        <div class="single-area">
                                            <div class="item-title d-flex align-items-center justify-content-between">
                                                <span>Bet Value :</span>
                                                <select>
                                                    <option value="eth">ETH</option>
                                                    <option value="eth">ETH</option>
                                                    <option value="eth">ETH</option>
                                                </select>
                                            </div>
                                            <div class="d-flex in-dec-val">
                                                <input type="text" value="0.1" class="InDeVal1">
                                                <div class="btn-area">
                                                    <button class="plus">
                                                        <img src="assets/images/icon/up-arrow.png" alt="icon">
                                                    </button>
                                                    <button class="minus">
                                                        <img src="assets/images/icon/down-arrow.png" alt="icon">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-area quick-amounts">
                                            <div class="item-title d-flex align-items-center">
                                                <p>Quick Amounts</p>
                                            </div>
                                            <div class="input-item">
                                                <button class="quickIn">0.005</button>
                                                <button class="quickIn">0.025</button>
                                                <button class="quickIn">0.1</button>
                                                <button class="quickIn">0.5</button>
                                                <button class="quickIn">2.5</button>
                                            </div>
                                        </div>
                                        <div class="single-area smart-value">
                                            <div class="item-title d-flex align-items-center">
                                                <p class="mdr">Smart Contact Value</p>
                                            </div>
                                            <div class="contact-val d-flex align-items-center">
                                                <h4>0.1103</h4>
                                                <h5>ETH</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-area">
                                        <div class="fee-area">
                                            <p>Winner will get: <span class="amount">0.179</span> ETH</p>
                                            <p class="fee">Escrow Fee: <span>5%</span></p>
                                        </div>
                                        <div class="btn-area">
                                            <button>Make (0.1 ETH) Bet</button>
                                        </div>
                                        <div class="bottom-right">
                                            <p>Game Closes:</p>
                                            <p class="date-area">Mar <span>21,2021-1:00</span> Am</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Betpop Up Modal end -->

    <!-- Amazing Features start -->
    <section class="amazing-features">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">List of jagoancoin Aggregators and exchange</h5>
                            <h2 class="title">An Exhaustive list of Amazing Features</h2>
                        </div>
                    </div>
                </div>
                <div class="features-carousel">
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-1.png" alt="icon">
                            </div>
                            <h5>TXBIT</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-2.png" alt="icon">
                            </div>
                            <h5>EXBITRON</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-3.png" alt="icon">
                            </div>
                            <h5>BITOREUM</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-4.png" alt="icon">
                            </div>
                            <h5>XEGGEX</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-5.png" alt="icon">
                            </div>
                            <h5>COINPAPRIKA</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-6.png" alt="icon">
                            </div>
                            <h5>COINPARE</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-7.png" alt="icon">
                            </div>
                            <h5>LIVECOINWATCH</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-8.png" alt="icon">
                            </div>
                            <h5>NOMICS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Amazing Features end -->

   
    <!-- FAQs In start -->
    <section class="faqs-section">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Frequently Asked Questions</h5>
                            <h2 class="title">If you have questions we have answer</h2>
                            <p>Answers for our most popular questions about jagoancoin, staking, and smartnodes</p>
                        </div>
                    </div>
                </div>
                <div class="row faq-bg d-flex justify-content-center">
                    <div class="col-xl-10">
                        <div class="faq-box mt-60 mb-60">
                            <div class="accordion" id="accordionFaqs">
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            What is Smartnodes?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Smartnodes are responsible for storing and executing smart contracts, having nodes handle contracts rather than adding them to blocks greatly reduces the chances of scaling issues, like Ethereum has been experiencing. In addition this also allows larger smart contracts and a wider variety of languages that can be used to create them.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What is Jagoancoin Staking?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Staking is when you lock crypto assets for a set period of time to help support the operation of a blockchain, In return for staking your crypto, you earn more cryptocurrency.
                                                Like a lot of things in crypto, staking can be a complicated idea or a simple one depending on how many levels of understanding you want to unlock. For a lot of traders and investors, knowing that staking is a way of earning rewards for holding certain cryptocurrencies is the key takeaway. But even if you’re just looking to earn some staking rewards, it’s useful to understand at least a little bit about how and why it works the way it does.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How much will i get from staking?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>1% of the amount deposited every day and will continue to decrease as more smartnodes,
                                                Actually the staking feature on bot was created as an alternative for those who want to run JGC smartnode but don't have enough JGC. That's why we set a maximum staking limit, because if you have 500K JGC you should run smartnode yourself.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Jagoancoin Burn?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Coin burning is a deliberate burning process by the coin maker (developer) to remove coins from circulation or to reduce the supply of available coins. So that the coin cannot be reused, it is based on following the principles of the market economy in calculating the price of supply and demand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Purpose of Burning Coin?
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Removing a number of coins from circulation can be done for different purposes, but is most often done with the aim of deflation the value of a coin or token.
                                                In simple terms, this burning can create a shortage of coins and tokens that are burned. When a resource (coins and tokens) is limited, then the value of the resource will have a high value.
                                                Generally, coin burning is the most effective method of increasing and stabilizing the value of coins and tokens. Stability, gives investors a greater incentive to hold the coin and keeps the price at a more favorable level. Token burning also projects an edge, especially in the early stages of coin development.</p>
                                        </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQs In end -->

    <!-- Affilliate start -->
    <section class="affilliate-section">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-0 order-1">
                        <div class="img-area d-rtl">
                            <img src="assets/images/affilliate-image.png" alt="image" class="max-un">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <h5 class="sub-title">Join Affilliate with Jagoancoin Staking</h5>
                            <h2 class="title">Earn As Our Affilliate</h2>
                            <p>Join the program and gain up to 10% revshare! Are you an experienced affiliate, and would
                                like to set up your own rules? We are happy to get to know your offer. Partner with us
                                and earn as your referrals start staking!</p>
                        </div>
                        <div class="bottom-area">
                            <div class="btn-border d-inline-block">
                                <a href="https://docs.jagoancoin.org/jagoancoin-staking" class="cmn-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Affilliate end -->

    <!-- Footer Area Start -->
    <footer class="footer-section">
        <div class="container pt-120">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="newsletter">
                        <div class="section-text text-center">
                            <h5 class="sub-title">Subscribe Us</h5>
                            <h3 class="title">For Newsletter</h3>
                            <p>Subscribe to our newsletter to receive all the latest news and updates</p>
                        </div>
                        <form action="#">
                            <div class="form-group d-flex align-items-center">
                                <input type="text" placeholder="Enter your email Address">
                                <button><img src="assets/images/icon/arrow-right-2.png" alt="icon"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area pt-120">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="menu-item">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="copyright">
                            <div class="copy-area">
                                <p> Copyright © <a href="index.html">Jagoancoin</a>
                                </p>
                            </div>
                            <div class="social-link d-flex align-items-center">
                                <a href="https://t.me/jgcofficial"><i class="fab fa-telegram"></i></a>
                                <a href="https://twitter.com/jagoanpilot"><i class="fab fa-twitter"></i></a>
                                <a href="https://github.com/jagoanpilot/jagoancoin"><i class="fab fa-github"></i></a>
                                <a href="https://discord.com/invite/a3brezx9vD"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--==================================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugin/jquery.downCount.js"></script>
    <script src="assets/js/plugin/counter.js"></script>
    <script src="assets/js/plugin/waypoint.min.js"></script>
    <script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugin/wow.min.js"></script>
    <script src="assets/js/plugin/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>