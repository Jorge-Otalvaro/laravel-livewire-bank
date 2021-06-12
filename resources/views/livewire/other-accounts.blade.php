<main>
	<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">      
		<div class="px-4 py-6 sm:px-0">
			<div class="mt-10 sm:mt-0">
				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="md:col-span-1">
						<div class="px-4 sm:px-0">
							<h3 class="text-lg font-medium leading-6 text-gray-900">
								Realizar transferencia a cuentas de terceros
							</h3>
							<p class="mt-1 text-sm text-gray-600">
								Podrás realizar las trasferencias a las cuentas de terceros, que no tengas registradas previamente.
							</p>
						</div>
					</div>

					<div class="mt-5 md:mt-0 md:col-span-2">
						<form action="#" method="POST">
							<div class="shadow overflow-hidden sm:rounded-md">
								<div class="px-4 py-5 bg-white sm:p-6">
									<div class="grid grid-cols-6 gap-6">

										<div class="col-span-6 sm:col-span-6 lg:col-span-2">
											<label for="origin" class="block text-sm font-medium text-gray-700">
												Cuenta de origen
											</label>
											<select id="origin" name="origin" autocomplete="origin" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
												<option>United States</option>
												<option>Canada</option>
												<option>Mexico</option>
											</select>
										</div>

										<div class="col-span-6 sm:col-span-6 lg:col-span-2">
											<label for="destination" class="block text-sm font-medium text-gray-700">
												Cuenta destino
											</label>
											<select id="destination" name="destination" autocomplete="destination" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
												<option>United States</option>
												<option>Canada</option>
												<option>Mexico</option>
											</select>
										</div>

										<div class="col-span-6 sm:col-span-6 lg:col-span-2">

											<label for="mount" class="block text-sm font-medium text-gray-700">
												Monto de la transacción
											</label>
  											<div class="mt-1 relative rounded-md shadow-sm">
											    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
											      	<span class="text-gray-500 sm:text-sm">
											        	$
											      	</span>
											    </div>
												<input type="text" name="mount" id="mount" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00">
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
									<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
</main>

{{-- onclick="sendOtherAccount()" --}}

<script>
    function sendIndividualAccount(){
        console.log('Realizar trasferencia entre cuentas propias')
        // window.livewire.emitTo('component2','evento1', $('.valor').val()); 
    }

    function sendOtherAccount(){
        console.log('Realizar transferencia a cuentas de terceros')
        // window.livewire.emitTo('component2','evento1', $('.valor').val()); 
    }
</script>