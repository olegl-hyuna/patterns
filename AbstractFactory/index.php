<?php

abstract class AppEncoder {
    abstract function encode(): string;
}

abstract class TtdEncoder {
    abstract function encode(): string;
}

abstract class ContactEncoder {
    abstract function encode(): string;
}

abstract class CommsManager {
    abstract function getHeaderText(): string;
    abstract function getApptEncoder(): ApptEncoder;
    abstract function getTtdEncoder(): TtdEncoder;
    abstract function getContactEncoder(): ContactEncoder;
    abstract function getFooterText(): string;
}

class BloggsApptEncoder extends ApptEncoder {
    function encode(): string
    {
        return 'Appt data is in format BloggsCal';
    }
}

class BloggsTtdEncoder extends TtdEncoder {
    function encode(): string
    {
        return 'Ttd data is in format BloggsCal';
    }
}

class BloggsContactEncoder extends ContactEncoder {
    function encode(): string
    {
        return 'Contact data is in format BloggsCal';
    }
}

class MegaApptEncoder extends ApptEncoder {
    function encode(): string
    {
        return 'Appt data is in format MegaCal';
    }
}

class MegaTtdEncoder extends TtdEncoder {
    function encode(): string
    {
        return 'Ttd data is in format MegaCal';
    }
}

class MegaContactEncoder extends ContactEncoder {
    function encode(): string
    {
        return 'Contact data is in format MegaCal';
    }
}

class BloggsCommsManager extends CommsManager {
    function getHeaderText(): string
    {
        return 'BloggsCal header';
    }

    function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdEncoder();
    }

    function getContactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }

    function getFooterText(): string
    {
        return 'BloggsCal footer';
    }
}

class MegaCommsManager extends CommsManager {
    function getHeaderText(): string
    {
        return 'MegaCal header';
    }

    function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    function getTtdEncoder(): TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    function getContactEncoder(): ContactEncoder
    {
        return new MegaContactEncoder();
    }

    function getFooterText(): string
    {
        return 'MegaCal footer';
    }
}
