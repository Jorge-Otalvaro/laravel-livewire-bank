<main>
	<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">      
		<div class="px-4 py-6 sm:px-0">
			<div class="mt-10 sm:mt-0">
				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="md:col-span-1">
						<div class="px-4 sm:px-0">
							<div class="flex flex-col">
								<div class="-my-2 overflow-x-auto sm:-mx-3 lg:-mx-8">
									<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
										<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
											<h4 class="text-center">Seleccione una cuenta</h4>
											<table class="min-w-full divide-y divide-gray-200">
												<thead class="bg-gray-50">
													<tr>
														<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
															Cuenta
														</th>

														<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
															Estado
														</th>

														<th scope="col" class="relative px-6 py-3">
															<span class="sr-only"></span>
														</th>
													</tr>
												</thead>

												<tbody class="bg-white divide-y divide-gray-200">
													@foreach($accounts as $account)
														<tr>														  
															<td class="px-6 py-4 whitespace-nowrap">
																<div class="flex items-center">
																	<div class="text-sm font-medium text-gray-900">
																		{{ $account->number_account }}
																	</div>
																</div>
															</td>

															@if($account->status == 'active')
																<td class="px-6 py-4 whitespace-nowrap">
																	<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
																		Activo
																	</span>
																</td>
															@else
																<td class="px-6 py-4 whitespace-nowrap">
																	<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
																		Inactivo
																	</span>
																</td>
															@endif															

															<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
																<button class="text-indigo-600 hover:text-indigo-900" wire:click="$set('account_id', {{$account->id }})">
																	Consultar
																</button>
															</td>																									
														</tr>
													@endforeach  
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@if(count($movements) > 0)
						<div class="mt-5 md:mt-0 md:col-span-2">
							<div class="flex flex-col">
								<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
									<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
										<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
											<h4 class="text-center">
												Detalle de la cuenta
											</h4>
											<table class="min-w-full divide-y divide-gray-200">
												<thead class="bg-gray-50">
													<tr>
														<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
															Titular
														</th>
														<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
															Numero de cuenta
														</th>
														<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
															Saldo
														</th>
														<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
															Fecha
														</th>
													</tr>
												</thead>

												<tbody class="bg-white divide-y divide-gray-200">
													@foreach($movements as $movement)
														<tr>
															<td class="px-6 py-4 whitespace-nowrap">
																<div class="flex items-center">
																	<div class="text-sm font-medium text-gray-900">
																		{{ $movement->user->name }}
																	</div>
																</div>
															</td>

															<td class="px-6 py-4 whitespace-nowrap">
																<div class="text-sm text-gray-900">
																	{{ $movement->account->number_account }}
																</div>
															</td>
															
															<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
																$ {{ $movement->transfer->mount }} USD
															</td>

															<td class="px-6 py-4 whitespace-nowrap">
																{{ $movement->created_at }}
															</td>
														</tr>
													@endforeach  
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					@else 
						<div class="mt-5 md:mt-0 md:col-span-2">
							<div class="flex flex-col">
								<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
									<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
										<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
											<h4 class="text-center">
												No existen datos para mostrar
											</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endif
				</div>
			</div>
			<div class="hidden sm:block" aria-hidden="true">
				<div class="py-5">
					<div class="border-t border-gray-200"></div>
				</div>
			</div>
		</div>
	</div>
</main>
