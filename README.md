# 💸 Projet Symfony – Application de Transfert d’Argent

Projet réalisé dans le cadre de la certification DWWM – Développeur Web & Web Mobile  
📍 Formation : Nextformation – 2024  
👩‍💻 Développé par : Rabiatou BAH

---

## 📌 Description

Cette application web permet à un utilisateur de :
- Créer un compte sécurisé
- Se connecter à son espace
- Effectuer un transfert d’argent vers un autre utilisateur
- Consulter l’historique de ses opérations
- Visualiser les mouvements sur son compte

Le projet a été développé en autonomie, de la conception à la mise en ligne du dépôt GitHub.

---

## 🧠 Objectifs pédagogiques

- Mettre en œuvre un projet complet avec **Symfony**
- Structurer une architecture **MVC** avec **Doctrine ORM**
- Utiliser une base de données **MySQL**
- Assurer la sécurité des connexions et des transferts
- Concevoir une interface utilisateur simple et responsive

---

## ⚙️ Stack technique

| Front-end            | Back-end             | Base de données | Outils & DevOps      |
|----------------------|----------------------|------------------|----------------------|
| HTML5, CSS3          | PHP 8, Symfony 6     | MySQL            | Git, GitHub, VS Code |
| JavaScript (DOM)     | Twig (templates)     | Doctrine ORM     | PhpMyAdmin           |

---

## 🚀 Fonctionnalités principales

- ✅ Authentification et gestion des sessions
- ✅ Formulaire de transfert avec validation
- ✅ Liste des opérations et filtres dynamiques
- ✅ Protection des routes (security.yaml)
- ✅ Design responsive pour mobile / desktop

---


## 🔧 Comment installer le projet

```bash
git clone https://github.com/TONUTILISATEUR/symfony-transfer-app.git
cd symfony-transfer-app
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
symfony server:start

 
 
