<x-guest-layout>
	<x-slot:page_title>
		{{ $page_title }}
	</x-slot:page_title>

	<main 
		class="px-5 py-10 md:mt-[68px]">
		<div 
			class="mb-5 text-center md:mb-10">
			<h1 
				class="mb-1 text-2xl font-bold md:text-4xl">
				Posko Pengaduan
			</h1>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, soluta.
			</p>

			{{-- Pesan error --}}
			@if ($errors->any())
			<div 
				class="max-w-lg flex mt-4 mx-auto items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" 
				id="alert-error"
				role="alert">
				<svg 
					class="flex-shrink-0 inline w-4 h-4 me-3"
					aria-hidden="true" 
					xmlns="http://www.w3.org/2000/svg" 
					fill="currentColor" 
					viewBox="0 0 20 20">
					<path
						d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"
					/>
				</svg>

				<span 
					class="sr-only">
					Error
				</span>

				<div>
					@foreach ($errors->all() as $error)
						<p>
							{{ $error }}
						</p>
					@endforeach
				</div>

				<button 
					class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:text-red-400 dark:hover:bg-gray-700" 
					type="button" 
					data-dismiss-target="#alert-error" 
					aria-label="Close">
					<span 
						class="sr-only">
						Close
					</span>

					<svg 
						class="w-3 h-3" 
						aria-hidden="true" 
						xmlns="http://www.w3.org/2000/svg" 
						fill="none" 
						viewBox="0 0 14 14">
						<path 
							stroke="currentColor" 
							stroke-linecap="round" 
							stroke-linejoin="round" 
							stroke-width="2" 
							d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
						/>
					</svg>
				</button>
			</div>
			@endif

			{{-- Pesan berhasil --}}
			@if(session('success'))
			<div 
				class="max-w-lg flex mt-4 mx-auto items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50" 
				id="alert-success"
				role="alert">
				<span 
					class="sr-only">
					Success
				</span>
				
				<div>
					<p>
						{{ session('success') }}
					</p>
				</div>

				<button 
					class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:text-green-400 dark:hover:bg-gray-700" 
					type="button" 
					data-dismiss-target="#alert-success" 
					aria-label="Close">
					<span
						class="sr-only">
						Close
					</span>
					
					<svg 
						class="w-3 h-3" 
						aria-hidden="true" 
						xmlns="http://www.w3.org/2000/svg" 
						fill="none" 
						viewBox="0 0 14 14">
						<path 
							stroke="currentColor" 
							stroke-linecap="round" 
							stroke-linejoin="round"
							stroke-width="2"
							d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
						/>
					</svg>
				</button>
			</div>
			@endif
		</div>

		<form
			class="mx-auto max-w-lg" 
			enctype="multipart/form-data"
			action="{{ route('guest.posko-pengaduan.store') }}"
			method="POST">
			@csrf

			{{-- Nama Lengkap --}}
			<div 
				class="relative z-0 w-full mb-5 group">
				<input  
					class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange peer"
					name="nama_lengkap"
					id="nama_lengkap" 
					type="text"
					placeholder=" "
				/>
				
				<label
					class="peer-focus:font-medium peer-first:z-50 text-sm absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" 
					for="nama_lengkap"
					aria-describedby="nama_lengkap">
					Nama Lengkap
				</label>

				<p class="text-sm text-gray-600"
					id="nama_lengkap">
					Anda boleh tidak mengisi Nama jika ingin menjaga privasi.
				</p>
			</div>

			{{-- NIM --}}
			<div class="relative z-0 mb-5 w-full">
				<input
					class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange peer"
					type="number"
					name="nim"
					id="nim"
					placeholder=" "
				/>

				<label
					class="peer-focus:font-medium peer-first:z-50 text-sm absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" 
					for="nim"
					aria-describedby="nim">
					NIM
				</label>

				<p class="text-sm text-gray-600"
					id="nim">
					Anda boleh tidak mengisi NIM jika ingin menjaga privasi.
				</p>
			</div>

			{{-- Nomor telepon --}}
			<div 
				class="relative z-0 mb-5 w-full">
				<input
					class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange peer"
					type="text"
					name="nomor_telepon"
					id="nomor_telepon"
					placeholder=" "
					required
				/>

				<label
					class="peer-focus:font-medium peer-first:z-50 absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" 
					for="nomor_telepon"
					aria-describedby="nomor_telepon">
					Nomor Telepon <span class="text-red-600">*</span>
				</label>

				<p 
					class="text-sm text-gray-600" 
					id="nomor_telepon">
					Masukkan nomor telepon yang dapat dihubungi.
				</p>
			</div>

			{{-- Program Studi --}}
			<div 
				class="mb-5">
				<label 
					class="mb-2 block text-sm font-medium text-gray-900" 
					for="prodi">
					Program Studi <span class="text-red-600">*</span>
				</label>

				<select class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm focus:border-orange focus:ring-orange"
					id="prodi"
					name="prodi"
					required>
					<option
						value="Arsitektur">
						Arsitektur
					</option>
					<option 
						value="Informatika">
						Informatika
					</option>
					<option 
						value="Sistem Informasi">
						Sistem Informasi
					</option>
					<option 
						value="Teknik Elektro">
						Teknik Elektro
					</option>
					<option 
						value="Teknik Geologi">
						Teknik Geologi
					</option>
					<option 
						value="Teknik Industri">
						Teknik Industri
					</option>
					<option 
						value="Teknik Kimia">
						Teknik Kimia
					</option>
					<option 
						value="Teknik Lingkungan">
						Teknik Lingkungan
					</option>
					<option 
						value="Teknik Pertambangan">
						Teknik Pertambangan
					</option>
					<option value="Teknik Sipil">
						Teknik Sipil
					</option>
				</select>
			</div>

			{{-- Jenis Keluhan --}}
			<div 
				class="mb-5">
				<label 
					class="mb-2 block text-sm font-medium text-gray-900"
					for="jenis_keluhan">
					Jenis Keluhan <span class="text-red-600">*</span>
				</label>

				<select class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm focus:border-orange focus:ring-orange"
 					id="jenis_keluhan"
					name="jenis_keluhan"
					required>
					<option 
						value="Fasilitas Kampus">
						Fasilitas Kampus
					</option>
					<option 
						value="UKT">
						UKT
					</option>
					<option 
						value="Administrasi">
						Administrasi
					</option>
					<option 
						value="Akademik">
						Akademik
					</option>
					<option 
						value="Lainnya">
						Lainnya
					</option>
				</select>
			</div>

			{{-- Deskripsi Keluhan --}}
			<div
				class="mb-5">
				<label
					class="mb-2 block text-sm font-medium text-gray-900"
					for="deskripsi_keluhan">
					Deskripsi Keluhan <span class="text-red-600">*</span>
				</label>

				<textarea
					class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-orange focus:ring-orange"
					id="deskripsi_keluhan"
					name="deskripsi_keluhan"
					rows="7"
					placeholder="Jelaskan keluhan Anda di sini" 
					required></textarea>
			</div>

			{{-- Berkas Pendukung --}}
			<div 
				class="mb-5">
				<label 
					class="mb-2 block text-sm font-medium text-gray-900"
					for="berkas_pendukung">
					Berkas Pendukung
				</label>

				<input 
					class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none"
					type="file"
					name="berkas_pendukung"
					id="berkas_pendukung"
					accept=".pdf, .docx, .jpg, .jpeg, .png"
					aria-describedby="berkas_pendukung_help"
				/>

				<div 
					class="text-sm text-gray-600"
					id="berkas_pendukung_help">
					Harap menyertakan berkas pendukung agar dapat memperkuat bukti pengaduan.
				</div>
			</div>

			{{-- Konfirmasi --}}
			<div class="flex items-center mb-5">
				<input 
					class="w-4 h-4 rounded text-orange bg-gray-100 border-gray-300 focus:ring-orange focus:ring-2"
					id="konfirmasi"
					type="checkbox" 
					value="" 
					onchange="toggleButton()"
				/>
				<label 
					class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" 
					for="konfirmasi">
					Maka dengan ini saya menyatakan bahwa Informasi yang saya sertakan sudah benar dan dapat dipertanggungjawabkan
				</label>
			</div>

			<button 
				class="w-full rounded-lg bg-orange opacity-70 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 sm:w-auto"
				id="submitButton"
				type="submit"
				disabled>
				Kirim
			</button>
		</form>
	</main>
</x-guest-layout>

{{-- Mengaktifkan tombol kirim --}}
<script>
	function toggleButton() {
		var checkbox = document.getElementById("konfirmasi");
		var button = document.getElementById("submitButton");

		if (checkbox.checked) {
			button.classList.remove("opacity-70");
			button.disabled = false;
		} else {
			button.classList.add("opacity-70");
			button.disabled = true;
		}
	}
</script>