<?php


namespace App\ShoppingCart;




class ShoppingCartItem
{
    private $productId;

    private $quantity;

    private $price;



    public function __construct(int $productId, int $quantity, int $price)
    {

        $this->productId = $productId;

        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    public function getItemAmount()
    {
        return $this->price * $this->quantity;
    }

}