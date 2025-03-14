# Documentation de l'extension Carrière pour TYPO3

Bienvenue dans la documentation du **CDG82** dédiée à l'utilisation de l'extension **Carrière** dans TYPO3.
Cette extension a pour objectif de simplifier la représentation des différents **cadres** et **grades** de la fonction publique.

Grâce à ce guide, vous pourrez mieux comprendre et utiliser cette extension ainsi que ses composants.

---

## 🚀 Débuter avec l'extension Carrière

Pour chaque cadre ou grade, vous devez d'abord créer un **cadre principal**, qui comprendra :
- Un **en-tête** avec plusieurs paramètres : un titre, un lien vers une page et un sous-titre.
- Un **contenu** structuré de manière dynamique via l’interface TYPO3.

### 🏗️ Structure des contenus
L'extension propose deux sections principales :

- **Section Cadre**
- **Section Grade**

---

## 🏛️ Section Cadre

Conçue pour les cadres, cette section est divisée en trois parties :

1. **Promotion** :
   - Permet d'afficher une flèche indiquant la promotion d’une catégorie B vers A.
   - Certains cadres ne sont accessibles que par d’autres voies, d’où la possibilité de personnaliser l’alignement de la flèche.

2. **Nom de la catégorie** :
   - Il suffit d’indiquer le nom de la catégorie (ex : A, B, C...).
   - Une zone d’en-tête est disponible pour renseigner ces informations.

3. **Contenu** :
   - Mise en place automatique des composants essentiels :
     - **Carte simple (Card)**
     - **Grille à deux colonnes**
     - **Grille à trois colonnes**

---

## 🎖️ Section Grade

Plus complète que la section cadre, elle se compose de plusieurs éléments :

1. **En-tête** :
   - Peut contenir un titre et une aide promotionnelle détaillant les conditions d’accès au grade.

2. **Contenu** :
   - Affichage des différentes **cartes de grade**.
   - Possibilité d’utiliser des **grilles en deux ou trois colonnes**.

3. **Colonnes gauche et droite** :
   - **Gauche** : Contient uniquement un bouton.
   - **Droite** : Permet de configurer un autre grade de A à Z (en-tête, contenu et boutons).

---

## 🃏 Composants spécifiques

### 🎴 Card Cadre

- Contient un **titre** et un **lien** vers la page du cadre concerné.
- Un bouton vous permet de sélectionner facilement la page TYPO3 souhaitée.
- Possibilité d’activer une **promotion** : une petite flèche s'affichera au-dessus du cadre.

> **Note** : Si votre cadre est le premier de la hiérarchie, inutile d’activer cette option 😉.

### 🏗️ Grilles et séparateurs

#### **Grille à deux colonnes**
- Contient **deux cartes** (cadre ou grade) et un élément de séparation.
- Deux types de séparateurs disponibles :
  - **Flèche** → (Utilisée principalement pour les promotions internes des cadres).
  - **Texte** (ex: « ou » pour les grades, indiquant plusieurs chemins possibles d’obtention).

#### **Grille à trois colonnes**
- Permet une mise en page plus élaborée en affichant davantage d’informations simultanément.

### 🎖️ Card Grade

- Contient **trois éléments textuels** :
  - Un **contenu principal**.
  - Deux **éléments complémentaires**, optionnels, servant à préciser :
    - Les conditions d’obtention.
    - La liste des emplois concernés.
    - Les quotas à respecter.

---

Cette documentation est conçue pour vous guider pas à pas dans l'utilisation de l'extension **Carrière**. N’hésitez pas à explorer les différentes options pour adapter les contenus selon vos besoins ! 🚀

