# Processus MOBILE
### Commande ligne mobile sans téléphone

- Step1: Enregistrement du client
- Step2: Choix du forfait
- Step3: Choix du numéro de téléphone ou portabilité du numéro
- Step4: Enregistrement des informations bancaire (PRLV SEPA)
- Step5: Paiement de la commande en cours

[Procedure]:
- Enregistrement des informations de la commande mobile
- Lancement JOB: InitMobileLine
  -> Lancement su JOB: ShippingSimMobile
- Le client demande l'activation de sa ligne par l'intermédiaire du numéro de serie de 
la carte sim
- Lancement JOB: ActiveMobileLine
- Lancement JOB: ActiveMobileSIM

### Commande ligne mobile avec téléphone
<i>Accessible uniquement si un abonnement est déja souscrit</i>
#### Paiement Comptant
- Step1: Choix du téléphone
- Step2: Choix de la ligne de liaison (1 téléphone par ligne)
- Step3: Paiement de la commande


#### Paiement en abonnement (24 mois Leasing Fintech)
- Step1: Choix du téléphone
- Step2: Choix de la ligne de liaison (1 téléphone par ligne)
- Step3: Signature du contrat Leasing en liaison avec bank fintech
- Step4: Paiement de la commande (Montant Prov Téléphone)
