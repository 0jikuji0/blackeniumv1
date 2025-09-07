<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarifs et Abonnements — Blackenium</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .dots { background-image: radial-gradient(circle, #d1d5db 1px, transparent 1px); background-size: 20px 20px; animation: wave 12s linear infinite; }
    @keyframes wave { 0% { background-position: 0 0; } 50% { background-position: 40px 20px; } 100% { background-position: 0 0; } }
  </style>
</head>
<body class="bg-white min-h-screen flex flex-col">
  <header class="fixed top-0 left-0 w-full bg-transparent z-50 transition-colors duration-300" id="site-header">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center">
        <a href="index.html" class="inline-flex items-center gap-3">
          <img src="/image/Logo.png" alt="Logo" class="h-16 w-auto">
        </a>
      </div>
      <nav class="hidden md:flex space-x-8 text-gray-800 font-medium">
        <a href="{{ route('accueil') }}" class="hover:text-gray-600">Accueil</a>
        <a href="tariff.html" class="text-gray-900 font-semibold">Tarifs</a>
        <a href="abonnement.html" class="hover:text-gray-600">Abonnement</a>
        <a href="index.html#contact" class="hover:text-gray-600">Contact</a>
      </nav>
      <div>
        <a href="index.html#devis" class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Devis Gratuit</a>
      </div>
    </div>
  </header>

  <section class="relative w-full pt-28 overflow-hidden flex-1">
    <div class="absolute inset-0 dots"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-10">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-3">Nos formules</h1>
      <p class="text-gray-600 mb-8">Prix fixe pour la création + abonnement conseillé pour le suivi technique.</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <div class="border border-gray-200 rounded-lg p-6 shadow-lg bg-white">
          <h3 class="text-2xl font-semibold text-gray-800 mb-2">Essentiel Pro</h3>
          <p class="text-gray-600 mb-4">Site vitrine (4-6 pages) + Maquette simple</p>
          <p class="text-gray-800 font-bold mb-2">1 500 € – 2 000 €</p>
          <p class="text-gray-500 mb-6">Starter – 49 €/mois (hébergement + mises à jour basiques)</p>
          <a href="index.html#devis" class="inline-block bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Demander un devis</a>
        </div>
        <div class="border border-gray-200 rounded-lg p-6 shadow-lg bg-white">
          <h3 class="text-2xl font-semibold text-gray-800 mb-2">Business Premium</h3>
          <p class="text-gray-600 mb-4">Site dynamique + Blog/catalogue + Maquette détaillée (2 propositions)</p>
          <p class="text-gray-800 font-bold mb-2">3 000 € – 4 500 €</p>
          <p class="text-gray-500 mb-6">Business – 99 €/mois (hébergement premium + sécurité + support prioritaire)</p>
          <a href="index.html#devis" class="inline-block bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Demander un devis</a>
        </div>
        <div class="border border-gray-200 rounded-lg p-6 shadow-lg bg-white">
          <h3 class="text-2xl font-semibold text-gray-800 mb-2">E-commerce Élégant</h3>
          <p class="text-gray-600 mb-4">Boutique en ligne (jusqu’à 200 produits) + Maquette e-commerce pro</p>
          <p class="text-gray-800 font-bold mb-2">4 000 € – 8 000 €</p>
          <p class="text-gray-500 mb-6">Business – 99 €/mois (ou Elite si site à fort trafic)</p>
          <a href="index.html#devis" class="inline-block bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Demander un devis</a>
        </div>
        <div class="border border-gray-200 rounded-lg p-6 shadow-lg bg-white">
          <h3 class="text-2xl font-semibold text-gray-800 mb-2">Expérience Premium+</h3>
          <p class="text-gray-600 mb-4">Effets 3D (WebGL) + Animations immersives + Maquette sur-mesure UX/UI</p>
          <p class="text-gray-800 font-bold mb-2">7 000 € – 15 000 €</p>
          <p class="text-gray-500 mb-6">Elite – 199 €/mois (serveur dédié + SEO + support VIP)</p>
          <a href="index.html#devis" class="inline-block bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Demander un devis</a>
        </div>
      </div>

      <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow">
        <table class="min-w-full text-left">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-sm font-semibold text-gray-700">Formule</th>
              <th class="px-6 py-3 text-sm font-semibold text-gray-700">Contenu principal</th>
              <th class="px-6 py-3 text-sm font-semibold text-gray-700">Prix du site</th>
              <th class="px-6 py-3 text-sm font-semibold text-gray-700">Abonnement conseillé</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 font-medium text-gray-900">Essentiel Pro</td>
              <td class="px-6 py-4 text-gray-700">Site vitrine (4-6 pages) + Maquette simple</td>
              <td class="px-6 py-4 text-gray-900">1 500 € – 2 000 €</td>
              <td class="px-6 py-4 text-gray-700">Starter – 49 €/mois (hébergement + mises à jour basiques)</td>
            </tr>
            <tr>
              <td class="px-6 py-4 font-medium text-gray-900">Business Premium</td>
              <td class="px-6 py-4 text-gray-700">Site dynamique + Blog/catalogue + Maquette détaillée (2 propositions)</td>
              <td class="px-6 py-4 text-gray-900">3 000 € – 4 500 €</td>
              <td class="px-6 py-4 text-gray-700">Business – 99 €/mois (hébergement premium + sécurité + support prioritaire)</td>
            </tr>
            <tr>
              <td class="px-6 py-4 font-medium text-gray-900">E-commerce Élégant</td>
              <td class="px-6 py-4 text-gray-700">Boutique en ligne (jusqu’à 200 produits) + Maquette e-commerce pro</td>
              <td class="px-6 py-4 text-gray-900">4 000 € – 8 000 €</td>
              <td class="px-6 py-4 text-gray-700">Business – 99 €/mois (ou Elite si site à fort trafic)</td>
            </tr>
            <tr>
              <td class="px-6 py-4 font-medium text-gray-900">Expérience Premium+</td>
              <td class="px-6 py-4 text-gray-700">Effets 3D (WebGL) + Animations immersives + Maquette sur-mesure UX/UI</td>
              <td class="px-6 py-4 text-gray-900">7 000 € – 15 000 €</td>
              <td class="px-6 py-4 text-gray-700">Elite – 199 €/mois (serveur dédié + SEO + support VIP)</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mt-10">
        <a href="index.html#devis" class="inline-block bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800">Demander un devis gratuit</a>
      </div>
    </div>
  </section>

  <footer class="bg-gray-50 border-t border-gray-200 mt-auto w-full">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm text-gray-700">
      <div>
        <img src="image/Logo.png" alt="Logo" class="h-12 w-auto mb-3">
        <p class="text-gray-600">Agence web — création, e‑commerce, UX/UI, performance.</p>
      </div>
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Navigation</h4>
        <ul class="space-y-1">
          <li><a class="hover:text-gray-900" href="index.html#accueil">Accueil</a></li>
          <li><a class="hover:text-gray-900" href="tariff.html">Tarifs</a></li>
          <li><a class="hover:text-gray-900" href="abonnement.html">Abonnement</a></li>
          <li><a class="hover:text-gray-900" href="index.html#devis">Devis gratuit</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Légal</h4>
        <ul class="space-y-1">
          <li><a class="hover:text-gray-900" href="mentions-legales.html">Mentions légales</a></li>
          <li><a class="hover:text-gray-900" href="conditions-generales.html">Conditions générales</a></li>
          <li><a class="hover:text-gray-900" href="politique-confidentialite.html">Politique de confidentialité</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Contact</h4>
        <ul class="space-y-1">
          <li>Email: 0blackenium0@gmail.com</li>
        </ul>
      </div>
    </div>
    <div class="text-center text-xs text-gray-500 pb-6">© <span id="year-t"></span> Blackenium. Tous droits réservés.</div>
  </footer>
  <script>
    document.getElementById('year-t').textContent = new Date().getFullYear();
    (function(){
      const header = document.getElementById('site-header');
      const onScroll = () => {
        if (window.scrollY > 10) {
          header.classList.remove('bg-transparent');
          header.classList.add('bg-white/70','backdrop-blur');
        } else {
          header.classList.add('bg-transparent');
          header.classList.remove('bg-white/70','backdrop-blur');
        }
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    })();
  </script>
</body>
</html>

