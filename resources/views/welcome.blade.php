<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Blog-dealtoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Tailwind CSS is a utility-first CSS framework for rapidly building modern websites without ever leaving your HTML, Tailwindcss Blog Section, Blog Section For Tailwind CSS Template Section"
        name="description" />
    <meta content="Techzaa" name="author" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">




    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

    <!-- JavaScript jQuery et Bootstrap pour le modal ajouté -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/tiny-slider.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
        span {
            color: orange;
        }

        /* .container h2{
                font-size: 40px;
            } */


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


        .bg-light {
            --bs-bg-opacity: 1;
            background-color: #fff !important;
        }



        .marquee {
            width: 100%;
            /* Largeur de la bande */
            white-space: nowrap;
            /* Empêche le texte de passer à la ligne */
            overflow: hidden;
            /* Cache le texte qui dépasse */
            box-sizing: border-box;
        }

        .marquee span {
            display: inline-block;
            padding-left: 100%;
            /* Positionne le texte hors de l'écran */
            animation: marquee 20s linear infinite;
            /* Animation continue */
        }

        @keyframes marquee {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .spann {
            color: black;
            font-size: 20px;
        }
    </style>


</head>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<body class="font-body">

    @include('layout.nav')
  


    <div class="marquee">
        <span class="spann">Bienvenue sur BlogDealtoo ! Profitez de nos services exceptionnels et découvrez nos offres spéciales. Ne manquez pas nos dernières nouveautés !</span>
    </div>

   
    

<section class="section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            @if ($mostCommentedArticles->count() >= 5)
                <div class="col-md-4">
                    <a href="{{ route('blog.detail', $mostCommentedArticles[0]->id) }}"
                        class="h-entry mb-30 v-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/' . $mostCommentedArticles[0]->image) }}');">
                        </div>
                        <div class="text">
                            <span class="date">{{ $mostCommentedArticles[0]->created_at->format('M d, Y') }}</span>
                            <h2>{{ $mostCommentedArticles[0]->title }}</h2>
                        </div>
                    </a>
                    <a href="{{ route('blog.detail', $mostCommentedArticles[1]->id) }}"
                        class="h-entry v-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/' . $mostCommentedArticles[1]->image) }}');">
                        </div>
                        <div class="text">
                            <span class="date">{{ $mostCommentedArticles[1]->created_at->format('M d, Y') }}</span>
                            <h2>{{ $mostCommentedArticles[1]->title }}</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('blog.detail', $mostCommentedArticles[2]->id) }}"
                        class="h-entry img-5 h-100 gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/' . $mostCommentedArticles[2]->image) }}');">
                        </div>
                        <div class="text">
                            <span class="date">{{ $mostCommentedArticles[2]->created_at->format('M d, Y') }}</span>
                            <h2>{{ $mostCommentedArticles[2]->title }}</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('blog.detail', $mostCommentedArticles[3]->id) }}"
                        class="h-entry mb-30 v-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/' . $mostCommentedArticles[3]->image) }}');">
                        </div>
                        <div class="text">
                            <span class="date">{{ $mostCommentedArticles[3]->created_at->format('M d, Y') }}</span>
                            <h2>{{ $mostCommentedArticles[3]->title }}</h2>
                        </div>
                    </a>
                    <a href="{{ route('blog.detail', $mostCommentedArticles[4]->id) }}"
                        class="h-entry v-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/' . $mostCommentedArticles[4]->image) }}');">
                        </div>
                        <div class="text">
                            <span class="date">{{ $mostCommentedArticles[4]->created_at->format('M d, Y') }}</span>
                            <h2>{{ $mostCommentedArticles[4]->title }}</h2>
                        </div>
                    </a>
                </div>
            @else
                <p>Aucun article commenté disponible.</p>
            @endif
        </div>
    </div>
</section>







    @if ($categories->isEmpty())
        <div class="container">
            <p>Aucune catégorie disponible pour le moment. Ajoutez une catégorie pour voir des articles.</p>
        </div>
    @else
        @foreach ($categories as $category)
            @if ($category->articles->isNotEmpty())
                <section class="section">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <h2 class="posts-entry-title">{{ $category->name }}</h2>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                @if ($category->articles->count() > 4)
                                    <a href="{{ route('category.show', ['id' => $category->id]) }}"
                                        class="read-more">Voir plus</a>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($category->articles->take(4) as $article)
                                <div class="col-lg-3 mb-4">
                                    <div class="card h-100">
                                        @if ($article->image)
                                            <img src="{{ asset('assets/' . $article->image) }}"
                                                alt="{{ $article->title }}" class="card-img-top custom-size">
                                        @else
                                            <img src="assets/images/default.jpg" alt="Default Image"
                                                class="card-img-top custom-size">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $article->title }}</h5>
                                            <p class="card-text">{{ Str::limit(strip_tags($article->body), 100) }}</p>

                                            <a href="{{ route('blog.detail', $article->id) }}"
                                                class="btn btn-primary">Lire
                                                la suite</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    @endif



    <!-- Modal pour ajouter un article -->
    <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Nouvel Article</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Contenu</label>
                            <textarea class="form-control" id="body" name="body" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category">Catégorie</label>
                            <select class="form-control" id="category" name="category_id" required>
                                <option value="" disabled selected>Choisir une catégorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image"
                                accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    @include('layout.footer')

    <script src="https://cdn.ckeditor.com/ckeditor5/ckeditor.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#body'), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        'blockQuote',
                        '|',
                        'undo',
                        'redo'
                    ]
                },
                heading: {
                    options: [
                        {
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        }
                    ]
                }
                // Additional configurations can be added here
            })
            .catch(error => {
                console.error(error);
            });
    });
    </script>
    



</body>

</html>
