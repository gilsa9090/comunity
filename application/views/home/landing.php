<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/landing.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,700&family=Urbanist:wght@200&display=swap" rel="stylesheet">
  <body>
    <!--Navbar Section-->
    <div class="container">
      <div class="logo">
        <h4>.Arsmagia</h3>
      </div>
      <nav>
        <ul>
          <li><a href="<?php echo base_url('auth') ?>/login">Sign In</a></li>
          <a href="<?php echo base_url('auth')?>/register"><button name="join" class="join">Join</button></a>
        </ul>
      </nav>
    </div>

    <!--Hero Section-->
    <div id="content" class="content">
        <h1>.Arsmagia Community</h1>
        <p>One Of Biggest Community for architect</p>
        <p>Would you like to join us? let get some interest things together</p>
        <p>Join now, and get some benefit from us</p>
        <a href="" class="btn">Join Now!</a>
        <h6>9842++ Active Members Now</h6>
        <img src="<?= base_url('assets') ?>/image/hero.png" alt="" class="feature" />
    </div>
    <!--Content-->
    <div class="content2">
      <h3>Arsmagia Benefical</h3>
      <p>Some benefical that you can reach in this community, hope you like to read it</p>
        <div class="row">
          <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h6 class="text-center">Connect Together</h6>
                <img src="<?= base_url('assets') ?>/image/social.jpg" width="300" height="200" alt="">
                <p>Makes your own ideas more powerfull with your new friends</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h6 class="text-center">Good Problem Solve</h6>
                <img src="<?= base_url('assets') ?>/image/sol.jpg" width="300" height="200" alt="">
                <p>Need help?, dont worry, we have a great tutors for you anytimes</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  <h6 class="text-center">Expand Your Network</h6>
                  <img src="<?= base_url('assets') ?>/image/ce.jpg" width="300" height="200" alt="">
                  <p>Expand your network for your bussiness in here.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm mt-5">
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  <h6 class="text-center">Share Project</h6>
                  <img src="<?= base_url('assets') ?>/image/share.jpg" width="300" height="200" alt="">
                  <p>Dont worry if you have no project, we share our project in here</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm mt-5">
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  <h6 class="text-center">Upgrade Skill</h6>
                  <img src="<?= base_url('assets') ?>/image/goal.jpg" width="300" height="200" alt="">
                  <p>Upgrade your skills, either is Hardskill or Softskill</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm mt-5">
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  <h6 class="text-center">Reach Goals</h6>
                  <img src="<?= base_url('assets') ?>/image/help.jpg" width="300" height="200" alt="">
                  <p>We can help you to reach your goals</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--Contact-->
    <div class="content3">
      <h4 class="text-center">Contact Us</h4>
      <div class="row no-gutters">
        <div class="col-sm-6 col-md-8">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email ">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Example select</label>
                  <input type="text" name="nama" placeholder="Name" class="form-control" id="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" class="sent" name="kirim" value="Sent Respond" id="">
              </form>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets') ?>/image/c.png" width="500" height="400" alt="">
        </div>
      </div>
    </div>
    <!--Footer-->
    <footer>
      <h6 class="text-center">Copyright .Arsmagia 2017</h6>
    </footer>
  </body>
</html>
