@extends('frontend.layout.hf')



@section('content')

    @isset($event)
      <div class="container row fa-border p-0 m-0" style="    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1) !important;padding: 0 10px;">
        <div class="col-md-8 text-center mt-3 mb-3 h2_m mx-auto">
          <div class="h_sub thm_color">
            EVENTS
          </div>
          <h2> {{ $event->title }} </h2>
        </div>
      </div>
      @endisset
      <!-- Program_in -->
      <div class="container">
        <div class="row">
            @isset($event)
          <div class="col-md-9 col-sm-12 p-0">
            <div class="news_details" style="    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1) !important;padding: 0 10px;">
              <img src="{{ asset($event->image) }}" class="img-fluid">
              <p></p>
              <p class="p-3">{!! $event->news !!}</p>
              <p></p>
            </div>
          </div>
          @endisset
          <div class="col-md-3 col-sm-12 p-0">
            <div class="row">
              <div class="col-sm-6 col-md-12">
                <h2 class="sub-title-style" style="background: #012E41;
                color: #fff !important;
                position: relative;
                border-radius: 10px 0 10px 0;
                padding: 12px 15px;
                font-size: 20px;">
                  Recent Programs
                  <span>
                    <i class="fa fa-link float-right pt-1" aria-hidden="true"></i>
                  </span>
                </h2>
                <div class="content_widget" style="    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1) !important;padding: 0 10px;">

                @isset($events)
                @foreach ($events as $eventl)
                <div class="media" style="padding: 10px 0px;clear: both;border-bottom: 2px solid;">
                    <div class="media-left">
                      <a href="{{ route('eventdetail', $eventl->slug) }}" class="link">
                        <img src="{{ asset($eventl->image) }}" style="width: 70px; height: auto;">
                      </a>
                    </div>
                    <div class="media-right">
                      <a href="{{ route('eventdetail', $eventl->slug) }}"> {{ $eventl->title }} </a>
                    </div>
                  </div>
                @endforeach
                @endisset

              </div>
            </div>
          </div>
        </div>
      </div>

      @endsection

