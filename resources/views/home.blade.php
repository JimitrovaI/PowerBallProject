@extends('layouts.app')
@section('content')
<!-- banner-section start -->
<section class="slider-container">
      <div class="slider">
        <div class="box1 box">
          <div class="bg"></div>
          <div class="details">
            <h1 class="slider-title">I'm the first Box</h1>
            <p class="slider-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Integer lacinia dui lectus. Donec scelerisque ipsum
              diam, ac mattis orci pellentesque eget.
            </p>
            <button class="slider-btn">BUY NOW</button>
          </div>
        </div>
        <div class="box2 box">
          <div class="bg"></div>
          <div class="details">
            <h1 class="slider-title">I'm the second Box</h1>
            <p class="slider-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Integer lacinia dui lectus. Donec scelerisque ipsum
              diam, ac mattis orci pellentesque eget.
            </p>
            <button class="slider-btn">BUY NOW</button>
          </div>
        </div>
        <div class="box3 box">
          <div class="bg"></div>
          <div class="details">
            <h1 class="slider-title">I'm the third Box</h1>
            <p class="slider-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Integer lacinia dui lectus. Donec scelerisque ipsum
              diam, ac mattis orci pellentesque eget.
            </p>
            <button class="slider-btn">BUY NOW</button>
          </div>
        </div>
        <div class="box4 box">
          <div class="bg"></div>
          <div class="details">
            <h1 class="slider-title">I'm the fourth Box</h1>
            <p class="slider-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Integer lacinia dui lectus. Donec scelerisque ipsum
              diam, ac mattis orci pellentesque eget.
            </p>
            <button class="slider-btn">BUY NOW</button>
          </div>
        </div>
        <div class="box5 box">
          <div class="bg"></div>
          <div class="details">
            <h1 class="slider-title">I'm the fifth Box</h1>
            <p class="slider-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Integer lacinia dui lectus. Donec scelerisque ipsum
              diam, ac mattis orci pellentesque eget.
            </p>
            <button class="slider-btn">BUY NOW</button>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91">
        <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91">
        <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff" /></svg>
      <div class="trail">
        <div class="box1 active"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
      </div>
    </section>
    <!-- banner-section end -->

    <!-- lottery-timer-section start -->
    <section class="lottery-timer-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5">
            <div class="timer-content">
              <h3 class="title">Buy Lottery Tickets Online</h3>
              <p>Buy lottery tickets online to the biggest lotteries in the world offering huge jackpot prizes that you
                can win when you play online lottery.</p>
            </div>
          </div>
          <div class="col-xl-5 text-center">
            <div class="timer-part">
              <div class="clock"></div>
            </div>
          </div>
          <div class="col-xl-2">
            <div class="link-area text-center">
              <a href="#0" class="border-btn">register & play</a>
              <a href="#0" class="text-btn">view all offer</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- lottery-timer-section end -->

    <!-- jackpot-section start -->
    <section class="jackpot-section section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="section-header text-center">
              <h2 class="section-title">Lottery Jackpots</h2>
              <p>Choose from the Powerball, Mega Millions, Lotto or Lucky Day Lotto and try for a chance to win a big
                cash prize</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="jackpot-item text-center">
              <img src="{{asset('images/elements/jackpot-1.png')}}" alt="image">
              <span class="amount">???161,557,581</span>
              <h5 class="title">US Powerball</h5>
              <p class="next-draw-time">Next Draw : <span id="remainTime1"></span></p>
              <a href="#0" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-md-6">
            <div class="jackpot-item text-center">
              <img src="{{asset('images/elements/jackpot-2.png')}}" alt="image">
              <span class="amount">???161,557,581</span>
              <h5 class="title">Cancer Charity</h5>
              <p class="next-draw-time">Next Draw : <span id="remainTime2"></span></p>
              <a href="#0" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-md-6">
            <div class="jackpot-item text-center">
              <img src="{{asset('images/elements/jackpot-3.png')}}" alt="image">
              <span class="amount">???161,557,581</span>
              <h5 class="title">EuroJackpot</h5>
              <p class="next-draw-time">Next Draw : <span id="remainTime3"></span></p>
              <a href="#0" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-12 text-center">
            <a href="#0" class="text-btn">Show all lotteries</a>
          </div>
        </div>
      </div>
    </section>
    <!-- jackpot-section start -->

    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image" data-background="{{asset('images/bg-one.jpg')}}">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-header text-center">
              <h2 class="section-title">Latest Lottery Results</h2>
              <p>Check your lotto results online, find all the lotto winning numbers and see if you won the latest lotto
                jackpots! </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="lottery-winning-num-part">
              <div class="lottery-winning-num-table">
                <h3 class="block-title">lottery winning numbers</h3>
                <div class="lottery-winning-table">
                  <table>
                    <thead>
                      <tr>
                        <th class="name">lottery</th>
                        <th class="date">draw date</th>
                        <th class="numbers">winning numbers</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"><span
                              class="winner-name">cancer charity</span></div>
                        </td>
                        <td><span class="winning-date">30/05/2018</span></td>
                        <td>
                          <ul class="number-list">
                            <li>19</li>
                            <li>31</li>
                            <li>21</li>
                            <li class="active">69</li>
                            <li>99</li>
                            <li>77</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/2.jpg')}}" alt="flag"><span
                              class="winner-name">US Powerball</span></div>
                        </td>
                        <td><span class="winning-date">30/05/2018</span></td>
                        <td>
                          <ul class="number-list">
                            <li>19</li>
                            <li>31</li>
                            <li>21</li>
                            <li class="active">69</li>
                            <li>99</li>
                            <li class="active">77</li>
                            <li>65</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/3.jpg')}}" alt="flag"><span
                              class="winner-name">Mega Millions</span></div>
                        </td>
                        <td><span class="winning-date">30/05/2018</span></td>
                        <td>
                          <ul class="number-list">
                            <li>19</li>
                            <li>31</li>
                            <li class="active">21</li>
                            <li class="active">69</li>
                            <li>99</li>
                            <li class="active">77</li>
                            <li>66</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"><span
                              class="winner-name">UK Lotto</span></div>
                        </td>
                        <td><span class="winning-date">30/05/2018</span></td>
                        <td>
                          <ul class="number-list">
                            <li>19</li>
                            <li>31</li>
                            <li>21</li>
                            <li class="active">69</li>
                            <li>99</li>
                            <li>77</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/3.jpg')}}" alt="flag"><span
                              class="winner-name">Mega Millions</span></div>
                        </td>
                        <td><span class="winning-date">30/05/2018</span></td>
                        <td>
                          <ul class="number-list">
                            <li>19</li>
                            <li>31</li>
                            <li class="active">21</li>
                            <li class="active">69</li>
                            <li>99</li>
                            <li class="active">77</li>
                            <li>66</li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="winner-part">
              <h3 class="block-title">our winners</h3>
              <div class="winner-list">
                <div class="winner-single">
                  <div class="winner-header"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"><span class="name">vola
                      pitmar</span></div>
                  <p><span class="lottery-name">Cancer Charity</span><span class="date">30/05/2018</span></p>
                  <h5 class="prize-amount">???500.00</h5>
                </div><!-- winner-single end -->
                <div class="winner-single">
                  <div class="winner-header"><img src="{{asset('images/flag/4.jpg')}}" alt="flag"><span class="name">cay
                      colon</span></div>
                  <p><span class="lottery-name">Powerball</span><span class="date">30/05/2018</span></p>
                  <h5 class="prize-amount">???340.00</h5>
                </div><!-- winner-single end -->
                <div class="winner-single">
                  <div class="winner-header"><img src="{{asset('images/flag/5.jpg')}}" alt="flag"><span class="name">irez
                      newtkon</span></div>
                  <p><span class="lottery-name">Powerball</span><span class="date">30/05/2018</span></p>
                  <h5 class="prize-amount">???130.00</h5>
                </div><!-- winner-single end -->
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <a href="#" class="text-btn">see all result</a>
          </div>
        </div>
      </div>
    </section>
    <!-- lottery-result-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding">
      <div class="choose-us-image"><img src="{{asset('images/elements/mouse.png')}}" alt="image"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title">Why Choose Us?</h2>
              <p>Sorteo makes playing the world's largest lotteries easy and fun.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="row mt-mb-15">
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="{{asset('images/svg-icons/choose-us-icons/1.svg')}}" alt="icon">
                    </div>
                    <h4 class="title">Biggest lottery jackpots</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So,
                      there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><!-- choose-item end -->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="{{asset('images/svg-icons/choose-us-icons/2.svg')}}" alt="icon">
                    </div>
                    <h4 class="title">No commission on Winnings</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So,
                      there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><!-- choose-item end -->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="{{asset('images/svg-icons/choose-us-icons/3.svg')}}" alt="icon">
                    </div>
                    <h4 class="title"> Safe and Secure Playing</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So,
                      there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><!-- choose-item end -->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="{{asset('images/svg-icons/choose-us-icons/4.svg')}}" alt="icon">
                    </div>
                    <h4 class="title">Instant payout system</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So,
                      there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><!-- choose-item end -->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="{{asset('images/svg-icons/choose-us-icons/5.svg')}}" alt="icon">
                    </div>
                    <h4 class="title">Performance Bonuses</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So,
                      there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><!-- choose-item end -->
              <div class="col-lg-4 col-sm-6">
                <div class="choose-item text-center">
                  <div class="front">
                    <div class="icon">
                      <img src="{{asset('images/svg-icons/choose-us-icons/6.svg')}}" alt="icon">
                    </div>
                    <h4 class="title">Dedicated Support</h4>
                  </div>
                  <div class="back">
                    <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So,
                      there is no need for you to queue, or visit a retail store, to get tickets.</p>
                  </div>
                </div>
              </div><!-- choose-item end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- choose-us-section end -->

    <!-- work-steps-section strat -->
    <section class="work-steps-section section-padding border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-header text-center">
              <h2 class="section-title">how it works</h2>
              <p>Sorteo is the best way to play these exciting lotteries from anywhere in the world.</p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="work-steps-items-part d-flex">
              <div class="line"><img src="{{asset('images/elements/line.png')}}" alt="line-image"></div>
              <div class="work-steps-item">
                <div class="work-steps-item-inner">
                  <div class="icon"><img src="{{asset('images/svg-icons/how-work-icons/1.svg')}}" alt="icon">
                    <span class="count-num">01</span></div>
                  <h4 class="title">choose</h4>
                  <p>Choose your lottery & pick your numbers</p>
                </div>
              </div><!-- work-steps-item end -->
              <div class="work-steps-item">
                <div class="work-steps-item-inner">
                  <div class="icon"><img src="{{asset('images/svg-icons/how-work-icons/2.svg')}}" alt="icon">
                    <span class="count-num">02</span></div>
                  <h4 class="title">buy</h4>
                  <p>Complete your purchase</p>
                </div>
              </div><!-- work-steps-item end -->
              <div class="work-steps-item">
                <div class="work-steps-item-inner">
                  <div class="icon"><img src="{{asset('images/svg-icons/how-work-icons/3.svg')}}" alt="icon">
                    <span class="count-num">01</span></div>
                  <h4 class="title">win</h4>
                  <p>Start dreaming, you're almost there</p>
                </div>
              </div><!-- work-steps-item end -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="work-steps-thumb-part">
              <img src="{{asset('images/elements/step.png')}}" alt="work-step-image">
              <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection" class="play-btn"><i
                  class="fa fa-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- work-steps-section strat -->

    <!-- online-ticket-section start -->
    <section class="online-ticket-section section-padding has_bg_image" data-background="{{asset('images/bg-two.jpg')}}">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Buy Lottery Tickets Online</h2>
              <p>Play the lottery online safely and securely at theLotter, the leading lottery ticket purchasing service
                in the world </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="online-ticket-table-part">
              <div class="online-ticket-table">
                <h3 class="block-title">Select your winning lottery numbers</h3>
                <div class="online-ticket-table-wrapper">
                  <table>
                    <thead>
                      <tr>
                        <th class="name">lottery</th>
                        <th class="jackpot">jackpot</th>
                        <th class="price">price</th>
                        <th class="draw-time">time to draw</th>
                        <th class="sold-num">sold</th>
                        <th class="status">status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"><span
                              class="winner-name">cancer charity</span></div>
                        </td>
                        <td>
                          <span class="jackpot-price">??? 53,000,000</span>
                        </td>
                        <td>
                          <span class="price">???3.9</span>
                        </td>
                        <td>
                          <div class="draw-timer"></div>
                        </td>
                        <td>
                          <div class="progressbar" data-perc="50%">
                            <div class="bar"></div>
                            <span class="label">50</span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="cmn-btn">buy ticket</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/2.jpg')}}" alt="flag"><span
                              class="winner-name">US Powerball</span></div>
                        </td>
                        <td>
                          <span class="jackpot-price">??? 53,000,000</span>
                        </td>
                        <td>
                          <span class="price">???3.9</span>
                        </td>
                        <td>
                          <div class="draw-timer"></div>
                        </td>
                        <td>
                          <div class="progressbar" data-perc="50%">
                            <div class="bar"></div>
                            <span class="label">50</span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="cmn-btn">buy ticket</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/3.jpg')}}" alt="flag"><span
                              class="winner-name">Mega Millions</span></div>
                        </td>
                        <td>
                          <span class="jackpot-price">??? 53,000,000</span>
                        </td>
                        <td>
                          <span class="price">???3.9</span>
                        </td>
                        <td>
                          <div class="draw-timer"></div>
                        </td>
                        <td>
                          <div class="progressbar" data-perc="50%">
                            <div class="bar"></div>
                            <span class="label">50</span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="cmn-btn">buy ticket</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"><span
                              class="winner-name">UK Lotto</span></div>
                        </td>
                        <td>
                          <span class="jackpot-price">??? 53,000,000</span>
                        </td>
                        <td>
                          <span class="price">???3.9</span>
                        </td>
                        <td>
                          <div class="draw-timer"></div>
                        </td>
                        <td>
                          <div class="progressbar" data-perc="50%">
                            <div class="bar"></div>
                            <span class="label">50</span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="cmn-btn">buy ticket</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="winner-details"><img src="{{asset('images/flag/3.jpg')}}" alt="flag"><span
                              class="winner-name">Mega Millions</span></div>
                        </td>
                        <td>
                          <span class="jackpot-price">??? 53,000,000</span>
                        </td>
                        <td>
                          <span class="price">???3.9</span>
                        </td>
                        <td>
                          <div class="draw-timer"></div>
                        </td>
                        <td>
                          <div class="progressbar" data-perc="50%">
                            <div class="bar"></div>
                            <span class="label">50</span>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="cmn-btn">buy ticket</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <a href="#" class="text-btn">view all lotteries</a>
          </div>
        </div>
      </div>
    </section>
    <!-- online-ticket-section end -->

    <!-- affiliate-section start -->
    <section class="affiliate-section section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Affiliate Programs</h2>
              <p>Tell A Friend is our unique lottery friends promotion club that enables you to earn amazing bonus money
                rewards for inviting friends to play the world???s biggest jackpots!</p>
            </div>
          </div>
        </div>
        <div class="row m-bottom-not-30">
          <div class="col-lg-3 col-sm-6">
            <div class="affiliate-item text-center">
              <div class="icon">
                <div class="icon-inner">
                  <img src="{{asset('images/svg-icons/affiliate-icons/1.svg')}}" alt="icon">
                </div>
              </div>
              <div class="content">
                <h4 class="title">High Revenues</h4>
                <p>We offer the best commissions in the market and provide proven.</p>
              </div>
            </div>
          </div><!-- affiliate-item end -->
          <div class="col-lg-3 col-sm-6">
            <div class="affiliate-item text-center">
              <div class="icon">
                <div class="icon-inner">
                  <img src="{{asset('images/svg-icons/affiliate-icons/4.svg')}}" alt="icon">
                </div>
              </div>
              <div class="content">
                <h4 class="title">Reliable Payments</h4>
                <p>Payments are made monthly via a variety of payment methods.</p>
              </div>
            </div>
          </div><!-- affiliate-item end -->
          <div class="col-lg-3 col-sm-6">
            <div class="affiliate-item text-center">
              <div class="icon">
                <div class="icon-inner">
                  <img src="{{asset('images/svg-icons/affiliate-icons/2.svg')}}" alt="icon">
                </div>
              </div>
              <div class="content">
                <h4 class="title">Unlimited Affiliates</h4>
                <p>Thee is no limit for your number of affiliates and no earning limit.</p>
              </div>
            </div>
          </div><!-- affiliate-item end -->
          <div class="col-lg-3 col-sm-6">
            <div class="affiliate-item text-center">
              <div class="icon">
                <div class="icon-inner">
                  <img src="{{asset('images/svg-icons/affiliate-icons/3.svg')}}" alt="icon">
                </div>
              </div>
              <div class="content">
                <h4 class="title">Dedicated Support</h4>
                <p>Our dedicated technical support team works with you to understand and identify</p>
              </div>
            </div>
          </div><!-- affiliate-item end -->
        </div>
      </div>
    </section>
    <!-- affiliate-section end -->

    <!-- payment-method-section start -->
    <section class="payment-method-section section-padding border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title">Payment Method</h2>
              <p>Buy international lottery tickets online using any of the payment methods available on Sorteo Play now
                and win big!</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="payment-method-area d-flex">
              <div class="payment-item">
                <a href="#0"><img src="{{asset('images/payment-methods/1.jpg')}}" alt="payment-method-image"></a>
              </div><!-- payment-item end -->
              <div class="payment-item">
                <a href="#0"><img src="{{asset('images/payment-methods/2.jpg')}}" alt="payment-method-image"></a>
              </div><!-- payment-item end -->
              <div class="payment-item">
                <a href="#0"><img src="{{asset('images/payment-methods/3.jpg')}}" alt="payment-method-image"></a>
              </div><!-- payment-item end -->
              <div class="payment-item">
                <a href="#0"><img src="{{asset('images/payment-methods/4.jpg')}}" alt="payment-method-image"></a>
              </div><!-- payment-item end -->
              <div class="payment-item">
                <a href="#0"><img src="{{asset('images/payment-methods/5.jpg')}}" alt="payment-method-image"></a>
              </div><!-- payment-item end -->
              <div class="payment-item">
                <a href="#0"><img src="{{asset('images/payment-methods/6.jpg')}}" alt="payment-method-image"></a>
              </div><!-- payment-item end -->
            </div>
          </div>
          <div class="col-lg-12">
            <div class="commission-area d-flex align-items-center">
              <div class="title-area">
                <h3 class="title">Referral commission</h3>
              </div>
              <div class="commission-items-wrapper d-flex align-items-center">
                <div class="commission-items d-flex align-items-center">
                  <div class="icon">
                    <img src="{{asset('images/payment-methods/cm1.png')}}" alt="image">
                  </div>
                  <div class="content">
                    <span class="percentage">10%</span>
                    <p>1st Level</p>
                  </div>
                </div><!-- commission-items end -->
                <div class="commission-items d-flex align-items-center">
                  <div class="icon">
                    <img src="{{asset('images/payment-methods/cm2.png')}}" alt="image">
                  </div>
                  <div class="content">
                    <span class="percentage">05%</span>
                    <p>2nd Level</p>
                  </div>
                </div><!-- commission-items end -->
                <div class="commission-items d-flex align-items-center">
                  <div class="icon">
                    <img src="{{asset('images/payment-methods/cm3.png')}}" alt="image">
                  </div>
                  <div class="content">
                    <span class="percentage">03%</span>
                    <p>3rd Level</p>
                  </div>
                </div><!-- commission-items end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- payment-method-section end -->

    <!-- active-user-section start -->
    <section class="active-user-section section-padding section-bg border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Our Users Around The World</h2>
              <p>Over the years we have provided millions of players with tickets to lotteries across the globe and
                enjoyed having more than one million winners</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div id="vmap">
              <div class="position-1">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-2">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-3">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-4">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-5">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-6">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-7">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
              <div class="position-8">
                <span class="dot"></span>
                <div class="details">
                  <h6 class="name">Gaylen Hylen</h6>
                  <p class="area">From: Argentina</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="active-item text-center">
              <span class="amount">3 M</span>
              <p>Registered players</p>
            </div>
          </div><!-- active-item end -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="active-item text-center">
              <span class="amount">??? 1.9 BN</span>
              <p>Total in placed bets</p>
            </div>
          </div><!-- active-item end -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="active-item text-center">
              <span class="amount">??? 550 M</span>
              <p>Total in payouts</p>
            </div>
          </div><!-- active-item end -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="active-item text-center">
              <span class="amount">??? 44 M</span>
              <p>Biggest ever pay-out</p>
            </div>
          </div><!-- active-item end -->
          <div class="col-lg-12 text-center">
            <a href="#0" class="cmn-btn">join with us</a>
          </div>
        </div>
      </div>
    </section>
    <!-- active-user-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section section-padding border-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="testimonial-content">
              <h5 class="sub-title">hat they think about us</h5>
              <h2 class="title">Testimonials</h2>
              <div class="total-ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span class="ratings-count-num">3.4M Reviews</span>
              </div>
              <p>With over 12 years of experience as the world???s leading online lottery service provider, Sorteo has
                catered to over a million users. Find out what our members have to say about us! </p>
              <div class="testimonial-slider-arrows d-flex">
                <div class="button-next"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="button-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="testimonial-slider swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="{{asset('images/testimonial/1.png')}}" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Albert G.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have
                        been credited to my account. Thanks to the entire team at Sorteo!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="{{asset('images/testimonial/2.png')}}" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Edward L.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have
                        been credited to my account. Thanks to the entire team at Sorteo!"</p>
                    </div>
                  </div>
                </div>
                <!--swiper-slide end -->
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="{{asset('images/testimonial/1.png')}}" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Albert G.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have
                        been credited to my account. Thanks to the entire team at Sorteo!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="{{asset('images/testimonial/2.png')}}" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Edward L.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have
                        been credited to my account. Thanks to the entire team at Sorteo!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="{{asset('images/testimonial/1.png')}}" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Albert G.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Sorteo for several years and really appreciate the site. All of my wins have
                        been credited to my account. Thanks to the entire team at Sorteo!"</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial-section end -->

    <!-- team-section start -->
    <section class="team-section section-padding section-bg border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Our Management Team</h2>
              <p>Our team of creative programmers, marketing experts, and members of the global lottery community have
                worked together to build the ultimate lottery site, and every win and happy customer reminds us how
                lucky we are to be doing what we love.</p>
            </div>
          </div>
        </div>
        <div class="row m-bottom-not-30">
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="{{asset('images/team/1.png')}}" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Philip Brower</h3>
                <span class="designation">Co-Founder & CEO</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="{{asset('images/team/2.png')}}" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Penny Tool</h3>
                <span class="designation">IT Specialist</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="{{asset('images/team/3.png')}}" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Conrad Berry</h3>
                <span class="designation">Consultant</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="{{asset('images/team/4.png')}}" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Alexis Brady</h3>
                <span class="designation">Financial Adviser</span>
              </div>
            </div>
          </div><!-- team-single end -->
        </div>
      </div>
    </section>
    <!-- team-section end -->

    <!-- contact-section start -->
    <section class="contact-section border-top overflow-hidden has_bg_image"
      data-background="{{asset('images/bg-three.jpg')}}">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h5 class="top-title">We answer all of your questions</h5>
              <h2 class="section-title text-uppercase">Contact us</h2>
              <p>If you have any questions or queries our helpful support team will be more than happy to assist.</p>
            </div>
            <div class="contact-form-area">
              <form class="contact-form">
                <div class="form-grp">
                  <input type="text" name="contact_name" id="contact_name" placeholder="Full Name">
                </div>
                <div class="form-grp">
                  <input type="email" name="contact_email" id="contact_email" placeholder="Email Address">
                </div>
                <div class="form-grp">
                  <input type="tel" name="contact_phone" id="contact_phone" placeholder="Phone No">
                </div>
                <div class="form-grp">
                  <textarea name="contact_message" id="contact_message" placeholder="Message"></textarea>
                </div>
                <div class="form-grp">
                  <input class="submit-btn" type="submit" value="sent message">
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="contact-thumb">
              <img src="{{asset('images/elements/contact.png')}}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact-section end -->

    <!-- brand-section start -->
    <div class="brand-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="brand-slider">
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/1.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/2.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/3.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/4.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/5.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/3.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/4.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="{{asset('images/brand/5.png')}}" alt="image">
                </div>
              </div><!-- single-slide end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- brand-section end -->
    @endsection