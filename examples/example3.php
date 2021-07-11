<?php

trait ExampleTrait
{
    public static function getExample(string $example, ?StdClass $class = null): ?int
    {
        return $class instanceof StdClass
            ? 42
            : -1;
    }
}

trait OtherExampleTrait
{
    public function stub(): void
    {
        // empty
    }
}

interface ExampleInterface extends
    Throwable,
    ArrayAccess
{
    public static function getExample(string $example, ?StdClass $class = null): ?int;
}

class ExtendedAndImplementedClass extends StdClass implements
    ExampleInterface,
    Serializable
{
    use ExampleTrait;
    use OtherExampleTrait;

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        // TODO: Implement getMessage() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        // TODO: Implement getCode() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getFile()
    {
        // TODO: Implement getFile() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getLine()
    {
        // TODO: Implement getLine() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getTrace()
    {
        // TODO: Implement getTrace() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getTraceAsString()
    {
        // TODO: Implement getTraceAsString() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getPrevious()
    {
        // TODO: Implement getPrevious() method.
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}
