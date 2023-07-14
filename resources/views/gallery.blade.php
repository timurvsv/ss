
@extends('layout')
@section('content')
    <!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content" class="zerogrid">
					<div class="wrap-content">
						<div class="row">
                            @foreach($tanks as $tank)
							<div class="col-1-3">
								<div class="wrap-col">
									<article>
										<div class="post-thumbnail-wrap">
											<a href="single.html" class="portfolio-box">
												<img src="{{$tank->image}}" alt="">
											</a>
										</div>
										<div class="entry-header ">
											<h3 class="entry-title">{{$tank->name}}</h3>
											<div class="l-tags"><a href="#">КЫРГЫЗСТAН</a> $ <a href="#">{{$tank->description}}</a></div>
										</div>
									</article>
								</div>
							</div>
                            @endforeach
                        </div>
					</div>
                    @csrf
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
        @endsection

