@extends('.master')
@section("content")

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="imgItem" src="{{ URL::to('/img/1.jpg') }}" alt="Los Angeles">
    </div>

    <div class="item">
      <img class="imgItem" src="{{ URL::to('/img/2.jpg') }}" alt="Chicago">
    </div>

    <div class="item">
      <img class="imgItem" src="{{ URL::to('/img/3.jpg') }}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
<!-- END SLIDER -->

	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="{{ URL::to('/img/category-1.jpg') }}">
			</div>
			<div class="col-3">
				<img src="{{ URL::to('/img/category-2.jpg') }}">
			</div>	
			<div class="col-3">
				<img src="{{ URL::to('/img/category-3.jpg') }}">
			</div>		
			</div>
		</div>
	</div>

<div class="small-container">
		<h2 class="tittle">Рекомендуем Вам</h2>
		<div class="row">
			<div class="col-4">
				<a href=""><img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/88fOF4F1JdylKesZzNcggZBNni2.jpg"></a>
				<h4>The King's Speech</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>	
			
			<div class="col-4">
				<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/lIAJmJK9MWYQnZVtBOG207BS4u8.jpg">
				<h4>The Pianist</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o"></i>
				</div>

			</div>	
			<div class="col-4">
				<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/dEh3ksfCPRp41Q6RPkIjI64Zfr1.jpg">
				<h4>Spider-Man </h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o"></i>
				</div>
			</div>	
			<div class="col-4">
				<img src="https://www.themoviedb.org/t/p/original/cfxBdqeRyuBnKa2axipmAFkQJPj.jpg">
				<h4>Inception</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>	

		</div>
		
	</div>

@endsection