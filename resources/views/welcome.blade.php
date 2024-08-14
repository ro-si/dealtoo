<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Blog-dealtoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind CSS is a utility-first CSS framework for rapidly building modern websites without ever leaving your HTML, Tailwindcss Blog Section, Blog Section For Tailwind CSS Template Section" name="description" />
    <meta content="Techzaa" name="author" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">


    <!-- JavaScript jQuery et Bootstrap pour le modal ajouté -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    {{--  --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/tiny-slider.css">
  
  <link rel="stylesheet" href="css/style.css">

        <style>
            span{
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
    object-fit: cover; /* Cette propriété permet de remplir l'image tout en coupant les parties qui ne rentrent pas dans le cadre */
    object-position: center; /* Centrer l'image si elle est recadrée */
}

        </style>


  
</head>

<body class="font-body">

    @include('layout.nav')
    <div class="banner" >
        <img src="{{ asset('/assets/help-image/help-banner-2.jpg') }}" alt="">
      </div>
   
    <!-- Start Blog -->
    <section id="demo" class="py-28">
        <div class="container">
            <div class="max-w-md mx-auto text-center relative overflow-hidden h-16 text-container">
                <h2 class="text-3xl">"Les Tendances du Moment sur <span>Dealtoo</span>  "</h2>
                <p id="animated-text" class="font-medium mt-2 mb-6"></p>
            </div><!-- end max-w -->

          
        </div><!-- end container -->
    </section>


 <!-- Contenu de la vue -->
 @if($categories->isEmpty())
 <!-- Affichage lorsque aucune catégorie n'est disponible -->
 <div class="container">
     <p>Aucune catégorie disponible pour le moment. Ajoutez une catégorie pour voir des articles.</p>

            @else
            <!-- Affichage lorsque des catégories sont disponibles -->
            @foreach($categories as $category)
                @if($category->articles->isNotEmpty()) <!-- Vérifier que la catégorie a des articles -->
                    <section class="section">
                        <div class="container">
                            <div class="row mb-4">
                     <div class="col-sm-6">
                         <h2 class="posts-entry-title">{{ $category->name }}</h2> <!-- Titre de la catégorie -->
                     </div>
                     <div class="col-sm-6 text-sm-end">
                         <a href="" class="read-more">Voir plus</a>
                     </div>
                 </div>
                 
                 <div class="row">
                     @forelse($category->articles as $article)
                         <div class="col-lg-4 mb-4">
                             <div class="post-entry-alt animate-on-hover">
                                 @if($article->image)
                                 <a href="" class="img-link">
                                         <img src="{{ asset('assets/' . $article->image) }}" alt="{{ $article->title }}" class="img custom-size">
                                     </a>
                                 @endif
                                 <div class="excerpt">
                                     <h2><a href="{{ route('blog.detail', ['id' => $article->id]) }}">{{ $article->title }}</a></h2> <!-- Titre de l'article -->
                                     <p>{{ $article->body }}</p>
                                     <p><a href="{{ route('blog.detail', ['id' => $article->id]) }}" class="read-more">Voir plus</a></p>
                                 </div>
                             </div>
                         </div>
                     @empty
                         <p>Aucun article trouvé dans cette catégorie.</p>
                     @endforelse
                 </div>
             </div>
         </div>
         </section>
         
     @endif
 @endforeach
@endif









   

    
    
  <!-- Modale pour ajouter un article -->
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
                        <textarea class="form-control" id="body" name="body" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <select class="form-control" id="category" name="category_id" required>
                            <option value="" disabled selected>Choisir une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="published_at">Publié le</label>
                        <input type="datetime-local" class="form-control" id="published_at" name="published_at">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
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
    

    {{-- <footer class="py-8 bg-slate-100">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <div class="text-center">
                        <p class="text-muted"> ©
                            <script>document.write(new Date().getFullYear())</script> Blogez. By <a class="font-medium"
                                href="#">Techzaa</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div><!-- end container -->
    </footer> --}}


    

    {{-- <!-- Modals et JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script> --}}
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