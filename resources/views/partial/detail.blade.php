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
                    <div class="comment-form-wrap pt-5">
                      <h3 class="mb-5">Ajouter un commentaire</h3>
                      <form action="#" class="p-5 bg-light">
                          
                          
                         
    
                          <div class="form-group">
                              <label for="message">Message</label>
                              <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                              <input type="submit" value="Publier" class="btn btn-primary">
                          </div>
    
                      </form>
                  </div>
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
                                    <li>
                                        <a href="">
                                            <img src="{{ asset('images/img_1_sq.jpg') }}" alt="Image placeholder"
                                                class="me-4 rounded">
                                            <div class="text">
                                                <h4>Quibusdam autem, quas molestias recusandae aperiam molestiae modi
                                                    qui ipsam vel</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{ asset('images/img_2_sq.jpg') }}" alt="Image placeholder"
                                                class="me-4 rounded">
                                            <div class="text">
                                                <h4>Quibusdam autem, quas molestias recusandae aperiam molestiae modi
                                                    qui ipsam vel</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{ asset('images/img_3_sq.jpg') }}" alt="Image placeholder"
                                                class="me-4 rounded">
                                            <div class="text">
                                                <h4>Quibusdam autem, quas molestias recusandae aperiam molestiae modi
                                                    qui ipsam vel</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3 class="heading">Post Similaire</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="{{ asset('images/img_1_sq.jpg') }}" alt="Image placeholder"
                                                class="me-4 rounded">
                                            <div class="text">
                                                <h4>Quibusdam autem, quas molestias recusandae aperiam molestiae modi
                                                    qui ipsam vel</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{ asset('images/img_2_sq.jpg') }}" alt="Image placeholder"
                                                class="me-4 rounded">
                                            <div class="text">
                                                <h4>Quibusdam autem, quas molestias recusandae aperiam molestiae modi
                                                    qui ipsam vel</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{ asset('images/img_3_sq.jpg') }}" alt="Image placeholder"
                                                class="me-4 rounded">
                                            <div class="text">
                                                <h4>Quibusdam autem, quas molestias recusandae aperiam molestiae modi
                                                    qui ipsam vel</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
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
</body>

</html>
