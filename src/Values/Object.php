<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidObjectType;

/**
 * Class Object
 * @package ChrisHalbert\Json\Values
 */
class Object extends AbstractValue
{
    /**
     * Object constructor.
     * @param mixed $obj Can be an object, array, or nothing if its any empty object.
     * @throws InvalidObjectType If the value is not an object or array
     */
    public function __construct($obj = null)
    {
        $this->value = array();

        if (!isset($obj)) {
            return $this;
        }

        if (!is_array($obj) && !is_object($obj)) {
            throw new InvalidObjectType($obj);
        }

        foreach ($obj as $key => $value) {
            $this->set($key, $value);
        }
    }

    /**
     * Sets an object's member.
     * @param string $name  The name of the member.
     * @param mixed  $value The value of the member.
     * @return void
     */
    public function set($name, $value)
    {
        switch (gettype($value)) {
            case "object":
                $this->value[$name] = new Object($value);
                break;
            case "array":
                $this->value[$name] = new Arr($value);
                if ($this->isAssociative($value)) {
                    $this->value[$name] = new Object($value);
                }

                break;
            case "integer":
            case "double":
            case "float":
                $this->value[$name] = new Number($value);
                break;
            case "string":
                $this->value[$name] = new Str($value);
                break;
            case "boolean":
                $this->value[$name] = new Boolean($value);
                break;
            default:
                break;
        }
    }

    /**
     * Gets an objects member.
     * @param string $name Key or member name of the object.
     * @return mixed Some type of an object.
     */
    public function get($name)
    {
        return isset($this->value[$name]) ? $this->value[$name] : new Nil();
    }

    /**
     * Get value override.
     * @return array
     */
    public function value()
    {
        $values = array();

        foreach ($this->value as $key => $value) {
            $values[$key] = $value->value();
        }

        return $values;
    }

    /**
     * Get json format.
     * @return string
     */
    public function json()
    {
        return json_encode($this->value());
    }

    /**
     * Get json format.
     * @return string
     */
    public function __toString()
    {
        return $this->json();
    }

    /**
     * Determines whether array is associative.
     * @param array $array
     * @return bool
     */
    private function isAssociative(array $array)
    {
        if (empty($array)) {
            return false;
        }

        return array_keys($array) !== range(0, count($array) - 1);
    }
}
