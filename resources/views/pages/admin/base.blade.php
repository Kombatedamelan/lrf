<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - FORELAB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        .card {
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar-open {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-green-50">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-50 sidebar md:translate-x-0">
        <div class="flex items-center justify-between p-4 border-b border-green-100">
            <div class="flex items-center">
                <i class="fas fa-tree text-3xl text-green-700 mr-2"></i>
                <span class="text-xl font-bold text-green-800">FORELAB</span>
            </div>
            <button id="sidebar-toggle" class="md:hidden text-gray-600 hover:text-green-900">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="#dashboard" class="flex items-center px-4 py-2 text-green-700 font-bold bg-green-50 rounded-lg">
                        <i class="fas fa-tachometer-alt mr-2"></i> Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#actualites" class="flex items-center px-4 py-2 text-gray-600 hover:text-green-900 hover:bg-green-50 rounded-lg">
                        <i class="fas fa-newspaper mr-2"></i> Actualités
                    </a>
                </li>
                <li>
                    <a href="#publications" class="flex items-center px-4 py-2 text-gray-600 hover:text-green-900 hover:bg-green-50 rounded-lg">
                        <i class="fas fa-book-open mr-2"></i> Publications
                    </a>
                </li>
                <li>
                    <a href="#domaines" class="flex items-center px-4 py-2 text-gray-600 hover:text-green-900 hover:bg-green-50 rounded-lg">
                        <i class="fas fa-leaf mr-2"></i> Domaines
                    </a>
                </li>
                <li>
                    <a href="#equipe" class="flex items-center px-4 py-2 text-gray-600 hover:text-green-900 hover:bg-green-50 rounded-lg">
                        <i class="fas fa-users mr-2"></i> Équipe
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 text-red-600 hover:text-red-800 hover:bg-red-50 rounded-lg">
                        <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Mobile menu toggle button -->
    <button id="mobile-menu-button" class="md:hidden fixed top-4 left-4 z-50 text-gray-600 hover:text-green-900">
        <i class="fas fa-bars text-2xl"></i>
    </button>

    <!-- Main Content -->
    <div class="md:ml-64 pt-20 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Dashboard Section -->
            <section id="dashboard" class="mb-12">
                <h1 class="text-3xl font-bold text-green-800 mb-8">Tableau de bord FORELAB</h1>
                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="card bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <i class="fas fa-project-diagram text-3xl text-green-700 mr-4"></i>
                            <div>
                                <h3 class="text-lg font-bold text-green-800">Projets</h3>
                                <p class="text-2xl font-bold text-green-700">42</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <i class="fas fa-users text-3xl text-green-700 mr-4"></i>
                            <div>
                                <h3 class="text-lg font-bold text-green-800">Chercheurs</h3>
                                <p class="text-2xl font-bold text-green-700">18</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <i class="fas fa-book-open text-3xl text-green-700 mr-4"></i>
                            <div>
                                <h3 class="text-lg font-bold text-green-800">Publications</h3>
                                <p class="text-2xl font-bold text-green-700">156</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-12">
                    <h2 class="text-xl font-bold text-green-800 mb-4">Publications par année</h2>
                    <canvas id="publicationsChart" class="w-full h-64"></canvas>
                </div>
                <!-- Recent News -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-12">
                    <h2 class="text-xl font-bold text-green-800 mb-4">Actualités récentes</h2>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h3 class="text-lg font-bold text-green-800">Conférence internationale sur la biodiversité</h3>
                            <p class="text-sm text-gray-600">15 Juin 2023</p>
                            <p class="text-gray-600">Présentation de nos découvertes à Montréal.</p>
                        </div>
                        <div class="border-b pb-4">
                            <h3 class="text-lg font-bold text-green-800">Lancement du projet FOREST 2030</h3>
                            <p class="text-sm text-gray-600">2 Mai 2023</p>
                            <p class="text-gray-600">Financement européen pour la reforestation intelligente.</p>
                        </div>
                    </div>
                    <a href="#actualites" class="text-green-600 hover:text-green-800 mt-4 inline-block">Voir toutes les actualités</a>
                </div>
                <!-- Recent Publications -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-green-800 mb-4">Publications récentes</h2>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h3 class="text-lg font-bold text-green-800">Impact des sécheresses répétées sur les forêts tempérées</h3>
                            <p class="text-sm text-gray-600">2023 | Ecologie</p>
                            <p class="text-gray-600">Étude sur 10 ans des effets des sécheresses.</p>
                        </div>
                        <div class="border-b pb-4">
                            <h3 class="text-lg font-bold text-green-800">Nouvelles espèces de coléoptères en forêt amazonienne</h3>
                            <p class="text-sm text-gray-600">2022 | Biodiversité</p>
                            <p class="text-gray-600">Découverte de 12 nouvelles espèces.</p>
                        </div>
                    </div>
                    <a href="#publications" class="text-green-600 hover:text-green-800 mt-4 inline-block">Voir toutes les publications</a>
                </div>
            </section>

            <!-- Actualités Section -->
            <section id="actualites" class="mb-12">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Gérer les Actualités</h2>
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Ajouter une Actualité</h3>
                    <form id="news-form">
                        <div class="mb-4">
                            <label for="news-title" class="block text-gray-700 font-medium mb-2">Titre</label>
                            <input type="text" id="news-title" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Titre de l'actualité" required>
                        </div>
                        <div class="mb-4">
                            <label for="news-date" class="block text-gray-700 font-medium mb-2">Date</label>
                            <input type="date" id="news-date" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="news-description" class="block text-gray-700 font-medium mb-2">Description</label>
                            <textarea id="news-description" rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Description de l'actualité" required></textarea>
                        </div>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full">
                            Ajouter
                            <i class="fas fa-plus ml-2"></i>
                        </button>
                    </form>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Actualités existantes</h3>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h4 class="text-lg font-bold text-green-800">Conférence internationale sur la biodiversité</h4>
                            <p class="text-sm text-gray-600">15 Juin 2023</p>
                            <p class="text-gray-600">Présentation de nos découvertes à Montréal.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Publications Section -->
            <section id="publications" class="mb-12">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Gérer les Publications</h2>
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Ajouter une Publication</h3>
                    <form id="publication-form">
                        <div class="mb-4">
                            <label for="pub-title" class="block text-gray-700 font-medium mb-2">Titre</label>
                            <input type="text" id="pub-title" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Titre de la publication" required>
                        </div>
                        <div class="mb-4">
                            <label for="pub-year" class="block text-gray-700 font-medium mb-2">Année</label>
                            <input type="number" id="pub-year" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="2023" required>
                        </div>
                        <div class="mb-4">
                            <label for="pub-category" class="block text-gray-700 font-medium mb-2">Catégorie</label>
                            <select id="pub-category" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                <option value="">Sélectionner une catégorie</option>
                                <option value="Ecologie">Écologie</option>
                                <option value="Biodiversité">Biodiversité</option>
                                <option value="Technologie">Technologie</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="pub-description" class="block text-gray-700 font-medium mb-2">Description</label>
                            <textarea id="pub-description" rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Description de la publication" required></textarea>
                        </div>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full">
                            Ajouter
                            <i class="fas fa-plus ml-2"></i>
                        </button>
                    </form>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Publications existantes</h3>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h4 class="text-lg font-bold text-green-800">Impact des sécheresses répétées sur les forêts tempérées</h4>
                            <p class="text-sm text-gray-600">2023 | Écologie</p>
                            <p class="text-gray-600">Étude sur 10 ans des effets des sécheresses.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Domaines Section -->
            <section id="domaines" class="mb-12">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Gérer les Domaines</h2>
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Ajouter un Domaine</h3>
                    <form id="domain-form">
                        <div class="mb-4">
                            <label for="domain-title" class="block text-gray-700 font-medium mb-2">Nom du domaine</label>
                            <input type="text" id="domain-title" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nom du domaine" required>
                        </div>
                        <div class="mb-4">
                            <label for="domain-description" class="block text-gray-700 font-medium mb-2">Description</label>
                            <textarea id="domain-description" rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Description du domaine" required></textarea>
                        </div>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full">
                            Ajouter
                            <i class="fas fa-plus ml-2"></i>
                        </button>
                    </form>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Domaines existants</h3>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h4 class="text-lg font-bold text-green-800">Changement Climatique</h4>
                            <p class="text-gray-600">Étude des impacts du réchauffement climatique sur les écosystèmes forestiers.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Équipe Section -->
            <section id="equipe" class="mb-12">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Gérer l'Équipe</h2>
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Ajouter un Membre</h3>
                    <form id="team-form">
                        <div class="mb-4">
                            <label for="team-name" class="block text-gray-700 font-medium mb-2">Nom complet</label>
                            <input type="text" id="team-name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nom du membre" required>
                        </div>
                        <div class="mb-4">
                            <label for="team-role" class="block text-gray-700 font-medium mb-2">Rôle</label>
                            <input type="text" id="team-role" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rôle dans l'équipe" required>
                        </div>
                        <div class="mb-4">
                            <label for="team-specialty" class="block text-gray-700 font-medium mb-2">Spécialité</label>
                            <input type="text" id="team-specialty" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Spécialité du membre" required>
                        </div>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 Asi-rounded-full">
                            Ajouter
                            <i class="fas fa-plus ml-2"></i>
                        </button>
                    </form>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Membres existants</h3>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h4 class="text-lg font-bold text-green-800">Dr. Sophie Martin</h4>
                            <p class="text-sm text-gray-600">Directrice de recherche</p>
                            <p class="text-gray-600">Spécialiste en écologie forestière</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-green-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-t border-green-800 pt-8 text-center">
                <p class="text-green-300">© 2023 FORELAB. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Sidebar toggle for mobile
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const sidebar = document.getElementById('sidebar');

        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-open');
        });

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-open');
        });

        // Smooth scrolling for sidebar links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 20,
                        behavior: 'smooth'
                    });
                    // Close sidebar on mobile after clicking
                    sidebar.classList.remove('sidebar-open');
                }
            });
        });

        // Chart.js for publications per year
        const ctx = document.getElementById('publicationsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Nombre de publications',
                    data: [20, 25, 30, 35, 40, 45],
                    backgroundColor: '#2C5E1A',
                    borderColor: '#1A2E0D',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Form submissions (simulated)
        const forms = ['news-form', 'publication-form', 'domain-form', 'team-form'];
        forms.forEach(formId => {
            const form = document.getElementById(formId);
            if (form) {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    alert('Entrée ajoutée avec succès ! (Simulation)');
                    form.reset();
                });
            }
        });
    </script>
</body>
</html>