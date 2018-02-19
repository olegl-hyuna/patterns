<?php

abstract class ApptEncoder
{
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder {
    function encode()
    {
        return 'Data is in format BloggsCal' . "\n";
    }
}

class MegaApptEncoder extends ApptEncoder {
    function encode()
    {
        return 'Data is in format MegaCal' . "\n";
    }
}

abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {
    function getHeaderText()
    {
        return 'BloggsCal header';
    }

    function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    function getFooterText()
    {
        return 'BloggsCal footer';
    }
}

class MegaCommsManager extends CommsManager {
    function getHeaderText()
    {
        return 'MegaCal header';
    }

    function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    function getFooterText()
    {
        return 'MegaCal footer';
    }
}

$comms = new BloggsCommsManager();
$apptEncoder = $comms->getApptEncoder();
print $apptEncoder->encode();

$comms = new MegaCommsManager();
$apptEncoder = $comms->getApptEncoder();
print $apptEncoder->encode();
