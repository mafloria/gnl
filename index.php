<!DOCTYPE html>
<html>
  <head>
    <!-- load and instantiate ScrollReveal first -->
    <script src="assets/js/libs/scrollreveal.min.js"></script>
    <script>
      window.sr = ScrollReveal();

      // Add class to <html> if ScrollReveal is supported
      // Note: this method is deprecated, and only works in version 3
      if (sr.isSupported()) {
        document.documentElement.classList.add('sr');
      }

    </script>

    <style>

      /* Ensure elements load hidden before ScrollReveal runs */
      .sr .fooReveal { visibility: hidden; }

      /* add perspective to your container */
      .fooContainer { perspective: 800px; }

    </style>

  </head>
  <body>

    <div class="fooContainer">
      <div class="fooReveal"> Foo </div>
      <div class="fooReveal"> Foo </div>
      <div class="fooReveal"> Foo </div>
    </div>

  <!-- make reveal calls last -->
    <script>
      // use rotation in reveal configuration
      sr.reveal('.fooReveal', { container: '.fooContainer', rotate: {x: 65} });
    </script>

  </body>
</html>