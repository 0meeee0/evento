<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>EVENTO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

     @include('layouts.head')

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
        <h1 class="mb-4 pb-0">
          The Best<br /><span>Events</span> Conference
        </h1>
        <p class="mb-4 pb-0">
          Create, Reserve and Enjoy
        </p>
        
        <a href="#speakers" class="about-btn scrollto">View Events</a>
      </div>
    </section>

    <main id="main">
  

      <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Available Events</h2>
                <p>Discover And Reserve What's Best For You</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/event.webp') }}" alt="Event 1" class="img-fluid" />
                        <div class="details">
                            <h3><a href="#" class="event-name" data-toggle="modal" data-target="#eventModal">Event Title</a></h3>
                            <p>Description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Event Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <h2>Brenden Legros</h2> -->
                    <div class="col-md-12">
                        <img src="{{ asset('assets/img/event.webp') }}" alt="Speaker 1" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-12">
                        <div class="details">
                            <p>Voluptatem perferendis sed assumenda voluptatibus. Laudantium molestiae sint. Doloremque odio dolore dolore sit. 
                            Quae labore alias ea omnis ex expedita sapiente molestias atque. Optio voluptas et.</p>
                            <p>Held at <b>18/03/2024</b></p>
                        </div>
                    </div>
                    <a href="{{ route('ticket') }}" class="btn btn-outline-danger mx-auto">Get Ticket</a>
                </div>
            </div>
        </div>
    </div>



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
