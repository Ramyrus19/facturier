<?php
//@ORM\Entity 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;

/**
 * Feature
 * 
 * @ORM\Entity
 * @ORM\Table(name="feature")
 *  
 */
class Feature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;
    
        
    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="features")
     * 
     */
    private $products;
    
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="FeatureName")
     * 
     */
    private $name;     

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string")
     * 
     */
    private $value;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     */
    private $datCre;
 
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_upd", type="datetime")
     */
    private $datUpd;    
 
}