@extends('master')
@section('content')
  <div class="content-wrapper">
    <div class="nav">
      <div class="nav-left">
        <a href="#">products</a>
        <div class="nav-showing">
          <div class="image">
            <img src="../resources/assets/img/cropped.png" alt="">
          </div>
          <div class="list">
            <ul>
              <li>category
                <ul>
                  <li>hijab</li>
                  <li>scarf</li>
                  <li>dress</li>
                </ul>
              </li>
              <li>sort by
                <ul>
                  <li>hijab</li>
                  <li>scarf</li>
                  <li>dress</li>
                </ul>
              </li>
              <li>SALE !</li>
            </ul>
          </div>
        </div>
        <a href="#">lookbook</a>
      </div>
      <a class="nav-center" href="#">maimana</a>
      <div class="nav-right">
        <a href="#">about</a>
        <a href="#">contact</a>
      </div>
    </div>
    <div class="hero">
      <div class="hero-inside">
        <h1 class="slogan">Comfort, Beauty and Soul</h1>
        <p class="kicker">find the latest collection by click the button below</p>
        <a href="#">see collection</a>
      </div>
    </div>
    <div class="section-1" >
      <div class="section-1-img">
        <img src="../resources/assets/img/cropped.png" alt="">
      </div>
      <div class="section-1-txt">
        <h1>Simplicity</h1>
        <p>Just like coco chanel said, we believe that "simplicity is the keynote of all true elegance".
        </p>
        <a href="">shop the look</a>
      </div>
      <div class="section-1-tiles">
        <div class="tiles-1">
          <img src="../resources/assets/img/hijab1.png" alt="">
          <span>$00</span>
        </div>
        <div class="tiles-2">
          <img src="../resources/assets/img/hijab3.png" alt="">
          <span>$00</span>
        </div>
        <div class="tiles-3">
          <img src="../resources/assets/img/hijab2.png" alt="">
          <span>$00</span>
        </div>
      </div>
    </div>
    <div class="section-3">
    </div>
  </div>
</div>


@endsection
