<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>EVENTO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Include your CSS and JS files here -->
    @include('layouts.head')
</head>
<body>
    <!-- Include your navigation bar -->
    @include('layouts.nav')

    <!-- Intro Section -->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">
                View your Upcoming<br /><span>Events</span> Here
            </h1>
            <p class="mb-4 pb-0">
                Stay Hydrated
            </p>
            <a href="#speakers" class="about-btn scrollto">View Events Booked</a>
        </div>
    </section>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Main Section -->
    <main id="main">
    <!-- Speakers Section -->
    <section id="speakers" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Your Events</h2>
                <p>Discover And Reserve What's Best For You</p>
            </div>
            <div class="row">
                @foreach ($reservations as $r)
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="{{ asset('assets/img/upcoming.jpg') }}" alt="{{ $r->event->title }}" class="img-fluid" />
                        <div class="details">
                            <h3><a href="#" class="event-name" data-toggle="modal" data-target="#eventModal{{ $r->event->id }}">{{ $r->event->title }}</a></h3>
                            <p>{{ $r->event->description }}</p>
                            <p>{{ $r->event->category->name }}</p>
                            <p>{{ $r->event->user->name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    @foreach($reservations as $r)
    <div class="modal fade" id="eventModal{{ $r->event->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $r->event->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <img src="{{ asset('assets/img/upcoming.jpg') }}" alt="Event Image" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-12">
                        <div class="details">
                            <b>Client:</b><p>{{ $r->user->name }}</p>
                            <b>Description:</b><p>{{ $r->event->description }}</p>
                            <p>From: <b>{{ $r->event->start_date }}</b> <br> To:  <b>{{ $r->event->end_date }}</b></p>
                            <p>Event will be held at:<b>{{ $r->event->location }}</b></p>
                            <p>Places left :<b>{{ $r->event->number_places }}</b></p>
                            <p>Validation :<b>{{ $r->event->status }}</b></p>
                        </div>
                    </div>
                    <form action="{{ route('manuelAccept', $r)}}" method="POST">
                                @csrf

                                <button class="btn btn-success" >Accept</button>
                            </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</main>


        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>EVENTO</strong>. All Rights Reserved
                </div>
            </div>
        </footer>

        <!-- Back to Top Button -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include your JS files here -->
        @include('layouts.scripts')
    </main>
</body>
</html>
