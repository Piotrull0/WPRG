<?php
class Product {
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct(string $name, float $price, int $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string { return $this->name; }
    public function getPrice(): float { return $this->price; }
    public function getQuantity(): int { return $this->quantity; }

    public function setName(string $name): void { $this->name = $name; }
    public function setPrice(float $price): void { $this->price = $price; }
    public function setQuantity(int $quantity): void { $this->quantity = $quantity; }

    public function __toString(): string {
        return "Product: {$this->name}, Price: {$this->price}, Quantity: {$this->quantity}";
    }
}

class Cart {
    private array $products;

    public function __construct() {
        $this->products = [];
    }

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void {
        foreach ($this->products as $key => $p) {
            if ($p->getName() === $product->getName()) {
                unset($this->products[$key]);
                break;
            }
        }
        $this->products = array_values($this->products);
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->products as $p) {
            $total += $p->getPrice() * $p->getQuantity();
        }
        return $total;
    }

    public function __toString(): string {
        $output = "Products in cart:\n";
        foreach ($this->products as $p) {
            $output .= $p . "\n";
        }
        $output .= "Total price: " . $this->getTotal();
        return $output;
    }
}

$p1 = new Product("Laptop", 1500, 1);
$p2 = new Product("Mouse", 50, 2);

$cart = new Cart();
$cart->addProduct($p1);
$cart->addProduct($p2);

echo $cart;
?>