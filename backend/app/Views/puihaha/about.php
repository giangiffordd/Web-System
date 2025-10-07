<?php $this->extend('puihaha/layout'); ?>

<?php $this->section('content'); ?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
	<div>
		<h1 class="text-3xl font-bold text-pink-600 mb-4">About Puihaha</h1>
		<p class="text-gray-700 mb-4">Puihaha started as a love letter to delicate flavors and mindful moments. We source small-batch teas, collaborate with local growers, and host intimate workshops that reconnect people with simple rituals.</p>
		<p class="text-gray-700 mb-4">Our mission is to design approachable experiences for anyone curious about tea — whether you want a floral afternoon blend or an immersive matcha session.</p>
		<h3 class="font-semibold mt-4">Our Values</h3>
		<ul class="list-disc pl-5 text-gray-700 mt-2">
			<li>Quality over quantity — small batch & thoughtful sourcing</li>
			<li>Community — workshops & collaborations</li>
			<li>Sustainability — respectful packaging and partnerships</li>
		</ul>
	</div>
	<div class="space-y-4">
		<div class="rounded overflow-hidden card">
			<img src="/img/tea-ceremony.jpg" alt="Tea Ceremony" class="w-full h-56 object-cover">
		</div>
		<div class="rounded overflow-hidden card">
			<img src="/img/tea-shop.jpg" alt="Tea Shop" class="w-full h-40 object-cover">
		</div>
	</div>
</div>

<section class="mt-8">
	<h3 class="text-xl font-semibold mb-3">Meet the Team</h3>
	<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
		<div class="p-4 rounded card text-center">
			<div class="w-20 h-20 rounded-full mx-auto bg-pink-50 mb-3 flex items-center justify-center">A</div>
			<div class="font-semibold">Ana</div>
			<div class="text-sm text-muted">Founder & Taster</div>
		</div>
		<div class="p-4 rounded card text-center">
			<div class="w-20 h-20 rounded-full mx-auto bg-pink-50 mb-3 flex items-center justify-center">K</div>
			<div class="font-semibold">Kenji</div>
			<div class="text-sm text-muted">Workshop Lead</div>
		</div>
		<div class="p-4 rounded card text-center">
			<div class="w-20 h-20 rounded-full mx-auto bg-pink-50 mb-3 flex items-center justify-center">M</div>
			<div class="font-semibold">Maya</div>
			<div class="text-sm text-muted">Operations</div>
		</div>
	</div>
</section>

<?php $this->endSection(); ?>
