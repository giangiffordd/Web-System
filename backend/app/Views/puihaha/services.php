<?php $this->extend('puihaha/layout'); ?>

<?php $this->section('content'); ?>

<h1 class="text-3xl font-bold text-pink-600 mb-4">Our Tea Selection</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <?php if (! empty($teas) && is_array($teas)): ?>
    <?php foreach ($teas as $tea): ?>
  <div class="p-4 rounded card">
        <?php
          $imgName = $tea['img'] ?? '';
          $pngVariant = $imgName ? preg_replace('/\.[^.]+$/', '.png', $imgName) : '';
          $pngPath = $pngVariant ? FCPATH . 'img/' . $pngVariant : '';
          $origPath = $imgName ? FCPATH . 'img/' . $imgName : '';

          if ($pngVariant && file_exists($pngPath)):
        ?>
          <img src="/img/<?php echo htmlspecialchars($pngVariant, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($tea['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-32 object-cover rounded mb-2">
        <?php elseif (! empty($imgName) && file_exists($origPath)): ?>
          <img src="/img/<?php echo htmlspecialchars($imgName, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($tea['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-32 object-cover rounded mb-2">
        <?php else: ?>
          <!-- Inline pastel SVG placeholder when image missing -->
          <div class="w-full h-32 rounded mb-2 bg-pink-50 flex items-center justify-center">
            <svg width="160" height="96" viewBox="0 0 160 96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <rect width="160" height="96" rx="8" fill="#fff5f7"/>
              <g fill="#fbcfe8" fill-opacity="0.9">
                <circle cx="40" cy="48" r="18"/>
                <circle cx="80" cy="36" r="12"/>
                <circle cx="120" cy="52" r="10"/>
              </g>
            </svg>
          </div>
        <?php endif; ?>
        <div class="mt-2">
          <h3 class="font-semibold text-lg"><?php echo htmlspecialchars($tea['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h3>
          <p class="text-sm text-gray-600 mt-1"><?php echo htmlspecialchars($tea['desc'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="mt-3 flex items-center justify-between">
            <span class="text-sm text-pink-600 font-medium">From $8</span>
            <a href="/contact" class="text-sm px-3 py-1 bg-pink-600 text-white rounded">Order</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p class="text-gray-600">No teas found. Run the migrations and seeders to populate sample data.</p>
  <?php endif; ?>
</div>

<?php $this->endSection(); ?>
