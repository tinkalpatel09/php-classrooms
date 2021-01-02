<?php


namespace App\ShoppingCart;


use App\ShoppingCart\ShoppingCartItem;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ShoppingCart
{
    private $items = [];
    private $session;


    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
        $this->items = $session->get('shopping_cart');
    }

    /**
     * Добавление единицы заказа в корзину.
     * @param $productId
     * @param $quantity
     * @param $price
     */
    public function addItem($productId, $quantity, $price)
    {
        $item = new ShoppingCartItem($productId, $quantity, $price);
        $this->items[] = $item;
        $this->setItems();
    }

    /**
     * Получение всех единиц заказа из корзины
     * @return mixed
     */
    public function getItems()
    {
        return(!is_null($this->items ))? $this->items : false;
    }

    /**
     * Очистка корзины от единиц заказа. Опустошение.
     */
    public function cleanCart()
    {
        $this->items = [];
        $this->setItems();
    }

    /**
     * Вставлка всех единиц заказа в карзину
     */
    private function setItems()
    {
        $this->session->set('shopping_cart', $this->items);
    }


    /**
     * Получение суммы всех цен, всех единиц в корзине.
     * Общаяя стоимость заказа
     * @return int
     */
    public function getCartAmount()
    {
        $amount = 0;
        if($this->getItems()) {
            foreach ($this->items as $item) {
                $amount += $item->getItemAmount();
            }
        }
        return $amount;
    }

    /**
     * Получение количества единиц. Например, для использование в верхнем навбаре.
     * @return int
     */
    public function getItemsQuantity()
    {
        $amount = 0;

        if($this->getItems()){
            foreach ($this->items as $item){
                $amount += $item->getQuantity();
            }
        }

        return $amount;
    }



}