<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ Ε.Ε. | Συμβουλευτικές Υπηρεσίες Αγροτικού Τομέα</title>
    <meta name="description" content="Ολοκληρωμένες συμβουλευτικές υπηρεσίες για τον αγροτικό τομέα. Υπηρεσίες ΚΥΔ, Επενδυτικά Σχέδια, ΕΣΠΑ, Λογιστικές Υπηρεσίες, Συστήματα Ποιότητας. Γιαννιτσά, Πέλλα.">
    <meta name="keywords" content="γεωργικοί σύμβουλοι, ΚΥΔ, ΟΣΔΕ, ΕΑΕ, επενδυτικά σχέδια, ΕΣΠΑ, λογιστικές υπηρεσίες, συστήματα ποιότητας, ISO, Γιαννιτσά, Πέλλα">
    <meta property="og:title" content="ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ Ε.Ε. | Συμβουλευτικές Υπηρεσίες Αγροτικού Τομέα">
    <meta property="og:description" content="Ολοκληρωμένες συμβουλευτικές υπηρεσίες για τον αγροτικό τομέα. Γιαννιτσά, Πέλλα.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://georgikoisimvouloi.gr">
    <meta property="og:image" content="https://georgikoisimvouloi.gr/hero.jpg">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://georgikoisimvouloi.gr">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="font-sans text-brand-blue antialiased">

    <!-- Skip Navigation -->
    <a href="#main-content" class="skip-nav">Μετάβαση στο περιεχόμενο</a>

    <!-- Header -->
    <header id="site-header" class="sticky top-0 z-50 bg-white/95 backdrop-blur transition-all duration-300 ease-in-out">
        <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 1400px;">
            <div class="flex h-20 items-center justify-between">
                <a href="#">
                    <picture><source srcset="/logo.webp" type="image/webp"><img src="/logo.png" alt="ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ" class="h-10 sm:h-12 w-auto" width="562" height="149"></picture>
                </a>

                <!-- Desktop Nav -->
                <nav aria-label="Κύρια πλοήγηση" class="hidden md:flex md:items-center md:gap-6">
                    <a href="#etaireia" class="text-base font-medium text-brand-blue hover:text-brand-magenta transition-colors">Η Εταιρεία</a>
                    <a href="#services" class="text-base font-medium text-brand-blue hover:text-brand-magenta transition-colors">Υπηρεσίες</a>
                    <a href="#theseis-ergasias" class="text-base font-medium text-brand-blue hover:text-brand-magenta transition-colors">Θέσεις Εργασίας</a>
                    <a href="#epikoinonia" class="text-base font-medium text-brand-blue hover:text-brand-magenta transition-colors">Επικοινωνία</a>
                    <a href="tel:2382504781" class="inline-flex items-center gap-2 rounded-full px-5 py-2 text-sm font-medium text-white transition-all duration-300 ease-in-out hover:opacity-90 hover:shadow-lg" style="background: linear-gradient(135deg, #002e7c, #c3057d);"><svg style="width: 16px; height: 16px;" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>23825 04781</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button
                    id="mobile-menu-button"
                    type="button"
                    class="md:hidden p-2 rounded-md text-brand-blue"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    aria-label="Εναλλαγή μενού"
                >
                    <svg class="h-6 w-6" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <nav id="mobile-menu" class="hidden md:hidden pb-4" aria-label="Μενού κινητού">
                <div class="flex flex-col gap-2">
                    <a href="#etaireia" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Η Εταιρεία</a>
                    <a href="#services" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Υπηρεσίες</a>
                    <a href="#theseis-ergasias" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Θέσεις Εργασίας</a>
                    <a href="#epikoinonia" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Επικοινωνία</a>
                    <a href="tel:2382504781" class="inline-flex items-center justify-center gap-2 rounded-full px-3 py-2 text-sm font-medium text-white text-center" style="background: linear-gradient(135deg, #002e7c, #c3057d);"><svg style="width: 16px; height: 16px;" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>23825 04781</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%);">
        <div class="relative mx-auto px-4 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24" style="max-width: 1400px;">
            <div class="flex flex-col md:flex-row md:items-end md:gap-8">
                <div class="md:w-[70%] text-left" data-aos="fade-right">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight">
                        Ολοκληρωμένες συμβουλευτικές υπηρεσίες για τον αγροτικό τομέα.
                    </h1>
                    <p class="mt-6 text-lg sm:text-xl text-gray-200 leading-relaxed">
                        Η συμβουλευτική υποστήριξη αποτελεί το μεγάλο συγκριτικό πλεονέκτημα των επιχειρήσεων που έχουν ως στόχο την ανάπτυξη, την επιτυχία και τη δημιουργία υπεραξίας.
                    </p>
                </div>
                <div class="md:w-[30%] mt-8 md:mt-0 flex md:justify-end md:items-end">
                    <a href="#etaireia" class="inline-block rounded-full border-2 border-white bg-transparent px-8 py-3 text-base font-medium text-white transition-all duration-300 ease-in-out hover:bg-white hover:text-brand-blue">
                        Μάθετε περισσότερα
                    </a>
                </div>
            </div>
            <div class="mt-12 mx-auto overflow-hidden" style="max-width: 1400px; height: 400px; border-radius: 30px;">
                <picture><source srcset="/hero.webp" type="image/webp"><img id="hero-parallax" src="/hero.jpg" alt="Αγρότης σε χωράφι σιταριού" class="w-full object-cover object-center" style="height: 600px; margin-top: -100px; will-change: transform;" width="1440" height="960"></picture>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">

        <!-- 1. Η Εταιρεία -->
        <section id="etaireia" class="py-16 sm:py-20 bg-white" aria-labelledby="etaireia-heading">
            <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 1400px;">
                <div class="flex items-center gap-4" data-aos="fade-up">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-brand-magenta/10">
                        <svg class="h-7 w-7 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                        </svg>
                    </div>
                    <div>
                        <h2 id="etaireia-heading" class="text-xl sm:text-xl md:text-3xl font-bold text-brand-magenta">Η Εταιρεία</h2>

                    </div>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <p class="leading-relaxed" style="font-size: 18px; color: #222222;">
                            Η εταιρεία <strong>Γεωργικοί Σύμβουλοι Ε.Ε.</strong> ιδρύθηκε το 2014 έχοντας ως αντικείμενο την παροχή ολοκληρωμένων υπηρεσιών συμβουλευτικής υποστήριξης σε αγροτικές και κτηνοτροφικές επιχειρήσεις του Νομού Πέλλας & την ευρύτερης περιοχής της Κεντρικής Μακεδονίας.
                        </p>
                        <p class="mt-4 leading-relaxed" style="font-size: 18px; color: #222222;">
                            Συνεχίζοντας την επιτυχημένη πορεία της & θέτοντας ακόμα υψηλότερους στόχους για πληρέστερη, ποιοτικότερη & αποτελεσματικότερη εξυπηρέτηση & υποστήριξη των πελατών της, η εταιρεία επεκτείνει την γκάμα των υπηρεσιών της σε λογιστικές υπηρεσίες.
                        </p>
                        <p class="mt-4 leading-relaxed" style="font-size: 18px; color: #222222;">
                            Εστιάζει στην εφαρμογή σύγχρονων συστημάτων παραγωγής, στη σύνταξη γεωτεχνικών και οικονομοτεχνικών μελετών που σχετίζονται με την επιχειρηματική γεωργική δραστηριότητα, καθώς και στην προώθηση της αγροτικής παραγωγής και την εκπαίδευση στελεχών του πρωτογενούς τομέα. Οι δραστηριότητές της απευθύνονται σε αγρότες, ομάδες και οργανώσεις παραγωγών, συνεταιρισμούς και αγροτικές επιχειρήσεις σε όλη την Ελλάδα.
                        </p>
                        <p class="mt-4 leading-relaxed" style="font-size: 18px; color: #222222;">
                            Παράλληλα, δίνεται έμφαση στην παραγωγή και προώθηση καινοτόμων και πιστοποιημένων γεωργικών υπηρεσιών, καθώς και στην εφαρμογή σύγχρονων πολιτικών και παραγωγικών μοντέλων που συμβάλλουν στην προστασία του κλίματος και του περιβάλλοντος.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 flex flex-col items-center justify-center" data-aos="zoom-in" data-aos-delay="100" style="border-radius: 30px; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                            <p class="text-3xl font-bold text-brand-magenta">10+</p>
                            <p class="mt-2 text-sm text-gray-600">Χρόνια Εμπειρίας</p>
                        </div>
                        <div class="bg-white p-6 flex flex-col items-center justify-center" data-aos="zoom-in" data-aos-delay="100" style="border-radius: 30px; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                            <p class="text-3xl font-bold text-brand-magenta">500+</p>
                            <p class="mt-2 text-sm text-gray-600">Πελάτες</p>
                        </div>
                        <div class="bg-white p-6 flex flex-col items-center justify-center" data-aos="zoom-in" data-aos-delay="100" style="border-radius: 30px; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                            <p class="text-3xl font-bold text-brand-magenta">1000+</p>
                            <p class="mt-2 text-sm text-gray-600">Έργα</p>
                        </div>
                        <div class="bg-white p-6 flex flex-col items-center justify-center" data-aos="zoom-in" data-aos-delay="100" style="border-radius: 30px; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                            <p class="text-3xl font-bold text-brand-magenta">100%</p>
                            <p class="mt-2 text-sm text-gray-600">Αφοσίωση</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Υπηρεσίες -->
        <section id="services" class="py-16 sm:py-20 bg-gray-50" aria-labelledby="kyd-heading">
            <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 1400px;">
                <div class="text-left md:text-center" data-aos="fade-up">
                    <div class="flex items-center gap-4 md:justify-center">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-brand-magenta/10">
                            <svg class="h-7 w-7 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </div>
                        <h2 id="kyd-heading" class="text-xl sm:text-xl md:text-3xl font-bold" style="color: #c3057d;">Υπηρεσίες</h2>
                    </div>
                    <p class="mt-4" style="font-size: 18px; color: #222222;">Υψηλή ποιότητα υπηρεσιών, εξασφαλισμένες έγκυρες και έγκαιρες πληρωμές.</p>
                </div>
                <!-- Carousel Tabs -->
                <div class="mt-16" data-aos="fade-up" data-aos-delay="200">

                    <!-- Tab Bar -->
                    <div class="mb-10" style="text-align: center;">
                        <div class="tab-bar-wrapper">
                            <nav class="tab-bar-scroll" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                    <button type="button" class="kyd-tab text-sm lg:text-base inline-flex items-center gap-x-2 bg-transparent focus:outline-hidden font-medium rounded-full disabled:opacity-50 disabled:pointer-events-none cursor-pointer" style="flex-shrink: 0; padding: 10px 20px; background-color: #c3057d; color: #fff;" data-tab="kyd-panel-1" aria-selected="true" aria-controls="kyd-panel-1" role="tab">
                                        ΥΠΗΡΕΣΙΕΣ ΚΥΔ
                                    </button>
                                    <button type="button" class="kyd-tab text-sm lg:text-base inline-flex items-center gap-x-2 bg-transparent focus:outline-hidden font-medium rounded-full disabled:opacity-50 disabled:pointer-events-none cursor-pointer" style="flex-shrink: 0; padding: 10px 20px; background-color: transparent; color: inherit;" data-tab="kyd-panel-2" aria-selected="false" aria-controls="kyd-panel-2" role="tab">
                                        ΕΠΕΝΔΥΤΙΚΑ ΣΧΕΔΙΑ
                                    </button>
                                    <button type="button" class="kyd-tab text-sm lg:text-base inline-flex items-center gap-x-2 bg-transparent focus:outline-hidden font-medium rounded-full disabled:opacity-50 disabled:pointer-events-none cursor-pointer" style="flex-shrink: 0; padding: 10px 20px; background-color: transparent; color: inherit;" data-tab="kyd-panel-3" aria-selected="false" aria-controls="kyd-panel-3" role="tab">
                                        ΕΣΠΑ
                                    </button>
                                    <button type="button" class="kyd-tab text-sm lg:text-base inline-flex items-center gap-x-2 bg-transparent focus:outline-hidden font-medium rounded-full disabled:opacity-50 disabled:pointer-events-none cursor-pointer" style="flex-shrink: 0; padding: 10px 20px; background-color: transparent; color: inherit;" data-tab="kyd-panel-4" aria-selected="false" aria-controls="kyd-panel-4" role="tab">
                                        ΛΟΓΙΣΤΙΚΕΣ ΥΠΗΡΕΣΙΕΣ
                                    </button>
                                    <button type="button" class="kyd-tab text-sm lg:text-base inline-flex items-center gap-x-2 bg-transparent focus:outline-hidden font-medium rounded-full disabled:opacity-50 disabled:pointer-events-none cursor-pointer" style="flex-shrink: 0; padding: 10px 20px; background-color: transparent; color: inherit;" data-tab="kyd-panel-5" aria-selected="false" aria-controls="kyd-panel-5" role="tab">
                                        ΣΥΣΤΗΜΑΤΑ ΠΟΙΟΤΗΤΑΣ
                                    </button>
                            </nav>
                        </div>
                    </div>

                    <!-- Panel 1: ΥΠΗΡΕΣΙΕΣ ΚΥΔ -->
                    <div id="kyd-panel-1" role="tabpanel" class="kyd-panel" style="margin-top: 30px;">
                        <div class="tab-grid">
                            <div class="text-white p-6" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%); border-radius: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                                <div style="padding-bottom: 30px;">
                                    <div class="bg-brand-magenta rounded-full flex items-center justify-center" style="width: 54px; height: 54px;">
                                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" /></svg>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; gap: 16px;">
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Υποβολή ΕΑΕ</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Οικολογικά Σχήματα</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Μητρώο Εισροών Εκροών - Ημερολόγιο Εργασιών</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Παρέμβαση Π3-71 Εξισωτική</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-grid-image">
                                <picture><source srcset="/kyd.webp" type="image/webp"><img src="/kyd.jpg" alt="Υπηρεσίες ΚΥΔ" style="width: 100%; height: 100%; object-fit: cover; border-radius: 30px; display: block; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);" width="1266" height="702" loading="lazy"></picture>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 2: ΕΠΕΝΔΥΤΙΚΑ ΣΧΕΔΙΑ -->
                    <div id="kyd-panel-2" role="tabpanel" class="kyd-panel hidden" style="margin-top: 30px;">
                        <div class="tab-grid">
                            <div class="text-white p-6" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%); border-radius: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                                <div style="padding-bottom: 30px;">
                                    <div class="bg-brand-magenta rounded-full flex items-center justify-center" style="width: 54px; height: 54px;">
                                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" /></svg>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; gap: 16px;">
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Σχέδια Βελτίωσης - Π3-73-2.1, Π3-73-2.2 &amp; Π3-73-2.6</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Χρηματοδοτικά Εργαλεία</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Αναπτυξιακός Νόμος</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Νέος Αγρότης</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Leader - Μέτρο 19</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Επιδότηση Επιτοκίου Αγοράς Γης</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">ΕΣΠΑ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-grid-image">
                                <picture><source srcset="/ependitika-sxedia.webp" type="image/webp"><img src="/ependitika-sxedia.jpg" alt="Επενδυτικά Σχέδια" style="width: 100%; height: 100%; object-fit: cover; border-radius: 30px; display: block; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);" width="804" height="300" loading="lazy"></picture>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 3: ΕΣΠΑ -->
                    <div id="kyd-panel-3" role="tabpanel" class="kyd-panel hidden" style="margin-top: 30px;">
                        <div class="tab-grid">
                            <div class="text-white p-6" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%); border-radius: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                                <div style="padding-bottom: 30px;">
                                    <div class="bg-brand-magenta rounded-full flex items-center justify-center" style="width: 54px; height: 54px;">
                                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5a17.92 17.92 0 0 1-8.716-2.247m0 0A8.966 8.966 0 0 1 3 12c0-1.264.26-2.467.732-3.558" /></svg>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; gap: 16px;">
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">e-λιανικό εμπόριο</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Επιδότηση κεφαλαίου κίνησης σε επιχειρήσεις εστίασης για προμήθεια πρώτων υλών</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Επιχορήγηση επιχειρήσεων εστίασης για την προμήθεια θερμαντικών σωμάτων εξωτερικού χώρου</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Επιχορήγηση αυτοαπασχολούμενων δικηγόρων</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Επιχορήγηση Υφιστάμενων Επιχειρήσεων Γυμναστηρίων, Παιδότοπων</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-grid-image">
                                <picture><source srcset="/espa.webp" type="image/webp"><img src="/espa.png" alt="ΕΣΠΑ" style="width: 100%; height: 100%; object-fit: cover; border-radius: 30px; display: block; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);" width="804" height="300" loading="lazy"></picture>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 4: ΛΟΓΙΣΤΙΚΕΣ ΥΠΗΡΕΣΙΕΣ -->
                    <div id="kyd-panel-4" role="tabpanel" class="kyd-panel hidden" style="margin-top: 30px;">
                        <div class="tab-grid">
                            <div class="text-white p-6" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%); border-radius: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                                <div style="padding-bottom: 30px;">
                                    <div class="bg-brand-magenta rounded-full flex items-center justify-center" style="width: 54px; height: 54px;">
                                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" /></svg>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; gap: 16px;">
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Συμβουλευτική φοροτεχνικών θεμάτων</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Σύσταση/μεταβολή/διακοπή ατομικών επιχειρήσεων καθώς και κάθε μορφής προσωπικής (Ο.Ε, Ε.Ε) ή κεφαλαιουχικής (Ε.Π.Ε, Ι.Κ.Ε, Α.Ε) εταιρίας</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Λογιστική τήρηση βιβλίων κάθε οντότητας (Απλογραφικά/Διπλογραφικά) και την έγκαιρη παρακολούθηση της πορείας τους</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Ολοκληρωμένες υπηρεσίες υποστήριξης σε θέματα μισθοδοσίας/προσωπικού</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">Υπηρεσίες ένταξης, διαχείρισης και ολοκλήρωσης επιδοτούμενων προγραμμάτων (ΟΑΕΔ, ΕΣΠΑ, Αναπτυξιακός Νόμος)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-grid-image">
                                <picture><source srcset="/logistikes-ipiresies.webp" type="image/webp"><img src="/logistikes-ipiresies.png" alt="Λογιστικές Υπηρεσίες" style="width: 100%; height: 100%; object-fit: cover; border-radius: 30px; display: block; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);" width="804" height="241" loading="lazy"></picture>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 5: ΣΥΣΤΗΜΑΤΑ ΠΟΙΟΤΗΤΑΣ -->
                    <div id="kyd-panel-5" role="tabpanel" class="kyd-panel hidden" style="margin-top: 30px;">
                        <div class="tab-grid">
                            <div class="text-white p-6" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%); border-radius: 30px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                                <div style="padding-bottom: 30px;">
                                    <div class="bg-brand-magenta rounded-full flex items-center justify-center" style="width: 54px; height: 54px;">
                                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" /></svg>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; gap: 16px;">
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">ISO 22000:2018</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">ISO 9001:2015</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">ISO 14001:2015 - Σύστημα περιβαλλοντικής Διαχείρισης</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">ISO 27001:2013 - Σύστημα ασφάλειας πληροφοριών</div>
                                    </div>
                                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                                        <div class="shrink-0"><svg class="h-6 w-6 text-brand-magenta" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
                                        <div class="text-white text-base lg:text-lg">ISO 45001:2018 - Σύστημα διαχείρισης υγείας και ασφάλειας εργασίας</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-grid-image">
                                <picture><source srcset="/iso.webp" type="image/webp"><img src="/iso.png" alt="Συστήματα Ποιότητας" style="width: 100%; height: 100%; object-fit: cover; border-radius: 30px; display: block; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);" width="804" height="300" loading="lazy"></picture>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 3. Θέσεις Εργασίας -->
        <section id="theseis-ergasias" class="py-16 sm:py-20 bg-white">
            <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 1400px;">
                <div data-aos="fade-up" style="background: #fff; border-radius: 30px; padding: 30px; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">
                    <div class="jobs-grid">
                        <div>
                            <div class="flex items-center gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-brand-magenta/10">
                                    <svg class="h-7 w-7 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                    </svg>
                                </div>
                                <h2 class="text-xl sm:text-xl md:text-3xl font-bold" style="color: #c3057d; white-space: nowrap;">Θέσεις Εργασίας</h2>
                            </div>
                            <p class="mt-4 leading-relaxed" style="font-size: 18px; color: #222222;">Η εταιρεία <strong>ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ Ε.Ε.</strong> στα πλαίσια της ανάπτυξης της, αναζητά συνεργάτες με ομαδικό πνεύμα και θέληση για εργασία σε όλο το φάσμα των δραστηριοτήτων της.</p>
                        </div>
                        <div>
                            <button onclick="window.dispatchEvent(new CustomEvent('open-cv-modal'))" class="inline-block rounded-full px-8 py-3 text-base font-semibold text-white transition-all duration-300 hover:opacity-90 hover:shadow-lg cursor-pointer" style="background: linear-gradient(135deg, #002e7c, #c3057d); white-space: nowrap; border: none;">Επικοινωνήστε μαζί μας</button>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block" style="margin-top: 40px;" data-aos="fade-up" data-aos-delay="100">
                    <picture><source srcset="/theseis-ergasias.webp" type="image/webp"><img src="/theseis-ergasias.png" alt="Θέσεις Εργασίας" style="width: 100%; border-radius: 30px; display: block; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);" width="1920" height="394" loading="lazy"></picture>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="epikoinonia" class="py-16 sm:py-20 bg-gray-50" aria-labelledby="epikoinonia-heading">
            <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 1400px;">
                <div class="contact-grid" data-aos="fade-up" style="background: #fff; border-radius: 30px; padding: 40px; box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);">

                    <!-- Left Column: Title + Boxes -->
                    <div>
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-brand-magenta/10">
                                <svg class="h-7 w-7 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <h2 id="epikoinonia-heading" class="text-xl sm:text-xl md:text-3xl font-bold" style="color: #c3057d;">Επικοινωνία</h2>
                        </div>
                        <p style="margin-top: 12px; font-size: 18px; color: #222222; line-height: 1.6;">Επικοινωνήστε μαζί μας για οποιαδήποτε πληροφορία</p>

                        <div style="display: flex; flex-direction: column; gap: 16px; margin-top: 30px;">
                            <!-- Phone -->
                            <div style="display: flex; align-items: center; gap: 16px; background: #f8fafc; border-radius: 16px; padding: 20px;">
                                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #002e7c, #c3057d); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg style="width: 24px; height: 24px; color: #fff;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: #002e7c; font-size: 15px;">Τηλέφωνο</div>
                                    <div style="color: #64748b; font-size: 14px; margin-top: 2px;">23825 04781</div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div style="display: flex; align-items: center; gap: 16px; background: #f8fafc; border-radius: 16px; padding: 20px;">
                                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #002e7c, #c3057d); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg style="width: 24px; height: 24px; color: #fff;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: #002e7c; font-size: 15px;">Email</div>
                                    <div style="color: #64748b; font-size: 14px; margin-top: 2px;">info@georgikoisimvouloi.gr</div>
                                </div>
                            </div>
                            <!-- Address -->
                            <div style="display: flex; align-items: center; gap: 16px; background: #f8fafc; border-radius: 16px; padding: 20px;">
                                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #002e7c, #c3057d); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg style="width: 24px; height: 24px; color: #fff;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: #002e7c; font-size: 15px;">Διεύθυνση</div>
                                    <div style="color: #64748b; font-size: 14px; margin-top: 2px;">1ο χλμ ΕΟ Γιαννιτσών Θεσσαλονίκης<br>ΤΚ 58100, Γιαννιτσά</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Contact Form -->
                    <div>
                        <h3 style="font-size: 20px; font-weight: 700; color: #002e7c; margin: 0 0 24px;">Στείλτε μας μήνυμα</h3>
                        @if(session('success'))
                            <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; padding: 16px; margin-bottom: 16px; color: #166534; font-size: 15px;">{{ session('success') }}</div>
                        @endif
                        <form action="/api/contact" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
                            @csrf
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                                <div>
                                    <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Όνομα <span style="color: #c3057d;">*</span></label>
                                    <input type="text" name="first_name" required style="width: 100%; padding: 12px 16px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                                </div>
                                <div>
                                    <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Επώνυμο <span style="color: #c3057d;">*</span></label>
                                    <input type="text" name="last_name" required style="width: 100%; padding: 12px 16px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                                </div>
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Email <span style="color: #c3057d;">*</span></label>
                                <input type="email" name="email" required style="width: 100%; padding: 12px 16px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Τηλέφωνο <span style="color: #c3057d;">*</span></label>
                                <input type="tel" name="phone" required style="width: 100%; padding: 12px 16px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Μήνυμα</label>
                                <textarea name="message" rows="5" style="width: 100%; padding: 12px 16px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box; resize: vertical; font-family: inherit;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'"></textarea>
                            </div>
                            <button type="submit" class="cv-submit-btn">Αποστολή</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- CV Modal -->
    <div x-data="{ open: false, submitting: false, success: false }"
         x-on:open-cv-modal.window="open = true; success = false"
         x-show="open"
         x-cloak
         style="position: fixed; inset: 0; z-index: 10000;"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <!-- Backdrop -->
        <div @click="open = false" style="position: fixed; inset: 0; background: rgba(0,0,0,0.5);"></div>
        <!-- Modal Content -->
        <div style="position: fixed; inset: 0; display: flex; align-items: center; justify-content: center; padding: 20px;">
            <div @click.stop style="background: #fff; border-radius: 20px; width: 100%; max-width: 560px; max-height: 90vh; overflow-y: auto; box-shadow: 0 25px 60px rgba(0,0,0,0.3);">
                <!-- Header -->
                <div style="padding: 30px 30px 0; display: flex; justify-content: space-between; align-items: flex-start;">
                    <h3 style="font-size: 22px; font-weight: 700; color: #002e7c; margin: 0;">Θέσεις Εργασίας</h3>
                    <button @click="open = false" style="background: none; border: none; cursor: pointer; padding: 4px; color: #94a3b8;">
                        <svg style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
                    </button>
                </div>
                <!-- Description -->
                <div style="padding: 16px 30px 24px;">
                    <p style="color: #64748b; font-size: 15px; line-height: 1.6; margin: 0;">Στείλτε μας το βιογραφικό σας και θα επικοινωνήσουμε μαζί σας μόλις υπάρξει διαθέσιμη θέση εργασίας στο κατάστημα μας.</p>
                </div>
                <!-- Form -->
                <template x-if="!success">
                    <form @submit.prevent="
                        submitting = true;
                        let formData = new FormData($el);
                        fetch('/api/cv', { method: 'POST', body: formData, headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' } })
                            .then(r => { success = true; submitting = false; })
                            .catch(() => { alert('Παρουσιάστηκε σφάλμα. Δοκιμάστε ξανά.'); submitting = false; });
                    " enctype="multipart/form-data" style="padding: 0 30px 30px;">
                        <div style="display: flex; flex-direction: column; gap: 16px;">
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Όνομα <span style="color: #c3057d;">*</span></label>
                                <input type="text" name="first_name" required style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Επώνυμο <span style="color: #c3057d;">*</span></label>
                                <input type="text" name="last_name" required style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Τηλέφωνο <span style="color: #c3057d;">*</span></label>
                                <input type="tel" name="phone" required style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Email <span style="color: #c3057d;">*</span></label>
                                <input type="email" name="email" required style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 15px; outline: none; transition: border-color 0.2s; box-sizing: border-box;" onfocus="this.style.borderColor='#002e7c'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 14px; font-weight: 500; color: #334155; margin-bottom: 6px;">Βιογραφικό (PDF, DOC)</label>
                                <div style="position: relative; border: 2px dashed #e2e8f0; border-radius: 10px; padding: 20px; text-align: center; cursor: pointer; transition: border-color 0.2s;" onmouseover="this.style.borderColor='#002e7c'" onmouseout="this.style.borderColor='#e2e8f0'">
                                    <svg style="width: 32px; height: 32px; color: #94a3b8; margin: 0 auto 8px;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" /></svg>
                                    <p style="color: #64748b; font-size: 14px; margin: 0;">Σύρετε αρχείο ή <span style="color: #002e7c; font-weight: 600;">επιλέξτε</span></p>
                                    <input type="file" name="cv" accept=".pdf,.doc,.docx" style="position: absolute; inset: 0; opacity: 0; cursor: pointer;">
                                </div>
                            </div>
                            <button type="submit" :disabled="submitting" class="cv-submit-btn">
                                <span x-show="!submitting">Αποστολή</span>
                                <span x-show="submitting">Αποστολή...</span>
                            </button>
                        </div>
                    </form>
                </template>
                <!-- Success Message -->
                <template x-if="success">
                    <div style="padding: 0 30px 30px; text-align: center;">
                        <svg style="width: 64px; height: 64px; color: #22c55e; margin: 0 auto 16px;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                        <h4 style="font-size: 20px; font-weight: 700; color: #002e7c; margin: 0 0 8px;">Ευχαριστούμε!</h4>
                        <p style="color: #64748b; font-size: 15px; margin: 0 0 20px;">Το βιογραφικό σας στάλθηκε επιτυχώς. Θα επικοινωνήσουμε μαζί σας σύντομα.</p>
                        <button @click="open = false" style="padding: 10px 24px; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; color: #fff; cursor: pointer; background: linear-gradient(135deg, #002e7c, #c3057d);">Κλείσιμο</button>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #001a47 0%, #002e7c 100%);">
        <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 1400px; padding: 60px 16px 0;">
            <div class="footer-grid">
                <!-- Company Info -->
                <div>
                    <picture><source srcset="/logo.webp" type="image/webp"><img src="/logo.png" alt="ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ" class="h-14 w-auto mb-6" style="filter: brightness(0) invert(1); max-width: 60%;" width="562" height="149"></picture>
                    <p style="color: #fff; font-size: 14px; line-height: 1.7; width: auto; padding-top: 30px;">Ολοκληρωμένες συμβουλευτικές υπηρεσίες για τον αγροτικό τομέα. Υψηλή ποιότητα υπηρεσιών, εξασφαλισμένες έγκυρες και έγκαιρες πληρωμές.</p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 style="color: #fff; font-size: 16px; font-weight: 600; margin-bottom: 20px;">Σύνδεσμοι</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
                        <li><a href="#etaireia" style="color: #fff; text-decoration: none; font-size: 14px; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Η Εταιρεία</a></li>
                        <li><a href="#services" style="color: #fff; text-decoration: none; font-size: 14px; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Υπηρεσίες</a></li>
                        <li><a href="#theseis-ergasias" style="color: #fff; text-decoration: none; font-size: 14px; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Θέσεις Εργασίας</a></li>
                        <li><a href="#epikoinonia" style="color: #fff; text-decoration: none; font-size: 14px; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Επικοινωνία</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h3 style="color: #fff; font-size: 16px; font-weight: 600; margin-bottom: 20px;">Επικοινωνία</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 16px;">
                        <li style="display: flex; align-items: center; gap: 12px;">
                            <span style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 16px; height: 16px; color: #c3057d;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                            </span>
                            <span style="color: #fff; font-size: 14px;">23825 04781</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 12px;">
                            <span style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 16px; height: 16px; color: #c3057d;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                            </span>
                            <span style="color: #fff; font-size: 14px;">info@georgikoisimvouloi.gr</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 12px;">
                            <span style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg style="width: 16px; height: 16px; color: #c3057d;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                            </span>
                            <span style="color: #fff; font-size: 14px;">1ο χλμ ΕΟ Γιαννιτσών Θεσσαλονίκης<br>ΤΚ 58100, Γιαννιτσά</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Bottom Bar -->
            <div style="border-top: 1px solid rgba(255,255,255,0.1); padding: 24px 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                <p style="color: #fff; font-size: 16px; font-weight: 500; margin: 0;">&copy; {{ date('Y') }} ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ ΕΕ. Με επιφύλαξη παντός δικαιώματος.</p>
                <p style="color: #fff; font-size: 16px; font-weight: 500; margin: 0;">Developed by <a href="https://www.nifty.gr" target="_blank" rel="noopener noreferrer" style="color: #fff; text-decoration: none; font-weight: 700;">Nifty</a></p>
            </div>
        </div>
    </footer>

<script>
    function activateTab(tabId) {
        document.querySelectorAll('.kyd-tab').forEach(function(t) {
            t.style.backgroundColor = 'transparent';
            t.style.color = 'inherit';
            t.setAttribute('aria-selected', 'false');
        });
        var activeBtn = document.querySelector('.kyd-tab[data-tab="' + tabId + '"]');
        if (activeBtn) {
            activeBtn.style.backgroundColor = '#c3057d';
            activeBtn.style.color = '#fff';
            activeBtn.setAttribute('aria-selected', 'true');
        }
        document.querySelectorAll('.kyd-panel').forEach(function(p) {
            p.classList.add('hidden');
        });
        document.getElementById(tabId).classList.remove('hidden');
    }

    document.querySelectorAll('.kyd-tab').forEach(function(btn) {
        btn.addEventListener('click', function() {
            activateTab(btn.dataset.tab);
            // Auto-scroll tab bar so active tab is visible at the start
            var nav = btn.closest('.tab-bar-scroll');
            if (nav) {
                var offset = btn.offsetLeft - 12;
                nav.scrollTo({ left: offset, behavior: 'smooth' });
            }
        });
    });

    document.querySelectorAll('.nav-tab-link').forEach(function(link) {
        link.addEventListener('click', function() {
            var tabId = link.dataset.tabTarget;
            if (tabId) activateTab(tabId);
        });
    });

    AOS.init({ duration: 800, easing: 'ease-in-out', once: true });

    // Tab bar scroll fade indicator
    var tabScroll = document.querySelector('.tab-bar-scroll');
    var tabWrapper = document.querySelector('.tab-bar-wrapper');
    if (tabScroll && tabWrapper) {
        tabScroll.addEventListener('scroll', function() {
            var atEnd = tabScroll.scrollLeft + tabScroll.clientWidth >= tabScroll.scrollWidth - 5;
            tabWrapper.classList.toggle('scrolled-end', atEnd);
        });
        // Bounce hint animation on load
        function animateScroll(el, to, duration, cb) {
            var start = el.scrollLeft;
            var diff = to - start;
            var startTime = null;
            function step(ts) {
                if (!startTime) startTime = ts;
                var progress = Math.min((ts - startTime) / duration, 1);
                var ease = progress < 0.5 ? 2 * progress * progress : -1 + (4 - 2 * progress) * progress;
                el.scrollLeft = start + diff * ease;
                if (progress < 1) requestAnimationFrame(step);
                else if (cb) cb();
            }
            requestAnimationFrame(step);
        }
        if (tabScroll.scrollWidth > tabScroll.clientWidth) {
            setTimeout(function() {
                animateScroll(tabScroll, 80, 250, function() {
                    animateScroll(tabScroll, 0, 250, function() {
                        animateScroll(tabScroll, 40, 200, function() {
                            animateScroll(tabScroll, 0, 200);
                        });
                    });
                });
            }, 1200);
        }
    }
</script>

<style>
    .tab-bar-wrapper {
        width: 100%;
        background: #fff;
        border-radius: 9999px;
        padding: 8px;
        box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);
        overflow: hidden;
        position: relative;
    }
    .tab-bar-wrapper::after {
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 100px;
        background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.85) 50%, rgba(255,255,255,1) 100%);
        border-radius: 0 9999px 9999px 0;
        pointer-events: none;
        transition: opacity 0.3s;
        z-index: 1;
    }
    .tab-bar-wrapper.scrolled-end::after {
        opacity: 0;
    }
    .tab-bar-scroll {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        gap: 4px;
    }
    .tab-bar-scroll::-webkit-scrollbar {
        display: none;
    }
    @media (min-width: 768px) {
        .tab-bar-wrapper {
            display: inline-flex;
            margin: 0 auto;
            width: auto;
            border-radius: 9999px;
        }
        .tab-bar-wrapper::after {
            display: none;
        }
        .tab-bar-scroll {
            overflow-x: visible;
        }
    }
    .tab-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
        min-height: auto;
    }
    .tab-grid-image {
        display: none;
    }
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: start;
    }
    .jobs-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
        align-items: center;
    }
    .footer-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        padding-bottom: 40px;
    }
    @media (min-width: 768px) {
        .jobs-grid {
            grid-template-columns: 1fr auto;
            gap: 40px;
        }
        .footer-grid {
            grid-template-columns: 2fr 1fr 1fr;
        }
    }
    @media (min-width: 1024px) {
        .tab-grid {
            grid-template-columns: 1fr 2fr;
            min-height: 500px;
        }
        .tab-grid-image {
            display: block;
        }
        .contact-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    .cv-submit-btn {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 9999px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        margin-top: 8px;
        background: linear-gradient(135deg, #002e7c, #c3057d) !important;
        transition: all 0.3s;
    }
    .cv-submit-btn:hover {
        opacity: 0.9;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .cv-submit-btn:disabled {
        opacity: 0.6;
        cursor: wait;
    }
    .espa-floating {
        position: fixed;
        bottom: 10px;
        right: 10px;
        left: 10px;
        z-index: 9999;
        width: auto;
    }
    @media (min-width: 768px) {
        .espa-floating {
            left: auto;
            right: 20px;
            bottom: 20px;
            width: 760px;
        }
    }
    .espa-hidden .espa-content {
        max-height: 0;
        opacity: 0;
        margin-top: 0;
        border-color: transparent;
        box-shadow: none;
        overflow: hidden;
    }
    .espa-toggle {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-left: auto;
        margin-bottom: 8px;
        padding: 10px 20px;
        background: #c3057d;
        color: #fff;
        border: none;
        border-radius: 9999px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
        box-shadow: 0px 2px 70px 0px rgba(110, 130, 208, 0.18);
        width: fit-content;
    }
    .espa-arrow {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }
    .espa-content {
        background: white;
        border-radius: 8px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        border: 1px solid #e2e8f0;
        width: 100%;
        max-height: 500px;
        transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out, margin-top 0.5s ease-in-out;
        margin-top: 0;
    }
    .espa-content a {
        display: block;
    }
    .espa-content img {
        width: 100%;
        height: auto;
        display: block;
    }
</style>

<div x-data="{ open: true, autoCollapsed: false, atBottom: false }"
     x-on:scroll.window="
         if (!autoCollapsed && window.scrollY > 200) { autoCollapsed = true; open = false }
         atBottom = (window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 100)
     "
     class="espa-floating"
     :class="{ 'espa-hidden': !open }"
     :style="atBottom ? 'opacity: 0; pointer-events: none;' : 'opacity: 1;'"
     style="transition: opacity 0.3s;">
    <button class="espa-toggle" @click="open = !open" aria-label="Toggle ESPA banner">
        <span>ΠΡΟΓΡΑΜΜΑ ΑΝΤΑΓΩΝΙΣΤΙΚΟΤΗΤΑ</span>
        <svg class="espa-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             :style="open ? 'transform: rotate(0deg)' : 'transform: rotate(180deg)'">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    <div class="espa-content">
        <a href="/frameEL.pdf" target="_blank" rel="noopener noreferrer">
            <picture><source srcset="/antagonistikotitaframeEL.webp" type="image/webp"><img src="/antagonistikotitaframeEL.jpg" alt="ΕΣΠΑ - Ευρωπαϊκό Ταμείο Περιφερειακής Ανάπτυξης" loading="lazy" width="1956" height="231"></picture>
        </a>
    </div>
</div>

</body>
</html>
