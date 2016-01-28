<?php
namespace KkuetNet\PrestashopWebServiceBundle\Services;

class PrestashopWebService
{
    private $instance   = null;

    /**
     * Default loaded parameters
     *
     * @var array
     */
    private $parameters;

    /**
     * Constructor
     *
     * @param string $website
     * @param string $key
     * @param boolean $debug
     */
    public function __construct($website, $key, $debug)
    {
        $this->parameters = array(
            'website' => $website,
            'key'     => $key,
            'debug'   => $debug
        );
    }

    public function getInstance()
    {
        if (is_null($this->instance))
        {
            $this->instance =  new \PrestaShopWebservice(
                $this->parameters['website'],
                $this->parameters['key'],
                $this->parameters['debug']
            );
        }
        return $this->instance;
    }

    public function personalInstance($websiteurl, $websitekey, $debug)
    {
        if (is_null($this->instance))
        {
            $this->instance =  new \PrestaShopWebservice(
                $websiteurl,
                $websitekey,
                $debug
            );
        }
        return $this->instance;
    }
}
