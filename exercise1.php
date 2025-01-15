<?php
/*
 * INSTRUCTIONS:
 * Create a Game class with the following protected properties:
 * - name
 * - editor
 * - price
 * Add the getters and setters for each property.
 * Below the class, instantiate a Game and display its information.
*/
class Game
{
    protected string $name;
    protected string $editor;
    protected float $price;

    public function __construct(string $name, string $editor, float $price)
    {

        $this->setName($name);
        $this->setEditor($editor);
        $this->setPrice($price);
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of editor
     */
    public function getEditor(): string
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     */
    public function setEditor(string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
$Game1 = new Game("clash of clans", "Supercell", 100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Games</h1>
    <article>
        <h2><?= $Game1->getName() ?></h2>
        <h3>Editor: <?= $Game1->getEditor() ?> </h3>
        <h3>Price : <?= $Game1->getPrice() ?> $</h3>
</body>

</html>