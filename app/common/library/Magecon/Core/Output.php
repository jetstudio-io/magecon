<?php
/**
 * Created by PhpStorm.
 * User: macosxvn
 * Date: 25/03/2017
 * Time: 09:06
 */

namespace Magecon\Core;


class Output {
    protected $_foregroundColors = array();
    protected $_backgroundColors = array();

    public function __construct() {
        // Set up shell colors
        $this->_foregroundColors['black'] = '0;30';
        $this->_foregroundColors['dark_gray'] = '1;30';
        $this->_foregroundColors['blue'] = '0;34';
        $this->_foregroundColors['light_blue'] = '1;34';
        $this->_foregroundColors['green'] = '0;32';
        $this->_foregroundColors['light_green'] = '1;32';
        $this->_foregroundColors['cyan'] = '0;36';
        $this->_foregroundColors['light_cyan'] = '1;36';
        $this->_foregroundColors['red'] = '0;31';
        $this->_foregroundColors['light_red'] = '1;31';
        $this->_foregroundColors['purple'] = '0;35';
        $this->_foregroundColors['light_purple'] = '1;35';
        $this->_foregroundColors['brown'] = '0;33';
        $this->_foregroundColors['yellow'] = '1;33';
        $this->_foregroundColors['light_gray'] = '0;37';
        $this->_foregroundColors['white'] = '1;37';

        $this->_backgroundColors['black'] = '40';
        $this->_backgroundColors['red'] = '41';
        $this->_backgroundColors['green'] = '42';
        $this->_backgroundColors['yellow'] = '43';
        $this->_backgroundColors['blue'] = '44';
        $this->_backgroundColors['magenta'] = '45';
        $this->_backgroundColors['cyan'] = '46';
        $this->_backgroundColors['light_gray'] = '47';
    }

    /**
     * @param string $inputString
     * @param string $foregroundColor
     * @param string $backgroundColor
     * @return string
     */
    public function textColor($inputString, $foregroundColor = null, $backgroundColor = null) {
        $coloredString = "";

        // Check if given foreground color found
        if (isset($this->_foregroundColors[$foregroundColor])) {
            $coloredString .= "\033[" . $this->_foregroundColors[$foregroundColor] . "m";
        }
        // Check if given background color found
        if (isset($this->_backgroundColors[$backgroundColor])) {
            $coloredString .= "\033[" . $this->_backgroundColors[$backgroundColor] . "m";
        }

        // Add string and end coloring
        $coloredString .=  $inputString . "\033[0m";

        return $coloredString;
    }

    // Returns all foreground color names
    public function getForegroundColors() {
        return array_keys($this->_foregroundColors);
    }

    // Returns all background color names
    public function getBackgroundColors() {
        return array_keys($this->_backgroundColors);
    }

    public function print($inputString) {
        fwrite(STDOUT, $this->_analyseColor($inputString));
    }

    public function println($inputString) {
        fwrite(STDOUT, $this->_analyseColor($inputString) . "\n");
    }

    protected function _analyseColor($inputString) {
        if (preg_match_all("/<color (.*?)>(.*?)<\/color>/", $inputString, $output)) {
            foreach ($output[0] as $idx => $rawString) {
                $inputString = str_replace($rawString, $this->textColor($output[2][$idx], $output[1][$idx]), $inputString);
            }
        }
        return $inputString;
    }
}