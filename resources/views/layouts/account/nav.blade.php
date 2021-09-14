<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
    <div class="flex flex-shrink-0 flex-col p-4 bg-gray-100 text-left">
        {{ config('app.name') }}
        <p class="text-sm text-gray-400">(Logo Goes Here)</p>
    </div>
    <nav class="mt-5 flex-1 px-2 bg-white space-y-1">
        <x-nav.navlink href="account.index" icon="fa-home-lg-alt">Dashboard</x-nav.navlink>
        <x-nav.navlink href="account.profile.index" icon="fa-id-card">Profile</x-nav.navlink>
        <x-nav.navlink href="account.security.index" icon="fa-key-skeleton">Security</x-nav.navlink>
        {{-- <x-nav.navlink href="#" icon="fa-bell">Notifications</x-nav.navlink> --}}
        {{-- <x-nav.navlink href="#" icon="fa-eye">Privacy</x-nav.navlink> --}}
        {{-- <x-nav.navlink href="#" icon="fa-share-alt">Connections</x-nav.navlink> --}}
        {{-- <x-nav.navlink href="#" icon="fa-history">History</x-nav.navlink> --}}
        {{-- <x-nav.navlink href="#" icon="fa-file-invoice">Billing</x-nav.navlink> --}}
        <x-nav.navlink href="#" icon="fa-credit-card">Payments</x-nav.navlink>
        {{-- <x-nav.navlink href="#" icon="fa-map-marked-alt">Addresses</x-nav.navlink> --}}
        <x-nav.navlink href="#" icon="fa-receipt">Order History</x-nav.navlink>
        {{-- <x-nav.navlink href="#" icon="fa-language">Language</x-nav.navlink> --}}
    </nav>
</div>