<x-layout>
    <header>
        <nav>
            <ul class="text-white flex justify-between p-5">
                <div class="flex items-center gap-4">
                    <img src="{{asset("images/logo.png")}}" alt="logo da casa de aposta AraBet" class="w-30 h-10 mr-15">
                    <li><a href="#" class="hover:text-[#7DFF00] transition">Jogos</a></li>
                    <li><a href="#" class="hover:text-[#7DFF00] transition">Ao vivo</a></li>
                    <li><a href="#" class="hover:text-[#7DFF00] transition">Tabelas</a></li>
                    <li><a href="#" class="hover:text-[#7DFF00] transition">VIP</a></li>
                    <li><a href="#" class="hover:text-[#7DFF00] transition">Suporte</a></li>
                </div>
                <div class="flex items-center gap-4">
                    <li><a href="#" class="text-[#7DFF00] flex items-center gap-2 mr-5 hover:text-white"><img src="{{asset("images/gift-svgrepo-com.svg")}}" alt="ìcone de uma caixa de presente" class="w-6">Promoções</a></li>
                    <li><a href="#" class="px-5 py-2 border border-[#202020] rounded-md">Entrar</a></li>
                    <li><a href="#" class="px-5 py-2 bg-[#7DFF00] text-[#050505] font-medium rounded-md">Cadastre-se</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <main class="flex flex-col w-full">
        <div style="background-image: url('{{ asset('images/background.png') }}')"
        class="w-full h-150 bg-cover p-10">
            <div class="mt-10">
                <h2 class="text-white font-bold text-5xl">AQUI, SUA PAIXÃO</h2>
                <h2 class="text-[#7DFF00] font-bold text-5xl">VIRA JOGO.</h2>
                <p class="text-[#BDBDBD] text-lg mt-2 w-77">As melhores odds, os maiores eventos e a emoção que você merece!</p>
            </div>
            <div class="flex mt-6 gap-4">
                <a href="#" class="text-[#050505] bg-[#7DFF00] font-medium px-7 py-3 rounded-md hover:bg-[#56C800] transition">Cadastre-se agora</a>
                <a href="#" class="text-white font-medium px-7 py-3 border border-[#202020] rounded-md ">Explorar</a>
            </div>
            <div class="flex items-center gap-6 text-sm mt-10 text-[#BDBDBD]">
                <p class="flex items-center gap-2"><img src="{{asset('images/security-verified-svgrepo-com (1).svg')}}" alt="ícone de segurança" class="w-6">Pagamentos rápidos e seguros</p>
                <p class="flex items-center gap-2"><img src="{{asset('images/headset-svgrepo-com.svg')}}" alt="ícone de fone" class="w-6">Suporte 24/7</p>
                <p class="flex items-center gap-2"><img src="{{asset('images/cup-1-svgrepo-com.svg')}}" alt="ícone de uma taça" class="w-6">As melhores odds do mercado</p>
            </div>
        </div>
        <section class="flex items-center justify-around">
            <div class="relative w-150 overflow-hidden rounded-3xl border border-lime-500/20 bg-[#0d0d0d] p-8 mt-10">
                <!-- Glow -->
                <div
                    class="absolute -right-16 -top-16 h-52 w-52 rounded-full bg-lime-500/20 blur-3xl">
                </div>

                <!-- Conteúdo -->
                <div class="relative z-10 flex items-center justify-between gap-8">

                    <div>
            <span class="text-sm uppercase tracking-widest text-gray-400">
                Bônus de Boas-Vindas
            </span>

                        <h2 class="mt-3 text-4xl font-extrabold leading-none text-white">
                            BÔNUS DE
                        </h2>

                        <div class="mt-1 text-7xl font-black text-lime-400">
                            100%
                        </div>

                        <p class="mt-2 text-2xl font-bold text-white">
                            NO SEU 1º DEPÓSITO
                        </p>

                        <button
                            class="mt-8 rounded-xl bg-[#7DFF00] px-8 py-4 font-bold text-black transition hover:bg-lime-300">
                            Cadastre-se agora →
                        </button>
                    </div>

                    <!-- Presente -->
                    <div class="hidden md:flex items-center justify-center">
                        <div class="relative">

                            <!-- Glow do presente -->
                            <div
                                class="absolute inset-0 rounded-full bg-lime-500/30 blur-[80px]">
                            </div>

                            <!-- Caixa -->
                            <div
                                class="relative flex h-52 w-52 items-center justify-center rounded-3xl border border-lime-400/20 bg-gradient-to-br from-[#161616] to-[#0d0d0d] shadow-[0_0_40px_rgba(132,255,0,0.25)]">

                                <svg class="h-28 w-28 text-lime-400"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.5"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M20 12v8a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-8m16 0H4m16 0h1m-17 0H3m7-5.5C10 4.567 8.433 3 6.5 3S3 4.567 3 6.5 4.567 10 6.5 10H12m0 0H6.5M12 10h5.5C19.433 10 21 8.433 21 6.5S19.433 3 17.5 3 14 4.567 14 6.5M12 10v11" />
                                </svg>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div>
                <h3 class="text-[#BDBDBD] font-medium text-lg mb-2">🔴Ao vivo</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-QlNMqIoD6Y?si=5Ydp5oB6Bx26srI1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
    </main>
</x-layout>
