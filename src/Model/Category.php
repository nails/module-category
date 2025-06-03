<?php

/**
 * This model handles interactions with the "nails_category" table.
 *
 * @package    Nails
 * @subpackage module-category
 * @category   Model
 * @author     Nails Dev Team
 */

namespace Nails\Category\Model;

use Nails\Category\Constants;
use Nails\Cdn;
use Nails\Common\Model\Base;
use Nails\Common\Helper\Form;

/**
 * Class Category
 *
 * @package Nails\Category\Model
 */
class Category extends Base
{
    /**
     * The table this model represents
     *
     * @var string
     */
    const TABLE = NAILS_DB_PREFIX . 'category';

    /**
     * The name of the resource to use (as passed to \Nails\Factory::resource())
     *
     * @var string
     */
    const RESOURCE_NAME = 'Category';

    /**
     * The provider of the resource to use (as passed to \Nails\Factory::resource())
     *
     * @var string
     */
    const RESOURCE_PROVIDER = Constants::MODULE_SLUG;

    /**
     * Whether to automatically set slugs or not
     *
     * @var bool
     */
    const AUTO_SET_SLUG = true;

    const FIELD_CLASSES = [
        'thumb_id' => ['ModelFieldObject', Cdn\Constants::MODULE_SLUG],
        'cover_id' => ['ModelFieldObject', Cdn\Constants::MODULE_SLUG],
        'body'     => 'ModelFieldWysiwyg',
    ];

    // --------------------------------------------------------------------------

    /**
     * @inheritDoc
     */
    public function describeFields($sTable = null)
    {
        $aFields = parent::describeFields($sTable);

        $aFields['thumb_id']
            ->setLabel('Thumbnail');

        $aFields['cover_id']
            ->setLabel('Cover Image');

        $aFields['colour']
            ->setInfo('This should be a valid CSS colour value.');

        return $aFields;
    }
}
