<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>EVENTO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

     @include('layouts.head')
    <style>
        body {
  background: #dd3f3e;
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
}
.ticket {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 700px;
  margin: 20px auto;
}
.ticket .stub,
.ticket .check {
  box-sizing: border-box;
}
.stub {
  background: #ef5658;
  height: 250px;
  width: 250px;
  color: white;
  padding: 20px;
  position: relative;
}
.stub:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  border-top: 20px solid #dd3f3e;
  border-left: 20px solid #ef5658;
  width: 0;
}
.stub:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  border-bottom: 20px solid #dd3f3e;
  border-left: 20px solid #ef5658;
  width: 0;
}
.stub .top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 40px;
  text-transform: uppercase;
}
.stub .top .line {
  display: block;
  background: #fff;
  height: 40px;
  width: 3px;
  margin: 0 20px;
}
.stub .top .num {
  font-size: 10px;
}
.stub .top .num span {
  color: #000;
}
.stub .number {
  position: absolute;
  left: 40px;
  font-size: 150px;
}
.stub .invite {
  position: absolute;
  left: 150px;
  bottom: 45px;
  color: #000;
  width: 20%;
}
.stub .invite:before {
  content: '';
  background: #fff;
  display: block;
  width: 40px;
  height: 3px;
  margin-bottom: 5px;
}
.check {
  background: lightcoral;
  height: 250px;
  width: 450px;
  padding: 40px;
  position: relative;
}
.check:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  border-top: 20px solid #dd3f3e;
  border-right: 20px solid #fff;
  width: 0;
}
.check:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  border-bottom: 20px solid #dd3f3e;
  border-right: 20px solid #fff;
  width: 0;
}
.check .big {
  font-size: 80px;
  font-weight: 900;
  line-height: .8em;
}
.check .number {
  position: absolute;
  top: 50px;
  right: 50px;
  color: #ef5658;
  font-size: 40px;
}
.check .info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  font-size: 12px;
  margin-top: 20px;
  width: 100%;
}
.check .info section {
  margin-right: 50px;
}
.check .info section:before {
  content: '';
  background: #ef5658;
  display: block;
  width: 40px;
  height: 3px;
  margin-bottom: 5px;
}
.check .info section .title {
  font-size: 10px;
  text-transform: uppercase;
}

    </style>
  </head>

  <body>
    <!--==========================
    Header
  ============================-->
         @include('layouts.nav')
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
      <div class="intro-container wow fadeIn">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- CSS Ticket inspired by -->
<!-- https://dribbble.com/shots/2677752-Dribbble-invite-competition -->

<div class="ticket">
  <div class="stub">
    <div class="top">
      <span class="admit">EVENTO</span>
      <span class="line"></span>
      <span class="num">
        Invitation
        <span>31415926</span>
      </span>
    </div>
    <div class="number">1</div>
    <div class="invite">
      Invite for you
    </div>
  </div>
  <div class="check">
    <div class="big">
      You're <br> Invited
    </div>
    <div class="number">#1</div>
    <div class="info">
      <section>
        <div class="title">Date</div>
        <div>4/27/2016</div>
      </section>
      <section>
        <div class="title">Issued By</div>
        <div>Ampersand</div>
      </section>
      <section>
        <div class="title">Invite Number</div>
        <div>31415926</div>
      </section>
    </div>
  </div>
</div>
      </div>
    </section>

    <main id="main">
  

    



    <!--=========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>EVENTO</strong>. All Rights Reserved
        </div>
        </div>
    </footer>

   

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

     @include('layouts.scripts')
     
  </body>
</html>
