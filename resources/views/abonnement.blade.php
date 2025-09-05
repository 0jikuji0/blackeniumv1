<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abonnements — Blackenium</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
        <a href="index.html#accueil" class="hover:text-gray-600">Accueil</a>
        <a href="tariff.html" class="hover:text-gray-600">Tarifs</a>
        <a href="abonnement.html" class="text-gray-900 font-semibold">Abonnement</a>
        <a href="index.html#contact" class="hover:text-gray-600">Contact</a>
      </nav>
      <div>
        <a href="index.html#devis" class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Devis Gratuit</a>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-6 pt-28 pb-16 flex-1">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Abonnements: ce que l’on prend en charge</h1>
    <p class="text-gray-600 mb-10">Nos abonnements assurent l’hébergement, les mises à jour et la sécurité continue. Voici un récapitulatif des avantages et ce qui se passe si vous ne prenez pas d’abonnement.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="border border-gray-200 rounded-lg p-6 bg-white shadow">
        <h2 class="text-xl font-semibold mb-2">Starter — 49 €/mois</h2>
        <ul class="text-gray-700 list-disc ml-5 space-y-1">
          <li>Hébergement géré</li>
          <li>Mises à jour basiques</li>
          <li>Surveillance disponibilité</li>
          <li>Assistance par email</li>
        </ul>
      </div>
      <div class="border border-gray-200 rounded-lg p-6 bg-white shadow">
        <h2 class="text-xl font-semibold mb-2">Business — 99 €/mois</h2>
        <ul class="text-gray-700 list-disc ml-5 space-y-1">
          <li>Hébergement premium + CDN</li>
          <li>Sécurité renforcée (pare-feu, sauvegardes)</li>
          <li>Mises à jour prioritaires</li>
          <li>Support prioritaire</li>
        </ul>
      </div>
      <div class="border border-gray-200 rounded-lg p-6 bg-white shadow">
        <h2 class="text-xl font-semibold mb-2">Elite — 199 €/mois</h2>
        <ul class="text-gray-700 list-disc ml-5 space-y-1">
          <li>Serveur dédié / haute performance</li>
          <li>SEO technique continu</li>
          <li>Monitoring avancé 24/7</li>
          <li>Support VIP</li>
        </ul>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white border border-green-200 rounded-lg p-6">
        <h3 class="text-2xl font-semibold text-green-700 mb-3">Avantages à souscrire</h3>
        <ul class="text-gray-700 list-disc ml-5 space-y-2">
          <li>Site toujours en ligne et rapide</li>
          <li>Mises à jour régulières (CMS, plugins, sécurité)</li>
          <li>Restauration rapide en cas de problème</li>
          <li>Équipe disponible pour les demandes courantes</li>
        </ul>
      </div>
      <div class="bg-white border border-red-200 rounded-lg p-6">
        <h3 class="text-2xl font-semibold text-red-700 mb-3">Sans abonnement (inconvénients)</h3>
        <ul class="text-gray-700 list-disc ml-5 space-y-2">
          <li>Risque d’indisponibilité et de lenteurs</li>
          <li>Failles de sécurité non patchées</li>
          <li>Coûts de dépannage plus élevés en cas d’urgence</li>
          <li>Pas de support prioritaire ni de garantie de délai</li>
        </ul>
      </div>
    </div>

    <div class="mt-10">
      <a href="tariff.html" class="text-gray-700 hover:text-gray-900 underline">Voir les formules et tarifs</a>
      <span class="mx-2">•</span>
      <a href="index.html#devis" class="inline-block bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800">Demander un devis</a>
    </div>
  </main>

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
    <div class="text-center text-xs text-gray-500 pb-6">© <span id="year-a"></span> Blackenium. Tous droits réservés.</div>
  </footer>
  <script>
    document.getElementById('year-a').textContent = new Date().getFullYear();
    // Transparence header au scroll
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

