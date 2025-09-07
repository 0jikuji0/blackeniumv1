<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blackenium — Devis gratuit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        .dots {
            background-image: radial-gradient(circle, #d1d5db 1px, transparent 1px);
            background-size: 20px 20px;
            animation: wave 12s linear infinite;
        }

        @keyframes wave {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 40px 20px;
            }

            100% {
                background-position: 0 0;
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .menu-enter {
            animation: slideDown 0.3s ease-out forwards;
        }

        /* Styles pour le bouton hamburger - 3 barres */
        .hamburger {
            display: flex;
            flex-direction: column;
            width: 28px;
            height: 30px;
            cursor: pointer;
            justify-content: space-between;
        }

        .hamburger span {
            display: block;
            height: 3px;
            width: 100%;
            background: #374151;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        20px .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }
    </style>
</head>

<body class="bg-white min-h-screen flex flex-col">

    <!-- Votre header original avec ajout de responsivité mobile/tablette -->
    <header class="fixed top-0 left-0 w-full bg-transparent z-50 transition-colors duration-300" id="site-header">
        <div class="w-full flex items-center justify-between px-4 md:px-6 py-4">

            <div class="flex items-center">
                <!-- Logo cliquable vers l'accueil -->
                <a href="/" class="block transition-transform duration-300 hover:scale-105"
                    title="Retour à l'accueil">
                    <img src="/image/Logo.png" alt="BLACKENIUM - Création de sites web"
                        class="h-24 w-auto transition-transform duration-300" id="logo" />
                </a>
            </div>

            <!-- Navigation Desktop (identique à l'original) -->
            <nav class="hidden md:flex space-x-8 text-gray-800 font-medium">
                <a href="{{ route('accueil') }}" class="hover:text-gray-600">Accueil</a>
                <a href="{{ route('tariff') }}" class="hover:text-gray-600">Tarifs</a>
                <a href="{{ route('abonnement') }}" class="hover:text-gray-600">Abonnement</a>
                <a href="#contact" class="hover:text-gray-600">Contact</a>
            </nav>

            <!-- Boutons Desktop + Mobile -->
            <div class="flex items-center space-x-3">
                <!-- Bouton Devis (toujours visible) -->
                <a href="#devis"
                    class="bg-black text-white px-3 md:px-4 py-2 rounded-md hover:bg-gray-800 transition-colors duration-300 text-sm md:text-base">
                    <span class="hidden sm:inline">Devis Gratuit</span>
                    <span class="sm:hidden">Devis</span>
                </a>

                <!-- Bouton Menu Mobile/Tablette -->
                <button class="md:hidden hamburger p-2 rounded-md hover:bg-gray-100 transition-colors duration-200"
                    id="mobile-menu-btn" aria-label="Menu de navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <!-- Menu Mobile/Tablette -->
        <div class="md:hidden bg-white border-t border-gray-200 shadow-lg hidden" id="mobile-menu">
            <nav class="px-6 py-6 space-y-4">
                <a href="/"
                    class="block py-4 px-6 text-gray-800 hover:bg-gray-50 rounded-lg font-medium transition-colors duration-200 text-lg">
                    Accueil
                </a>
                <a href="{{ route('tariff') }}"
                    class="block py-4 px-6 text-gray-800 hover:bg-gray-50 rounded-lg font-medium transition-colors duration-200 text-lg">
                    Tarifs
                </a>
                <a href="/abonnement"
                    class="block py-4 px-6 text-gray-800 hover:bg-gray-50 rounded-lg font-medium transition-colors duration-200 text-lg">
                    Abonnement
                </a>
                <a href="#contact"
                    class="block py-4 px-6 text-gray-800 hover:bg-gray-50 rounded-lg font-medium transition-colors duration-200 text-lg">
                    Contact
                </a>
            </nav>
        </div>
    </header>

    <section id="accueil" class="relative min-h-[85vh] w-full bg-white overflow-hidden flex items-start pt-32">
        <div class="absolute inset-0 dots"></div>
        <div class="absolute top-0 bottom-0 left-1/4 w-px bg-gray-300"></div>
        <div class="absolute top-0 bottom-0 left-1/2 w-px bg-gray-300"></div>
        <div class="absolute top-0 bottom-0 left-3/4 w-px bg-gray-300"></div>
        <div class="relative z-10 w-full px-6 py-14">
            <div class="flex flex-col">
                <h1 id="hero-title"
                    class="text-7xl md:text-9xl lg:text-[12rem] font-bold text-gray-800 leading-tight mb-16 opacity-0 translate-y-12 blur-[1px] transition-all duration-1000 ease-out">
                    <span class="block">Votre projet,</span>
                    <span class="block">notre expertise</span>
                </h1>
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 mt-8">
                    <p id="hero-subtitle"
                        class="text-lg md:text-2xl text-gray-600 opacity-0 translate-y-8 blur-[0.5px] transition-all duration-1000 ease-out">
                        Obtenez un devis gratuit et rapide pour vos besoins digitaux.
                    </p>
                    <a href="#devis"
                        class="inline-block whitespace-nowrap bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800 sm:ml-auto">Devis
                        gratuit</a>
                </div>
            </div>
        </div>
    </section>

    <section id="tarifs" class="relative w-full bg-white py-10 overflow-hidden">
        <div class="absolute inset-0 dots"></div>
        <div class="absolute top-0 bottom-0 left-1/4 w-px bg-gray-300"></div>
        <div class="absolute top-0 bottom-0 left-1/2 w-px bg-gray-300"></div>
        <div class="absolute top-0 bottom-0 left-3/4 w-px bg-gray-300"></div>

        <div class="relative max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-2 text-center">
                Nos formules
            </h2>
            <p class="text-gray-600 mb-10 text-center">
                Choisissez l'offre adaptée à vos besoins. Détails disponibles via les
                modals.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                        Essentiel Pro
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Site vitrine (4-6 pages) + Maquette simple
                    </p>
                    <p class="text-gray-800 font-bold mb-2">1 500 € – 2 000 €</p>
                    <p class="text-gray-500 mb-6">
                        Starter – 49 €/mois (hébergement + mises à jour basiques)
                    </p>
                    <button data-modal-target="modal-essentiel"
                        class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">
                        Détails
                    </button>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                        Business Premium
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Site dynamique + Blog/catalogue + Maquette détaillée (2
                        propositions)
                    </p>
                    <p class="text-gray-800 font-bold mb-2">3 000 € – 4 500 €</p>
                    <p class="text-gray-500 mb-6">
                        Business – 99 €/mois (hébergement premium + sécurité + support
                        prioritaire)
                    </p>
                    <button data-modal-target="modal-business"
                        class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">
                        Détails
                    </button>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                        E-commerce Élégant
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Boutique en ligne (jusqu’à 200 produits) + Maquette e-commerce pro
                    </p>
                    <p class="text-gray-800 font-bold mb-2">4 000 € – 8 000 €</p>
                    <p class="text-gray-500 mb-6">
                        Business – 99 €/mois (ou Elite si site à fort trafic)
                    </p>
                    <button data-modal-target="modal-ecommerce"
                        class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">
                        Détails
                    </button>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                        Expérience Premium+
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Effets 3D (WebGL) + Animations immersives + Maquette sur-mesure
                        UX/UI
                    </p>
                    <p class="text-gray-800 font-bold mb-2">7 000 € – 15 000 €</p>
                    <p class="text-gray-500 mb-6">
                        Elite – 199 €/mois (serveur dédié + SEO + support VIP)
                    </p>
                    <button data-modal-target="modal-premiumplus"
                        class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">
                        Détails
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div id="modal-essentiel" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50" data-modal-close></div>
        <div class="relative max-w-2xl mx-auto mt-24 bg-white rounded-lg shadow-xl p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Essentiel Pro</h3>
                <button class="text-gray-600 hover:text-gray-800" data-modal-close>
                    &times;
                </button>
            </div>
            <div class="space-y-2 text-gray-700">
                <p>• Site vitrine (4-6 pages)</p>
                <p>• Maquette simple</p>
                <p class="font-semibold">Prix: 1 500 € – 2 000 €</p>
                <p class="text-gray-600">Abonnement conseillé: Starter – 49 €/mois</p>
            </div>
        </div>
    </div>

    <div id="modal-business" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50" data-modal-close></div>
        <div class="relative max-w-2xl mx-auto mt-24 bg-white rounded-lg shadow-xl p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Business Premium</h3>
                <button class="text-gray-600 hover:text-gray-800" data-modal-close>
                    &times;
                </button>
            </div>
            <div class="space-y-2 text-gray-700">
                <p>• Site dynamique</p>
                <p>• Blog / catalogue</p>
                <p>• Maquette détaillée (2 propositions)</p>
                <p class="font-semibold">Prix: 3 000 € – 4 500 €</p>
                <p class="text-gray-600">
                    Abonnement conseillé: Business – 99 €/mois
                </p>
            </div>
        </div>
    </div>

    <div id="modal-ecommerce" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50" data-modal-close></div>
        <div class="relative max-w-2xl mx-auto mt-24 bg-white rounded-lg shadow-xl p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">E-commerce Élégant</h3>
                <button class="text-gray-600 hover:text-gray-800" data-modal-close>
                    &times;
                </button>
            </div>
            <div class="space-y-2 text-gray-700">
                <p>• Boutique en ligne (jusqu’à 200 produits)</p>
                <p>• Maquette e-commerce pro</p>
                <p class="font-semibold">Prix: 4 000 € – 8 000 €</p>
                <p class="text-gray-600">
                    Abonnement conseillé: Business – 99 €/mois
                </p>
            </div>
        </div>
    </div>

    <div id="modal-premiumplus" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50" data-modal-close></div>
        <div class="relative max-w-2xl mx-auto mt-24 bg-white rounded-lg shadow-xl p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Expérience Premium+</h3>
                <button class="text-gray-600 hover:text-gray-800" data-modal-close>
                    &times;
                </button>
            </div>
            <div class="space-y-2 text-gray-700">
                <p>• Effets 3D (WebGL)</p>
                <p>• Animations immersives</p>
                <p>• Maquette sur-mesure UX/UI</p>
                <p class="font-semibold">Prix: 7 000 € – 15 000 €</p>
                <p class="text-gray-600">Abonnement conseillé: Elite – 199 €/mois</p>
            </div>
        </div>
    </div>

    <section id="devis" class="relative w-full bg-white py-14">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">
                Demander un devis gratuit
            </h2>
            <p class="text-gray-600 mb-8">
                Remplissez ce formulaire et nous reviendrons vers vous rapidement.
            </p>

            <form method="POST" action="{{ route('request_quote.send') }}" id="devis-form"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                <div class="col-span-1">
                    <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                    <input id="nom" name="nom" type="text" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2" placeholder="Jean Dupont" />
                </div>
                <div class="col-span-1">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input id="email" name="email" type="email" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2"
                        placeholder="jean.dupont@email.com" />
                </div>
                <div class="col-span-1">
                    <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                    <input id="telephone" name="telephone" type="tel"
                        class="w-full border border-gray-300 rounded-md px-4 py-2" placeholder="06 12 34 56 78" />
                </div>
                <div class="col-span-1">
                    <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service
                        souhaité</label>
                    <select id="service" name="service" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2 bg-white">
                        <option value="" disabled selected>Choisir un service</option>
                        <option>Site vitrine</option>
                        <option>E-commerce</option>
                        <option>Application web</option>
                        <option>Refonte / UI Design</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Fourchette de
                        budget</label>
                    <select id="budget" name="budget" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2 bg-white">
                        <option value="" disabled selected>Sélectionner</option>
                        <option>- 1 000 €</option>
                        <option>1 000 € — 3 000 €</option>
                        <option>3 000 € — 10 000 €</option>
                        <option>+ 10 000 €</option>
                    </select>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Décrivez votre
                        projet</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2" placeholder="Objectifs, fonctionnalités, délais..."></textarea>
                </div>
                <div class="col-span-1 md:col-span-2 flex items-start gap-3">
                    <input id="rgpd" name="rgpd" type="checkbox" required class="mt-1" />
                    <label for="rgpd" class="text-sm text-gray-600">J'accepte que mes données soient utilisées
                        pour me recontacter
                        conformément à la politique de confidentialité.</label>
                </div>
                <div class="col-span-1 md:col-span-2 flex items-center gap-4">
                    <button type="submit"
                        class="w-full md:w-auto bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800">
                        Envoyer la demande
                    </button>
                    <span id="devis-status" class="text-sm text-gray-600"></span>
                </div>
            </form>
        </div>
    </section>

    <section id="contact" class="hidden"></section>

    <footer class="bg-gray-50 border-t border-gray-200 mt-auto w-full flex-shrink-0">
        <div class="w-full px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm text-gray-700">
            <div>
                <img src="image/Logo.png" alt="Logo" class="h-12 w-auto mb-3" />
                <p class="text-gray-600">
                    Agence web — création, e-commerce, UX/UI, performance.
                </p>
            </div>
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">Navigation</h4>
                <ul class="space-y-1">
                    <li><a class="hover:text-gray-900" href="#accueil">Accueil</a></li>
                    <li><a class="hover:text-gray-900" href="#tarifs">Tarifs</a></li>
                    <li>
                        <a class="hover:text-gray-900" href="abonnement.html">Abonnement</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-900" href="#devis">Devis gratuit</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">Légal</h4>
                <ul class="space-y-1">
                    <li>
                        <a class="hover:text-gray-900" href="mentions-legales.html">Mentions légales</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-900" href="conditions-generales.html">Conditions générales</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-900" href="politique-confidentialite.html">Politique de
                            confidentialité</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-800 mb-2">Contact</h4>
                <ul class="space-y-1">
                    <li>Email: 0blackenium0@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="text-center text-xs text-gray-500 pb-6">
            © <span id="year"></span> Blackenium. Tous droits réservés.
        </div>
    </footer>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();

        (function() {
            const openButtons = document.querySelectorAll("[data-modal-target]");
            const toggleModal = (id, show) => {
                const modal = document.getElementById(id);
                if (!modal) return;
                modal.classList.toggle("hidden", !show);
                document.body.style.overflow = show ? "hidden" : "";
            };
            openButtons.forEach((btn) => {
                btn.addEventListener("click", () =>
                    toggleModal(btn.getAttribute("data-modal-target"), true)
                );
            });
            document.querySelectorAll("[data-modal-close]").forEach((el) => {
                el.addEventListener("click", () => {
                    el.closest('[id^="modal-"]').classList.add("hidden");
                    document.body.style.overflow = "";
                });
            });
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape") {
                    document
                        .querySelectorAll('[id^="modal-"]')
                        .forEach((m) => m.classList.add("hidden"));
                    document.body.style.overflow = "";
                }
            });
        })();

        (function() {
            const header = document.getElementById("site-header");
            const onScroll = () => {
                if (window.scrollY > 10) {
                    header.classList.remove("bg-transparent");
                    header.classList.add("bg-white/70", "backdrop-blur");
                } else {
                    header.classList.add("bg-transparent");
                    header.classList.remove("bg-white/70", "backdrop-blur");
                }
            };
            window.addEventListener("scroll", onScroll, {
                passive: true
            });
            onScroll();
        })();

        (function() {
            const title = document.getElementById("hero-title");
            const subtitle = document.getElementById("hero-subtitle");
            if (!title) return;
            window.addEventListener("load", () => {
                requestAnimationFrame(() => {
                    title.classList.remove("opacity-0", "translate-y-12", "blur-[1px]");
                    title.classList.add("opacity-100", "translate-y-0", "blur-0");
                    if (subtitle) {
                        setTimeout(() => {
                            subtitle.classList.remove(
                                "opacity-0",
                                "translate-y-8",
                                "blur-[0.5px]"
                            );
                            subtitle.classList.add(
                                "opacity-100",
                                "translate-y-0",
                                "blur-0"
                            );
                        }, 150);
                    }
                });
            });
        })();
        // Gestion du menu mobile
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        // Toggle du menu mobile
        mobileMenuBtn.addEventListener('click', function() {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';

            if (isExpanded) {
                // Fermer le menu
                mobileMenu.classList.add('hidden');
                mobileMenuBtn.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            } else {
                // Ouvrir le menu
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('menu-enter');
                mobileMenuBtn.classList.add('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'true');
            }
        });

        // Fermer le menu en cliquant sur un lien
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                mobileMenuBtn.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            });
        });

        // Fermer le menu mobile au redimensionnement vers desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) { // md breakpoint
                mobileMenu.classList.add('hidden');
                mobileMenuBtn.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
        });
    </script>
</body>

</html>
