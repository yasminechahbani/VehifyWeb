# 🚍 Application Web - Gestion du Transport Terrestre - Vehify

Cette plateforme permet la gestion complète des activités liées au transport terrestre, incluant la gestion des véhicules, cartes grises, employés, réservations, visites techniques et services des mines.

## 📌 Description

Le projet vise à digitaliser les processus administratifs liés au transport terrestre afin de :
- Suivre les véhicules (immatriculation, état, carte grise, etc.)
- Gérer les réservations et les utilisateurs
- Organiser les visites techniques et services des mines
- Optimiser la gestion des employés et des comptes

---

## 🧩 Fonctionnalités principales

- 🔐 Gestion des comptes utilisateurs (rôles, sécurité)
- 📅 Gestion des réservations
- 👨‍🔧 Gestion des employés
- 🚗 Gestion des véhicules et cartes grises (avec OCR)
- 🔍 Analyse automatique d'images de véhicules (via API Gemini et CarNet AI)
- 🛠️ Suivi des visites techniques
- ⚙️ Gestion du service des mines
- 📊 Dashboard avec statistiques en temps réel

---

## ⚙️ Installation

1. Clonez le projet :
git clone https://github.com/yasminechahbani/VehifyWeb.git

cd VehifyWeb

2. Installez les dépendances :
composer install

npm install  # si applicable


3. Configurez la base de données dans le fichier .env.local :
DATABASE_URL="mysql://root:@127.0.0.1:3306/pisql?"


4. Créez et migrez la base de données :
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate


5. Lancez le serveur Symfony :
symfony server:start



🛠 Technologies utilisées
.Symfony 6 (PHP 8.1+)

.Doctrine ORM / MySQL

.Twig + Bootstrap 5 + jQuery

.Librairies OCR : OCR.Space, Gemini, Immegga, Stripe


👤 Auteur
Projet développé par Motez Selmi, Ashref Sehli, Yasmine Chahbani, Emna Azzouz, Mohamed Chamseddine Bejaoui, Mohamed Karim Kebaili, encadrés dans le cadre du module PIDEV – 2025.
