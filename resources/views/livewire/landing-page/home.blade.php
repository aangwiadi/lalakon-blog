<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="p-4 md:p-8">
        <div
            class="flex min-h-[480px] flex-col gap-6 bg-slate-200 dark:bg-[#111722] @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4 text-center">
            <div class="flex flex-col gap-2">
                <h1
                    class="text-slate-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-6xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                    Insights for Modern Creators
                </h1>
                <h2
                    class="text-slate-600 dark:text-[#92a4c9] text-base font-normal leading-normal @[480px]:text-lg @[480px]:font-normal @[480px]:leading-normal max-w-2xl mx-auto">
                    A collection of articles, products, and services to help
                    you build and grow in the digital age.
                </h2>
            </div>
            <div class="flex-wrap gap-3 flex justify-center">
                <a href="{{ route('services') }}"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#135bec] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-opacity-90 transition-all">
                    <span class="truncate">Explore My Services</span>
                </a>
                <a href="{{ route('product') }}"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-transparent dark:bg-[#232f48] border border-slate-300 dark:border-transparent text-slate-800 dark:text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-slate-100 dark:hover:bg-opacity-80 transition-all">
                    <span class="truncate">View Products</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Card Component (Featured Post) -->
    <div class="p-4 md:p-8 @container">
        <div
            class="flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-center bg-white dark:bg-[#111722] p-4 gap-4 md:gap-8 border border-slate-200 dark:border-slate-800">
            <div class="w-full @xl:w-1/2 bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                data-alt="Abstract gradient from blue to yellow"
                style="
                      background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCcap6O7ncFdTV2QScw-LHzVwUq2JFtzLBthClVZP__mUHr6qJrLhU8a4mwb_LmJ_wu-FUuimNHu2izcm4vzhgTTSMD1zDGQzv_MPGuCCZ52k-FY8JrRJrny1zRDNKjUcomsqHMGP6kha_ZeZj_VueZM2lWsHnpYklk5ek_c88ps0r-z9BP3I1NgyUq1LCIknUKb01js8X78CJeJsyZpHSkNs2ksZrJUtfxcEPVNvRwHUdXdCg9eFipqFfolJT2nsUuHXVF3zZ9tgC0');
                    ">
            </div>
            <div class="flex w-full @xl:w-1/2 min-w-72 grow flex-col items-stretch justify-center gap-2 py-4">
                <p class="text-primary text-sm font-bold leading-normal">
                    Featured Post
                </p>
                <p class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em]">
                    The Art of Digital Minimalism: How to Focus in a Noisy
                    World
                </p>
                <p class="text-slate-600 dark:text-[#92a4c9] text-base font-normal leading-normal mt-2">
                    Discover strategies to declutter your digital life,
                    improve your focus, and boost your productivity with our
                    latest featured article.
                </p>
                <div class="flex items-center gap-4 justify-between mt-4">
                    <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-normal leading-normal">
                        October 26, 2023
                    </p>
                    <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#135bec] text-white text-sm font-medium leading-normal hover:bg-opacity-90 transition-all">
                        <span class="truncate">Read More</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 px-4">
        <h2
            class="text-slate-900 dark:text-white text-3xl font-bold leading-tight tracking-[-0.015em] px-4 md:px-12 pb-3 pt-8">
            Latest Articles
        </h2>
        <div class="flex gap-2 overflow-x-auto pb-2">
            <a href="{{ route('blog') }}"
                class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary text-white px-4">
                <p class="text-sm font-medium leading-normal">View All Article</p>
            </a>
       
        </div>
    </div>
    <!-- ImageGrid Component -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4 md:p-8">
        <div class="flex flex-col gap-3 pb-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl overflow-hidden">
                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                    data-alt="Overhead view of a laptop on a wooden desk"
                    style="
                      background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBBS6rspY3Wxhc451IPQt6aMBbecwAhTQxi9AIgfMKDx77XYXkaxEophwTF_zkaocgnKfstAZbRJ4nRuDr9d0tZIliZTi-w4qW1RWapZymv_RRTjucjkxKwM5XAJu6_iBrsbPfjKJodCsqY8qMpcSeS7-hAMYEnowKD_SpKy-p66sD_GDhD-vtST4F5am2PzgjfDU3g2L-8prjbiMBLVxLIodQ_w5wCg-Jh6HGzjF5WpAZhYMOVagXAGxyzc7wiy_Tvln_BhauO2rtk');
                    ">
                </div>
            </div>
            <div>
                <p class="text-primary text-sm font-bold">Development</p>
                <p class="text-slate-900 dark:text-white text-lg font-bold leading-normal mt-1">
                    Mastering the Command Line
                </p>
                <p class="text-slate-600 dark:text-[#92a4c9] text-sm font-normal leading-normal">
                    Unlock the power of your terminal with these essential
                    commands.
                </p>
                <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-normal leading-normal mt-2">
                    Oct 22, 2023
                </p>
            </div>
        </div>
        <div class="flex flex-col gap-3 pb-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl overflow-hidden">
                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                    data-alt="Charts and graphs on a computer screen"
                    style="
                      background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDa6ksQna6Lw_SVjCDnawDEsvytqVWi1S2LUbego8Hkc5_2QVAfJUOuZbCCeGiysjvyuo8yTGaDLsTHhKkGGU8EXGbldMexMmqBy5ne7OqI34KT8vfhnw_5YOa125C2pRFy8tVrqQY2cMEybGUxw94DSigTdKtij9fJTX6UGHnkKVdDOVCOhaELpMQBDurc4KhTVPgMWeqZhaoefFKyWp2TZz6cGbUpzb80LEhgFacuse6q7ECJuAjDd9lKhZI355an_s2sJsW4KiUF');
                    ">
                </div>
            </div>
            <div>
                <p class="text-primary text-sm font-bold">Business</p>
                <p class="text-slate-900 dark:text-white text-lg font-bold leading-normal mt-1">
                    Data-Driven Decisions for Creatives
                </p>
                <p class="text-slate-600 dark:text-[#92a4c9] text-sm font-normal leading-normal">
                    Learn how to use analytics to inform your creative process.
                </p>
                <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-normal leading-normal mt-2">
                    Oct 18, 2023
                </p>
            </div>
        </div>
        <div class="flex flex-col gap-3 pb-3 group">
            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl overflow-hidden">
                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                    data-alt="A person holding a professional camera"
                    style="
                      background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAROtI6BNepGGXM2UqRENYnpE-bIrj0Po5BDJZYAyWWtrc49F_TkJvJtmxhAi1PmPrCdu1ynsDnDfv-v10yMaJ1iReau5d4U9oUhCemSkGx1dbhCKjDU1a90r0QINjVQx4DzCAKHTFhkfIVcr-hLMhjtk1zU0cab0unFO53P4R06ZTLmDCTu17ikpvkxA1HhYzaSdSyAsbjUXHR2RN-SflGnmGJAXb7ThJ9AFaz1tj9AdDQr5ynp36TQV30pj2QLG1vhQ9y2luI1MqU');
                    ">
                </div>
            </div>
            <div>
                <p class="text-primary text-sm font-bold">Creative</p>
                <p class="text-slate-900 dark:text-white text-lg font-bold leading-normal mt-1">
                    A Guide to Modern Photography
                </p>
                <p class="text-slate-600 dark:text-[#92a4c9] text-sm font-normal leading-normal">
                    Tips and tricks for capturing stunning photos with any
                    camera.
                </p>
                <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-normal leading-normal mt-2">
                    Oct 15, 2023
                </p>
            </div>
        </div>
    </div>
    <!-- Products/Services Callout Section -->
    <div class="px-4 md:px-8 py-8">
        <div class="bg-[#FFC700] rounded-xl p-8 md:p-12 text-center text-slate-900">
            <h3 class="text-3xl font-bold leading-tight tracking-[-0.015em]">
                Ready to Elevate Your Skills?
            </h3>
            <p class="max-w-xl mx-auto mt-2 text-base font-medium">
                Discover our curated collection of digital products and
                premium services designed to help you succeed.
            </p>
            <button
                class="mt-6 flex mx-auto min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-[#135bec] text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-all">
                <span class="truncate">Browse All Products</span>
            </button>
        </div>
    </div>
</div>
