<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>{{ $article->title }} - Blogy</title>

    <style>

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
                    {{-- <div class="post-content-body">
                        {!! $article->body !!}

                    </div> --}}
                    <div class="post-content-body">
                        {!! $article->body !!}
                    </div>
                   

                    @if (Session::has('user'))
                        {{-- <p>Welcome, {{ Session::get('user')['name'] }}!</p> --}}
                    @else
                        <p style="color: red"> <a data-bs-toggle="modal" data-bs-target="#loginModal"
                                href="#">Connectez-vous</a> avant de commenter.</p>

                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                            aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" method="POST" action="{{ route('api.login') }}">
                                        @csrf
                                        <input type="hidden" name="language_code" value="fr">

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="mb-3 auth-field-item mt-3 required">
                                                        <div class="row">
                                                            <label class="form-label col-12 m-0 py-2 text-left"
                                                                for="email">Email: <sup>*</sup></label>
                                                        </div>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span>
                                                            <input id="mEmail" name="email" type="text"
                                                                placeholder="Email ou Nom d'utilisateur"
                                                                class="form-control" value="{{ old('email') }}"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <input name="auth_field" type="hidden" value="email">

                                                    <div class="mb-3">
                                                        <label for="password" class="control-label">Mot de
                                                            passe</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-lock"></i></span>
                                                            <input id="mPassword" name="password" type="password"
                                                                class="form-control" placeholder="Mot de passe"
                                                                autocomplete="new-password" required>
                                                            <span class="input-group-text input-group-append"
                                                                onclick="togglePasswordVisibility()">
                                                                <i class="far fa-eye-slash"
                                                                    id="password-eye-icon"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label class="checkbox form-check-label float-start mt-2"
                                                            style="font-weight: normal;">
                                                            <input type="checkbox" value="1" name="remember_me"
                                                                id="rememberMe2" class=""> Se souvenir de moi
                                                        </label>
                                                        <div>
                                                            <p class="float-end mt-2">
                                                                <a href="">
                                                                    Mot de passe oublié?
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>

                                                    <div class="mb-3 d-flex justify-content-center align-items-center">
                                                        <span style="margin-right: 5px;">
                                                            Tu n'as pas encore de compte ?
                                                        </span>
                                                        <a href="{{ route('register') }}" class="ml-3">
                                                            S'inscrire
                                                        </a>
                                                    </div>

                                                    <input type="hidden" name="quickLoginForm" value="1">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary float-end">Se
                                                connecter</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    @endif

                    {{--  post commentaire  --}}
                    <div id="comments-section">
                        <!-- Nombre total de commentaires -->
                        <P class="comments-heading">
                            Commentaires ({{ $commentCount }})
                        </P>
                    
                        <!-- Commentaires existants -->
                        @foreach ($comments as $comment)
                            <div class="comment-box">
                                <p class="comment-author"><strong>{{ $comment->username }}</strong></p> <!-- Afficher le nom d'utilisateur -->
                                <p class="comment-content">{{ $comment->comment }}</p>
                                <p class="comment-date"><em>{{ $comment->created_at->format('d M Y, H:i') }}</em></p>
                            </div>
                        @endforeach
                    
                        {{-- Message flash --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    
                        {{-- Erreurs de connexion --}}
                        @if ($errors->has('login_error'))
                            <div class="alert alert-danger">
                                {{ $errors->first('login_error') }}
                            </div>
                        @endif
                    <!-- Bouton "Voir plus de commentaires" -->
  
                        <!-- Formulaire de commentaire -->
                        <form id="commentForm" action="{{ route('comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <div class="form-group">
                                <label for="comment">Votre commentaire:</label>
                                <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
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
                            <li><a href="#">Actualités Dealtoo</a></li>
                            <li><a href="#">Histoires de Succès</a></li>
                            <li><a href="#">Astuces et Trucs</a></li>
                            <li><a href="#">Guides et Tutoriels</a></li>
                            <li><a href="#">Événements et Communauté</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Marketing et Promotion</a></li>
                            <li><a href="#">Événements</a></li>
                            <li><a href="#">Développement Personnel</a></li>
                            <li><a href="#">Analyses de Marché</a></li>
                            <li><a href="#">Sécurité</a></li>
                            <li><a href="#">Catégories de Produits</a></li>
                           
                          
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('layout.footer')

    @section('scripts')
    @endsection


    <script>
        document.getElementById('show-more-comments')?.addEventListener('click', function() {
            document.getElementById('more-comments').style.display = 'block';
            this.style.display = 'none'; // Hide the button after showing more comments
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('commentForm');

            // Déterminez si l'utilisateur est connecté en vérifiant la session
            @if (Session::has('user'))
                // Utilisateur connecté
                if (form) {
                    form.addEventListener('submit', function(event) {
                        var comment = form.querySelector('textarea[name="comment"]').value;
                        console.log("Comment submitted:", comment);
                        // Soumettre le formulaire
                        form.submit();
                    });
                }
            @else
                // Utilisateur non connecté
                if (form) {
                    form.addEventListener('submit', function(event) {
                        event.preventDefault(); // Empêche l'envoi du formulaire

                        // Affiche le modal d'information
                        var infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
                        infoModal.show();
                    });
                }
            @endif
        });
    </script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('mPassword');
            var passwordEyeIcon = document.getElementById('password-eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordEyeIcon.classList.remove('fa-eye-slash');
                passwordEyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                passwordEyeIcon.classList.remove('fa-eye');
                passwordEyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

    <style>
        .input-group-append {
            cursor: pointer;
        }

        .input-group-text {
            border-radius: 0;
        }
    </style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreButton = document.getElementById('load-more-comments');
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', function() {
                const nextPageUrl = loadMoreButton.getAttribute('data-next-page');
    
                fetch(nextPageUrl)
                    .then(response => response.json())
                    .then(data => {
                        const commentsContainer = document.getElementById('comments-section');
                        
                        // Ajouter les nouveaux commentaires à la page
                        data.comments.forEach(comment => {
                            const commentDiv = document.createElement('div');
                            commentDiv.classList.add('comment-box');
                            commentDiv.innerHTML = `
                                <p class="comment-author"><strong>${comment.username}</strong></p>
                                <p class="comment-content">${comment.comment}</p>
                                <p class="comment-date"><em>${comment.created_at}</em></p>
                            `;
                            commentsContainer.insertBefore(commentDiv, loadMoreButton);
                        });
    
                        // Mettre à jour l'URL pour le prochain chargement
                        if (data.hasMore) {
                            loadMoreButton.setAttribute('data-next-page', data.nextPageUrl);
                        } else {
                            loadMoreButton.remove();
                        }
                    });
            });
        }
    });
    </script>

</body>

</html>
