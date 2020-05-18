<?php

namespace PullRequestInc\sendwithus;

use sendwithus\API;

class Client
{
    private $api;
    private $options;
    private $mode;

    /**
     * Client constructor.
     * @param array $options Sendwith us configuration array
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        $this->mode = $options['default_api_key'];
        $this->api = $this->getClient();
    }

    /**
     * Magic function to pass all handled methods to sendwithus/API
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array(array($this->api, $name), $arguments);
    }

    /**
     * Handler to create the api call
     *
     * @return API
     */
    public function getClient()
    {
        return $this->api = new API($this->options['api_key_' . $this->mode], $this->options['options']);
    }

    /**
     * Changes mode to testing key from configuration
     *
     * @return API
     */
    public function testing()
    {
        $this->setMode('testing');
        return $this->getClient();
    }

    /**
     * Changes mode to production key from configuration
     *
     * @return API
     */
    public function production()
    {
        $this->setMode('production');
        return $this->getClient();
    }

    /**
     * Changes mode from production or testing
     *
     * @param $mode
     * @return bool
     */
    public function setMode($mode)
    {
        if ($mode === 'production' || $mode === 'testing') {
            $this->mode = $mode;
            return true;
        }

        return false;
    }

    /**
     * Public get method for current mode
     *
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }
}
