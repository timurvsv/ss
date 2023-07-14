
@extends('layout')
@section('content')


		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
				<section class="content-box box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Кыргызстан места рая</h2>
							</div>
							<div class="box-content">
								<p>Киргизия – гористая страна в Центральной Азии. Она расположена вдоль Великого шелкового пути – древней торговой дороги между Китаем и Средиземноморьем. В горах Тянь-Шань, которые окружают этот караванный путь и занимают большую часть страны, обитают снежные барсы, рыси и овцы. На юге страны находится город Ош, история которого насчитывает более тысячи лет. Он славится огромным базаром, где когда-то останавливались купцы, следовавшие по Великому шелковому пути.</p>
							</div>
                            <div class="box-header">
                                <h2>Красивые и загадочные место Кыргызстана</h2>
                            </div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box box-style-1 box-2">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="row">
                                @foreach($products as $product)
								<div class="col-1-2">
									<div class="wrap-col">
										<article>
											<div class="post-thumbnail-wrap">
												<a href="/product/{{$product->id}}" class="portfolio-box">
													<img src="{{$product->image}}" alt="">
												</a>
											</div>
											<div class="entry-header ">
												<h3 class="entry-title">{{$product->name}}</h3>
												<div class="l-tags"><a href="#">{{$product->description}}</a> / <a href="#">посмотри</a></div>
											</div>
										</article>
									</div>
								</div>
                                @endforeach

							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-3-------------------->
				<section class="content-box box-3">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>История Кыргызстана</h2>
							</div>
							<div class="box-content">
								<div class="row">
									<div class="col-1-2">
										<div class="wrap-col">
											<p>История Кыргызстана охватывает периоды от древних петроглифов до Великого Шелкового пути, от Советского Союза до принятия страной независимости. Кыргызстан издавна являлся исторически важным пунктом в центре Азии, поскольку находился на слиянии торговых путей и империй. Расположенная прямо между китайской, персидской, арабской, индийской, тюркской и российской империями, земля, которая сегодня формирует Кыргызстан, изменила историю многих народов, религий, культур и путешественников.

                                            </p>
										</div>
									</div>
									<div class="col-1-2">
										<div class="wrap-col">
											<p>31 августа 1991 года Республика Кыргызстан провозгласила независимость от Советского Союза. Президент с 1990 года Аскар Акаев стал президентом новой республики и оставался в должности до революции в Тюльпане в 2005 году. Политика оставалась нестабильной, пока протесты в 2010 году не привели к свержению Бакиева, который заменил Акаева. Напряженность вспыхнула в результате насилия по этническому признаку между кыргызами и узбеками в Оше, напоминая о подобных беспорядках, вспыхнувших в Оше в 1990 году. Роза Отунбаева стала временным президентом в апреле 2010 года, а также одной из немногих женщин-лидеров в стране с мусульманским большинством. Она также стала первым киргизским лидером, который мирно передал власть, после выборов в 2011 году, приведших к президентству Алмазбека Атамбаева. С тех пор в 2014 и 2016 годах Кыргызстан оставался относительно стабильным, и даже принимал два фестиваля «Всемирные игры кочевников».</p>
										</div>
									</div>
								</div>
								<div class="row">
									<blockquote><p>Исторические места</p></blockquote>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="content-box box-style-1 box-4">
					<div class="zerogrid" style="width: 100%">
						<div class="wrap-box"><!--Start Box-->
							<div class="row">
								<article>
									<div class="col-1-2">
										<img src="images/slide1.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>The title on the article</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
											<a class="button" href="single.html">Read More</a>
										</div>
									</div>
								</article>
							</div>
							<div class="row">
								<article>
									<div class="col-1-2 f-right">
										<img src="images/slide2.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>The title on the article</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
											<a class="button" href="single.html">Read More</a>
										</div>
									</div>
								</article>
							</div>
							<div class="row">
								<article>
									<div class="col-1-2">
										<img src="images/slide3.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>The title on the article</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
											<a class="button" href="single.html">Read More</a>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->

@endsection
@section('carusel')
    <div id="owl-slide" class="owl-carousel">
        @foreach($materials as $material)
            <div class="item">
                <img src="{{$material->image}}" />
            </div>
        @endforeach
    </div>
@endsection

