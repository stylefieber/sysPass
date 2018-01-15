<?php
/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      http://syspass.org
 * @copyright 2012-2018, Rubén Domínguez nuxsmin@$syspass.org
 *
 * This file is part of sysPass.
 *
 * sysPass is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * sysPass is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 *  along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace SP\Services\Tag;

use SP\Core\Traits\InjectableTrait;
use SP\Repositories\Tag\TagRepository;
use SP\Services\ServiceItemTrait;

/**
 * Class TagService
 *
 * @package SP\Services\Tag
 */
class TagService
{
    use InjectableTrait;
    use ServiceItemTrait;

    /**
     * @var TagRepository
     */
    protected $tagRepository;


    /**
     * TagService constructor.
     */
    public function __construct()
    {
        $this->tagRepository = new TagRepository();
    }


    /**
     * Returns all the items mapping fields for a select type element (id and name fields)
     */
    public function getAllItemsForSelect()
    {
        return $this->getItemsForSelect($this->tagRepository);
    }
}