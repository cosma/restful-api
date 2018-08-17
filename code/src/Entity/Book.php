<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * A book.
 *
 * @ORM\Entity
 * @ApiResource(
 *     collectionOperations = {
 *          "get" = {},
 *          "post" = {"normalization_context"={"groups"={"modify"}},"denormalization_context"={"groups"={"modify"}}},
 *     },
 *     itemOperations = {
 *          "get" = {},
 *          "put" = {"normalization_context"={"groups"={"modify"}},"denormalization_context"={"groups"={"modify"}}},
 *          "delete" = {},
 *     },
 * )
 */
class Book
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"modify"})
     */
    private $id;

    /**
     * @var string|null The ISBN of this book (or null if doesn't have one).
     *
     * @ORM\Column(nullable=true)
     * @Assert\Isbn
     * @Groups({"modify"})
     */
    public $isbn;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column
     * @Assert\NotBlank
     * @Groups({"modify"})
     */
    public $title;

    /**
     * @var string The description of this book.
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Groups({"modify"})
     */
    public $description;

    /**
     * @var string The author of this book.
     *
     * @ORM\Column
     * @Assert\NotBlank
     * @Groups({"modify"})
     */
    public $author;

    /**
     * @var \DateTimeInterface The publication date of this book.
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotNull
     */
    public $publicationDate;

    /**
     * @var Review[] Available reviews for this book.
     * @ORM\OneToMany(targetEntity="Review", mappedBy="book")
     *
     */
    public $reviews;

    public function __construct() {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}