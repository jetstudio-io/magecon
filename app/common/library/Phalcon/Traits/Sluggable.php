<?php
namespace Phalcon\Traits;

use Phalcon\Utils\Slug as TextSlug;

trait Sluggable {
    /**
     *
     */
    public function beforeCreate() {
        if (!empty($this->title)) {
            if (empty($this->identifier)) {
                TextSlug::generate($this->title);
            }
        }
    }
}