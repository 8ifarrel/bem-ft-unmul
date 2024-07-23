<x-admin-layout>
	<x-slot:page_title>{{ $page_title }}</x-slot:page_title>

	<div class="p-4 sm:ml-64">
		<div class="p-4 mt-14">
			<div>
				<h1 class="font-semibold text-2xl md:text-3xl">
					{{ $page_title }}
				</h1>

				<main class="mt-5">
					{{-- Posko Pengaduan --}}
					<div
						class="w-full p-4 rounded-lg shadow-xl mt-5 sm:p-8">
						<h5 
							class="mb-2 text-2xl text-center md:text-start md:text-3xl font-bold text-gray-900">
							Statistik Posko Pengaduan
						</h5>

						<div 
							class="p-4 bg-white rounded-lg md:p-8" 
							id="stats" 
							role="tabpanel" 
							aria-labelledby="stats-tab">
							<dl 
								class="grid max-w-screen-xl grid-cols-1 gap-8 mx-auto text-gray-900 sm:grid-cols-2 xl:grid-cols-4">
								{{-- Total laporan masuk --}}
								<div 
									class="text-center block max-w-sm p-3 bg-white rounded-lg shadow-lg border-s-4 border-white border-l-orange  hover:bg-gray-100">
									<h5
										class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
										{{ $total_laporan_count }}
									</h5>
									<p 
										class="font-normal text-gray-700 dark:text-gray-400">
										Jumlah Laporan Masuk
									</p>
								</div>

								{{-- Laporan belum diproses --}}
								<div class="text-center block max-w-sm p-3 bg-white rounded-lg shadow-lg border-s-4 border-white border-l-neutral-500  hover:bg-gray-100">
									<h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $laporan_belum_diproses_count }}</h5>
									<p class="font-normal text-gray-700 dark:text-gray-400">Laporan belum diproses</p>
								</div>

								{{-- Laporan belum diproses --}}
								<div class="text-center block max-w-sm p-3 bg-white rounded-lg shadow-lg border-s-4 border-white border-l-yellow-500  hover:bg-gray-100">
									<h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $laporan_sedang_diproses_count }}</h5>
									<p class="font-normal text-gray-700 dark:text-gray-400">Laporan sedang diproses</p>
								</div>

								{{-- Laporan selesai --}}
								<div class="text-center block max-w-sm p-3 bg-white rounded-lg shadow-lg border-s-4 border-white border-l-green-700  hover:bg-gray-100">
									<h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $laporan_selesai_count }}</h5>
									<p class="font-normal text-gray-700 dark:text-gray-400">Laporan selesai</p>
								</div>
							</dl>
						</div>
					</div>

					{{-- Daftar Pengaduan --}}
					<div
						class="w-full p-4 rounded-lg shadow-xl sm:p-8 mt-5">
						<h5 
							class="mb-2 text-2xl text-center md:text-start md:text-3xl font-bold text-gray-900">
							Daftar Pengaduan
						</h5>

						<div class="relative overflow-x-auto text-sm md:text-base">
							<table id="posko-pengaduan" class="stripe hover row-border table-auto" style="width:100%">
								<thead>
									<tr>
										<th>#</th>
										<th>Biodata</th>
										<th>Jenis Keluhan</th>
										<th>Deskripsi Keluhan</th>
										<th>Berkas Pendukung</th>
										<th>Diajukan Pada</th>
										<th class="min-w-[130.5px]">Status</th>
										<th class="min-w-[93.26px]">Kelola</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($posko_pengaduan as $item)
										<tr>
											{{-- # --}}
											<td>
												{{ $loop->iteration }}
											</td>

											{{-- Biodata --}}
											<td>
												<button 
													class="rounded-lg bg-orange px-3 py-2 text-xs font-medium text-center text-white focus:outline-none focus:ring-4"
													data-modal-target="lihat_biodata_{{ $item->uuid }}"
													data-modal-toggle="lihat_biodata_{{ $item->uuid }}"
													type="button">
													<i class="fa-solid fa-eye me-1"></i>Lihat
												</button>

												{{-- Modal lihat biodata --}}
												<div 
													class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
													id="lihat_biodata_{{ $item->uuid }}" 
													data-modal-backdrop="static" 
													tabindex="-1" 
													aria-hidden="true">
													<div 
														class="relative p-4 w-full max-w-2xl max-h-full">
														<div 
															class="relative bg-white rounded-lg shadow dark:bg-gray-700">

															<div 
																class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
																<h3 
																	class="text-xl font-semibold text-gray-900 dark:text-white">
																	Biodata
																</h3>

																<button 
																	class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
																	type="button" 
																	data-modal-hide="lihat_biodata_{{ $item->uuid }}">
																	<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
																		<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
																	</svg>

																	<span class="sr-only">Close modal</span>
																</button>
															</div>

															<div class="p-4 md:p-5 space-y-4 sm:text-lg">
																<table style="width:100%">
																	<tr>
																		<th class="w-1/3 sm:w-1/4 text-end pe-1 align-top py-1">Nama :</th>
																		<td>{{ $item->nama_lengkap }}</td>
																	</tr>
																	<tr>
																		<th class="w-1/3 sm:w-1/4 text-end pe-1 align-top py-1">NIM :</th>
																		<td>{{ $item->nim }}</td>
																	</tr>
																	<tr>
																		<th class="w-1/3 sm:w-1/4 text-end pe-1 align-top py-1">Prodi :</th>
																		<td>{{ $item->prodi }}</td>
																	</tr>
																	<tr>
																		<th class="w-1/3 sm:w-1/4 text-end pe-1 align-top py-1">Nomor HP :</th>
																		<td>{{ $item->nomor_telepon }}</td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
											</td>

											{{-- Jenis Keluhan --}}
											<td>
												{{ $item->jenis_keluhan }}
											</td>

											{{-- Deskripsi Keluhan --}}
											<td>
												<button 
												class="rounded-lg bg-orange px-3 py-2 text-xs font-medium text-center text-white focus:outline-none focus:ring-4"
												data-modal-target="lihat_deskripsi_keluhan_{{ $item->uuid }}"
												data-modal-toggle="lihat_deskripsi_keluhan_{{ $item->uuid }}"
												type="button">
													<i class="fa-solid fa-eye me-1"></i>Lihat
												</button>

												{{-- Modal lihat deskripsi keluhan --}}
												<div 
													class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
													id="lihat_deskripsi_keluhan_{{ $item->uuid }}" 
													data-modal-backdrop="static" 
													tabindex="-1" 
													aria-hidden="true">
													<div 
														class="relative p-4 w-full max-w-2xl max-h-full">
														<div 
															class="relative bg-white rounded-lg shadow dark:bg-gray-700">

															<div 
																class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
																<h3 
																	class="text-xl font-semibold text-gray-900 dark:text-white">
																	Deskripsi Keluhan
																</h3>

																<button 
																	class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
																	type="button" 
																	data-modal-hide="lihat_deskripsi_keluhan_{{ $item->uuid }}">
																	<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
																		<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
																	</svg>

																	<span class="sr-only">Close modal</span>
																</button>
															</div>

															<div class="p-4 md:p-5 space-y-4 sm:text-lg">
																<p>
																	{{ $item->deskripsi_keluhan }}
																</p>
															</div>
														</div>
													</div>
												</div>
											</td>

											{{-- Berkas Pendukung --}}
											<td>
												@if ($item->berkas_pendukung)
													<a
														class="rounded-lg bg-orange px-3 py-2 text-xs font-medium text-center text-white focus:outline-none focus:ring-4"
														href="{{ Storage::url('pengaduan/' . $item->berkas_pendukung) }}"
														target="_blank"
														type="button">
														<i class="fa-solid fa-eye me-1"></i>Lihat
													</a>
												</td>
											@else
											<span class="bg-gray-100 text-gray-800 text-xs font-bold me-2 px-1 py-0.5 rounded border border-gray-500">
												Tidak ada
											</span>	
											@endif

											{{-- Diajukan Pada --}}
											<td>
												{{ $item->created_at->translatedFormat('l, d F Y (H:i)') }}
											</td>

											{{-- Status --}}
											<td>
												@if ($item->status == "Belum diproses")
													<span class="bg-gray-100 text-gray-800 text-xs font-bold me-2 px-1 py-0.5 rounded border border-gray-500">
														{{-- {{ $item->status }} --}}
														{{ $item->status }}
													</span>	
												@elseif ($item->status == "Sedang diproses")
													<span class="bg-yellow-100 text-yellow-800 text-xs font-bold me-2 px-1 py-0.5 rounded border border-yellow-700">
														{{ $item->status }}
													</span>
												@elseif ($item->status == "Selesai")
													<span class="bg-green-100 text-green-800 text-xs font-bold me-2 px-1 py-0.5 rounded border border-green-400">
														{{ $item->status }}
													</span>
												@endif
											</td>

											{{-- Kelola --}}
											<td>
												<a
													class="rounded-lg bg-blue-500 px-3 py-2 text-xs font-medium text-center text-white focus:outline-none focus:ring-4"
													id="lihat_biodata_{{ $item->uuid }}"
													href="{{ route('admin.posko-pengaduan.edit', $item->uuid) }}"
													type="button">
													<i class="fa-solid fa-pen me-1"></i>Kelola
												</a>
											</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
										<tr>
											<th>#</th>
											<th>Biodata</th>
											<th>Jenis Keluhan</th>
											<th>Deskripsi Keluhan</th>
											<th>Berkas Pendukung</th>
											<th>Diajukan Pada</th>
											<th>Status</th>
											<th>Kelola</th>
										</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
</x-admin-layout>

<script>	
	$(document).ready( function () {
		$('#posko-pengaduan').DataTable({
			responsive: true
		});
	} );
</script>
