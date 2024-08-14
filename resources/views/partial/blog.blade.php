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



    {{--  --}}

  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/tiny-slider.css">
  
  <link rel="stylesheet" href="css/style.css">

<style>
    span{
        color: orange;
    }
    .container h2{
        font-size: 40px;
    }

    
    .text-container {
  position: relative;
  overflow: hidden;
}

#animated-text {
  display: inline-block;
  white-space: nowrap;
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

            <div class="relative">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
                        
                            {{-- @foreach($articles as $article)
                                <div class="shadow bg-white  overflow-hidden">
                                    <div class="relative">
                                        @if($article->image)
                                            <img src="{{ asset('assets/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-64 object-cover" class="w-[1380px] h-[920px] object-cover">
                                            
                                            @else
                                            <img src="path/to/default-image.jpg" alt="Default Image" class="w-full h-64 object-cover">
                                        @endif
                                        <div class="absolute inset-x-0 top-auto bottom-0 ">
                                            <div class=" inline-block p-4">
                                                <div class="flex items-center gap-3">
                                                    {{-- <div>
                                                        <img src="assets/images/user/img-1.jpg" class="h-10 w-10 rounded-full" alt="">
                                                    </div> --}}
                                                    {{-- <div>
                                                        <h4 class="text-gray-800">Andrea William</h4>
                                                        <h5 class="text-sm  text-gray-500">Designer</h5>
                                                    </div> --}}
                                                {{-- </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="flex gap-4 p-6">
                                            <div class="w-20">
                                                <hr class="border-[1px] border-blue-500 mt-4">
                                            </div>
                                            <div >
                                                <h2 class="text-xl ">{{ $article->title }}</h2>
                                                <p class="font-medium mt-2 mb-6">{{ $article->body }}</p>
                                                <a href="{{ url('/detail') }}" class="flex items-center gap-2 text-base font-medium text-blue-500 hover:text-blue-600 transition-all duration-500">
                                                    Lire plus
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                    
                                    </div>
                                </div> --}}
                            {{-- @endforeach --}} 
                       
                    
                    

                   
                    
                    <!-- end grid-cols -->
                </div><!-- end grid -->

                <div>
                    <div class="hidden md:block">
                        <div class="after:w-32 after:h-32 after:absolute after:-top-12 after:-start-12 after:-z-10 after:bg-[url('../images/dot3.svg')]"></div>
                    </div><!-- end dots -->
                    <div class="hidden md:block">
                        <div class="after:w-32 after:h-32 after:absolute after:-bottom-12  after:-end-16 after:-z-10 after:bg-[url('../images/dot3.svg')]"></div>
                    </div><!-- end dots -->
                </div>
            </div><!-- end relative -->
        </div><!-- end container -->
    </section>
    <!-- End Blog -->

  

  
    

    

    
    <!-- Start Blog-6 -->
    <section class="py-28">
        <div class="container">
            <div class="max-w-md  mx-auto text-center">
                <h2 class="text-3xl font-bold">Blog Section 6</h2>
                <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div><!-- end max-w -->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-14">
                <div class="shadow bg-white rounded-md">
                    <div class="relative">
                        <div class="absolute top-0 start-0 p-2">
                            <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 12 Aug 2022</span>
                        </div>
                        <img src="assets/images/blog-17.jpg" class="rounded-md" alt="">
                        <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                            <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h4 class="text-2xl font-semibold">Sales buildings</h4>
                                    <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="{{ url('/blog') }}" class="underline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow bg-white rounded-md">
                    <div class="relative">
                        <div class="absolute top-0 start-0 p-2">
                            <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 15 Aug 2022</span>
                        </div>
                        <img src="assets/images/blog-18.jpg" class="rounded-md" alt="">
                        <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                            <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h4 class="text-2xl font-semibold">Read buildings</h4>
                                    <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="{{ url('/blog') }}" class="underline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow bg-white rounded-md">
                    <div class="relative">
                        <div class="absolute top-0 start-0 p-2">
                            <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 22   Aug 2022</span>
                        </div>
                        <img src="assets/images/blog-19.jpg" class="rounded-md" alt="">
                        <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                            <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h4 class="text-2xl font-semibold">Buy buildings</h4>
                                    <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="{{ url('/blog') }}" class="underline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Blog-6 -->



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