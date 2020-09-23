<?php
class AddressManager
{
    private $addresses = ["209.131.36.159", "216.58.213.174"];
    // public function outputAddresses($resolve)           #1
    // {
    //     foreach ($this->addresses as $address) {
    //         print $address;
    //         if ($resolve) {
    //             print " (" . gethostbyaddr($address) . ")";
    //         }
    //         print "<br />\n";
    //     }
    // }

    public function outputAddresses($resolve)
    {
        if (is_string($resolve)) {
            $resolve = (preg_match("/A(false|no|off)$/i", $resolve))
                ? false : true;
        }
        // ...
    }
}
$settings = simplexml_load_file(__DIR__ . "/resolve.xml");
$manager = new AddressManager();
$manager->outputAddresses((string) $settings->resolvedomains);
