<aside class="sticky top-0 w-56 h-screen flex flex-col gap-12 p-4 border-r border-neutral-950/10">
    <a class="w-full inline-flex items-center gap-4 p-4 bg-white drop-shadow-md rounded-md" href="/">
        <div class="h-fit w-auto aspect-square flex items-center justify-center p-2 bg-blue-500 text-xs text-white font-bold rounded-[4px] shadow-sm">
            OL
        </div>
        <span class="text-sm font-semibold">Online Learning</span>
    </a>
    <div class="flex flex-col gap-2">
        <a 
            href="/" 
            class="{{ (request()->is('/')) ? 'navigation-active' : 'navigation-inactive' }} navigation"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5 {{ (request()->is('/')) ? 'fill-blue-600' : 'fill-none' }}"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
            Dashboard
        </a>
        <a 
            href="/students" 
            class="{{ (request()->is('students*')) ? 'navigation-active' : 'navigation-inactive' }} navigation"
        >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-5 h-5 {{ (request()->is('students*')) ? 'fill-blue-600' : 'fill-none' }}"
        >
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
        </svg>
            Students
        </a>
    </div>
</aside>
