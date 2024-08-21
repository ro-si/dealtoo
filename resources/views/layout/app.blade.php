<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Blog-dealtoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind CSS is a utility-first CSS framework for rapidly building modern websites without ever leaving your HTML, Tailwindcss Blog Section, Blog Section For Tailwind CSS Template Section" name="description" />
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
            object-position: center;
        }
    </style>
</head>

<body class="font-body">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
