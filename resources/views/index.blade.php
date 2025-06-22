
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORELAB - Laboratoire de Recherche Forestière</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;600;700&display=swap');
        
        :root {
            --primary: #2C5E1A;
            --secondary: #5A8F3D;
            --accent: #8CB369;
            --light: #F4F7F0;
            --dark: #1A2E0D;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }
        
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }
        
        .hero {
            background: linear-gradient(rgba(44, 94, 26, 0.8), rgba(44, 94, 26, 0.6)), url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
        }
        
        .leaf-bg {
            background-image: url('https://www.transparenttextures.com/patterns/leaves.png');
            opacity: 0.1;
        }
        
        .research-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .timeline-item:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -20px;
            width: 2px;
            height: 20px;
            background-color: var(--accent);
        }
        
        @media (max-width: 768px) {
            .timeline-item:not(:last-child)::after {
                left: 20px;
            }
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="relative">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-tree text-3xl text-green-700 mr-2"></i>
                        <span class="text-xl font-bold text-green-800">FORELAB</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="#accueil" class="text-green-700 hover:text-green-900 px-3 py-2 font-medium">Accueil</a>
                        <a href="#recherche" class="text-gray-600 hover:text-green-900 px-3 py-2 font-medium">Recherches</a>
                        <a href="#equipe" class="text-gray-600 hover:text-green-900 px-3 py-2 font-medium">Équipe</a>
                        <a href="#publications" class="text-gray-600 hover:text-green-900 px-3 py-2 font-medium">Publications</a>
                        <a href="#contact" class="text-gray-600 hover:text-green-900 px-3 py-2 font-medium">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-green-900 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#accueil" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-green-900">Accueil</a>
                <a href="#recherche" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-green-900">Recherches</a>
                <a href="#equipe" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-green-900">Équipe</a>
                <a href="#publications" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-green-900">Publications</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-green-900">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="hero flex items-center justify-center text-white pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">FORELAB</h1>
            <h2 class="text-2xl md:text-3xl font-semibold mb-8">Laboratoire de Recherche Forestière Avancée</h2>
            <p class="text-xl max-w-3xl mx-auto mb-10">Dédié à l'étude et à la préservation des écosystèmes forestiers pour un avenir durable</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#recherche" class="bg-white text-green-700 hover:bg-green-50 font-bold py-3 px-8 rounded-full transition duration-300">Nos recherches</a>
                <a href="#contact" class="border-2 border-white hover:bg-white hover:text-green-700 font-bold py-3 px-8 rounded-full transition duration-300">Nous contacter</a>
            </div>
        </div>
    </section>


    
    <!-- Actualités Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Actualités</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Les dernières nouvelles et événements de notre laboratoire.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Actualité 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl border border-green-100">
                    <div class="h-48 bg-green-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Conférence internationale" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium">Événement | 15 Juin 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Conférence internationale sur la biodiversité</h3>
                        <p class="text-gray-600 text-sm mb-4">Notre équipe a présenté ses dernières découvertes lors de la conférence mondiale sur la biodiversité à Montréal.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center text-sm">
                            Lire la suite
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Actualité 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl border border-green-100">
                    <div class="h-48 bg-green-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Nouveau projet" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium">Projet | 2 Mai 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Lancement du projet FOREST 2030</h3>
                        <p class="text-gray-600 text-sm mb-4">Nous avons obtenu un financement européen pour notre nouveau projet de reforestation intelligente.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center text-sm">
                            Lire la suite
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Actualité 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl border border-green-100">
                    <div class="h-48 bg-green-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1585409677983-0fadf413b936?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Nouveau membre" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium">Recrutement | 10 Avril 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Bienvenue à notre nouveau chercheur</h3>
                        <p class="text-gray-600 text-sm mb-4">Le Dr. Lucas Bernard rejoint notre équipe en tant qu'expert en télédétection forestière.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center text-sm">
                            Lire la suite
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-green-700 hover:bg-green-800 transition duration-300">
                    Voir toutes les actualités
                    <i class="fas fa-chevron-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Research Axes Section -->
    <section id="recherche" class="py-20 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Axes de Recherche</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Nos recherches s'articulent autour de 4 axes principaux, chacun crucial pour la compréhension et la préservation des écosystèmes forestiers.</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Axe 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 bg-green-700 flex items-center justify-center p-8">
                            <i class="fas fa-leaf text-white text-5xl"></i>
                        </div>
                        <div class="md:w-2/3 p-8">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Écologie Forestière</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Dynamique des peuplements forestiers</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Interactions espèces-environnement</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Cycle des nutriments et productivité</span>
                                </li>
                            </ul>
                            <a href="#" class="mt-6 inline-flex items-center text-green-600 font-medium hover:text-green-800">
                                En savoir plus
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Axe 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 bg-green-600 flex items-center justify-center p-8">
                            <i class="fas fa-dna text-white text-5xl"></i>
                        </div>
                        <div class="md:w-2/3 p-8">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Génétique et Adaptation</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Diversité génétique des espèces forestières</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Résilience aux changements climatiques</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Amélioration génétique pour la conservation</span>
                                </li>
                            </ul>
                            <a href="#" class="mt-6 inline-flex items-center text-green-600 font-medium hover:text-green-800">
                                En savoir plus
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Axe 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 bg-green-500 flex items-center justify-center p-8">
                            <i class="fas fa-satellite-dish text-white text-5xl"></i>
                        </div>
                        <div class="md:w-2/3 p-8">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Télédétection et Modélisation</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Surveillance par drones et satellites</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Modèles prédictifs de croissance</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Détection précoce des risques</span>
                                </li>
                            </ul>
                            <a href="#" class="mt-6 inline-flex items-center text-green-600 font-medium hover:text-green-800">
                                En savoir plus
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Axe 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 bg-green-400 flex items-center justify-center p-8">
                            <i class="fas fa-users text-white text-5xl"></i>
                        </div>
                        <div class="md:w-2/3 p-8">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Gestion Durable et Société</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Politiques forestières et gouvernance</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Services écosystémiques et valorisation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span>Participation des acteurs locaux</span>
                                </li>
                            </ul>
                            <a href="#" class="mt-6 inline-flex items-center text-green-600 font-medium hover:text-green-800">
                                En savoir plus
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 bg-green-700 rounded-xl p-8 text-white">
                <div class="md:flex items-center">
                    <div class="md:w-2/3 mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Approche Transdisciplinaire</h3>
                        <p>Nos 4 axes de recherche interagissent constamment pour offrir une vision holistique des enjeux forestiers. Chaque projet intègre au moins deux axes pour garantir des solutions innovantes et durables.</p>
                    </div>
                    <div class="md:w-1/3 md:text-right">
                        <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-green-700 bg-white hover:bg-green-50 transition duration-300">
                            Nos méthodologies
                            <i class="fas fa-microscope ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>










    <!-- About Section -->
    <section class="py-20 bg-white leaf-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Notre Mission</h2>
                    <p class="text-gray-700 mb-6">Fondé en 1995, FORELAB est un centre d'excellence dans la recherche forestière, engagé dans l'étude des écosystèmes forestiers et le développement de solutions durables pour leur préservation.</p>
                    <p class="text-gray-700 mb-6">Notre équipe multidisciplinaire travaille sur des projets innovants allant de la biodiversité aux technologies de surveillance forestière, en passant par l'impact du changement climatique.</p>
                    <div class="flex items-center">
                        <div class="bg-green-100 p-4 rounded-full mr-4">
                            <i class="fas fa-leaf text-green-700 text-2xl"></i>
                        </div>
                        <p class="text-green-700 font-medium">Plus de 25 ans d'expertise au service des forêts</p>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="bg-green-700 rounded-lg overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1585409677983-0fadf413b936?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Forêt" class="w-full h-auto opacity-90">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-lg shadow-lg w-2/3">
                        <h3 class="text-xl font-bold text-green-800 mb-2">Chiffres clés</h3>
                        <div class="flex justify-between">
                            <div class="text-center">
                                <p class="text-3xl font-bold text-green-700">42</p>
                                <p class="text-gray-600">Projets</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-bold text-green-700">18</p>
                                <p class="text-gray-600">Chercheurs</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-bold text-green-700">156</p>
                                <p class="text-gray-600">Publications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Areas -->
    <section id="recherche" class="py-20 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Domaines de Recherche</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Nos recherches couvrent un large éventail de thématiques liées aux écosystèmes forestiers et à leur gestion durable.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Research Card 1 -->
                <div class="research-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out">
                    <div class="h-48 bg-green-700 flex items-center justify-center">
                        <i class="fas fa-temperature-low text-white text-6xl animate-float"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Changement Climatique</h3>
                        <p class="text-gray-600 mb-4">Étude des impacts du réchauffement climatique sur les écosystèmes forestiers et développement de stratégies d'adaptation.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            En savoir plus
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Research Card 2 -->
                <div class="research-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out">
                    <div class="h-48 bg-green-600 flex items-center justify-center">
                        <i class="fas fa-bug text-white text-6xl animate-float"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Biodiversité</h3>
                        <p class="text-gray-600 mb-4">Recensement et protection des espèces animales et végétales dans les forêts tempérées et tropicales.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            En savoir plus
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Research Card 3 -->
                <div class="research-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out">
                    <div class="h-48 bg-green-500 flex items-center justify-center">
                        <i class="fas fa-satellite-dish text-white text-6xl animate-float"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Télédétection</h3>
                        <p class="text-gray-600 mb-4">Utilisation de technologies avancées (drones, satellites) pour le suivi et la cartographie des forêts.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            En savoir plus
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Research Card 4 -->
                <div class="research-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out">
                    <div class="h-48 bg-green-700 flex items-center justify-center">
                        <i class="fas fa-recycle text-white text-6xl animate-float"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Gestion Durable</h3>
                        <p class="text-gray-600 mb-4">Développement de méthodes de gestion forestière équilibrant exploitation et conservation.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            En savoir plus
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Research Card 5 -->
                <div class="research-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out">
                    <div class="h-48 bg-green-600 flex items-center justify-center">
                        <i class="fas fa-fire text-white text-6xl animate-float"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Risques Naturels</h3>
                        <p class="text-gray-600 mb-4">Prévention et gestion des incendies de forêt, glissements de terrain et autres risques naturels.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            En savoir plus
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Research Card 6 -->
                <div class="research-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out">
                    <div class="h-48 bg-green-500 flex items-center justify-center">
                        <i class="fas fa-dna text-white text-6xl animate-float"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Génétique Forestière</h3>
                        <p class="text-gray-600 mb-4">Recherches sur la diversité génétique des espèces forestières et leur résilience aux maladies.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            En savoir plus
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="equipe" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Notre Équipe</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Une équipe pluridisciplinaire de chercheurs passionnés par la forêt et sa préservation.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-64 bg-green-100 flex items-center justify-center relative">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Dr. Sophie Martin" class="w-40 h-40 rounded-full border-4 border-white shadow-md">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-green-800 mb-1">Dr. Sophie Martin</h3>
                        <p class="text-green-600 font-medium mb-3">Directrice de recherche</p>
                        <p class="text-gray-600 text-sm mb-4">Spécialiste en écologie forestière et changement climatique</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-file-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-64 bg-green-100 flex items-center justify-center relative">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Jean Dupont" class="w-40 h-40 rounded-full border-4 border-white shadow-md">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-green-800 mb-1">Dr. Jean Dupont</h3>
                        <p class="text-green-600 font-medium mb-3">Chercheur senior</p>
                        <p class="text-gray-600 text-sm mb-4">Expert en télédétection et systèmes d'information géographique</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-file-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-64 bg-green-100 flex items-center justify-center relative">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dr. Amélie Leroy" class="w-40 h-40 rounded-full border-4 border-white shadow-md">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-green-800 mb-1">Dr. Amélie Leroy</h3>
                        <p class="text-green-600 font-medium mb-3">Chercheuse en biodiversité</p>
                        <p class="text-gray-600 text-sm mb-4">Spécialiste des interactions plantes-insectes en milieu forestier</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-file-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-64 bg-green-100 flex items-center justify-center relative">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Dr. Thomas Moreau" class="w-40 h-40 rounded-full border-4 border-white shadow-md">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-green-800 mb-1">Dr. Thomas Moreau</h3>
                        <p class="text-green-600 font-medium mb-3">Chercheur en génétique</p>
                        <p class="text-gray-600 text-sm mb-4">Expert en génomique forestière et résistance aux pathogènes</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="text-gray-500 hover:text-green-600"><i class="fas fa-file-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-green-700 hover:bg-green-800 transition duration-300">
                    Voir toute l'équipe
                    <i class="fas fa-chevron-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section id="publications" class="py-20 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Nos Publications</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez nos dernières recherches et contributions scientifiques.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Publication 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-book-open text-green-700 text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium">Ecologie | 2023</span>
                            <span class="text-xs bg-green-100 text-green-800 py-1 px-2 rounded-full">Nouveau</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Impact des sécheresses répétées sur les forêts tempérées</h3>
                        <p class="text-gray-600 text-sm mb-4">Étude longitudinale sur 10 ans montrant les effets cumulatifs des sécheresses estivales sur la croissance des arbres.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center text-sm">
                            Lire l'article
                            <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Publication 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-book-open text-green-700 text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium">Biodiversité | 2022</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Nouvelles espèces de coléoptères en forêt amazonienne</h3>
                        <p class="text-gray-600 text-sm mb-4">Découverte et description de 12 nouvelles espèces d'insectes dans des zones forestières peu étudiées.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center text-sm">
                            Lire l'article
                            <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Publication 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="h-48 bg-green-200 flex items-center justify-center">
                        <i class="fas fa-book-open text-green-700 text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium">Technologie | 2022</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Détection précoce des feux de forêt par IA</h3>
                        <p class="text-gray-600 text-sm mb-4">Nouvel algorithme utilisant l'imagerie satellite pour détecter les départs de feu avec 94% de précision.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center text-sm">
                            Lire l'article
                            <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-green-700 hover:bg-green-800 transition duration-300">
                    Toutes nos publications
                    <i class="fas fa-chevron-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Notre Histoire</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Les grandes étapes de notre laboratoire depuis sa création.</p>
            </div>
            
            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-green-200 transform -translate-x-1/2"></div>
                
                <!-- Timeline items -->
                <div class="space-y-12 md:space-y-0">
                    <!-- Item 1 -->
                    <div class="timeline-item relative md:flex justify-center md:even:flex-row-reverse">
                        <div class="md:w-5/12 mb-8 md:mb-0 md:px-8">
                            <div class="bg-green-50 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-800 mb-2">1995 - Fondation</h3>
                                <p class="text-gray-600">Création du laboratoire avec une équipe de 5 chercheurs dédiés à l'étude des forêts françaises.</p>
                            </div>
                        </div>
                        <div class="hidden md:flex items-center justify-center md:w-2/12">
                            <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center text-white font-bold">1</div>
                        </div>
                        <div class="md:w-5/12"></div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="timeline-item relative md:flex justify-center md:even:flex-row-reverse">
                        <div class="md:w-5/12 mb-8 md:mb-0 md:px-8">
                            <div class="bg-green-50 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-800 mb-2">2002 - Premier projet international</h3>
                                <p class="text-gray-600">Collaboration avec le Brésil pour étudier la biodiversité en forêt amazonienne.</p>
                            </div>
                        </div>
                        <div class="hidden md:flex items-center justify-center md:w-2/12">
                            <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center text-white font-bold">2</div>
                        </div>
                        <div class="md:w-5/12"></div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="timeline-item relative md:flex justify-center md:even:flex-row-reverse">
                        <div class="md:w-5/12"></div>
                        <div class="hidden md:flex items-center justify-center md:w-2/12">
                            <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center text-white font-bold">3</div>
                        </div>
                        <div class="md:w-5/12 mb-8 md:mb-0 md:px-8">
                            <div class="bg-green-50 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-800 mb-2">2010 - Prix scientifique</h3>
                                <p class="text-gray-600">Reconnaissance internationale pour nos travaux sur l'adaptation des forêts au changement climatique.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="timeline-item relative md:flex justify-center md:even:flex-row-reverse">
                        <div class="md:w-5/12"></div>
                        <div class="hidden md:flex items-center justify-center md:w-2/12">
                            <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center text-white font-bold">4</div>
                        </div>
                        <div class="md:w-5/12 mb-8 md:mb-0 md:px-8">
                            <div class="bg-green-50 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-800 mb-2">2018 - Nouveau bâtiment</h3>
                                <p class="text-gray-600">Inauguration de nos nouveaux locaux équipés de technologies de pointe pour la recherche.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="timeline-item relative md:flex justify-center md:even:flex-row-reverse">
                        <div class="md:w-5/12 mb-8 md:mb-0 md:px-8">
                            <div class="bg-green-50 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-800 mb-2">2023 - Programme Horizon</h3>
                                <p class="text-gray-600">Lancement d'un ambitieux programme de recherche sur la reforestation intelligente.</p>
                            </div>
                        </div>
                        <div class="hidden md:flex items-center justify-center md:w-2/12">
                            <div class="bg-green-700 rounded-full h-8 w-8 flex items-center justify-center text-white font-bold">5</div>
                        </div>
                        <div class="md:w-5/12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-16 bg-green-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Nos Partenaires</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Nous collaborons avec des institutions prestigieuses à travers le monde.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=Université" alt="Partenaire 1" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=CNRS" alt="Partenaire 2" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=ONF" alt="Partenaire 3" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=WWF" alt="Partenaire 4" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=UE" alt="Partenaire 5" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=NASA" alt="Partenaire 6" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=FAO" alt="Partenaire 7" class="h-12">
                </div>
                <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-sm">
                    <img src="https://via.placeholder.com/150x60?text=GreenPeace" alt="Partenaire 8" class="h-12">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Contactez-nous</h2>
                    <p class="text-gray-600 mb-8">Que vous soyez chercheur, étudiant, partenaire ou simplement intéressé par nos travaux, n'hésitez pas à nous contacter.</p>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-green-700"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-800 mb-1">Adresse</h3>
                                <p class="text-gray-600">15 Rue des Forêts, 75000 Paris, France</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-green-700"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-800 mb-1">Téléphone</h3>
                                <p class="text-gray-600">+33 1 23 45 67 89</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-green-700"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-800 mb-1">Email</h3>
                                <p class="text-gray-600">contact@forelab-research.org</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-green-700"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-800 mb-1">Horaires</h3>
                                <p class="text-gray-600">Lundi-Vendredi: 9h-18h</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <h3 class="font-bold text-green-800 mb-4">Suivez-nous</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-700 p-3 rounded-full transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-700 p-3 rounded-full transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-700 p-3 rounded-full transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-700 p-3 rounded-full transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-green-100 hover:bg-green-200 text-green-700 p-3 rounded-full transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-green-50 p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold text-green-800 mb-6">Envoyez-nous un message</h3>
                        <form>
                            <div class="mb-6">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nom complet</label>
                                <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Votre nom">
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="votre@email.com">
                            </div>
                            <div class="mb-6">
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet</label>
                                <select id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Sélectionnez un sujet</option>
                                    <option value="research">Collaboration de recherche</option>
                                    <option value="internship">Stage/Emploi</option>
                                    <option value="partnership">Partenariat</option>
                                    <option value="information">Demande d'information</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Votre message..."></textarea>
                            </div>
                            <button type="submit" class="w-full bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-4 rounded-full transition duration-300">
                                Envoyer le message
                                <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="h-96 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.99144060821!2d2.292292615674389!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1628683205039!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer class="bg-green-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-tree text-3xl text-green-300 mr-2"></i>
                        <span class="text-xl font-bold text-white">FORELAB</span>
                    </div>
                    <p class="text-green-200 mb-4">Laboratoire de recherche dédié à l'étude et à la préservation des écosystèmes forestiers.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-green-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#accueil" class="text-green-200 hover:text-white">Accueil</a></li>
                        <li><a href="#recherche" class="text-green-200 hover:text-white">Domaines de recherche</a></li>
                        <li><a href="#equipe" class="text-green-200 hover:text-white">Notre équipe</a></li>
                        <li><a href="#publications" class="text-green-200 hover:text-white">Publications</a></li>
                        <li><a href="#contact" class="text-green-200 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Recherches</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-green-200 hover:text-white">Changement climatique</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white">Biodiversité</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white">Télédétection</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white">Gestion durable</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white">Génétique forestière</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Newsletter</h3>
                    <p class="text-green-200 mb-4">Abonnez-vous à notre newsletter pour recevoir nos dernières actualités.</p>
                    <form class="flex">
                        <input type="email" placeholder="Votre email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-green-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-green-300 mb-4 md:mb-0">© 2023 FORELAB. Tous droits réservés.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-green-300 hover:text-white">Mentions légales</a>
                    <a href="#" class="text-green-300 hover:text-white">Politique de confidentialité</a>
                    <a href="#" class="text-green-300 hover:text-white">Conditions d'utilisation</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="back-to-top" class="hidden fixed bottom-8 right-8 bg-green-700 text-white p-3 rounded-full shadow-lg hover:bg-green-800 transition duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Form submission (example)
        const contactForm = document.querySelector('form');
        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Merci pour votre message! Nous vous contacterons bientôt.');
                contactForm.reset();
            });
        }
    </script>
</body>
</html>