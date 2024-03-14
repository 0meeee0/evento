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
                The Best<br /><span>Events</span> Conference
            </h1>
            <p class="mb-4 pb-0">
                Create, Reserve and Enjoy
            </p>
            <a href="#speakers" class="about-btn scrollto">View Events</a>
            <form action="searchTitle" method="get">
                <input type="text" name="search">
                <button type="submit">go</button>
            </form>
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
                    <h2>Available Events</h2>
                    <p>Discover And Reserve What's Best For You</p>
                </div>

                <div class="row">
                    @foreach($events as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="{{ asset('assets/img/event.webp') }}" alt="{{ $event->title }}" class="img-fluid" />
                            <div class="details">
                                <h3><a href="#" class="event-name" data-toggle="modal" data-target="#eventModal{{ $event->id }}">{{ $event->title }}</a></h3>
                                <p>{{ $event->description }}</p>
                                <p>{{ $event->category->name }}</p>
                                <p>{{ $event->user->name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Modal -->
        @foreach($events as $event)
        <div class="modal fade" id="eventModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $event->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <img src="{{ asset('assets/img/event.webp') }}" alt="Event Image" class="img-fluid mb-4">
                        </div>
                        <div class="col-md-12">
                            <div class="details">
                                <b>Description:</b><p>{{ $event->description }}</p>
                                <p>From: <b>{{ $event->start_date }}</b> <br> To:  <b>{{ $event->end_date }}</b></p>
                                <p>Event will be held at:<b>{{ $event->location }}</b></p>
                                <p>Places left :<b>{{ $event->number_places }}</b></p>
                                <p>Validation :<b>{{ $event->status }}</b></p>
                            </div>
                        </div>
                        {{-- <a href="{{ route('ticket') }}" class="btn btn-outline-danger mx-auto">Get Ticket</a> --}}
                        @role('user')
                        @if($event->number_places > 0)

                            <form action="{{ route('event.reserve', ['event' => $event->id]) }}" method="POST">
                                @csrf
    
                                <button type="submit" class="btn btn-outline-danger mx-auto">Reserve Ticket</button>
                            </form>
                        @else
                            <button type="" class="btn btn-secondary mx-auto" disabled>No Tickets Left</button>
                        @endif
                        @endrole
                    </div>
                </div>
            </div>
        </div>
        @endforeach

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
