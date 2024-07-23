<x-guest-layout>
	<x-slot:page_title>{{ $page_title }}</x-slot:page_title>

	<main style="overflow-x: hidden">
		{{-- Salam pembuka --}}
		<x-guest.figure 
			photo="{{ asset('img/figure/struktur-organisasi.jpg') }}"
			title="Struktur Organisasi"
		/>

		{{-- Struktur Organisasi --}}
		<div class="flex flex-col items-center justify-center px-5 py-8 md:py-12">
			<h1 class="mb-8 text-3xl font-bold md:mb-12 md:text-5xl text-center">
				Struktur Organisasi
			</h1>

			<img class="md:h-[500px]" src="{{ asset('img/struktur-organisasi.png') }}" alt="Struktur Organisasi"/>
		</div>

		{{-- Ketua --}}
		<x-guest.left-aligned-person
			bgColor="bg-neutral-200"
			photo="{{ asset('img/bph/ketua.png') }}"
			photoAlt="Ketua"
			title="Ketua"
			name="Yusuf"
			text="Ketua bertanggung jawab terhadap seluruh keputusan dan tindakan BEM FT Unmul dan KBMFT. Ketua juga bertanggung jawab penuh terhadap Sekretaris, Bendahara, departemen Adkesma, KPSDM, dan biro ART dan KWU setrta KBMFT."
		/>

		{{-- Wakil Ketua --}}
		<x-guest.right-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/wakil-ketua.png') }}"
			photoAlt="Wakil Ketua"
			title="Wakil Ketua"
			name="Bramantyo Ardi Harimurti Wibisono"
			text="Wakil ketua bertugas membantu ketua dalam menjalankan kepengurusan selama satu periode kepengurusan dan wakil ketua bertanggungjawab terhadap ketua, departemen Humas, Kasasi, Pemas, Medifo, serta BEM FT Unmul dan KBMFT."
		/>

		{{-- Sekretaris Umum --}}
		<x-guest.left-aligned-person
			bgColor="bg-neutral-200"
			photo="{{ asset('img/bph/sekretaris-umum.png') }}"
			photoAlt="Sekretaris Umum"
			title="Sekretaris Umum"
			name="Ade Meyliana"
			text="Sekretaris umum adalah bagian yang bertanggung jawab atas pelaksanaan tugas-tugas  administratif. Sekretaris mengelola permintaan surat masuk dan keluar, mengurus database  BEM FT Unmul, timeline BEM FT Unmul, dan pendampingan sekertaris lembaga  mahasiswa KBMFT. Selain itu sekretaris juga bertanggungjawab penuh terhadap Ketua  umum, wakil ketua umum dan BEM FT Unmul, serta bertanggungjawab terhadap KBMFT"
		/>

		{{-- Bendahara Umum --}}
		<x-guest.right-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/bendahara-umum.png') }}"
			photoAlt="Bendahara Umum"
			title="Bendahara Umum"
			name="Qodriatus Sya'diyana"
			text="Bendahara Umum merupakan unsur pelasanaan yang memiliki tugas mengatur dan menjalankan seluruh keuangan yang berkaitan dengan BEM FT UNMUL, berada dibawah dan bertanggung jawab kepada ketua umum. Adapun tugas dari Bendahara Umum adalah mengelola uang inventaris milk BEM FT UNMUL, mencatat transaksi keuangan, membuat jurnal atau laporan keuangan dalam setiap transaksi, mengontrol pengeluaran dan pemasukan keuangan, mengawasi dan memastikan seluruh keuangan yang berkaitan dengan BEM FT UNMUL berjalan dengan baik."
		/>

		{{-- Biro ART --}}
		<x-guest.left-aligned-person
			bgColor="bg-neutral-200"
			photo="{{ asset('img/bph/biro-art.png') }}"
			photoAlt="Biro ART"
			title="Biro ART"
			name="Noorfhadilah Putri"
			text="Biro Administrasi Rumah Tangga atau yang disingkat Biro ART adalah Biro yang berperan dalam manajemen administrasi kabinet dan kesekretariatan. Memastikan keteraturan adminitrasi dan memenuhi fasilitas di kesekretariatan sehingga terciptanya lingkungan kerja yang nyaman."
		/>

		{{-- Biro KWU --}}
		<x-guest.right-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/biro-kwu.png') }}"
			photoAlt="Biro KWU"
			title="Biro KWU"
			name="Yunani Andini"
			text="Biro Kewirausahaan atau yang disingkat Biro KWU adalah biro yang berperan dibawa naungan bendahara dan memiliki fungsi untuk menjalin kerjasama maupun usaha yang dapat meningkatkan pendapatan organisasi untuk keperluan organisasi itu sendiri."
		/>

		{{-- Departemen KPSDM --}}
		<x-guest.left-aligned-person
			bgColor="bg-neutral-200"
			photo="{{ asset('img/bph/departemen-kpsdm.png') }}"
			photoAlt="Departemen KPSDM"
			title="Departemen KPSDM"
			name="Achmad Nezar Sulaiman"
			text="Departemen Kaderisasi Pengembangan Sumber Daya Mahasiswa yang disebut KPSDM adalahdepartemen yang berperan dalam pengembangan potensi serta optimalisasi Sumber Daya Mahasiswa dalam kepengurusan serta melakukan kaderisasi terhadap sumber daya mahasiswa di dalam kepengurusan."
		/>

		{{-- Departemen Adkesma --}}
		<x-guest.right-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/departemen-adkesma.png') }}"
			photoAlt="Departemen Adkesma"
			title="Departemen Adkesma"
			name="Muhammad Faris Asdin Nuur Fasya"
			text="Departemen Advokasi dan Kesejahteraan Mahasiswa (Adkesma) merupakan departemen yang hadir untuk menjembatani dan melayani kebutuhan mahasiswa dengan para pemangku kebijakan. Adkesma berusaha melayani stakeholder, mengawal setiap isu dengan analisis untuk memahami setiap permasalahan yang ada dalam menentukan keberpihakan BEM FT UNMUL. Adkesma melakukan pelayanan dan pengadvokasian terhadap permasalahanpermasalahan yang dialami KBMFT UNMUL terkait akademik, hubungan sosial, sarana prasarana, serta isu-isu kemahasiswaan lainnya guna meningkatkan kesejahteraan KBMFT UNMUL. Dalam lari yang dibeli, Departemen Advokasi memerlukan kemampuan negosiasi dan memicu propaganda untuk menarik animo dan kesadaran mahasiswa."
		/>

		{{-- Departemen Humas --}}
		<x-guest.left-aligned-person
			bgColor="bg-neutral-200"
			photo="{{ asset('img/bph/departemen-humas.png') }}"
			photoAlt="Departemen Humas"
			title="Departemen Humas"
			name="Muhammad Taufan Ridho"
			text="Departemen Hubungan Masyarakat atau disebut HUMAS merupakan departemen yang berperan untuk mewujudkan Tri Dharma perguruan tinggi yaitu pengabdian kepada masyarakat dengan meningkatkan rasa kepedulian dan kepekaan mahasiswa terhadap permasalahan yang terjadi di masyarakat. Departemen yang membangun komunikasi aktif, membangun jaringan internal dan eksternal memperkuat berbagai elemen KBMFT UNMUL demi terciptanya citra baik untuk kejayaan Teknik."
		/>

		{{-- Departemen Adkesma --}}
		<x-guest.right-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/departemen-kasasi.png') }}"
			photoAlt="Departemen Kasasi"
			title="Departemen Kasasi"
			name="Ryan Darmawan"
			text="Departemen Kajian Strategis adalah salah satu departemen yang dinaungi oleh Badan EksekutifMahasiswa Fakultas Teknik Universitas Mulawarman Tahun 2023. Departemen Kasasi merupakan sebuah departemen yang berperan sebagai motor penggerak dalam pergerakan mahasiswa Fakultas Teknik. Departemen ini berorientasi pada kajian yang kreatif dalam membumikan isu,serta responsifterhadap berbagai gerakan dan tindakan nyata sebagai bentuk kontribusi serta penyikapan terhadap isu-isu sosial dan politik yang berkembang pada masyarakat., nasional, maupun internasional"
		/>

		{{-- Departemen Pemas --}}
		<x-guest.left-aligned-person
			bgColor="bg-neutral-200"
			photo="{{ asset('img/bph/departemen-pemas.png') }}"
			photoAlt="Departemen Pemas"
			title="Departemen Pemas"	
			name="Muhammad Rayah M"
			text="Departemen Pengabdian Masyarakat atau yang dikenal sebagai Departemen Pemas merupakan departemen yang baru ditambahkan pada kepengurusan BEM FT periode 2024. Departemen Pemas merupakan departemen yang bergerak dibidang kemasyarakatan, melalui Departemen Pemas programkerja yang akan dilakukan bertumpu pada satu output parameter keberhasilan yaitu dicapainya KBMFTyang berguna bagi masyarakat. Seperti KBMFT yang peduli terhadap tanggap bencana, BEM FT mengajar, hingga membantu masyarakat di desa yang memerlukan bantuan penuh terhadap aktivitas di desa yang merupakan salah satu program kerja unggulan yang diharapkan tercapai di kepengurusan BEM FT periode 2024."
		/>

		{{-- Departemen Medifo --}}
		<x-guest.right-aligned-person
			bgColor="bg-white"
			photo="{{ asset('img/bph/departemen-medifo.png') }}"
			photoAlt="Departemen Medifo"
			title="Departemen Medifo"
			name="Dhiva Afianto"
			text="Departemen Media dan Informasi merupakan sebuah Departemen yang memiliki tugas pokok serta fungsi dengan tujuan memberikan informasi yang dibutuhkan oleh mahasiswa maupun pada masyarakat dari hasil komunikasi yang dilakukan terhadap pihak terkait dengan sistem publikasi yang mengutamakan kepentingan masyarakat KBMFT. Departemen MEDIFO juga memiliki tugas dalam mempublikasikan setiap kegiatan yang dilakukan oleh BEM FT Universitas Mulawarman dan informasi-informasi akademik serta pemberian apresiasi kepada mahasiswa Fakultas Teknik."
		/>
	</main>
</x-guest-layout>