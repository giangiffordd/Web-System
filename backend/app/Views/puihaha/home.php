<?php $this->extend('puihaha/layout'); ?>

<?php $this->section('content'); ?>

<section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-8">
  <div>
    <h1 class="text-5xl font-bold text-pink-600 mb-4 brand">Welcome to Puihaha</h1>
    <p class="text-lg text-gray-700 mb-6">We craft delicate tea experiences — from floral brews to mindful matcha ceremonies. Join our workshops or order curated blends for your shop or event.</p>
    <div class="mt-4 flex space-x-3">
      <a href="/services" class="px-5 py-2 rounded-full bg-pink-600 text-white shadow-sm hover:opacity-95">View Teas</a>
      <a href="/contact" class="px-5 py-2 rounded-full border border-pink-200 text-pink-600">Contact Us</a>
    </div>
  </div>
  <div>
    <div class="rounded-lg overflow-hidden shadow card">
      <img src="/img/pastel-jasmine.png" alt="Pastel Jasmine" class="w-full h-64 object-cover">
    </div>
  </div>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <div class="p-4 rounded card">
    <img src="/img/pastel-jasmine.png" class="w-full h-36 object-cover rounded mb-3" alt="Pastel Jasmine">
    <h3 class="font-semibold">Curated Blends</h3>
    <p class="text-sm text-gray-600">Seasonal selections crafted with floral and earthy notes.</p>
  </div>
  <div class="p-4 rounded card">
    <img src="/img/cloudy-matcha.png" class="w-full h-36 object-cover rounded mb-3" alt="Cloudy Matcha">
    <h3 class="font-semibold">Workshops</h3>
    <p class="text-sm text-gray-600">From beginners to pros — learn whisking, tasting, and pairing.</p>
  </div>
  <div class="p-4 rounded card">
    <img src="/img/rose-oolong.png" class="w-full h-36 object-cover rounded mb-3" alt="Rose Petal Oolong">
    <h3 class="font-semibold">Bespoke Events</h3>
    <p class="text-sm text-gray-600">Private tastings, retail pop-ups, and collaborations.</p>
  </div>
</section>

<?php $this->endSection(); ?>