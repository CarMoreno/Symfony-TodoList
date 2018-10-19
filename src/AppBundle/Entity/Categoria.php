<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entidad Categoria
 * @author: Carlos Andrés Moreno Vélez
 * 
 * Entidad que representa a una Categoría. (Plain object PHP)
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaRepository")
 */
class Categoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *@Assert\Regex(
     *     pattern="/^[\w]+$/",
     *     match=false,
     *     message="Utiliza solo letras y números"
     * )
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *@Assert\Regex(
     *     pattern="/^[\w]+$/",
     *     match=false,
     *     message="Utiliza solo letras y números"
     * )
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="categoria")
     */
    private $tareas;
    

    public function __construct()
    {
        $this->tareas = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Categoria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Este método hace parte de los metodos especiales de php, lo que hacemos es reescribirlo
     * para mostrar una representacion como string de esta clase, este label se usará posteriormente
     * en los nombres de la lista desplegable en el formulario de tareas.
     * 
    */
    public function __toString(){
        return $this->nombre;
    }

}

