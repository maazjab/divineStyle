<?php

namespace App\Entity;


class Billing{

    private $paymentType;

    private $amountPaid;


    private $deliveryMan;
    
    private $deliveryAddress;

    private $deliveryAmount;

    private $delivery;

    private $customer;

    private $recipient;

    private $recipientPhone;

    private $choice;

    /**
     * Get the value of paymentType
     */ 
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the value of paymentType
     *
     * @return  self
     */ 
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get the value of deliveryMan
     */ 
    public function getDeliveryMan()
    {
        return $this->deliveryMan;
    }

    /**
     * Set the value of deliveryMan
     *
     * @return  self
     */ 
    public function setDeliveryMan($deliveryMan)
    {
        $this->deliveryMan = $deliveryMan;

        return $this;
    }

    
    /**
     * Get the value of delivery
     */ 
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set the value of delivery
     *
     * @return  self
     */ 
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get the value of deliveryAddress
     */ 
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set the value of deliveryAddress
     *
     * @return  self
     */ 
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get the value of customer
     */ 
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */ 
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get the value of amountPaid
     */ 
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * Set the value of amountPaid
     *
     * @return  self
     */ 
    public function setAmountPaid($amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * Get the value of deliveryAmount
     */ 
    public function getDeliveryAmount()
    {
        return $this->deliveryAmount;
    }

    /**
     * Set the value of deliveryAmount
     *
     * @return  self
     */ 
    public function setDeliveryAmount($deliveryAmount)
    {
        $this->deliveryAmount = $deliveryAmount;

        return $this;
    }

    /**
     * Get the value of recipient
     */ 
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set the value of recipient
     *
     * @return  self
     */ 
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get the value of recipientPhone
     */ 
    public function getRecipientPhone()
    {
        return $this->recipientPhone;
    }

    /**
     * Set the value of recipientPhone
     *
     * @return  self
     */ 
    public function setRecipientPhone($recipientPhone)
    {
        $this->recipientPhone = $recipientPhone;

        return $this;
    }

    /**
     * Get the value of choice
     */ 
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Set the value of choice
     *
     * @return  self
     */ 
    public function setChoice($choice)
    {
        $this->choice = $choice;

        return $this;
    }
}