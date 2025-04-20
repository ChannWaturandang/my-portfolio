@extends('layouts.app')

@section('content')
    <div class="mt-20 p-8 lg:mt-0" data-aos="flip-right" data-aos-delay="100">
        <h1 class="text-2xl font-medium">About</h1>
        <p class="mb-6 border-b border-dashed  border-neutral-600 pb-6 pt-2 text-neutral-600 dark:text-neutral-400">A short
            story of me</p>
        <section class="space-y-4 leading-loose text-neutral-800 dark:text-neutral-300">
            @forelse($paragraphs as $paragraph)
                <div>{{ $paragraph->text }}</div>
            @empty
            <div class="text-center bg-red-500 text-slate-100 font-medium">No paragraph found</div>
            @endforelse

            {{-- <div>Hello, and thank you for stopping by. My name is Cristiano Stievan Chandrika Waturandang, or simply Chan. I
                am a fresh graduate in Informatics from Universitas Klabat in Airmadidi, North Minahasa, North Sulawesi,
                Indonesia. Throughout my academic journey, I developed a strong interest in web development, IT support, and
                design. My focus lies in building intuitive, efficient web applications and maintaining Microsoft operating
                systems, both on local machines and servers.
            </div>
            <div>Technically, I am proficient in HTML, CSS, JavaScript, and PHP, and I have experience using frameworks and
                tools such as Laravel, React.js, Next.js, Vite, TailwindCSS, Alpine.js, and Bootstrap. Additionally, I am
                comfortable working with Linux environments, Docker, and Jenkins for deployment and automation tasks. For
                design and content creation, I utilize Canva and Adobe Photoshop to enhance user experience and visual
                appeal. This diverse skill set enables me to take a holistic approach to both development and system
                support.
            </div>
            <div>I consider myself an adaptive learner who thrives in problem-solving scenarios. With a humble attitude and
                a passion for continuous growth, I value collaboration, strong communication, and leadership through action.
                My experience has shaped me to be analytical, entrepreneurial, and open to feedback, especially in dynamic,
                English-based work environments. I look forward to contributing meaningfully to teams and am excited about
                opportunities to collaborate and grow together.
            </div> --}}
        </section>

        <div class="mborder-t border-neutral-300 dark:border-neutral-700 my-8"></div>

        <section class="space-y-6">
            <div class="space-y-2">
                <div class="flex items-center gap-1.5 text-xl font-medium text-neutral-800 dark:text-neutral-300 ">
                    <i>
                        <svg
                            stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg></i>
                    <h2 class="capitalize">Career</h2>
                </div>
                <div
                    class="flex flex-col justify-between gap-2 text-neutral-600 dark:text-neutral-400 md:flex-row lg:items-center">
                    <p>My professional career journey.</p>
                </div>
            </div>

            {{-- careers --}}
            <div class="grid grid-cols-1 gap-4 max-h-[500px] overflow-y-auto">
                @forelse ($careers as $career)
                    <div class="rounded-xl w-full border-[1.5px] border-neutral-300 p-1 shadow-sm dark:border-[#333333]">
                        <div
                            class="rounded-lg bg-gradient-to-b from-neutral-200 to-neutral-100 transition-all duration-300 hover:to-[#ffffff] dark:from-[#242424] dark:to-neutral-900 dark:hover:to-neutral-950 flex items-start gap-5 px-6 py-4">
                            <img alt="Himpunan Mahasiswa Sistem Informasi Universitas Jambi (HIMASI UNJA)" loading="lazy"
                                width="70" height="70" decoding="async" data-nimg="1"
                                srcset="/_next/image?url=%2Fimages%2Fcareers%2Fhimasi-unja.jpeg&amp;w=96&amp;q=75 1x, /_next/image?url=%2Fimages%2Fcareers%2Fhimasi-unja.jpeg&amp;w=256&amp;q=75 2x"
                                src="/_next/image?url=%2Fimages%2Fcareers%2Fhimasi-unja.jpeg&amp;w=256&amp;q=75"
                                style="color: transparent;">
                            <div class="space-y-1">
                                <h5>{{ $career->title }}</h5>
                                <div class="space-y-2 text-sm text-neutral-600 dark:text-neutral-400">
                                    <div class="flex flex-col gap-2 md:flex-row">
                                        <a target="_blank" href="https://himasi.unja.ac.id/">
                                            <span
                                                class="cursor-pointer hover:text-neutral-900 hover:underline hover:dark:text-neutral-50">
                                                Himpunan {{ $career->description }}
                                            </span>
                                        </a>
                                        <span class="hidden text-neutral-300 dark:text-neutral-700 md:block">•</span>
                                        <span>Manado, Indonesia 🇮🇩</span>
                                    </div>
                                    <div class="flex flex-col gap-2 text-[13px] md:flex-row">
                                        <div class="flex gap-1 text-neutral-600 dark:text-neutral-400">
                                            <span>Dec 2024</span> - <span>Present</span>
                                        </div>
                                        <span class="hidden text-neutral-300 dark:text-neutral-700 md:block">•</span>
                                        <span class="text-neutral-500">4 Months</span>
                                        <span class="hidden text-neutral-300 dark:text-neutral-700 md:block">•</span>
                                        <span class="text-neutral-600 dark:text-neutral-400">Part-time</span>
                                        <span class="hidden text-neutral-300 dark:text-neutral-700 md:block">•</span>
                                        <span class="text-neutral-600 dark:text-neutral-400">Onsite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center bg-red-500 text-slate-100 font-medium">No career found</div>
                @endforelse
            </div>

        </section>

        <div class="border-t border-neutral-300 dark:border-neutral-700 my-8"></div>
        <section class="space-y-6">
            <div class="space-y-2">
                <div class="flex items-center gap-1.5 text-xl font-medium text-neutral-800 dark:text-neutral-300 "><i><svg
                            stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                            stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                        </svg></i>
                    <h2 class="capitalize">Education</h2>
                </div>
                <div
                    class="flex flex-col justify-between gap-2 text-neutral-600 dark:text-neutral-400 md:flex-row lg:items-center">
                    <p>My educational journey.</p>
                    <div class="mt-2 flex flex-col gap-4 md:mt-0 md:flex-row"><a target="_blank"
                            class="group flex w-fit items-center gap-2 rounded-lg border border-neutral-400 bg-neutral-100  px-3 py-2 text-sm transition duration-100 hover:text-neutral-800 dark:border-neutral-700 dark:bg-neutral-900 dark:hover:text-neutral-200"
                            href="https://www.canva.com/design/DAGGNurMYa0/Qz-ESp1akKih_dBsdV0_0w/edit?utm_content=DAGGNurMYa0&amp;utm_campaign=designshare&amp;utm_medium=link2&amp;utm_source=sharebutton"><svg
                                stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" x2="12" y1="15" y2="3"></line>
                            </svg>
                            <span>Download Portfolio</span>
                        </a>
                        <a target="_blank"
                            class="group flex w-fit items-center gap-2 rounded-lg border border-neutral-400 bg-neutral-100  px-3 py-2 text-sm transition duration-100 hover:text-neutral-800 dark:border-neutral-700 dark:bg-neutral-900 dark:hover:text-neutral-200"
                            href="https://bit.ly/cv-satriabahari"><svg stroke="currentColor" fill="none" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" x2="12" y1="15" y2="3"></line>
                            </svg>
                            <span>Download Resume</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4">

                <div class="rounded-xl w-full border-[1.5px] border-neutral-300 p-1 shadow-sm dark:border-[#333333]">

                    @forelse ($educations as $education)
                        <div class="rounded-lg bg-gradient-to-b from-neutral-200 to-neutral-100 transition-all duration-300 hover:to-[#ffffff] dark:from-[#242424] dark:to-neutral-900 dark:hover:to-neutral-950 flex items-center gap-5 px-6 py-4 ">

                            <img alt="Universitas" loading="lazy" width="70" height="70" decoding="async"
                                src="{{ $education->logo }}"
                                style="color: transparent;">

                                <div class="space-y-1"><a href="https://www.unja.ac.id" target="_blank">
                                    <h6>{{ $education->institution }}</h6>
                                </a>
                                <div class="space-y-2 text-sm text-neutral-600 dark:text-neutral-400">
                                    <div class="flex flex-col gap-1 md:flex-row md:gap-2"><span>{{ $education->degree }}</span><span
                                            class="hidden text-neutral-300 dark:text-neutral-700 md:block">•</span>
                                            <span>{{ $education->major }}</span>
                                        </div>
                                    <div class="flex flex-col gap-1 text-[12px] md:flex-row md:gap-2">
                                        <span
                                            class="dark:text-neutral-500">{{ date('F Y', strtotime($education->start_date)) }} - {{ $education->end_date ? date('F Y', strtotime($education->end_date)) : 'Present' }}</span>
                                            <span class="hidden rounded-full text-neutral-300 dark:text-neutral-700 md:block">•</span>
                                            <span>Manado, Indonesia 🇮🇩 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center bg-red-500 text-slate-100 font-medium">No education found</div>
                    @endforelse
                </div>

            </div>
        </section>
    </div>
@endsection
