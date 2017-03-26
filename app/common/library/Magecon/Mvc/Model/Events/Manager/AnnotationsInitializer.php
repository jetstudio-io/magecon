<?php
/**
 * Copyright (c) 2017 MageCon
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Magecon\Mvc\Model\Events\Manager;

use Phalcon\Events\Event,
	Phalcon\Mvc\Model\Manager as ModelsManager;
use Phalcon\Mvc\User\Plugin;

class AnnotationsInitializer extends Plugin
{

    /**
     * This is called after initialize the model
     *
     * @param Event $event
     * @param ModelsManager $manager
     * @param $model
     */
	public function afterInitialize(Event $event, ModelsManager $manager, $model)
	{

		//Reflector
		$reflector = $this->annotations->get($model);

		/**
		 * Read the annotations in the class' docblock
		 */
		$annotations = $reflector->getClassAnnotations();
		if ($annotations) {

			/**
			 * Traverse the annotations
			 */
			foreach ($annotations as $annotation) {
				switch ($annotation->getName()) {

					/**
					 * Initializes the model's source
					 */
					case 'Source':
						$arguments = $annotation->getArguments();
						$manager->setModelSource($model, $arguments[0]);
						break;

					/**
					 * Initializes Has-Many relations
					 */
					case 'HasMany':
						$arguments = $annotation->getArguments();
						$manager->addHasMany($model, $arguments[0], $arguments[1], $arguments[2]);
						break;

					/**
					 * Initializes Has-Many relations
					 */
					case 'BelongsTo':
						$arguments = $annotation->getArguments();
						if (isset($arguments[3])) {
							$manager->addBelongsTo($model, $arguments[0], $arguments[1], $arguments[2], $arguments[3]);
						} else {
							$manager->addBelongsTo($model, $arguments[0], $arguments[1], $arguments[2]);
						}
						break;

				}
			}
		}

	}

}