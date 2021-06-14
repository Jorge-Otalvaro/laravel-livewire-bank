<main>	
	<div class="py-12 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="lg:text-center">
				<h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">
					Panel de control
				</h2>
				<p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
					Saldo disponible $ {{ number_format($account, 2) }} USD  
				</p>
			</div>

			@if(count($newaccount) < 1)
				<div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">				
					<button class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50" wire:click="store()">
						Solicitar nueva cuenta
					</button>
				</div>
			@else
			@endif
		</div>
	</div>
</main>