<?php

namespace App\Banque;

use App\Client\Compte as Compteclient;

/**
 * Compte avec taux d'intérêts
 */
class CompteEpargne extends Compte
{ 
    /**
     * Taux d'intérêts du compte
     * @var int
     */
    private $taux_interets;

    /**
     * Constructeur du compte épargne
     * @param Compteclient $compte Compte Client du titulaire
     * @param float $montant Nom du montant du solde à l'ouverture
     * @param int $taux Taux d'intérêts
     * @return void
     */
    public function __construct(Compteclient $compte, float $montant, int $taux)
    {
        // On transfère les valeurs nécessaires au constructeur parent
        parent::__construct($compte, $montant);

        $this->taux_interets = $taux;

    }
    /**
     * Get taux d'intérêts du compte
     *
     * @return  int
     */ 
    public function getTauxInterets(): int
    {
        return $this->taux_interets;
    }

    /**
     * Set taux d'intérêts du compte
     *
     * @param  int  $taux_interets  Taux d'intérêts du compte
     *
     * @return  self
     */ 
    public function setTauxInterets(int $taux_interets): self
    {
        if($taux_interets >= 0){
           $this->taux_interets = $taux_interets; 
        }

        return $this;
    }

    public function verserInterets(){
        $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
    }
}