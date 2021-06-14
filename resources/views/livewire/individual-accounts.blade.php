<main>
	@if($newaccount == 1)
		<div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-3 lg:px-3">
			<div class="max-w-md w-full space-y-8">
				<div>
					<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
						Registrar cuenta propia
					</h2>
				</div>
				<form class="mt-8 space-y-6" action="#" method="POST">
					<input type="hidden" name="remember" value="true">
					<div class="rounded-md shadow-sm -space-y-px">
						<div>
							<label for="name" class="sr-only">Nombre</label>
							<input id="name" name="name" type="text" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre de la cuenta" wire:model="name">
							@error('name')<span class="text-red-500">{{ $message }}</span>@enderror
						</div>

						<div>
							<label for="number_account" class="sr-only">Numero de cuenta</label>
							<input id="number_account" name="number_account" type="number" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Numero de cuenta" wire:model="number_account">
							@error('number_account')<span class="text-red-500">{{ $message }}</span>@enderror
						</div>
					</div>
					
					<div>
						<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="store()">
							Registrar
						</button>
					</div>
				</form>
			</div>
		</div>
	@else
	@endif

	@if(count($destinations) < 5)
		<div class="bg-indigo-600">
			<div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
				<div class="flex items-center justify-between flex-wrap">
					<div class="w-0 flex-1 flex items-center">
						<span class="flex p-2 rounded-lg bg-indigo-800">          
							<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
							</svg>
						</span>
						<p class="ml-3 font-medium text-white truncate">
							<span class="hidden md:inline">
								Desea registrar una nueva cuenta.
							</span>
						</p>
					</div>
					<div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
						<button class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50" wire:click="create()">
							Registrar nueva cuenta
						</button>
					</div>
				</div>
			</div>
		</div>
	@else
	@endif

	@if(count($destinations) > 0)
		<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">      
			<div class="px-4 py-6 sm:px-0">
				<div class="mt-10 sm:mt-0">
					<div class="md:grid md:grid-cols-3 md:gap-6">
						<div class="md:col-span-1">
							<div class="px-4 sm:px-0">
								<h2 class="text-lg font-medium leading-6 text-gray-900">
									Realizar transferencia a cuentas propias
								</h2>
								<p class="mt-1 text-sm text-gray-600">
									Podrás realizar las trasferencias a las cuentas propias, que no tengas registradas previamente.							
								</p>								
							</div>
						</div>

						<div class="mt-5 md:mt-0 md:col-span-2">
							<form action="#" method="POST">
								<div class="shadow overflow-hidden sm:rounded-md">
									<div class="px-4 py-5 bg-white sm:p-6">
										<div class="grid grid-cols-6 gap-6">

											<div class="col-span-6 sm:col-span-6 lg:col-span-3">
												<label for="origin" class="block text-sm font-medium text-gray-700">
													Cuenta de origen
												</label>
												<select id="origin" name="origin" autocomplete="origin" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="origin">
													<option value="">Seleccione</option>
													@foreach($accounts as $account)														
														<option value="{{ $account->id }}">{{ $account->number_account }}</option>
													@endforeach
												</select>
											</div>										

											<div class="col-span-6 sm:col-span-6 lg:col-span-3">
												<label for="destination" class="block text-sm font-medium text-gray-700">
													Cuenta destino
												</label>
												<select id="
												" name="destination" autocomplete="destination" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="destination">
													<option value="">Seleccione</option>
													@foreach($destinations as $account)														
														<option value="{{ $account->id }}">{{ $account->name }} - {{ $account->number_account }}</option>
													@endforeach
												</select>
											</div>

											<div class="col-span-6 sm:col-span-6 lg:col-span-3">
												<label for="mount" class="block text-sm font-medium text-gray-700">
													Monto de la transacción
												</label>
	  											<div class="mt-1 relative rounded-md shadow-sm">
												    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
												      	<span class="text-gray-500 sm:text-sm">
												        	$
												      	</span>
												    </div>
													<input type="text" name="mount" id="mount" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" wire:model="mount">
													<div class="absolute inset-y-0 right-0 flex items-center">
		      											<label for="currency" class="sr-only">Currency</label>
		      											<select id="currency" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
												        	<option>USD</option>
												     	</select>
		    										</div>
		  										</div>
											</div>
										</div>
									</div>
									<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
										<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="registertransaction()">
											Transferir
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="hidden sm:block" aria-hidden="true">
					<div class="py-5">
						<div class="border-t border-gray-200"></div>
					</div>
				</div>
			</div>
		</div>
	@else
	@endif
</main>