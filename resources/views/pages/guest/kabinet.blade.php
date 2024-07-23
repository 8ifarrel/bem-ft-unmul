<x-guest-layout>
	<x-slot:page_title>{{ $page_title }}</x-slot:page_title>

	<main style="overflow-x: hidden">
		{{-- Figure kabinet --}}
		<x-guest.figure
			photo="{{ asset('img/figure/beranda.jpg') }}" 
			title="Kabinet Sinergi Juang"
		/>

		<div 
			class="flex justify-center items-center flex-col md:flex-row py-8 px-5 md:h-[100vh] md:px-32 md:py-12">

			<img 
				class="max-w-[300px] md:max-w-[450px] -z-20 opacity-15 absolute"
				src="{{ config('app.logo_kabinet') }}" 
				alt="{{ config('app.nama_kabinet') }}"
			/>

			{{-- Visi --}}
			<div 
				class="mb-5 md:mb-0 md:w-1/2 md:me-20">
				<div data-aos="fade-right">
					<h1 
						class="text-center md:text-end md:br-normal md:flex justify-end text-3xl font-bold md:mb-5 md:mt-0 md:text-5xl">
						Visi
					</h1>
		
					<hr
						class="mx-auto my-3 flex h-1.5 w-20 justify-end rounded border-0 bg-black md:my-5 md:me-0"
					/>

					<p
						class="text-center md:text-end md:mt-4 text-base md:text-xl">
						Menghadirkan kebebasan dalam menyampaikan aspirasi bagi seluruh Masyarakat KBMFT dan menjadikan BEM FT Unmul sebagai eksekutor yang mampu memberikan solusi serta aksi nyata bagi KBMFT.
					</p>
				</div>
			</div>

			{{-- Misi --}}
			<div class="md:w-1/2">
				<div data-aos="fade-left">
					<h1 
						class="text-center md:text-start md:br-normal text-3xl font-bold md:mb-5 md:mt-0 md:text-5xl">
						Misi
					</h1>

					<hr 
						class="mx-auto my-3 h-1.5 w-24 rounded border-0 md:mx-0 bg-black"
					/>
		
					<ol class="text-center md:text-start md:list-decimal md:ps-5 md:pt-4 text-base md:text-xl">
						<li>
							<span class="inline md:hidden">1.</span> Mengadakan kegiatan pengembangan diri secara rutin bagi anggota BEM FT Unmul
						</li>
						<li>
							<span class="inline md:hidden">2.</span> Menciptakan rasa percaya dan aman bagi masyarakat KBMFT
						</li>
						<li>
							<span class="inline md:hidden">3.</span> Terjalinya hubungan baik antar lembaga kemahasiswaan dan civitas akademika
						</li>
						<li>
							<span class="inline md:hidden">4.</span> Menjadikan BEM FT Unmul sebagai ujung tombak pergerakan Masyarakat KBMFT
						</li>
					</ol>
				</div>
			</div>
		</div>

		{{-- Jargon --}}
		<div
			class="flex flex-col items-center justify-center px-5 h-[250px] md:h-[400px] md:px-24 bg-orange">
			<p 
				class="text-center text-2xl font-bold text-white md:text-5xl">
				Bersinergi dan Berjuang <br />
				Bersama BEM FT
			</p>
		
			<div 
				class="inline-flex w-full items-center justify-center">
				<hr 
					class="my-8 h-1 w-64 rounded border-0 bg-gray-200"
				/>
		
				<div 
					class="absolute left-1/2 -translate-x-1/2 px-4 bg-orange">
					<svg
						class="h-4 w-4 text-white"
						aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg"
						fill="currentColor"
						viewBox="0 0 18 14">
						<path
							d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"
						/>
					</svg>
				</div>
			</div>
		
			<p
				class="text-center text-xl font-semibold text-white md:text-2xl">
				Kabinet Sinergi Juang
			</p>
		</div>

		{{-- Filosofi Logo --}}
		<div class="flex justify-center items-center flex-col py-8 px-5 md:px-24 md:py-12">
			{{-- <p class="text-2xl font-bold text-center">
				Ini nanti isinya filosofi logo kabinet
			</p> --}}

			<h1 
        class="md:br-normal text-2xl font-bold text-center md:mb-5 md:mt-0 md:text-5xl">
        Filosofi Logo <br> 
				Kabinet Sinergi Juang
      </h1>

      <hr 
      class="mx-auto my-3 h-1.5 w-28 rounded border-0 bg-black"
      />  

			<img class="mt-5 max-w-[360px] md:max-w-[850px]" src="{{ asset('img/filosofi-logo-kabinet.png') }}" alt="image description">
		</div>
	</main>
</x-guest-layout>