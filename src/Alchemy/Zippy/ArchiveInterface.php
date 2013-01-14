<?php

/*
 * This file is part of Zippy.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Zippy;

use Alchemy\Zippy\Exception\InvalidArgumentException;
use Alchemy\Zippy\Exception\RuntimeException;

interface ArchiveInterface
{
    /**
     * Gets the location of the archive
     *
     * @return String
     */
    public function getLocation();

    /**
     * Adds a file or a folder into the archive
     *
     * @param String|Array|\SplFileInfo $sources   The path to the file or a folder
     * @param Boolean                   $recursive Recurse into directories
     *
     * @return ArchiveInterface
     *
     * @throws InvalidArgumentException In case the provided source path is not valid
     * @throws RuntimeException         In case of failure
     */
    public function addMembers($sources, $recursive = true);

    /**
     * Removes a file from the archive
     *
     * @param String|Array $sources The path to an archive or a folder member
     *
     * @return ArchiveInterface
     *
     * @throws RuntimeException In case of failure
     */
    public function removeMembers($sources);

    /**
     * Lists files and directories archive members
     *
     * @return Array An array of File
     *
     * @throws RuntimeException In case archive could not be read
     */
    public function getMembers();

    /**
     * @inheritdoc
     */
    public function count();
}
