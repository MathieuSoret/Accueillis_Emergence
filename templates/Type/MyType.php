<?php
namespace My\Project\Types;

use Doctrine \DBAL \Types \Type;
use Doctrine \DBAL \Platforms \AbstractPlatform;
use Doctrine \DBAL \Platforms \MySQL57Platform;

/**
 * My custom datatype.
 */
class MyType extends Type
{
    const MYTYPE = 'mytype'; // modify to match your type name

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        // return the SQL used to create your column type. To create a portable column type, use the $platform.
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        // This is executed when the value is read from the database. Make your conversions here, optionally using the $platform.
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        // This is executed when the value is written to the database. Make your conversions here, optionally using the $platform.
    }

    public function getName()
    {
        return self::MYTYPE; // modify to match your constant name
    }
}