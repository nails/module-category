<?php

/**
 * This reosurce represents a single category
 *
 * @package    Nails
 * @subpackage module-category
 * @category   Resource
 * @author     Nails Dev Team
 */

namespace Nails\Category\Resource;

use Nails\Common\Resource\Entity;

/**
 * Class Category
 *
 * @package Nails\Category\Resource
 */
class Category extends Entity
{
    /** @var string */
    public $slug;

    /** @var string */
    public $label;

    /** @var string */
    public $excerpt;

    /** @var int */
    public $thumb_id;

    /** @var int */
    public $cover_id;

    /** @var string */
    public $colour;

    /** @var string */
    public $body;
}
