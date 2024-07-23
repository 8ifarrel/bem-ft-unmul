<x-guest-layout>
	<x-slot:page_title>{{ $page_title }}</x-slot:page_title>

	<main style="overflow-x: hidden">
		{{-- Figure selamat datang --}}
		<x-guest.figure
			photo="{{ asset('img/figure/beranda.jpg') }}" 
			title="Selamat Datang di Website"
		/>

		{{-- Sambutan Ketua --}}
		<x-guest.left-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/ketua.png') }}"
			photoAlt="Ketua"
			title="Sambutan Ketua"
			name="Yusuf"
			text="Assalamualaikum Wr. Wb. Hidup seperti buku yang akan terisi dengan catatan yang telah kita lalui dan akan menjadi Sejarah. Isi buku itu akan berguna dimasa depan, oleh karena itu isilah buku itu dengan catatan yang baik dan yang memiliki kebermanfaatan baik bagi diri sendiri maupun orang lain."
		/>

		{{-- Jargon Fakultas Teknik --}}
		<x-guest.jargon-teknik />

		{{-- BEM FT Unmul --}}
		<div
			class="flex flex-col-reverse place-content-between px-5 py-8 md:h-[100vh] md:flex-row md:justify-evenly md:px-24 md:py-12 bg-white">
			<div 
				class="mx-auto text-center md:my-auto md:mt-auto md:w-[55%] md:text-end" 
				data-aos="fade-left">
				<h1 
					class="md:br-normal text-3xl font-bold md:mb-5 md:mt-0 md:text-5xl">
					{{ config('app.nama_singkatan_organisasi') }}
				</h1>

				<hr
					class="mx-auto my-3 flex h-1.5 w-28 justify-end rounded border-0 bg-black md:my-5 md:me-0"
				/>

				<div 
					class="py-4 md:hidden">
					<img 
						class="mx-auto"
						width="250px"
						src="{{ config('app.logo_organisasi') }}"
						alt="{{ config('app.nama_organisasi') }}"
					/>
				</div>

				<p 
					class="md:mt-4 text-base md:text-xl">
					Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Mulawarman (BEM FT Unmul) adalah lembaga kemahasiswaan yang bergerak sebagai lembaga eksekutif di lingkungan Universitas Mulawarman terkhususnya di Fakultas Teknik Universitas Mulawarman. BEM FT Unmul hadir sebagai jembatan bagi mahasiswa ke birokrat dan sebaliknya serta ujung tombak setiap pergerakan yang ada di KBMFT. BEM FT Unmul juga terfokus kepada kesejahteraan masyarakat KBMFT dengan mempertimbangkan rasa kekeluargaan dan berlandaskan dengan AD/ART KBMFT. <br> 
					~Yusuf LG17
				</p>
			</div>

			<div
				class="my-auto hidden md:block md:w-[45%]"
				data-aos="fade-left">
				<img class="mx-auto" 
					src="{{ config('app.logo_organisasi') }}"
					width="400px"
					alt="{{ config('app.nama_organisasi') }}"
				/>
			</div>
		</div>

		{{-- Kabinet Sinergi Juang --}}
		<x-guest.left-aligned-component
			bgColor="bg-neutral-200"
			photo="{{ config('app.logo_kabinet') }}"
			photoAlt="Kabinet Sinergi Juang"
			photoWidth="400px"
			title="Kabinet Sinergi Juang"
			text="BEM FT periode 2024 memiliki nama Kabinet yakni “SINERGI JUANG” dengan tagline “Bersinergi dan Berjuang Bersama BEM FT” untuk menghadirkan harmonisasi di lingkungan KBMFT dan kebermanfaatan yang lebih besar maka diperlukan sinergi serta perjuangan bagi seluruh elemen demi KBMFT lebih baik."
			buttonText="Pelajari Selengkapnya"
			buttonHref="{{ route('guest.kabinet') }}"
		/>

		{{-- Posko Pengaduan --}}
		<x-guest.center-aligned-component
			bgColor="bg-white"
			title="Posko Pengaduan"
			text="Posko Pengaduan adalah program kerja Departemen Adkesma Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Mulawarman yang bertujuan untuk mendampingi dan mengawal setiap isu dan permasalahan yang ada di Fakultas Teknik. Kami hadir untuk memberikan bantuan dan dukungan kepada mahasiswa dalam menghadapi berbagai kebijakan dekanat, terutama yang memiliki dampak langsung pada kesejahteraan mahasiswa. Selain itu, kami juga aktif dalam mengawal kebijakan terkait keringanan Uang Kuliah Tunggal (UKT) setiap semester, guna memastikan terciptanya lingkungan belajar yang adil dan mendukung bagi seluruh mahasiswa."
			buttonText="Ajukan Pengaduan"
			buttonHref="{{ route('guest.posko-pengaduan.create') }}"
		/>
	</main>
</x-guest-layout>