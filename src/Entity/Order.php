<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email(message="e-mail nie je v spravnom formate")
     * @Assert\NotBlank(message="Vyplnte prosim Vas email")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Vyplnte prosim Vase telefonne cislo")
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Vyplnte prosim Vase meno a priezvisko")
     */
    private $nameAndSurname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Vyplnte prosim ulicu")
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Vyplnte prosim Vase mesto")
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     * @Assert\Regex("/\d/")
     * @Assert\Length(min="5", max="5")
     * @Assert\NotBlank(message="Vyplnte prosim PSC v tvare 12345")
     */
    private $zip;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Payment", inversedBy="orders")
     * @Assert\NotBlank(message="Zvolte prosim platbu")
     */
    private $payment;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Delivery", inversedBy="orders")
     * @Assert\NotBlank(message="Zvolte prosim metodu dorucenia")
     */
    private $delivery;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderProduct", mappedBy="orderr")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getNameAndSurname(): ?string
    {
        return $this->nameAndSurname;
    }

    public function setNameAndSurname(?string $nameAndSurname): self
    {
        $this->nameAndSurname = $nameAndSurname;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    public function setPayment(?Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getDelivery(): ?Delivery
    {
        return $this->delivery;
    }

    public function setDelivery(?Delivery $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return Collection|OrderProduct[]
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(OrderProduct $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setOrderr($this);
        }

        return $this;
    }

    public function removeProduct(OrderProduct $product): self
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
            // set the owning side to null (unless already changed)
            if ($product->getOrderr() === $this) {
                $product->setOrderr(null);
            }
        }

        return $this;
    }


    public function updateTotalPrice(): void
    {
        $this->totalPrice = 0;

        foreach ($this->products as $product) {
            $this->totalPrice += $product->getAmount() * $product->getUnitPrice();
        }

        if ($this->delivery !== null) {
            $this->totalPrice += $this->delivery->getPrice();
        }

        if ($this->payment !== null) {
            $this->totalPrice += $this->payment->getPrice();
        }
    }

}
