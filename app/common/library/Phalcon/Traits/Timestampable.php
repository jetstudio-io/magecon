<?php
namespace Phalcon\Traits;

trait Timestampable {

    /**
     *
     */
    public function beforeCreate() {
        $this->createdAt = date("r");
    }

    /**
     *
     */
    public function beforeUpdate() {
        $this->updatedAt = date("r");
    }
}