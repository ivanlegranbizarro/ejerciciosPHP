<?php

/* Crea una clase Producto con propiedades como nombre, precio y cantidad.
Implementa métodos para calcular el valor total y mostrar la información del producto */

class Producto
{
    public function __construct(
        private string $nombre,
        private int|float  $precio,
        private int $cantidad
    ) {}

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio(): int|float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function mostrarValorTotal(): float|int
    {
        return $this->cantidad * $this->precio;
    }

    public function __toString(): string
    {
        return "Nombre del producto:{$this->nombre} \n Precio: {$this->precio}  \n Cantidad:{$this->cantidad}";
    }
}
