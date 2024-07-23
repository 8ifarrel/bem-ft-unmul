<footer class="bg-white text-black" style="box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1)">
	<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
		<div class="md:flex md:justify-between">
			<div class="mb-5 md:mb-0">
				<a href="{{ route('guest.beranda') }}" class="flex items-center">
					<img src="{{ config('app.logo_organisasi') }}" class="me-3 h-8" alt="{{ config('app.nama_organisasi') }}" />
					<span class="self-center whitespace-nowrap text-2xl font-semibold">
						{{ config('app.nama_singkatan_organisasi') }}
					</span>
				</a>
			</div>

			<div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
				<div>
					<h2 class="mb-5 text-sm font-bold uppercase text-gray-900">
						LIHAT
					</h2>
					<ul class="font-medium text-gray-500 dark:text-gray-400">
						<li class="mb-4">
							<a href="{{ route('guest.struktur-organisasi') }}" class="hover:underline">Struktur Organisasi</a>
						</li>
						<li class="mb-4">
							<a href="{{ route('guest.posko-pengaduan.create') }}" class="hover:unde rline">Posko Pengaduan</a>
						</li>
						<li>
							<a href="{{ route('guest.kabinet') }}" class="hover:underline">Kabinet Sinergi Juang</a>
						</li>
					</ul>
				</div>
				<div>
					<h2 class="mb-5 text-sm font-bold uppercase text-gray-900">
						Lainnya
					</h2>
					<ul class="font-medium text-gray-500 dark:text-gray-400">
						<li class="mb-4">
							<a href="https://unmul.ac.id/" class="hover:underline">Universitas Mulawarman</a>
						</li>
						<li class="mb-4">
							<a href="https://ft.unmul.ac.id/" class="hover:underline">Fakultas Teknik</a>
						</li>
						<li>
							<a href="https://unmul.ac.id/content/kalender-akademik" class="hover:underline">Kalender Akademik</a>
						</li>
					</ul>
				</div>

				<div class="mb-5 md:mb-0">
					<h2 class="mb-5 text-sm font-bold uppercase text-gray-900">
						Lokasi
					</h2>
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5346.137873915371!2d117.15380981351072!3d-0.4691051229819804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f4cd30823c3%3A0x22ec6237d9bbdba1!2sFaculty%20of%20Engineering%2C%20Mulawarman%20University!5e0!3m2!1sen!2sid!4v1714793014440!5m2!1sen!2sid"
						width="300" height="150" style="border: 0" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
		<hr class="my-6 border-gray-200 sm:mx-auto lg:my-8 dark:border-gray-700" />
		<div class="sm:flex sm:items-center sm:justify-between">
			<div class="sm:hidden mt-4 mb-4 flex sm:mt-0 sm:justify-center">
				<span class="text-sm font-semibold text-gray-500 sm:text-center dark:text-gray-400 me-1 my-auto">
					Ikuti kami di: 
				</span>
				<a href="https://www.instagram.com/bemftunmul/" class="text-gray-500 hover:text-gray-900">
					<i class="fa-brands fa-instagram"></i>
					<span class="sr-only">Instagram page</span>
				</a>
			</div>

			<span 
				class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
				© 2024 {{ config('app.nama_organisasi') }} - Dibuat oleh <a href="https://instagram.com/8ifarrel/" class="hover:underline">Muhammad Farrel Sirah</a> 
			</span>

			<div class="hidden sm:block mt-4 sm:mt-0 sm:justify-center">
				<span class="text-sm font-semibold text-gray-500 sm:text-center dark:text-gray-400 me-1 my-auto">
					Ikuti kami di: 
				</span>
				<a href="https://www.instagram.com/bemftunmul/" class="text-gray-500 hover:text-gray-900">
					<i class="fa-brands fa-instagram"></i>
					<span class="sr-only">Instagram page</span>
				</a>
			</div>
		</div>
	</div>
</footer>