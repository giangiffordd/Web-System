<?php $this->extend('puihaha/layout'); ?>

<?php $this->section('content'); ?>

<h1 class="text-3xl font-bold text-pink-600 mb-4">Contact</h1>

<?php
  $success = false;
  $errors = [];
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name === '') { $errors[] = 'Name is required.'; }
    if ($email === '' || ! filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = 'A valid email is required.'; }
    if ($message === '') { $errors[] = 'Message cannot be empty.'; }
    if (empty($errors)) { $success = true; }
  }
?>

<?php if ($success): ?>
  <div class="p-4 rounded card mb-4">
    <strong>Thank you, we'll be in touch shortly.</strong>
    <p class="text-sm text-muted">We received your message and will respond within 2 business days.</p>
  </div>
<?php endif; ?>

<?php if (! empty($errors)): ?>
  <div class="p-3 rounded border border-pink-100 bg-pink-50 mb-4">
    <ul class="list-disc pl-5">
      <?php foreach ($errors as $e): ?><li><?php echo htmlspecialchars($e, ENT_QUOTES, 'UTF-8'); ?></li><?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div>
    <p class="text-gray-700 mb-4">For wholesale or workshops, email <a href="mailto:hello@puihaha.example" class="text-pink-600">hello@puihaha.example</a> or use the form.</p>
    <div class="rounded overflow-hidden card">
      <img src="/img/tea-leaves.jpg" alt="Tea leaves" class="w-full h-56 object-cover">
    </div>
  </div>
  <div>
    <form method="post" class="space-y-4 max-w-lg">
      <div>
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="mt-1 block w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="mt-1 block w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Message</label>
        <textarea name="message" class="mt-1 block w-full border rounded px-3 py-2"><?php echo htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
      </div>
      <div>
        <button type="submit" class="px-4 py-2 bg-pink-600 text-white rounded">Send Message</button>
      </div>
    </form>
  </div>
</div>

<?php $this->endSection(); ?>
