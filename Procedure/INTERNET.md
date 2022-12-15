# Procédure de souscription à une offre internet

- Step 1: Test d'éligibilité (par numéro, adresse ou PTO)
- Step 2: Choix du forfait / Modem / Création de ligne / Portabilité / Engagement
- Step 3: Choix des options: VOIP Entreprise / Email
- Step 4: Coordonnée Installation de la ligne
- Step 4.1: Moyen de livraison du matériel commander
- Step 5: Affichage du panier récapitulatif
- Step 6: Paiement de la commande

## [PROCEDURE]
- Enregistrement des informations de la commande internet
- (si portabilite) Lancement JOB: StartPortabilityNumber
  - `After 2 days` Si OK lancement job SuccessPortabilityNumber sinon ErrorPortabilityNumber
- (si creation de ligne) Lancement JOB: StartCreateInternetLine
  - `After 3 days` Si OK Lancement Job SuccessCreateInternetLine sinon ErrorCreateInternetLine et demande de rendez-vous au client pour technicien
- Lancement JOB: ShippingMaterial
