# Procédure de souscription à un forfait VOIP

- Step 1: Choix du forfait
- Step 1.1: Choix du numéro
- Step 1.2: Appel vers les mobiles
- Step 1.3: Association de téléphone (matériel)
- Step 2: Affichage du panier
- Step 3: Accessoire optionnel
- Step 4: Affichage du panier récapitulatif
- Step 5: Paiement de la commande

## [PROCEDURE]
- Enregistrement des informations de la commande VOIP
- Lancement JOB: StartCreationLine (Liaison PBX)
  - `After ~ 1 heure` si OK FinishCreationLine sinon ErrorCreationLine (Création intervention technicien (ticket))
- Lancement JOB: ShippingMaterial
