<?php
/**
 * Copyright (c) 2017  MageCon
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

/**
 * @author NGUYEN Van Thiep
 * Date: 07/04/2017
 * Time: 14:05
 */

namespace Magecon\Core\Configuration\Traits;


trait Loader {
    /**
     * Check if file name is match config patten Company_Module.{php|ini|json|yml}
     * @param $filename
     *
     * @return PhalconConfig|bool
     */
    protected function _isConfigFile($filename) {
        if (($match = preg_match("/^[0-9]*_[A-Z]([^_]*)_[A-Z]([^_]*)\.([^.]*)$/", $filename, $filepart))) {
            $extension = $filepart[3];
            if (!in_array($extension, self::ALLOW_EXTENSION)) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    protected function _getConfig($filePath) {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        switch ($extension) {
            case "php":
                return include $filePath;
                break;
            case 'ini':
                return new ConfigIni($filePath);
                break;
            case 'json':
                return new ConfigJson($filePath);
                break;
            case 'yml':
                return new ConfigYaml($filePath);
                break;
        }
    }
}