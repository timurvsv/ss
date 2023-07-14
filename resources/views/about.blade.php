
@extends('layout')
@section('content')
    <!--////////////////////////////////////Container-->
        <section id="container">
            <div class="wrap-container">
                <!-----------------Content-Box-------------------->
                <div id="main-content">
                    <div class="wrap-content">
                        <div class="row">
                            <article class="single-post zerogrid">
                                <div class="row wrap-post"><!--Start Box-->
                                    <div class="entry-header">
                                        <span class="time">June 26, 2013  by admin</span>
                                        <h2 class="entry-title"><a href="#">RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND PATHOLOGY</a></h2>
                                        <span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
                                    </div>
                                    <div class="post-thumbnail-wrap">
                                        <img src="images/slide2.jpg">
                                    </div>
                                    <div class="entry-content">
                                        <div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                        <blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
                                        <h2>Heading 1</h2>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
                                        <h2>Heading 2</h2>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo.</p>
                                        <h2>Heading 3</h2>
                                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                        <p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        <div class="note">
                                            <ol>
                                                <li>Lorem ipsum</li>
                                                <li>Sit amet vultatup nonumy</li>
                                                <li>Duista sed diam</li>
                                            </ol>
                                            <div class="clear"></div>
                                        </div>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
                                    </div>
                                </div>
                            </article>

                            <div class="zerogrid">
                                <div class="comments-are">
                                    <div id="comment">
{{--                                        @foreach( $kuts as $kut)--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-header">--}}
{{--                                                    Quote--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <blockquote class="blockquote mb-0">--}}
{{--                                                        <h2 class="card-title">{{$kut->name}}</h2>--}}
{{--                                                        <h5 class="card-title">{{$kut->email}}</h5>--}}
{{--                                                        <p class="card-title">{{$kut->text}}</p>--}}
{{--                                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
{{--                                                    </blockquote>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
                                        <h3>Leave a Reply</h3>
                                        <span>Your email address will not be published. Required fields are marked </span>
                                        <form name="comment_form" id="comment_form" method="post" action="{{route('kut-store')}}">
                                            <input type="hidden" name="kut_id" value="{{  $kut->id }}">
                                            <label>
                                                <span>Comment:</span>
                                                <div id="contact_form">
                                                    <textarea name="text" id="text"></textarea>
                                            </label>
                                            <label>
                                                <span>Name:</span>
                                                <input type="text"  name="name" id="name" required>
                                            </label>
                                            <label>
                                                <span>Email:</span>
                                                <input type="email"  name="email" id="email" required>
                                            </label>
                                            @csrf
                                            <center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
        <!--////////////////////////////////////Footer-->
