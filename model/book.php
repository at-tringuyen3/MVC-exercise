<?php
class Book
{
    private $id;
    private $name;
    private $author;
    private $price;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

	function __construct($id, $name, $author, $price)
	{
		$this->id = $id;
		$this->name = $name;
        $this->author = $author;
        $this->price = $price;
	}
    
}
?>