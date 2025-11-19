<div>
    <!-- HeroSection -->
    <div class="w-full @container pt-10">
        <div class="@[480px]:p-4">
            <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 rounded-xl items-center justify-center px-4 py-10 @[480px]:px-10 text-center"
                data-alt="Abstract blue and yellow geometric shapes on a dark background"
                style="
                      background-image: linear-gradient(
                          rgba(16, 22, 34, 0.7) 0%,
                          rgba(16, 22, 34, 0.9) 100%
                        ),
                        url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJMCXwTyvL5FYLMHI7XYedqvrtuUFnDwt9WLfg_1Q1Yl13NgVY1OYl7Q9OC7Z_29vkpngolACwnm6lE6eynlxGycXqkHy8Y-ulDzZj-zZPg3PlRoHNt1f6omfoHq4BRWNqU8EJh6WRBdr3i-hCfBclfG0eswPSwyqH-d5nITx_O-dL438sdb9NDUDgtkGZ_AjLhHY3QuIKF6bzzMq4q17r-sfWUqiR-wI8rtlzScxnhC0gvC5Fh9HkMlTnDvp7Jl-UnVWoffTmq8p2');
                    ">
                <div class="flex flex-col gap-4 max-w-2xl">
                    <h1
                        class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                        Elevate Your Workflow with Premium Tools
                    </h1>
                    <h2
                        class="text-white/80 text-base font-normal leading-normal @[480px]:text-lg @[480px]:font-normal @[480px]:leading-normal">
                        Discover our suite of software-as-a-service and digital
                        products designed for modern creators and professionals.
                    </h2>
                </div>
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-blue-700 transition-colors">
                    <span class="truncate">Explore Products</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Products Section -->
    <section class="flex flex-col gap-6">
        <!-- SectionHeader and Filters -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 px-4">
            <h2 class="text-charcoal dark:text-white text-3xl font-bold leading-tight tracking-[-0.015em]">
                Our Digital Toolkit
            </h2>
            <div class="flex gap-2 overflow-x-auto pb-2">
                <button wire:click="filterBy('All')"
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full px-4 transition-colors
        {{ $selectedCategory === 'All' ? 'bg-primary text-white' : 'bg-charcoal/5 dark:bg-white/10 text-charcoal/80 dark:text-white/80 hover:bg-charcoal/10 dark:hover:bg-white/20' }}">
                    <p class="text-sm font-medium leading-normal">All</p>
                </button>
                <button wire:click="filterBy('SaaS')"
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full px-4 transition-colors
        {{ $selectedCategory === 'SaaS' ? 'bg-primary text-white' : 'bg-charcoal/5 dark:bg-white/10 text-charcoal/80 dark:text-white/80 hover:bg-charcoal/10 dark:hover:bg-white/20' }}">
                    <p class="text-sm font-medium leading-normal">SaaS</p>
                </button>
                <button wire:click="filterBy('eBooks')"
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full px-4 transition-colors
        {{ $selectedCategory === 'eBooks' ? 'bg-primary text-white' : 'bg-charcoal/5 dark:bg-white/10 text-charcoal/80 dark:text-white/80 hover:bg-charcoal/10 dark:hover:bg-white/20' }}">
                    <p class="text-sm font-medium leading-normal">eBooks</p>
                </button>
                <button wire:click="filterBy('Templates')"
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full px-4 transition-colors
        {{ $selectedCategory === 'Templates' ? 'bg-primary text-white' : 'bg-charcoal/5 dark:bg-white/10 text-charcoal/80 dark:text-white/80 hover:bg-charcoal/10 dark:hover:bg-white/20' }}">
                    <p class="text-sm font-medium leading-normal">Templates</p>
                </button>
            </div>
        </div>
        <!-- ImageGrid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            @forelse($this->filteredProducts as $product)
                <div
                    class="flex flex-col gap-4 pb-3 rounded-xl border border-charcoal/10 dark:border-white/10 p-4 transition-shadow hover:shadow-xl dark:hover:border-white/20">
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                        style="background-image: url('{{ $product['image'] }}');">
                    </div>
                    <div class="flex flex-col gap-2 flex-grow">
                        <p class="text-charcoal dark:text-white text-lg font-bold leading-normal">
                            {{ $product['name'] }}
                        </p>
                        <p class="text-charcoal/60 dark:text-white/60 text-sm font-normal leading-normal">
                            {{ $product['category'] }}
                        </p>
                        <p class="text-charcoal dark:text-white text-base font-semibold leading-normal mt-auto">
                            {{ $product['price'] }}
                        </p>
                    </div>
                    <button
                        class="w-full flex h-10 items-center justify-center rounded-lg 
                {{ $product['category'] === 'SaaS' ? 'bg-primary/10 text-primary hover:bg-primary/20' : 'bg-accent-yellow text-charcoal hover:opacity-90' }} 
                text-sm font-bold transition-colors">
                        {{ $product['category'] === 'SaaS' ? 'View Details' : 'Add to Cart' }}
                    </button>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-charcoal/60 dark:text-white/60 text-lg">No products found in this category.</p>
                </div>
            @endforelse
        </div>
    </section>
    <!-- Testimonial Section -->
    <section class="flex flex-col items-center gap-8 py-10 px-4 text-center bg-charcoal/5 dark:bg-white/5 rounded-xl">
        <h2 class="text-charcoal dark:text-white text-3xl font-bold leading-tight tracking-[-0.015em]">
            What Our Customers Say
        </h2>
        <div class="max-w-2xl flex flex-col items-center gap-4">
            <img class="w-20 h-20 rounded-full object-cover" data-alt="Portrait of a smiling man"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCV2s5LGcEvjtBmiYvhqNPwGi4zo40Juv_p38zmElPYpd8NbN1MDBkOr7gWegDEPJILk9N1ev3_Z9HuAvFVBLx0_uD2Xbp1d5Q8ZmG6J3wYpO_JDuHsDIY6XYOT2CKzgyKV2l5T-eMHsmEMbOCrKbpLzE6Yrm7O7InVk6k3KuSGM-cHYmETuN0IFLUy0asRrjbJ9ZhciPELN2Fp5Reyombv-y-i253f0WuWEULskyKoGKhkZxzmeF4k-zDtiKHPVz2-qMtEvnGy17Zp" />
            <blockquote class="text-charcoal dark:text-white text-lg italic leading-relaxed">
                "This is a game-changer. The tools are intuitive, powerful,
                and have genuinely transformed my productivity. I can't
                imagine my workflow without them now."
            </blockquote>
            <p class="text-charcoal dark:text-white font-semibold">
                Alex Johnson,
                <span class="font-normal text-charcoal/70 dark:text-white/70">Founder of Innovate Co.</span>
            </p>
        </div>
    </section>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
