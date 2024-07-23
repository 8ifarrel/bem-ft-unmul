<x-admin-layout>
	<x-slot:page_title>{{ $page_title }}</x-slot:page_title>

  <div 
		class="p-4 sm:ml-64">
		<div 
			class="p-4 mt-14">
			<div>
				<h1 
					class="font-semibold text-2xl md:text-3xl">
					{{ $page_title }}
				</h1>

				<main 
					class="mt-5">
					<div 
						class="lg:flex">
						{{-- Detail laporan --}}
						<div class="lg:w-1/2 lg:me-5">
							{{-- Nama Lengkap --}}
							<div
								class="lg:mb-3 lg:flex">
								<div 
									class="mb-3 lg:mb-0 lg:w-[70%] lg:me-5">
									<label 
										class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
										for="nama_lengkap">
										Nama Lengkap
									</label>

									<input	
										class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
										type="text" 
										id="nama_lengkap" 
										value="{{ $posko_pengaduan->nama_lengkap }}"
										disabled
										readonly
									/>
								</div>

								{{-- NIM --}}
								<div 
									class="mb-3 lg:mb-0 lg:w-[30%]">
									<label 
										class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
										for="nim">
										NIM
									</label>
	
									<input	
										class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
										type="text" 
										id="nim" 
										value="{{ $posko_pengaduan->nim }}"
										disabled
										readonly
									/>
								</div>
							</div>

							<div 
								class="lg:mb-3 lg:flex">
								{{-- Program studi --}}
								<div 
									class="mb-3 lg:mb-0 lg:w-1/2 lg:me-5">
									<label 
										class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
										for="prodi">
										Program Studi
									</label>
	
									<input	
										class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
										type="text" 
										id="prodi" 
										value="{{ $posko_pengaduan->prodi }}"
										disabled
										readonly
									/>
								</div>

								{{-- Nomor telepon --}}
								<div class="mb-3 lg:mb-0 lg:w-1/2">
									<label 
										class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
										for="nomor_telepon">
										Nomor telepon
									</label>
	
									<input	
										class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
										type="text" 
										id="nomor_telepon" 
										value="{{ $posko_pengaduan->nomor_telepon }}"
										disabled
										readonly
									/>
								</div>
							</div>

							<div
								class="lg:mb-3 lg:flex">
								{{-- Jenis keluhan --}}
								<div 
									class="mb-3 lg:mb-0 lg:w-1/2 lg:me-5">
									<label 
										class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
										for="jenis_keluhan">
										Jenis keluhan
									</label>

									<input	
										class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
										type="text" 
										id="jenis_keluhan" 
										value="{{ $posko_pengaduan->jenis_keluhan }}"
										disabled
										readonly
									/>
								</div>

								{{-- Diajukan pada --}}
								<div 
									class="mb-3 lg:mb-0 lg:w-1/2">
									<label 
										class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
										for="created_at">
										Diajukan pada
									</label>

									<input	
										class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
										type="text" 
										id="created_at" 
										value="{{ $posko_pengaduan->created_at->translatedFormat('l, d F Y (H:i)') }}"
										disabled
										readonly
									/>
								</div>
							</div>

							{{-- Berkas pendukung --}}
							<div class="mb-3">
								<p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
									Berkas pendukung
								</p>
								
								@if ($posko_pengaduan->berkas_pendukung)
									<a 
										class="w-full text-gray-900 bg-gray-50 border border-gray-300 font-medium rounded-lg text-sm px-3 py-2.5 inline-flex items-center"
										type="button"
										href="{{ Storage::url('pengaduan/' . $posko_pengaduan->berkas_pendukung) }}"
										target="_blank">
										<i class="fa-solid fa-file fa-lg me-2"></i> Tekan untuk melihat berkas pendukung
									</a>
								@else
									<span
										class="w-full text-gray-900 bg-gray-50 border border-gray-300 font-medium rounded-lg text-sm px-3 py-2.5 inline-flex items-center">
										<i class="fa-solid fa-file-circle-xmark fa-lg me-2"></i> Tidak ada berkas pendukung
									</span>
								@endif

							</div>

							{{-- Deskripsi keluhan --}}
							<div class="mb-3 lg:mb-0">
								<label 
									class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
									for="deskripsi_keluhan">
									Deskripsi keluhan
								</label>

								<textarea 
									class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
									id="deskripsi_keluhan" 
									rows="5" 
									disabled
									readonly>{{ $posko_pengaduan->deskripsi_keluhan }}</textarea>
							</div>
						</div>

						{{-- Kelola laporan --}}
						<form class="lg:w-1/2" action="{{ route('admin.posko-pengaduan.update', $posko_pengaduan->uuid) }}" method="POST">
							@csrf
							@method('PUT')
							<div class="lg:h-full lg:flex lg:flex-col lg:justify-between">
								<div>
									<div 
										class="lg:mb-3 lg:flex">
										{{-- Terakhir diproses pada --}}
										<div 
											class="mb-3 lg:mb-0 lg:w-[60%] lg:me-5">
											<label 
												class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
												for="updated_at">
												Terakhir diproses pada
											</label>	

											<input	
												class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5" 
												type="text" 
												id="updated_at" 
												value="{{ ($posko_pengaduan->updated_at) ? $posko_pengaduan->updated_at->translatedFormat('l, d F Y (H:i)') : 'Belum pernah diproses' }}"
												disabled
												readonly
											/>
										</div>

										{{-- Staus --}}
										<div 
											class="mb-3 lg:mb-0 lg:w-[40%] lg:me-5">
											<label 
												class="mb-2 block text-sm font-medium text-gray-900" 
												for="status">
												Status <span class="text-red-600">*</span>
											</label>
							
											<select class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:border-orange focus:ring-orange"
												id="status"
												name="status"
												required>
												<option 
													value="Belum diproses" 
													{{ $posko_pengaduan->status === 'Belum diproses' ? 'selected' : '' }}>
													Belum diproses
												</option>
												<option 
													value="Sedang diproses" 
													{{ $posko_pengaduan->status === 'Sedang diproses' ? 'selected' : '' }}>
													Sedang diproses
												</option>
												<option 
													value="Selesai" 
													{{ $posko_pengaduan->status === 'Selesai' ? 'selected' : '' }}>
													Selesai
												</option>
											</select>
										</div>
									</div>

									{{-- Catatan dari BEM --}}
									<div class="mb-5 lg:mb-0">
										<label 
											class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
											for="catatan_dari_bem">
											Catatan BEM <span class="text-red-600">*</span>
										</label>


										<input id="catatan_dari_bem" type="hidden" name="catatan_dari_bem">
										<trix-editor input="catatan_dari_bem"></trix-editor>
									</div>
								</div>

								{{-- Tombol kirim --}}
								<div>
									<button 
										class="w-full rounded-lg bg-orange px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 sm:w-auto"
										type="submit">
										Kirim
									</button>
								</div>
							</div>
						</form>
					</div>
				</main>
			</div>
		</div>
	</div>
</x-admin-layout>

<style>
	trix-toolbar .trix-button-group--file-tools {
		display: none;
	}

	trix-toolbar .trix-button--icon-increase-nesting-level {
		display: none;
	}

	trix-toolbar .trix-button--icon-decrease-nesting-level {
		display: none;
	}

	trix-toolbar .trix-button--icon-quote {
		display: none;
	}

	trix-toolbar .trix-button--icon-code {
		display: none;
	}

	trix-editor {
  	height: 270px !important; 
  	overflow-y: auto;
	}

	/* 
	 * Special thanks to Muhammad Jamil
	 * Resolving problem when using Trix rich editor with Tailwind
	 * https://dev.to/fanreza/resolving-problem-when-using-trix-rich-editor-with-tailwind-13ca
	 *
	 */

	trix-editor h1 {
    font-size: 1.25rem !important;
    line-height: 1.25rem !important;
    margin-bottom: 1rem;
    font-weight: 600;
	}

	trix-editor a:not(.no-underline) {
    text-decoration: underline;
	}

	trix-editor a:visited {
    color: blue;
	}

	trix-editor ul { 
		list-style-type: disc !important; margin-left: 1rem !important; 
	}
	trix-editor ol { 
		list-style-type: decimal !important; margin-left: 1rem !important; 
	}
</style>