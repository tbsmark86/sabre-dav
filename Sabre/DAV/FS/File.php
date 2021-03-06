<?php

    require_once 'Sabre/DAV/FS/Node.php';
    require_once 'Sabre/DAV/IFile.php';

    /**
     * File class 
     * 
     * @package Sabre
     * @subpackage DAV
     * @version $Id$
     * @copyright Copyright (C) 2007, 2008 Rooftop Solutions. All rights reserved.
     * @author Evert Pot (http://www.rooftopsolutions.nl/) 
     * @license licence http://www.freebsd.org/copyright/license.html  BSD License (4 Clause)
     */
    class Sabre_DAV_FS_File extends Sabre_DAV_FS_Node implements Sabre_DAV_IFile {

        /**
         * Updates the data 
         * 
         * @param string $data 
         * @return void 
         */
        public function put($data) {

            file_put_contents($this->path,$data);

        }

        /**
         * Returns the data 
         * 
         * @return string 
         */
        public function get() {

            return file_get_contents($this->path);

        }

        /**
         * Delete the current file
         *
         * @return void 
         */
        public function delete() {

            unlink($this->path);

        }

    }

?>
