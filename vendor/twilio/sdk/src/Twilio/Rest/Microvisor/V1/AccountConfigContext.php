<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Microvisor
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Microvisor\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class AccountConfigContext extends InstanceContext
    {
    /**
     * Initialize the AccountConfigContext
     *
     * @param Version $version Version that contains the resource
     * @param string $key The config key; up to 100 characters.
     */
    public function __construct(
        Version $version,
        $key
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'key' =>
            $key,
        ];

        $this->uri = '/Configs/' . \rawurlencode($key)
        .'';
    }

    /**
     * Delete the AccountConfigInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the AccountConfigInstance
     *
     * @return AccountConfigInstance Fetched AccountConfigInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AccountConfigInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new AccountConfigInstance(
            $this->version,
            $payload,
            $this->solution['key']
        );
    }


    /**
     * Update the AccountConfigInstance
     *
     * @param string $value The config value; up to 4096 characters.
     * @return AccountConfigInstance Updated AccountConfigInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $value): AccountConfigInstance
    {

        $data = Values::of([
            'Value' =>
                $value,
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new AccountConfigInstance(
            $this->version,
            $payload,
            $this->solution['key']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Microvisor.V1.AccountConfigContext ' . \implode(' ', $context) . ']';
    }
}
