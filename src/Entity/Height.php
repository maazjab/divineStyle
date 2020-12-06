<?php

namespace App\Entity;

use App\Repository\HeightRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=HeightRepository::class)
 * @UniqueEntity("name")
 */
class Height
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="height")
     */
    // private $products;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="heights")
     */
    private $register;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    // /**
    //  * @return Collection|Product[]
    //  */
    // public function getProducts(): Collection
    // {
    //     return $this->products;
    // }

    // public function addProduct(Product $product): self
    // {
    //     if (!$this->products->contains($product)) {
    //         $this->products[] = $product;
    //         $product->setHeight($this);
    //     }

    //     return $this;
    // }

    // public function removeProduct(Product $product): self
    // {
    //     if ($this->products->contains($product)) {
    //         $this->products->removeElement($product);
    //         // set the owning side to null (unless already changed)
    //         if ($product->getHeight() === $this) {
    //             $product->setHeight(null);
    //         }
    //     }

    //     return $this;
    // }

    public function getRegister(): ?User
    {
        return $this->register;
    }

    public function setRegister(?User $register): self
    {
        $this->register = $register;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Get the value of slug
     */ 
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @return  self
     */ 
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }
}
