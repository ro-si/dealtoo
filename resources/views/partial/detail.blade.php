<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>






    <title>{{ $article->title }} - Blogy</title>

    <style>
        /* Style pour les liens dans la sidebar */
        .sidebar-box .tags li a {
            text-decoration: none;
            /* Supprime les soulignements par défaut */
            display: block;
            /* Pour que le padding fonctionne correctement */
            transition: color 0.3s ease, background-color 0.3s ease;
            /* Transition douce */
        }

        /* Effet de survol pour les liens */
        .sidebar-box .tags li a:hover {
            color: #fff;
            /* Couleur du texte au survol (blanc) */
            background-color: orange;
            /* Couleur de fond au survol */
            border-radius: 4px;
            /* Bordures arrondies */
        }

        /* Style pour les liens dans la sidebar */
        .sidebar-box .categories li a {
            text-decoration: none;
            /* Supprime les soulignements par défaut */
            display: block;
            /* Pour que le padding fonctionne correctement */
            transition: color 0.3s ease, background-color 0.3s ease;
            /* Transition douce */
        }

        .sidebar-box .categories li a:hover {
            color: orange;
            /* Couleur du texte au survol (blanc) */

            border-radius: 4px;
            /* Bordures arrondies */
        }

        /*  */





        .heading {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .post-entry-sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .similar-post-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            transition: background-color 0.3s ease;
        }


        .similar-post-image {
            width: 80px;
            /* Set a fixed size for the images */
            height: 80px;
            object-fit: cover;
            /* Ensure images cover the entire area without distortion */
            margin-right: 15px;
            border-radius: 6px;
        }

        .text {
            flex: 1;
        }

        .text h4 {
            font-size: 1rem;
            margin: 0;
            font-weight: 600;
            color: #333;
        }

        .post-meta {
            font-size: 0.875rem;
            color: #888;
        }

        @media (max-width: 768px) {
            .similar-post-image {
                width: 50px;
                height: 50px;
            }

            .text h4 {
                font-size: 0.9rem;
            }

            .post-meta {
                font-size: 0.75rem;
            }
        }



        /*  */

        /* Comments Section */
        .comments-heading {
            font-size: 1.75rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        .comment-box {
            /* background-color: #f8f9fa;
            padding: 15px; */
            margin-bottom: 15px;
            border-radius: 8px;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        }

        .comment-author {
            font-size: 1rem;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 5px;
        }

        .comment-content {
            font-size: 1rem;
            color: #333;
            margin-bottom: 10px;
        }

        .comment-date {
            font-size: 0.875rem;
            color: #888;
        }

        /* Comment Form */
        .comment-form {
            margin-top: 30px;
        }

        .comment-textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #333;
            resize: vertical;
            /* Allow vertical resize */
        }

        .comment-textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .login-prompt {
            font-size: 1rem;
            color: #333;
            margin-top: 20px;
        }

        .login-prompt a {
            color: #007bff;
            text-decoration: underline;
        }

        .login-prompt a:hover {
            text-decoration: none;
        }

        /*  */

        /* Style for the post entry sidebar */
        .post-entry-sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .post-entry-sidebar li {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .post-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .post-image {
            width: 80px;
            /* Adjust width as needed */
            height: 80px;
            /* Adjust height as needed */
            object-fit: cover;
            /* Ensure the image covers the area */
            margin-right: 15px;
            /* Space between image and text */
            border-radius: 8px;
            /* Rounded corners */
        }

        .text {
            flex: 1;
        }

        .text h4 {
            margin: 0;
            font-size: 16px;
            line-height: 1.2;
        }

        .post-meta {
            font-size: 14px;
            color: #888;
            /* Grey color for date */
        }
    </style>
</head>

<body>

    @include('layout.nav')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ asset('assets/' . $article->image) }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $article->title }}</h1>
                        <div class="post-meta align-items-center text-center">
                            {{-- <figure class="author-figure mb-0 me-3 d-inline-block"><img src="{{ $article->author_image_url }}" alt="Image" class="img-fluid"></figure> --}}
                            {{-- <span class="d-inline-block mt-1">By {{ $article->author_name }}</span> --}}
                            {{-- <span>&nbsp;-&nbsp; {{ $article->published_at->format('F j, Y') }}</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        {!! $article->body !!}

                    </div>
                    <div class="post-content-body">
                        {!! $article->body !!}

                    </div>
                    <div class="post-content-body">
                        {!! $article->body !!}

                    </div>
                    <div class="post-content-body">
                        {!! $article->body !!}

                    </div>
                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a
                                href="#">#manila</a>, <a href="#">#asia</a></p>
                    </div>
                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a
                                href="#">#manila</a>, <a href="#">#asia</a></p>
                    </div>
                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a
                                href="#">#manila</a>, <a href="#">#asia</a></p>
                    </div>


                    {{-- <h1>{{ $article->title }}</h1>
                    <p>{{ $article->content }}</p> --}}



                    {{--  post commentaire  --}}
                    <h2 class="comments-heading">Commentaires</h2>

                    <div id="comments-section">
                        <!-- Initially visible comments -->
                        @foreach ($comments->take(3) as $comment)
                            <!-- Adjust the number to fit your design -->
                            <div class="comment-box">
                                <p class="comment-author"><strong>{{ $comment->user->name }}</strong></p>
                                <p class="comment-content">{{ $comment->comment }}</p>
                                <p class="comment-date"><em>{{ $comment->created_at->format('d M Y, H:i') }}</em></p>
                            </div>
                        @endforeach

                        <!-- Additional comments hidden initially -->
                        <div id="more-comments" style="display: none;">
                            @foreach ($comments->skip(3) as $comment)
                                <div class="comment-box">
                                    <p class="comment-author"><strong>{{ $comment->user->name }}</strong></p>
                                    <p class="comment-content">{{ $comment->comment }}</p>
                                    <p class="comment-date"><em>{{ $comment->created_at->format('d M Y, H:i') }}</em>
                                    </p>
                                </div>
                            @endforeach
                        </div>

                        <!-- Button to show more comments -->
                        @if ($comments->count() > 3)
                            <button id="show-more-comments" class="btn  mt-3">Voir plus de
                                commentaires</button>
                        @endif
                    </div>

                    @if (Auth::check())
                        <form action="{{ route('comment.store') }}" method="POST" class="comment-form mt-4">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <textarea name="comment" required class="comment-textarea" placeholder="Votre commentaire..."></textarea>
                            <button type="submit" class="btn btn-primary">Poster un commentaire</button>
                        </form>
                    @else
                        <p class="login-prompt">Vous devez <a href="{{ route('register') }}">vous connecter</a> pour
                            poster un commentaire.</p>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif



                </div>

















                <div class="col-md-12 col-lg-4 sidebar">

                    <div class="sidebar-box">
                        {{-- <div class="bio text-center">
                            <img src="{{ asset('images/person_2.jpg') }}" alt="Image Placeholder" class="img-fluid mb-3">
                            <div class="bio-body">
                                <h2>Hannah Anderson</h2>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                                <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read more</a></p>
                            </div>
                        </div> --}}


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
    </section>
    {{-- <section class="section">
      <div class="container">

          <div class="row blog-entries element-animate">

              <div class="col-md-12 col-lg-8 main-content">

                  <div class="pt-5 comment-wrap">


                      <!-- END comment-list -->

                      <div class="comment-form-wrap pt-5">
                          <h3 class="mb-5">Leave a comment</h3>
                          <form action="#" class="p-5 bg-light">
                              <div class="form-group">
                                  <label for="name">Name *</label>
                                  <input type="text" class="form-control" id="name">
                              </div>
                              <div class="form-group">
                                  <label for="email">Email *</label>
                                  <input type="email" class="form-control" id="email">
                              </div>
                              <div class="form-group">
                                  <label for="website">Website</label>
                                  <input type="url" class="form-control" id="website">
                              </div>

                              <div class="form-group">
                                  <label for="message">Message</label>
                                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                  <input type="submit" value="Post Comment" class="btn btn-primary">
                              </div>

                          </form>
                      </div>
                  </div>

              </div>

              <!-- END main-content -->



          </div>
      </div>
  </section> --}}
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-uppercase text-black">Afficher plus</div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('images/img_1_horizontal.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src=" {{ asset('images/img_2_horizontal.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('images/img_3_horizontal.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('images/img_4_horizontal.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.footer')

    @section('scripts')
    @endsection

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <script>
        document.getElementById('show-more-comments')?.addEventListener('click', function() {
            document.getElementById('more-comments').style.display = 'block';
            this.style.display = 'none'; // Hide the button after showing more comments
        });
    </script>
</body>

</html>
