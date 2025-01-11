<aside class="w-64 bg-white dark:bg-gray-800 shadow-lg">
            <div class="h-full flex flex-col">
                <div class="p-4 bg-gray-200 dark:bg-gray-700">
                    <h2 class="text-lg font-bold text-gray-700 dark:text-gray-200">Menu</h2>
                </div>
                <nav class="flex-grow p-4">
                    <ul class="space-y-2">
                        <li>
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </li>
                        @hasrole('owner')
                        <li>
                            <x-nav-link :href="route('store')" :active="request()->routeIs('store')">
                                {{ __('Store') }}
                            </x-nav-link>
                        </li>
                        @endhasrole
                        @hasrole('manager')
                        <li>
                            <x-nav-link :href="route('user')" :active="request()->routeIs('user')">
                                {{ __('User') }}
                            </x-nav-link>
                        </li>
                        @endhasrole
                        @hasrole('inventory')
                        <li>
                            <x-nav-link :href="route('category')" :active="request()->routeIs('category')">
                                {{ __('Category') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('product')" :active="request()->routeIs('product')">
                                {{ __('Product') }}
                            </x-nav-link>
                        </li>
                        @endhasrole
                        @hasrole('cashier')
                        <li>
                            <x-nav-link :href="route('transaction')" :active="request()->routeIs('transaction')">
                                {{ __('Transaction') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('history')" :active="request()->routeIs('history')">
                                {{ __('History') }}
                            </x-nav-link>
                        </li>
                        @endhasrole
                    </ul>
                </nav>
            </div>
        </aside>
