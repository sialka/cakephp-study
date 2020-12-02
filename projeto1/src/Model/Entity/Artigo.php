<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artigo Entity
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $conteudo
 * @property int|null $cats_artigo_id
 * @property string|null $slug
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CatsArtigo $cats_artigo
 */
class Artigo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'conteudo' => true,
        'cats_artigo_id' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'cats_artigo' => true,
    ];
}
