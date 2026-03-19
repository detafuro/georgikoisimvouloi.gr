<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ') }}</title>
    <meta name="description" content="Ολοκληρωμένες συμβουλευτικές υπηρεσίες για τον αγροτικό τομέα">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-brand-blue antialiased">

    <!-- Skip Navigation -->
    <a href="#main-content" class="skip-nav">Μετάβαση στο περιεχόμενο</a>

    <!-- Header -->
    <header id="site-header" class="sticky top-0 z-50 bg-white/95 backdrop-blur transition-shadow">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <a href="#">
                    <img src="/logo.png" alt="ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ" class="h-10 sm:h-12 w-auto">
                </a>

                <!-- Desktop Nav -->
                <nav aria-label="Κύρια πλοήγηση" class="hidden md:flex md:items-center md:gap-6">
                    <a href="#etaireia" class="text-sm font-medium text-brand-blue hover:text-brand-magenta transition-colors">Η Εταιρεία</a>
                    <a href="#ypiresies-kyd" class="text-sm font-medium text-brand-blue hover:text-brand-magenta transition-colors">Υπηρεσίες ΚΥΔ</a>
                    <a href="#ependytika" class="text-sm font-medium text-brand-blue hover:text-brand-magenta transition-colors">Επενδυτικά Σχέδια</a>
                    <a href="#logistikes" class="text-sm font-medium text-brand-blue hover:text-brand-magenta transition-colors">Λογιστικές</a>
                    <a href="#poiotita" class="text-sm font-medium text-brand-blue hover:text-brand-magenta transition-colors">Ποιότητα</a>
                    <a href="#epikoinonia" class="inline-block rounded-md bg-brand-magenta-dark px-4 py-2 text-sm font-medium text-white hover:bg-brand-magenta transition-colors">Επικοινωνία</a>
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
                    <a href="#ypiresies-kyd" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Υπηρεσίες ΚΥΔ</a>
                    <a href="#ependytika" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Επενδυτικά Σχέδια</a>
                    <a href="#logistikes" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Λογιστικές</a>
                    <a href="#poiotita" class="rounded-md px-3 py-2 text-sm font-medium text-brand-blue hover:bg-gray-100">Ποιότητα</a>
                    <a href="#epikoinonia" class="rounded-md bg-brand-magenta-dark px-3 py-2 text-sm font-medium text-white text-center">Επικοινωνία</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden" style="background: linear-gradient(135deg, #002e7c 0%, #c3057d 100%); margin-left: 5%; margin-right: 5%; border-radius: 30px;">
        <div class="relative mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:py-40 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight">
                ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ
            </h1>
            <p class="mt-6 text-lg sm:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Ολοκληρωμένες συμβουλευτικές υπηρεσίες για τον αγροτικό τομέα
            </p>
            <a href="#etaireia" class="mt-8 inline-block rounded-md bg-brand-magenta-dark px-6 py-3 text-base font-medium text-white hover:bg-brand-magenta transition-colors">
                Μάθετε περισσότερα
            </a>
            <div class="mt-12 mx-auto max-w-7xl bg-cover bg-center" role="img" aria-label="Αγρότης σε χωράφι σιταριού" style="background-image: url('/hero.jpg'); height: 400px; border-radius: 30px;"></div>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">

        <!-- 1. Η Εταιρεία -->
        <section id="etaireia" class="py-16 sm:py-20 bg-white" aria-labelledby="etaireia-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                    </svg>
                    <h2 id="etaireia-heading" class="mt-4 text-3xl sm:text-4xl font-bold text-brand-magenta">Η Εταιρεία</h2>
                    <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-brand-magenta"></div>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2">
                    <div>
                        <p class="text-base leading-relaxed">
                            Η εταιρεία <strong>ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ</strong> δραστηριοποιείται στον χώρο της παροχής γεωργικών συμβουλών και τεχνικής υποστήριξης αγροτικών εκμεταλλεύσεων. Με πολυετή εμπειρία και εξειδικευμένο προσωπικό, παρέχουμε ολοκληρωμένες λύσεις που καλύπτουν όλο το φάσμα των αναγκών του σύγχρονου αγρότη.
                        </p>
                        <p class="mt-4 text-base leading-relaxed">
                            Στόχος μας είναι η βελτίωση της ανταγωνιστικότητας και της βιωσιμότητας των αγροτικών εκμεταλλεύσεων, μέσα από την εφαρμογή σύγχρονων μεθόδων και πρακτικών.
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed">
                            Αναλαμβάνουμε την εκπόνηση μελετών, τη σύνταξη φακέλων για επιδοτούμενα προγράμματα και τη συνεχή παρακολούθηση των εξελίξεων στον αγροτικό τομέα. Η εμπιστοσύνη των πελατών μας αποτελεί τη μεγαλύτερη επιβεβαίωση της ποιότητας των υπηρεσιών μας.
                        </p>
                        <p class="mt-4 text-base leading-relaxed">
                            Συνεργαζόμαστε στενά με κάθε παραγωγό ξεχωριστά, προσαρμόζοντας τις υπηρεσίες μας στις ιδιαίτερες ανάγκες της κάθε εκμετάλλευσης.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Υπηρεσίες ΚΥΔ -->
        <section id="ypiresies-kyd" class="py-16 sm:py-20 bg-gray-50" aria-labelledby="kyd-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>
                    <h2 id="kyd-heading" class="mt-4 text-3xl sm:text-4xl font-bold text-brand-magenta">Υπηρεσίες ΚΥΔ</h2>
                    <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-brand-magenta"></div>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2">
                    <div>
                        <p class="text-base leading-relaxed">
                            Παρέχουμε ολοκληρωμένες υπηρεσίες <strong>Καθεστώτος Υποχρεωτικών Δηλώσεων (ΚΥΔ)</strong> για αγρότες και κτηνοτρόφους. Αναλαμβάνουμε τη σύνταξη και υποβολή της Ενιαίας Αίτησης Ενίσχυσης (ΕΑΕ) και όλων των σχετικών δηλώσεων.
                        </p>
                        <p class="mt-4 text-base leading-relaxed">
                            Η έγκαιρη και ορθή υποβολή των δηλώσεων διασφαλίζει την απρόσκοπτη λήψη ενισχύσεων και επιδοτήσεων.
                        </p>
                    </div>
                    <div>
                        <ul class="space-y-3 text-base">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Ενιαία Αίτηση Ενίσχυσης (ΕΑΕ)
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Δηλώσεις ΟΣΔΕ
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Μεταβιβάσεις δικαιωμάτων ενίσχυσης
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Ενστάσεις και διορθώσεις
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Παρακολούθηση πληρωμών
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Αγροτικά Επενδυτικά Σχέδια -->
        <section id="ependytika" class="py-16 sm:py-20 bg-white" aria-labelledby="ependytika-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <h2 id="ependytika-heading" class="mt-4 text-3xl sm:text-4xl font-bold text-brand-magenta">Αγροτικά Επενδυτικά Σχέδια</h2>
                    <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-brand-magenta"></div>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2">
                    <div>
                        <p class="text-base leading-relaxed">
                            Αναλαμβάνουμε την εκπόνηση ολοκληρωμένων <strong>επενδυτικών σχεδίων</strong> για αγροτικές εκμεταλλεύσεις, αξιοποιώντας τα διαθέσιμα χρηματοδοτικά εργαλεία και επιδοτούμενα προγράμματα.
                        </p>
                        <p class="mt-4 text-base leading-relaxed">
                            Από τον αρχικό σχεδιασμό μέχρι την τελική υλοποίηση, σας συνοδεύουμε σε κάθε βήμα της επενδυτικής διαδικασίας.
                        </p>
                    </div>
                    <div>
                        <ul class="space-y-3 text-base">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Σχέδια Βελτίωσης
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Νέοι Αγρότες - Εγκατάσταση
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Μεταποίηση αγροτικών προϊόντων
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Προγράμματα Leader
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Λογιστικές Υπηρεσίες -->
        <section id="logistikes" class="py-16 sm:py-20 bg-gray-50" aria-labelledby="logistikes-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                    </svg>
                    <h2 id="logistikes-heading" class="mt-4 text-3xl sm:text-4xl font-bold text-brand-magenta">Λογιστικές Υπηρεσίες</h2>
                    <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-brand-magenta"></div>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2">
                    <div>
                        <p class="text-base leading-relaxed">
                            Παρέχουμε εξειδικευμένες <strong>λογιστικές υπηρεσίες</strong> προσαρμοσμένες στις ανάγκες αγροτών και αγροτικών επιχειρήσεων. Γνωρίζουμε τις ιδιαιτερότητες της αγροτικής φορολογίας και σας καθοδηγούμε σωστά.
                        </p>
                        <p class="mt-4 text-base leading-relaxed">
                            Αναλαμβάνουμε την πλήρη λογιστική παρακολούθηση, από τις φορολογικές δηλώσεις μέχρι τα βιβλία εσόδων-εξόδων.
                        </p>
                    </div>
                    <div>
                        <ul class="space-y-3 text-base">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Φορολογικές δηλώσεις (Ε1, Ε3, Ε9)
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Τήρηση βιβλίων εσόδων-εξόδων
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Δηλώσεις ΦΠΑ
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Ασφαλιστικές υποχρεώσεις ΕΦΚΑ
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Συστήματα Ποιότητας -->
        <section id="poiotita" class="py-16 sm:py-20 bg-white" aria-labelledby="poiotita-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                    <h2 id="poiotita-heading" class="mt-4 text-3xl sm:text-4xl font-bold text-brand-magenta">Συστήματα Ποιότητας</h2>
                    <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-brand-magenta"></div>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2">
                    <div>
                        <p class="text-base leading-relaxed">
                            Υποστηρίζουμε αγρότες και επιχειρήσεις στην εφαρμογή <strong>συστημάτων ποιότητας</strong> και πιστοποίησης, εξασφαλίζοντας την προστιθέμενη αξία των προϊόντων σας και τη συμμόρφωση με τα εθνικά και ευρωπαϊκά πρότυπα.
                        </p>
                        <p class="mt-4 text-base leading-relaxed">
                            Τα συστήματα ποιότητας αποτελούν βασικό εργαλείο ανταγωνιστικότητας στη σύγχρονη αγορά.
                        </p>
                    </div>
                    <div>
                        <ul class="space-y-3 text-base">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                AGRO 2 - Ολοκληρωμένη Διαχείριση
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                GlobalG.A.P.
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Βιολογική Γεωργία
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 shrink-0 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                ISO 22000 / HACCP
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="epikoinonia" class="py-16 sm:py-20 bg-brand-blue" aria-labelledby="epikoinonia-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 id="epikoinonia-heading" class="text-3xl sm:text-4xl font-bold text-white">Επικοινωνία</h2>
                    <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-brand-magenta"></div>
                    <p class="mt-4 text-lg text-gray-200">Επικοινωνήστε μαζί μας για οποιαδήποτε πληροφορία</p>
                </div>
                <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Phone -->
                    <div class="rounded-lg bg-white/10 p-6 text-center backdrop-blur">
                        <svg class="mx-auto h-10 w-10 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-semibold text-white">Τηλέφωνο</h3>
                        <p class="mt-2 text-gray-200">+30 2XXX XXXXXX</p>
                    </div>
                    <!-- Email -->
                    <div class="rounded-lg bg-white/10 p-6 text-center backdrop-blur">
                        <svg class="mx-auto h-10 w-10 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <h3 class="mt-4 text-lg font-semibold text-white">Email</h3>
                        <p class="mt-2 text-gray-200">info@georgikoisimvouloi.gr</p>
                    </div>
                    <!-- Address -->
                    <div class="rounded-lg bg-white/10 p-6 text-center backdrop-blur sm:col-span-2 lg:col-span-1">
                        <svg class="mx-auto h-10 w-10 text-brand-magenta" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-semibold text-white">Διεύθυνση</h3>
                        <p class="mt-2 text-gray-200">Ελλάδα</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-brand-blue-dark py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-gray-300">&copy; {{ date('Y') }} ΓΕΩΡΓΙΚΟΙ ΣΥΜΒΟΥΛΟΙ. Με επιφύλαξη παντός δικαιώματος.</p>
        </div>
    </footer>

</body>
</html>
