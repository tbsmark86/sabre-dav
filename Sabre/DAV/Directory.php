<?php

    require_once 'Sabre/DAV/Exception.php'; 
    require_once 'Sabre/DAV/IDirectory.php';
    require_once 'Sabre/DAV/Node.php';

    /**
     * Directory class
     *
     * This is a helper class, that should aid in getting directory classes setup.
     * Most of its methods are implemented, and throw permission denied exceptions 
     * 
     * @package Sabre
     * @subpackage DAV
     * @version $Id$
     * @copyright Copyright (C) 2007, 2008 Rooftop Solutions. All rights reserved.
     * @author Evert Pot (http://www.rooftopsolutions.nl/) 
     * @license licence http://www.freebsd.org/copyright/license.html  BSD License (4 Clause)
     */
    abstract class Sabre_DAV_Directory extends Sabre_DAV_Node implements Sabre_DAV_IDirectory {

        /**
         * Returns a child object, by its name.
         *
         * This method makes use of the getChildren method to grab all the child nodes, and compares the name. 
         * Generally its wise to override this, as this can usually be optimized
         * 
         * @param string $name
         * @throws Sabre_DAV_FileNotFoundException
         * @return Sabre_DAV_INode 
         */
        public function getChild($name) {

            foreach($this->getChildren() as $child) {

                if ($child->getName()==$name) return $child;

            }
            throw new Sabre_DAV_FileNotFoundException('File not found');

        }

        /**
         * Creates a new file in the directory 
         * 
         * @param string $name Name of the file 
         * @param string $data Initial payload 
         * @throws Sabre_DAV_PermissionDeniedException
         * @return void
         */
        public function createFile($name, $data = null) {

            throw new Sabre_DAV_PermissionDeniedException('Permission denied to create file');

        }

        /**
         * Creates a new subdirectory 
         * 
         * @param string $name 
         * @throws Sabre_DAV_PermissonDeniedException
         * @return void
         */
        public function createDirectory($name) {

            throw new Sabre_DAV_PermissionDeniedException('Permission denied to create directory');

        }


    }

?>
