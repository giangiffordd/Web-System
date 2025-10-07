<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Puihaha - Tea</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="/css/puihaha.css" rel="stylesheet">
</head>
<body class="font-sans leading-relaxed text-gray-800">
  <header class="bg-gradient-to-r from-pink-50 to-yellow-50 border-b border-pink-100">
    <div class="max-w-5xl mx-auto px-6 py-6 flex items-center justify-between">
      <a href="/" class="flex items-center space-x-3">
        <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-sm">
          <!-- tea leaf icon -->
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M3 21c6-6 12-6 18-3-3-6-3-12 3-18C15 3 9 3 3 9" stroke="#f472b6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <span class="brand text-2xl">Puihaha</span>
      </a>
      <nav class="space-x-6 text-sm">
        <a href="/" class="nav-link">Home</a>
        <a href="/services" class="nav-link">Services</a>
        <a href="/about" class="nav-link">About</a>
        <a href="/contact" class="nav-link">Contact</a>
      </nav>
    </div>
  </header>

  <main class="max-w-4xl mx-auto px-6 py-10">
    <?= $this->renderSection('content') ?>
  </main>

  <footer class="border-t mt-12 py-6 text-center text-sm text-gray-500">
    © Puihaha - Tea · Crafted with pastel vibes
  </footer>
</body>
</html>
