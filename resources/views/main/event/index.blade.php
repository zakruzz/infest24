@extends('layouts.main.app')
@section('style')
@endsection
@section('content')
<section class="page-title">
    <div class="swiper-container slider-main">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-st2">
            <img class="icon icon_1" src="./assets/images/common/icon1_slider_2.png" alt="" />
            <img class="icon icon_2" src="./assets/images/common/icon2_slider_2.png" alt="" />
            <img class="icon icon_3" src="./assets/images/common/icon3_slider_2.png" alt="" />
            <div class="overlay">
              <img src="./assets/images//backgroup/bg-slider2.png" alt="" />
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-slider">
                    <div class="content-box">
                      <h1 class="title">Become an early investor in the top Blockchain Games, NFTs and Metaverses</h1>
                      <p class="sub-title">
                        Risebot is the leading blockchain gaming launchpad with over 50 projects launched and the <br class="show-destop" />
                        highest average ROI in the industry
                      </p>
                      <div class="wrap-btn">
                        <a href="faq.html" class="tf-button style2"> HOW TO START </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-st2">
            <div class="overlay">
              <img src="./assets/images//backgroup/bg-slider2.png" alt="" />
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-slider">
                    <div class="content-box">
                      <h1 class="title">Become an early investor in the top Blockchain Games, NFTs and Metaverses</h1>
                      <p class="sub-title">Risebot is the leading blockchain gaming launchpad with over 50 projects launched and the highest average ROI in the industry</p>
                      <div class="wrap-btn">
                        <a href="#" class="tf-button style2"> HOW TO START </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-next-main"><i class="far fa-angle-right"></i></div>
      <div class="btn-prev-main"><i class="far fa-angle-left"></i></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <section class="tf-section fueture">
    <div class="container w_1320">
      <div class="row">
        <div class="col-md-12">
          <div class="container_inner">
            <div class="swiper-container slider-10" data-aos="fade-in" data-aos-duration="1000">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="icon-box">
                    <div class="top">
                      <div class="icon">
                        <img src="./assets/images/common/icon_1.png" alt="" />
                      </div>
                      <div class="content">
                        <h5><a href="project-list.html">Potential Project</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nunc non ligula suscipit tincidunt at sit amet nunc.</p>
                      </div>
                    </div>
                    <div class="bottom">
                      <img src="./assets/images/backgroup/bg_bt_box_1.png" alt="" />
                    </div>
                    <div class="number">1</div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="icon-box">
                    <div class="top">
                      <div class="icon">
                        <img src="./assets/images/common/icon_2.png" alt="" />
                      </div>
                      <div class="content">
                        <h5><a href="project-list.html">High Feasibility</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nunc non ligula suscipit tincidunt at sit amet nunc.</p>
                      </div>
                    </div>
                    <div class="bottom">
                      <img src="./assets/images/backgroup/bg_bt_box_1.png" alt="" />
                    </div>
                    <div class="number">2</div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="icon-box">
                    <div class="top">
                      <div class="icon">
                        <img src="./assets/images/common/icon_3.png" alt="" />
                      </div>
                      <div class="content">
                        <h5><a href="project-list.html">Easy Withdrawal</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nunc non ligula suscipit tincidunt at sit amet nunc.</p>
                      </div>
                    </div>
                    <div class="bottom">
                      <img src="./assets/images/backgroup/bg_bt_box_1.png" alt="" />
                    </div>
                    <div class="number">3</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="next_slider-10 next_slider">
              <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 8H16.5M16.5 8L9.75 1.25M16.5 8L9.75 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="prev_slider-10 prev_slider">
              <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.5 8H1.5M1.5 8L8.25 1.25M1.5 8L8.25 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="col-md-12 mt30">
              <p class="desc text-center mb20">
                At Risebot, we bring projects with great potential that bring huge profits <br class="show-destop" />
                auctor euismod magna etiam diam velit, ultrices vel feugiat a, varius quis felis. Integer tempor efficitur mollis
              </p>
              <div class="wrap-btn justify-content-center">
                <a href="submit-IGO-on-chain.html" class="tf-button style1"> JOIN US </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="bg_body">
    {{-- <div class="bg_h2">
      <img src="{{ asset('assets/images/backgroup/bg_home2.png') }}" alt="" />
    </div> --}}


    <section class="tf-section technology">
      <div class="container w_1490">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="tf-title" data-aos="fade-right" data-aos-duration="800">
              <div class="img_technology">
                <img src="./assets/images/common/img_technology1.png" alt="" />
                <img class="coin coin_1" src="./assets/images/common/coin1.png" alt="" />
                <img class="coin coin_2" src="./assets/images/common/coin2.png" alt="" />
                <img class="coin coin_3" src="./assets/images/common/coin3.png" alt="" />
                <img class="coin coin_4" src="./assets/images/common/coin4.png" alt="" />
                <img class="coin coin_5" src="./assets/images/common/coin5.png" alt="" />
                <img class="coin coin_6" src="./assets/images/common/coin6.png" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="content_technology" data-aos="fade-up" data-aos-duration="800">
              <div class="tf-title left">
                <h2 class="title mb20">Our technology supports multiple platforms</h2>
              </div>
              <p class="sub_technology">
                Cras molestie ullamcorper augue nec pulvinar. Ut suscipit tempor justo, sed aliquet eros ultricies eu. Nam mollis sapien ut sapien gravida sollicitudin. Mauris vel nisl quis dolor accumsan luctus.
              </p>
              <div class="swiper-container slider-6">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_1.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_2.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_3.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_4.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_5.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_6.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_4.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_5.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_6.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_1.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_2.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./assets/images/common/logo_tech_3.png" alt="" />
                  </div>
                </div>
                <div class="swiper-pagination pagination_slider-6"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="tf-section roadmap">
      <div class="container w_1850">
        <div class="row">
          <div class="col-md-12">
            <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
              <h2 class="title">Roadmap</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="container_inner roadmap_boder">
              <div class="roadmap-wrapper" data-aos="fade-in" data-aos-duration="1000">
                <div class="swiper-container slider-7">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="roadmap-box active">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box active">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box active">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box active">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="roadmap-box">
                        <div class="icon">
                          <img src="./assets/images/common/icon_roadmap.svg" alt="" />
                        </div>
                        <div class="content">
                          <h6 class="date">April 16, 2022</h6>
                          <ul>
                            <li>Cras molestie ullamcorper augue nec pulvinar</li>
                            <li>Nam mollis sapien ut sapien gravida sollicitudin</li>
                            <li>Mauris vel nisl quis dolor accumsan luctus</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="next_slider-7 next_slider">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.5 8H16.5M16.5 8L9.75 1.25M16.5 8L9.75 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="prev_slider-7 prev_slider">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.5 8H1.5M1.5 8L8.25 1.25M1.5 8L8.25 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="tf-section tf_team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="tf-title mb40" data-aos="fade-up" data-aos-duration="800">
              <h2 class="title">Meet the team</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="team-box-wrapper">
              <div class="team-box" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_1.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Darrell Steward</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_2.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Kristin Watson</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_3.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Jacob Jones</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-box" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_4.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Jane Cooper</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="team-box" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_5.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Jenny Wilson</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_6.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Dianne Russell</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_7.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Devon Lane</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-box" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                <img class="shape" src="./assets/images/common/shape_3.png" alt="" />
                <img class="shape_ecfect" src="./assets/images/common/shape_4.svg" alt="" />
                <div class="image">
                  <img src="./assets/images/common/team_8.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="name"><a href="team-details.html">Robert Fox</a></h5>
                  <p class="position">Senior Designer</p>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.20381 22V11.9655H11.5706L12.0757 8.05372H8.20381V5.55662C8.20381 4.42442 8.51692 3.65284 10.1423 3.65284L12.212 3.65199V0.153153C11.8541 0.10664 10.6255 0 9.19548 0C6.20942 0 4.16511 1.82266 4.16511 5.1692V8.05372H0.788086V11.9655H4.16511V22H8.20381Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M22.5 2.17863C21.6819 2.5375 20.8101 2.77537 19.9012 2.89087C20.8363 2.33262 21.5499 1.45537 21.8854 0.398C21.0136 0.91775 20.0511 1.28488 19.0254 1.48975C18.1976 0.608375 17.0179 0.0625 15.7309 0.0625C13.2339 0.0625 11.2236 2.08925 11.2236 4.57388C11.2236 4.93138 11.2539 5.27512 11.3281 5.60237C7.5785 5.4195 4.26063 3.62238 2.03175 0.88475C1.64262 1.55988 1.41438 2.33262 1.41438 3.1645C1.41438 4.7265 2.21875 6.11112 3.41775 6.91275C2.69313 6.899 1.98225 6.68862 1.38 6.35725C1.38 6.371 1.38 6.38888 1.38 6.40675C1.38 8.5985 2.94337 10.419 4.9935 10.8384C4.62637 10.9388 4.22625 10.9869 3.811 10.9869C3.52225 10.9869 3.23075 10.9704 2.95712 10.9099C3.5415 12.696 5.19975 14.0091 7.1715 14.0518C5.637 15.2521 3.68863 15.9754 1.57938 15.9754C1.2095 15.9754 0.85475 15.9589 0.5 15.9135C2.49787 17.2019 4.86562 17.9375 7.419 17.9375C15.7185 17.9375 20.256 11.0625 20.256 5.10325C20.256 4.90387 20.2491 4.71138 20.2395 4.52025C21.1346 3.885 21.8867 3.09162 22.5 2.17863Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.3003 17.8V11.354C18.3003 8.18599 17.6183 5.76599 13.9223 5.76599C12.1403 5.76599 10.9523 6.73399 10.4683 7.65799H10.4243V6.05199H6.92627V17.8H10.5783V11.97C10.5783 10.43 10.8643 8.95599 12.7563 8.95599C14.6263 8.95599 14.6483 10.694 14.6483 12.058V17.778H18.3003V17.8Z"
                            fill="#798DA3"
                          />
                          <path d="M0.986328 6.052H4.63833V17.8H0.986328V6.052Z" fill="#798DA3" />
                          <path
                            d="M2.8122 0.200012C1.6462 0.200012 0.700195 1.14601 0.700195 2.31201C0.700195 3.47801 1.6462 4.44601 2.8122 4.44601C3.9782 4.44601 4.9242 3.47801 4.9242 2.31201C4.9242 1.14601 3.9782 0.200012 2.8122 0.200012Z"
                            fill="#798DA3"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="tf-section FAQs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
            <h2 class="title">frequently asked questions</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="flat-accordion aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
            <div class="flat-toggle">
              <div class="h7 toggle-title">
                <span class="icon-Icon"> </span>
                <span>What is the metaverse?</span>
              </div>
              <p class="toggle-content" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus eleifend egestas. Duis eget dictum purus. Fusce est mi, imperdiet porta neque malesuada, blandit scelerisque lectus. Maecenas vel lobortis risus.
                Donec ornare urna quis libero euismod, ac fermentum diam blandit. Nunc dapibus tempor lacus, vel lacinia enim efficitur eu
              </p>
            </div>
            <div class="flat-toggle active">
              <div class="h7 toggle-title active">
                <span class="icon-Icon"> </span>
                <span>How to access the metaverse?</span>
              </div>
              <p class="toggle-content" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus eleifend egestas. Duis eget dictum purus. Fusce est mi, imperdiet porta neque malesuada, blandit scelerisque lectus. Maecenas vel lobortis risus.
                Donec ornare urna quis libero euismod, ac fermentum diam blandit. Nunc dapibus tempor lacus, vel lacinia enim efficitur eu
              </p>
            </div>
            <div class="flat-toggle">
              <div class="h7 toggle-title">
                <span class="icon-Icon"> </span>
                <span>How do you make purchases in the metaverse?</span>
              </div>
              <p class="toggle-content" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus eleifend egestas. Duis eget dictum purus. Fusce est mi, imperdiet porta neque malesuada, blandit scelerisque lectus. Maecenas vel lobortis risus.
                Donec ornare urna quis libero euismod, ac fermentum diam blandit. Nunc dapibus tempor lacus, vel lacinia enim efficitur eu
              </p>
            </div>
            <div class="flat-toggle">
              <div class="h7 toggle-title">
                <span class="icon-Icon"> </span>
                <span>Is the metaverse fun?</span>
              </div>
              <p class="toggle-content" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus eleifend egestas. Duis eget dictum purus. Fusce est mi, imperdiet porta neque malesuada, blandit scelerisque lectus. Maecenas vel lobortis risus.
                Donec ornare urna quis libero euismod, ac fermentum diam blandit. Nunc dapibus tempor lacus, vel lacinia enim efficitur eu
              </p>
            </div>
            <div class="flat-toggle">
              <div class="h7 toggle-title">
                <span class="icon-Icon"> </span>
                <span>How do I find things to actually do in the metaverse?</span>
              </div>
              <p class="toggle-content" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus eleifend egestas. Duis eget dictum purus. Fusce est mi, imperdiet porta neque malesuada, blandit scelerisque lectus. Maecenas vel lobortis risus.
                Donec ornare urna quis libero euismod, ac fermentum diam blandit. Nunc dapibus tempor lacus, vel lacinia enim efficitur eu
              </p>
            </div>
            <div class="flat-toggle">
              <div class="h7 toggle-title">
                <span class="icon-Icon"> </span>
                <span>What is ownership in the metaverse?</span>
              </div>
              <p class="toggle-content" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus eleifend egestas. Duis eget dictum purus. Fusce est mi, imperdiet porta neque malesuada, blandit scelerisque lectus. Maecenas vel lobortis risus.
                Donec ornare urna quis libero euismod, ac fermentum diam blandit. Nunc dapibus tempor lacus, vel lacinia enim efficitur eu
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="content_faq text-center">
            <p>If you don`t find an answer, contact with our experts</p>
            <div class="wrap-btn">
              <a href="contact.html" class="tf-button style1"> get in touch </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tf-section tf_CTA">
    <div class="container relative">
      <div class="overlay"></div>
      <div class="row">
        <div class="col-md-6">
          <div class="tf-title left mt58" data-aos="fade-up" data-aos-duration="800">
            <h2 class="title">Launch on Risebot</h2>
            <p class="sub">Full support in project incubation</p>
            <div class="wrap-btn">
              <a href="submit-IGO-on-chain.html" class="tf-button style3"> Apply Now </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image_cta" data-aos="fade-left" data-aos-duration="1200">
            <img class="move4" src="./assets/images/common/img_cta.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <a id="scroll-top"></a>
@endsection