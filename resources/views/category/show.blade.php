<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Blog-dealtoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Tailwind CSS is a utility-first CSS framework for rapidly building modern websites without ever leaving your HTML, Tailwindcss Blog Section, Blog Section For Tailwind CSS Template Section"
        name="description" />
    <meta content="Techzaa" name="author" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css">

    <!-- JavaScript jQuery et Bootstrap pour le modal ajouté -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Autres styles -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        span {
            color: orange;
        }

        /* .container h2{
                font-size: 40px;
            } */

                        .card-text {
                max-width: 300px; /* Ajustez la largeur maximale selon vos besoins */
                overflow: hidden;  /* Cache le texte qui dépasse */
                /* text-overflow: ellipsis; Ajoute "..." à la fin si le texte est trop long */
                /* white-space: nowrap; Empêche le texte de se décomposer en plusieurs lignes */
            }


        .text-container {
            position: relative;
            overflow: hidden;
        }

        #animated-text {
            display: inline-block;
            white-space: nowrap;
        }



        .animate-on-hover {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .animate-on-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .img-hover-zoom {
            transition: transform 0.3s ease-in-out;
        }

        .img-hover-zoom:hover {
            transform: scale(1.05);
        }

        .excerpt a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .excerpt a:hover {
            color: #ff6700;
        }


        img.custom-size {
            width: 500px;
            height: 200px;
            object-fit: cover;
            /* Cette propriété permet de remplir l'image tout en coupant les parties qui ne rentrent pas dans le cadre */
            object-position: center;
            /* Centrer l'image si elle est recadrée */
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
        }


        .sidebar {
            /* padding: 1rem; */
            background-color: #f8f9fa;
            /* Couleur de fond claire */
            /* border-radius: 0.375rem; */
            /* box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); */
        }

        .sidebar-box {
            margin-bottom: 1.5rem;
        }

        .post-entry-sidebar img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 0.375rem;
        }

        .post-entry-sidebar .text {
            flex: 1;
        }

        .post-entry-sidebar h4 {
            font-size: 1rem;
            margin: 0;
            font-weight: 500;
        }

        .post-meta {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .post-entry-sidebar a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #212529;
            transition: color 0.3s ease;
        }

        .post-entry-sidebar a:hover {
            color: #007bff;
            /* Couleur au survol */
        }

        @media (max-width: 576px) {
            .post-entry-sidebar img {
                width: 60px;
                height: 60px;
            }

            .sidebar-box {
                margin-bottom: 4em;
                font-size: 15px;
                width: 100%;
                float: left;
                /* background: #fff; */
            }
        }


        .sidebar-box {
            background: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); */
        }

        .sidebar-box h3.heading {


            margin-bottom: 15px;
            color: #333;
            /* border-bottom: 2px solid #007bff; */
            padding-bottom: 10px;
        }

        .post-entry-sidebar ul {
            list-style: none;
            padding-left: 0;
        }

        .post-entry-sidebar ul li {}

        .post-entry-sidebar ul li {
            list-style: none;
            padding: 0 0 20px 0;
            margin: 0 0 20px 0;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .post-entry-sidebar ul li img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .post-entry-sidebar ul li .text {
            flex: 1;
        }

        .post-entry-sidebar ul li .text h4 {
            font-size: 16px;
            color: #4D4C7D;
            margin-bottom: 5px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .post-entry-sidebar ul li .text h4:hover {
            color: #0056b3;
        }

        .post-entry-sidebar ul li .post-meta {
            font-size: 14px;
            color: #6c757d;
        }

        .categories ul {
            list-style: none;
            padding-left: 0;
        }

        .categories ul li {
            margin-bottom: 10px;
        }

        .categories ul li a {
            font-size: 16px;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: color 0.3s;
        }

        .categories ul li a:hover {
            color: #007bff;
        }

        .tags ul {
            list-style: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tags ul li {
            margin-bottom: 5px;
        }

        .tags ul li a {
            font-size: 14px;
            background: #e9ecef;
            padding: 5px 10px;
            border-radius: 20px;
            color: #007bff;
            transition: background-color 0.3s;
        }

        .tags ul li a:hover {
            background-color: #007bff;
            color: #fff;
        }

        /*  */


        .sidebar-box {
            margin-top: 30px;
        }

        .similar-post-item {
            margin-bottom: 20px;
        }

        .similar-post-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .similar-post-item .text {
            padding: 10px;
        }

        .similar-post-item .text h4 {
            margin: 0;
            font-size: 16px;
        }

        .similar-post-item .post-meta {
            color: #888;
            font-size: 14px;
        }

        /*  */


        .pagination {
            display: inline-block;
            margin-top: 20px;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
            border-radius: 5px;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        /*  */

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-link {
            text-decoration: none;
            color: #333;
        }

        .card-link:hover {
            color: #007bff;
        }

        .card-body i {
            display: block;
            margin: 0 auto 10px;
            color: #007bff;
        }

        .card-body h6 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }
    </style>


</head>

<body class="font-body">
    @include('layout.nav')



    {{-- <div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">Category: Business</div>
				</div>
			</div>
			<div class="row posts-entry">
				<div class="col-lg-8">
					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="single.html" class="img-link me-4">
							<img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 • <a href="#">Business</a></span>
							<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="single.html" class="img-link me-4">
							<img src="images/img_2_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 • <a href="#">Business</a></span>
							<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="single.html" class="img-link me-4">
							<img src="images/img_3_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 • <a href="#">Business</a></span>
							<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="single.html" class="img-link me-4">
							<img src="images/img_4_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 • <a href="#">Business</a></span>
							<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="single.html" class="img-link me-4">
							<img src="images/img_5_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 • <a href="#">Business</a></span>
							<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="row text-start pt-5 border-top">
						<div class="col-md-12">
							<div class="custom-pagination">
								<span>1</span>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>...</span>
								<a href="#">15</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-4 sidebar">
					
					<div class="sidebar-box search-form-wrap mb-4">
						<form action="#" class="sidebar-search-form">
							<span class="bi-search"></span>
							<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
						</form>
					</div>
					<!-- END sidebar-box -->
					<div class="sidebar-box">
						<h3 class="heading">Popular Posts</h3>
						<div class="post-entry-sidebar">
							<ul>
								<li>
									<a href="">
										<img src="images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- END sidebar-box -->

					<div class="sidebar-box">
						<h3 class="heading">Categories</h3>
						<ul class="categories">
							<li><a href="#">Food <span>(12)</span></a></li>
							<li><a href="#">Travel <span>(22)</span></a></li>
							<li><a href="#">Lifestyle <span>(37)</span></a></li>
							<li><a href="#">Business <span>(42)</span></a></li>
							<li><a href="#">Adventure <span>(14)</span></a></li>
						</ul>
					</div>
					<!-- END sidebar-box -->

					<div class="sidebar-box">
						<h3 class="heading">Tags</h3>
						<ul class="tags">
							<li><a href="#">Travel</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Freelancing</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Freelancing</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div> --}}

    <div class="container mb-3 hide-xs">
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 p-2 g-3" id="categoryBadge">
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/automobiles" class="card-link">
                            <i class="fas fa-car fa-2x mb-2"></i>
                            <h6>Auto & Moto</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/phones-and-tablets" class="card-link">
                            <i class="fas fa-mobile-alt fa-2x mb-2"></i>
                            <h6>Téléphones Mobiles</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/electronics" class="card-link">
                            <i class="fas fa-laptop fa-2x mb-2"></i>
                            <h6>Hi-Tech</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/furniture-appliances" class="card-link">
                            <i class="fas fa-couch fa-2x mb-2"></i>
                            <h6>Meubles & Electroménagers</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/real-estate" class="card-link">
                            <i class="fas fa-home fa-2x mb-2"></i>
                            <h6>Immobilier</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/animals-and-pets" class="card-link">
                            <i class="fas fa-paw fa-2x mb-2"></i>
                            <h6>Animaux</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/fashion" class="card-link">
                            <i class="fas fa-tshirt fa-2x mb-2"></i>
                            <h6>Mode</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/beauty-well-being" class="card-link">
                            <i class="fas fa-spa fa-2x mb-2"></i>
                            <h6>Beauté et bien-être</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/jobs" class="card-link">
                            <i class="fas fa-briefcase fa-2x mb-2"></i>
                            <h6>Emplois</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/services" class="card-link">
                            <i class="fas fa-clipboard-list fa-2x mb-2"></i>
                            <h6>Services</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/learning" class="card-link">
                            <i class="fas fa-graduation-cap fa-2x mb-2"></i>
                            <h6>Apprentissage</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <a href="https://dealtoo.co/category/local-events" class="card-link">
                            <i class="far fa-calendar-alt fa-2x mb-2"></i>
                            <h6>Evénements</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- POUR les article aligné  --}}
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">Category: {{ $category->name }}</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-md-12 mb-4">
                                <div class="card d-flex flex-row border-0">
                                    <a href="{{ route('blog.detail', ['id' => $article->id]) }}"
                                        class="d-flex flex-shrink-0">
                                        @if ($article->image)
                                            <img class="card-img" src="{{ asset('assets/' . $article->image) }}"
                                                alt="{{ $article->title }}"
                                                style="width: 180px; height: 100%; object-fit: cover;">
                                        @else
                                            <img class="card-img" src="{{ asset('assets/default.jpg') }}"
                                                alt="Image par défaut"
                                                style="width: 180px; height: 100%; object-fit: cover;">
                                        @endif
                                    </a>
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title">
                                                <a
                                                    href="{{ route('blog.detail', ['id' => $article->id]) }}">{{ $article->title }}</a>
                                            </h5>
                                            <p class="card-text">{{ Str::limit(strip_tags($article->body), ) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <small class="text-muted">{{ $article->created_at->format('M. dS, Y') }}
                                                &bullet; <a href="#">{{ $category->name }}</a></small>
                                            <a href="{{ route('blog.detail', ['id' => $article->id]) }}"
                                                class="btn btn-outline-primary btn-sm">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="pagination">
                        <a href="{{ $articles->previousPageUrl() }}">&laquo;</a>

                        @for ($i = 1; $i <= $articles->lastPage(); $i++)
                            <a href="{{ $articles->url($i) }}"
                                class="{{ $articles->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a>
                        @endfor

                        <a href="{{ $articles->nextPageUrl() }}">&raquo;</a>
                    </div>



                </div>



                <div class="col-md-12 col-lg-4 sidebar">

                    <div class="sidebar-box">



                        <div class="sidebar-box">
                            <h3 class="heading">Post Populaire</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    @foreach ($popularPosts as $post)
                                        <li>
                                            <a href="{{ route('blog.detail', $post->id) }}" class="post-link">
                                                <img src="{{ asset('assets/' . $post->image) }}"
                                                    alt="{{ $post->title }}" class="post-image">
                                                <div class="text">
                                                    <h4>{{ $post->title }}</h4>
                                                    <div class="post-meta">
                                                        <span
                                                            class="mr-2">{{ $post->created_at->format('F j, Y') }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Sidebar avec les posts similaires -->

                        <div class="sidebar-box">
                            <h3 class="heading">Post Similaire</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    @foreach ($similarPosts as $post)
                                        <li class="similar-post-item">
                                            <a href="{{ route('blog.detail', $post->id) }}">
                                                <img src="{{ asset('assets/' . $post->image) }}"
                                                    alt="{{ $post->title }}" class="similar-post-image">
                                                <div class="text">
                                                    <h4>{{ $post->title }}</h4>
                                                    <div class="post-meta">
                                                        <span
                                                            class="mr-2">{{ $post->created_at->format('F j, Y') }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>





                    </div>
                    <div class="sidebar-box">
                        <h3 class="heading">Catégories</h3>
                        <ul class="tags">
                            <li><a href="#">Auto et Moto </a></li>
                            <li><a href="#">Téléphone Mobile</a></li>
                            <li><a href="#">Hi-Tech</a></li>
                            <li><a href="#">Meuble et Electroménagers</a></li>
                            <li><a href="#">Immobilier</a></li>
                            <li><a href="#">Animaux</a></li>
                            <li><a href="#">Mode</a></li>
                            <li><a href="#">Beauté et Bien etre</a></li>
                            <li><a href="#">Emplois</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Apprentissages</a></li>
                            <li><a href="#">Evènements</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>







    @include('layout.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phrases = [
                "Ce que Vous Devez Savoir",
                "Voici mon premier texte",
                "Une autre phrase intéressante",
                "Découvrez nos nouveautés"
                // Ajoutez d'autres phrases si nécessaire
            ];

            const element = document.getElementById('animated-text');
            let phraseIndex = 0;
            let charIndex = 0;
            let typing = true;

            function typeEffect() {
                if (typing) {
                    // Tape les caractères
                    element.textContent += phrases[phraseIndex].charAt(charIndex);
                    charIndex++;
                    if (charIndex > phrases[phraseIndex].length) {
                        typing = false;
                        setTimeout(typeEffect, 1000); // Pause avant de supprimer le texte
                    } else {
                        setTimeout(typeEffect, 100); // Vitesse de frappe
                    }
                } else {
                    // Efface les caractères
                    element.textContent = phrases[phraseIndex].substring(0, charIndex - 1);
                    charIndex--;
                    if (charIndex <= 0) {
                        typing = true;
                        phraseIndex = (phraseIndex + 1) % phrases.length;
                        setTimeout(typeEffect, 500); // Pause avant de taper la prochaine phrase
                    } else {
                        setTimeout(typeEffect, 50); // Vitesse d'effacement
                    }
                }
            }

            typeEffect(); // Démarrer l'animation
        });
    </script>

</body>

</html>
