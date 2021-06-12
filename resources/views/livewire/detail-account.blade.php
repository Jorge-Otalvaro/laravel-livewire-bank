<main>	
	<div class="py-12 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="lg:text-center">
				<h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">
					Panel de control
				</h2>
				<p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
					Saldo disponible $ 2.980,247.12 USD 
				</p>
			</div>

			<div class="mt-10">
				<dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
					<div class="relative">
						<dt>
							<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">              
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
								</svg>
							</div>
							<p class="ml-16 text-lg leading-6 font-medium text-gray-900">
								Registrar nueva cuenta
							</p>
						</dt>
						<dd class="mt-2 ml-16 text-base text-gray-500">
							Administre su dinero fácilmente, y lleve el control de cada uno de ellas.
						</dd>
					</div>

					<div class="relative">
						<dt>
							<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">              
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
								</svg>
							</div>
							<p class="ml-16 text-lg leading-6 font-medium text-gray-900">
								Registrar cuenta para transacciones 
							</p>
						</dt>
						<dd class="mt-2 ml-16 text-base text-gray-500">
							Modulo para que registre las cuentas de terceros o transacciones propias.
						</dd>
					</div>

					{{-- <div class="relative">
						<dt>
							<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">              
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
								</svg>
							</div>
							<p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
						</dt>
						<dd class="mt-2 ml-16 text-base text-gray-500">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
						</dd>
					</div>

					<div class="relative">
						<dt>
							<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">              
								<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
								</svg>
							</div>
							<p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
						</dt>
						<dd class="mt-2 ml-16 text-base text-gray-500">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
						</dd>
					</div> --}}
				</dl>
			</div>
		</div>
	</div>
</main>



{{-- Modals --}}

{{-- <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
		<div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
			<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
				<div class="sm:flex sm:items-start">
					<div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">           
						<svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
						</svg>
					</div>
					<div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
						<h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
							Deactivate account
						</h3>
						<div class="mt-2">
							<p class="text-sm text-gray-500">
								Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
				<button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
					Deactivate
				</button>
				<button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
					Cancel
				</button>
			</div>
		</div>
	</div>
</div> --}}

