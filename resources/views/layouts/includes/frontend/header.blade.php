<header class="bg-emerald-50">
	<nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
		<div class="w-full py-1 flex items-center justify-between border-b border-emerald-400 lg:border-none">
			<div class="flex items-center">
				<a href="{{ route('home') }}" class="flex flex-row items-center space-x-2 py-4">
					<i class="fad fa-vihara fa-fw fa-2x text-emerald-500"></i>
					<span class="text-emerald-500 text-2xl font-medium">{{ config('app.name') }}</span>
				</a>
				<div class="hidden ml-10 space-x-8 lg:block">
					<a href="#" class="text-base font-medium text-emerald-400 hover:text-emerald-500" key="About">
						About
					</a>

					<a href="#" class="text-base font-medium text-emerald-400 hover:text-emerald-500" key="Menu">
						Menu
					</a>
				</div>
			</div>
			<div class="ml-10 flex flex-row items-center space-x-4">
				@auth
					<a href="{{ route('account.index') }}" class="px-3 py-2 rounded-md">
						Account
					</a>
					<form method="POST" action="{{ route('logout') }}">
						@csrf

						<a
							href="{{ route('logout') }}"
							class="px-3 py-2 rounded-md bg-emerald-500 hover:bg-emerald-400 text-white font-medium"
							onclick="event.preventDefault();
							this.closest('form').submit();">
							{{ __('Log Out') }}
						</a>
					</form>
				@endauth
				@guest
					<a href="{{ route('login') }}" class="inline-block bg-emerald-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
					<a href="#" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-emerald-600 hover:bg-emerald-300">Sign up</a>
				@endguest
			</div>
		</div>
		<div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
			<a href="#" class="text-base font-medium text-emerald-400 hover:text-emerald-50" key="About">
				About
			</a>

			<a href="#" class="text-base font-medium text-emerald-400 hover:text-emerald-50" key="Menu">
				Menu
			</a>
		</div>
	</nav>
</header>