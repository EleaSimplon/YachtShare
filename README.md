# YachtShare

Intégration avancée - le templating



🛠️ TP
Le client souhaite un POC de sa future interface, Yacht Share Services, une plateforme de cobaturage entre propriétaires de bateau.

Le Chef de projet de votre entreprise a validé les besoins du client et a confié la conception du wireframe au Directeur artistique, dont voici ses consignes :
Récupérez le wireframe ici
Les couleurs données sont à titre indicatif, mais vous devrez nécessairement définir une couleur primaire et une secondaire 
Les interactions utilisateurs devront être intégrées et actives (effet de survol, carrousel,  dropdown, slider, etc.)
Du texte de substitution devra être utilisé lorsque c'est nécessaire (lorem ipsum …)
L'interface devra être responsive et être optimisée pour la navigation mobile
Le Lead développeur vous impose ces choix techniques, vous devrez donc utiliser le framework d'intégration suivant : GitHub - CodyHouse/codyhouse-framework: Design System Template en respectant ses principes et méthodologies d'intégration (BEM) ainsi que son pré-processeur Sass .
En vue d’être prochainement développé, le Lead développeur vous demande de mettre en place un templating simple en PHP avec notamment :
Un layout principal (que vous nommerez layout.php)
Des partials pour les éléments invariants de l'interface (header, nav, footer, sidebar, etc.)
Un dossier contenant les pages/view (Ces pages PHP seront importées dans le layout principal, vous les nommerez selon leurs fonction dans l'interface)
Un dossier contenant les partials (Inclus en fonction du besoin de chacune des pages)
Un dossier contenant les assets (rangés par sous-dossiers en fonction des types de fichiers: Js, CSS, Scss, images.. C'est ici que vous importerez le code source du framework css et compilerez vos styles custom)
Toutes les pages devront être reliées entre elles (par de simples liens href), le parcours utilisateur devra être ininterrompu
Aucun développement PHP ne vous ai demandé, les formulaires ne doivent comporter aucun traitement
Il vous est fortement conseillé d'utiliser les méthodologies de projet web type Kanban ou Scrum afin de respecter les contraintes et la deadline du projet.
📝 Documentation : Get started | CodyHouse & Components | CodyHouse
