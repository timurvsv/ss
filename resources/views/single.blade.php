
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
										<h2 class="entry-title">{{ $product->name }}</h2>
										<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="{{ $product->image }}">
									</div>
									<div class="entry-content">
										<div class="excerpt"><p></p>{{ $product->description }}</div>
										</div>
								</div>
							</article>
							<div class="zerogrid">
								<div class="comments-are">
									<div id="comment">
										<h3>Leave a Reply</h3>
										<span>Your email address will not be published. Required fields are marked </span>
										<form name="comment_form" id="comment_form" method="post" action="{{route('comment', $product->id)}}">
                                            @csrf
											<label>
											<span>Comment:</span>
											<textarea name="coment" id="coment"></textarea>
											</label>
											<label>
											<span>Name:</span>
											<input type="text"  name="name" id="name" required>
											</label>
											<label>
											<span>Email:</span>
											<input type="email"  name="email" id="email" required>
											</label>
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

