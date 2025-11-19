<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        body {
            @apply font-display bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200;
        }
    </style>
</head>

<body>
    <div class="relative flex min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden"
        style='font-family: Manrope, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <!-- TopNavBar Component -->
            <div class="flex flex-1 justify-center px-4 sm:px-8 lg:px-10 py-5">
                <div class="layout-content-container flex flex-col w-full max-w-6xl">
                    <header
                        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-b-[#232f48] px-4 md:px-10 py-3">
                        <div class="flex items-center gap-4 text-slate-900 dark:text-white">
                            <div class="text-[#135bec]">
                                {{-- <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor">
                                    </path>
                                </svg> --}}
                                <img src="{{ asset('assets/images/logo-simple.png') }}" alt="Lalakon Logo" class="h-6 w-auto" />
                            </div>
                            
                            <h2
                                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">
                                Lalakon</h2>
                        </div>
                        <nav class="hidden md:flex flex-1 justify-end items-center gap-8">
                            <div class="flex items-center gap-9">
                                <a class="text-slate-700 dark:text-white text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="{{ route('home') }}">Home</a>
                                <a class="text-slate-700 dark:text-white text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="{{ route('product') }}">Products</a>
                                <a class="text-slate-700 dark:text-white text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="{{ route('services') }}">Services</a>
                                <a class="text-slate-700 dark:text-white text-sm font-medium leading-normal hover:text-primary dark:hover:text-primary transition-colors"
                                    href="{{ route('about') }}">About</a>
                            </div>
                            <a href="{{ route('contact') }}"
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#135bec] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-all">
                                <span class="truncate">Contact</span>
                            </a>
                        </nav>
                        <button
                            class="md:hidden flex items-center justify-center p-2 rounded-md text-slate-700 dark:text-white hover:bg-slate-200 dark:hover:bg-slate-800">
                            <span class="material-symbols-outlined" data-icon="menu">menu</span>
                        </button>
                    </header>
                    <!-- HeroSection Component -->
                    <main class="@container">

                        {{ $slot }}


                    </main>


                    <!-- Footer -->
                    <footer
                        class="bg-white dark:bg-[#111722] border-t border-slate-200 dark:border-slate-800 mt-12 px-4 md:px-8 py-12">
                        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                            <!-- Logo & Socials -->
                            <div class="md:col-span-1">
                                <div class="flex items-center gap-2">
                                    <div class="text-[#135bec]">
                                        <img src="{{ asset('assets/images/logo-simple.png') }}" alt="Lalakon Logo" class="h-6 w-auto" />
                                    </div>
                                    <h3 class="text-slate-900 dark:text-white font-bold text-base">Lalakon</h3>
                                </div>
                                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Insights for the modern
                                    digital creator.</p>
                                <div class="flex gap-4 mt-4">
                                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                        href="#">
                                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                                            <path clip-rule="evenodd"
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                        href="#">
                                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                                            <path
                                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <!-- Quick Links -->
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white">Quick Links</h4>
                                <ul class="mt-4 space-y-2">
                                    <li><a class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                            href="{{ route('about') }}">About</a></li>
                                    <li><a class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                            href="{{ route('blog') }}">Blog</a></li>
                                    <li><a class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                            href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Categories -->
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white">Explore</h4>
                                <ul class="mt-4 space-y-2">
                                    <li><a class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                            href="{{ route('product') }}">Products</a></li>
                                    <li><a class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                                            href="{{ route('services') }}">Services</a></li>
                                </ul>
                            </div>
                            <!-- Newsletter -->
                            <div class="md:col-span-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">Subscribe to Newsletter</h4>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">Get the latest posts and
                                    updates.</p>
                                <form class="mt-4 flex flex-col sm:flex-row gap-2">
                                    <input
                                        class="w-full rounded-md border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm text-slate-800 dark:text-white"
                                        placeholder="Enter your email" type="email" />
                                    <button
                                        class="flex-shrink-0 flex items-center justify-center rounded-md h-10 px-4 bg-primary text-white text-sm font-bold leading-normal hover:bg-opacity-90 transition-all"
                                        type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div
                            class="border-t border-slate-200 dark:border-slate-800 mt-8 pt-6 text-center text-sm text-slate-500 dark:text-slate-400">
                            <p>© 2024 Site Logo. All Rights Reserved.</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
