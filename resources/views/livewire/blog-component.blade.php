<div>

<main id="main">

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="#" class="link">home</a></li>
				<li class="item-link"><span>Grooming</span></li>
			</ul>
		</div>
		<div class="row">
			<div >

				<div class="banner-shop">
					<a href="#" class="banner-link">
						<figure><img src="{{ asset('asset/banner/bb')}}.webp" alt="" style="width:100%; height: 3in;"></figure>
					</a>
				</div>

				<div class="wrap-shop-control">

					<h1 class="shop-title">Grooming</h1>

					<div class="wrap-right">



						<div class="sort-item product-per-page">
							<select name="post-per-page" class="use-chosen" wire:model="pagesize">
								<option value="4" selected="selected">4 per page</option>
								<option value="5">5 per page</option>
								<option value="3">3 per page</option>
								<option value="2">2 per page</option>
								
							</select>
						</div>

						<div class="change-display-mode">
							<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
							<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
						</div>

					</div>

				</div><!--end wrap shop control-->


   
   
    


     <section id="blog">
       @foreach($blogs as $blog)
        <div class="blog-box">
            <div class="blog-img">
                <img src="{{ asset('asset/blog')}}/{{$blog->image}}.jpg" alt="{{$blog->name}}">
            </div>
            <div class="blog-details">
                <h1>{{$blog->name}}</h4>
                
        <h5>--by {{$blog->writer}}</h5>
                <p>{{$blog->short_description}}</p>
                <a href="{{route('blog.details',['slug'=>$blog->slug])}}">Read more</a>
            </div>
        </div>
        @endforeach
       

     </section>

    


 <div class="wrap-pagination-info">
					{{$blogs->links()}}
					{{-- <ul class="page-numbers">
						<li><span class="page-number-item current" >1</span></li>
						<li><a class="page-number-item" href="#" >2</a></li>
						<li><a class="page-number-item" href="#" >3</a></li>
						<li><a class="page-number-item next-link" href="#" >Next</a></li>
					</ul>
					<p class="result-count">Showing 1-8 of 12 result</p> --}}


				</div>

</div>
</div><!--end main products area-->
</div><!--end row-->

	</div><!--end container-->

</main>
